<?php
namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Belgium extends Country
{
    public $country_code = "BE";
    public $country_name = "Belgium";
    public $domestic_example = "539-0075470-34";
    public $bban_example = "539007547034";
    public $bban_format_swift = "3!n7!n2!n";
    public $bban_format_regex = "^(\d{3})(\d{7})(\d{2})$";
    public $bban_length = 12;
    public $iban_example = "BE68539007547034";
    public $iban_format_swift = "BE2!n3!n7!n2!n";
    public $iban_format_regex = "^BE(\d{2})(\d{3})(\d{7})(\d{2})$";
    public $iban_length = 16;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 2;
    public $bban_branchid_start_offset = "";
    public $bban_branchid_stop_offset = "";
    public $registry_edition = "2011-06-20";
    public $country_sepa = 1;
    public $swift_official = 1;
    public $bban_checksum_start_offset = 10;
    public $bban_checksum_stop_offset = 11;
    public $country_code_iana = "be";
    public $country_code_iso3166_1_alpha2 = "BE";
    public $parent_registrar = "";
    public $currency_iso4217 = "EUR";
    public $central_bank_url = "www.nbb.be";
    public $central_bank_name = "National Bank of Belgium";
}