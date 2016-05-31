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
use TPWeb\Iban\Country\Croatia;
use TPWeb\Iban\Country\Cyprus;
use TPWeb\Iban\Country\CzechRepublic;
use TPWeb\Iban\Country\CoteDIvoire;
use TPWeb\Iban\Country\Denmark;
use TPWeb\Iban\Country\DominicanRepublic;
//use TPWeb\Iban\Country\;
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
    public function setIban($iban)
    {
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
    public function getBic()
    {
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
    
    public function ibanClearFormat() {
        $iban = preg_replace('/[^a-zA-Z0-9]/','',$this->iban);
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
        elseif(strtoupper($countryCode) == "CR") {
            $this->country = new CostaRica;
        }
        elseif(strtoupper($countryCode) == "CV") {
            $this->country = new CapeVerde;
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
        elseif(strtoupper($countryCode) == "CI") {
            $this->country = new CoteDIvoire;
        }
        elseif(strtoupper($countryCode) == "DK") {
            $this->country = new Denmark;
        }
        elseif(strtoupper($countryCode) == "DO") {
            $this->country = new DominicanRepublic;
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
