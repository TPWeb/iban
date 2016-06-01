<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Georgia extends Country
{
    public $country_code = "GE";
    public $country_name = "Georgia";
    public $domestic_example = "0000000101904917";
    public $bban_example = "NB0000000101904917";
    public $bban_format_swift = "2!a16!n";
    public $bban_format_regex = "^([A-Z]{2})(\d{16})$";
    public $bban_length = 18;
    public $iban_example = "GE29NB0000000101904917";
    public $iban_format_swift = "GE2!n2!a16!n";
    public $iban_format_regex = "^GE(\d{2})([A-Z]{2})(\d{16})$";
    public $iban_length = 22;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 1;
    public $bban_branchid_start_offset = "";
    public $bban_branchid_stop_offset = "";
    public $registry_edition = "2011-06-20";
    public $country_sepa = 0;
    public $swift_official = 1;
    public $bban_checksum_start_offset = "";
    public $bban_checksum_stop_offset = "";
    public $country_code_iana = "ge";
    public $country_code_iso3166_1_alpha2 = "GE";
    public $parent_registrar = "";
    public $currency_iso4217 = "GEL";
    public $central_bank_url = "www.nbg.gov.ge";
    public $central_bank_name = "National Bank of Georgia";
}