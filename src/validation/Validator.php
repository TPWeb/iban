<?php namespace TPWeb\Iban\Validation;

use TPWeb\Iban\Iban;

class Validator
{
	public function isBic($value)
	{
        $iban = new Iban(null, $value);
        return $iban->isBicValid();
	}

	public function isIban($value)
	{
        $iban = new Iban($value);
        return $iban->isIbanValid();
	}
}