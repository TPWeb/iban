<?php
namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Azerbaijan extends Country
{
    public $country_code = "AZ";
    public $country_name = "Azerbaijan";
    public $domestic_example = "NABZ00000000137010001944";
    public $bban_example = "NABZ00000000137010001944";
    public $bban_format_swift = "4!a20!c";
    public $bban_format_regex = "^([A-Z]{4})([A-Za-z0-9]{20})$";
    public $bban_length = 24;
    public $iban_example = "AZ21NABZ00000000137010001944";
    public $iban_format_swift = "AZ2!n4!a20!c";
    public $iban_format_regex = "^AZ(\d{2})([A-Z]{4})([A-Za-z0-9]{20})$";
    public $iban_length = 28;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 3;
    public $bban_branchid_start_offset = "";
    public $bban_branchid_stop_offset = "";
    public $registry_edition = "2012-05-29";
    public $country_sepa = 0;
    public $swift_official = 1;
    public $bban_checksum_start_offset = "";
    public $bban_checksum_stop_offset = "";
    public $country_code_iana = "az";
    public $country_code_iso3166_1_alpha2 = "AZ";
    public $parent_registrar = "";
    public $currency_iso4217 = "AZN";
    public $central_bank_url = "www.cbar.az";
    public $central_bank_name = "The Central Bank of the Republic of Azerbaijan";
}