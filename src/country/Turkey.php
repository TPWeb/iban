<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Turkey extends Country
{
    public $country_code = "TR";
    public $country_name = "Turkey";
    public $domestic_example = "TR33 0006 1005 1978 6457 8413 26";
    public $bban_example = "0006100519786457841326";
    public $bban_format_swift = "5!n1!n16!c";
    public $bban_format_regex = "^(\d{5})(\d{1})([A-Za-z0-9]{16})$";
    public $bban_length = 22;
    public $iban_example = "TR330006100519786457841326";
    public $iban_format_swift = "TR2!n5!n1!n16!c";
    public $iban_format_regex = "^TR(\d{2})(\d{5})(\d{1})([A-Za-z0-9]{16})$";
    public $iban_length = 26;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 4;
    public $bban_branchid_start_offset = "";
    public $bban_branchid_stop_offset = "";
    public $registry_edition = "2016-01-21";
    public $country_sepa = 0;
    public $swift_official = 1;
    public $bban_checksum_start_offset = "";
    public $bban_checksum_stop_offset = "";
    public $country_code_iana = "tr";
    public $country_code_iso3166_1_alpha2 = "TR";
    public $parent_registrar = "";
    public $currency_iso4217 = "TRY";
    public $central_bank_url = "www.tcmb.gov.tr";
    public $central_bank_name = "Central Bank of the Republic of Turkey";
}