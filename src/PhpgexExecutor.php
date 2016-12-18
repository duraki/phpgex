<?php

namespace Stackrecord\External\Library\Phpgex;

use Stackrecord\External\Library\Phpgex\AbstractPhpgexExecutor;

class PhpgexExecutor extends AbstractPhpgexExecutor 
{
	public function isEmail($input)
	{
		return $this->validateEmail($input);
	}

	public function isUrl($input)
	{
		return $this->validateUrl($input);
	}

	public function isSlug($input)
	{
		return $this->validateSlug($input);
	}

	public function isIPv4($input)
	{
		return $this->validateIPlow($input);
	}

	public function isIPv6($input)
	{
		return $this->validateIPhigh($input);
	}

	public function isHtml($input)
	{
		return $this->validateHtml($input);
	}

	public function isHex($input)
	{
		return $this->validateHex($input);
	}

	public function isZipcode($input)
	{
		return $this->validateZipcode($input);
	}

	public function isCountry($input)
	{
		return $this->validateCountry($input);
	}

	public function isNumber($input)
	{
		return $this->validateNumber($input);
	}

	public function isFloat($input)
	{
		return $this->validateFloat($input);
	}

	public function isText($input)
	{
		return $this->validateText($input);
	}

	public function isDate($input)
	{

	}

	public function isCreditCardNumber($input)
	{

	}
}