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
            ]);
            if($options['registar'] == false)
                $builder->addEventListener(FormEvents::PRE_SUBMIT, [$this, 'onPreSubmitData']);
    }

    public function onPreSubmitData(FormEvent $event): void
    {
        $user = $event->getData();
        $form = $event->getForm();
        if(!$user)
            return;
        if(empty($user['nome_proprio']))
            $form->remove('nome_proprio');
        if(empty($user['nome_apelido']))
            $form->remove('nome_apelido');
        if(empty($user['email']))
            $form->remove('email');
        if(empty($user['morada']))
            $form->remove('morada');
        if(empty($user['cod_postal']))
            $form->remove('cod_postal');
        if(empty($user['localidade']))
            $form->remove('localidade');
        if(empty($user['password']))
        {
            $form->remove('password');
            $form->remove('password2');
        }
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['data_class' => User::class]);
        $resolver->setDefault('registar', true);
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