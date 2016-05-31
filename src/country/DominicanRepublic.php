<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class DominicanRepublic extends Country
{
    public $country_code = "DO";
    public $country_name = "Dominican Republic";
    public $domestic_example = "1212453611324";
    public $bban_example = "AGR00000001212453611324";
    public $bban_format_swift = "4!c20!n";
    public $bban_format_regex = "^([A-Za-z0-9]{4})(\d{20})$";
    public $bban_length = 24;
    public $iban_example = "DO28BAGR00000001212453611324";
    public $iban_format_swift = "DO2!n4!c20!n";
    public $iban_format_regex = "^DO(\d{2})([A-Za-z0-9]{4})(\d{20})$";
    public $iban_length = 28;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 3;
    public $bban_branchid_start_offset = "";
    public $bban_branchid_stop_offset = "";
    public $registry_edition = "2011-06-20";
    public $country_sepa = 0;
    public $swift_official = 1;
    public $bban_checksum_start_offset = "";
    public $bban_checksum_stop_offset = "";
    public $country_code_iana = "do";
    public $country_code_iso3166_1_alpha2 = "DO";
    public $parent_registrar = "";
    public $currency_iso4217 = "DOP";
    public $central_bank_url = "www.bancentral.gov.do";
    public $central_bank_name = "Central Bank of the Dominican Republic";
}