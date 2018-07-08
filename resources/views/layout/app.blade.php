<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TaskList</title>
    </head>
    
    <body>
        <p> {{ link_to_route('tasks.index', 'タスク一覧')  }}</p>
        @yield('content')
    </body>
</html>