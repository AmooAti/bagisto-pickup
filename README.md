# Bagisto Pickup
![Packagist Downloads](https://img.shields.io/packagist/dt/digibytes/pickup) ![Packagist License](https://img.shields.io/packagist/l/digibytes/pickup)

This extension allows your customers to collect their orders from your physical store.

## Requirements
- [Bagisto](https://github.com/bagisto/bagisto)

## Installation

### Install with composer
1. Run the following command
```php
composer require digibytes/pickup
```
2. Go to `https://<your-site>/admin/configuration/sales/carriers`.
3. Make sure that **Picking up at the store** is active and press save.

### Install with package folder
1. Unzip all the files to **packages/Digibytes/Pickup**.
2. Open config/app.php and add **Digibytes\Pickup\Providers\PickupServiceProvider::class**.
3. Go to the root folder of bagisto and open composer.json, add "Digibytes\\Pickup\\": "packages/Digibytes/Pickup/src" at **psr-4**:
```json
"psr-4": {
    "App\\": "app/",
        "Webkul\\User\\": "packages/Webkul/User/src",
        "Webkul\\Admin\\": "packages/Webkul/Admin/src",
        "Webkul\\Ui\\": "packages/Webkul/Ui/src",
        "Webkul\\Category\\": "packages/Webkul/Category/src",
        "Webkul\\Checkout\\": "packages/Webkul/Checkout/src",
        "Webkul\\Attribute\\": "packages/Webkul/Attribute/src",
        "Webkul\\Shop\\": "packages/Webkul/Shop/src",
        "Webkul\\Core\\": "packages/Webkul/Core/src",
        "Webkul\\Customer\\": "packages/Webkul/Customer/src",
        "Webkul\\Inventory\\": "packages/Webkul/Inventory/src",
        "Webkul\\Product\\": "packages/Webkul/Product/src",
        "Webkul\\Theme\\": "packages/Webkul/Theme/src",
        "Webkul\\Shipping\\": "packages/Webkul/Shipping/src",
        "Webkul\\Payment\\": "packages/Webkul/Payment/src",
        "Webkul\\Paypal\\": "packages/Webkul/Paypal/src",
        "Webkul\\Sales\\": "packages/Webkul/Sales/src",
        "Webkul\\Tax\\": "packages/Webkul/Tax/src",
        "Webkul\\API\\": "packages/Webkul/API",
        "Webkul\\CatalogRule\\": "packages/Webkul/CatalogRule/src",
        "Webkul\\CartRule\\": "packages/Webkul/CartRule/src",
        "Webkul\\Rule\\": "packages/Webkul/Rule/src",
        "Webkul\\CMS\\": "packages/Webkul/CMS/src",
        "Webkul\\Velocity\\": "packages/Webkul/Velocity/src",
        "Webkul\\BookingProduct\\": "packages/Webkul/BookingProduct/src",
        "Webkul\\SocialLogin\\": "packages/Webkul/SocialLogin/src",
        "Digibytes\\Pickup\\": "packages/Digibytes/Pickup/src"
}
```
4. Go to https://<your-site>/admin/configuration/sales/carriers.
5. Make sure that **Picking up at the store** is active and press save.

Your customers are now able to select the new shipping method.
