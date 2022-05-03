<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!--font size-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <!--tailwind
    <script src="https://cdn.tailwindcss.com"></script>-->
    

</head>
<body style="font-family: 'Montserrat', sans-serif; padding: 20px; font-weight: semi-bold;">
    
    @yield('imgLogo')
    @yield('title_page')
    @yield('text1')
    @yield('title_page2')

</body>
</html>
