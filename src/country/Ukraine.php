<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Ukraine extends Country
{
    public $country_code = "UA";
    public $country_name = "Ukraine";
    public $domestic_example = "3996220000026007233566001";
    public $bban_example = "3996220000026007233566001";
    public $bban_format_swift = "6!n19!c";
    public $bban_format_regex = "^[0-9]{6}[A-Za-z0-9]{19}$";
    public $bban_length = 25;
    public $iban_example = "UA213996220000026007233566001";
    public $iban_format_swift = "UA2!n6!n19!c";
    public $iban_format_regex = "^UA(\d{2})(\d{6})([A-Za-z0-9]{19})$";
    public $iban_length = 29;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 5;
    public $bban_branchid_start_offset = "";
    public $bban_branchid_stop_offset = "";
    public $registry_edition = "2016-01-22";
    public $country_sepa = 0;
    public $swift_official = 0;
    public $bban_checksum_start_offset = "";
    public $bban_checksum_stop_offset = "";
    public $country_code_iana = "ua";
    public $country_code_iso3166_1_alpha2 = "UA";
    public $parent_registrar = "";
    public $currency_iso4217 = "UAH";
    public $central_bank_url = "www.bank.gov.ua";
    public $central_bank_name = "National Bank of Ukraine";
}