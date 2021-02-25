<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Informacion de contactenos</title>
</head>
<body>
    <h2>Solicitud información del Contacto </h2>    
    <ul>
        <li>Nombre: {{ $contactenos['name']}} </li>
        <li>Email: {{ $contactenos['email']}} </li>
        <li>celular: {{ $contactenos['celular']}} </li>
        <li>Mensaje: {{ $contactenos['description']}}  </li>
       
    </ul>
    
</body>
</html>