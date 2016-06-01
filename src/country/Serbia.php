<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Serbia extends Country
{
    public $country_code = "RS";
    public $country_name = "Serbia";
    public $domestic_example = "260-0056010016113-79";
    public $bban_example = "260005601001611379";
    public $bban_format_swift = "3!n13!n2!n";
    public $bban_format_regex = "^(\d{3})(\d{13})(\d{2})$";
    public $bban_length = 18;
    public $iban_example = "RS35260005601001611379";
    public $iban_format_swift = "RS2!n3!n13!n2!n";
    public $iban_format_regex = "^RS(\d{2})(\d{3})(\d{13})(\d{2})$";
    public $iban_length = 22;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 2;
    public $bban_branchid_start_offset = "";
    public $bban_branchid_stop_offset = "";
    public $registry_edition = "2011-06-20";
    public $country_sepa = 0;
    public $swift_official = 1;
    public $bban_checksum_start_offset = 16;
    public $bban_checksum_stop_offset = 17;
    public $country_code_iana = "rs";
    public $country_code_iso3166_1_alpha2 = "RS";
    public $parent_registrar = "";
    public $currency_iso4217 = "RSD";
    public $central_bank_url = "www.nbs.rs";
    public $central_bank_name = "National Bank of Serbia";
}