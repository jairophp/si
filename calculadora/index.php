<?php
include "calculos.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Estatistica teste</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css" />
    <link rel="stylesheet" href="estilo.css"/>

</head>
<body>
<?php if ( isset( $_POST['consultar'] ) ): ?>
<div>

    <table>
        <tbody>
            <tr id="divcima">
                <td><?= ($populacao . " * " . $fixa1 . " * " . $confiab2) ?></td>
                <td>=</td>
                <td><?= $dividendo ?></td>
            </tr>
            <tr id="divbaixo">
                <td><?= ($fixa1 . " * " . $confiab2 . "²" . " + "  . $populacao2 . " * " . $erro1) ?></td>
                <td>=</td>
                <td><?= $divisor ?></td>
                <td class="result" rowspan="2">
                   <?=$result ?>
                </td>

            </tr>


        </tbody>
    </table>
</div>
<?php endif ?>
<form method="post" enctype="multipart/form-data">
 
<div class="form-group">
    <label>População</label>

    <input type="text" class="form-control" name="populacao" placeholder="ex: 10000">
  </div>
  <div class="form-group">
    <label">Confiabilidade</label>
    <input type="text" class="form-control" name="confiabilidade" placeholder="1 - 2.57 , 2 - 1.96 , 3 - 1.64">
  </div>  
 <div class="form-group">
    <label">Erro</label>
    <input type="text" class="form-control" name ="erro" placeholder="ex: 5">
  </div> 
  <button type="submit" name="consultar" class="btn btn-default">Calcular</button>

</form>



</body>
</html>