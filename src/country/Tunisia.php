<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Tunisia extends Country
{
    public $country_code = "TN";
    public $country_name = "Tunisia";
    public $domestic_example = "10 006 0351835984788 31";
    public $bban_example = "10006035183598478831";
    public $bban_format_swift = "2!n3!n13!n2!n";
    public $bban_format_regex = "^(\d{2})(\d{3})(\d{13})(\d{2})$";
    public $bban_length = 20;
    public $iban_example = "TN5910006035183598478831";
    public $iban_format_swift = "TN2!n2!n3!n13!n2!n";
    public $iban_format_regex = "^TN(\d{2})(\d{2})(\d{3})(\d{13})(\d{2})$";
    public $iban_length = 24;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 1;
    public $bban_branchid_start_offset = "2";
    public $bban_branchid_stop_offset = "4";
    public $registry_edition = "2011-06-20";
    public $country_sepa = 0;
    public $swift_official = 1;
    public $bban_checksum_start_offset = 18;
    public $bban_checksum_stop_offset = 19;
    public $country_code_iana = "tn";
    public $country_code_iso3166_1_alpha2 = "TN";
    public $parent_registrar = "";
    public $currency_iso4217 = "TND";
    public $central_bank_url = "www.bct.gov.tn";
    public $central_bank_name = "Central Bank of Tunisia";
}