<?php
namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Andorra extends Country
{
    public $country_code = "AD";
    public $country_name = "Andorra";
    public $domestic_example = "2030200359100100";
    public $bban_example = "00012030200359100100";
    public $bban_format_swift = "4!n4!n12!c";
    public $bban_format_regex = "^(\d{4})(\d{4})([A-Za-z0-9]{12})$";
    public $bban_length = 20;
    public $iban_example = "AD1200012030200359100100";
    public $iban_format_swift = "AD2!n4!n4!n12!c";
    public $iban_format_regex = "^AD(\d{2})(\d{4})(\d{4})([A-Za-z0-9]{12})$";
    public $iban_length = 24;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 3;
    public $bban_branchid_start_offset = "4";
    public $bban_branchid_stop_offset = "7";
    public $registry_edition = "2011-06-20";
    public $country_sepa = 1;
    public $swift_official = 1;
    public $bban_checksum_start_offset = "";
    public $bban_checksum_stop_offset = "";
    public $country_code_iana = "ad";
    public $country_code_iso3166_1_alpha2 = "AD";
    public $parent_registrar = "";
    public $currency_iso4217 = "EUR";
    public $central_bank_url = "www.inaf.ad";
    public $central_bank_name = "Institut Nacional Andorrà de Finances";
}