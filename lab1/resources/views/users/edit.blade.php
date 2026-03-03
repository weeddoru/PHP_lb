<!DOCTYPE html>
<html>
<head>
    <title>Редагування користувача</title>
</head>
<body>
    <h1>Редагувати користувача: {{ $user->name }}</h1>

    <a href="{{ route('users.index') }}">Повернутися до списку</a>
    <br><br>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT') <div>
            <label>Ім'я:</label><br>
            <input type="text" name="name" value="{{ old('name', $user->name) }}" required>
        </div>
        <br>

        <div>
            <label>Email:</label><br>
            <input type="email" name="email" value="{{ old('email', $user->email) }}" required>
        </div>
        <br>

        <div>
            <label>Новий пароль (залиште порожнім, якщо не хочете змінювати):</label><br>
            <input type="password" name="password">
        </div>
        <br>

        <button type="submit">Зберегти зміни</button>
    </form>
</body>
</html>