<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery-loader.css') }}" rel="stylesheet">
    <link href="{{ asset('css/datatable.css') }}" rel="stylesheet">
    @yield('head')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top" style="margin-bottom: 5px;">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                   

                    <!-- Branding Image -->
                    <a class="navbar-brand" >
                        <img style="margin-top: -22px; max-height: 65px;" title="TheRealPbx" src="https://www.therealpbx.co.uk/wp-content/uploads/2017/03/logo-1.png">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                    
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li> 
                                        <a>Home</a>
                                    </li>
                                   
                                    <li> 
                                        <a>XDRs</a>
                                    </li>
                                    <li> 
                                        <a >Settings</a>
                                    </li>
                        
                                                                    
                                </ul>
                            </li>
                        
                    </ul>
                </div>
            </div>            
        </nav>
        <div class="container">
           
<div class="alert-danger" style="padding: 5px; margin-bottom: 5px; text-align: center;">Please note that for your account security as well as the security of The Real PBX Limited, your new debit card/credit card must be verified before it can be used to make payment. This card must be on your name.</div>

        </div>
        @yield('content')
    </div>

    <!-- Scripts -->
    @yield('js_init')
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{asset('js/jquery-loader.js')}}"></script>    
    @yield('js')
    <script src="{{asset('js/scripts.js')}}"></script>


</body>
</html>