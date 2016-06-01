<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Mauritania extends Country
{
    public $country_code = "MR";
    public $country_name = "Mauritania";
    public $domestic_example = "00020 00101 00001234567 53";
    public $bban_example = "00020001010000123456753";
    public $bban_format_swift = "5!n5!n11!n2!n";
    public $bban_format_regex = "^(\d{5})(\d{5})(\d{11})(\d{2})$";
    public $bban_length = 23;
    public $iban_example = "MR1300020001010000123456753";
    public $iban_format_swift = "MR135!n5!n11!n2!n";
    public $iban_format_regex = "^MR13(\d{5})(\d{5})(\d{11})(\d{2})$";
    public $iban_length = 27;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 4;
    public $bban_branchid_start_offset = "5";
    public $bban_branchid_stop_offset = "9";
    public $registry_edition = "2011-06-20";
    public $country_sepa = 0;
    public $swift_official = 1;
    public $bban_checksum_start_offset = 21;
    public $bban_checksum_stop_offset = 22;
    public $country_code_iana = "mr";
    public $country_code_iso3166_1_alpha2 = "MR";
    public $parent_registrar = "";
    public $currency_iso4217 = "MRO";
    public $central_bank_url = "www.bcm.mr";
    public $central_bank_name = "Central Bank of Mauritania";
}