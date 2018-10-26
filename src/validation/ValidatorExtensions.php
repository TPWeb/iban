<?php namespace TPWeb\Iban\Validation;

use TPWeb\Iban\Iban;
use TPWeb\Iban\Validation\Validator;
class ValidatorExtensions
{
	/**
	 * @var TPWeb\Iban\Validation\Validator
	 */
	private $validator;

	public function __construct(Validator $validator)
	{
		$this->validator = $validator;
	}
    
	public function validateBic($attribute, $value, $parameters)
	{
        	return $this->validator->isBic($value);
	}

	public function validateIban($attribute, $value, $parameters)
	{
        	return $this->validator->isIban($value);
	}
}
