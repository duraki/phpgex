## phpgex
This is a pure and beautiful PHP library implementation for common regex patterns. It's designed with ease of operation, and user-friendly experience. This library will allow you to quickly match some of the contributed patterns. The code is inspired by Laravel framework and the [Validator](https://laravel.com/docs/5.3/validation) API that Laravel offers. In quite similar approach, this library will be updated reguralry with new, fixed and improved patterns. This library is also inspired (but not limited) by [PHPVerbalExpression](https://github.com/VerbalExpressions/PHPVerbalExpressions), [SRL](https://github.com/SimpleRegex/SRL-PHP) and many other. In case you are interested, the **Contribution** guidelines is several paragraphs bellow.
  
**phpgex** in it's simplicity allows you validating input in a sexy manner. The full API documentation is on Wiki of this project located [here](https://github.com/dn5/phpgex/wiki/API-documentation). The repository is officialy hosted on [GitHub](https://github.com/dn5/phpgex)!

*Simple as this ...*
```php
<?php

...
	// return $request->data('email')
	// hello@stackrecord.com

	if ( $phpgex->isEmail($request->data('email') )
	{
		return Response::200;
	}
...
```

This *README* consits of several paragraphs: **Download / Install**, **Usage**, **Info**, **Contribution**.
  
### Download / Install
This library is open-source and free to use, therefore is licensed under GNU GENERAL PUBLIC LICENSE v3 license also included in this project under the name of **LICENSE**.  

You can use this library by cloning it into your project like:

```
$ cd myCoolProject
$ mkdir vendor/ && cd vendor/ && git clone git@github.com:dn5/phpgex.git
```
  
### Usage

Using the **phpgex** is lovable experince. The example bellow offer you a simple introduction on how to use **phpgex**. You may aswell check out `tests` directory which show an example of validation process. The full API documentation is available in the official GitHub wiki page for this project located [here](https://github.com/dn5/phpgex/wiki/API-documentation).

Preferably, depening on which framework you use, you may aswell define type and object through dependency injection (pseudo bellow):

```xml
<service name="mycoolproject" class="Yourcompany\Project\MyCoolProject">
	<argument name="phpgex" type="PhpgexExecutor" />
</service>
```

In case that the **phpgex** should be reusable, you can pass it through the construct.
```php
<?php

namespace Yourcompany\Project;

use SomeLibrary;
use Request;
use Stackrecord\External\Library\Phpgex\PhpgexExecutor;

private $phpgex;

class MyCoolProject {

	function __construct(PhpgexExecutor $phpgex)
	{
		$this->phpgex = $phpgex;
	}

	public function postRegistrationAction(Request $request)
	{
		if (!$this->phpgex->isEmail($request->data('email')))
		{
			throw new Exception('Invalid email address!', ...);
		}

		if (!$this->phpgex->isCreditCardNumber($request->data('ccno')))
		{
			throw new Exception('Invalid credit card number!', ...);
		}

		...
	}

}
```

### Info
This library is new and just rolled out. The patterns might have bugs and affect your product or software arhitecture. I'm not responsible for any action that have been made while using this library. If you are interested in joining the project, please follow contribution guide.

Current **phpgex API** offers these callable methods available in [API documentation](https://github.com/dn5/phpgex/wiki/API-documentation).

### Contribution

* Email pattern taken from [EmailRegex](http://emailregex.com)
* URL pattern taken from [Mathias Bynens](https://mathiasbynens.be/demo/url-regex)

*This library is build with the help of [Debuggex](https://www.debuggex.com).*
