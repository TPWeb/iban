<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class BosniaAndHerzegovina extends Country
{
    public $country_code = "BA";
    public $country_name = "Bosnia and Herzegovina";
    public $domestic_example = "199-044-00012002-79";
    public $bban_example = "1990440001200279";
    public $bban_format_swift = "3!n3!n8!n2!n";
    public $bban_format_regex = "^(\d{3})(\d{3})(\d{8})(\d{2})$";
    public $bban_length = 16;
    public $iban_example = "BA391290079401028494";
    public $iban_format_swift = "BA2!n3!n3!n8!n2!n";
    public $iban_format_regex = "^BA(\d{2})(\d{3})(\d{3})(\d{8})(\d{2})$";
    public $iban_length = 20;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 2;
    public $bban_branchid_start_offset = "3";
    public $bban_branchid_stop_offset = "5";
    public $registry_edition = "2011-06-20";
    public $country_sepa = 0;
    public $swift_official = 1;
    public $bban_checksum_start_offset = 14;
    public $bban_checksum_stop_offset = 15;
    public $country_code_iana = "ba";
    public $country_code_iso3166_1_alpha2 = "BA";
    public $parent_registrar = "";
    public $currency_iso4217 = "BAM";
    public $central_bank_url = "www.cbbh.ba";
    public $central_bank_name = "Central Bank of Bosnia and Herzegovina";
}