<?php

namespace App\Controller;

use App\Entity\CoverLetterTemplate;
use App\Form\CoverLetterTemplateType;
use Doctrine\Common\Persistence\ObjectManager;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CoverLetterController extends AbstractController
{
    /**
     * @Route("/", name="cover_letter_home")
     */
    public function index(Request $request, ObjectManager $manager)
    {
        $coverLetterTemplate = new CoverLetterTemplate();

        $form = $this->createForm(CoverLetterTemplateType::class, $coverLetterTemplate);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $coverLetterTemplate->setCreatedAt(new \DateTime());
            $coverLetterTemplate->setToken(str_shuffle("qersgvecrdqswgdfv684168541"));

            $manager->persist($coverLetterTemplate);
            $manager->flush();

            return $this->redirectToRoute("cover_letter_pdf", ["token" => $coverLetterTemplate->getToken()]);
        }

        return $this->render('cover_letter/index.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/mon-pdf/{token}", name="cover_letter_pdf")
     */
    public function pdf($token, CoverLetterTemplate $pdf)
    {
        $options = new Options();

        $dompdf = new Dompdf($options);

        $html = $this->renderView(
            'template/pdfTemplate.html.twig',
            array('pdf' => $pdf)
        );

        $dompdf->loadHtml($html);

        $dompdf->render();

        return new Response($dompdf->stream());
    }
}
