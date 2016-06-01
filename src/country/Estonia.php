<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Estonia extends Country
{
    public $country_code = "EE";
    public $country_name = "Estonia";
    public $domestic_example = "221020145685";
    public $bban_example = "2200221020145685";
    public $bban_format_swift = "2!n2!n11!n1!n";
    public $bban_format_regex = "^(\d{2})(\d{2})(\d{11})(\d{1})$";
    public $bban_length = 16;
    public $iban_example = "EE382200221020145685";
    public $iban_format_swift = "EE2!n2!n2!n11!n1!n";
    public $iban_format_regex = "^EE(\d{2})(\d{2})(\d{2})(\d{11})(\d{1})$";
    public $iban_length = 20;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 1;
    public $bban_branchid_start_offset = "";
    public $bban_branchid_stop_offset = "";
    public $registry_edition = "2011-06-20";
    public $country_sepa = 1;
    public $swift_official = 1;
    public $bban_checksum_start_offset = 15;
    public $bban_checksum_stop_offset = 15;
    public $country_code_iana = "ee";
    public $country_code_iso3166_1_alpha2 = "EE";
    public $parent_registrar = "";
    public $currency_iso4217 = "EUR";
    public $central_bank_url = "www.eestipank.ee";
    public $central_bank_name = "Bank of Estonia";
}