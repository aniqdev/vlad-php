<h1><?php

$string = 'qwerty';

pa($string);

$string = md5($string);

pa($string);

$string = '123';

pa($string);

$string = md5($string);

pa($string);

$string = md5('202cb962ac59075b964b07152d234b70');

pa($string);

echo '<hr>';

$hash = password_hash('123', PASSWORD_DEFAULT);

pa($hash);

$is_password_correct = password_verify('123', $hash);

var_dump($is_password_correct);


?>
</h1>