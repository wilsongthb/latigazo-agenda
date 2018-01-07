
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Detalle de contacto</title>

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
        <div class="container">
            
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h1 class="text-center">Contacto</h1>
                            <p><b>id:</b> {{$contacto->id}} </p>
                            <p><b>nombre:</b> {{$contacto->nombre}} </p>
                            <p><b>paterno:</b> {{$contacto->paterno}} </p>
                            <p><b>materno:</b> {{$contacto->materno}} </p>
                            <p><b>cargo:</b> {{$contacto->cargo}} </p>
                            <p><b>correo:</b> {{$contacto->correo}} </p>
                            <p><b>oficina:</b> {{$contacto->oficina}} </p>
                            <p><b>telefono:</b> {{$contacto->telefono}} </p>
                            <p><b>ip:</b> {{$contacto->ip}} </p>
                            <p><b>celular:</b> {{$contacto->celular}} </p>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
        

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
