<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
      
        <?php
        $para ="clinicasantamariarp@hotmail.com"
		$nome = $_POST['nome'];
		$email = $_POST['email'];
    $tel = $_POST['tel'];
		$mensagem = $_POST['mensagem'];

        $corpo="<strong> Mensagem de Contato</strong><br><br>";
        $corpo ="<strong> Nome:  </strong> $nome";
        $corpo ="<br><strong> Nome:  </strong> $email";
        $corpo ="<br><strong> Nome:  </strong> $tel";
        $corpo ="<br><strong> Nome:  </strong> $mensagem";

        mail($para,$corpo);

        ?>
    </body>
</html>
