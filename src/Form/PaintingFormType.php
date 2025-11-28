<?php

namespace App\Form;

use App\Entity\Painting;
use App\Entity\Category;
use App\Entity\Technique;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PaintingFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // 🖋️ Titre
            ->add('title', TextType::class, [
                'label' => 'Titre de l’œuvre',
                'attr' => [
                    'placeholder' => 'Ex : Coucher de soleil sur Douala',
                    'class' => 'form-control'
                ],
            ])

            // 📝 Description
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'required' => false,
                'attr' => [
                    'rows' => 4,
                    'placeholder' => 'Décrivez la peinture...',
                    'class' => 'form-control'
                ],
            ])

            // 📅 Date de création
            ->add('created', DateTimeType::class, [
                'label' => 'Date de création',
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control'],
            ])

            // 📏 Hauteur
            ->add('height', NumberType::class, [
                'label' => 'Hauteur (cm)',
                'required' => false,
                'attr' => [
                    'min' => 0,
                    'step' => 0.1,
                    'class' => 'form-control'
                ],
            ])

            // 📐 Largeur
            ->add('width', NumberType::class, [
                'label' => 'Largeur (cm)',
                'required' => false,
                'attr' => [
                    'min' => 0,
                    'step' => 0.1,
                    'class' => 'form-control'
                ],
            ])

            // 🖼️ Image
            ->add('image', FileType::class, [
                'label' => 'Image de l’œuvre',
                'mapped' => false, // on gère l’upload à la main
                'required' => false,
                'attr' => ['class' => 'form-control'],
            ])

            // 🎨 Catégorie (SELECT)
            ->add('idCategory', EntityType::class, [
                'class' => Category::class,
                'choice_label' => 'name', // adapte selon le champ de ta table Category
                'label' => 'Catégorie',
                'placeholder' => '-- Choisir une catégorie --',
                'attr' => ['class' => 'form-select'],
            ])

            // 🧰 Technique (SELECT)
            ->add('idTechnique', EntityType::class, [
                'class' => Technique::class,
                'choice_label' => 'name', // adapte selon le champ de ta table Technique
                'label' => 'Technique utilisée',
                'placeholder' => '-- Choisir une technique --',
                'attr' => ['class' => 'form-select'],
            ])

            // 👁️ Visibilité (checkbox)
            ->add('visible', CheckboxType::class, [
                'label' => 'Visible sur le site',
                'required' => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Painting::class,
        ]);
    }

    
}
