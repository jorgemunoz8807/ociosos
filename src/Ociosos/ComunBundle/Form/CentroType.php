<?php

namespace Ociosos\ComunBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class CentroType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('siglas')
            ->add('direccion')
            ->add('telefono')
            ->add('email')
            ->add('director')
            ->add('rEEUP')
//            ->add('organizacion')
            ->add(
                'organizacion',
                'entity',
                array(
                    'label' => 'Organización',
                    'class' => 'Ociosos\ComunBundle\Entity\Organizacion',
                    'query_builder' => function (EntityRepository $er) {

                        return $er->createQueryBuilder('e')
                            ->orderBy('e.nombre', 'ASC');
                    }
                )
            )
//            ->add('municipio');
            ->add(
                'municipio',
                'entity',
                array(
                    'label' => 'Municipio',
                    'class' => 'Ociosos\ComunBundle\Entity\Municipio',
                    'query_builder' => function (EntityRepository $er) {

                        return $er->createQueryBuilder('e')
                            ->orderBy('e.nombre', 'ASC');
                    }
                ));
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            array(
                'data_class' => 'Ociosos\ComunBundle\Entity\Centro'
            )
        );
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ociosos_comunbundle_centro';
    }
}
