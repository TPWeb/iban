<?php
use TPWeb\Iban\Iban;
use PHPUnit\Framework\TestCase;

class IbanTest extends TestCase
{
    public function setUp(): void
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
        $iban = new Iban("BE");
        $this->assertTrue($iban->getCountry() instanceof \TPWeb\Iban\Country\Belgium);
    }
    
    public function testIbanNotEnoughLength() {
        $iban = new Iban("BE");
        $this->assertFalse($iban->isIbanValid());
    }
    
    public function testIbanWrongRegex() {
        $iban = new Iban("BE6853900754TEST");
        $this->assertFalse($iban->isIbanValid());
    }
    
    public function testIbanWrongChecksum() {
        $iban = new Iban("BE68539007540000");
        $this->assertFalse($iban->isIbanValid());
    }
    
    public function testIbanSuccessNoGMP() {
        $iban = new Iban("BE68539007547034");
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


    public function testIbanSuccessBelgium() {
        $iban = new Iban("BE68539007547034");
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


    public function testIbanSuccessBritishVirginIslands() {
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


    public function testIbanSuccessEstonia() {
        $iban = new Iban("EE382200221020145685");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessFinland() {
        $iban = new Iban("FI2112345600000785");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessAlandIslands() {
        $iban = new Iban("AX2112345600000785");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessFrance() {
        $iban = new Iban("FR1420041010050500013M02606");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessFrenchGuiana() {
        $iban = new Iban("GF4120041010050500013M02606");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessFrenchPolynesia() {
        $iban = new Iban("PF5720041010050500013M02606");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessFrenchSouthernTerritories() {
        $iban = new Iban("TF2120041010050500013M02606");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessGuadelope() {
        $iban = new Iban("GP1120041010050500013M02606");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessMartinique() {
        $iban = new Iban("MQ5120041010050500013M02606");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessMayotte() {
        $iban = new Iban("YT3120041010050500013M02606");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessNewCaledonia() {
        $iban = new Iban("NC8420041010050500013M02606");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessReunion() {
        $iban = new Iban("RE4220041010050500013M02606");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessSaintBarthélemy() {
        $iban = new Iban("BL6820041010050500013M02606");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessSaintMartinFrenchPart() {
        $iban = new Iban("MF8420041010050500013M02606");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessSaintPierreAndMiquelon() {
        $iban = new Iban("PM3620041010050500013M02606");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessWallisAndFutuna() {
        $iban = new Iban("WF9120041010050500013M02606");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessGeorgia() {
        $iban = new Iban("GE29NB0000000101904917");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessGermany() {
        $iban = new Iban("DE89370400440532013000");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessGibraltar() {
        $iban = new Iban("GI75NWBK000000007099453");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessGreece() {
        $iban = new Iban("GR1601101250000000012300695");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessGuatemala() {
        $iban = new Iban("GT82TRAJ01020000001210029690");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessHungary() {
        $iban = new Iban("HU42117730161111101800000000");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessIceland() {
        $iban = new Iban("IS140159260076545510730339");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessIran() {
        $iban = new Iban("IR081234123412341234123412");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessIreland() {
        $iban = new Iban("IE29AIBK93115212345678");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessIsrael() {
        $iban = new Iban("IL620108000000099999999");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessItaly() {
        $iban = new Iban("IT60X0542811101000000123456");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessJordan() {
        $iban = new Iban("JO94CBJO0010000000000131000302");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessKazakhstan() {
        $iban = new Iban("KZ86125KZT5004100100");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessKosovo() {
        $iban = new Iban("XK051212012345678906");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessKuwait() {
        $iban = new Iban("KW81CBKU0000000000001234560101");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessLatvia() {
        $iban = new Iban("LV80BANK0000435195001");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessLebanon() {
        $iban = new Iban("LB62099900000001001901229114");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessLiechtenstein() {
        $iban = new Iban("LI21088100002324013AA");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessLithuania() {
        $iban = new Iban("LT121000011101001000");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessLuxembourg() {
        $iban = new Iban("LU280019400644750000");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessMacedonia() {
        $iban = new Iban("MK07250120000058984");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessMadagascar() {
        $iban = new Iban("MG4012341234123412341234123");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessMali() {
        $iban = new Iban("ML75A12312341234123412341234");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessMalta() {
        $iban = new Iban("MT84MALT011000012345MTLCAST001S");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessMauritania() {
        $iban = new Iban("MR1300020001010000123456753");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessMauritius() {
        $iban = new Iban("MU17BOMM0101101030300200000MUR");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessMoldova() {
        $iban = new Iban("MD24AG000225100013104168");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessMonaco() {
        $iban = new Iban("MC5811222000010123456789030");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessMontenegro() {
        $iban = new Iban("ME25505000012345678951");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessMozambique() {
        $iban = new Iban("MZ97123412341234123412341");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessNetherlands() {
        $iban = new Iban("NL91ABNA0417164300");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessNorway() {
        $iban = new Iban("NO9386011117947");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessPakistan() {
        $iban = new Iban("PK36SCBL0000001123456702");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessPalestine() {
        $iban = new Iban("PS92PALS000000000400123456702");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessPoland() {
        $iban = new Iban("PL61109010140000071219812874");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessPortugal() {
        $iban = new Iban("PT50000201231234567890154");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessQatar() {
        $iban = new Iban("QA58DOHB00001234567890ABCDEFG");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessRomania() {
        $iban = new Iban("RO49AAAA1B31007593840000");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessSaintLucia() {
        $iban = new Iban("LC55HEMM000100010012001200023015");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessSanMarino() {
        $iban = new Iban("SM86U0322509800000000270100");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessSaoTomeAndPrincipe() {
        $iban = new Iban("ST68000100010051845310112");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessSaudiArabia() {
        $iban = new Iban("SA0380000000608010167519");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessSenegal() {
        $iban = new Iban("SN15A12312341234123412341234");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessSerbia() {
        $iban = new Iban("RS35260005601001611379");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessSeychelles() {
        $iban = new Iban("SC18SSCB11010000000000001497USD");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessSlovakia() {
        $iban = new Iban("SK3112000000198742637541");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessSlovenia() {
        $iban = new Iban("SI56191000000123438");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessSpain() {
        $iban = new Iban("ES9121000418450200051332");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessSweden() {
        $iban = new Iban("SE4550000000058398257466");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessSwitzerland() {
        $iban = new Iban("CH9300762011623852957");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessTimorLeste() {
        $iban = new Iban("TL380080012345678910157");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessTunisia() {
        $iban = new Iban("TN5910006035183598478831");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessTurkey() {
        $iban = new Iban("TR330006100519786457841326");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessUkraine() {
        $iban = new Iban("UA213996220000026007233566001");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessUnitedArabEmirates() {
        $iban = new Iban("AE070331234567890123456");
        $this->assertTrue($iban->isIbanValid());
    }


    public function testIbanSuccessUnitedKingdom() {
        $iban = new Iban("GB29NWBK60161331926819");
        $this->assertTrue($iban->isIbanValid());
    }
    
    public function testBicCalculationBelgium() {
        $iban = new Iban("BE35103043860337");
        $this->assertEquals($iban->calculateBic(), "NICABEBB");
    }
    
    public function testBicCalculationNetherlands() {
        $iban = new Iban("NL91ABNA0417164300");
        $this->assertEquals($iban->calculateBic(), "ABNANL2A");
    }
    
    public function testBicValidation() {
        $iban = new Iban("NL91ABNA0417164300", "ABNANL2A");
        $this->assertTrue($iban->isBicValid());
    }
}
