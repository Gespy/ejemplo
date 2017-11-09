<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
        <link href="{{asset('css/bootstrap-theme.css')}}" rel="stylesheet">
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="code/fonts/font_roboto/roboto.css"/>
        <link rel="stylesheet" type="text/css" href="code/dhtmlxcalendar.css"/>
        <script src="code/dhtmlxcalendar.js"></script>
        <script src="{{asset('js/jquery-3.1.1.js')}}"></script>
        <script src="{{asset('js/bootstrap.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>

        <title>Laravel</title>

        <!-- Fonts -->
        

        <!-- Styles -->
        <style type="text/css"> 

                #calendar,
                #calendar2,
                #calendar3 {
                    border: 1px solid #dfdfdf;
                    font-family: Roboto, Arial, Helvetica;
                    font-size: 14px;
                    color: #404040;
                }

                .container{
                    width: 100%;
                    height: 100%;
                    
                }

                body{
                    background: #bfd8d2;
                }

                .datos{
                    border-color: white;
                    background-color: rgba(0,0,0,0.5);
                    margin-top: 50px;
                    margin-bottom: 50px;
                    color: white;
                    padding-bottom: 20px;
                }

                .input{
                    color: black;
                }
        </style>
        
    </head>
    <body>
    
                
                
                
                <div>
                @yield('content')
                </div>
                <br>
                <br>
                
        
    
    </body>    
</html>
