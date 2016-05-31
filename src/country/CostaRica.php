<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class CostaRica extends Country
{
    public $country_code = "CR";
    public $country_name = "Costa Rica";
    public $domestic_example = "1026284066";
    public $bban_example = "15202001026284066";
    public $bban_format_swift = "3!n14!n";
    public $bban_format_regex = "^(\d{3})(\d{14})$";
    public $bban_length = 7;
    public $iban_example = "CR0515202001026284066";
    public $iban_format_swift = "CR2!n3!n14!n";
    public $iban_format_regex = "^CR(\d{2})(\d{3})(\d{14})$";
    public $iban_length = 21;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 2;
    public $bban_branchid_start_offset = "";
    public $bban_branchid_stop_offset = "";
    public $registry_edition = "2012-05-29";
    public $country_sepa = 0;
    public $swift_official = 1;
    public $bban_checksum_start_offset = "";
    public $bban_checksum_stop_offset = "";
    public $country_code_iana = "cr";
    public $country_code_iso3166_1_alpha2 = "CR";
    public $parent_registrar = "";
    public $currency_iso4217 = "CRC";
    public $central_bank_url = "www.bccr.fi.cr";
    public $central_bank_name = "Central Bank of Costa Rica";
}