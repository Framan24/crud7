<?php
include_once('leer.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>crud</title>
</head>

<body>
   <form action="">
 <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">nombre</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nombre">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">apellido</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="apellido">
    </div>
     <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">correo</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <input type="submit" value="crear">
   </form>
   
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                    <th scope="col">Handle</th>

                </tr>
            </thead>
            <tbody>
                <?php
                foreach($allData as $tarea) { 
                echo '<tr>';
                echo    '<th scope="row">';
                    echo $tarea['id'];
                  echo '</th>';
                echo    '<td>';
                   echo $tarea['tarea'];
                  echo'</td>';
                   echo '<td>';
                   echo $tarea['descripcion'];
                   echo'</td>';
                   echo '<td>@mdo</td>';
               echo '<td>'; 
               echo '<a href="editar.php?id='.$tarea['id'].'">';
               echo 'editar';
               echo '</a>';
               echo '<a href="borrar.php?id='.$tarea['id'].'">';
               echo '</a>';
               echo '</td>';
                }
                    ?>;
               
                
            </tbody>
        </table>
    </div>

</body>

</html>