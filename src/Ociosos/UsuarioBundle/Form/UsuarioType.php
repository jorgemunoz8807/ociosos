<?php

namespace Ociosos\UsuarioBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UsuarioType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', 'text')
            ->add('apellidos')
            ->add('email', 'email')
            ->add('username', 'text', array('label' => 'Usuario'))
            ->add('password', 'repeated', array(
                'first_name' => 'pass',
                'second_name' => 'confirm',
                'type' => 'password',
                'invalid_message' => 'Las contraseñas deben coincidir',
                'required' => true,
                'first_options' => array('label' => "Contraseña"),
                'second_options' => array('label' => "Confirme la Contraseña")
            ))
            ->add('role', 'choice', array(
                'choices' => array(
                    'ROLE_ADMIN'    => 'Administrador',
                    'ROLE_VIEWER'   => 'Consultante',
                    'ROLE_EDITOR'   => 'Editor',
                ),
//                'required' => true
            ))
            ->add('salt')
//            ->add('centro')
            ->add(
                'centro',
                'entity',
                array(
                    'label' => 'Centro',
                    'class' => 'Ociosos\ComunBundle\Entity\Centro',
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
            'data_class' => 'Ociosos\UsuarioBundle\Entity\Usuario'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ociosos_usuariobundle_usuario';
    }
}
