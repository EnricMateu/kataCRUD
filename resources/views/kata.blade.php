<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
<table> <th> Lista de katas</th>
<tr>
    <th>Nombre de kata</th>
    <th>Descripción</th>
    <th>Usuario GitHub</th>
    <th>Repositorio GitHub</th>
</tr>
<?php
    foreach ($kataList as $value) {
?>
<tr>
        <td><a href="/kata/<?php echo $value->id ?>/edit"> <?php echo $value->name ?> </a> </td>
        <td><?php echo $value->description ?></td>
        <td><?php echo $value->username ?></td>
        <td><?php echo $value->repository ?></td>

</tr>
    
<?php
    }
?>
 </table>  
</body>
</html>