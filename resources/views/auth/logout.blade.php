<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

    <form method ="post" action="{{ route('auth.logout') }}">
        @csrf
        

        <div class="col-sm-12">
            <button type="submit" class="btn btn-primary btn-block mb-4">Salir</button>
        </div>

    </form>
</body>
</html>