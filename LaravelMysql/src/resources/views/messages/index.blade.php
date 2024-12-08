<!DOCTYPE html>
<html>
<head>
    <title>Mensajes</title>
</head>
<body>
    <h1>Lista de Mensajes</h1>
    <ul>
        @foreach ($messages as $message)
            <li>{{ $message->content }} ({{ $message->created_at }})</li>
        @endforeach
    </ul>

    <h2>Enviar un Mensaje</h2>
    <form method="POST" action="{{ route('messages.store') }}">
        @csrf
        <textarea name="content" placeholder="Escribe tu mensaje"></textarea><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
