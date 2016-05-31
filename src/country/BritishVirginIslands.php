<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class BritishVirginIslands extends Country
{
    public $country_code = "VG";
    public $country_name = "British Virgin Islands";
    public $domestic_example = "00000 12 345 678 901";
    public $bban_example = "VPVG0000012345678901";
    public $bban_format_swift = "4!a16!n";
    public $bban_format_regex = "^([A-Z]{4})(\d{16})$";
    public $bban_length = 20;
    public $iban_example = "VG96VPVG0000012345678901";
    public $iban_format_swift = "VG2!n4!a16!n";
    public $iban_format_regex = "^VG(\d{2})([A-Z]{4})(\d{16})$";
    public $iban_length = 24;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 3;
    public $bban_branchid_start_offset = "";
    public $bban_branchid_stop_offset = "";
    public $registry_edition = "2012-05-29";
    public $country_sepa = 0;
    public $swift_official = 1;
    public $bban_checksum_start_offset = "";
    public $bban_checksum_stop_offset = "";
    public $country_code_iana = "vg";
    public $country_code_iso3166_1_alpha2 = "VG";
    public $parent_registrar = "";
    public $currency_iso4217 = "USD";
    public $central_bank_url = "www.bvifsc.vg";
    public $central_bank_name = "The British Virgin Islands Financial Services Commission";
}