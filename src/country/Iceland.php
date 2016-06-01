<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Iceland extends Country
{
    public $country_code = "IS";
    public $country_name = "Iceland";
    public $domestic_example = "0159-26-007654-551073-0339";
    public $bban_example = "0159260076545510730339";
    public $bban_format_swift = "4!n2!n6!n10!n";
    public $bban_format_regex = "^(\d{4})(\d{2})(\d{6})(\d{10})$";
    public $bban_length = 22;
    public $iban_example = "IS140159260076545510730339";
    public $iban_format_swift = "IS2!n4!n2!n6!n10!n";
    public $iban_format_regex = "^IS(\d{2})(\d{4})(\d{2})(\d{6})(\d{10})$";
    public $iban_length = 26;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 3;
    public $bban_branchid_start_offset = "6";
    public $bban_branchid_stop_offset = "11";
    public $registry_edition = "2011-06-20";
    public $country_sepa = 1;
    public $swift_official = 1;
    public $bban_checksum_start_offset = "";
    public $bban_checksum_stop_offset = "";
    public $country_code_iana = "is";
    public $country_code_iso3166_1_alpha2 = "IS";
    public $parent_registrar = "";
    public $currency_iso4217 = "ISK";
    public $central_bank_url = "www.sedlabanki.is";
    public $central_bank_name = "Central Bank of Iceland";
}