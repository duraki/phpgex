### phpgex
This is a pure and beautiful PHP library implementation for common regex patterns. It's designed with ease of operation, and user-friendly experience. This library will allow you to quickly match some of the contributed patterns. The code is inspired by Laravel framework and the [Validator](https://laravel.com/docs/5.3/validation) API that Laravel offers. In quite similar approach, this library will be updated reguralry with new, fixed and improved patterns. The **Contribution** guidelines are several paragraphs bellow.
  
**phpgex** in it's simplicity allows you validating input like bellow. The full API documentation is on wiki page and official page.

```
<?php
private $phpgex;
...

public function getProductsAction(Request $request)
{
	if ( $phpgex->validateEmail($request->data('email') )
	{
		return Response::200;
	}
}
```

This *README* consits of several paragraphs: **Download**, **Installation**, **Usage**, **Info**, **Contribution**.
  
  

