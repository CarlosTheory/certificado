<html>
    <?php //include "conn.php" ?>
<head>
    <title>Foro Inteligencia Artificial UNERG 2017</title>
    <meta charset="utf-8">
    <style>
        canvas {
        @font-face {
            font-family:ARIALMT; 
            src: url('ARIALMT.ttf');
            } 
        }
    </style>
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <script src="FileSaver.js/FileSaver.js"></script>
    <script src="FileSaver.js/FileSaver.min.js"></script>
    <script src="jquery/jquery.js"></script>
    

</head>
<body>
<div class="container">
    <script>
        $(document).on('ready',function(){       
        $('#jum').click(function(){
        var url = "conn.php";
        $.ajax({                        
           type: "POST",                 
           url: url,                     
           data: $("#myForm").serialize(), 
           success: function(data)             
           {
             $('#resp').html(data);               
           }
        });
        });
        }); 
            
    </script>
    <form id="myForm" class="form-signin" method="post">
        <center><h2 class="form-signin-heading">Ingrese sus datos<br><h4>para generar el Certificado</h4></h2><br></center>
        <label>Nombre: </label><input type="text" name="nombre" placeholder="Ej. Carlos" id="nombre" class="form-control"><br>
        <label>Apellido: </label><input type="text" name="apellido" placeholder="Ej. Aponte" id="apellido" class="form-control"><br>
        <label>Cedula: </label><input type="text" name="cedula" placeholder="Ej: 0.000.000" id="cedula" class="form-control"><br>
        <label>Correo: </label><input type="email" name="correo" placeholder="Ej: alguien@alguncorreo.com" id="correo" class="form-control" required><br>
        <label>Numero de Contacto: </label><input type="text" name="numero" placeholder="Ej: 04241111111" id="numero" class="form-control" required><br>
        <input type="button" onclick="validate()" name="submit" value="Generar y Descargar Certificado" id="jum" class="btn btn-lg btn-primary btn-block">
    </form>
    <center><p>Este Certificado solo es <b>Válido</b> con su respectiva firma y sello.</p><br>
    <p>Foro de Inteligencia Artificial. <b>UNERG</b> 2017.</p>
    </center>
    <canvas id="myCanvas" width="1200" height="900"></canvas>
    <div id=resp></div>
    <img src="certia.png" id="certImg" hidden/>
        <script> 
        function validate() {
        var nombre = document.getElementById("myForm").elements[0].value;
        var apellido = document.getElementById("myForm").elements[1].value;
        var cedula = document.getElementById("myForm").elements[2].value;
            
        if (nombre == "" && cedula == "" && apellido == "") {
         alert("Por favor, rellene los campos del formulario.");
         return false;
        } else {
        
        var c=document.getElementById("myCanvas");
        var ct=c.getContext("2d");
        var img=document.getElementById("certImg");
        ct.drawImage(img,0,0);      
            
        //var ctx = canvas.getContext("2d");
        ct.font = "68px ARIALMT";
        var x = 600;
        var y = 464;
        ct.textAlign = "center";
        ct.fillText(nombre + " " + apellido, x, y);
        
            
        ct.font = "26px ARIALMT";
        var xced = 600;
        var yced = 538;
        ct.textAlign = "center";
        ct.fillText(cedula, xced, yced);
    
        c.toBlob(function(blob) {
        saveAs(blob, "Certificado"+nombre+apellido+cedula+".png");
        });
          
            
            }
        }     
    </script> 
</div>
</body>
</html>

