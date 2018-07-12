<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TaskList</title>
    </head>
    
    <body>
        @include('commons.error_messages')
        <p> {{ link_to_route('tasks.index', 'タスク一覧')  }}</p>
        @yield('content')
    </body>
</html>