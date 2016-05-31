<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class CapeVerde extends Country
{
    public $country_code = "CV";
    public $country_name = "Cape Verde";
    public $domestic_example = "12341234123412341";
    public $bban_example = "12341234123412341";
    public $bban_format_swift = "21!n";
    public $bban_format_regex = "^[0-9]{21}$";
    public $bban_length = 21;
    public $iban_example = "CV05123412341234123412341";
    public $iban_format_swift = "CV2!n21!n";
    public $iban_format_regex = "^CV(\d{2})(\d{21})$";
    public $iban_length = 25;
    public $bban_bankid_start_offset = "";
    public $bban_bankid_stop_offset = "";
    public $bban_branchid_start_offset = "";
    public $bban_branchid_stop_offset = "";
    public $registry_edition = "2016-01-22";
    public $country_sepa = 0;
    public $swift_official = 0;
    public $bban_checksum_start_offset = "";
    public $bban_checksum_stop_offset = "";
    public $country_code_iana = "cv";
    public $country_code_iso3166_1_alpha2 = "CV";
    public $parent_registrar = "";
    public $currency_iso4217 = "CVE";
    public $central_bank_url = "www.bcv.cv";
    public $central_bank_name = "Bank of Cape Verde";
}