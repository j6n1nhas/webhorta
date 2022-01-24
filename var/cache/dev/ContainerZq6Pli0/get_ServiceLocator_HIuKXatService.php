<?php

namespace ContainerZq6Pli0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HIuKXatService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.HIuKXat' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.HIuKXat'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AdminController::add_produto' => ['privates', '.service_locator.K.UQwlM', 'get_ServiceLocator_K_UQwlMService', true],
            'App\\Controller\\AdminController::add_unidade' => ['privates', '.service_locator.t6i3vFk', 'get_ServiceLocator_T6i3vFkService', true],
            'App\\Controller\\AdminController::admin_index' => ['privates', '.service_locator.t6i3vFk', 'get_ServiceLocator_T6i3vFkService', true],
            'App\\Controller\\AdminController::delete_produto' => ['privates', '.service_locator.t6i3vFk', 'get_ServiceLocator_T6i3vFkService', true],
            'App\\Controller\\AdminController::delete_unidade' => ['privates', '.service_locator.t6i3vFk', 'get_ServiceLocator_T6i3vFkService', true],
            'App\\Controller\\AdminController::edit_carrinho' => ['privates', '.service_locator.t6i3vFk', 'get_ServiceLocator_T6i3vFkService', true],
            'App\\Controller\\AdminController::edit_produto' => ['privates', '.service_locator.OJizLwd', 'get_ServiceLocator_OJizLwdService', true],
            'App\\Controller\\AdminController::edit_unidade' => ['privates', '.service_locator.t6i3vFk', 'get_ServiceLocator_T6i3vFkService', true],
            'App\\Controller\\AdminController::edit_utilizador' => ['privates', '.service_locator.t6i3vFk', 'get_ServiceLocator_T6i3vFkService', true],
            'App\\Controller\\CarrinhoController::add_carrinho' => ['privates', '.service_locator.qf9j044', 'get_ServiceLocator_Qf9j044Service', true],
            'App\\Controller\\CarrinhoController::cancela_carrinho' => ['privates', '.service_locator.dbFJ5zg', 'get_ServiceLocator_DbFJ5zgService', true],
            'App\\Controller\\CarrinhoController::carrinho' => ['privates', '.service_locator.dbFJ5zg', 'get_ServiceLocator_DbFJ5zgService', true],
            'App\\Controller\\CarrinhoController::grava_carrinho' => ['privates', '.service_locator.qf9j044', 'get_ServiceLocator_Qf9j044Service', true],
            'App\\Controller\\CarrinhoController::remove_carrinho' => ['privates', '.service_locator.qf9j044', 'get_ServiceLocator_Qf9j044Service', true],
            'App\\Controller\\Controller::contactus' => ['privates', '.service_locator.bTL6sts', 'get_ServiceLocator_BTL6stsService', true],
            'App\\Controller\\Controller::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\Controller::signup' => ['privates', '.service_locator.l_KMMhu', 'get_ServiceLocator_LKMMhuService', true],
            'App\\Controller\\MailerController::sendEmail' => ['privates', '.service_locator.6E9xidT', 'get_ServiceLocator_6E9xidTService', true],
            'App\\Controller\\ProdutoController::index' => ['privates', '.service_locator.t6i3vFk', 'get_ServiceLocator_T6i3vFkService', true],
            'App\\Controller\\UserController::dashboard' => ['privates', '.service_locator.ysyCmzw', 'get_ServiceLocator_YsyCmzwService', true],
            'App\\Controller\\UserController::show_sell' => ['privates', '.service_locator.t6i3vFk', 'get_ServiceLocator_T6i3vFkService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'App\\Controller\\AdminController:add_produto' => ['privates', '.service_locator.K.UQwlM', 'get_ServiceLocator_K_UQwlMService', true],
            'App\\Controller\\AdminController:add_unidade' => ['privates', '.service_locator.t6i3vFk', 'get_ServiceLocator_T6i3vFkService', true],
            'App\\Controller\\AdminController:admin_index' => ['privates', '.service_locator.t6i3vFk', 'get_ServiceLocator_T6i3vFkService', true],
            'App\\Controller\\AdminController:delete_produto' => ['privates', '.service_locator.t6i3vFk', 'get_ServiceLocator_T6i3vFkService', true],
            'App\\Controller\\AdminController:delete_unidade' => ['privates', '.service_locator.t6i3vFk', 'get_ServiceLocator_T6i3vFkService', true],
            'App\\Controller\\AdminController:edit_carrinho' => ['privates', '.service_locator.t6i3vFk', 'get_ServiceLocator_T6i3vFkService', true],
            'App\\Controller\\AdminController:edit_produto' => ['privates', '.service_locator.OJizLwd', 'get_ServiceLocator_OJizLwdService', true],
            'App\\Controller\\AdminController:edit_unidade' => ['privates', '.service_locator.t6i3vFk', 'get_ServiceLocator_T6i3vFkService', true],
            'App\\Controller\\AdminController:edit_utilizador' => ['privates', '.service_locator.t6i3vFk', 'get_ServiceLocator_T6i3vFkService', true],
            'App\\Controller\\CarrinhoController:add_carrinho' => ['privates', '.service_locator.qf9j044', 'get_ServiceLocator_Qf9j044Service', true],
            'App\\Controller\\CarrinhoController:cancela_carrinho' => ['privates', '.service_locator.dbFJ5zg', 'get_ServiceLocator_DbFJ5zgService', true],
            'App\\Controller\\CarrinhoController:carrinho' => ['privates', '.service_locator.dbFJ5zg', 'get_ServiceLocator_DbFJ5zgService', true],
            'App\\Controller\\CarrinhoController:grava_carrinho' => ['privates', '.service_locator.qf9j044', 'get_ServiceLocator_Qf9j044Service', true],
            'App\\Controller\\CarrinhoController:remove_carrinho' => ['privates', '.service_locator.qf9j044', 'get_ServiceLocator_Qf9j044Service', true],
            'App\\Controller\\Controller:contactus' => ['privates', '.service_locator.bTL6sts', 'get_ServiceLocator_BTL6stsService', true],
            'App\\Controller\\Controller:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\Controller:signup' => ['privates', '.service_locator.l_KMMhu', 'get_ServiceLocator_LKMMhuService', true],
            'App\\Controller\\MailerController:sendEmail' => ['privates', '.service_locator.6E9xidT', 'get_ServiceLocator_6E9xidTService', true],
            'App\\Controller\\ProdutoController:index' => ['privates', '.service_locator.t6i3vFk', 'get_ServiceLocator_T6i3vFkService', true],
            'App\\Controller\\UserController:dashboard' => ['privates', '.service_locator.ysyCmzw', 'get_ServiceLocator_YsyCmzwService', true],
            'App\\Controller\\UserController:show_sell' => ['privates', '.service_locator.t6i3vFk', 'get_ServiceLocator_T6i3vFkService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
        ], [
            'App\\Controller\\AdminController::add_produto' => '?',
            'App\\Controller\\AdminController::add_unidade' => '?',
            'App\\Controller\\AdminController::admin_index' => '?',
            'App\\Controller\\AdminController::delete_produto' => '?',
            'App\\Controller\\AdminController::delete_unidade' => '?',
            'App\\Controller\\AdminController::edit_carrinho' => '?',
            'App\\Controller\\AdminController::edit_produto' => '?',
            'App\\Controller\\AdminController::edit_unidade' => '?',
            'App\\Controller\\AdminController::edit_utilizador' => '?',
            'App\\Controller\\CarrinhoController::add_carrinho' => '?',
            'App\\Controller\\CarrinhoController::cancela_carrinho' => '?',
            'App\\Controller\\CarrinhoController::carrinho' => '?',
            'App\\Controller\\CarrinhoController::grava_carrinho' => '?',
            'App\\Controller\\CarrinhoController::remove_carrinho' => '?',
            'App\\Controller\\Controller::contactus' => '?',
            'App\\Controller\\Controller::login' => '?',
            'App\\Controller\\Controller::signup' => '?',
            'App\\Controller\\MailerController::sendEmail' => '?',
            'App\\Controller\\ProdutoController::index' => '?',
            'App\\Controller\\UserController::dashboard' => '?',
            'App\\Controller\\UserController::show_sell' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AdminController:add_produto' => '?',
            'App\\Controller\\AdminController:add_unidade' => '?',
            'App\\Controller\\AdminController:admin_index' => '?',
            'App\\Controller\\AdminController:delete_produto' => '?',
            'App\\Controller\\AdminController:delete_unidade' => '?',
            'App\\Controller\\AdminController:edit_carrinho' => '?',
            'App\\Controller\\AdminController:edit_produto' => '?',
            'App\\Controller\\AdminController:edit_unidade' => '?',
            'App\\Controller\\AdminController:edit_utilizador' => '?',
            'App\\Controller\\CarrinhoController:add_carrinho' => '?',
            'App\\Controller\\CarrinhoController:cancela_carrinho' => '?',
            'App\\Controller\\CarrinhoController:carrinho' => '?',
            'App\\Controller\\CarrinhoController:grava_carrinho' => '?',
            'App\\Controller\\CarrinhoController:remove_carrinho' => '?',
            'App\\Controller\\Controller:contactus' => '?',
            'App\\Controller\\Controller:login' => '?',
            'App\\Controller\\Controller:signup' => '?',
            'App\\Controller\\MailerController:sendEmail' => '?',
            'App\\Controller\\ProdutoController:index' => '?',
            'App\\Controller\\UserController:dashboard' => '?',
            'App\\Controller\\UserController:show_sell' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
