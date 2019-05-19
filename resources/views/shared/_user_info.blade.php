<a href="{{ route('users.show', $user->id) }}">
    <img style="border-radius: 100px;width: 80px;"  src="{{ $user->gravatar('140') }}" alt="{{ $user->name }}" class="gravatar"/>
</a>
<h1>{{ $user->name }}</h1>