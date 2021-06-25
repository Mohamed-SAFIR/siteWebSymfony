<?php

namespace App\Form;

use App\Entity\Don;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;

class RegisterBanqType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',TextType::class,[
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            ->add('prenom',TextType::class,[
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            ->add('numeroCarte',IntegerType::class,[
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            ->add('dateExpiration',DateType::class,[
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            ->add('cryptogramme',IntegerType::class,[
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            ->add('montant',MoneyType::class,[
                "attr" => [
                    "class" => "form-control"
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Don::class,
        ]);
    }
}
