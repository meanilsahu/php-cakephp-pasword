<?php


echo " Create cakephp Passwor". ''."<br>";

$defaultConfig = [
					'hashType' => PASSWORD_DEFAULT,
					'hashOptions' => []
					];
					
				$PasswordHash=password_hash('Anilsahu@#world', $defaultConfig['hashType'] ,$defaultConfig['hashOptions']);
				echo $PasswordHash;


?>
