# The Lost `vendor:publish` Command for Lumen

Install and configure to get it added to your artisan commands list!

## Overview

It is simply using `VendorPublishCommand.php` and `VendorTagPublished.php` from Laravel Framework itself.


## Installation

```
composer require steve-moretz/lumen-vendor-publish-command
```

## Usage

### Automatic

use https://github.com/LaraPKG/lumen-discovery for adding auto-discovery to your lumen, so you won't have to do any manual Service Provider Registry for any package!

### Manual

Register the service provider in bootstrap/app.php of your Lumen installation
```php
$app->register(\SteveMoretz\LumenVendorPublish\Laravel\app\Providers\ServiceProvider::class);
```

## Contributing

Feel free to send PRs.

## License

This project is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
