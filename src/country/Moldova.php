<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Moldova extends Country
{
    public $country_code = "MD";
    public $country_name = "Moldova";
    public $domestic_example = "00225100013104168";
    public $bban_example = "AG000225100013104168";
    public $bban_format_swift = "2!c18!c";
    public $bban_format_regex = "^([A-Za-z0-9]{2})([A-Za-z0-9]{18})$";
    public $bban_length = 20;
    public $iban_example = "MD24AG000225100013104168";
    public $iban_format_swift = "MD2!n2!c18!c";
    public $iban_format_regex = "^MD(\d{2})([A-Za-z0-9]{20})$";
    public $iban_length = 24;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 1;
    public $bban_branchid_start_offset = "";
    public $bban_branchid_stop_offset = "";
    public $registry_edition = "2012-09-09";
    public $country_sepa = 0;
    public $swift_official = 1;
    public $bban_checksum_start_offset = "";
    public $bban_checksum_stop_offset = "";
    public $country_code_iana = "md";
    public $country_code_iso3166_1_alpha2 = "MD";
    public $parent_registrar = "";
    public $currency_iso4217 = "MDL";
    public $central_bank_url = "www.bnm.org";
    public $central_bank_name = "National Bank of Moldova";
}