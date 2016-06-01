<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Norway extends Country
{
    public $country_code = "NO";
    public $country_name = "Norway";
    public $domestic_example = "8601 11 17947";
    public $bban_example = "86011117947";
    public $bban_format_swift = "4!n6!n1!n";
    public $bban_format_regex = "^(\d{4})(\d{6})(\d{1})$";
    public $bban_length = 11;
    public $iban_example = "NO9386011117947";
    public $iban_format_swift = "NO2!n4!n6!n1!n";
    public $iban_format_regex = "^NO(\d{2})(\d{4})(\d{6})(\d{1})$";
    public $iban_length = 15;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 3;
    public $bban_branchid_start_offset = "";
    public $bban_branchid_stop_offset = "";
    public $registry_edition = "2011-06-20";
    public $country_sepa = 1;
    public $swift_official = 1;
    public $bban_checksum_start_offset = 10;
    public $bban_checksum_stop_offset = 10;
    public $country_code_iana = "no";
    public $country_code_iso3166_1_alpha2 = "NO";
    public $parent_registrar = "";
    public $currency_iso4217 = "NOK";
    public $central_bank_url = "www.norges-bank.no";
    public $central_bank_name = "Central Bank of Norway (Norges Bank)";
}