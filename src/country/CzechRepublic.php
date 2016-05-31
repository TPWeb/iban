<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class CzechRepublic extends Country
{
    public $country_code = "CZ";
    public $country_name = "Czech Republic";
    public $domestic_example = "19-2000145399/0800";
    public $bban_example = "08000000192000145399";
    public $bban_format_swift = "4!n6!n10!n";
    public $bban_format_regex = "^(\d{4})(\d{6})(\d{10})$";
    public $bban_length = 20;
    public $iban_example = "CZ6508000000192000145399";
    public $iban_format_swift = "CZ2!n4!n6!n10!n";
    public $iban_format_regex = "^CZ(\d{2})(\d{4})(\d{6})(\d{10})$";
    public $iban_length = 24;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 3;
    public $bban_branchid_start_offset = "4";
    public $bban_branchid_stop_offset = "9";
    public $registry_edition = "2011-06-20";
    public $country_sepa = 1;
    public $swift_official = 1;
    public $bban_checksum_start_offset = "";
    public $bban_checksum_stop_offset = "";
    public $country_code_iana = "cz";
    public $country_code_iso3166_1_alpha2 = "CZ";
    public $parent_registrar = "";
    public $currency_iso4217 = "CZK";
    public $central_bank_url = "www.cnb.cz";
    public $central_bank_name = "Czech National Bank";
}