<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coders Free</title>
</head>
<body>
    <h1>Aqui se mostrara el LISTADO de POSTS</h1>

    <!-- IF en blade LVL -->
        @if(true)
            <p>La condicion es verdadera</p>
        @else
            <p>La condicion es falsa</p>
        @endif

    <!-- UNLESS en blade LVL -->
        @unless(false)
            <p>La condicion es falsa</p>
        @endunless

    <!-- ISSET en blade LVL -->
        @isset($prueba)
            <p>La variable {{$prueba}} existe y tiene valor asignado</p>
        @endisset

    <!-- EMPTY en blade LVL -->
        @empty($prueba)
            <p>No hay posts disponibles</p>
        @endempty
        

     <script>
        //let posts = @json($posts);
        //console.log(posts);
    </script>
</body>
</html>