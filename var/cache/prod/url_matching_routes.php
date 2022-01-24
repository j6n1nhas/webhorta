<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\Controller::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\Controller::login'], null, null, null, false, false, null]],
        '/registar' => [[['_route' => 'signup', '_controller' => 'App\\Controller\\Controller::signup'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout'], null, ['GET' => 0], null, false, false, null]],
        '/produtos' => [[['_route' => 'produtos', '_controller' => 'App\\Controller\\ProdutoController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin_index', '_controller' => 'App\\Controller\\AdminController::admin_index'], null, null, null, false, false, null]],
        '/admin/produtos/add' => [[['_route' => 'admin_produto_add', '_controller' => 'App\\Controller\\AdminController::add_produto'], null, null, null, false, false, null]],
        '/admin/unidades/add' => [[['_route' => 'admin_unidade_add', '_controller' => 'App\\Controller\\AdminController::add_unidade'], null, null, null, false, false, null]],
        '/carrinho' => [[['_route' => 'carrinho', '_controller' => 'App\\Controller\\CarrinhoController::carrinho'], null, null, null, false, false, null]],
        '/carrinho/gravar' => [[['_route' => 'grava_carrinho', '_controller' => 'App\\Controller\\CarrinhoController::grava_carrinho'], null, null, null, false, false, null]],
        '/carrinho/cancelar' => [[['_route' => 'cancela_carrinho', '_controller' => 'App\\Controller\\CarrinhoController::cancela_carrinho'], null, null, null, false, false, null]],
        '/where-we-are' => [[['_route' => 'whereweare', '_controller' => 'App\\Controller\\Controller::whereweare'], null, null, null, false, false, null]],
        '/who-we-are' => [[['_route' => 'whoweare', '_controller' => 'App\\Controller\\Controller::whoweare'], null, null, null, false, false, null]],
        '/contact-us' => [[['_route' => 'contactus', '_controller' => 'App\\Controller\\Controller::contactus'], null, null, null, false, false, null]],
        '/contact-us/send-email' => [[['_route' => 'sendemail', '_controller' => 'App\\Controller\\MailerController::sendEmail'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'dashboard', '_controller' => 'App\\Controller\\UserController::dashboard'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|pi(?'
                        .'|(?:/(index)(?:\\.([^/]++))?)?(*:45)'
                        .'|/(?'
                            .'|docs(?:\\.([^/]++))?(*:75)'
                            .'|c(?'
                                .'|ontexts/(.+)(?:\\.([^/]++))?(*:113)'
                                .'|arrinhos(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:150)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:188)'
                                    .')'
                                .')'
                            .')'
                            .'|u(?'
                                .'|nidades(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:231)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:269)'
                                    .')'
                                .')'
                                .'|sers(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:304)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:342)'
                                    .')'
                                .')'
                            .')'
                            .'|produtos(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:382)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:420)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|dmin/(?'
                        .'|produtos/(?'
                            .'|(\\d+)(*:457)'
                            .'|delete/(\\d+)(*:477)'
                        .')'
                        .'|u(?'
                            .'|nidades/(?'
                                .'|(\\d+)(*:506)'
                                .'|delete/(\\d+)(*:526)'
                            .')'
                            .'|tilizador/([^/]++)(*:553)'
                        .')'
                        .'|carrinho/(\\d+)(?'
                            .'|(*:579)'
                        .')'
                    .')'
                .')'
                .'|/carrinho/(?'
                    .'|add/([^/]++)(*:615)'
                    .'|remove/([^/]++)(*:638)'
                .')'
                .'|/dashboard/carrinho/([^/]++)(*:675)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        45 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        75 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        113 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        150 => [
            [['_route' => 'api_carrinhos_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Carrinho', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_carrinhos_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Carrinho', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        188 => [
            [['_route' => 'api_carrinhos_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Carrinho', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_carrinhos_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Carrinho', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_carrinhos_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Carrinho', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_carrinhos_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Carrinho', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        231 => [
            [['_route' => 'api_unidades_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Unidade', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_unidades_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Unidade', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        269 => [
            [['_route' => 'api_unidades_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Unidade', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_unidades_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Unidade', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_unidades_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Unidade', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_unidades_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Unidade', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        304 => [
            [['_route' => 'api_users_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_users_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        342 => [
            [['_route' => 'api_users_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_users_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_users_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_users_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        382 => [
            [['_route' => 'api_produtos_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Produto', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_produtos_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Produto', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        420 => [
            [['_route' => 'api_produtos_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Produto', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_produtos_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Produto', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_produtos_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Produto', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_produtos_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Produto', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        457 => [[['_route' => 'admin_produto_edit', '_controller' => 'App\\Controller\\AdminController::edit_produto'], ['id'], null, null, false, true, null]],
        477 => [[['_route' => 'admin_produto_delete', '_controller' => 'App\\Controller\\AdminController::delete_produto'], ['id'], null, null, false, true, null]],
        506 => [[['_route' => 'admin_unidade_edit', '_controller' => 'App\\Controller\\AdminController::edit_unidade'], ['id'], null, null, false, true, null]],
        526 => [[['_route' => 'admin_unidade_delete', '_controller' => 'App\\Controller\\AdminController::delete_unidade'], ['id'], null, null, false, true, null]],
        553 => [[['_route' => 'admin_utilizador_edit', '_controller' => 'App\\Controller\\AdminController::edit_utilizador'], ['id'], null, null, false, true, null]],
        579 => [
            [['_route' => 'admin_carrinho_edit', '_controller' => 'App\\Controller\\AdminController::edit_carrinho'], ['id'], null, null, false, true, null],
            [['_route' => 'admin_carrinho_change_state', '_controller' => 'App\\Controller\\AdminController::edit_carrinho'], ['id'], null, null, false, true, null],
        ],
        615 => [[['_route' => 'add_carrinho', '_controller' => 'App\\Controller\\CarrinhoController::add_carrinho'], ['id'], null, null, false, true, null]],
        638 => [[['_route' => 'remove_carrinho', '_controller' => 'App\\Controller\\CarrinhoController::remove_carrinho'], ['id'], null, null, false, true, null]],
        675 => [
            [['_route' => 'show_sell', '_controller' => 'App\\Controller\\UserController::show_sell'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
