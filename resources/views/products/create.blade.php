<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создание продукта</title>
</head>
<body>
    <div class="container">
        <form action="{{route(('products.store'))}}" method="POST">
            @csrf
            <input name ="title" type="text" placeholder="Введите название" required><br>
            <textarea name="description" id="" placeholder="Ввведите описание" required></textarea><br>
            <input name="price" type="number" placeholder="Ввведите цену" required><br>
            <input type="submit" value="Создать товар">
        </form>
    </div>
</body>
</html>