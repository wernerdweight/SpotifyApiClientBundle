SpotifyApiClientBundle
====================================

This bundle wraps [SpotifyApiClient](https://github.com/wernerdweight/SpotifyApiClient) into Symfony Bundle.

[![Build Status](https://travis-ci.org/wernerdweight/SpotifyApiClientBundle.svg?branch=master)](https://travis-ci.org/wernerdweight/SpotifyApiClientBundle)
[![Latest Stable Version](https://poser.pugx.org/wernerdweight/spotify-api-client-bundle/v/stable)](https://packagist.org/packages/wernerdweight/spotify-api-client-bundle)
[![Total Downloads](https://poser.pugx.org/wernerdweight/spotify-api-client-bundle/downloads)](https://packagist.org/packages/wernerdweight/spotify-api-client-bundle)
[![License](https://poser.pugx.org/wernerdweight/spotify-api-client-bundle/license)](https://packagist.org/packages/wernerdweight/spotify-api-client-bundle)


Installation
------------

1) Download using composer

```bash
composer require wernerdweight/spotify-api-client-bundle
```

2) Enable the bundle

Enable the bundle in your kernel:

```php
    <?php
    // config/bundles.php
    return [
        // ...
        WernerDweight\SpotifyApiClientBundle\SpotifyApiClientBundle::class => ['all' => true],
    ];
```

3) Use in your project

```php
use WernerDweight\SpotifyApiClientBundle\Service\ApiFactory;

class MyService
{
    // TODO:
}
```

License
-------
This bundle is under the MIT license. See the complete license in the root directiory of the bundle.
