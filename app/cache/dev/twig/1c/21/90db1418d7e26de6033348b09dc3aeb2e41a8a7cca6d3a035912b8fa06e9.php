<?php

/* ::footer_admin_menu.html.twig */
class __TwigTemplate_1c2190db1418d7e26de6033348b09dc3aeb2e41a8a7cca6d3a035912b8fa06e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
    }

    // line 1
    public function getadmin_footer_nav($_area = null, $_whosActive = null)
    {
        $context = $this->env->mergeGlobals(array(
            "area" => $_area,
            "whosActive" => $_whosActive,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "
    <ul>
        <li>
            <div class=\"footer-block\">
                <p class=\"title\">Almacenes</p>
                <div class=\"footer-node\">
                    <ul>
                        ";
            // line 9
            if (((isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")) == "stock")) {
                // line 10
                echo "                            <li><a class=\"active\" href=\"";
                echo $this->env->getExtension('routing')->getPath("admin_almacen_index");
                echo "\">Listado de los Almacenes</a> </li>
                        ";
            } else {
                // line 12
                echo "                            <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("admin_almacen_index");
                echo "\">Listado de los Almacenes</a> </li>
                        ";
            }
            // line 14
            echo "                    </ul>
                </div>
            </div>
        </li>
        <li>
            <div class=\"footer-block\">
                <p class=\"title\">Categor&iacute;as</p>
                <div class=\"footer-node\">
                    <ul>
                        ";
            // line 23
            if (((isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")) == "category")) {
                // line 24
                echo "                            ";
                if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "list")) {
                    // line 25
                    echo "                                <li><a class=\"active\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("admin_categoria_index");
                    echo "\">Listado de las Categor&iacute;as</a></li>
                            ";
                } else {
                    // line 27
                    echo "                                <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("admin_categoria_index");
                    echo "\">Listado de las Categor&iacute;as</a></li>
                            ";
                }
                // line 29
                echo "
                            ";
                // line 30
                if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "add")) {
                    // line 31
                    echo "                                <li><a class=\"active\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("admin_categoria_crear");
                    echo "\">Adicionar Nueva Categor&iacute;a</a> </li>
                            ";
                } else {
                    // line 33
                    echo "                                <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("admin_categoria_crear");
                    echo "\">Adicionar Nueva Categor&iacute;a</a> </li>
                            ";
                }
                // line 35
                echo "
                            ";
                // line 36
                if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "edit")) {
                    // line 37
                    echo "                                <li><a class=\"active\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("admin_categoria_index");
                    echo "\">Editar Categor&iacute;a</a> </li>
                            ";
                } else {
                    // line 39
                    echo "                                <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("admin_categoria_index");
                    echo "\">Editar Categor&iacute;a</a> </li>
                            ";
                }
                // line 41
                echo "
                            ";
                // line 42
                if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "delete")) {
                    // line 43
                    echo "                                <li><a class=\"active\" href=\"\">Eliminar Categor&iacute;a</a> </li>
                            ";
                } else {
                    // line 45
                    echo "                                <li><a href=\"\">Eliminar Categor&iacute;a</a> </li>
                            ";
                }
                // line 47
                echo "                        ";
            } else {
                // line 48
                echo "                            <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("admin_categoria_index");
                echo "\">Listado de las Categor&iacute;as</a></li>
                            <li><a href=\"";
                // line 49
                echo $this->env->getExtension('routing')->getPath("admin_categoria_crear");
                echo "\">Adicionar Nueva Categor&iacute;a</a> </li>
                            <li><a href=\"";
                // line 50
                echo $this->env->getExtension('routing')->getPath("admin_categoria_index");
                echo "\">Editar Categor&iacute;a</a> </li>
                            <li><a href=\"\">Eliminar Categor&iacute;a</a> </li>
                        ";
            }
            // line 53
            echo "                    </ul>
                </div>
            </div>
        </li>
        <li>
            <div class=\"footer-block\">
                <p class=\"title\">Centro del Citma</p>
                <div class=\"footer-node\">
                    <ul>
                        ";
            // line 62
            if (((isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")) == "entity")) {
                // line 63
                echo "                            ";
                if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "list")) {
                    // line 64
                    echo "                                <li><a class=\"active\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("admin_centro_index");
                    echo "\">Listado de los Centros</a> </li>
                            ";
                } else {
                    // line 66
                    echo "                                <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("admin_centro_index");
                    echo "\">Listado de los Centros</a> </li>
                            ";
                }
                // line 68
                echo "
                            ";
                // line 69
                if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "add")) {
                    // line 70
                    echo "                                <li><a class=\"active\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("admin_centro_crear");
                    echo "\">Adicionar Nuevo Centro</a> </li>
                            ";
                } else {
                    // line 72
                    echo "                                <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("admin_centro_crear");
                    echo "\">Adicionar Nuevo Centro</a> </li>
                            ";
                }
                // line 74
                echo "
                            ";
                // line 75
                if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "edit")) {
                    // line 76
                    echo "                                <li><a class=\"active\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("admin_centro_index");
                    echo "\">Editar Centro</a> </li>
                            ";
                } else {
                    // line 78
                    echo "                                <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("admin_centro_index");
                    echo "\">Editar Centro</a> </li>
                            ";
                }
                // line 80
                echo "
                            ";
                // line 81
                if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "details")) {
                    // line 82
                    echo "                                <li><a class=\"active\" href=\"\">Detalles del Centro</a> </li>
                            ";
                } else {
                    // line 84
                    echo "                                <li><a href=\"\">Detalles del Centro</a> </li>
                            ";
                }
                // line 86
                echo "
                            ";
                // line 87
                if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "delete")) {
                    // line 88
                    echo "                                <li><a class=\"active\" href=\"\">Eliminar Centro</a> </li>
                            ";
                } else {
                    // line 90
                    echo "                                <li><a href=\"\">Eliminar Centro</a> </li>
                            ";
                }
                // line 92
                echo "                        ";
            } else {
                // line 93
                echo "                            <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("admin_centro_index");
                echo "\">Listado de los Centros</a></li>
                            <li><a href=\"";
                // line 94
                echo $this->env->getExtension('routing')->getPath("admin_centro_crear");
                echo "\">Adicionar Nuevo Centro</a> </li>
                            <li><a href=\"";
                // line 95
                echo $this->env->getExtension('routing')->getPath("admin_centro_index");
                echo "\">Editar Centro</a> </li>
                            <li><a href=\"\">Detalles del Centro</a> </li>
                            <li><a href=\"\">Eliminar Centro</a> </li>
                        ";
            }
            // line 99
            echo "                    </ul>
                </div>
            </div>
        </li>
        <li>
            <div class=\"footer-block\">
                <p class=\"title\">Municipios</p>
                <div class=\"footer-node\">
                    <ul>
                        ";
            // line 108
            if (((isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")) == "city")) {
                // line 109
                echo "                            ";
                if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "list")) {
                    // line 110
                    echo "                                <li><a class=\"active\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("admin_municipio_index");
                    echo "\">Listado de los Municipios</a></li>
                            ";
                } else {
                    // line 112
                    echo "                                <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("admin_municipio_index");
                    echo "\">Listado de los Municipios</a></li>
                            ";
                }
                // line 114
                echo "
                            ";
                // line 115
                if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "add")) {
                    // line 116
                    echo "                                <li><a class=\"active\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("admin_municipio_crear");
                    echo "\">Adicionar Nuevo Municipio</a></li>
                            ";
                } else {
                    // line 118
                    echo "                                <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("admin_municipio_crear");
                    echo "\">Adicionar Nuevo Municipio</a></li>
                            ";
                }
                // line 120
                echo "
                            ";
                // line 121
                if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "edit")) {
                    // line 122
                    echo "                                <li><a class=\"active\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("admin_municipio_index");
                    echo "\">Editar Municipio</a> </li>
                            ";
                } else {
                    // line 124
                    echo "                                <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("admin_municipio_index");
                    echo "\">Editar Municipio</a> </li>
                            ";
                }
                // line 126
                echo "
                            ";
                // line 127
                if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "delete")) {
                    // line 128
                    echo "                                <li><a class=\"active\" href=\"\">Eliminar Municipio</a> </li>
                            ";
                } else {
                    // line 130
                    echo "                                <li><a href=\"\">Eliminar Municipio</a> </li>
                            ";
                }
                // line 132
                echo "
                        ";
            } else {
                // line 134
                echo "                            <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("admin_municipio_index");
                echo "\">Listado de los Municipios</a></li>
                            <li><a href=\"";
                // line 135
                echo $this->env->getExtension('routing')->getPath("admin_municipio_crear");
                echo "\">Adicionar Nuevo Municipio</a> </li>
                            <li><a href=\"";
                // line 136
                echo $this->env->getExtension('routing')->getPath("admin_municipio_index");
                echo "\">Editar Municipio</a> </li>
                            <li><a href=\"\">Eliminar Municipio</a> </li>
                        ";
            }
            // line 139
            echo "                    </ul>
                </div>
            </div>
        </li>
        <li>
            <div class=\"footer-block\">
                <p class=\"title\">Organizaciones</p>
                <div class=\"footer-node\">
                    <ul>
                        ";
            // line 148
            if (((isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")) == "organization")) {
                // line 149
                echo "
                            ";
                // line 150
                if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "list")) {
                    // line 151
                    echo "                                <li><a class=\"active\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("admin_organizacion_index");
                    echo "\">Listado de las Organizaciones</a></li>
                            ";
                } else {
                    // line 153
                    echo "                                <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("admin_organizacion_index");
                    echo "\">Listado de las Organizaciones</a></li>
                            ";
                }
                // line 155
                echo "
                            ";
                // line 156
                if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "add")) {
                    // line 157
                    echo "                                <li><a class=\"active\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("admin_organizacion_crear");
                    echo "\">Adicionar Nueva Organizaci&oacute;n</a></li>
                            ";
                } else {
                    // line 159
                    echo "                                <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("admin_organizacion_crear");
                    echo "\">Adicionar Nueva Organizaci&oacute;n</a></li>
                            ";
                }
                // line 161
                echo "
                            ";
                // line 162
                if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "edit")) {
                    // line 163
                    echo "                                <li><a class=\"active\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("admin_organizacion_index");
                    echo "\">Editar Organizaci&oacute;n</a> </li>
                            ";
                } else {
                    // line 165
                    echo "                                <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("admin_organizacion_index");
                    echo "\">Editar Organizaci&oacute;n</a> </li>
                            ";
                }
                // line 167
                echo "
                            ";
                // line 168
                if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "delete")) {
                    // line 169
                    echo "                                <li><a class=\"active\" href=\"\">Eliminar Organizaci&oacute;n</a> </li>
                            ";
                } else {
                    // line 171
                    echo "                                <li><a href=\"\">Eliminar Organizaci&oacute;n</a> </li>
                            ";
                }
                // line 173
                echo "
                        ";
            } else {
                // line 175
                echo "                            <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("admin_organizacion_index");
                echo "\">Listado de las Organizaciones</a></li>
                            <li><a href=\"";
                // line 176
                echo $this->env->getExtension('routing')->getPath("admin_organizacion_crear");
                echo "\">Adicionar Nueva Organizaci&oacute;n</a> </li>
                            <li><a href=\"";
                // line 177
                echo $this->env->getExtension('routing')->getPath("admin_organizacion_index");
                echo "\">Editar Organizaci&oacute;n</a> </li>
                            <li><a href=\"\">Eliminar Organizaci&oacute;n</a> </li>
                        ";
            }
            // line 180
            echo "                    </ul>
                </div>
            </div>
        </li>
        <li>
            <div class=\"footer-block\">
                <p class=\"title\">Productos</p>
                <div class=\"footer-node\">
                    <ul>
                        ";
            // line 189
            if (((isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")) == "product")) {
                // line 190
                echo "                            ";
                if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "list")) {
                    // line 191
                    echo "                                <li><a class=\"active\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("admin_producto_index");
                    echo "\">Listado de los Productos</a></li>
                            ";
                } else {
                    // line 193
                    echo "                                <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("admin_producto_index");
                    echo "\">Listado de los Productos</a></li>
                            ";
                }
                // line 195
                echo "
                            ";
                // line 196
                if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "add")) {
                    // line 197
                    echo "                                <li><a class=\"active\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("admin_producto_crear");
                    echo "\">Adicionar Nuevo Producto</a></li>
                            ";
                } else {
                    // line 199
                    echo "                                <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("admin_producto_crear");
                    echo "\">Adicionar Nuevo Producto</a></li>
                            ";
                }
                // line 201
                echo "
                            ";
                // line 202
                if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "edit")) {
                    // line 203
                    echo "                                <li><a class=\"active\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("admin_producto_index");
                    echo "\">Editar Producto</a> </li>
                            ";
                } else {
                    // line 205
                    echo "                                <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("admin_producto_index");
                    echo "\">Editar Producto</a> </li>
                            ";
                }
                // line 207
                echo "
                            ";
                // line 208
                if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "details")) {
                    // line 209
                    echo "                                <li><a class=\"active\" href=\"\">Detalles del Producto</a> </li>
                            ";
                } else {
                    // line 211
                    echo "                                <li><a href=\"\">Detalles del Producto</a> </li>
                            ";
                }
                // line 213
                echo "
                            ";
                // line 214
                if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "delete")) {
                    // line 215
                    echo "                                <li><a class=\"active\" href=\"\">Eliminar Producto</a> </li>
                            ";
                } else {
                    // line 217
                    echo "                                <li><a href=\"\">Eliminar Producto</a> </li>
                            ";
                }
                // line 219
                echo "                        ";
            } else {
                // line 220
                echo "                            <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("admin_producto_index");
                echo "\">Listado de los Productos</a></li>
                            <li><a href=\"";
                // line 221
                echo $this->env->getExtension('routing')->getPath("admin_producto_crear");
                echo "\">Adicionar Nuevo Producto</a></li>
                            <li><a href=\"";
                // line 222
                echo $this->env->getExtension('routing')->getPath("admin_producto_index");
                echo "\">Editar Producto</a> </li>
                            <li><a href=\"\">Detalles del Producto</a> </li>
                            <li><a href=\"\">Eliminar Producto</a> </li>
                        ";
            }
            // line 226
            echo "                    </ul>
                </div>
            </div>
        </li>
        <li>
            <div class=\"footer-block\">
                <p class=\"title\">Provincias</p>
                <div class=\"footer-node\">
                    <ul>
                        ";
            // line 235
            if (((isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")) == "state")) {
                // line 236
                echo "
                            ";
                // line 237
                if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "list")) {
                    // line 238
                    echo "                                <li><a class=\"active\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("admin_provincia_index");
                    echo "\">Listado de las Provincias</a></li>
                            ";
                } else {
                    // line 240
                    echo "                                <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("admin_provincia_index");
                    echo "\">Listado de las Provincias</a></li>
                            ";
                }
                // line 242
                echo "
                            ";
                // line 243
                if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "add")) {
                    // line 244
                    echo "                                <li><a class=\"active\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("admin_provincia_crear");
                    echo "\">Adicionar Nueva Provincia</a></li>
                            ";
                } else {
                    // line 246
                    echo "                                <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("admin_provincia_crear");
                    echo "\">Adicionar Nueva Provincia</a></li>
                            ";
                }
                // line 248
                echo "
                            ";
                // line 249
                if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "edit")) {
                    // line 250
                    echo "                                <li><a class=\"active\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("admin_provincia_index");
                    echo "\">Editar Provincia</a> </li>
                            ";
                } else {
                    // line 252
                    echo "                                <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("admin_provincia_index");
                    echo "\">Editar Provincia</a> </li>
                            ";
                }
                // line 254
                echo "
                            ";
                // line 255
                if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "delete")) {
                    // line 256
                    echo "                                <li><a class=\"active\" href=\"\">Eliminar Provincia</a> </li>
                            ";
                } else {
                    // line 258
                    echo "                                <li><a href=\"\">Eliminar Provincia</a> </li>
                            ";
                }
                // line 260
                echo "
                        ";
            } else {
                // line 262
                echo "                            <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("admin_provincia_index");
                echo "\">Listado de las Provincias</a></li>
                            <li><a href=\"";
                // line 263
                echo $this->env->getExtension('routing')->getPath("admin_provincia_crear");
                echo "\">Adicionar Nueva Provincia</a> </li>
                            <li><a href=\"";
                // line 264
                echo $this->env->getExtension('routing')->getPath("admin_provincia_index");
                echo "\">Editar Provincia</a> </li>
                            <li><a href=\"\">Eliminar Provincia</a> </li>
                        ";
            }
            // line 267
            echo "                    </ul>
                </div>
            </div>
        </li>
        <li>
            <div class=\"footer-block\">
                <p class=\"title\">Usuarios</p>
                <div class=\"footer-node\">
                    <ul>
                        ";
            // line 276
            if (((isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")) == "user")) {
                // line 277
                echo "                            ";
                if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "list")) {
                    // line 278
                    echo "                                <li><a class=\"active\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("admin_usuario_index");
                    echo "\">Listado de los Usuarios</a></li>
                            ";
                } else {
                    // line 280
                    echo "                                <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("admin_usuario_index");
                    echo "\">Listado de los Usuarios</a></li>
                            ";
                }
                // line 282
                echo "
                            ";
                // line 283
                if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "add")) {
                    // line 284
                    echo "                                <li><a class=\"active\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("admin_usuario_crear");
                    echo "\">Adicionar Nuevo Usuario</a></li>
                            ";
                } else {
                    // line 286
                    echo "                                <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("admin_usuario_crear");
                    echo "\">Adicionar Nuevo Usuario</a></li>
                            ";
                }
                // line 288
                echo "
                            ";
                // line 289
                if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "edit")) {
                    // line 290
                    echo "                                <li><a class=\"active\" href=\"\">Editar Usuario</a></li>
                            ";
                } else {
                    // line 292
                    echo "                                <li><a href=\"\">Editar Usuario</a></li>
                            ";
                }
                // line 294
                echo "
                            ";
                // line 295
                if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "details")) {
                    // line 296
                    echo "                                <li><a class=\"active\" href=\"\">Detalles del Usuario</a></li>
                            ";
                } else {
                    // line 298
                    echo "                                <li><a href=\"\">Detalles del Usuario</a></li>
                            ";
                }
                // line 300
                echo "
                            ";
                // line 301
                if (((isset($context["whosActive"]) ? $context["whosActive"] : $this->getContext($context, "whosActive")) == "delete")) {
                    // line 302
                    echo "                                <li><a class=\"active\" href=\"\">Eliminar Usuario</a></li>
                            ";
                } else {
                    // line 304
                    echo "                                <li><a href=\"\">Eliminar Usuario</a></li>
                            ";
                }
                // line 306
                echo "                        ";
            } else {
                // line 307
                echo "                            <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("admin_usuario_index");
                echo "\">Listado de los Usuarios</a></li>
                            <li><a href=\"";
                // line 308
                echo $this->env->getExtension('routing')->getPath("admin_usuario_crear");
                echo "\">Adicionar Nuevo Usuario</a></li>
                            <li><a href=\"\">Editar Usuario</a></li>
                            <li><a href=\"\">Detalles del Usuario</a></li>
                            <li><a href=\"\">Eliminar Usuario</a></li>
                        ";
            }
            // line 313
            echo "                    </ul>
                </div>
            </div>
        </li>
    </ul>

";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "::footer_admin_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  741 => 308,  736 => 307,  733 => 306,  725 => 302,  723 => 301,  720 => 300,  716 => 298,  703 => 292,  688 => 286,  682 => 284,  677 => 282,  671 => 280,  665 => 278,  660 => 276,  639 => 263,  634 => 262,  630 => 260,  626 => 258,  622 => 256,  620 => 255,  611 => 252,  605 => 250,  603 => 249,  600 => 248,  594 => 246,  588 => 244,  586 => 243,  583 => 242,  577 => 240,  571 => 238,  569 => 237,  566 => 236,  553 => 226,  546 => 222,  542 => 221,  537 => 220,  534 => 219,  530 => 217,  526 => 215,  521 => 213,  517 => 211,  513 => 209,  511 => 208,  508 => 207,  502 => 205,  494 => 202,  491 => 201,  485 => 199,  479 => 197,  477 => 196,  474 => 195,  468 => 193,  462 => 191,  457 => 189,  446 => 180,  440 => 177,  436 => 176,  431 => 175,  427 => 173,  419 => 169,  417 => 168,  402 => 163,  397 => 161,  391 => 159,  383 => 156,  380 => 155,  361 => 148,  340 => 135,  331 => 132,  327 => 130,  321 => 127,  318 => 126,  312 => 124,  306 => 122,  304 => 121,  301 => 120,  295 => 118,  287 => 115,  284 => 114,  272 => 110,  269 => 109,  267 => 108,  256 => 99,  249 => 95,  237 => 92,  229 => 88,  224 => 86,  216 => 82,  214 => 81,  211 => 80,  205 => 78,  182 => 70,  180 => 69,  177 => 68,  165 => 64,  160 => 62,  143 => 50,  118 => 41,  112 => 39,  87 => 30,  72 => 25,  67 => 23,  56 => 14,  50 => 12,  33 => 2,  1361 => 391,  1352 => 390,  1350 => 389,  1347 => 388,  1331 => 384,  1324 => 383,  1322 => 382,  1319 => 381,  1296 => 377,  1271 => 376,  1269 => 375,  1266 => 374,  1254 => 369,  1249 => 368,  1247 => 367,  1244 => 366,  1235 => 360,  1229 => 358,  1226 => 357,  1221 => 356,  1219 => 355,  1216 => 354,  1209 => 349,  1200 => 347,  1196 => 346,  1193 => 345,  1190 => 344,  1188 => 343,  1185 => 342,  1177 => 338,  1175 => 337,  1172 => 336,  1166 => 332,  1160 => 330,  1157 => 329,  1155 => 328,  1152 => 327,  1143 => 322,  1141 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 176,  772 => 172,  769 => 171,  767 => 170,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  749 => 313,  746 => 161,  739 => 156,  729 => 304,  724 => 154,  721 => 153,  715 => 151,  712 => 296,  710 => 295,  707 => 294,  699 => 290,  697 => 289,  696 => 140,  695 => 139,  694 => 288,  689 => 137,  683 => 135,  680 => 283,  678 => 133,  675 => 132,  666 => 126,  662 => 277,  658 => 124,  654 => 123,  649 => 267,  643 => 264,  640 => 119,  638 => 118,  635 => 117,  619 => 113,  617 => 254,  614 => 111,  598 => 107,  596 => 106,  593 => 105,  576 => 101,  564 => 235,  557 => 96,  555 => 95,  550 => 94,  547 => 93,  529 => 92,  527 => 91,  524 => 214,  515 => 85,  512 => 84,  509 => 83,  503 => 81,  501 => 80,  496 => 203,  493 => 78,  490 => 77,  480 => 75,  478 => 74,  470 => 73,  467 => 72,  464 => 71,  461 => 70,  459 => 190,  456 => 68,  450 => 64,  442 => 62,  437 => 61,  433 => 60,  428 => 59,  426 => 58,  423 => 171,  414 => 167,  408 => 165,  405 => 49,  403 => 48,  400 => 162,  390 => 43,  388 => 42,  385 => 157,  377 => 37,  374 => 153,  371 => 35,  368 => 151,  366 => 150,  363 => 149,  355 => 27,  350 => 139,  342 => 23,  337 => 22,  335 => 134,  332 => 20,  316 => 16,  313 => 15,  311 => 14,  299 => 8,  293 => 6,  290 => 5,  288 => 4,  285 => 3,  281 => 388,  276 => 381,  273 => 380,  271 => 374,  268 => 373,  266 => 366,  263 => 365,  260 => 363,  258 => 354,  255 => 353,  253 => 342,  250 => 341,  248 => 336,  243 => 327,  238 => 312,  235 => 311,  233 => 90,  230 => 303,  227 => 87,  225 => 298,  222 => 297,  220 => 84,  217 => 289,  215 => 280,  212 => 279,  210 => 270,  204 => 267,  199 => 76,  197 => 75,  191 => 246,  189 => 240,  186 => 239,  184 => 233,  181 => 232,  179 => 224,  174 => 217,  171 => 66,  166 => 209,  161 => 202,  154 => 189,  151 => 188,  149 => 53,  146 => 181,  144 => 176,  141 => 175,  139 => 49,  134 => 48,  129 => 148,  124 => 132,  121 => 42,  116 => 116,  114 => 111,  86 => 46,  35 => 8,  31 => 7,  27 => 5,  25 => 4,  23 => 3,  19 => 1,  176 => 223,  170 => 51,  162 => 63,  159 => 196,  153 => 45,  147 => 43,  142 => 41,  130 => 37,  128 => 36,  125 => 35,  113 => 31,  108 => 29,  102 => 27,  96 => 67,  91 => 56,  79 => 32,  74 => 20,  68 => 15,  62 => 13,  60 => 12,  57 => 11,  45 => 7,  21 => 1,  109 => 105,  104 => 36,  83 => 5,  78 => 27,  76 => 31,  43 => 6,  40 => 7,  38 => 6,  32 => 2,  26 => 1,  136 => 168,  131 => 47,  126 => 147,  117 => 25,  106 => 37,  101 => 35,  94 => 57,  89 => 31,  85 => 21,  77 => 18,  73 => 16,  71 => 19,  66 => 12,  63 => 20,  58 => 9,  52 => 13,  44 => 10,  39 => 4,  36 => 4,  356 => 110,  352 => 108,  348 => 107,  344 => 136,  339 => 105,  336 => 104,  329 => 102,  326 => 101,  323 => 128,  314 => 94,  308 => 13,  302 => 88,  297 => 86,  289 => 116,  283 => 82,  278 => 112,  270 => 79,  264 => 76,  259 => 74,  251 => 73,  245 => 94,  240 => 93,  232 => 67,  226 => 64,  221 => 62,  213 => 61,  207 => 269,  202 => 266,  194 => 74,  188 => 72,  183 => 50,  175 => 49,  169 => 210,  164 => 203,  156 => 195,  150 => 40,  145 => 42,  137 => 37,  133 => 36,  127 => 45,  123 => 43,  119 => 117,  115 => 30,  111 => 110,  107 => 28,  103 => 27,  99 => 68,  95 => 33,  92 => 25,  88 => 22,  84 => 29,  81 => 40,  75 => 17,  69 => 24,  64 => 3,  61 => 2,  54 => 14,  51 => 9,  48 => 6,  42 => 9,  37 => 4,  34 => 3,);
    }
}
