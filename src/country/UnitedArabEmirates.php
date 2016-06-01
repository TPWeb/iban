<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class UnitedArabEmirates extends Country
{
    public $country_code = "AE";
    public $country_name = "United Arab Emirates";
    public $domestic_example = "1234567890123456";
    public $bban_example = "0331234567890123456";
    public $bban_format_swift = "3!n16!n";
    public $bban_format_regex = "^(\d{3})(\d{16})$";
    public $bban_length = 19;
    public $iban_example = "AE070331234567890123456";
    public $iban_format_swift = "AE2!n3!n16!n";
    public $iban_format_regex = "^AE(\d{2})(\d{3})(\d{16})$";
    public $iban_length = 23;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 2;
    public $bban_branchid_start_offset = "";
    public $bban_branchid_stop_offset = "";
    public $registry_edition = "2011-06-20";
    public $country_sepa = 0;
    public $swift_official = 1;
    public $bban_checksum_start_offset = "";
    public $bban_checksum_stop_offset = "";
    public $country_code_iana = "ae";
    public $country_code_iso3166_1_alpha2 = "AE";
    public $parent_registrar = "";
    public $currency_iso4217 = "AED";
    public $central_bank_url = "www.centralbank.ae";
    public $central_bank_name = "Central Bank of the United Arab Emirates";
}