<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Finland extends Country
{
    public $country_code = "FI";
    public $country_name = "Finland";
    public $domestic_example = "123456-785";
    public $bban_example = "12345600000785";
    public $bban_format_swift = "6!n7!n1!n";
    public $bban_format_regex = "^(\d{6})(\d{7})(\d{1})$";
    public $bban_length = 14;
    public $iban_example = "FI2112345600000785";
    public $iban_format_swift = "FI2!n6!n7!n1!n";
    public $iban_format_regex = "^FI(\d{2})(\d{6})(\d{7})(\d{1})$";
    public $iban_length = 18;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 2;
    public $bban_branchid_start_offset = "";
    public $bban_branchid_stop_offset = "";
    public $registry_edition = "2013-08-05";
    public $country_sepa = 1;
    public $swift_official = 1;
    public $bban_checksum_start_offset = 13;
    public $bban_checksum_stop_offset = 13;
    public $country_code_iana = "fi";
    public $country_code_iso3166_1_alpha2 = "FI";
    public $parent_registrar = "";
    public $currency_iso4217 = "EUR";
    public $central_bank_url = "www.suomenpankki.fi";
    public $central_bank_name = "Bank of Finland";
}