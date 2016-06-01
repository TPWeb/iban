<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Palestine extends Country
{
    public $country_code = "PS";
    public $country_name = "Palestine";
    public $domestic_example = "400123456702";
    public $bban_example = "PALS000000000400123456702";
    public $bban_format_swift = "4!a21!c";
    public $bban_format_regex = "^([A-Z]{4})([A-Za-z0-9]{21})$";
    public $bban_length = 25;
    public $iban_example = "PS92PALS000000000400123456702";
    public $iban_format_swift = "PS2!n4!a21!c";
    public $iban_format_regex = "^PS(\d{2})([A-Z]{4})([A-Za-z0-9]{21})$";
    public $iban_length = 29;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 3;
    public $bban_branchid_start_offset = "";
    public $bban_branchid_stop_offset = "";
    public $registry_edition = "2013-09-05";
    public $country_sepa = 0;
    public $swift_official = 1;
    public $bban_checksum_start_offset = "";
    public $bban_checksum_stop_offset = "";
    public $country_code_iana = "ps";
    public $country_code_iso3166_1_alpha2 = "PS";
    public $parent_registrar = "";
    public $currency_iso4217 = "ILS";
    public $central_bank_url = "www.pma.ps";
    public $central_bank_name = "Palestine Monetary Authority";
}