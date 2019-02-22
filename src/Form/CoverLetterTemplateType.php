<?php

namespace App\Form;

use App\Entity\CoverLetterTemplate;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CoverLetterTemplateType extends ApplicationType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'firstName',
                TextType::class,
                $this->getConfiguration("Prénom", "Antonin")
            )
            ->add(
                'lastName',
                TextType::class,
                $this->getConfiguration("Nom", "CoverLetters")
            )
            ->add(
                'address',
                TextType::class,
                $this->getConfiguration("Adresse", "85 rue des cover-letters")
            )
            ->add(
                'postalCode',
                NumberType::class,
                $this->getConfiguration("Code postal", "10400")
            )
            ->add(
                'city',
                TextType::class,
                $this->getConfiguration("Ville", "Paris")
            )
            ->add(
                'mobilePhone',
                TextType::class,
                $this->getConfiguration("Téléphone mobile", "06 78 51 49 83")
            )
            ->add(
                'email',
                EmailType::class,
                $this->getConfiguration("Adresse mail", "coverletter@gmail.com")
            )
            ->add(
                'recipientName',
                TextType::class,
                $this->getConfiguration("Nom de l'entreprise qui recruteur", "Agence X")
            )
            ->add(
                'recipientAddress',
                TextType::class,
                $this->getConfiguration("Adresse de l'entreprise", "45 avenue X")
            )
            ->add(
                'recipientPostalCode',
                NumberType::class,
                $this->getConfiguration("Code postal de l'entreprise", "25450")
            )
            ->add(
                'recipientCity',
                TextType::class,
                $this->getConfiguration("Ville de l'entreprise", "Lyon")
            )
            ->add(
                'object',
                TextType::class,
                $this->getConfiguration("Objet de la lettre", "Candidature pour un stage...")
            )
            ->add(
                'message',
                TextareaType::class,
                $this->getConfiguration("Votre message (pour faire un saut de ligne écrivez : <br> à la fin de votre phrase. Pour faire un espace après un paragraphe, écrivez : <br><br>.", "Madame, Monsieur, <br>")
            )
            ->add(
                'checkValid',
                CheckboxType::class,
                $this->getConfiguration("Acceptez les conditions générales d'utilisation disponible en bas de la page", false)
            )
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => CoverLetterTemplate::class,
        ]);
    }
}
