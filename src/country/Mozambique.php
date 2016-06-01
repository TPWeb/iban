<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Mozambique extends Country
{
    public $country_code = "MZ";
    public $country_name = "Mozambique";
    public $domestic_example = "12341234123412341";
    public $bban_example = "12341234123412341";
    public $bban_format_swift = "21!n";
    public $bban_format_regex = "^[0-9]{21}$";
    public $bban_length = 21;
    public $iban_example = "MZ97123412341234123412341";
    public $iban_format_swift = "MZ2!n21!n";
    public $iban_format_regex = "^MZ(\d{2})(\d{21})$";
    public $iban_length = 25;
    public $bban_bankid_start_offset = "";
    public $bban_bankid_stop_offset = "";
    public $bban_branchid_start_offset = "";
    public $bban_branchid_stop_offset = "";
    public $registry_edition = "2016-01-22";
    public $country_sepa = 0;
    public $swift_official = 0;
    public $bban_checksum_start_offset = "";
    public $bban_checksum_stop_offset = "";
    public $country_code_iana = "mz";
    public $country_code_iso3166_1_alpha2 = "MZ";
    public $parent_registrar = "";
    public $currency_iso4217 = "MZN";
    public $central_bank_url = "www.bancomoc.mz";
    public $central_bank_name = "Bank of Mozambique";
}