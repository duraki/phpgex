<?php

namespace Stackrecord\External\Library\Phpgex;

use Stackrecord\External\Library\Phpgex\TypePatternEnums;

class AbstractPhpgexExecutor implements TypePatternEnums
{

	/**
	 * Validate email address
	 * @param  string $input email
	 * @return bool
	 */
	public function validateEmail($input)
	{
		return preg_match(self::PATTERN_EMAIL, $input);
	}

	/**
	 * Validate URL (http/s, www)
	 * @param  string $input url
	 * @return bool
	 */
	public function validateUrl($input)
	{
		return preg_match(self::PATTERN_URL, $input);
	}

	/**
	 * Validate URL slug
	 * @param  string $input slug
	 * @return bool        
	 */
	public function validateSlug($input)
	{
		return preg_match(self::PATTERN_SLUG, strtolower($input));
	}

	/**
	 * Validate IPv4
	 * @param  string $input ipv4
	 * @return bool        
	 */
	public function validateIPlow($input)
	{
		return preg_match(self::PATTERN_IPV4, $input);
	}

	/**
	 * Validate IPv6
	 * @param  string $input ipv6
	 * @return bool        
	 */
	public function validateIPhigh($input)
	{
		return preg_match(self::PATTERN_IPV6, $input);
	}

	/**
	 * Validate HTML
	 * @param  string $input html
	 * @return bool        
	 */
	public function validateHtml($input)
	{
		return preg_match(self::PATTERN_HTML, $input);
	}

	/**
	 * Validate HEX colors
	 * @param  string $input hex
	 * @return bool        
	 */
	public function validateHex($input)
	{
		return preg_match(self::PATTERN_HEX, strtolower($input));
	}

	/**
	 * Validate zipcode
	 * @param  string $input zipcode
	 * @return bool        
	 */
	public function validateZipcode($input)
	{
		return preg_match(self::PATTERN_ZIPCODE, $input);
	}

	/**
	 * Validate country code
	 * @param  string $input country_code
	 * @return bool        
	 */
	public function validateCountry($input)
	{
		return preg_match(self::PATTERN_COUNTRY, $input);
	}

	/**
	 * Validate number
	 * @param  string $input number
	 * @return bool        
	 */
	public function validateNumber($input)
	{
		return preg_match(self::PATTERN_NUMBER, $input);
	}

	/**
	 * Validate float
	 * @param  string $input float
	 * @return bool        
	 */
	public function validateFloat($input)
	{
		return preg_match(self::PATTERN_FLOAT, $input);
	}

	/**
	 * Validate text
	 * @param  string $input text
	 * @return bool        
	 */
	public function validateText($input)
	{
		return preg_match(self::PATTERN_TEXT, $input);
	}

	/**
	 * Validate date
	 * @param  string $input date
	 * @return bool        
	 */
	public function validateDate($input)
	{
		/** Accept:
			dd/mm/yyyy
			dd-mm-yyyy
			dd.mm.yyyy */
		return preg_match(self::PATTERN_DATE, $input);
	}

	/**
	 * Validate credit card number
	 * @param  string $input ccno
	 * @return bool        
	 */
	public function validateCreditCardNumber($input)
	{
		return preg_match(self::PATTERN_CCNO, $input);
	}

	/**
	 * Validate phone number (+xxx ....)
	 * @param  string $input phoneNumber 
	 * @return bool
	 */
	public function validatePhoneNumber($input)
	{
		return preg_match(self::PATTERN_PHONE, $input)
	}
}