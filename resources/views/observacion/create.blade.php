<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Crear Observación</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

</head>
<body>

<form method = "post" action="{{route('observacion.store')}}">
    <div class="form-group">
        @csrf
        <label for="descripcion">Observación</label>
        <input type="text" class="form-control" name="descripcion" required/>
    </div>  
    <button type="submit" class="btn btn-primary">Crear</button>

 </form>

</body>
</html>
