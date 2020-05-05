<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$to      = 'dieos2@gmail.com';
$subject = 'Teste';
$message = 'Olá';
$headers = 'From: dieos2@gmail.com.com' . "\r\n" .
   
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?> 