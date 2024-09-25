<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <style>
            body, html {
                margin: 0;
                padding: 0;
                font-family: Figtree, sans-serif;
                transition: background-color 0.3s, color 0.3s;
            }
            .container {
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                text-align: center;
            }
            .button {
                display: inline-block;
                padding: 10px 20px;
                margin: 5px;
                border-radius: 5px;
                background-color: #007BFF;
                color: white;
                text-decoration: none;
               
            }
            .button:hover {
                background-color: #0056b3;
            }
            .theme-switch {
                position: fixed;
                top: 10px;
                right: 10px;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div>
                <a href="{{ route('login') }}" class="button">Log in</a>
                <a href="{{ route('register') }}" class="button">Register</a>
            </div>
        </div>
        <div class="theme-switch" onclick="toggleTheme()">Switch Theme</div>
        
    </body>
</html>
