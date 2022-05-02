<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login PRODISIC</title>
    <style type="text/css">
		
        form {
          margin: 0 auto;
          width: 400px;
          padding: 40px;
          border: 1px solid #CCC;
          border-radius: 10px;
          background-color: darkslateblue;
          color: lightgray;
          font-size: 24px;
          box-shadow: 10px 10px 5px black;
          text-align: center;
        }
    input{
        font-family: Arial;
        font-size: 20px;
    }
    button{
        font-family: Arial;
        font-size: 20px;
        font-weight: bold;
        color: darkslategray;
        padding: 20px;
        border: 2px solid black;
        border-radius: 10px;
        background-color: darkgray;
    }
    legend{
        font-size: 30px;
        font-family: Arial, Helvetica, sans-serif;
    }
    
        </style>
</head>
<body>
    
<div>
    <img src="images/Logo-PRODISIC.png" width="200px">
    
    <form action="#" method="post" >
        <img src="images/login.png" width="200px">
		<legend><strong>LOGIN</strong></legend>
		<p><input type="text" name="usuario" placeholder="Ingrese su nombre" size="30"></p>
		<p><input type="password" name="contrasena" size="30" placeholder="Ingrese su contraseña"></p>
		<p>
            <input type="submit" value="Continuar">CONTINUAR</input>
    	</p>
</div>
</body>
</html>