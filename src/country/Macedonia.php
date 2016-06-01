<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Macedonia extends Country
{
    public $country_code = "MK";
    public $country_name = "Macedonia";
    public $domestic_example = "300 0000000424 25";
    public $bban_example = "250120000058984";
    public $bban_format_swift = "3!n10!c2!n";
    public $bban_format_regex = "^(\d{3})([A-Za-z0-9]{10})(\d{2})$";
    public $bban_length = 15;
    public $iban_example = "MK07250120000058984";
    public $iban_format_swift = "MK2!n3!n10!c2!n";
    public $iban_format_regex = "^MK(\d{2})(\d{3})([A-Za-z0-9]{10})(\d{2})$";
    public $iban_length = 19;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 2;
    public $bban_branchid_start_offset = "";
    public $bban_branchid_stop_offset = "";
    public $registry_edition = "2012-05-29";
    public $country_sepa = 0;
    public $swift_official = 1;
    public $bban_checksum_start_offset = 13;
    public $bban_checksum_stop_offset = 14;
    public $country_code_iana = "mk";
    public $country_code_iso3166_1_alpha2 = "MK";
    public $parent_registrar = "";
    public $currency_iso4217 = "MKD";
    public $central_bank_url = "www.nbrm.mk";
    public $central_bank_name = "National Bank of the Republic of Macedonia";
}