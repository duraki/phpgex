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

	}

	public function isZipcode($input)
	{

	}

	public function isCountry($input)
	{

	}

	public function isNumbers($input)
	{

	}

	public function isFloat($input)
	{

	}

	public function isText($input)
	{

	}

	public function isDate($input)
	{

	}

	public function isCreditCardNumber($input)
	{

	}
}