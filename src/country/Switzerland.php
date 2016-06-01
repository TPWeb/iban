<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Switzerland extends Country
{
    public $country_code = "CH";
    public $country_name = "Switzerland";
    public $domestic_example = "762 1162-3852.957";
    public $bban_example = "00762011623852957";
    public $bban_format_swift = "5!n12!c";
    public $bban_format_regex = "^(\d{5})([A-Za-z0-9]{12})$";
    public $bban_length = 17;
    public $iban_example = "CH9300762011623852957";
    public $iban_format_swift = "CH2!n5!n12!c";
    public $iban_format_regex = "^CH(\d{2})(\d{5})([A-Za-z0-9]{12})$";
    public $iban_length = 21;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 4;
    public $bban_branchid_start_offset = "";
    public $bban_branchid_stop_offset = "";
    public $registry_edition = "2011-06-20";
    public $country_sepa = 1;
    public $swift_official = 1;
    public $bban_checksum_start_offset = "";
    public $bban_checksum_stop_offset = "";
    public $country_code_iana = "ch";
    public $country_code_iso3166_1_alpha2 = "CH";
    public $parent_registrar = "";
    public $currency_iso4217 = "CHF";
    public $central_bank_url = "www.snb.ch";
    public $central_bank_name = "Swiss National Bank";
}