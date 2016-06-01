<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class UnitedKingdom extends Country
{
    public $country_code = "GB";
    public $country_name = "United Kingdom";
    public $domestic_example = "60-16-13 31926819";
    public $bban_example = "NWBK60161331926819";
    public $bban_format_swift = "4!a6!n8!n";
    public $bban_format_regex = "^([A-Z]{4})(\d{6})(\d{8})$";
    public $bban_length = 18;
    public $iban_example = "GB29NWBK60161331926819";
    public $iban_format_swift = "GB2!n4!a6!n8!n";
    public $iban_format_regex = "^GB(\d{2})([A-Z]{4})(\d{6})(\d{8})$";
    public $iban_length = 22;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 3;
    public $bban_branchid_start_offset = "4";
    public $bban_branchid_stop_offset = "9";
    public $registry_edition = "2011-06-20";
    public $country_sepa = 1;
    public $swift_official = 1;
    public $bban_checksum_start_offset = "";
    public $bban_checksum_stop_offset = "";
    public $country_code_iana = "uk";
    public $country_code_iso3166_1_alpha2 = "GB";
    public $parent_registrar = "";
    public $currency_iso4217 = "GBP";
    public $central_bank_url = "www.bankofengland.co.uk";
    public $central_bank_name = "Bank of England";
}