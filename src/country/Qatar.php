<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Qatar extends Country
{
    public $country_code = "QA";
    public $country_name = "Qatar";
    public $domestic_example = "QA58DOHB00001234567890ABCDEFG";
    public $bban_example = "DOHB00001234567890ABCDEFG";
    public $bban_format_swift = "4!a4!n17!c";
    public $bban_format_regex = "^([A-Z]{4})(\d{4})([A-Za-z0-9]{17})$";
    public $bban_length = 29;
    public $iban_example = "QA58DOHB00001234567890ABCDEFG";
    public $iban_format_swift = "QA2!n4!a4!n17!c";
    public $iban_format_regex = "^QA(\d{2})([A-Z]{4})(\d{4})([A-Za-z0-9]{17})$";
    public $iban_length = 29;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 3;
    public $bban_branchid_start_offset = "4";
    public $bban_branchid_stop_offset = "7";
    public $registry_edition = "2014-06-05";
    public $country_sepa = 0;
    public $swift_official = 1;
    public $bban_checksum_start_offset = "";
    public $bban_checksum_stop_offset = "";
    public $country_code_iana = "qa";
    public $country_code_iso3166_1_alpha2 = "QA";
    public $parent_registrar = "";
    public $currency_iso4217 = "QAR";
    public $central_bank_url = "www.qcb.gov.qa";
    public $central_bank_name = "Qatar Central Bank";
}