<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/r')) {
            if (0 === strpos($pathinfo, '/reportes')) {
                // reporte_index
                if (rtrim($pathinfo, '/') === '/reportes') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'reporte_index');
                    }

                    return array (  '_controller' => 'Ociosos\\ReporteBundle\\Controller\\DefaultController::indexAction',  '_route' => 'reporte_index',);
                }

                // reporte_generar
                if ($pathinfo === '/reportes/generar') {
                    return array (  '_controller' => 'Ociosos\\ReporteBundle\\Controller\\GenerarController::indexAction',  '_route' => 'reporte_generar',);
                }

            }

            if (0 === strpos($pathinfo, '/rodas_xml')) {
                // rodas_xml_index
                if (rtrim($pathinfo, '/') === '/rodas_xml') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'rodas_xml_index');
                    }

                    return array (  '_controller' => 'Ociosos\\RodasXMLBundle\\Controller\\DefaultController::indexAction',  '_route' => 'rodas_xml_index',);
                }

                // rodas_xml_exportar
                if ($pathinfo === '/rodas_xml/exportar') {
                    return array (  '_controller' => 'Ociosos\\RodasXMLBundle\\Controller\\RodasXMLController::exportarToBDAction',  '_route' => 'rodas_xml_exportar',);
                }

                // products_added
                if ($pathinfo === '/rodas_xml/products_added') {
                    return array (  '_controller' => 'Ociosos\\RodasXMLBundle\\Controller\\RodasXMLController::AddProductByPosAction',  '_route' => 'products_added',);
                }

                // rodas_xml_verify
                if ($pathinfo === '/rodas_xml/verify') {
                    return array (  '_controller' => 'Ociosos\\RodasXMLBundle\\Controller\\RodasXMLController::VerifiyProductsInDatabaseAction',  '_route' => 'rodas_xml_verify',);
                }

                // rodas_xml_delete
                if ($pathinfo === '/rodas_xml/delete') {
                    return array (  '_controller' => 'Ociosos\\RodasXMLBundle\\Controller\\RodasXMLController::DeleteProductsByEntityAction',  '_route' => 'rodas_xml_delete',);
                }

                // rodas_xml_propose
                if ($pathinfo === '/rodas_xml/propose') {
                    return array (  '_controller' => 'Ociosos\\RodasXMLBundle\\Controller\\RodasXMLController::ProposeCategoriesAction',  '_route' => 'rodas_xml_propose',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/usuario')) {
            if (0 === strpos($pathinfo, '/usuario/log')) {
                if (0 === strpos($pathinfo, '/usuario/login')) {
                    // usuario_login
                    if ($pathinfo === '/usuario/login') {
                        return array (  '_controller' => 'Ociosos\\UsuarioBundle\\Controller\\UsuarioController::loginAction',  '_route' => 'usuario_login',);
                    }

                    // usuario_login_check
                    if ($pathinfo === '/usuario/login_check') {
                        return array('_route' => 'usuario_login_check');
                    }

                }

                // usuario_logout
                if ($pathinfo === '/usuario/logout') {
                    return array('_route' => 'usuario_logout');
                }

            }

            // usuario_perfil
            if ($pathinfo === '/usuario/perfil') {
                return array (  '_controller' => 'Ociosos\\UsuarioBundle\\Controller\\UsuarioController::perfilAction',  '_route' => 'usuario_perfil',);
            }

            // usuario_all
            if ($pathinfo === '/usuario/*') {
                return array('_route' => 'usuario_all');
            }

        }

        if (0 === strpos($pathinfo, '/editor')) {
            // edit_index
            if (rtrim($pathinfo, '/') === '/editor') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'edit_index');
                }

                return array (  '_controller' => 'Ociosos\\EditorBundle\\Controller\\EditController::indexAction',  '_route' => 'edit_index',);
            }

            // edit_add_viewer
            if ($pathinfo === '/editor/adicionar_consultante') {
                return array (  '_controller' => 'Ociosos\\EditorBundle\\Controller\\EditController::addViewerAction',  '_route' => 'edit_add_viewer',);
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/log')) {
                if (0 === strpos($pathinfo, '/admin/login')) {
                    // admin_login
                    if ($pathinfo === '/admin/login') {
                        return array('_route' => 'admin_login');
                    }

                    // admin_login_check
                    if ($pathinfo === '/admin/login_check') {
                        return array('_route' => 'admin_login_check');
                    }

                }

                // admin_logout
                if ($pathinfo === '/admin/logout') {
                    return array('_route' => 'admin_logout');
                }

            }

            // admin_portada
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_portada');
                }

                return array (  '_controller' => 'Ociosos\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'admin_portada',);
            }

            if (0 === strpos($pathinfo, '/admin/almacen')) {
                // admin_almacen_index
                if ($pathinfo === '/admin/almacen/index') {
                    return array (  '_controller' => 'Ociosos\\AdminBundle\\Controller\\AlmacenController::IndexAction',  '_route' => 'admin_almacen_index',);
                }

                // admin_almacen_detalles
                if (0 === strpos($pathinfo, '/admin/almacen/detalles') && preg_match('#^/admin/almacen/detalles/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_almacen_detalles')), array (  '_controller' => 'Ociosos\\AdminBundle\\Controller\\AlmacenController::DetallesAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/c')) {
                if (0 === strpos($pathinfo, '/admin/categoria')) {
                    // admin_categoria_index
                    if ($pathinfo === '/admin/categoria/index') {
                        return array (  '_controller' => 'Ociosos\\AdminBundle\\Controller\\CategoriaController::IndexAction',  '_route' => 'admin_categoria_index',);
                    }

                    // admin_categoria_crear
                    if ($pathinfo === '/admin/categoria/crear') {
                        return array (  '_controller' => 'Ociosos\\AdminBundle\\Controller\\CategoriaController::CrearAction',  '_route' => 'admin_categoria_crear',);
                    }

                    if (0 === strpos($pathinfo, '/admin/categoria/e')) {
                        // admin_categoria_editar
                        if (0 === strpos($pathinfo, '/admin/categoria/editar') && preg_match('#^/admin/categoria/editar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_categoria_editar')), array (  '_controller' => 'Ociosos\\AdminBundle\\Controller\\CategoriaController::editarAction',));
                        }

                        if (0 === strpos($pathinfo, '/admin/categoria/eliminar')) {
                            // admin_categoria_eliminar
                            if (preg_match('#^/admin/categoria/eliminar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_categoria_eliminar')), array (  '_controller' => 'Ociosos\\AdminBundle\\Controller\\CategoriaController::EliminarAction',));
                            }

                            // admin_categoria_eliminar_confirm
                            if (0 === strpos($pathinfo, '/admin/categoria/eliminar/confirmar') && preg_match('#^/admin/categoria/eliminar/confirmar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_categoria_eliminar_confirm')), array (  '_controller' => 'Ociosos\\AdminBundle\\Controller\\CategoriaController::EliminarConfirmAction',));
                            }

                        }

                    }

                    // admin_categoria_detalles
                    if (0 === strpos($pathinfo, '/admin/categoria/detalles') && preg_match('#^/admin/categoria/detalles/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_categoria_detalles')), array (  '_controller' => 'Ociosos\\AdminBundle\\Controller\\CategoriaController::DetallesAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/centro')) {
                    // admin_centro_index
                    if ($pathinfo === '/admin/centro/index') {
                        return array (  '_controller' => 'Ociosos\\AdminBundle\\Controller\\CentroController::IndexAction',  '_route' => 'admin_centro_index',);
                    }

                    // admin_centro_crear
                    if ($pathinfo === '/admin/centro/crear') {
                        return array (  '_controller' => 'Ociosos\\AdminBundle\\Controller\\CentroController::CrearAction',  '_route' => 'admin_centro_crear',);
                    }

                    if (0 === strpos($pathinfo, '/admin/centro/e')) {
                        // admin_centro_editar
                        if (0 === strpos($pathinfo, '/admin/centro/editar') && preg_match('#^/admin/centro/editar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_centro_editar')), array (  '_controller' => 'Ociosos\\AdminBundle\\Controller\\CentroController::editarAction',));
                        }

                        if (0 === strpos($pathinfo, '/admin/centro/eliminar')) {
                            // admin_centro_eliminar
                            if (preg_match('#^/admin/centro/eliminar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_centro_eliminar')), array (  '_controller' => 'Ociosos\\AdminBundle\\Controller\\CentroController::EliminarAction',));
                            }

                            // admin_centro_eliminar_confirm
                            if (0 === strpos($pathinfo, '/admin/centro/eliminar/confirmar') && preg_match('#^/admin/centro/eliminar/confirmar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_centro_eliminar_confirm')), array (  '_controller' => 'Ociosos\\AdminBundle\\Controller\\CentroController::EliminarConfirmAction',));
                            }

                        }

                    }

                    // admin_centro_detalles
                    if (0 === strpos($pathinfo, '/admin/centro/detalles') && preg_match('#^/admin/centro/detalles/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_centro_detalles')), array (  '_controller' => 'Ociosos\\AdminBundle\\Controller\\CentroController::DetallesAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/municipio')) {
                // admin_municipio_index
                if ($pathinfo === '/admin/municipio/index') {
                    return array (  '_controller' => 'Ociosos\\AdminBundle\\Controller\\MunicipioController::IndexAction',  '_route' => 'admin_municipio_index',);
                }

                // admin_municipio_crear
                if ($pathinfo === '/admin/municipio/crear') {
                    return array (  '_controller' => 'Ociosos\\AdminBundle\\Controller\\MunicipioController::CrearAction',  '_route' => 'admin_municipio_crear',);
                }

                if (0 === strpos($pathinfo, '/admin/municipio/e')) {
                    // admin_municipio_editar
                    if (0 === strpos($pathinfo, '/admin/municipio/editar') && preg_match('#^/admin/municipio/editar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_municipio_editar')), array (  '_controller' => 'Ociosos\\AdminBundle\\Controller\\MunicipioController::editarAction',));
                    }

                    if (0 === strpos($pathinfo, '/admin/municipio/eliminar')) {
                        // admin_municipio_eliminar
                        if (preg_match('#^/admin/municipio/eliminar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_municipio_eliminar')), array (  '_controller' => 'Ociosos\\AdminBundle\\Controller\\MunicipioController::EliminarAction',));
                        }

                        // admin_municipio_eliminar_confirm
                        if (0 === strpos($pathinfo, '/admin/municipio/eliminar/confirmar') && preg_match('#^/admin/municipio/eliminar/confirmar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_municipio_eliminar_confirm')), array (  '_controller' => 'Ociosos\\AdminBundle\\Controller\\MunicipioController::EliminarConfirmAction',));
                        }

                    }

                }

                // admin_municipio_detalles
                if (0 === strpos($pathinfo, '/admin/municipio/detalles') && preg_match('#^/admin/municipio/detalles/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_municipio_detalles')), array (  '_controller' => 'Ociosos\\AdminBundle\\Controller\\MunicipioController::DetallesAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/pro')) {
                if (0 === strpos($pathinfo, '/admin/producto')) {
                    // admin_producto_index
                    if ($pathinfo === '/admin/producto/index') {
                        return array (  '_controller' => 'Ociosos\\AdminBundle\\Controller\\ProductoController::IndexAction',  '_route' => 'admin_producto_index',);
                    }

                    // admin_producto_crear
                    if ($pathinfo === '/admin/producto/crear') {
                        return array (  '_controller' => 'Ociosos\\AdminBundle\\Controller\\ProductoController::CrearAction',  '_route' => 'admin_producto_crear',);
                    }

                    if (0 === strpos($pathinfo, '/admin/producto/e')) {
                        // admin_producto_editar
                        if (0 === strpos($pathinfo, '/admin/producto/editar') && preg_match('#^/admin/producto/editar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_producto_editar')), array (  '_controller' => 'Ociosos\\AdminBundle\\Controller\\ProductoController::editarAction',));
                        }

                        if (0 === strpos($pathinfo, '/admin/producto/eliminar')) {
                            // admin_producto_eliminar
                            if (preg_match('#^/admin/producto/eliminar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_producto_eliminar')), array (  '_controller' => 'Ociosos\\AdminBundle\\Controller\\ProductoController::eliminarAction',));
                            }

                            // admin_producto_eliminar_confirm
                            if (0 === strpos($pathinfo, '/admin/producto/eliminar/confirmar') && preg_match('#^/admin/producto/eliminar/confirmar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_producto_eliminar_confirm')), array (  '_controller' => 'Ociosos\\AdminBundle\\Controller\\ProductoController::eliminarConfirmAction',));
                            }

                        }

                    }

                    // admin_producto_detalles
                    if (0 === strpos($pathinfo, '/admin/producto/detalles') && preg_match('#^/admin/producto/detalles/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_producto_detalles')), array (  '_controller' => 'Ociosos\\AdminBundle\\Controller\\ProductoController::DetallesAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/provincia')) {
                    // admin_provincia_index
                    if ($pathinfo === '/admin/provincia/index') {
                        return array (  '_controller' => 'Ociosos\\AdminBundle\\Controller\\ProvinciaController::IndexAction',  '_route' => 'admin_provincia_index',);
                    }

                    // admin_provincia_crear
                    if ($pathinfo === '/admin/provincia/crear') {
                        return array (  '_controller' => 'Ociosos\\AdminBundle\\Controller\\ProvinciaController::CrearAction',  '_route' => 'admin_provincia_crear',);
                    }

                    if (0 === strpos($pathinfo, '/admin/provincia/e')) {
                        // admin_provincia_editar
                        if (0 === strpos($pathinfo, '/admin/provincia/editar') && preg_match('#^/admin/provincia/editar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_provincia_editar')), array (  '_controller' => 'Ociosos\\AdminBundle\\Controller\\ProvinciaController::EditarAction',));
                        }

                        if (0 === strpos($pathinfo, '/admin/provincia/eliminar')) {
                            // admin_provincia_eliminar
                            if (preg_match('#^/admin/provincia/eliminar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_provincia_eliminar')), array (  '_controller' => 'Ociosos\\AdminBundle\\Controller\\ProvinciaController::EliminarAction',));
                            }

                            // admin_provincia_eliminar_confirm
                            if (0 === strpos($pathinfo, '/admin/provincia/eliminar/confirmar') && preg_match('#^/admin/provincia/eliminar/confirmar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_provincia_eliminar_confirm')), array (  '_controller' => 'Ociosos\\AdminBundle\\Controller\\ProvinciaController::eliminarConfirmAction',));
                            }

                        }

                    }

                    // admin_provincia_detalles
                    if (0 === strpos($pathinfo, '/admin/provincia/detalles') && preg_match('#^/admin/provincia/detalles/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_provincia_detalles')), array (  '_controller' => 'Ociosos\\AdminBundle\\Controller\\ProvinciaController::DetallesAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/organizacion')) {
                // admin_organizacion_index
                if ($pathinfo === '/admin/organizacion/index') {
                    return array (  '_controller' => 'Ociosos\\AdminBundle\\Controller\\OrganizacionController::IndexAction',  '_route' => 'admin_organizacion_index',);
                }

                // admin_organizacion_crear
                if ($pathinfo === '/admin/organizacion/crear') {
                    return array (  '_controller' => 'Ociosos\\AdminBundle\\Controller\\OrganizacionController::CrearAction',  '_route' => 'admin_organizacion_crear',);
                }

                if (0 === strpos($pathinfo, '/admin/organizacion/e')) {
                    // admin_organizacion_editar
                    if (0 === strpos($pathinfo, '/admin/organizacion/editar') && preg_match('#^/admin/organizacion/editar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_organizacion_editar')), array (  '_controller' => 'Ociosos\\AdminBundle\\Controller\\OrganizacionController::editarAction',));
                    }

                    if (0 === strpos($pathinfo, '/admin/organizacion/eliminar')) {
                        // admin_organizacion_eliminar
                        if (preg_match('#^/admin/organizacion/eliminar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_organizacion_eliminar')), array (  '_controller' => 'Ociosos\\AdminBundle\\Controller\\OrganizacionController::EliminarAction',));
                        }

                        // admin_organizacion_eliminar_confirm
                        if (0 === strpos($pathinfo, '/admin/organizacion/eliminar/confirmar') && preg_match('#^/admin/organizacion/eliminar/confirmar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_organizacion_eliminar_confirm')), array (  '_controller' => 'Ociosos\\AdminBundle\\Controller\\OrganizacionController::EliminarConfirmAction',));
                        }

                    }

                }

                // admin_organizacion_detalles
                if (0 === strpos($pathinfo, '/admin/organizacion/detalles') && preg_match('#^/admin/organizacion/detalles/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_organizacion_detalles')), array (  '_controller' => 'Ociosos\\AdminBundle\\Controller\\OrganizacionController::DetallesAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/usuario')) {
                // admin_usuario_index
                if ($pathinfo === '/admin/usuario/index') {
                    return array (  '_controller' => 'Ociosos\\AdminBundle\\Controller\\UsuarioController::IndexAction',  '_route' => 'admin_usuario_index',);
                }

                // admin_usuario_crear
                if ($pathinfo === '/admin/usuario/crear') {
                    return array (  '_controller' => 'Ociosos\\AdminBundle\\Controller\\UsuarioController::CrearAction',  '_route' => 'admin_usuario_crear',);
                }

                if (0 === strpos($pathinfo, '/admin/usuario/e')) {
                    // admin_usuario_editar
                    if (0 === strpos($pathinfo, '/admin/usuario/editar') && preg_match('#^/admin/usuario/editar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_usuario_editar')), array (  '_controller' => 'Ociosos\\AdminBundle\\Controller\\UsuarioController::EditarAction',));
                    }

                    if (0 === strpos($pathinfo, '/admin/usuario/eliminar')) {
                        // admin_usuario_eliminar
                        if (preg_match('#^/admin/usuario/eliminar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_usuario_eliminar')), array (  '_controller' => 'Ociosos\\AdminBundle\\Controller\\UsuarioController::EliminarAction',));
                        }

                        // admin_usuario_eliminar_confirm
                        if (0 === strpos($pathinfo, '/admin/usuario/eliminar/confirmar') && preg_match('#^/admin/usuario/eliminar/confirmar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_usuario_eliminar_confirm')), array (  '_controller' => 'Ociosos\\AdminBundle\\Controller\\UsuarioController::EliminarConfirmAction',));
                        }

                    }

                }

                // admin_usuario_detalles
                if (0 === strpos($pathinfo, '/admin/usuario/detalles') && preg_match('#^/admin/usuario/detalles/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_usuario_detalles')), array (  '_controller' => 'Ociosos\\AdminBundle\\Controller\\UsuarioController::DetallesAction',));
                }

            }

            // admin_eliminar
            if (0 === strpos($pathinfo, '/admin/producto/eliminar_productos') && preg_match('#^/admin/producto/eliminar_productos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_eliminar')), array (  '_controller' => 'Ociosos\\AdminBundle\\Controller\\ProductoController::buscar_productosAction',));
            }

            // admin_buscar_municipios
            if (0 === strpos($pathinfo, '/admin/municipio/listado_municipios') && preg_match('#^/admin/municipio/listado_municipios/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_buscar_municipios')), array (  '_controller' => 'Ociosos\\AdminBundle\\Controller\\MunicipioController::buscar_municipiosAction',));
            }

            if (0 === strpos($pathinfo, '/admin/producto')) {
                // admin_buscar_centros
                if (0 === strpos($pathinfo, '/admin/producto/eliminar_centros') && preg_match('#^/admin/producto/eliminar_centros/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_buscar_centros')), array (  '_controller' => 'Ociosos\\AdminBundle\\Controller\\CentroController::buscar_centrosAction',));
                }

                if (0 === strpos($pathinfo, '/admin/producto/buscar_')) {
                    // admin_buscarproductoxcentro
                    if (0 === strpos($pathinfo, '/admin/producto/buscar_productos') && preg_match('#^/admin/producto/buscar_productos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_buscarproductoxcentro')), array (  '_controller' => 'Ociosos\\AdminBundle\\Controller\\ProductoController::buscar_productosxCentroAction',));
                    }

                    // admin_buscarusuarioxcentro
                    if (0 === strpos($pathinfo, '/admin/producto/buscar_usuarios') && preg_match('#^/admin/producto/buscar_usuarios/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_buscarusuarioxcentro')), array (  '_controller' => 'Ociosos\\AdminBundle\\Controller\\UsuarioController::buscar_usuariosxCentroAction',));
                    }

                }

            }

            // system_html_deletepost
            if (0 === strpos($pathinfo, '/admin/deletepost') && preg_match('#^/admin/deletepost/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'system_html_deletepost')), array (  '_controller' => 'Ociosos\\AdminBundle\\Controller\\ProductoController::deleteSelectedAction',));
            }

            // admin_all
            if ($pathinfo === '/admin/*') {
                return array('_route' => 'admin_all');
            }

        }

        // comun_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'comun_homepage')), array (  '_controller' => 'Ociosos\\ComunBundle\\Controller\\DefaultController::indexAction',));
        }

        // pagina_estatica
        if (0 === strpos($pathinfo, '/sitio') && preg_match('#^/sitio/(?P<pagina>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'pagina_estatica');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pagina_estatica')), array (  '_controller' => 'Ociosos\\ComunBundle\\Controller\\SitioController::estaticaAction',));
        }

        // portada
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'portada');
            }

            return array (  '_controller' => 'Ociosos\\ComunBundle\\Controller\\DefaultController::portadaAction',  '_route' => 'portada',);
        }

        // consultas
        if ($pathinfo === '/consultas') {
            return array (  '_controller' => 'Ociosos\\ComunBundle\\Controller\\BuscarController::consultasAction',  '_route' => 'consultas',);
        }

        // res_consultas
        if ($pathinfo === '/res_consulta') {
            return array (  '_controller' => 'Ociosos\\ComunBundle\\Controller\\BuscarController::resConsultasAction',  '_route' => 'res_consultas',);
        }

        if (0 === strpos($pathinfo, '/buscar_termino')) {
            // buscar_termino
            if ($pathinfo === '/buscar_termino') {
                return array (  '_controller' => 'Ociosos\\ComunBundle\\Controller\\BuscarController::terminoAction',  '_route' => 'buscar_termino',);
            }

            // buscar_termino_detalles
            if ($pathinfo === '/buscar_termino/detalles') {
                return array (  '_controller' => 'Ociosos\\ComunBundle\\Controller\\BuscarController::terminoDetailsAction',  '_route' => 'buscar_termino_detalles',);
            }

        }

        if (0 === strpos($pathinfo, '/send_')) {
            // send_email
            if ($pathinfo === '/send_mail') {
                return array (  '_controller' => 'Ociosos\\ComunBundle\\Controller\\EmailController::SendEmailAction',  '_route' => 'send_email',);
            }

            if (0 === strpos($pathinfo, '/send_aplication_')) {
                // send_aplication_view
                if (0 === strpos($pathinfo, '/send_aplication_view') && preg_match('#^/send_aplication_view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'send_aplication_view')), array (  '_controller' => 'Ociosos\\ComunBundle\\Controller\\DefaultController::solicitudAction',));
                }

                // send_aplication_email
                if ($pathinfo === '/send_aplication_email') {
                    return array (  '_controller' => 'Ociosos\\ComunBundle\\Controller\\EmailController::SendEmailSolicitudAction',  '_route' => 'send_aplication_email',);
                }

            }

        }

        // verify_captcha
        if ($pathinfo === '/verify-captcha') {
            return array (  '_controller' => 'Ociosos\\ComunBundle\\Controller\\CaptchaController::validateAction',  '_route' => 'verify_captcha',);
        }

        // create_captcha
        if ($pathinfo === '/create-captcha') {
            return array (  '_controller' => 'Ociosos\\ComunBundle\\Controller\\CaptchaController::getImageAction',  '_route' => 'create_captcha',);
        }

        // refresh_captcha
        if ($pathinfo === '/refresh-captcha') {
            return array (  '_controller' => 'Ociosos\\ComunBundle\\Controller\\CaptchaController::refreshImageAction',  '_route' => 'refresh_captcha',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
