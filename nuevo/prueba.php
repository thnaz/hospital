<?php 

$con = mysqli_connect('localhost', 'root', '','hospital') or die('Error en la conexion al servidor'); 
$doc_sql = "SELECT id_doctor, nombre FROM doctor ";
$ejecutar = mysqli_query($con, $doc_sql) or die(mysqli_error($con));

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.6.3.js"></script>

   

   

    <style>

        .conteiner{

            margin: 20%;

        }

    </style>

</head>

<body>

    <div class="conteiner">

        <form>

            

            <div class="form-row">

                <div class="form-group col-md-6">

                    <label for="inputAddress">Especialidad</label>

                    <select type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" required>

                        <option value="">Seleccione</option>

                        <option value="1">1</option>

                        <option value="2">2</option>

                        <option value="3">3</option>

                    </select>

                </div>

                <div class="form-group col-md-6">

                    <label for="inputAddress">Doctor</label>

                    <select type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" required>

                        <option value="">Seleccione</option>
                        <?php foreach( $ejecutar as $item_doc ) { ?>
                            <option value="<?php echo $item_doc['id_doctor'] ?>"> <?php echo $item_doc['nombre'] ?> </option>
                        <?php } ?>

                    </select>

                </div>

              </div>

           

           

            <div class="form-row">

              <div class="form-group col-md-6">

                <label for="inputCity">DNI</label>

                <input type="text" class="form-control" id="inputCity" maxlength="8" placeholder="DNI" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1'); ">

              </div>

              <!--<div class="form-group col-md-4">

                <label for="inputState">State</label>

                <select id="inputState" class="form-control">

                  <option selected>Choose...</option>

                  <option>...</option>

                </select>

              </div>-->

              <div class="form-check form-switch form-check-reverse">

                <input class="form-check-input" type="checkbox" id="obser">

                <label class="form-check-label" for="flexSwitchCheckReverse">Reverse switch checkbox input</label>

                <input type="text" class="form-control" id="ga" placeholder="Apellido" required>


 

              </div>

             

            </div>

            <div class="form-group">

             

            </div>

            <button type="submit" class="btn btn-primary" onclick="goCita();">generar cita</button>

          </form>

    </div>

   

</body>

<script>

    function limpiarFormulario() {
        document.getElementById("miForm").reset();
    }
</script>

</html>