<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link href="{{asset('css/form.css')}}" rel="stylesheet">
</head>
<body>
    <div id="form">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif    
        <h3>Log in</h3>
        <form method="post" action="">
            @csrf
            <input name="login" placeholder="login"/>
            <input name="password" type="password" placeholder="password"/>
            <input type="submit"/>
        </form>
    </div>
</body>
</html>