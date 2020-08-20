<!-- タスク詳細ページ -->

@extends('layouts.app')

@section('content')

    <!-- タスク追加ページへのリンク -->
        {{-- 投稿フォーム --}}
            <div class="text-right">
                 <button>{!! link_to_route('tasks.create', 'タスク追加', [], ['class' => 'btn btn-lg btn-primary']) !!}</button>
            </div>

    <!-- dropdownで日付選択 -->
    
    <div class="row">
        <div class="col-sm-4">
            {!! Form::open(['route' => 'tasks.show', 'method' => 'GET']) !!}
                {!! Form::date('date', old('date'), ['class' => 'form-control',]) !!}
                {!! Form::submit('日付を選択') !!}
            {!! Form::close() !!}
        </div>
    <!-- 選択した日の予定(details)をincludeで表示 -->
    
        <div class="col-sm-8">
            @if (Auth::id() == $user->id)
                
            @endif
            {{-- 投稿一覧 --}}
            @include('tasks.details')
        </div>
    </div>
@endsection