<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Hungary extends Country
{
    public $country_code = "HU";
    public $country_name = "Hungary";
    public $domestic_example = "11773016-11111018-00000000";
    public $bban_example = "117730161111101800000000";
    public $bban_format_swift = "3!n4!n1!n15!n1!n";
    public $bban_format_regex = "^(\d{3})(\d{4})(\d{1})(\d{15})(\d{1})$";
    public $bban_length = 24;
    public $iban_example = "HU42117730161111101800000000";
    public $iban_format_swift = "HU2!n3!n4!n1!n15!n1!n";
    public $iban_format_regex = "^HU(\d{2})(\d{3})(\d{4})(\d{1})(\d{15})(\d{1})$";
    public $iban_length = 28;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 2;
    public $bban_branchid_start_offset = "3";
    public $bban_branchid_stop_offset = "6";
    public $registry_edition = "2011-06-20";
    public $country_sepa = 1;
    public $swift_official = 1;
    public $bban_checksum_start_offset = 23;
    public $bban_checksum_stop_offset = 23;
    public $country_code_iana = "hu";
    public $country_code_iso3166_1_alpha2 = "HU";
    public $parent_registrar = "";
    public $currency_iso4217 = "HUF";
    public $central_bank_url = "english.mnb.hu";
    public $central_bank_name = "Magyar Nemzeti Bank (Central Bank of Hungary)";
}