# Filament Abyss Theme

[![Latest Version on Packagist](https://img.shields.io/packagist/v/osamanagi/filament-abyss-theme.svg?style=flat-square)](https://packagist.org/packages/osamanagi/filament-abyss-theme)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/osamanagi/filament-abyss-theme/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/osamanagi/filament-abyss-theme/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/osamanagi/filament-abyss-theme/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/osamanagi/filament-abyss-theme/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/osamanagi/filament-abyss-theme.svg?style=flat-square)](https://packagist.org/packages/osamanagi/filament-abyss-theme)

Aesthetic Abyss theme for FilamentPHP.

Supports Filament 4 and 5 (PHP 8.2+). Filament 5 requires Livewire 4; follow the [Filament upgrade guide](https://filamentphp.com/docs/5.x/upgrade-guide) when upgrading an existing app.

![Dashboard Light and Dark](https://raw.githubusercontent.com/osamanagi/filament-abyss-theme/main/docs/dashboard.png)

## Installation

You can install the package via composer:

```bash
composer require osamanagi/filament-abyss-theme
```

Add a new item to the `input` array of your `vite.config.js` file:

```js
'vendor/osamanagi/filament-abyss-theme/resources/css/theme.css';
```

Run:

```bash
npm run build
```

Register the plugin on your panel (e.g. `/app/Providers/Filament/AdminPanelProvider.php`):

```php
use Nagi\FilamentAbyssTheme\FilamentAbyssThemePlugin;

$panel
  ->plugin(FilamentAbyssThemePlugin::make())
```

You're all set!

---

# Appearance

<table class="table">
  <thead>
    <tr>
      <th scope="col" width="1000px">Dashboard Light</th>
      <th scope="col" width="1000px">Dashboard Dark</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <img src="https://raw.githubusercontent.com/osamanagi/filament-abyss-theme/main/docs/dashboard_light.png" width="100%" alt="Dashboard Light">
      </td>
      <td>
        <img src="https://raw.githubusercontent.com/osamanagi/filament-abyss-theme/main/docs/dashboard_dark.png" width="100%" alt="Dashboard Dark">
      </td>
    </tr>
  </tbody>
</table>

### User Menu

<table class="table">
  <thead>
    <tr>
      <th scope="col" width="1000px">User Menu Light</th>
      <th scope="col" width="1000px">User Menu Dark</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <img src="https://raw.githubusercontent.com/osamanagi/filament-abyss-theme/main/docs/user_menu_light.png" width="100%" alt="User Menu Light">
      </td>
      <td>
        <img src="https://raw.githubusercontent.com/osamanagi/filament-abyss-theme/main/docs/user_menu_dark.png" width="100%" alt="User Menu Dark">
      </td>
    </tr>
  </tbody>
</table>

### Product

<table class="table">
  <thead>
    <tr>
      <th scope="col" width="1000px">Create Product Light</th>
      <th scope="col" width="1000px">Create Product Dark</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <img src="https://raw.githubusercontent.com/osamanagi/filament-abyss-theme/main/docs/product_create_light.png" width="100%" alt="Create Product Light">
      </td>
      <td>
        <img src="https://raw.githubusercontent.com/osamanagi/filament-abyss-theme/main/docs/product_create_dark.png" width="100%" alt="Create Product Dark">
      </td>
    </tr>
  </tbody>
</table>

### Notification

<table class="table">
  <thead>
    <tr>
      <th scope="col" width="1000px">Notification Light</th>
      <th scope="col" width="1000px">Notification Dark</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <img src="https://raw.githubusercontent.com/osamanagi/filament-abyss-theme/main/docs/notification_light.png" width="100%" alt="Notification Light">
      </td>
      <td>
        <img src="https://raw.githubusercontent.com/osamanagi/filament-abyss-theme/main/docs/notification_dark.png" width="100%" alt="Notification Dark">
      </td>
    </tr>
  </tbody>
</table>

### Order

<table class="table">
  <thead>
    <tr>
      <th scope="col" width="1000px">Order List Light</th>
      <th scope="col" width="1000px">Order List Dark</th>
      <th scope="col" width="1000px">Create Order Light</th>
      <th scope="col" width="1000px">Create Order Dark</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <img src="https://raw.githubusercontent.com/osamanagi/filament-abyss-theme/main/docs/orders_light.png" width="100%" alt="Order List Light">
      </td>
      <td>
        <img src="https://raw.githubusercontent.com/osamanagi/filament-abyss-theme/main/docs/orders_dark.png" width="100%" alt="Order List Dark">
      </td>
      <td>
        <img src="https://raw.githubusercontent.com/osamanagi/filament-abyss-theme/main/docs/order_create_light.png" width="100%" alt="Create Order Light">
      </td>
      <td>
        <img src="https://raw.githubusercontent.com/osamanagi/filament-abyss-theme/main/docs/order_create_dark.png" width="100%" alt="Create Order Dark">
      </td>
    </tr>
  </tbody>
</table>

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Osama Nagi](https://github.com/osamanagi)
- [Andréia Bohner](https://github.com/andreia) - For the inspiration
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
