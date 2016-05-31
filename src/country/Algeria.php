<?php
namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Algeria extends Country
{
    public $country_code = "DZ";
    public $country_name = "Algeria";
    public $domestic_example = "12341234123412341234";
    public $bban_example = "12341234123412341234";
    public $bban_format_swift = "20!n";
    public $bban_format_regex = "^[0-9]{20}$";
    public $bban_length = 20;
    public $iban_example = "DZ3512341234123412341234";
    public $iban_format_swift = "DZ2!n20!n";
    public $iban_format_regex = "^DZ(\d{2})(\d{20})$";
    public $iban_length = 24;
    public $bban_bankid_start_offset = "";
    public $bban_bankid_stop_offset = "";
    public $bban_branchid_start_offset = "";
    public $bban_branchid_stop_offset = "";
    public $registry_edition = "2016-01-22";
    public $country_sepa = 0;
    public $swift_official = 0;
    public $bban_checksum_start_offset = "";
    public $bban_checksum_stop_offset = "";
    public $country_code_iana = "dz";
    public $country_code_iso3166_1_alpha2 = "DZ";
    public $parent_registrar = "";
    public $currency_iso4217 = "DZD";
    public $central_bank_url = "www.bank-of-algeria.dz";
    public $central_bank_name = "Bank of Algeria";
}