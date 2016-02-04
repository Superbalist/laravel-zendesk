# laravel-zendesk

A Laravel Zendesk library for integrating with the Zendesk API

[![Author](http://img.shields.io/badge/author-@superbalist-blue.svg?style=flat-square)](https://twitter.com/superbalist)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Packagist Version](https://img.shields.io/packagist/v/superbalist/laravel-zendesk.svg?style=flat-square)](https://packagist.org/packages/superbalist/laravel-zendesk)
[![Total Downloads](https://img.shields.io/packagist/dt/superbalist/laravel-zendesk.svg?style=flat-square)](https://packagist.org/packages/superbalist/laravel-zendesk)

This package provides a Laravel service provider and facade for the zendesk/zendesk_api_client_php package.

## Installation

```bash
composer require superbalist/laravel-zendesk
```

Register the service provider in app.php
```php
'providers' => array(
    'Superbalist\Zendesk\ZendeskServiceProvider',
)
```

Register the facade in app.php
```php
'aliases' => array(
    'Zendesk' => 'Superbalist\Zendesk\ZendeskFacade',
)
```

Create a services.php config file.
```php
<?php

return array(

    'zendesk' => array(
        'subdomain' => '[[your zendesk subdomain]]',
        'username' => '[[your zendesk username]]',
        'token' => '[[your zendesk api token]]',
    ),

);
```

## Usage

Please see https://github.com/zendesk/zendesk_api_client_php for full documentation on the core API.

All functions provided by the core API are available behind the `Zendesk` facade in Laravel.

```php
use Zendesk;

// get all tickets
$zendesk = Zendesk::tickets()->findAll();

// create a new ticket
$ticket = Zendesk::tickets()->create([
    'subject' => 'The quick brown fox jumps over the lazy dog',
    'comment' => [
        'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, ' .
                  'sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    ],
    'priority' => 'normal'
]);
```