<?php

namespace App\Form;

use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use App\Entity\Mmatch;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class MmatchformType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('team1name')
            ->add('team2name')
            ->add('teamwiner')
            ->add('game', ChoiceType::class, [
                'choices' => [
                    'league of legend' => 'league of legend',
                    'Dota' => 'Dota',
                    'Fifa' => 'Fifa',
                ],
            ])
            ->add('matchtime')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Mmatch::class,
        ]);
    }
}
