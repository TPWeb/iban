<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class TimorLeste extends Country
{
    public $country_code = "TL";
    public $country_name = "Timor-Leste";
    public $domestic_example = "008 00123456789101 57";
    public $bban_example = "0080012345678910157";
    public $bban_format_swift = "3!n 14!n 2!n";
    public $bban_format_regex = "^(\d{3}) (\d{14}) (\d{2})$";
    public $bban_length = 19;
    public $iban_example = "TL380080012345678910157";
    public $iban_format_swift = "TL2!n3!n14!n2!n";
    public $iban_format_regex = "^TL(\d{2})(\d{3})(\d{14})(\d{2})$";
    public $iban_length = 23;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 3;
    public $bban_branchid_start_offset = "4";
    public $bban_branchid_stop_offset = "6";
    public $registry_edition = "2016-01-21";
    public $country_sepa = 0;
    public $swift_official = 1;
    public $bban_checksum_start_offset = 17;
    public $bban_checksum_stop_offset = 18;
    public $country_code_iana = "tl";
    public $country_code_iso3166_1_alpha2 = "TL";
    public $parent_registrar = "";
    public $currency_iso4217 = "USD";
    public $central_bank_url = "www.bancocentral.tl";
    public $central_bank_name = "Central Bank of Timor-Leste (Banco Central de Timor-Leste)";
}