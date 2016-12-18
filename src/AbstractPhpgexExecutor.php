<?php

namespace Stackrecord\External\Library\Phpgex;

use Stackrecord\External\Library\Phpgex\TypePatternEnums;

class AbstractPhpgexExecutor implements TypePatternEnums
{
	public function validateEmail($input)
	{
		return preg_match(self::PATTERN_EMAIL, $input);
	}

	public function validateUrl($input)
	{
		return preg_match(self::PATTERN_URL, $input);
	}

	public function validateIPlow($input)
	{
		return preg_match(self::PATTERN_IPV4, $input);
	}

	public function validateIPhigh($input)
	{
		return preg_match(self::PATTERN_IPV6, $input);
	}

	public function validateHtml($input)
	{

	}

	public function validateZipcode($input)
	{

	}

	public function validateCountry($input)
	{

	}

	public function validateNumbers($input)
	{

	}

	public function validateFloat($input)
	{

	}

	public function validateText($input)
	{

	}

	public function validateDate($input)
	{

	}

	public function validateCreditCardNumber($input)
	{

	}
}