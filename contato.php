<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 
  $to      = $_POST['email'];
$subject = 'Contato Site';
$message = $_POST['nome']." - ". $_POST['mensagem'];
$headers = 'From: dieos2@gmail.com.com' . "\r\n" .
   
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

?> 

<script>
    $(function(){
        alert("Sua mensagem foi enviada com sucesso!");
        
        setTimeout(function(){ window.location.href = 'http://sblaseresaude.com.br/'; }, 5000);
    })
    </script>