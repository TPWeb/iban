<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Lebanon extends Country
{
    public $country_code = "LB";
    public $country_name = "Lebanon";
    public $domestic_example = "01 001 901229114";
    public $bban_example = "0999 0000 0001 0019 0122 9114";
    public $bban_format_swift = "4!n20!c";
    public $bban_format_regex = "^(\d{4})([A-Za-z0-9]{20})$";
    public $bban_length = 24;
    public $iban_example = "LB62099900000001001901229114";
    public $iban_format_swift = "LB2!n4!n20!c";
    public $iban_format_regex = "^LB(\d{2})(\d{4})([A-Za-z0-9]{20})$";
    public $iban_length = 28;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 3;
    public $bban_branchid_start_offset = "";
    public $bban_branchid_stop_offset = "";
    public $registry_edition = "2011-06-20";
    public $country_sepa = 0;
    public $swift_official = 1;
    public $bban_checksum_start_offset = "";
    public $bban_checksum_stop_offset = "";
    public $country_code_iana = "lb";
    public $country_code_iso3166_1_alpha2 = "LB";
    public $parent_registrar = "";
    public $currency_iso4217 = "LBP";
    public $central_bank_url = "www.bdl.gov.lb";
    public $central_bank_name = "Central Bank of Lebanon";
}