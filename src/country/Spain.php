<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Spain extends Country
{
    public $country_code = "ES";
    public $country_name = "Spain";
    public $domestic_example = "2100 0418 45 0200051332";
    public $bban_example = "21000418450200051332";
    public $bban_format_swift = "4!n4!n1!n1!n10!n";
    public $bban_format_regex = "^(\d{4})(\d{4})(\d{1})(\d{1})(\d{10})$";
    public $bban_length = 20;
    public $iban_example = "ES9121000418450200051332";
    public $iban_format_swift = "ES2!n4!n4!n1!n1!n10!n";
    public $iban_format_regex = "^ES(\d{2})(\d{4})(\d{4})(\d{1})(\d{1})(\d{10})$";
    public $iban_length = 24;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 3;
    public $bban_branchid_start_offset = "4";
    public $bban_branchid_stop_offset = "7";
    public $registry_edition = "2013-09-05";
    public $country_sepa = 1;
    public $swift_official = 1;
    public $bban_checksum_start_offset = 8;
    public $bban_checksum_stop_offset = 9;
    public $country_code_iana = "es";
    public $country_code_iso3166_1_alpha2 = "ES";
    public $parent_registrar = "";
    public $currency_iso4217 = "EUR";
    public $central_bank_url = "www.bde.es";
    public $central_bank_name = "Bank of Spain";
}