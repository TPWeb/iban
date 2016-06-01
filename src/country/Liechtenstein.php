<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Liechtenstein extends Country
{
    public $country_code = "LI";
    public $country_name = "Liechtenstein";
    public $domestic_example = "8810 2324013AA";
    public $bban_example = "088100002324013AA";
    public $bban_format_swift = "5!n12!c";
    public $bban_format_regex = "^(\d{5})([A-Za-z0-9]{12})$";
    public $bban_length = 19;
    public $iban_example = "LI21088100002324013AA";
    public $iban_format_swift = "LI2!n5!n12!c";
    public $iban_format_regex = "^LI(\d{2})(\d{5})([A-Za-z0-9]{12})$";
    public $iban_length = 21;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 4;
    public $bban_branchid_start_offset = "";
    public $bban_branchid_stop_offset = "";
    public $registry_edition = "2012-05-29";
    public $country_sepa = 1;
    public $swift_official = 1;
    public $bban_checksum_start_offset = "";
    public $bban_checksum_stop_offset = "";
    public $country_code_iana = "li";
    public $country_code_iso3166_1_alpha2 = "LI";
    public $parent_registrar = "";
    public $currency_iso4217 = "CHF";
    public $central_bank_url = "www.llb.li";
    public $central_bank_name = "National Bank of Liechtenstein (Liechtensteinische Landesbank)";
}