<?php
use TPWeb\Iban\Iban;
use TPWeb\Iban\Validation\ValidatorExtensions;
use Illuminate\Validation\Factory;
use PHPUnit\Framework\TestCase;

class validateTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }
    
    public function testValidatorIban() {
        $validator = new TPWeb\Iban\Validation\Validator;
        $this->assertTrue($validator->isIban("BE68539007547034"));
    }
    
    public function testValidatorIbanFails() {
        $validator = new TPWeb\Iban\Validation\Validator;
        $this->assertFalse($validator->isIban("BE68539007547000"));
    }
    
    public function testValidatorBic() {
        $validator = new TPWeb\Iban\Validation\Validator;
        $this->assertTrue($validator->isBic("ABNANL2A"));
    }
    
    public function testValidatorBicFails() {
        $validator = new TPWeb\Iban\Validation\Validator;
        $this->assertFalse($validator->isBic("INVALIDBICGIVEN"));
    }

    public function testValidIban()
    {
        $validator = Mockery::mock('TPWeb\Iban\Validation\Validator');
        $extensions = new ValidatorExtensions($validator);

        $container = Mockery::mock('Illuminate\Container\Container');
        $translator = Mockery::mock('Illuminate\Contracts\Translation\Translator');

        $container->shouldReceive('make')->once()->with('TPWeb\Iban\Validation\ValidatorExtensions')->andReturn($extensions);
        $validator->shouldReceive('isIban')->once()->with('BE68539007547034')->andReturn(true);

        $factory = new Factory($translator, $container);
        $factory->extend('iban', 'TPWeb\Iban\Validation\ValidatorExtensions@validateIban', ':attribute must be a valid IBAN number');
        $validator = $factory->make(['foo' => 'BE68539007547034'], ['foo' => 'iban']);
        $this->assertTrue($validator->passes());
    }

    public function testValidIbanFails()
    {
        $validator = Mockery::mock('TPWeb\Iban\Validation\Validator');
        $extensions = new ValidatorExtensions($validator);

        $container = Mockery::mock('Illuminate\Container\Container');
        $translator = Mockery::mock('Illuminate\Contracts\Translation\Translator');

        $container->shouldReceive('make')->once()->with('TPWeb\Iban\Validation\ValidatorExtensions')->andReturn($extensions);
        $validator->shouldReceive('isIban')->once()->with('BE68539007547000')->andReturn(false);
        $translator->shouldReceive('trans')->once()->with('validation.custom')->andReturn('validation.custom');
        $translator->shouldReceive('trans')->once()->with('validation.custom.foo.iban')->andReturn('validation.custom.foo.iban');
        $translator->shouldReceive('trans')->once()->with('validation.iban')->andReturn('validation.iban');
        $translator->shouldReceive('trans')->once()->with('validation.attributes.foo')->andReturn('validation.attributes.foo');
        $translator->shouldReceive('get')->once()->with('validation.custom.foo.iban')->andReturn('validation.custom.foo.iban');
        $translator->shouldReceive('get')->once()->with('validation.custom')->andReturn('validation.custom');

        $factory = new Factory($translator, $container);
        $factory->extend('iban', 'TPWeb\Iban\Validation\ValidatorExtensions@validateIban', ':attribute must be a valid IBAN number');
        $validator = $factory->make(['foo' => 'BE68539007547000'], ['foo' => 'iban']);
        $this->assertTrue($validator->fails());

        $messages = $validator->messages();
        $this->assertInstanceOf('Illuminate\Support\MessageBag', $messages);
        $this->assertEquals('foo must be a valid IBAN number', $messages->first('foo'));
    }

    public function testValidBic()
    {
        $validator = Mockery::mock('TPWeb\Iban\Validation\Validator');
        $extensions = new ValidatorExtensions($validator);

        $container = Mockery::mock('Illuminate\Container\Container');
        $translator = Mockery::mock('Illuminate\Contracts\Translation\Translator');

        $container->shouldReceive('make')->once()->with('TPWeb\Iban\Validation\ValidatorExtensions')->andReturn($extensions);
        $validator->shouldReceive('isBic')->once()->with('ABNANL2A')->andReturn(true);
        $translator->shouldReceive('get')->once()->with('foo')->andReturn('foo');

        $factory = new Factory($translator, $container);
        $factory->extend('bic', 'TPWeb\Iban\Validation\ValidatorExtensions@validateBic', ':attribute must be a valid BIC');
        $validator = $factory->make(['foo' => 'ABNANL2A'], ['foo' => 'bic']);
        $this->assertTrue($validator->passes());
    }

    public function testValidBicFails()
    {
        $validator = Mockery::mock('TPWeb\Iban\Validation\Validator');
        $extensions = new ValidatorExtensions($validator);

        $container = Mockery::mock('Illuminate\Container\Container');
        $translator = Mockery::mock('Illuminate\Contracts\Translation\Translator');

        $container->shouldReceive('make')->once()->with('TPWeb\Iban\Validation\ValidatorExtensions')->andReturn($extensions);
        $validator->shouldReceive('isBic')->once()->with('ABNANL2AWRONGBIC')->andReturn(false);
        $translator->shouldReceive('trans')->once()->with('validation.custom')->andReturn('validation.custom');
        $translator->shouldReceive('trans')->once()->with('validation.custom.foo.bic')->andReturn('validation.custom.foo.bic');
        $translator->shouldReceive('trans')->once()->with('validation.bic')->andReturn('validation.bic');
        $translator->shouldReceive('trans')->once()->with('validation.attributes.foo')->andReturn('validation.attributes.foo');
        $translator->shouldReceive('get')->once()->with('validation.custom.foo.bic')->andReturn('validation.custom.foo.bic');
        $translator->shouldReceive('get')->once()->with('validation.custom')->andReturn('validation.custom');

        $factory = new Factory($translator, $container);
        $factory->extend('bic', 'TPWeb\Iban\Validation\ValidatorExtensions@validateBic', ':attribute must be a valid IBAN number');
        $validator = $factory->make(['foo' => 'ABNANL2AWRONGBIC'], ['foo' => 'bic']);
        $this->assertTrue($validator->fails());

        $messages = $validator->messages();
        $this->assertInstanceOf('Illuminate\Support\MessageBag', $messages);
        $this->assertEquals('foo must be a valid IBAN number', $messages->first('foo'));
    }
}
