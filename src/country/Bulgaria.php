<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Bulgaria extends Country
{
    public $country_code = "BG";
    public $country_name = "Bulgaria";
    public $domestic_example = "BNBG 9661 1020 3456 78";
    public $bban_example = "BNBG96611020345678";
    public $bban_format_swift = "4!a4!n2!n8!c";
    public $bban_format_regex = "^([A-Z]{4})(\d{4})(\d{2})([A-Za-z0-9]{8})$";
    public $bban_length = 18;
    public $iban_example = "BG80BNBG96611020345678";
    public $iban_format_swift = "BG2!n4!a4!n2!n8!c";
    public $iban_format_regex = "^BG(\d{2})([A-Z]{4})(\d{4})(\d{2})([A-Za-z0-9]{8})$";
    public $iban_length = 22;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 3;
    public $bban_branchid_start_offset = "4";
    public $bban_branchid_stop_offset = "7";
    public $registry_edition = "2011-06-20";
    public $country_sepa = 1;
    public $swift_official = 1;
    public $bban_checksum_start_offset = "";
    public $bban_checksum_stop_offset = "";
    public $country_code_iana = "bg";
    public $country_code_iso3166_1_alpha2 = "BG";
    public $parent_registrar = "";
    public $currency_iso4217 = "BGN";
    public $central_bank_url = "www.bnb.bg";
    public $central_bank_name = "Bulgarian National Bank";
}