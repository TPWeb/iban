<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Seychelles extends Country
{
    public $country_code = "SC";
    public $country_name = "Seychelles";
    public $domestic_example = "0000000000001497";
    public $bban_example = "SSCB11010000000000001497USD";
    public $bban_format_swift = "4a!2n!2n!16n!3a!";
    public $bban_format_regex = "^([A-Z]{4})!(\d{2})!(\d{2})!(\d{16})!([A-Z]{3})!$";
    public $bban_length = 27;
    public $iban_example = "SC18SSCB11010000000000001497USD";
    public $iban_format_swift = "SC2!n4a!2n!2n!16n!3a!";
    public $iban_format_regex = "^SC(\d{2})([A-Z]{4})(\d{2})(\d{2})(\d{16})([A-Z]{3})$";
    public $iban_length = 31;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 3;
    public $bban_branchid_start_offset = "4";
    public $bban_branchid_stop_offset = "7";
    public $registry_edition = "2016-03-29";
    public $country_sepa = 0;
    public $swift_official = 1;
    public $bban_checksum_start_offset = "";
    public $bban_checksum_stop_offset = "";
    public $country_code_iana = "sc";
    public $country_code_iso3166_1_alpha2 = "SC";
    public $parent_registrar = "";
    public $currency_iso4217 = "SCR";
    public $central_bank_url = "www.cbs.sc";
    public $central_bank_name = "Central Bank of Seychelles";
}