<?php
namespace App\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use App\Entity\User;


class SignupForm extends AbstractType
{
    public function builForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nome_proprio', TextType::class)
        ->add('nome_apelido', TextType::class)
        ->add('email', EmailType::class)
        ->add('morada', TextType::class)
        ->add('cod_postal', TextType::class)
        ->add('password1', PasswordType::class)
        ->add('password2', PasswordType::class)
        ->add('btn_submit', SubmitType::class, ['label' => 'Registar']);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults(['data_class' => User::class]);
    }
}