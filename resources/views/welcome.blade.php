<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    
    
    
    <div class="container" style="color: lightcoral;">
        
        
        <div class="img-cover" style="
        content: '';
        background-color: rgba(96, 149, 218, 0.7);
        height: 650px;
        width: 100%;
        top:0px;
        right:0px;
        left:0px;
        position: absolute;
        "></div>
        <div class="card" style="margin-top: 60px;">
            <div class="card" style="padding-left: 45%">
                <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
                    @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                        <a href="{{ url('/projects/index') }}" class="text-sm text-gray-700 underline">Admin Dashboard</a>
                        @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>
                        
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                        @endauth
                    </div>
                    @endif
                    
                    
                    
                </div> 
                
                
            </div>
        </div>
        <div class="card" style="margin-top: 30px; height: 400px;">
            <div class="card-header ">
                <h1 style="text-align:center; color:rgb(159, 212, 230)">Welcome</h1>
            </div>
            <div class="card-body">
                <h3 style="text-align:center; color:rgb(117, 190, 214)">This Dashboard is designed for project managers to help them have a good contol of projects.</h3>
            </div>
            
        </div>
    </div>
    
    
</body>
</html>

