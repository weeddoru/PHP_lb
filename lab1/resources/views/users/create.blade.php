<!DOCTYPE html>
<html>
<head>
    <title>Створення користувача</title>
</head>
<body>
    <h1>Додати нового користувача</h1>

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

    <form action="{{ route('users.store') }}" method="POST">
        @csrf <div>
            <label for="name">Ім'я:</label><br>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required>
        </div>
        <br>

        <div>
            <label for="email">Email:</label><br>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required>
        </div>
        <br>

        <div>
            <label for="password">Пароль:</label><br>
            <input type="password" name="password" id="password" required>
        </div>
        <br>

        <button type="submit">Зберегти користувача</button>
    </form>
</body>
</html>