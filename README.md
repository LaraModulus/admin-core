LaraMod Admin Core 0.2 Alpha
----------------------------
LaraMod is a modular Laravel based CMS.
https://github.com/LaraModulus

Installation
---------------
```
composer require laramod\admin-core
```
 **config/app.php**
 
```php 
'providers' => [
    ...
    LaraMod\Admin\Core\AdminCoreServiceProvider::class
]
```
**config/auth.php**
```php
'guards' => [
        ...
        'admin' => [
            'driver' => 'session',
            'provider' => 'admins'
        ]
    ],
'providers' => [
        ...
        'admins' => [
            'driver' => 'eloquent',
            'model' => \LaraMod\Admin\Core\Models\Admin::class
        ]
    ],
'passwords' => [
        ...
        'admins' => [
            'provider' => 'admins',
            'email' => 'auth.emails.password',
            'table' => 'admin_password_resets',
            'expire' => 60,
        ]
    ],
```
**app/Http/Kernel.php**
```php
protected $middlewareGroups = [
        ...
        'admin' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
        ]
    ];
protected $routeMiddleware = [
        ...
        'auth.admin' => \LaraMod\Admin\Core\Middleware\Authenticate::class,
    ];
```
**Publish config files**
```
php artisan vendor:publish --tag="config"
```
In `config/admincore.php` you can edit admin menu

**Publish assets**
```
php artisan vendor:publish --tag="public"
```
**Publish migrations**
```
php artisan vendor:publish --tag="migrations"
```
**DEMO:** http://laramod.novaspace.eu/admin
```
user: admin@admin.com
pass: admin
```