<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Kazakhstan extends Country
{
    public $country_code = "KZ";
    public $country_name = "Kazakhstan";
    public $domestic_example = "KZ86125KZT5004100100";
    public $bban_example = "125KZT5004100100";
    public $bban_format_swift = "3!n13!c";
    public $bban_format_regex = "^(\d{3})([A-Za-z0-9]{13})$";
    public $bban_length = 16;
    public $iban_example = "KZ86125KZT5004100100";
    public $iban_format_swift = "KZ2!n3!n13!c";
    public $iban_format_regex = "^KZ(\d{2})(\d{3})([A-Za-z0-9]{13})$";
    public $iban_length = 20;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 2;
    public $bban_branchid_start_offset = "";
    public $bban_branchid_stop_offset = "";
    public $registry_edition = "2014-06-05";
    public $country_sepa = 0;
    public $swift_official = 1;
    public $bban_checksum_start_offset = "";
    public $bban_checksum_stop_offset = "";
    public $country_code_iana = "kz";
    public $country_code_iso3166_1_alpha2 = "KZ";
    public $parent_registrar = "";
    public $currency_iso4217 = "KZT";
    public $central_bank_url = "www.nationalbank.kz";
    public $central_bank_name = "National Bank of Kazakhstan";
}