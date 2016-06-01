<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Sweden extends Country
{
    public $country_code = "SE";
    public $country_name = "Sweden";
    public $domestic_example = "1234 12 3456 1";
    public $bban_example = "5000 0000 0583 9825 7466";
    public $bban_format_swift = "3!n16!n1!n";
    public $bban_format_regex = "^(\d{3})(\d{16})(\d{1})$";
    public $bban_length = 20;
    public $iban_example = "SE4550000000058398257466";
    public $iban_format_swift = "SE2!n3!n16!n1!n";
    public $iban_format_regex = "^SE(\d{2})(\d{3})(\d{16})(\d{1})$";
    public $iban_length = 24;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 2;
    public $bban_branchid_start_offset = "";
    public $bban_branchid_stop_offset = "";
    public $registry_edition = "2011-06-20";
    public $country_sepa = 1;
    public $swift_official = 1;
    public $bban_checksum_start_offset = 19;
    public $bban_checksum_stop_offset = 19;
    public $country_code_iana = "se";
    public $country_code_iso3166_1_alpha2 = "SE";
    public $parent_registrar = "";
    public $currency_iso4217 = "SEK";
    public $central_bank_url = "www.riksbank.com";
    public $central_bank_name = "Bank of Sweden (Sveriges Riksbank)";
}