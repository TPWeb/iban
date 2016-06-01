<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Guatemala extends Country
{
    public $country_code = "GT";
    public $country_name = "Guatemala";
    public $domestic_example = "01020000001210029690";
    public $bban_example = "TRAJ01020000001210029690";
    public $bban_format_swift = "4!c20!c";
    public $bban_format_regex = "^([A-Za-z0-9]{4})([A-Za-z0-9]{20})$";
    public $bban_length = 24;
    public $iban_example = "GT82TRAJ01020000001210029690";
    public $iban_format_swift = "GT2!n4!c20!c";
    public $iban_format_regex = "^GT(\d{2})([A-Za-z0-9]{4})([A-Za-z0-9]{20})$";
    public $iban_length = 28;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 3;
    public $bban_branchid_start_offset = "";
    public $bban_branchid_stop_offset = "";
    public $registry_edition = "2012-05-29";
    public $country_sepa = 0;
    public $swift_official = 1;
    public $bban_checksum_start_offset = "";
    public $bban_checksum_stop_offset = "";
    public $country_code_iana = "gt";
    public $country_code_iso3166_1_alpha2 = "GT";
    public $parent_registrar = "";
    public $currency_iso4217 = "GTQ";
    public $central_bank_url = "www.banguat.gob.gt";
    public $central_bank_name = "Bank of Guatemala";
}