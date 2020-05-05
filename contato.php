<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 
  $to      = 'sb.laseresaude@gmail.com';
$subject = 'Contato Site';
$message = $_POST['nome']." - ". $_POST['mensagem'];
$headers = 'From: '.$_POST['email'] . "\r\n" .
   
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

?> 
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script>
    $(function(){
        alert("Sua mensagem foi enviada com sucesso!");
        
        setTimeout(function(){ window.location.href = 'http://sblaseresaude.com.br/'; }, 3000);
    })
    </script>