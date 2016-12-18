<?php

use PHPUnit\Framework\TestCase;
use Stackrecord\External\Library\Phpgex\PhpgexExecutor;

class PhpgexMatchPatternTest extends TestCase
{
	public function testIsEmail()
	{
		$phpgex	= new PhpgexExecutor();
		$email	= 'duraki@null.net';

		$this->assertEquals(true, $phpgex->isEmail($email));
	}

	public function testIsUrl()
	{
		$phpgex	= new PhpgexExecutor();
		$url	= 'https://stackrecord.com';

		$this->assertEquals(true, $phpgex->isUrl($url));
	}

	public function testIsSlug()
	{
		$phpgex = new PhpgexExecutor();
		$slug	= 'my-simple-phpgex-test-slug';

		$this->assertEquals(true, $phpgex->isSlug($slug));
	}

	public function testIsIPv4()
	{
		$phpgex = new PhpgexExecutor();
		$ipv4	= '127.0.0.1';

		$this->assertEquals(true, $phpgex->isIPv4($ipv4));
	}

	public function testIsIPv6()
	{
		$phpgex = new PhpgexExecutor();
		$ipv6	= '2001:0db8:0a0b:12f0:0000:0000:0000:0001';

		$this->assertEquals(true, $phpgex->isIPv6($ipv6));
	}

	public function testIsHtml()
	{
		$phpgex	= new PhpgexExecutor();
		$html	= '<html><body><p class="pclass">Test</p></body></html>';

		$this->assertEquals(true, $phpgex->isHtml($html));
	}

	public function testIsHex()
	{
		$phpgex = new PhpgexExecutor();
		$hex	= '#FFFFFF';

		$this->assertEquals(true, $phpgex->isHex($hex));
	}

	public function testIsZipcode()
	{
		$phpgex = new PhpgexExecutor();
		$zip	= '88000';

		$this->assertEquals(true, $phpgex->isZipcode($zip));
	}

	public function testIsCountry()
	{
		$phpgex = new PhpgexExecutor();
		$country = 'BH';

		$this->assertEquals(true, $phpgex->isCountry($country));
	}

	public function testIsNumber()
	{
		$phpgex = new PhpgexExecutor();
		$number = '66613121003666';

		$this->assertEquals(true, $phpgex->isNumber($number));
	}

	public function testIsFloat()
	{
		$phpgex = new PhpgexExecutor();
		$float 	= '123566633.11';

		$this->assertEquals(true, $phpgex->isFloat($float));
	}

	public function testIsText()
	{
		$phpgex = new PhpgexExecutor();
		$text 	= 'This is some text for example';

		$this->assertEquals(true, $phpgex->isText($text));
	}

	public function testIsDate()
	{
		$phpgex	= new PhpgexExecutor();
		$date	= '10/03/1982';

		$this->assertEquals(true, $phpgex->isDate($date));
	}

	public function testIsCCNo()
	{
		$phpgex = new PhpgexExecutor();
		$ccno	= '4532238571094916';

		$this->assertEquals(true, $phpgex->isCreditCardNumber($ccno));
	}

}