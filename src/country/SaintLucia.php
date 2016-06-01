<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class SaintLucia extends Country
{
    public $country_code = "LC";
    public $country_name = "Saint Lucia";
    public $domestic_example = "0001 0001 0012 0012 0002 3015";
    public $bban_example = "HEMM000100010012001200023015";
    public $bban_format_swift = "4!a24!c";
    public $bban_format_regex = "^([A-Z]{4})([A-Za-z0-9]{24})$";
    public $bban_length = 28;
    public $iban_example = "LC55HEMM000100010012001200023015";
    public $iban_format_swift = "LC2!n4!a24!c";
    public $iban_format_regex = "^LC(\d{2})([A-Z]{4})([A-Za-z0-9]{24})$";
    public $iban_length = 32;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 3;
    public $bban_branchid_start_offset = "";
    public $bban_branchid_stop_offset = "";
    public $registry_edition = "2016-04-15";
    public $country_sepa = 0;
    public $swift_official = 1;
    public $bban_checksum_start_offset = "";
    public $bban_checksum_stop_offset = "";
    public $country_code_iana = "lc";
    public $country_code_iso3166_1_alpha2 = "LC";
    public $parent_registrar = "";
    public $currency_iso4217 = "XCD";
    public $central_bank_url = "www.eccb-centralbank.org";
    public $central_bank_name = "Eastern Caribbean Central Bank";
}