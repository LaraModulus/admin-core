LaraMod Admin Core 0.1 Alpha
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
    LaraMod\AdminCore\AdminCoreServiceProvider::class,
]
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
**DEMO:** http://laramod.novaspace.eu/admin
```
user: admin@admin.com
pass: admin
```