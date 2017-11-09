<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="cache-control" content="private, max-age=0, no-cache">
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="expires" content="0">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
        <link href="{{asset('css/bootstrap-theme.css')}}" rel="stylesheet">
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="/vendor/bootstrap-combobox/css/bootstrap-combobox.css">
        <link rel="stylesheet" type="text/css" href="code/fonts/font_roboto/roboto.css"/>
        <link rel="stylesheet" type="text/css" href="code/dhtmlxcalendar.css"/>
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.css">
        <script src="code/dhtmlxcalendar.js"></script>
        <script src="{{asset('js/jquery-3.1.1.js')}}"></script>
        <script src="{{asset('js/bootstrap.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        
<script src="/vendor/bootstrap-combobox/js/bootstrap-combobox.js"></script>
        <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.js"></script>

        <title>Psicofisiología</title>

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
                    border-color: black;
                    background-color: rgba(0,0,0,0.5);
                    margin-top: 50px;
                    margin-bottom: 50px;
                    color: black;
                    padding-bottom: 20px;
                }

                .input{
                    color: black;
                }


                .container {
                margin-top: 0px;
                }
                .header-unam{
                margin-top: 0px;
                padding-bottom: 0px;
                margin-bottom: -15px;
                color: #ffffff;
                }

                .header-unam img{
                float: left;
                }
        </style>
        
    </head>
    
    <div class="header-unam">
      <img src="{{asset('img/unam.png')}}" width="90px" alt="">
      <img src="{{asset('img/neuro.png')}}" width="100px" alt="">
      <img src="{{asset('img/inb.png')}}" width="115px" alt="">
      
    
      <h2><span><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Unidad de Investigación en Neurodesarrollo</strong></span></h2>
      <h3><span><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"Dr. Augusto Fernández Guardiola"</strong></span></h3>
      
      
      </div>

    <body>
    
                
                
                
                <br>
                 <br>
                  <br>
                   <br>
                    <br>
                     <br>
                      <br>
                       <br>
                       
                <div>
                @yield('content')
                
                </div>
                <div class="col-md-10"></div>
                <a class="btn btn-danger" href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                
                
        
    
    </body>
        <script>
$(document).ready(function(){
    $('#myTable').DataTable();
});


jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });
});

</script>

</html>