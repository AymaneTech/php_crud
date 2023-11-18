<?php

$sensitiveData = "aymane";
$salt = bin2hex(random_bytes(16)); // GENERATE random salt
$pepper = "ASsecretPepperString";

echo "<br> {$salt}";

$dataToHash = $sensitiveData . $salt . $pepper;

$hash = hash("sha256", $dataToHash);

echo "<br> {$hash}";


/* to a hash some sensitive data manually we need 3 things :
=> the data need to hash
=> salt that we can generate by bin2hex function that takes another function as a parameter random_bytes() that take a how much byte you need
=> pepper is the key
*/