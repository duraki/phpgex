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

	public function validateSlug($input)
	{
		return preg_match(self::PATTERN_SLUG, strtolower($input));
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
		return preg_match(self::PATTERN_HTML, $input);
	}

	public function validateHex($input)
	{
		return preg_match(self::PATTERN_HEX, strtolower($input));
	}

	public function validateZipcode($input)
	{
		return preg_match(self::PATTERN_ZIPCODE, $input);
	}

	public function validateCountry($input)
	{
		return preg_match(self::PATTERN_COUNTRY, $input);
	}

	public function validateNumber($input)
	{
		return preg_match(self::PATTERN_NUMBER, $input);
	}

	public function validateFloat($input)
	{
		return preg_match(self::PATTERN_FLOAT, $input);
	}

	public function validateText($input)
	{
		return preg_match(self::PATTERN_TEXT, $input);
	}

	public function validateDate($input)
	{

	}

	public function validateCreditCardNumber($input)
	{

	}
}