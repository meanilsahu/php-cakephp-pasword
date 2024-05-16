<?php

$defaultConfig = [
					'hashType' => PASSWORD_DEFAULT,
					'hashOptions' => []
					];
					
				$PasswordHash=password_hash('vishwas@#world', $defaultConfig['hashType'] ,$defaultConfig['hashOptions']);
				echo $PasswordHash;


?>
