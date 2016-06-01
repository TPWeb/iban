<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Greece extends Country
{
    public $country_code = "GR";
    public $country_name = "Greece";
    public $domestic_example = "01250000000012300695";
    public $bban_example = "01101250000000012300695";
    public $bban_format_swift = "3!n4!n16!c";
    public $bban_format_regex = "^(\d{3})(\d{4})([A-Za-z0-9]{16})$";
    public $bban_length = 23;
    public $iban_example = "GR1601101250000000012300695";
    public $iban_format_swift = "GR2!n3!n4!n16!c";
    public $iban_format_regex = "^GR(\d{2})(\d{3})(\d{4})([A-Za-z0-9]{16})$";
    public $iban_length = 27;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 2;
    public $bban_branchid_start_offset = "3";
    public $bban_branchid_stop_offset = "6";
    public $registry_edition = "2011-06-20";
    public $country_sepa = 1;
    public $swift_official = 1;
    public $bban_checksum_start_offset = "";
    public $bban_checksum_stop_offset = "";
    public $country_code_iana = "gr";
    public $country_code_iso3166_1_alpha2 = "GR";
    public $parent_registrar = "";
    public $currency_iso4217 = "EUR";
    public $central_bank_url = "www.bankofgreece.gr";
    public $central_bank_name = "Bank of Greece";
}