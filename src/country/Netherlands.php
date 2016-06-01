<?php

namespace TPWeb\Iban\Country;

use TPWeb\Iban\Country\Country;

class Netherlands extends Country
{
    public $country_code = "NL";
    public $country_name = "Netherlands";
    public $domestic_example = "041 71 64 300";
    public $bban_example = "ABNA0417164300";
    public $bban_format_swift = "4!a10!n";
    public $bban_format_regex = "^([A-Z]{4})(\d{10})$";
    public $bban_length = 14;
    public $iban_example = "NL91ABNA0417164300";
    public $iban_format_swift = "NL2!n4!a10!n";
    public $iban_format_regex = "^NL(\d{2})([A-Z]{4})(\d{10})$";
    public $iban_length = 18;
    public $bban_bankid_start_offset = 0;
    public $bban_bankid_stop_offset = 3;
    public $bban_branchid_start_offset = "4";
    public $bban_branchid_stop_offset = "3";
    public $registry_edition = "2013-06-20";
    public $country_sepa = 1;
    public $swift_official = 1;
    public $bban_checksum_start_offset = "";
    public $bban_checksum_stop_offset = "";
    public $country_code_iana = "nl";
    public $country_code_iso3166_1_alpha2 = "NL";
    public $parent_registrar = "";
    public $currency_iso4217 = "EUR";
    public $central_bank_url = "www.dnb.nl";
    public $central_bank_name = "Netherlands Bank";
    
    public function calculateBic($iban) {
        //http://www.betaalvereniging.nl/europees-betalen/sepa-documentatie/bic-afleiden-uit-iban/
        //http://www.pruefziffernberechnung.de/I/IBAN.shtml
        $bicBank = [
            'ABNA' => 'ABNANL2A',
            'FTSB' => 'ABNANL2A',
            'AEGO' => 'AEGONL2U',
            'ANAA' => 'ANAANL21',
            'ANDL' => 'ANDLNL2A',
            'ARBN' => 'ARBNNL22',
            'ARSN' => 'ARSNNL21',
            'ASNB' => 'ASNBNL21',
            'ATBA' => 'ATBANL2A',
            'BCDM' => 'BCDMNL22',
            'BCIT' => 'BCITNL2A',
            'BICK' => 'BICKNL2A',
            'BINK' => 'BINKNL21',
            'BKCH' => 'BKCHNL2R',
            'BKMG' => 'BKMGNL2A',
            'BLGW' => 'BLGWNL21',
            'BMEU' => 'BMEUNL21',
            'BNGH' => 'BNGHNL2G',
            'BNPA' => 'BNPANL2A',
            'BOFA' => 'BOFANLNX',
            'BOFS' => 'BOFSNL21002',
            'BOTK' => 'BOTKNL2X',
            'BUNQ' => 'BUNQNL2A',
            'CHAS' => 'CHASNL2X',
            'CITC' => 'CITCNL2A',
            'CITI' => 'CITINL2X',
            'COBA' => 'COBANL2X',
            'DEUT' => 'DEUTNL2N',
            'DHBN' => 'DHBNNL2R',
            'DLBK' => 'DLBKNL2A',
            'DNIB' => 'DNIBNL2G',
            'FBHL' => 'FBHLNL2A',
            'FLOR' => 'FLORNL2A',
            'FRGH' => 'FRGHNL21',
            'FVLB' => 'FVLBNL22',
            'GILL' => 'GILLNL2A',
            'HAND' => 'HANDNL2A',
            'HHBA' => 'HHBANL22',
            'HSBC' => 'HSBCNL2A',
            'ICBK' => 'ICBKNL2A',
            'INGB' => 'INGBNL2A',
            'INSI' => 'INSINL2A',
            'ISBK' => 'ISBKNL2A',
            'KABA' => 'KABANL2A',
            'KASA' => 'KASANL2A',
            'KNAB' => 'KNABNL2H',
            'KOEX' => 'KOEXNL2A',
            'KRED' => 'KREDNL2X',
            'LOCY' => 'LOCYNL2A',
            'LOYD' => 'LOYDNL2A',
            'LPLN' => 'LPLNNL2F',
            'MHCB' => 'MHCBNL2A',
            'NNBA' => 'NNBANL2G',
            'NWAB' => 'NWABNL2G',
            'PCBC' => 'PCBCNL2A',
            'RABO' => 'RABONL2U',
            'RBOS' => 'RBOSNL2A',
            'RBRB' => 'RBRBNL21',
            'SNSB' => 'SNSBNL2A',
            'SOGE' => 'SOGENL2A',
            'STAL' => 'STALNL2G',
            'TEBU' => 'TEBUNL2A',
            'TRIO' => 'TRIONL2U',
            'UBSW' => 'UBSWNL2A',
            'UGBI' => 'UGBINL2A',
            'VOWA' => 'VOWANL21',
            'ZWLB' => 'ZWLBNL21',
        ];
        $bic = null;
        foreach($bicBank as $bank => $bicCode) {
            if(strpos($iban, $bank) > 0) {
                $bic = $bicCode;
            }
        }
        return $bic;
    }
}