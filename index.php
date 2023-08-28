<?php
require_once("View/layouts/header.php");
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<div>
    <h1 class="text-center">Determinar si un numero es divisible entre otro</h1>
    <div class="text-center">
        <label>Dividendo:</label><br>
        <input type="text" id="dividendo"><br><br>
        <label >Divisor:</label><br>
        <input type="text" id="divisor"><br><br><br>
        <button id="calcular" class="btn btn-primary">Calcular</button>
    </div> <br><br><br>
    <p id="resultadoTotal"></p>
    <p id="resultadoResiduo"></p>
    <p id="resultadoDiv"></p>
    
    </div>

    <script>
        var dividendo = document.getElementById("dividendo");
        var divisor = document.getElementById("divisor");

        var boton = document.getElementById("calcular");
        var mostrar = document.getElementById("resultadoTotal");
        var mostrar2 = document.getElementById("resultadoResiduo");
        var mostrar3 = document.getElementById("resultadoDiv");

        boton.addEventListener("click", function() {
            var total = dividendo.value / divisor.value;
            var resultado = dividendo.value % divisor.value;
            mostrar.textContent = "";
            mostrar2.textContent = "";
            mostrar3.textContent = "";

            mostrar.textContent = mostrar.textContent + "Resultado = " + total + ".";

            mostrar2.textContent = mostrar2.textContent + "Residuo = " + resultado + ".";

            if (dividendo.value % divisor.value === 0) {
                mostrar3.textContent = mostrar3.textContent + "Mensaje: El número " + dividendo.value + " si es divisible entre el número " + divisor.value + ".";
            } else {
                mostrar3.textContent = mostrar3.textContent + "Mensaje: El número " + dividendo.value + " no es divisible entre el numero " + divisor.value + ".";
            }
        });

        

    </script>