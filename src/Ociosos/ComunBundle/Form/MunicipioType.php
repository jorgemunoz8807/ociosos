<?php

namespace Ociosos\ComunBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MunicipioType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
//            ->add('provincia')
            ->add(
                'provincia',
                'entity',
                array(
                    'label' => 'Provincia',
                    'class' => 'Ociosos\ComunBundle\Entity\Provincia',
                    'query_builder' => function (EntityRepository $er) {

                        return $er->createQueryBuilder('e')
                            ->orderBy('e.nombre', 'ASC');
                    }
                ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ociosos\ComunBundle\Entity\Municipio'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ociosos_comunbundle_municipio';
    }
}
