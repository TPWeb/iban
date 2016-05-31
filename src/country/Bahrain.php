<?php
namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Bahrain extends Country
{
    public $country_code = "BH";
    public $country_name = "Bahrain";
    public $domestic_example = "00001299123456";
    public $bban_example = "BMAG00001299123456";
    public $bban_format_swift = "4!a14!c";
    public $bban_format_regex = "^([A-Z]{4})([A-Za-z0-9]{14})$";
    public $bban_length = 22;
    public $iban_example = "BH67BMAG00001299123456";
    public $iban_format_swift = "BH2!n4!a14!c";
    public $iban_format_regex = "^BH(\d{2})([A-Z]{4})([A-Za-z0-9]{14})$";
    public $iban_length = 22;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 3;
    public $bban_branchid_start_offset = "";
    public $bban_branchid_stop_offset = "";
    public $registry_edition = "2012-05-29";
    public $country_sepa = 0;
    public $swift_official = 1;
    public $bban_checksum_start_offset = "";
    public $bban_checksum_stop_offset = "";
    public $country_code_iana = "bh";
    public $country_code_iso3166_1_alpha2 = "BH";
    public $parent_registrar = "";
    public $currency_iso4217 = "BHD";
    public $central_bank_url = "www.cbb.gov.bh";
    public $central_bank_name = "Central Bank of Bahrain";
}