<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="ico" href="icono1.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="fuentes.css">
    <title>Página Principal</title>
    
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-secondary">
            <div class="container-fluid">
                <a href="">
                    <img src="icono1.ico" alt="" width="50px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" href="#">Iniciar Sesión</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" href="#">Registrarse</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div>
        <div class="container text-center">
            <div class="row align-items-start">
                <div class="col">
                    <br>
                    <div class="card text-bg-secondary">
                        <br>
                        <h1>REGISTRO DE DATOS</h1>
                        <div class="card-body text-bg-light">
                            <br>
                            <div class="row align-items-start">
                                <div class="col">
                                    <div>
                                        <label for="nombre">Nombre:
                                            <input type="text" id="nombre" class="form-control form-control-lg" placeholder="Nombre">
                                        </label>
                                    </div>
                                    <br>
                                    <div>
                                        <label for="apellido">Apellido:
                                            <input type="text" id="apellido" class="form-control form-control-lg" placeholder="Apellido">
                                        </label>
                                    </div>
                                    <br>
                                    <div>
                                        <label for="numcel">Número de Celular:
                                            <input type="text" id="numcel" class="form-control form-control-lg" placeholder="Número de Celular">
                                        </label>
                                    </div>
                                    <br>
                                    <div>
                                        <label for="tipodoc">Tipo Doc.:
                                            <select name="" id="tipodoc" change="" class="form-control form-control-lg">
                                                <option value="Cédula De Ciudadanía" id="01">C.C</option>
                                                <option value="Tarjeta De Identidad" id="02">T.I</option>
                                                <option value="Cédula De Extranjería" id="03">C.E</option>
                                            </select>
                                        </label>
                                        <label for="numdoc">Num. Doc.:
                                            <input type="text" id="numdoc" class="form-control form-control-lg" placeholder="Número de Documento">
                                        </label>
                                    </div>
                                    <br>
                                    <div>
                                        <label for="fechanac">Fecha de Nacimiento:
                                            <input type="date" id="fechanac" class="form-control form-control-lg">
                                        </label>
                                    </div>
                                    <br>
                                    <div>
                                        <label for="ciudadres">Ciudad de Residencia:
                                            <input type="text" id="ciudadres" class="form-control form-control-lg" placeholder="Ciudad de Residencia">
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div>
                                        <label for="deporte">Deporte:
                                            <select name="" id="deporte" change="" class="form-control form-control-lg">
                                                <option value="futbol" id="1">Fútbol</option>
                                                <option value="basquetbol" id="2">Basquetbol</option>
                                                <option value="voleibol" id="3">Voleibol</option>
                                                <option value="tenis" id="4">Tenis</option>
                                                <option value="rugby" id="5">Rugby</option>
                                                <option value="tenismesa" id="6">Tenis de Mesa</option>
                                            </select>
                                        </label>
                                    </div>
                                    <br>
                                    <div>
                                        <label for="gen">Género:
                                            <select name="" id="gen" change="" class="form-control form-control-lg">
                                                <option value="hombre" id="001">Hombre</option>
                                                <option value="mujer" id="002">Mujer</option>
                                            </select>
                                        </label>
                                    </div>
                                    <br>
                                    <div>
                                        <label for="sede">Sede:
                                            <select name="" id="sede" change="" class="form-control form-control-lg">
                                                <option value="manizales" id="1000">Manizales</option>
                                                <option value="palmira" id="2000">Palmira</option>
                                                <option value="tumaco" id="3000">Tumaco</option>
                                                <option value="bogota" id="4000">Bogotá</option>
                                                <option value="amazonia" id="5000">Amazonía</option>
                                                <option value="medellin" id="6000">Medellín</option>
                                                <option value="orinoquia" id="7000">Orinoquía</option>
                                                <option value="lapaz" id="8000">De La Paz</option>
                                                <option value="caribe" id="9000">Caribe</option>
                                            </select>
                                        </label>
                                    </div>
                                    <br>
                                    <div>
                                        <label for="email">Ingrese su Correo:
                                            <input type="email" name="" id="email" class="form-control form-control-lg" placeholder="Correo Electrónico">
                                        </label>
                                    </div>
                                    <br>
                                    <div>
                                        <label for="passw">Ingrese su Contraseña:
                                            <input type="password" name="" id="passw" class="form-control form-control-lg" placeholder="**********">
                                        </label>
                                    </div>
                                    <br>
                                    <div>
                                        <label for="cpassw">Ingrese su Contraseña:
                                            <input type="cpassword" name="" id="cpassw" class="form-control form-control-lg" placeholder="**********">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="align-items-start">
                                <button class="btn btn-success">Registrarse</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
    <footer class="bg-secondary">
        <div class="fuentesmain">
            <h5>Emails de los Integrantes</h5>
            <label for="">Nayeli Giraldo -->
                <a href="">esgiraldov@unal.edu.co</a>
            </label>
            <br>
            <label for="">Santiago Fernández -->
                <a href="">sfernandezga@unal.edu.co</a>
            </label>
            <br>
            <label for="">Valeria Galviz -->
                <a href="">vgalviz@unal.edu.co</a>
            </label>
        </div>
    </footer>
</body>
</html>