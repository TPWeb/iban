<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Greenland extends Country
{
    public $country_code = "GL";
    public $country_name = "Greenland";
    public $domestic_example = "0040 0440116243, 6460 0001631634, 6471 0001000206";
    public $bban_example = "00400440116243, 64600001631634, 64710001000206";
    public $bban_format_swift = "4!n9!n1!n";
    public $bban_format_regex = "^(\d{4})(\d{9})(\d{1})$";
    public $bban_length = 14;
    public $iban_example = "GL2000400440116243";
    public $iban_format_swift = "GL2!n4!n9!n1!n";
    public $iban_format_regex = "^GL(\d{2})(\d{4})(\d{9})(\d{1})$";
    public $iban_length = 18;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 3;
    public $bban_branchid_start_offset = "";
    public $bban_branchid_stop_offset = "";
    public $registry_edition = "2011-06-20";
    public $country_sepa = 0;
    public $swift_official = 1;
    public $bban_checksum_start_offset = "";
    public $bban_checksum_stop_offset = "";
    public $country_code_iana = "gl";
    public $country_code_iso3166_1_alpha2 = "GL";
    public $parent_registrar = "DK";
    public $currency_iso4217 = "DKK";
    public $central_bank_url = "www.nationalbanken.dk";
    public $central_bank_name = "National Bank of Denmark (Danmarks Nationalbank)";
}