<?php
$token = "272680010:AAFdKC9UO-TafKuC2_nN85jI4_CZStL4JFo";
$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$token .'/getme'));
print_r($userbot->result->username);