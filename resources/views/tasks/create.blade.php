@extends('layout.app')

@section('content')

    <h1>タスクの新規登録ページ</h1>
    
    {!! Form::model($task, ['route' => 'tasks.store']) !!}
    
        {!! Form::Label('content', 'タスク:') !!}
        {!! Form::text('content') !!}
        {!! Form::submit('作成') !!}
        
        
    
    {!! Form::close() !!}

@endsection