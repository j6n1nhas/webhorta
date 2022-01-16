<?php
namespace App\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use App\Entity\User;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Regex;

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
            ->add('localidade', TextType::class, ['required' => false])
            ->add('password', PasswordType::class, ['constraints' => [new Length(min: 6)],])
            ->add('password2', PasswordType::class, [
                'mapped' => false,
                'label' => 'Confirmação da password',
                'constraints' => [
                    new Length(min: 6),
                ],
            ])
            ->addEventListener(FormEvents::PRE_SUBMIT, [$this, 'onPreSubmitData']);
    }

    public function onPreSubmitData(FormEvent $event): void
    {
        $user = $event->getData();
        $form = $event->getForm();
        if(!$user)
            return;
        if(!(isset($user['nome_proprio'])))
            $form->remove('nome_proprio');
        if(!(isset($user['nome_apelido'])))
            $form->remove('nome_apelido');
        if(!(isset($user['email'])))
            $form->remove('email');
        if(!(isset($user['morada'])))
            $form->remove('morada');
        if(!(isset($user['cod_postal'])))
            $form->remove('cod_postal');
        if(!(isset($user['localidade'])))
            $form->remove('localidade');
        if(!(isset($user['password'])))
            $form->remove('password');
        if(!(isset($user['password2'])))
            $form->remove('password2');
        $event->setData($user);
        $form->setData($user);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['data_class' => User::class]);
    }

    public function finishView(FormView $view, FormInterface $form, array $options)
    {
        foreach($form->getData() as $field => $value)
        {
            if($field->isDisabled() && $value === null)
                $form->remove($field);
        }
        return $form;
    }
}