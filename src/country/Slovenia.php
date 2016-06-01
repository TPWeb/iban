<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Slovenia extends Country
{
    public $country_code = "SI";
    public $country_name = "Slovenia";
    public $domestic_example = "2633 0001 2039 086";
    public $bban_example = "263300012039086";
    public $bban_format_swift = "5!n8!n2!n";
    public $bban_format_regex = "^(\d{5})(\d{8})(\d{2})$";
    public $bban_length = 15;
    public $iban_example = "SI56191000000123438";
    public $iban_format_swift = "SI2!n5!n8!n2!n";
    public $iban_format_regex = "^SI(\d{2})(\d{5})(\d{8})(\d{2})$";
    public $iban_length = 19;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 1;
    public $bban_branchid_start_offset = "2";
    public $bban_branchid_stop_offset = "4";
    public $registry_edition = "2012-09-09";
    public $country_sepa = 1;
    public $swift_official = 1;
    public $bban_checksum_start_offset = 13;
    public $bban_checksum_stop_offset = 14;
    public $country_code_iana = "si";
    public $country_code_iso3166_1_alpha2 = "SI";
    public $parent_registrar = "";
    public $currency_iso4217 = "EUR";
    public $central_bank_url = "www.bsi.si";
    public $central_bank_name = "Bank of Slovenia";
}