<!DOCTYPE html>
<html>
<head>
	<title>Insertar Datos</title>
	<style type="text/css">
        .imagenCabecera{
            float:right;
            padding-right:70px;
            width:200px;
            margin-top:0px;
        }
        .header{
			text-align: center;
			font-size: x-large;
			font-family: Tahoma;
			margin-bottom: 100px;
			color: gray;
		}
        .body{
			width: 450px;
            
            margin-left:20px;
		}
        .footer{
            bottom:0px;
            width:100%;
            margin-bottom:15px;
        }
	</style>
</head>
<body>
	<div class="header">
		@yield("header")	
        <img src="/images/logo_restaurante.jpg" class="imagenCabecera"/>
	</div>

	<div class="body">
		@yield("body")
	</div>
	<div class="footer">
		@yield("footer")
	</div>
</body>
</html>