<?php
namespace App\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

use App\Entity\Produto;
use App\Entity\Carrinho;
use App\Entity\User;
use App\Entity\CarrinhoProduto;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class CarrinhoForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        if(isset($options['estados']) && $options['estados'] == 1)
        {
            $builder
                ->add('estado', ChoiceType::class, [
                    'choices' => $options['options'],
                    'multiple' => false,
                    'expanded' => false,
                ])
                ->add('btn_submit', SubmitType::class, [
                    'label' => isset($options['label']) ? $options['label'] : 'Registar']
                );
        }
        else
        {
            $builder
                ->add('data_compra', DateType::class)
                ->add('user', EntityType::class, [
                    'class' => User::class,
                    'choice_label' => 'email',
                    'multiple' => false,
                    'expanded' => false,
                    'label' => 'Utilizador',
                    ])
                ->add('valor_total', MoneyType::class)
                ->add('carrinho_produto', EntityType::class, [
                    'class' => CarrinhoProduto::class,
                    'choice_label' => 'produto',
                    'multiple' => true,
                    'expanded' => false,
                    'label' => 'Produtos',
                ])
                ->add('estado', ChoiceType::class, [
                    'choices' => $options['options'],
                ])
                ->add('btn_submit', SubmitType::class, [
                    'label' => isset($options['label']) ? $options['label'] : 'Registar']
                );
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $state_options = array(
            'Aprovado' => 'Aprovado',
            'Pendente' => 'Pendente',
            'Entregue' => 'Entregue',
            'Cancelado' => 'Cancelado',
        );
        $resolver->setDefaults([
            'data_class' => Carrinho::class,
            'options' => $state_options,
            'estados' => false,
        ]);
        $resolver->setAllowedTypes('estados', 'bool');
    }
}