<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Ireland extends Country
{
    public $country_code = "IE";
    public $country_name = "Ireland";
    public $domestic_example = "93-11-52 12345678";
    public $bban_example = "AIBK93115212345678";
    public $bban_format_swift = "4!a6!n8!n";
    public $bban_format_regex = "^([A-Z]{4})(\d{6})(\d{8})$";
    public $bban_length = 18;
    public $iban_example = "IE29AIBK93115212345678";
    public $iban_format_swift = "IE2!n4!a6!n8!n";
    public $iban_format_regex = "^IE(\d{2})([A-Z]{4})(\d{6})(\d{8})$";
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
    public $country_code_iana = "ie";
    public $country_code_iso3166_1_alpha2 = "IE";
    public $parent_registrar = "";
    public $currency_iso4217 = "EUR";
    public $central_bank_url = "www.centralbank.ie";
    public $central_bank_name = "Central Bank and Financial Services Authority of Ireland";
}