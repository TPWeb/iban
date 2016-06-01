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
### Laraval validator
```php
public function store(Request $request) {
    $this->validate($request, ['ibannumber' => 'required|iban', 'bicnumber' => 'required|bic']);
}
```

## Calculation (Only BE en NL)
```php
$ibannr = "BE....";
$iban = new Iban($ibannr);
$bic = $iban->calculateBic();
```


The complete documentation can be found at: [http://www.tpweb.org/my-projects/php-iban-library/](http://www.tpweb.org/my-projects/php-iban-library/)

# Countries Supported
The following 99 official and *unofficial* IBAN countries are supported.

* Albania (AL)
* *Algeria* (DZ)
* Andorra (AD)
* *Angola* (AO)
* Austria (AT)
* Azerbaijan (AZ)
* Bahrain (BH)
* Belgium (BE)
* *Benin* (BJ)
* Bosnia and Herzegovina (BA)
* Brazil (BR)
* British Virgin Islands (VG)
* Bulgaria (BG)
* *Burkina Faso* (BF)
* *Burundi* (BI)
* *Cameroon* (CM)
* *Cape Verde* (CV)
* Costa Rica (CR)
* *Côte d'Ivoire* (CI)
* Croatia (HR)
* Cyprus (CY)
* Czech Republic (CZ)
* Denmark (DK)
 * Faroe Islands (FO)
 * Greenland (GL)
* Dominican Republic (DO)
* Estonia (EE)
* Finland (FI)
 * Åland Islands (AX)
* France (FR)
 * French Guiana (GF)
 * French Polynesia (PF)
 * French Southern Territories (TF)
 * Guadelope (GP)
 * Martinique (MQ)
 * Mayotte (YT)
 * New Caledonia (NC)
 * Réunion (RE)
 * Saint Barhélemy (BL)
 * Saint Martin (French Part) (MF)
 * Saint-Pierre and Miquelon (PM)
 * Wallis and Futuna (WF)
* Georgia (GE)
* Germany (DE)
* Gibraltar (GI)
* Greece (GR)
* Guatemala (GT)
* Hungary (HU)
* Iceland (IS)
* *IIBAN (Internet)* (AA)
* *Iran* (IR)
* Ireland (IE)
* Israel (IL)
* Italy (IT)
* Jordan (JO)
* Kazakhstan (KZ)
* Kosovo (XK)
* Kuwait (KW)
* Latvia (LV)
* Lebanon (LB)
* Liechtenstein (LI)
* Lithuania (LT)
* Luxembourg (LU)
* Macedonia (MK)
* *Madagascar* (MG)
* *Mali* (ML)
* Malta (MT)
* Mauritania (MR)
* Mauritius (MU)
* Moldova (MD)
* Monaco (MC)
* Montenegro (ME)
* *Mozambique* (MZ)
* Netherlands (NL)
* Norway (NO)
* Pakistan (PK)
* Palestine (PS)
* Poland (PL)
* Portugal (PT)
* Qatar (QA)
* Romania (RO)
* Saint Lucia (LC)
* San Marino (SM)
* São Tomé and Príncipe (ST)
* Saudi Arabia (SA)
* *Senegal* (SN)
* Serbia (RS)
* Seychelles (SC)
* Slovakia (SK)
* Slovenia (SI)
* Spain (ES)
* Sweden (SE)
* Switzerland (CH)
* Timor-Leste (TL)
* Tunisia (TN)
* Turkey (TR)
* *Ukraine* (UA)
* United Arab Emirates (AE)
* United Kingdom (GB)

# Support

Support github or mail: tjebbe.lievens@madeit.be

# Contributing

Please try to follow the psr-2 coding style guide. http://www.php-fig.org/psr/psr-2/
t
# License

This package is licensed under LGPL. You are free to use it in personal and commercial projects. The code can be forked and modified, but the original copyright author should always be included!