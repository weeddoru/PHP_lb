<!DOCTYPE html>
<html>
<head>
    <title>Перегляд користувача</title>
</head>
<body>
    <h1>Деталі користувача :</h1>

    <p><strong>Ім'я:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    
    <hr>
    <a href="{{ route('users.index') }}">Повернутися до списку</a> | 
    <a href="{{ route('users.edit', $user->id) }}">Редагувати</a>
</body>
</html>