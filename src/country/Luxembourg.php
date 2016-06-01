<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Luxembourg extends Country
{
    public $country_code = "LU";
    public $country_name = "Luxembourg";
    public $domestic_example = "0019 4006 4475 0000";
    public $bban_example = "0019400644750000";
    public $bban_format_swift = "3!n13!c";
    public $bban_format_regex = "^(\d{3})([A-Za-z0-9]{13})$";
    public $bban_length = 16;
    public $iban_example = "LU280019400644750000";
    public $iban_format_swift = "LU2!n3!n13!c";
    public $iban_format_regex = "^LU(\d{2})(\d{3})([A-Za-z0-9]{13})$";
    public $iban_length = 20;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 2;
    public $bban_branchid_start_offset = "";
    public $bban_branchid_stop_offset = "";
    public $registry_edition = "2011-06-20";
    public $country_sepa = 1;
    public $swift_official = 1;
    public $bban_checksum_start_offset = 14;
    public $bban_checksum_stop_offset = 15;
    public $country_code_iana = "lu";
    public $country_code_iso3166_1_alpha2 = "LU";
    public $parent_registrar = "";
    public $currency_iso4217 = "EUR";
    public $central_bank_url = "www.bcl.lu";
    public $central_bank_name = "Central Bank of Luxembourg";
}