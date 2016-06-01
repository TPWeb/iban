<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Gibraltar extends Country
{
    public $country_code = "GI";
    public $country_name = "Gibraltar";
    public $domestic_example = "0000 00007099 453";
    public $bban_example = "NWBK000000007099453";
    public $bban_format_swift = "4!a15!c";
    public $bban_format_regex = "^([A-Z]{4})([A-Za-z0-9]{15})$";
    public $bban_length = 19;
    public $iban_example = "GI75NWBK000000007099453";
    public $iban_format_swift = "GI2!n4!a15!c";
    public $iban_format_regex = "^GI(\d{2})([A-Z]{4})([A-Za-z0-9]{15})$";
    public $iban_length = 23;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 3;
    public $bban_branchid_start_offset = "";
    public $bban_branchid_stop_offset = "";
    public $registry_edition = "2011-06-20";
    public $country_sepa = 1;
    public $swift_official = 1;
    public $bban_checksum_start_offset = "";
    public $bban_checksum_stop_offset = "";
    public $country_code_iana = "gi";
    public $country_code_iso3166_1_alpha2 = "GI";
    public $parent_registrar = "";
    public $currency_iso4217 = "GIP";
    public $central_bank_url = "www.gibraltar.gov.gi";
    public $central_bank_name = "Government of Gibraltar";
}