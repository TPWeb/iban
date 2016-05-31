<?php
namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Angola extends Country
{
    public $country_code = "AO";
    public $country_name = "Angola";
    public $domestic_example = "123412341234123412341";
    public $bban_example = "123412341234123412341";
    public $bban_format_swift = "21!n";
    public $bban_format_regex = "^[0-9]{21}$";
    public $bban_length = 21;
    public $iban_example = "AO44123412341234123412341";
    public $iban_format_swift = "AO2!n21!n";
    public $iban_format_regex = "^AO(\d{2})(\d{21})$";
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
    public $country_code_iana = "ao";
    public $country_code_iso3166_1_alpha2 = "AO";
    public $parent_registrar = "";
    public $currency_iso4217 = "AOA";
    public $central_bank_url = "www.bna.ao";
    public $central_bank_name = "National Bank of Angola";
}