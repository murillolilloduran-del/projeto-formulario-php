<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$idade = $_POST["idade"];
$mensagem = $_POST["mensagem"];
$telefone = $_POST["telefone"];
$DDN = $_POST["DDN"];
$curso = $_POST["curso"];

?>  

<!DOCTYPE html>
<html>
<body>

    <h1>Dados Recebidos</h1>

    <p><?php echo htmlspecialchars($nome); ?></p>
    <p><?php echo htmlspecialchars($email); ?></p>
    <p><?php echo htmlspecialchars($idade); ?></p>
    <p><?php echo nl2br(htmlspecialchars($mensagem)); ?></p>
    <p><?php echo nl2br(htmlspecialchars($telefone)); ?></p>
    <p><?php echo nl2br(htmlspecialchars($DDN)); ?></p>
    <p>Curso:<?php if($curso =="ds") {echo htmlspecialchars("Desenvolvimento De Sistema");}
        elseif($curso =="ADM"){echo htmlspecialchars("Administração");}
        elseif($curso == "agro"){echo htmlspecialchars ("agropecuaria");}  ?>  </p>
    
</body>
</html>