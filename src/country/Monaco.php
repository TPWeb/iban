<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Monaco extends Country
{
    public $country_code = "MC";
    public $country_name = "Monaco";
    public $domestic_example = "0011111000h";
    public $bban_example = "11222 00001 01234567890 30";
    public $bban_format_swift = "5!n5!n11!c2!n";
    public $bban_format_regex = "^(\d{5})(\d{5})([A-Za-z0-9]{11})(\d{2})$";
    public $bban_length = 23;
    public $iban_example = "MC5811222000010123456789030";
    public $iban_format_swift = "MC2!n5!n5!n11!c2!n";
    public $iban_format_regex = "^MC(\d{2})(\d{5})(\d{5})([A-Za-z0-9]{11})(\d{2})$";
    public $iban_length = 27;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 4;
    public $bban_branchid_start_offset = "5";
    public $bban_branchid_stop_offset = "9";
    public $registry_edition = "2011-06-20";
    public $country_sepa = 1;
    public $swift_official = 1;
    public $bban_checksum_start_offset = 21;
    public $bban_checksum_stop_offset = 22;
    public $country_code_iana = "mc";
    public $country_code_iso3166_1_alpha2 = "MC";
    public $parent_registrar = "";
    public $currency_iso4217 = "EUR";
    public $central_bank_url = "";
    public $central_bank_name = "";
}