<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class SanMarino extends Country
{
    public $country_code = "SM";
    public $country_name = "San Marino";
    public $domestic_example = "U032 2509 8000 0000 0270 100";
    public $bban_example = "U0322509800000000270100";
    public $bban_format_swift = "1!a5!n5!n12!c";
    public $bban_format_regex = "^([A-Z]{1})(\d{5})(\d{5})([A-Za-z0-9]{12})$";
    public $bban_length = 23;
    public $iban_example = "SM86U0322509800000000270100";
    public $iban_format_swift = "SM2!n1!a5!n5!n12!c";
    public $iban_format_regex = "^SM(\d{2})([A-Z]{1})(\d{5})(\d{5})([A-Za-z0-9]{12})$";
    public $iban_length = 27;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 5;
    public $bban_branchid_start_offset = "6";
    public $bban_branchid_stop_offset = "10";
    public $registry_edition = "2011-06-20";
    public $country_sepa = 1;
    public $swift_official = 1;
    public $bban_checksum_start_offset = 0;
    public $bban_checksum_stop_offset = 0;
    public $country_code_iana = "sm";
    public $country_code_iso3166_1_alpha2 = "SM";
    public $parent_registrar = "";
    public $currency_iso4217 = "EUR";
    public $central_bank_url = "www.bcsm.sm";
    public $central_bank_name = "Central Bank of the Republic of San Marino";
}