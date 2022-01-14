<?php
namespace App\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use App\Entity\Produto;
use App\Entity\Unidade;
use Doctrine\DBAL\Driver\Mysqli\Initializer\Options;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class UnidadeForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nome', TextType::class)
        ->add('produtos', EntityType::class, [
            'class' => Produto::class,
            'choice_label' => 'nome',
            'multiple' => true,
            'expanded' => false,
        ])
        ->add('submit', SubmitType::class, ['label' => 'Registar']);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Unidade::class,
        ]);
    }
}
