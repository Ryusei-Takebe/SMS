<!-- タスク追加のページを作りたい -->

@extends('layouts.app')

@section('content')

{!! Form::open(['route' => 'tasks.store']) !!}
    <div class="form-group">
        タイトル{!! Form::textarea('title', old('title'), ['class' => 'form-control', 'rows' => '1']) !!}<br>
        日付{!! Form::date('date', old('date'), ['class' => 'form-control',]) !!}<br>
        開始時刻{!! Form::time('task_start', old('task_start'), ['class' => 'form-control']) !!}<br>
        終了時刻{!! Form::time('task_end', old('task_end'), ['class' => 'form-control']) !!}<br>
        内容{!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '2']) !!}<br>
        {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
    </div>
{!! Form::close() !!}

@endsection