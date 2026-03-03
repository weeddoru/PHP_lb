<h1>Список користувачів</h1>
<a href="{{ route('users.create') }}">Додати нового</a>
<table border="1">
    @foreach($users as $user)
    <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
            <a href="{{ route('users.show', $user->id) }}">Перегляд</a></br>
            <a href="{{ route('users.edit', $user->id) }}">Редагувати</a>
            <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Ви впевнені?')">
                @csrf @method('DELETE')
                <button type="submit">Видалити</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
{{ $users->links() }} 

@if ($errors->any()) <div>@foreach ($errors->all() as $error) <p>{{ $error }}</p> @endforeach</div>
@endif