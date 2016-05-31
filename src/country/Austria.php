<?php
namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Austria extends Country
{
    public $country_code = "AT";
    public $country_name = "Austria";
    public $domestic_example = "19043-234573201";
    public $bban_example = "1904300234573201";
    public $bban_format_swift = "5!n11!n";
    public $bban_format_regex = "^(\d{5})(\d{11})$";
    public $bban_length = 16;
    public $iban_example = "AT611904300234573201";
    public $iban_format_swift = "AT2!n5!n11!n";
    public $iban_format_regex = "^AT(\d{2})(\d{5})(\d{11})$";
    public $iban_length = 20;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 4;
    public $bban_branchid_start_offset = "";
    public $bban_branchid_stop_offset = "";
    public $registry_edition = "2011-06-20";
    public $country_sepa = 1;
    public $swift_official = 1;
    public $bban_checksum_start_offset = "";
    public $bban_checksum_stop_offset = "";
    public $country_code_iana = "at";
    public $country_code_iso3166_1_alpha2 = "AT";
    public $parent_registrar = "";
    public $currency_iso4217 = "EUR";
    public $central_bank_url = "www.oenb.at";
    public $central_bank_name = "Austrian National Bank";
}