<?php

namespace Ociosos\ComunBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProductoType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('codigo')
            ->add('fechaExportacion')
            ->add('estado')
            ->add('uM')
            ->add('cantidad')
            ->add('precioMN')
            ->add('precioMLC')
//            ->add('almacen')
            ->add(
                'almacen',
                'entity',
                array(
                    'label' => 'Almacen',
                    'class' => 'Ociosos\ComunBundle\Entity\Almacen',
                    'query_builder' => function (EntityRepository $er) {

                        return $er->createQueryBuilder('e')
                            ->orderBy('e.nombre', 'ASC');
                    }
                ))
            ->add('categoria')
            ->add(
                'centro',
                'entity',
                array(
                    'label' => 'Centro',
                    'class' => 'Ociosos\ComunBundle\Entity\Centro',
                    'query_builder' => function (EntityRepository $er) {

                        return $er->createQueryBuilder('e')
                            ->orderBy('e.nombre', 'asc');
                    }
                ))
//            ->add('centro')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ociosos\ComunBundle\Entity\Producto'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ociosos_comunbundle_producto';
    }
}
