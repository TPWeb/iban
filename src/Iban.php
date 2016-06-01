<?php
namespace TPWeb\Iban;

use TPWeb\Iban\Country\Albania;
use TPWeb\Iban\Country\Algeria;
use TPWeb\Iban\Country\Andorra;
use TPWeb\Iban\Country\Angola;
use TPWeb\Iban\Country\Austria;
use TPWeb\Iban\Country\Azerbaijan;
use TPWeb\Iban\Country\Bahrain;
use TPWeb\Iban\Country\Belgium;
use TPWeb\Iban\Country\Benin;
use TPWeb\Iban\Country\BosniaAndHerzegovina;
use TPWeb\Iban\Country\Brazil;
use TPWeb\Iban\Country\BritishVirginIslands;
use TPWeb\Iban\Country\Bulgaria;
use TPWeb\Iban\Country\BurkinaFaso;
use TPWeb\Iban\Country\Burundi;
use TPWeb\Iban\Country\Cameroon;
use TPWeb\Iban\Country\CapeVerde;
use TPWeb\Iban\Country\CostaRica;
use TPWeb\Iban\Country\CoteDIvoire;
use TPWeb\Iban\Country\Croatia;
use TPWeb\Iban\Country\Cyprus;
use TPWeb\Iban\Country\CzechRepublic;
use TPWeb\Iban\Country\Denmark;
use TPWeb\Iban\Country\FaroeIslands;
use TPWeb\Iban\Country\Greenland;
use TPWeb\Iban\Country\DominicanRepublic;
use TPWeb\Iban\Country\Estonia;
use TPWeb\Iban\Country\Finland;
use TPWeb\Iban\Country\AlandIslands;
use TPWeb\Iban\Country\France;
use TPWeb\Iban\Country\FrenchGuiana;
use TPWeb\Iban\Country\FrenchPolynesia;
use TPWeb\Iban\Country\FrenchSouthernTerritories;
use TPWeb\Iban\Country\Guadelope;
use TPWeb\Iban\Country\Martinique;
use TPWeb\Iban\Country\Mayotte;
use TPWeb\Iban\Country\NewCaledonia;
use TPWeb\Iban\Country\Reunion;
use TPWeb\Iban\Country\SaintBarthelemy;
use TPWeb\Iban\Country\SaintMartinFrenchPart;
use TPWeb\Iban\Country\SaintPierreAndMiquelon;
use TPWeb\Iban\Country\WallisAndFutuna;
use TPWeb\Iban\Country\Georgia;
use TPWeb\Iban\Country\Germany;
use TPWeb\Iban\Country\Gibraltar;
use TPWeb\Iban\Country\Greece;
use TPWeb\Iban\Country\Guatemala;
use TPWeb\Iban\Country\Hungary;
use TPWeb\Iban\Country\Iceland;
use TPWeb\Iban\Country\Iran;
use TPWeb\Iban\Country\Ireland;
use TPWeb\Iban\Country\Israel;
use TPWeb\Iban\Country\Italy;
use TPWeb\Iban\Country\Jordan;
use TPWeb\Iban\Country\Kazakhstan;
use TPWeb\Iban\Country\Kosovo;
use TPWeb\Iban\Country\Kuwait;
use TPWeb\Iban\Country\Latvia;
use TPWeb\Iban\Country\Lebanon;
use TPWeb\Iban\Country\Liechtenstein;
use TPWeb\Iban\Country\Lithuania;
use TPWeb\Iban\Country\Luxembourg;
use TPWeb\Iban\Country\Macedonia;
use TPWeb\Iban\Country\Madagascar;
use TPWeb\Iban\Country\Mali;
use TPWeb\Iban\Country\Malta;
use TPWeb\Iban\Country\Mauritania;
use TPWeb\Iban\Country\Mauritius;
use TPWeb\Iban\Country\Moldova;
use TPWeb\Iban\Country\Monaco;
use TPWeb\Iban\Country\Montenegro;
use TPWeb\Iban\Country\Mozambique;
use TPWeb\Iban\Country\Netherlands;
use TPWeb\Iban\Country\Norway;
use TPWeb\Iban\Country\Pakistan;
use TPWeb\Iban\Country\Palestine;
use TPWeb\Iban\Country\Poland;
use TPWeb\Iban\Country\Portugal;
use TPWeb\Iban\Country\Qatar;
use TPWeb\Iban\Country\Romania;
use TPWeb\Iban\Country\SaintLucia;
use TPWeb\Iban\Country\SanMarino;
use TPWeb\Iban\Country\SaoTomeAndPrincipe;
use TPWeb\Iban\Country\SaudiArabia;
use TPWeb\Iban\Country\Senegal;
use TPWeb\Iban\Country\Serbia;
use TPWeb\Iban\Country\Seychelles;
use TPWeb\Iban\Country\Slovakia;
use TPWeb\Iban\Country\Slovenia;
use TPWeb\Iban\Country\Spain;
use TPWeb\Iban\Country\Sweden;
use TPWeb\Iban\Country\Switzerland;
use TPWeb\Iban\Country\TimorLeste;
use TPWeb\Iban\Country\Tunisia;
use TPWeb\Iban\Country\Turkey;
use TPWeb\Iban\Country\Ukraine;
use TPWeb\Iban\Country\UnitedArabEmirates;
use TPWeb\Iban\Country\UnitedKingdom;
/**
 *
 * PHP Iban Library
 *
 * @version    1.0.0
 * @package    tpweb/iban
 * @copyright  Copyright (c) 2016 Made I.T. (http://www.madeit.be) - TPWeb.org (http://www.tpweb.org)
 * @author     Made I.T. <info@madeit.be>
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt    LGPL
 */
class Iban
{
    protected $version = '1.0.0';
    private $iban;
    private $bic;
    private $country;

    /**
     * Construct TargetPay
     * @param  Transaction|null		$transaction
     */
    function __construct($iban = null, $bic = null) {
        if($iban != null) {
            $this->setIban($iban);
        }
        if($bic != null) {
            $this->setBic($bic);
        }
    }

    /**
     * Set iban
     * @param  String		$iban
     */
    public function setIban($iban) {
        $this->iban = $iban;
        if($iban != null && strlen($iban) > 0) {
            $this->iban = $this->ibanClearFormat();
            $this->country = $this->setCountry();
        }
    }

    /**
     * Get iban
     * @return String
     */
    public function getIban() {
        return $this->iban;
    }

    /**
     * Set bic
     * @param  String		$bic
     */
    public function setBic($bic) {
        $this->bic = $bic;
    }

    /**
     * Get BIC
     * @return String
     */
    public function getBic() {
        return $this->bic;
    }
    
    /**
     * Get Country
     * @return Country
     */
    public function getCountry() {
        return $this->country;
    }
    
    public function isIbanValid($useGmp = true) {
        
        //Test length of IBAN
        if(strlen($this->iban) != $this->country->iban_length) {
            return false;
        }
        // Get checksum of IBAN
        $checksum = substr($this->iban, 2, 2);
        // Get country-specific IBAN format regex
        $regex = '/' . $this->country->iban_format_regex . '/';
        
        //Check regex
        if(preg_match($regex, $this->iban)) {
            //Regex passed, check checksum
            if(!$this->ibanVerifyChecksum($useGmp)) { 
                return false;
            }
        }
        else {
            return false;
        }
        // Otherwise it 'could' exist
        return true;
    }
    
    public function calculateBic() {
        $this->bic = $this->country->calculateBic($this->iban);
        return $this->bic;
    }
    
    public function isBicValid() {
        return preg_match('/^[a-z]{6}[0-9a-z]{2}([0-9a-z]{3})?\z/i', $this->bic) == 1;
    }
    
    public function ibanClearFormat() {
        $iban = preg_replace('/[^a-zA-Z0-9]/', '', $this->iban);
        return $iban;
    }
    
    public function ibanFormat() {
        return wordwrap($this->iban, 4, ' ', true);
    }
    
    private function setCountry() {
        $countryCode = substr($this->iban, 0, 2);
        if(strtoupper($countryCode) == "AL") {
            $this->country = new Albania;
        }
        elseif(strtoupper($countryCode) == "DZ") {
            $this->country = new Algeria;
        }
        elseif(strtoupper($countryCode) == "AD") {
            $this->country = new Andorra;
        }
        elseif(strtoupper($countryCode) == "AO") {
            $this->country = new Angola;
        }
        elseif(strtoupper($countryCode) == "AT") {
            $this->country = new Austria;
        }
        elseif(strtoupper($countryCode) == "AZ") {
            $this->country = new Azerbaijan;
        }
        elseif(strtoupper($countryCode) == "BH") {
            $this->country = new Bahrain;
        }
        elseif(strtoupper($countryCode) == "BE") {
            $this->country = new Belgium;
        }
        elseif(strtoupper($countryCode) == "BJ") {
            $this->country = new Benin;
        }
        elseif(strtoupper($countryCode) == "BA") {
            $this->country = new BosniaAndHerzegovina;
        }
        elseif(strtoupper($countryCode) == "BR") {
            $this->country = new Brazil;
        }
        elseif(strtoupper($countryCode) == "VG") {
            $this->country = new BritishVirginIslands;
        }
        elseif(strtoupper($countryCode) == "BG") {
            $this->country = new Bulgaria;
        }
        elseif(strtoupper($countryCode) == "BF") {
            $this->country = new BurkinaFaso;
        }
        elseif(strtoupper($countryCode) == "BI") {
            $this->country = new Burundi;
        }
        elseif(strtoupper($countryCode) == "CM") {
            $this->country = new Cameroon;
        }
        elseif(strtoupper($countryCode) == "CV") {
            $this->country = new CapeVerde;
        }
        elseif(strtoupper($countryCode) == "CR") {
            $this->country = new CostaRica;
        }
        elseif(strtoupper($countryCode) == "CI") {
            $this->country = new CoteDIvoire;
        }
        elseif(strtoupper($countryCode) == "HR") {
            $this->country = new Croatia;
        }
        elseif(strtoupper($countryCode) == "CY") {
            $this->country = new Cyprus;
        }
        elseif(strtoupper($countryCode) == "CZ") {
            $this->country = new CzechRepublic;
        }
        elseif(strtoupper($countryCode) == "DK") {
            $this->country = new Denmark;
        }
        elseif(strtoupper($countryCode) == "FO") {
            $this->country = new FaroeIslands;
        }
        elseif(strtoupper($countryCode) == "GL") {
            $this->country = new Greenland;
        }
        elseif(strtoupper($countryCode) == "DO") {
            $this->country = new DominicanRepublic;
        }
        elseif(strtoupper($countryCode) == "EE") {
            $this->country = new Estonia;
        }
        elseif(strtoupper($countryCode) == "FI") {
            $this->country = new Finland;
        }
        elseif(strtoupper($countryCode) == "AX") {
            $this->country = new AlandIslands;
        }
        elseif(strtoupper($countryCode) == "FR") {
            $this->country = new France;
        }
        elseif(strtoupper($countryCode) == "GF") {
            $this->country = new FrenchGuiana;
        }
        elseif(strtoupper($countryCode) == "PF") {
            $this->country = new FrenchPolynesia;
        }
        elseif(strtoupper($countryCode) == "TF") {
            $this->country = new FrenchSouthernTerritories;
        }
        elseif(strtoupper($countryCode) == "GP") {
            $this->country = new Guadelope;
        }
        elseif(strtoupper($countryCode) == "MQ") {
            $this->country = new Martinique;
        }
        elseif(strtoupper($countryCode) == "YT") {
            $this->country = new Mayotte;
        }
        elseif(strtoupper($countryCode) == "NC") {
            $this->country = new NewCaledonia;
        }
        elseif(strtoupper($countryCode) == "RE") {
            $this->country = new Reunion;
        }
        elseif(strtoupper($countryCode) == "BL") {
            $this->country = new SaintBarthelemy;
        }
        elseif(strtoupper($countryCode) == "MF") {
            $this->country = new SaintMartinFrenchPart;
        }
        elseif(strtoupper($countryCode) == "PM") {
            $this->country = new SaintPierreAndMiquelon;
        }
        elseif(strtoupper($countryCode) == "WF") {
            $this->country = new WallisAndFutuna;
        }
        elseif(strtoupper($countryCode) == "GE") {
            $this->country = new Georgia;
        }
        elseif(strtoupper($countryCode) == "DE") {
            $this->country = new Germany;
        }
        elseif(strtoupper($countryCode) == "GI") {
            $this->country = new Gibraltar;
        }
        elseif(strtoupper($countryCode) == "GR") {
            $this->country = new Greece;
        }
        elseif(strtoupper($countryCode) == "GT") {
            $this->country = new Guatemala;
        }
        elseif(strtoupper($countryCode) == "HU") {
            $this->country = new Hungary;
        }
        elseif(strtoupper($countryCode) == "IS") {
            $this->country = new Iceland;
        }
        elseif(strtoupper($countryCode) == "IR") {
            $this->country = new Iran;
        }
        elseif(strtoupper($countryCode) == "IE") {
            $this->country = new Ireland;
        }
        elseif(strtoupper($countryCode) == "IL") {
            $this->country = new Israel;
        }
        elseif(strtoupper($countryCode) == "IT") {
            $this->country = new Italy;
        }
        elseif(strtoupper($countryCode) == "JO") {
            $this->country = new Jordan;
        }
        elseif(strtoupper($countryCode) == "KZ") {
            $this->country = new Kazakhstan;
        }
        elseif(strtoupper($countryCode) == "XK") {
            $this->country = new Kosovo;
        }
        elseif(strtoupper($countryCode) == "KW") {
            $this->country = new Kuwait;
        }
        elseif(strtoupper($countryCode) == "LV") {
            $this->country = new Latvia;
        }
        elseif(strtoupper($countryCode) == "LB") {
            $this->country = new Lebanon;
        }
        elseif(strtoupper($countryCode) == "LI") {
            $this->country = new Liechtenstein;
        }
        elseif(strtoupper($countryCode) == "LT") {
            $this->country = new Lithuania;
        }
        elseif(strtoupper($countryCode) == "LU") {
            $this->country = new Luxembourg;
        }
        elseif(strtoupper($countryCode) == "MK") {
            $this->country = new Macedonia;
        }
        elseif(strtoupper($countryCode) == "MG") {
            $this->country = new Madagascar;
        }
        elseif(strtoupper($countryCode) == "ML") {
            $this->country = new Mali;
        }
        elseif(strtoupper($countryCode) == "MT") {
            $this->country = new Malta;
        }
        elseif(strtoupper($countryCode) == "MR") {
            $this->country = new Mauritania;
        }
        elseif(strtoupper($countryCode) == "MU") {
            $this->country = new Mauritius;
        }
        elseif(strtoupper($countryCode) == "MD") {
            $this->country = new Moldova;
        }
        elseif(strtoupper($countryCode) == "MC") {
            $this->country = new Monaco;
        }
        elseif(strtoupper($countryCode) == "ME") {
            $this->country = new Montenegro;
        }
        elseif(strtoupper($countryCode) == "MZ") {
            $this->country = new Mozambique;
        }
        elseif(strtoupper($countryCode) == "NL") {
            $this->country = new Netherlands;
        }
        elseif(strtoupper($countryCode) == "NO") {
            $this->country = new Norway;
        }
        elseif(strtoupper($countryCode) == "PK") {
            $this->country = new Pakistan;
        }
        elseif(strtoupper($countryCode) == "PS") {
            $this->country = new Palestine;
        }
        elseif(strtoupper($countryCode) == "PL") {
            $this->country = new Poland;
        }
        elseif(strtoupper($countryCode) == "PT") {
            $this->country = new Portugal;
        }
        elseif(strtoupper($countryCode) == "QA") {
            $this->country = new Qatar;
        }
        elseif(strtoupper($countryCode) == "RO") {
            $this->country = new Romania;
        }
        elseif(strtoupper($countryCode) == "LC") {
            $this->country = new SaintLucia;
        }
        elseif(strtoupper($countryCode) == "SM") {
            $this->country = new SanMarino;
        }
        elseif(strtoupper($countryCode) == "ST") {
            $this->country = new SaoTomeAndPrincipe;
        }
        elseif(strtoupper($countryCode) == "SA") {
            $this->country = new SaudiArabia;
        }
        elseif(strtoupper($countryCode) == "SN") {
            $this->country = new Senegal;
        }
        elseif(strtoupper($countryCode) == "RS") {
            $this->country = new Serbia;
        }
        elseif(strtoupper($countryCode) == "SC") {
            $this->country = new Seychelles;
        }
        elseif(strtoupper($countryCode) == "SK") {
            $this->country = new Slovakia;
        }
        elseif(strtoupper($countryCode) == "SI") {
            $this->country = new Slovenia;
        }
        elseif(strtoupper($countryCode) == "ES") {
            $this->country = new Spain;
        }
        elseif(strtoupper($countryCode) == "SE") {
            $this->country = new Sweden;
        }
        elseif(strtoupper($countryCode) == "CH") {
            $this->country = new Switzerland;
        }
        elseif(strtoupper($countryCode) == "TL") {
            $this->country = new TimorLeste;
        }
        elseif(strtoupper($countryCode) == "TN") {
            $this->country = new Tunisia;
        }
        elseif(strtoupper($countryCode) == "TR") {
            $this->country = new Turkey;
        }
        elseif(strtoupper($countryCode) == "UA") {
            $this->country = new Ukraine;
        }
        elseif(strtoupper($countryCode) == "AE") {
            $this->country = new UnitedArabEmirates;
        }
        elseif(strtoupper($countryCode) == "GB") {
            $this->country = new UnitedKingdom;
        }
        return $this->country;
    }
    
    private function ibanVerifyChecksum($useGmp = true) {
        $tempiban = substr($this->iban, 4) . substr($this->iban, 0, 4);
        //subsitutute chars
        $tempiban = $this->ibanChecksumStringReplace($tempiban);
        //mod97-1
        $result = $this->ibanMod97_10($tempiban, $useGmp);
        //checkvalue of 1 indicates correct IBAN checksum
        if ($result != 1) {
            return false;
        }
        return true;
    }
    
    private function ibanChecksumStringReplace($s) {
        $iban_replace_chars = range('A', 'Z');
        foreach (range(10, 35) as $tempvalue) {
            $iban_replace_values[] = strval($tempvalue);
        }
        return str_replace($iban_replace_chars, $iban_replace_values, $s);
    }
    
    private function ibanMod97_10($numeric_representation, $useGmp = true) {
        // prefer php5 gmp extension if available
        if($useGmp && function_exists('gmp_intval')) {
            return gmp_intval(gmp_mod(gmp_init($numeric_representation, 10),'97')) === 1;
        }
        $length = strlen($numeric_representation);
        $rest = "";
        $position = 0;
        while ($position < $length) {
            $value = 9 - strlen($rest);
            $n = $rest . substr($numeric_representation, $position, $value);
            $rest = $n % 97;
            $position = $position + $value;
        }
        return ($rest === 1);
    }
}
