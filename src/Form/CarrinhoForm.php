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

class CarrinhoForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('data_compra', DateType::class)
            ->add('user', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'email',
                'multiple' => false,
                'expanded' => true,
                'label' => 'Utilizador',
                ])
            ->add('valor_total', MoneyType::class)
            ->add('carrinho_produto', EntityType::class, [
                'class' => CarrinhoProduto::class,
                'choice_label' => 'produto',
                'multiple' => true,
                'expanded' => true,
                'label' => 'Produtos',
            ])
            ->add('estado', TextType::class)
            ->add('btn_submit', SubmitType::class, ['label' => 'Registar']);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['data_class' => Carrinho::class]);
    }
}