<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Poland extends Country
{
    public $country_code = "PL";
    public $country_name = "Poland";
    public $domestic_example = "61 1090 1014 0000 0712 1981 2874";
    public $bban_example = "109010140000071219812874";
    public $bban_format_swift = "8!n16!n";
    public $bban_format_regex = "^(\d{8})(\d{16})$";
    public $bban_length = 24;
    public $iban_example = "PL61109010140000071219812874";
    public $iban_format_swift = "PL2!n8!n16n";
    public $iban_format_regex = "^PL(\d{2})(\d{8})(\d{1,16})$";
    public $iban_length = 28;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 7;
    public $bban_branchid_start_offset = "";
    public $bban_branchid_stop_offset = "";
    public $registry_edition = "2011-06-20";
    public $country_sepa = 1;
    public $swift_official = 1;
    public $bban_checksum_start_offset = 7;
    public $bban_checksum_stop_offset = 7;
    public $country_code_iana = "pl";
    public $country_code_iso3166_1_alpha2 = "PL";
    public $parent_registrar = "";
    public $currency_iso4217 = "PLN";
    public $central_bank_url = "www.nbp.pl";
    public $central_bank_name = "National Bank of Poland";
}