// constants.php  -> contains API user name, password and signature.
// CallerService.php -> PayPal Services, which is used to call PayPal services.
// confirmation.php -> a form with minimum fields required to make payment process and it will return payment success or failure.
// PayPal_entry.php -> send the user the data to PayPal. It acts as an adapter between PayPal and user form.

<?php
   define('API_USERNAME', 'YOUR USER NAME HERE');
   define('API_PASSWORD', 'YOUR PASSWORD HERE');
   define('API_SIGNATURE', 'YOUR API SIGNATURE HERE');
   define('API_ENDPOINT', 'https://api-3t.paypal.com/nvp');
   define('USE_PROXY',FALSE);
   define('PROXY_HOST', '127.0.0.1');
   define('PROXY_PORT', '808');
   define('PAYPAL_URL', 'https://www.PayPal.com/webscr&cmd=_express-checkout&token=');
   define('VERSION', '53.0');
?>

// need to be tested 'later'
