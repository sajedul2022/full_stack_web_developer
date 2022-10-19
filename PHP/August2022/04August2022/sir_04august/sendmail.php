<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//Load composer's autoloader
require 'vendor/autoload.php';
The process of sending an email starts with instatioation of the PHPMailer class:
$mail = new PHPMailer(true);

?>