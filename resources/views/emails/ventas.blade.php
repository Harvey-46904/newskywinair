<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
   <b>!Hola¡ llego un mensaje desde el area de Ventas</b>
   <p>He recibido la siguiente informacion</p>
   <b>Nombre:</b><p>{{$data["Nombre"]}}</p>
   <b>Email:</b><p>{{$data["Correo"]}}</p>
   <b>Telefono:</b><p>{{$data["Telefono"]}}</p>
   <b>Anotacion:</b><p>{{$data["Anotacion"]}}</p>
   <b>origen:</b><p>{{$data["origen"]}}</p>
   <b>destino:</b><p>{{$data["Destino"]}}</p>
   <b>Fechas:</b><p>{{$data["dates"]}}</p>
</body>
</html>