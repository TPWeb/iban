# PHP TargetPay Library
[![Build Status](https://travis-ci.org/TPWeb/iban.svg?branch=master)](https://travis-ci.org/TPWeb/iban)
[![Coverage Status](https://coveralls.io/repos/github/TPWeb/iban/badge.svg?branch=master)](https://coveralls.io/github/TPWeb/iban?branch=master)
[![Latest Stable Version](https://poser.pugx.org/tpweb/iban/v/stable.svg)](https://packagist.org/packages/tpweb/iban)
[![Latest Unstable Version](https://poser.pugx.org/tpweb/iban/v/unstable.svg)](https://packagist.org/packages/tpweb/iban)
[![Total Downloads](https://poser.pugx.org/tpweb/iban/d/total.svg)](https://packagist.org/packages/tpweb/iban)
[![License](https://poser.pugx.org/tpweb/iban/license.svg)](https://packagist.org/packages/tpweb/iban)

#Installation

Require this package in your `composer.json` and update composer.

```php
"tpweb/iban": "~1.*"
```

After updating composer, add the ServiceProvider to the providers array in `config/app.php`

```php
TPWeb\Iban\IbanServiceProvider::class,
```

You can use the facade for shorter code. Add this to your aliases:

```php
'Iban' => TPWeb\Iban\IbanFacade::class,
```

# Documentation
## Validation
```php
$ibannr = "BE....";
$iban = new Iban($ibannr);
if($iban->isIbanValid()) {
    echo "IBAN is valid";
}
```

## Calculation
```php
$ibannr = "BE....";
$iban = new Iban($ibannr);
```


The complete documentation can be found at: [http://www.tpweb.org/my-projects/php-iban-library/](http://www.tpweb.org/my-projects/php-iban-library/)

# Support

Support github or mail: tjebbe.lievens@madeit.be

# Contributing

Please try to follow the psr-2 coding style guide. http://www.php-fig.org/psr/psr-2/
t
# License

This package is licensed under LGPL. You are free to use it in personal and commercial projects. The code can be forked and modified, but the original copyright author should always be included!