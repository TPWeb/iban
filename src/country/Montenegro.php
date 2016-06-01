<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Montenegro extends Country
{
    public $country_code = "ME";
    public $country_name = "Montenegro";
    public $domestic_example = "505 0000123456789 51";
    public $bban_example = "505000012345678951";
    public $bban_format_swift = "3!n13!n2!n";
    public $bban_format_regex = "^(\d{3})(\d{13})(\d{2})$";
    public $bban_length = 18;
    public $iban_example = "ME25505000012345678951";
    public $iban_format_swift = "ME2!n3!n13!n2!n";
    public $iban_format_regex = "^ME(\d{2})(\d{3})(\d{13})(\d{2})$";
    public $iban_length = 22;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 2;
    public $bban_branchid_start_offset = "";
    public $bban_branchid_stop_offset = "";
    public $registry_edition = "2011-06-20";
    public $country_sepa = 0;
    public $swift_official = 1;
    public $bban_checksum_start_offset = 16;
    public $bban_checksum_stop_offset = 17;
    public $country_code_iana = "me";
    public $country_code_iso3166_1_alpha2 = "ME";
    public $parent_registrar = "";
    public $currency_iso4217 = "EUR";
    public $central_bank_url = "www.cb-mn.org";
    public $central_bank_name = "Central Bank of Montenegro";
}