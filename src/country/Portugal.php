<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Portugal extends Country
{
    public $country_code = "PT";
    public $country_name = "Portugal";
    public $domestic_example = "0002.0123.12345678901.54";
    public $bban_example = "000201231234567890154";
    public $bban_format_swift = "4!n4!n11!n2!n";
    public $bban_format_regex = "^(\d{4})(\d{4})(\d{11})(\d{2})$";
    public $bban_length = 21;
    public $iban_example = "PT50000201231234567890154";
    public $iban_format_swift = "PT2!n4!n4!n11!n2!n";
    public $iban_format_regex = "^PT(\d{2})(\d{4})(\d{4})(\d{11})(\d{2})$";
    public $iban_length = 25;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 3;
    public $bban_branchid_start_offset = "4";
    public $bban_branchid_stop_offset = "7";
    public $registry_edition = "2013-09-05";
    public $country_sepa = 1;
    public $swift_official = 1;
    public $bban_checksum_start_offset = 19;
    public $bban_checksum_stop_offset = 20;
    public $country_code_iana = "pt";
    public $country_code_iso3166_1_alpha2 = "PT";
    public $parent_registrar = "";
    public $currency_iso4217 = "EUR";
    public $central_bank_url = "www.bportugal.pt";
    public $central_bank_name = "Bank of Portugal";
}