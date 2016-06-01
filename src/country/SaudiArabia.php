<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class SaudiArabia extends Country
{
    public $country_code = "SA";
    public $country_name = "Saudi Arabia";
    public $domestic_example = "608010167519";
    public $bban_example = "80000000608010167519";
    public $bban_format_swift = "2!n18!c";
    public $bban_format_regex = "^(\d{2})([A-Za-z0-9]{18})$";
    public $bban_length = 20;
    public $iban_example = "SA0380000000608010167519";
    public $iban_format_swift = "SA2!n2!n18!c";
    public $iban_format_regex = "^SA(\d{2})(\d{2})([A-Za-z0-9]{18})$";
    public $iban_length = 24;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 1;
    public $bban_branchid_start_offset = "";
    public $bban_branchid_stop_offset = "";
    public $registry_edition = "2012-05-29";
    public $country_sepa = 0;
    public $swift_official = 1;
    public $bban_checksum_start_offset = "";
    public $bban_checksum_stop_offset = "";
    public $country_code_iana = "sa";
    public $country_code_iso3166_1_alpha2 = "SA";
    public $parent_registrar = "";
    public $currency_iso4217 = "SAR";
    public $central_bank_url = "www.sama.gov.sa";
    public $central_bank_name = "Saudi Arabian Monetary Agency";
}