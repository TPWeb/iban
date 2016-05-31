<?php
namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Albania extends Country
{
    public $country_code = "AL";
    public $country_name = "Albania";
    public $domestic_example = "0000000235698741";
    public $bban_example = "212110090000000235698741";
    public $bban_format_swift = "8!n16!c";
    public $bban_format_regex = "^(\d{8})([A-Za-z0-9]{16})$";
    public $bban_length = 24;
    public $iban_example = "AL47212110090000000235698741";
    public $iban_format_swift = "AL2!n8!n16!c";
    public $iban_format_regex = "^AL(\d{2})(\d{8})([A-Za-z0-9]{16})$";
    public $iban_length = 28;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 2;
    public $bban_branchid_start_offset = "3";
    public $bban_branchid_stop_offset = "6";
    public $registry_edition = "2011-06-20";
    public $country_sepa = 0;
    public $swift_official = 1;
    public $bban_checksum_start_offset = 7;
    public $bban_checksum_stop_offset = 7;
    public $country_code_iana = "al";
    public $country_code_iso3166_1_alpha2 = "AL";
    public $parent_registrar = "";
    public $currency_iso4217 = "ALL";
    public $central_bank_url = "www.bankofalbania.org";
    public $central_bank_name = "Bank of Albania";
}