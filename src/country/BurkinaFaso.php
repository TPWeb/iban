<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class BurkinaFaso extends Country
{
    public $country_code = "BF";
    public $country_name = "Burkina Faso";
    public $domestic_example = "12341234123412341234123";
    public $bban_example = "12341234123412341234123";
    public $bban_format_swift = "23!n";
    public $bban_format_regex = "^[0-9]{23}$";
    public $bban_length = 23;
    public $iban_example = "BF4512341234123412341234123";
    public $iban_format_swift = "BF2!n23!n";
    public $iban_format_regex = "^BF(\d{2})(\d{23})$";
    public $iban_length = 27;
    public $bban_bankid_start_offset = "";
    public $bban_bankid_stop_offset = "";
    public $bban_branchid_start_offset = "";
    public $bban_branchid_stop_offset = "";
    public $registry_edition = "2016-01-22";
    public $country_sepa = 0;
    public $swift_official = 0;
    public $bban_checksum_start_offset = "";
    public $bban_checksum_stop_offset = "";
    public $country_code_iana = "bf";
    public $country_code_iso3166_1_alpha2 = "BF";
    public $parent_registrar = "";
    public $currency_iso4217 = "XOF";
    public $central_bank_url = "www.bceao.int";
    public $central_bank_name = "Central Bank of West African States (BCEAO)";
}