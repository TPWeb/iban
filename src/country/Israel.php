<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Israel extends Country
{
    public $country_code = "IL";
    public $country_name = "Israel";
    public $domestic_example = "10-800-99999999";
    public $bban_example = "010800000099999999";
    public $bban_format_swift = "3!n3!n13!n";
    public $bban_format_regex = "^(\d{3})(\d{3})(\d{13})$";
    public $bban_length = 19;
    public $iban_example = "IL620108000000099999999";
    public $iban_format_swift = "IL2!n3!n3!n13!n";
    public $iban_format_regex = "^IL(\d{2})(\d{3})(\d{3})(\d{13})$";
    public $iban_length = 23;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 2;
    public $bban_branchid_start_offset = "3";
    public $bban_branchid_stop_offset = "5";
    public $registry_edition = "2011-06-20";
    public $country_sepa = 0;
    public $swift_official = 1;
    public $bban_checksum_start_offset = "";
    public $bban_checksum_stop_offset = "";
    public $country_code_iana = "il";
    public $country_code_iso3166_1_alpha2 = "IL";
    public $parent_registrar = "";
    public $currency_iso4217 = "ILS";
    public $central_bank_url = "www.bankisrael.org.il";
    public $central_bank_name = "Bank of Israel";
}