<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Brazil extends Country
{
    public $country_code = "BR";
    public $country_name = "Brazil";
    public $domestic_example = "0009795493C1";
    public $bban_example = "00360305000010009795493P1";
    public $bban_format_swift = "8!n5!n10!n1!a1!c";
    public $bban_format_regex = "^(\d{8})(\d{5})(\d{10})([A-Z]{1})([A-Za-z0-9]{1})$";
    public $bban_length = 25;
    public $iban_example = "BR9700360305000010009795493P1";
    public $iban_format_swift = "BR2!n8!n5!n10!n1!a1!c";
    public $iban_format_regex = "^BR(\d{2})(\d{8})(\d{5})(\d{10})([A-Z]{1})([A-Za-z0-9]{1})$";
    public $iban_length = 29;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 7;
    public $bban_branchid_start_offset = "8";
    public $bban_branchid_stop_offset = "12";
    public $registry_edition = "2013-06-20";
    public $country_sepa = 0;
    public $swift_official = 1;
    public $bban_checksum_start_offset = "";
    public $bban_checksum_stop_offset = "";
    public $country_code_iana = "br";
    public $country_code_iso3166_1_alpha2 = "BR";
    public $parent_registrar = "";
    public $currency_iso4217 = "BRL";
    public $central_bank_url = "www.bcb.gov.br";
    public $central_bank_name = "Central Bank of Brazil";
}