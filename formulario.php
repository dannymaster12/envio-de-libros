<?php require_once 'conexion.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Sign Up Form</title>
                <link rel="stylesheet" href="css/normalize.css">
                <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
             
            </head>
    <link rel="stylesheet" href="form.css">
</head>
<body>

      <div class="col-md-6 col-md-offset-6">
                <div style="padding-left:-25%;margin-left:27.8%;">
                
        
            
            <body> 
              
                      <form action="envio_formulario.php" method="post" class="form">
                      <div>
                            <?php if (isset($_SESSION['message'])) { ?>
                                <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
                                <strong><?= $_SESSION['message'] ?></strong>
                                
                                </div>

                          <?php session_unset(); } ?>
                        </div>
                        
                        
                        <h1>formulario de libros</h1>
  
                        <fieldset>
                            
                                <legend><span class="number">1</span>Datos personales</legend>
                                <label for="name">Nombre y apellido:</label>
                                <input type="text" id="name" name="user_name">
                
                                <label for="integer">Documento:</label>
                                <input type="text" id="Documento" name="user_Documento">
        
                                <button type="submit"name="submit">Resgistrar</button>
                              </fieldset>

                      </form>
                            
                        
                      
</body>
</html>