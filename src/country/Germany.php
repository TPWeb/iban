<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Germany extends Country
{
    public $country_code = "DE";
    public $country_name = "Germany";
    public $domestic_example = "37040044-532013000";
    public $bban_example = "370400440532013000";
    public $bban_format_swift = "8!n10!n";
    public $bban_format_regex = "^(\d{8})(\d{10})$";
    public $bban_length = 18;
    public $iban_example = "DE89370400440532013000";
    public $iban_format_swift = "DE2!n8!n10!n";
    public $iban_format_regex = "^DE(\d{2})(\d{8})(\d{10})$";
    public $iban_length = 22;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 7;
    public $bban_branchid_start_offset = "";
    public $bban_branchid_stop_offset = "";
    public $registry_edition = "2011-06-20";
    public $country_sepa = 1;
    public $swift_official = 1;
    public $bban_checksum_start_offset = "";
    public $bban_checksum_stop_offset = "";
    public $country_code_iana = "de";
    public $country_code_iso3166_1_alpha2 = "DE";
    public $parent_registrar = "";
    public $currency_iso4217 = "EUR";
    public $central_bank_url = "www.bundesbank.de";
    public $central_bank_name = "Deutsche Bundesbank";
}