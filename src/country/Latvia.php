<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Latvia extends Country
{
    public $country_code = "LV";
    public $country_name = "Latvia";
    public $domestic_example = "BANK 0000 4351 9500 1";
    public $bban_example = "BANK0000435195001";
    public $bban_format_swift = "4!a13!c";
    public $bban_format_regex = "^([A-Z]{4})([A-Za-z0-9]{13})$";
    public $bban_length = 17;
    public $iban_example = "LV80BANK0000435195001";
    public $iban_format_swift = "LV2!n4!a13!c";
    public $iban_format_regex = "^LV(\d{2})([A-Z]{4})([A-Za-z0-9]{13})$";
    public $iban_length = 21;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 3;
    public $bban_branchid_start_offset = "";
    public $bban_branchid_stop_offset = "";
    public $registry_edition = "2011-06-20";
    public $country_sepa = 1;
    public $swift_official = 1;
    public $bban_checksum_start_offset = "";
    public $bban_checksum_stop_offset = "";
    public $country_code_iana = "lv";
    public $country_code_iso3166_1_alpha2 = "LV";
    public $parent_registrar = "";
    public $currency_iso4217 = "EUR";
    public $central_bank_url = "www.bank.lv/lat/main/all";
    public $central_bank_name = "Bank of Latvia";
}