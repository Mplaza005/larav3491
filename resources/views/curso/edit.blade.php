<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Actualizar curso</h1>

    <form action="{{route('curso.update',$curso)}}" method="POST" enctype="multipart/form-data">
    
    @csrf
    @method('put')
    <label>
        Nombre:
        <br>
        <input type="text" name="name" value="{{old('Name',$curso->name) }}">
    </label>
    <br>
    <label>
        descripcion:
        <br>
        <input type="text" name="descripcion" value="{{old('descripcion',$curso->descripcion)}}">
    </label>
    
    <br>
    
    <button type="submit">Enviar Formulario:</button>
    </form>
    
</body>
</html>