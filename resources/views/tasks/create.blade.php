@extends('layout.app')

@section('content')

    <h1>タスクの新規登録ページ</h1>
    
    {!! Form::model($task, ['route' => 'tasks.store']) !!}
    
        {!! Form::Label('content', 'タスク:') !!}
        {!! Form::text('content') !!}<br>
        
        {!! Form::Label('status', 'ステータス:') !!}

        
        {!! Form::select('status',[
            'open' => 'open',
            'ongoing' => 'ongoing',
            'completed' => 'completed',
            'invalid' => 'invalid']
        ) !!}<br>
        
        
        
        {!! Form::submit('作成') !!}
        
        
    
    {!! Form::close() !!}

@endsection