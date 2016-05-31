<?php
use TPWeb\Iban\Iban;

class IbanTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        parent::setUp();
    }
    
    public function testConstructor()
    {
        $iban = new Iban("BE");
        $this->assertEquals("BE", $iban->getIban());
        
        $iban = new Iban("BE", "BIC");
        $this->assertEquals("BIC", $iban->getBic());
    }
    
    public function testGetCountry() {
        $iban = new Iban("BE", "BIC");
        $this->assertTrue($iban->getCountry() instanceof \TPWeb\Iban\Country\Belgium);
    }
    
    public function testIbanNotEnoughLength() {
        $iban = new Iban("BE", "BIC");
        $this->assertFalse($iban->isIbanValid());
    }
    
    public function testIbanWrongRegex() {
        $iban = new Iban("BE6853900754TEST", "BIC");
        $this->assertFalse($iban->isIbanValid());
    }
    
    public function testIbanWrongChecksum() {
        $iban = new Iban("BE68539007540000", "BIC");
        $this->assertFalse($iban->isIbanValid());
    }
    
    public function testIbanSuccessBelgium() {
        $iban = new Iban("BE68539007547034", "BIC");
        $this->assertTrue($iban->isIbanValid());
    }
    
    public function testIbanSuccessNoGMP() {
        $iban = new Iban("BE68539007547034", "BIC");
        $this->assertTrue($iban->isIbanValid(false));
    }
    
    public function testIbanClearFormat() {
        $iban = new Iban("BE68539007547034");
        $this->assertEquals("BE68539007547034", $iban->ibanClearFormat());
    }
    
    public function testIbanFormat() {
        $iban = new Iban("BE68539007547034");
        $this->assertEquals("BE68 5390 0754 7034", $iban->ibanFormat());
    }
    
    public function testIbanSuccessAlbania() {
        $iban = new Iban("AL47212110090000000235698741");
        $this->assertTrue($iban->isIbanValid());
    }
    
    public function testIbanSuccessAlgeria() {
        $iban = new Iban("DZ3512341234123412341234");
        $this->assertTrue($iban->isIbanValid());
    }
    
    public function testIbanSuccessAndorra() {
        $iban = new Iban("AD1200012030200359100100");
        $this->assertTrue($iban->isIbanValid());
    }
    
    public function testIbanSuccessAngola() {
        $iban = new Iban("AO44123412341234123412341");
        $this->assertTrue($iban->isIbanValid());
    }
    
    public function testIbanSuccessAustria() {
        $iban = new Iban("AT611904300234573201");
        $this->assertTrue($iban->isIbanValid());
    }
    
    public function testIbanSuccessAzerbaijan() {
        $iban = new Iban("AZ21NABZ00000000137010001944");
        $this->assertTrue($iban->isIbanValid());
    }
    
    public function testIbanSuccessBahrain() {
        $iban = new Iban("BH67BMAG00001299123456");
        $this->assertTrue($iban->isIbanValid());
    }
    
    public function testIbanSuccessBenin() {
        $iban = new Iban("BJ83A12312341234123412341234");
        $this->assertTrue($iban->isIbanValid());
    }
    
    public function testIbanSuccessBosniaAndHerzegovina() {
        $iban = new Iban("BA391290079401028494");
        $this->assertTrue($iban->isIbanValid());
    }
    
    public function testIbanSuccessBrazil() {
        $iban = new Iban("BR9700360305000010009795493P1");
        $this->assertTrue($iban->isIbanValid());
    }
    
    public function testIbanSuccessBritishVirginIsland() {
        $iban = new Iban("VG96VPVG0000012345678901");
        $this->assertTrue($iban->isIbanValid());
    }
    
    public function testIbanSuccessBulgaria() {
        $iban = new Iban("BG80BNBG96611020345678");
        $this->assertTrue($iban->isIbanValid());
    }
    
    public function testIbanSuccessBurkinaFaso() {
        $iban = new Iban("BF4512341234123412341234123");
        $this->assertTrue($iban->isIbanValid());
    }
    
    public function testIbanSuccessBurundi() {
        $iban = new Iban("BI33123412341234");
        $this->assertTrue($iban->isIbanValid());
    }
    
    public function testIbanSuccessCameroon() {
        $iban = new Iban("CM1512341234123412341234123");
        $this->assertTrue($iban->isIbanValid());
    }
    
    public function testIbanSuccessCapeVerde() {
        $iban = new Iban("CV05123412341234123412341");
        $this->assertTrue($iban->isIbanValid());
    }
    
    public function testIbanSuccessCostaRica() {
        $iban = new Iban("CR0515202001026284066");
        $this->assertTrue($iban->isIbanValid());
    }
    
    public function testIbanSuccessCoteDIvoire() {
        $iban = new Iban("CI77A12312341234123412341234");
        $this->assertTrue($iban->isIbanValid());
    }
    
    public function testIbanSuccessCroatia() {
        $iban = new Iban("HR1210010051863000160");
        $this->assertTrue($iban->isIbanValid());
    }
    
    public function testIbanSuccessCyprus() {
        $iban = new Iban("CY17002001280000001200527600");
        $this->assertTrue($iban->isIbanValid());
    }
    
    public function testIbanSuccessCzechRepublic() {
        $iban = new Iban("CZ6508000000192000145399");
        $this->assertTrue($iban->isIbanValid());
    }
    
    public function testIbanSuccessDenmark() {
        $iban = new Iban("DK5000400440116243");
        $this->assertTrue($iban->isIbanValid());
    }
    
    public function testIbanSuccessFaroeIslands() {
        $iban = new Iban("FO2000400440116243");
        $this->assertTrue($iban->isIbanValid());
    }
    
    public function testIbanSuccessGreenland() {
        $iban = new Iban("GL2000400440116243");
        $this->assertTrue($iban->isIbanValid());
    }
    
    public function testIbanSuccessDominicanRepublic() {
        $iban = new Iban("DO28BAGR00000001212453611324");
        $this->assertTrue($iban->isIbanValid());
    }
}