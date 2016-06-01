<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Romania extends Country
{
    public $country_code = "RO";
    public $country_name = "Romania";
    public $domestic_example = "AAAA 1B31 0075 9384 0000";
    public $bban_example = "AAAA1B31007593840000";
    public $bban_format_swift = "4!a16!c";
    public $bban_format_regex = "^([A-Z]{4})([A-Za-z0-9]{16})$";
    public $bban_length = 20;
    public $iban_example = "RO49AAAA1B31007593840000";
    public $iban_format_swift = "RO2!n4!a16!c";
    public $iban_format_regex = "^RO(\d{2})([A-Z]{4})([A-Za-z0-9]{16})$";
    public $iban_length = 24;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 3;
    public $bban_branchid_start_offset = "";
    public $bban_branchid_stop_offset = "";
    public $registry_edition = "2011-06-20";
    public $country_sepa = 1;
    public $swift_official = 1;
    public $bban_checksum_start_offset = "";
    public $bban_checksum_stop_offset = "";
    public $country_code_iana = "ro";
    public $country_code_iso3166_1_alpha2 = "RO";
    public $parent_registrar = "";
    public $currency_iso4217 = "RON";
    public $central_bank_url = "www.bnro.ro";
    public $central_bank_name = "National Bank of Romania";
}