<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
</head>
<body>



<form action="{{url('/cal')}}" method="get">

    Nome:               <input type="text" name="nome" id="nome" required> <br>
    Data de nascimento: <input type="text" name="data" id="data" required> <br>
    Peso(kg):           <input type="text" name="peso" id="peso" required> <br>
    Altura(M):          <input type="text" name="altura" id="altura" required> <br><br><br>

    <input type="submit" value="Confirmar" name="enviar" id="enviar">

</form>
    
</body>
</html>