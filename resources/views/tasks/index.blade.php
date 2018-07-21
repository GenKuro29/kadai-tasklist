@extends('layouts.app')

@section('content')

    <h1>{{ $user->name }}のタスク一覧</h1>
    
    <table class="table">
        <thead>
            <th>id</th>
            <th>Status</th>
            <th>Task</th>
            <th>user name</th>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                    <td>{{ $task->status }}</td>
                    <td>{{ $task->content }}</td>
                    <td>{{ Auth::user()->name }}</td>
                </tr>
        
            @endforeach
        </tbody>
    </table>
    <!--coundのメソッド対応後にif文対応する-->
    <!--@if (count($tasks) > 0)
        <table class="table">
            <thead>
                <th>id</th>
                <th>Status</th>
                <th>Task</th>
                <th>user ID</th>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                        <td>{{ $task->status }}</td>
                        <td>{{ $task->content }}</td>
                        <td>{{ $task->user_id }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
     @endif-->
     {!! $tasks->render() !!}
     
     {!! link_to_route('tasks.create', '新規タスクの作成', null, ['class' => 'btn btn-primary']) !!}
     
@endsection