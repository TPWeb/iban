<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Lithuania extends Country
{
    public $country_code = "LT";
    public $country_name = "Lithuania";
    public $domestic_example = "1000 0111 0100 1000";
    public $bban_example = "10000011101001000";
    public $bban_format_swift = "5!n11!n";
    public $bban_format_regex = "^(\d{5})(\d{11})$";
    public $bban_length = 16;
    public $iban_example = "LT121000011101001000";
    public $iban_format_swift = "LT2!n5!n11!n";
    public $iban_format_regex = "^LT(\d{2})(\d{5})(\d{11})$";
    public $iban_length = 20;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 4;
    public $bban_branchid_start_offset = "";
    public $bban_branchid_stop_offset = "";
    public $registry_edition = "2011-06-20";
    public $country_sepa = 1;
    public $swift_official = 1;
    public $bban_checksum_start_offset = "";
    public $bban_checksum_stop_offset = "";
    public $country_code_iana = "lt";
    public $country_code_iso3166_1_alpha2 = "LT";
    public $parent_registrar = "";
    public $currency_iso4217 = "EUR";
    public $central_bank_url = "www.lb.lt";
    public $central_bank_name = "Bank of Lithuania";
}