<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Croatia extends Country
{
    public $country_code = "HR";
    public $country_name = "Croatia";
    public $domestic_example = "1001005-1863000160";
    public $bban_example = "10010051863000160";
    public $bban_format_swift = "7!n10!n";
    public $bban_format_regex = "^(\d{7})(\d{10})$";
    public $bban_length = 17;
    public $iban_example = "HR1210010051863000160";
    public $iban_format_swift = "HR2!n7!n10!n";
    public $iban_format_regex = "^HR(\d{2})(\d{7})(\d{10})$";
    public $iban_length = 21;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 6;
    public $bban_branchid_start_offset = "";
    public $bban_branchid_stop_offset = "";
    public $registry_edition = "2011-06-20";
    public $country_sepa = 1;
    public $swift_official = 1;
    public $bban_checksum_start_offset = "";
    public $bban_checksum_stop_offset = "";
    public $country_code_iana = "hr";
    public $country_code_iso3166_1_alpha2 = "HR";
    public $parent_registrar = "";
    public $currency_iso4217 = "HRK";
    public $central_bank_url = "www.hnb.hr";
    public $central_bank_name = "Croatian National Bank";
}