<!DOCTYPE html>
<html>
<head>
    <title>Welcome Email</title>
</head>
 
<body>
<h2>El correo enviado fue</h2>
<br/>
<h3>Pedir informacion contactos</h3>

<h3>Nombre</h3>
{{ $contact->nombre }}
<h3>Telefono</h3>
{{ $contact->telefono }}
<h3>Nombre</h3>
{{ $contact->email }}
<h3>Mensaje</h3>
{{ $contact->mensaje }}
<h3>Fecha de envio</h3>
{{ $contact->created_at }}

</body>
 
</html>
 