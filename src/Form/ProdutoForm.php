<?php
namespace App\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\File;

use App\Entity\Unidade;
use App\Entity\Produto;

class ProdutoForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nome', TextType::class)
            ->add('descricao', TextareaType::class, ['label' => 'Descrição'])
            ->add('preco_unitario', MoneyType::class, ['label' => 'Preço unitário'])
            ->add('stock', NumberType::class)
            ->add('foto', FileType::class, [
                'mapped' => false, 'required' => false,
                'constraints' => [
                    new File(['mimeTypes' => ['image/*']])
                ],
            ])
            ->add('unidade', EntityType::class, [
                'class' => Unidade::class,
                'choice_label' => 'nome',
                'multiple' => false,
                'expanded' => true,
            ])
            ->add('btn_submit', SubmitType::class, ['label' => 'Registar']);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['data_class' => Produto::class]);
    }
}