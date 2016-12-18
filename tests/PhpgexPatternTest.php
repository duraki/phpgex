<?php

use PHPUnit\Framework\TestCase;
use Stackrecord\External\Library\Phpgex\PhpgexExecutor;

class PhpgexPatternTest extends TestCase
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

}