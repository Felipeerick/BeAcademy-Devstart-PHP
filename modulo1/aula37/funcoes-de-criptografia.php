<?php

/* antigamente era usado esse tipo de codificação */
/*base64 */
$senha = '123456';
echo base64_encode($senha).PHP_EOL;

$ab = 'MTIzNDU2';
echo base64_decode($ab).PHP_EOL;

/*md5*/
echo md5($senha);

/*retorna uma função hash*/


/*A criptografia atualmente (30/05/2022) mais poderosa é a ARGON2I*/ 

echo password_hash( $senha, PASSWORD_ARGON2I);
?>