<html>
    <head>
        <meta charset="UTF-8">
        <title>Prueba</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <br>
            <h1>Test form</h1>

            <form>
                <div class="form-row">
                    <div class="col-12">
                        <label for="nombre">Nombre:*</label>
                        <input type="text" class="form-control" id="nombre"  placeholder="Ingrese su nombre">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-6">
                        <label for="tipoDocumento"  id="tipoDocumento">Tipo documento</label>
                        <select class="form-control">
                            <option value="C.C Cédula de ciudadanía">C.C Cédula de ciudadanía</option>
                            <option value="C.E Cédula de extranjería">C.E Cédula de extranjería</option>
                            <option value="Nit">Nit</option>

                        </select>
                    </div>
                    <div class="col-5">
                        <label for="numeroDocumento">Número documento:*</label>
                        <input type="text" class="form-control" id="numeroDocumento">
                    </div>
                    <div class="col-1">
                        <label for="div">Div:</label>
                        <input type="text" class="form-control" id="div">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-6">
                        <label for="fechaNacimiento" min="2018-12-07" max="2018-12-10" id="fechaNacimiento">Fecha Nacimiento:*</label>
                        <input type="date" name="fechaNacimieno"class="form-control" id="fechaNacimiento">
                    </div>
                    <div class="col-6">
                        <label for="departamento">Departamento:*</label>
                        <input type="text" class="form-control" id="departamento">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-6">
                        <label for="ciudad">Ciudad:*</label>
                        <input type="text" class="form-control" id="ciudad">
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col-4">
                        <button type="button" > Guardar </button>
                    </div>    
                </div>    
            </form>




            <?php
//        include "modelo.php";
//        $db = new conection();
//        echo $db->conectar();
//        
            ?>
        </div>
    </body>
</html>
