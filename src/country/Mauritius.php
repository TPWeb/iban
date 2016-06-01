<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Mauritius extends Country
{
    public $country_code = "MU";
    public $country_name = "Mauritius";
    public $domestic_example = "BOMM 0101 1010 3030 0200 000M UR";
    public $bban_example = "BOMM0101101030300200000MUR";
    public $bban_format_swift = "4!a2!n2!n12!n3!n3!a";
    public $bban_format_regex = "^([A-Z]{4})(\d{2})(\d{2})(\d{12})(\d{3})([A-Z]{3})$";
    public $bban_length = 26;
    public $iban_example = "MU17BOMM0101101030300200000MUR";
    public $iban_format_swift = "MU2!n4!a2!n2!n12!n3!n3!a";
    public $iban_format_regex = "^MU(\d{2})([A-Z]{4})(\d{2})(\d{2})(\d{12})(\d{3})([A-Z]{3})$";
    public $iban_length = 30;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 5;
    public $bban_branchid_start_offset = "6";
    public $bban_branchid_stop_offset = "7";
    public $registry_edition = "2011-06-20";
    public $country_sepa = 0;
    public $swift_official = 1;
    public $bban_checksum_start_offset = "";
    public $bban_checksum_stop_offset = "";
    public $country_code_iana = "mu";
    public $country_code_iso3166_1_alpha2 = "MU";
    public $parent_registrar = "";
    public $currency_iso4217 = "MUR";
    public $central_bank_url = "www.bom.mu";
    public $central_bank_name = "Bank of Mauritius";
}