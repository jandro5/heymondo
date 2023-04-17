<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Api without validations

Listado de Pedidos por Tienda (La Tienda será opcional mostrando el conjunto en suausencia) 
GET: /api/ecommerce/orders/list_orders 
GET: /api/ecommerce/orders/list_orders/{id}

Listado de Productos de una Empresa proveedora 
GET: /api/ecommerce/items/list_by_supplier/{id}

Listado de Productos más vendido por Tienda. (La Tienda será opcional mostrando elconjunto en su ausencia) 
GET: /api/ecommerce/items/list_by_shop 
GET: /api/ecommerce/items/list_by_shop/{id}

Listado de Tiendas con más ventas 
GET: /api/ecommerce/shops/list_users  

Listado de Usuarios con más compras
GET: /api/ecommerce/orders/list_users