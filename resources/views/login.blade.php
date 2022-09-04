<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Металоконструкции</title>
</head>
<body>
<style>
    .log{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    form{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    h1{
        color: #fe5c01;
    }
    h1,h2,h3,h4,h5,h6,p,b,i,label{
        font-family: Circe;
    }
    .login-but{
        background: #fe5c01;
        border: none;
        color: white;
        padding: 15px;
        border-radius: 10px;
    }

    label{
        font-size: 20px;
    }


</style>
    <div class="log">
        <h1>Админ панель</h1>
        <form action="{{route('login')}}" method="post">
            @csrf
            <label for="login">Логин</label>
            <input name="login" type="text">
            <label for="password">Пароль</label>
            <input name="password" type="text">
            <br>
            <input class="login-but" type="submit" value="Войти">
        </form>
    </div>
</body>
</html>
