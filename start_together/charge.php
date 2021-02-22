<?php

require_once dirname(__FILE__).'/omise-php/lib/Omise.php';
define('OMISE_API_VERSION', '2015-11-17');
// define('OMISE_PUBLIC_KEY', 'PUBLIC_KEY');
// define('OMISE_SECRET_KEY', 'SECRET_KEY');
define('OMISE_PUBLIC_KEY', 'pkey_test_5mxfwdyztyqm17dzf9q');
define('OMISE_SECRET_KEY', 'skey_test_5mxfwdz04lzuy07xcta');

$charge = OmiseCharge::create(array(
  'amount' => $_POST["btnMoney"]*100,
  'currency' => 'thb',
  'card' => $_POST["omiseToken"]
));

echo($charge['status']);

print($charge['amount']);
print('<pre>');
print_r($charge);
print('</pre>');

?>