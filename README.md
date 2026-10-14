# Blade Email Template
Minimal blade email template (verify email template in Laravel).

## Send email

```php
<?php

Route::get('/test/email', function () {
	$u = Subscriber::first();
	
	Mail::to('email@proton.me')->send(new PromotionEmail($u, config('app.url') . '/shop', PromotionEmail::products()));

	return new PromotionEmail($u, config('app.url') . '/shop', PromotionEmail::products());
	
	// Mail::to('email@proton.me')->send(new VerifySubscriberEmail($u));
	// return new VerifySubscriberEmail($u);
});
```

## Email

<img src="https://raw.githubusercontent.com/atomjoy/blade-email-template/refs/heads/main/blade-email-template.png" width="100%"/>
<img src="https://raw.githubusercontent.com/atomjoy/blade-email-template/refs/heads/main/blade-email-template-promotion.png" width="100%"/>
