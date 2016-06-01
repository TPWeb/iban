<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class SaoTomeAndPrincipe extends Country
{
    public $country_code = "ST";
    public $country_name = "São Tomé and Príncipe";
    public $domestic_example = "518453101";
    public $bban_example = "0001000100518453101";
    public $bban_format_swift = "8!n11!n2!n";
    public $bban_format_regex = "^(\d{8})(\d{11})(\d{2})$";
    public $bban_length = 21;
    public $iban_example = "ST68000100010051845310112";
    public $iban_format_swift = "ST2!n8!n11!n2!n";
    public $iban_format_regex = "^ST(\d{2})(\d{8})(\d{11})(\d{2})$";
    public $iban_length = 25;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = -1;
    public $bban_branchid_start_offset = "";
    public $bban_branchid_stop_offset = "";
    public $registry_edition = "2016-01-21";
    public $country_sepa = 0;
    public $swift_official = 1;
    public $bban_checksum_start_offset = "";
    public $bban_checksum_stop_offset = "";
    public $country_code_iana = "st";
    public $country_code_iso3166_1_alpha2 = "ST";
    public $parent_registrar = "";
    public $currency_iso4217 = "STD";
    public $central_bank_url = "www.bcstp.st";
    public $central_bank_name = "Central Bank of São Tomé and Príncipe";
}