# Laravel Countries

Laravel Countries is a bundle for Laravel (Hungarian)

## Installation

Add `netipar/laravel-countries` to `composer.json`.

    "netipar/laravel-countries": "dev-master"

Run `composer update` to pull down the latest version of Country List.


Edit `app/config/app.php` and add the `provider` and `filter`

    'providers' => array(
        'Netipar\Countries\CountriesServiceProvider',
    )

Now add the alias.

    'aliases' => array(
        'Countries' => 'Netipar\Countries\CountriesFacade',
    )

