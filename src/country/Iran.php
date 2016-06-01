<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Iran extends Country
{
    public $country_code = "IR";
    public $country_name = "Iran";
    public $domestic_example = "1234123412341234123412";
    public $bban_example = "123412341234123412";
    public $bban_format_swift = "22!n";
    public $bban_format_regex = "^[0-9]{22}$";
    public $bban_length = 22;
    public $iban_example = "IR081234123412341234123412";
    public $iban_format_swift = "IR2!n22!n";
    public $iban_format_regex = "^IR(\d{2})(\d{22})$";
    public $iban_length = 26;
    public $bban_bankid_start_offset = "";
    public $bban_bankid_stop_offset = "";
    public $bban_branchid_start_offset = "";
    public $bban_branchid_stop_offset = "";
    public $registry_edition = "2016-01-22";
    public $country_sepa = 0;
    public $swift_official = 0;
    public $bban_checksum_start_offset = "";
    public $bban_checksum_stop_offset = "";
    public $country_code_iana = "ir";
    public $country_code_iso3166_1_alpha2 = "IR";
    public $parent_registrar = "";
    public $currency_iso4217 = "IRR";
    public $central_bank_url = "www.cbi.ir";
    public $central_bank_name = "The Central Bank of the Islamic Republic of Iran";
}