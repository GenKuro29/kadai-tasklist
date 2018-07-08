@extends('layout.app')

@section('content')

    <h1>id: {{ $task->id }}のメッセージ編集ページ</h1>
    
    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method'=> 'put']) !!}
    
        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}<br>
        
        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::select('status',[
            'open' => 'open',
            'ongoing' => 'ongoing',
            'completed' => 'completed',
            'invalid' => 'invalid']
        ) !!}<br>
        
        {!! Form::submit('更新') !!}
        
    {!! Form::close() !!}

@endsection