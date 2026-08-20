<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">

</head>


<body>
<div class="container">
    <h1>    Cadastro    </h1>
    <form action="receber.php" method="POST">

        <input type="text" name="nome" placeholder="Nome" required>

            <input type="email" name="email" placeholder="Email" required>

                <input type="number" placeholder="Idade" name="idade" required>
                    <textarea name="mensagem" placeholder="Mensagem"></textarea>
                        <input name="telefone" placeholder="Telefone" requied>
                        <input type="DDN" placeholder="DDN" name="DDN" required>
                        <label> Cursos:</label>
                        <select name="curso">
                        <option value="ds">Desenvolvimento De Sistemas</optison>
                        <option value="ADM">Administração</optison>
                        <option value="agro">agropecuaria</optison>
</select>
                        <button type="submit">
                            Enviar
                                </button>
        </form>
    </div>


</body>
</html>