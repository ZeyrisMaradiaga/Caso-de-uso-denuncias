<?php
require_once('Persona.php');
require_once('Denuncia.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Suponiendo que se realicen las validación y  saneamientos.
    $denunciante = new Persona($_POST['nombreDenunciante'], $_POST['apellidoDenunciante'], /* otros parametros */);
    $denunciado = new Persona(/* parametros */);
    
    $denuncia = new Denuncia($denunciante, $denunciado, new DateTime(), /* otros parametros */);
    
    // Proceso de denuncia, guardar en la base de datos o archivo.
    echo "Denuncia registrada con éxito. Estado: " . $denuncia->getEstado();
}
?>
