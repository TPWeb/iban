<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Kuwait extends Country
{
    public $country_code = "KW";
    public $country_name = "Kuwait";
    public $domestic_example = "CBKU0000000000001234560101";
    public $bban_example = "CBKU0000000000001234560101";
    public $bban_format_swift = "4!a22!c";
    public $bban_format_regex = "^([A-Z]{4})([A-Za-z0-9]{22})$";
    public $bban_length = 26;
    public $iban_example = "KW81CBKU0000000000001234560101";
    public $iban_format_swift = "KW2!n4!a22!c";
    public $iban_format_regex = "^KW(\d{2})([A-Z]{4})([A-Za-z0-9]{22})$";
    public $iban_length = 30;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 3;
    public $bban_branchid_start_offset = "";
    public $bban_branchid_stop_offset = "";
    public $registry_edition = "2016-01-21";
    public $country_sepa = 0;
    public $swift_official = 1;
    public $bban_checksum_start_offset = "";
    public $bban_checksum_stop_offset = "";
    public $country_code_iana = "kw";
    public $country_code_iso3166_1_alpha2 = "KW";
    public $parent_registrar = "";
    public $currency_iso4217 = "KWD";
    public $central_bank_url = "www.cbk.gov.kw";
    public $central_bank_name = "Central Bank of Kuwait";
}