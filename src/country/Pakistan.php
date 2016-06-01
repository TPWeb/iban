<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Pakistan extends Country
{
    public $country_code = "PK";
    public $country_name = "Pakistan";
    public $domestic_example = "00260101036360";
    public $bban_example = "SCBL0000001123456702";
    public $bban_format_swift = "4!a16!c";
    public $bban_format_regex = "^([A-Z]{4})([A-Za-z0-9]{16})$";
    public $bban_length = 20;
    public $iban_example = "PK36SCBL0000001123456702";
    public $iban_format_swift = "PK2!n4!a16!c";
    public $iban_format_regex = "^PK(\d{2})([A-Z]{4})([A-Za-z0-9]{16})$";
    public $iban_length = 24;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 3;
    public $bban_branchid_start_offset = "";
    public $bban_branchid_stop_offset = "";
    public $registry_edition = "2012-05-29";
    public $country_sepa = 0;
    public $swift_official = 1;
    public $bban_checksum_start_offset = "";
    public $bban_checksum_stop_offset = "";
    public $country_code_iana = "pk";
    public $country_code_iso3166_1_alpha2 = "PK";
    public $parent_registrar = "";
    public $currency_iso4217 = "PKR";
    public $central_bank_url = "www.sbp.org.pk";
    public $central_bank_name = "State Bank of Pakistan";
}