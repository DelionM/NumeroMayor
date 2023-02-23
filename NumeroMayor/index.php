<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&family=Trocchi&display=swap" rel="stylesheet">
    <style>
    
body{
    background-color: #1d3557;
    /* background-image: url(img/fAzul.jpg); */
    background-repeat: no-repeat;
}
table{
    text-align: center;
    width: 50%;
    margin: auto;
    
}

/*left izquierda*/

table, th, td{
    border: 1px solid rgb(10, 180, 210);
    border-collapse: collapse;
    padding: 5px;
}

caption{
    color: #e63946;
    font-family: 'Trocchi',serif;
    font-size: 45px;
    line-height: 70px;
    background-color: ;
    border-radius: 30px;
    text-align: center;
}

caption:hover{
    color: beige;
    background-color: #e63946;
}

th{
    color: #f1faee;
    background-color: #1d3557;
    font-size: 40px;
}

/*renglones pares*/
tr:nth-child(even){
    background-color: #f1faee;
}

/*renglones impares*/
tr:nth-child(odd){
    background-color: #a8dadc;
}
    </style>
    
    <title>Número mayor</title>
</head>
<body>
    <br>
    <table>
        <caption>Número mayor ✅</caption>
        <br>
        <!--
        <tr>
            colspan SIRVE PARA COMBINAR 2 COLUMNAS
            <th colspan="2">Nobre</th>
            <th>Email</th>
        </tr>
        <tr>
            <td>Giovanni</td>
            <td>Delion</td>
            rowapan SIRVE PARA COMBINAR 2 FILAS 
            <td rowspan="2">D3L10N@gmail.com</td>
        </tr>
        <tr>
            <td>Jair</td>
            <td>Pérez</td>
        </tr>
        -->

        <!--CONTINUO CON EL USO DE TABLAS NORMAL-->

    <?php
        $n1=33;
        $n2=8;
        $n3 = 1;
        $resultado = 0;

        if ($n1 > $n2 && $n1 > $n3) {
            $resultado = $n1;
        }

        if ($n2 > $n1 && $n2 > $n3) {
            $resultado = $n2;
        }

        if ($n3 > $n1 && $n3 > $n2) {
            $resultado = $n3;
        }
    ?>
        <tr>
            <th> <i> Variable </i></th>
            <th>Constante</th>
        </tr>

        <tr>
            <td> <?='A'?> </td>
            <td><?=  $n1 ?></td>
        </tr>

        <tr>
          <td><?= 'B' ?></td>
          <td><?= $n2 ?></td>
        </tr>

        <tr>
            <td> <?='C'?> </td>
            <td><?= $n3 ?></td>
        </tr>

        <tr>
            <td>El número mayor de los 3 es:</td>
            <td><?= $resultado ?></td>
            
        </tr>

    </table>
</body>
</html>