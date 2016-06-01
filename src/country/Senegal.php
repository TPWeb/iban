<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Senegal extends Country
{
    public $country_code = "SN";
    public $country_name = "Senegal";
    public $domestic_example = "A12312341234123412341234";
    public $bban_example = "A12312341234123412341234";
    public $bban_format_swift = "1!a23!n";
    public $bban_format_regex = "^[A-Z]{1}[0-9]{23}$";
    public $bban_length = 24;
    public $iban_example = "SN15A12312341234123412341234";
    public $iban_format_swift = "SN2!n1!a23!n";
    public $iban_format_regex = "^SN(\d{2})([A-Z]{1})(\d{23})$";
    public $iban_length = 28;
    public $bban_bankid_start_offset = "";
    public $bban_bankid_stop_offset = "";
    public $bban_branchid_start_offset = "";
    public $bban_branchid_stop_offset = "";
    public $registry_edition = "2016-01-22";
    public $country_sepa = 0;
    public $swift_official = 0;
    public $bban_checksum_start_offset = "";
    public $bban_checksum_stop_offset = "";
    public $country_code_iana = "sn";
    public $country_code_iso3166_1_alpha2 = "SN";
    public $parent_registrar = "";
    public $currency_iso4217 = "XOF";
    public $central_bank_url = "www.bceao.int";
    public $central_bank_name = "Central Bank of West African States (BCEAO)";
}