<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Malta extends Country
{
    public $country_code = "MT";
    public $country_name = "Malta";
    public $domestic_example = "12345MTLCAST001S";
    public $bban_example = "MALT011000012345MTLCAST001S";
    public $bban_format_swift = "4!a5!n18!c";
    public $bban_format_regex = "^([A-Z]{4})(\d{5})([A-Za-z0-9]{18})$";
    public $bban_length = 27;
    public $iban_example = "MT84MALT011000012345MTLCAST001S";
    public $iban_format_swift = "MT2!n4!a5!n18!c";
    public $iban_format_regex = "^MT(\d{2})([A-Z]{4})(\d{5})([A-Za-z0-9]{18})$";
    public $iban_length = 31;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 3;
    public $bban_branchid_start_offset = "4";
    public $bban_branchid_stop_offset = "8";
    public $registry_edition = "2011-06-20";
    public $country_sepa = 1;
    public $swift_official = 1;
    public $bban_checksum_start_offset = "";
    public $bban_checksum_stop_offset = "";
    public $country_code_iana = "mt";
    public $country_code_iso3166_1_alpha2 = "MT";
    public $parent_registrar = "";
    public $currency_iso4217 = "EUR";
    public $central_bank_url = "www.centralbankmalta.org";
    public $central_bank_name = "Central Bank of Malta";
}