<?php

use PHPUnit\Framework\TestCase;
use Stackrecord\External\Library\Phpgex\PhpgexExecutor;

class PhpgexMissPatternTest extends TestCase
{
	public function testIsEmail()
	{
		$phpgex	= new PhpgexExecutor();
		$email	= 'duraki@null';

		$this->assertEquals(false, $phpgex->isEmail($email));
	}

	public function testIsUrl()
	{
		$phpgex	= new PhpgexExecutor();
		$url	= 'https://stackrecord';

		$this->assertEquals(false, $phpgex->isUrl($url));
	}

	public function testIsSlug()
	{
		$phpgex = new PhpgexExecutor();
		$slug	= 'my-simple_phpgex-test-slug';

		$this->assertEquals(false, $phpgex->isSlug($slug));
	}

	public function testIsIPv4()
	{
		$phpgex = new PhpgexExecutor();
		$ipv4	= '127.0.0.1.0';

		$this->assertEquals(false, $phpgex->isIPv4($ipv4));
	}

	public function testIsIPv6()
	{
		$phpgex = new PhpgexExecutor();
		$ipv6	= '2001:0db8:0a0b:12f0:00030:0000:0000:0001';

		$this->assertEquals(false, $phpgex->isIPv6($ipv6));
	}

	public function testIsHtml()
	{
		$phpgex	= new PhpgexExecutor();
		$html	= '<html<body<p class="pclass">Test</p></body</html>';

		$this->assertEquals(false, $phpgex->isHtml($html));
	}

	public function testIsHex()
	{
		$phpgex = new PhpgexExecutor();
		$hex	= '#00000H';

		$this->assertEquals(false, $phpgex->isHex($hex));
	}

	public function testIsZipcode()
	{
		$phpgex = new PhpgexExecutor();
		$zip	= '880000';

		$this->assertEquals(false, $phpgex->isZipcode($zip));
	}

	public function testIsCountry()
	{
		$phpgex = new PhpgexExecutor();
		$country = 'CROZ';

		$this->assertEquals(false, $phpgex->isCountry($country));
	}

	public function testIsNumber()
	{
		$phpgex = new PhpgexExecutor();
		$number = '666v13121003666';

		$this->assertEquals(false, $phpgex->isNumber($number));
	}

	public function testIsFloat()
	{
		$phpgex = new PhpgexExecutor();
		$float 	= '1235666311';

		$this->assertEquals(false, $phpgex->isFloat($float));
	}

	public function testIsText()
	{
		$phpgex = new PhpgexExecutor();
		$text 	= 'This is some text for example but it also got number 5 in it';

		$this->assertEquals(false, $phpgex->isText($text));
	}

	public function testIsDate()
	{
		$phpgex	= new PhpgexExecutor();
		$date	= '10/031/1982';

		$this->assertEquals(false, $phpgex->isDate($date));
	}

	public function testIsCCNo()
	{
		$phpgex = new PhpgexExecutor();
		$ccno	= '6532238571094916321321';

		$this->assertEquals(false, $phpgex->isCreditCardNumber($ccno));
	}

	public function testIsPhoneNumber()
	{
		$phpgex = new PhpgexExecutor();
		$phone = '+3871 321 3213213123';

		$this->assertEquals(false, $phpgex->IsPhoneNumber($input));
	}

	public function testIsYear()
	{
		$phpgex = new PhpgexExecutor();
		$year = '1000';

		$this->assertEquals(false, $phpgex->isYear($input));
	}

}