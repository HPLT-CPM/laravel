<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <h1>Создание продукта</h1>
    
    <form action="{{ route('reports.store') }}" method="POST">
        @csrf
        
        <label>Номер автомобиля</label>
        <input type="text" name="car_number" required>
        
        <label>Описание заявки</label>
        <textarea name="description" required></textarea>
        
        <button type="submit">Создать</button>
    </form>
</div>
</body>
</html>