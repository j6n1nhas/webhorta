<?php
namespace App\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use App\Entity\User;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\IsTrue;

class SignupForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nome_proprio', TextType::class, ['label' => 'Nome próprio'])
            ->add('nome_apelido', TextType::class, ['label' => 'Apelido'])
            ->add('email', EmailType::class, [
                'help' => 'O seu username no site',
            ])
            ->add('morada', TextType::class, ['required' => false])
            ->add('cod_postal', TextType::class, [
                'label' => 'Código Postal',
                'required' => false,
                'constraints' => [
                    new Length(exactly: 8),
                    new Regex('/\d{4}-\d{3}/'),
                ],
            ])
            ->add('password', PasswordType::class, ['constraints' => [new Length(min: 6)],])
            ->add('password2', PasswordType::class, [
                'mapped' => false,
                'label' => 'Confirmação da password',
                'constraints' => [
                    new Length(min: 6),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['data_class' => User::class]);
    }
}