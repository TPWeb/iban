<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Kosovo extends Country
{
    public $country_code = "XK";
    public $country_name = "Kosovo";
    public $domestic_example = "1212 0123456789 06";
    public $bban_example = "1212012345678906";
    public $bban_format_swift = "4!n10!n2!n";
    public $bban_format_regex = "^(\d{4})(\d{10})(\d{2})$";
    public $bban_length = 16;
    public $iban_example = "XK051212012345678906";
    public $iban_format_swift = "XK2!n4!n10!n2!n";
    public $iban_format_regex = "^XK(\d{2})(\d{4})(\d{10})(\d{2})$";
    public $iban_length = 20;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 1;
    public $bban_branchid_start_offset = "2";
    public $bban_branchid_stop_offset = "3";
    public $registry_edition = "2016-01-21";
    public $country_sepa = 0;
    public $swift_official = 1;
    public $bban_checksum_start_offset = "";
    public $bban_checksum_stop_offset = "";
    public $country_code_iana = "";
    public $country_code_iso3166_1_alpha2 = "";
    public $parent_registrar = "";
    public $currency_iso4217 = "EUR";
    public $central_bank_url = "www.bqk-kos.org";
    public $central_bank_name = "Central Bank of the Republic of Kosovo (Banka Qendrore e Kosovës)";
}