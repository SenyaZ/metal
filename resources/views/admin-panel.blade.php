<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
</head>
<body>
<style>
    body{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    form{
        display: flex;
        flex-direction: column;
        width: 50%;
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
</style>

<h1>Добавить конструкцию</h1>
<form action="{{route('add-product')}}" method="post" enctype="multipart/form-data">
    @csrf
    <label>Фотографии</label>
    <input   type="file"  name="images[]" multiple>

    <label for="price">Категория</label>
    <select name="kategory">
        <option value="reshetka">Решетки</option>
        <option value="naves">Навесы</option>
        <option value="balcon">Балконы</option>
        <option value="zabor">Заборы</option>
        <option value="lestnica">Лестницы</option>
        <option value="dveri">Двери</option>
        <option value="vorota">Ворота</option>
    </select>

    <label for="name">Название</label>
    <input type="text" name="name">

    <label for="price">Цена</label>
    <input type="number" name="price">

    <label for="description">Описание</label>
    <textarea name="description" cols="10" rows="10"></textarea>

    <br>
    <input type="submit" class="login-but">



</form>

</body>
</html>
