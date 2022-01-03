<?php
namespace App\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\File;

use Symfony\Component\OptionsResolver\OptionsResolver;

use App\Entity\User;

class ContactForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nome_proprio', TextType::class, ['label' => 'Nome próprio'])
            ->add('nome_apelido', TextType::class, ['label' => 'Apelido'])
            ->add('tipo_contacto', ChoiceType::class, [
                'expanded' => true,
                'multiple' => true,
                'required' => true,
                'label' => 'Meio de contacto',
                'help' => 'Qual o seu contacto que nos quer fornecer?',
                'choices' => [
                    'Telefone' => 'telefone',
                    'E-mail' => 'email',
                ],
                'choice_attr' => [
                    'Telefone' => ['checked' => true,],
                    'E-mail' => ['checked' => true,],
                ],
            ])
            ->add('telefone', TelType::class, [
                'required' => true,
                'invalid_message' => 'O telefone é constituído por 9 dígitos',
                'constraints' => [
                    new Length(exactly: 9),
                    new Regex('/\d{9}/'),
                ],
                'attr' => [
                    'pattern' => '\d{9}',
                    'maxLength' => 9,
                    'minLength' => 9,
                ],
            ])
            ->add('email', EmailType::class, [
                'required' => true,
                ])
            ->add('anexo', FileType::class, [
                'required' => false,
                'multiple' => true,
                'invalid_message' => 'Só são permitidos ficheiros do tipo PDF ou DOCX',
                'help' => 'Ficheiros pdf ou docx',
                'label' => 'Anexo(s)',
            ])
            /*
            ->add('data_contacto', HiddenType::class, [
                'attr' => [
                    'value' => date('Y/m/d'),
                ],
            ])
            */
            ->add('data_contacto', DateType::class, [
                'input' => 'datetime_immutable',
                'widget' => 'single_text',
                'attr' => [
                    'hidden' => true,
                    'value' => $options['allowed_data_contacto'],
                ],
            ])
            #->add('utilizador', EntityType::class, ['class' => User::class, 'required' => false])
            ->add('mensagem', TextareaType::class, [
                'attr' => [
                    'cols' => 40,
                    'rows' => 5,
                ],
            ])
            ->add('btn_submit', SubmitType::class, [
                'label' => 'Contactar!',
                'attr' => [
                    'class' => 'btn btn-outline-success',
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'allowed_data_contacto' => date('Y-m-d'),
        ]);
    }
}
