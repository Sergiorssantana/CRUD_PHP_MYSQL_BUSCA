<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'sistema';
    
    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    // Esta linha de comando para fazer se conexão está funcionando//

   //    if($conexao->connect_errno)
   //  {
   //       echo "Erro";
   //   }
   //  else
   //  {
   //     echo "Conexão efetuada com sucesso";
   //  }

?>