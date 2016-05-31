<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Burundi extends Country
{
    public $country_code = "BI";
    public $country_name = "Burundi";
    public $domestic_example = "123412341234";
    public $bban_example = "123412341234";
    public $bban_format_swift = "12!n";
    public $bban_format_regex = "^[0-9]{12}$";
    public $bban_length = 12;
    public $iban_example = "BI33123412341234";
    public $iban_format_swift = "BI2!n12!n";
    public $iban_format_regex = "^BI(\d{2})(\d{12})$";
    public $iban_length = 16;
    public $bban_bankid_start_offset = "";
    public $bban_bankid_stop_offset = "";
    public $bban_branchid_start_offset = "";
    public $bban_branchid_stop_offset = "";
    public $registry_edition = "2016-01-22";
    public $country_sepa = 0;
    public $swift_official = 0;
    public $bban_checksum_start_offset = "";
    public $bban_checksum_stop_offset = "";
    public $country_code_iana = "bi";
    public $country_code_iso3166_1_alpha2 = "BI";
    public $parent_registrar = "";
    public $currency_iso4217 = "BIF";
    public $central_bank_url = "www.brb.bi";
    public $central_bank_name = "Bank of the Republic of Burundi";
}