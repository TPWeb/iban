<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class SaintPierreAndMiquelon extends Country
{
    public $country_code = "PM";
    public $country_name = "Saint-Pierre and Miquelon";
    public $domestic_example = "20041 01005 0500013M026 06";
    public $bban_example = "20041010050500013M02606";
    public $bban_format_swift = "5!n5!n11!c2!n";
    public $bban_format_regex = "^(\d{5})(\d{5})([A-Za-z0-9]{11})(\d{2})$";
    public $bban_length = 23;
    public $iban_example = "PM3620041010050500013M02606";
    public $iban_format_swift = "PM2!n5!n5!n11!c2!n";
    public $iban_format_regex = "^PM(\d{2})(\d{5})(\d{5})([A-Za-z0-9]{11})(\d{2})$";
    public $iban_length = 27;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 4;
    public $bban_branchid_start_offset = "5";
    public $bban_branchid_stop_offset = "9";
    public $registry_edition = "2013-08-28";
    public $country_sepa = 1;
    public $swift_official = 1;
    public $bban_checksum_start_offset = 21;
    public $bban_checksum_stop_offset = 22;
    public $country_code_iana = "pm";
    public $country_code_iso3166_1_alpha2 = "PM";
    public $parent_registrar = "FR";
    public $currency_iso4217 = "EUR";
    public $central_bank_url = "www.banque-france.fr";
    public $central_bank_name = "Bank of France (Banque de France)";
}