<?php


 namespace Nguyenductam\XuongOop\Controllers; 
use Nguyenductam\XuongOop\Controllers\Client\AboutController;
use Nguyenductam\XuongOop\Controllers\Client\CartController;
use Nguyenductam\XuongOop\Controllers\Client\ContactController;
use Nguyenductam\XuongOop\Controllers\Client\HomeController;
use Nguyenductam\XuongOop\Controllers\Client\LoginController;
use Nguyenductam\XuongOop\Controllers\Client\OrderController;
use Nguyenductam\XuongOop\Controllers\Client\ProductController;

$router->get( '/',                  HomeController::class       . '@index');
$router->get( '/about',             AboutController::class      . '@index');

$router->get( '/contact',           ContactController::class    . '@index');
$router->post( '/contact/store',    ContactController::class    . '@store');

$router->get( '/products',          ProductController::class    . '@index');
$router->get( '/products/{id}',     ProductController::class    . '@detail');

$router->get( '/login',             LoginController::class    . '@showFormLogin');
$router->post( '/handle-login',     LoginController::class    . '@login');
$router->get( '/logout',            LoginController::class    . '@logout');

$router->get('cart/add',           CartController::class . '@add');
$router->get('cart/quantityInc',   CartController::class . '@quantityInc');
$router->get('cart/quantityDec',   CartController::class . '@quantityDec');
$router->get('cart/remove',        CartController::class . '@remove');
$router->get('cart/detail',        CartController::class . '@detail');

$router->post('order/checkout',     OrderController::class . '@checkout');