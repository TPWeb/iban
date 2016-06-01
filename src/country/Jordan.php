<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Jordan extends Country
{
    public $country_code = "JO";
    public $country_name = "Jordan";
    public $domestic_example = "1310000302";
    public $bban_example = "CBJO0010000000000131000302";
    public $bban_format_swift = "4!a4!n18!c";
    public $bban_format_regex = "^([A-Z]{4})(\d{4})([A-Za-z0-9]{18})$";
    public $bban_length = 26;
    public $iban_example = "JO94CBJO0010000000000131000302";
    public $iban_format_swift = "JO2!n4!a4!n18!c";
    public $iban_format_regex = "^JO(\d{2})([A-Z]{4})(\d{4})([A-Za-z0-9]{18})$";
    public $iban_length = 30;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 3;
    public $bban_branchid_start_offset = "4";
    public $bban_branchid_stop_offset = "7";
    public $registry_edition = "2014-06-05";
    public $country_sepa = 0;
    public $swift_official = 1;
    public $bban_checksum_start_offset = "";
    public $bban_checksum_stop_offset = "";
    public $country_code_iana = "jo";
    public $country_code_iso3166_1_alpha2 = "JO";
    public $parent_registrar = "";
    public $currency_iso4217 = "JOD";
    public $central_bank_url = "www.cbj.gov.jo";
    public $central_bank_name = "Central Bank of Jordan";
}