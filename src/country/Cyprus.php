<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Cyprus extends Country
{
    public $country_code = "CY";
    public $country_name = "Cyprus";
    public $domestic_example = "1200527600";
    public $bban_example = "002001280000001200527600";
    public $bban_format_swift = "3!n5!n16!c";
    public $bban_format_regex = "^(\d{3})(\d{5})([A-Za-z0-9]{16})$";
    public $bban_length = 24;
    public $iban_example = "CY17002001280000001200527600";
    public $iban_format_swift = "CY2!n3!n5!n16!c";
    public $iban_format_regex = "^CY(\d{2})(\d{3})(\d{5})([A-Za-z0-9]{16})$";
    public $iban_length = 28;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 2;
    public $bban_branchid_start_offset = "3";
    public $bban_branchid_stop_offset = "7";
    public $registry_edition = "2011-06-20";
    public $country_sepa = 1;
    public $swift_official = 1;
    public $bban_checksum_start_offset = "";
    public $bban_checksum_stop_offset = "";
    public $country_code_iana = "cy";
    public $country_code_iso3166_1_alpha2 = "CY";
    public $parent_registrar = "";
    public $currency_iso4217 = "EUR";
    public $central_bank_url = "www.centralbank.gov.cy";
    public $central_bank_name = "Central Bank of Cyprus";
}