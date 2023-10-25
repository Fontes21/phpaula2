<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <label >Informe o valor da conta</label>
        <input type="text" name="valor">
        <input type="submit" value="Verificar">
    </form>

    <?php
        if (isset($_GET["valor"]))
        {
            if ($_GET["valor"] >= 150.00)
            {
                echo "Você está gastando muito.";
            }
            else
            {
                echo "Seu gasto foi normal.";
            }
        }
    ?>
    
</body>
</html>