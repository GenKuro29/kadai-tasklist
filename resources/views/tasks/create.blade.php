@extends('layouts.app')

@section('content')

    
    <h1>タスクの新規登録ページ</h1>
     <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
            {!! Form::model($task, ['route' => 'tasks.store']) !!}
                
                <div class="form-group">
                    {!! Form::Label('content', 'タスク:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}<br>
                </div>
                    
                <div class="form-group">
                    {!! Form::Label('status', 'ステータス:') !!}
                    {!! Form::select('status', [
                        'open' => 'open',
                        'ongoing' => 'ongoing',
                        'completed' => 'completed',
                        'invalid' => 'invalid'],
                        'open',
                        ['class' => 'form-control']
                        ) !!}<br>
                </div>
                {!! Form::submit('作成', ['class' => 'btn btn-primary'])!!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection