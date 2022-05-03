@extends('template')

@section('title', 'Inicio')

@section('imgLogo')
    <img width="150px" height="auto" style="display:block; margin: 0 auto;" src="publi.png" alt="Logo">
@endsection

@section('title_page')
    <h2 style="text-align: center">Documentación API (Prueba técnica)</h2>
@endsection
<br>

@section('text1')
    <p style="text-align: center">API con datos de prueba programada con el microframework de Lumen</p>
@endsection
<br><br>

@section('title_page2')
    <h2 >Recursos</h2>
    <table style="border: 1px solid gray; padding: 10px; border-radius: 10px;">
        <thead>
            
        </thead>
        <tbody>
            <tr>
               <td>Visualizar todos los datos:</td>
               <td><a href="" style="cursor:pointer;">http://localhost:8000/sugerencias</a></td>
            </tr>
            <tr>
                <td>Mostrar datos mediante por su ID:</td>
                <td><a href="" style="cursor:pointer;">http://localhost:8000/sugerencias/4</a></td>
             </tr>
            <tr>
                <td>Mostrar datos mediante el nombre de ciudad:</td>
                <td><a href="" style="cursor:pointer;">http://localhost:8000/sugerencias?q=roma</a></td>
             </tr>
             <tr>
                <td>Mostrar datos mediante la latitud:</td>
                <td><a href="" style="cursor:pointer;">http://localhost:8000/sugerencias?q=N415330</a></td>
             </tr>
             <tr>
                <td>Mostrar datos mediante la longitud:</td>
                <td><a href="" style="cursor:pointer;">localhost:8000/sugerencias?q=E123040</a></td>
             </tr>    
                      
             <tr>
                <td>Mostrar datos mediante el nombre de ciudad, longitud y latitud:</td>
                <td><a href="">http://localhost:8000/sugerencias?q=roma&N415330&E123040</a></td>
             </tr>
             
        </tbody>
    </table>
@endsection
