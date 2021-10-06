<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <style>
        </style>
    </head>
    <body>
    <?php  
    $url = $_SERVER['REQUEST_URI'];    
    $changed = str_replace("/", " ", $url);
    echo $changed;  
  ?>   
  
    </body>
</html>
