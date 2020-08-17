<!-- タスク詳細ページ -->

@extends('layouts.app')

@section('content')

    <!-- タスク追加ページへのリンク -->
        {{-- 投稿フォーム --}}
            <div class="text-right">
                 <button>{!! link_to_route('tasks.create', 'タスク追加', [], ['class' => 'btn btn-lg btn-primary']) !!}</button>
            </div>

    <!-- dropdownで日付選択 -->
    
    <!-- 選択した日の予定(details)をincludeで表示 -->
    <div class="row">
        <div class="col-sm-4">
            
        </div>
        <div class="col-sm-8">
            @if (Auth::id() == $user->id)
                {{-- 投稿フォーム --}}
                <button>{!! link_to_route('tasks.create', 'タスク追加', [], ['class' => 'btn btn-lg btn-primary']) !!}</button>
            @endif
            {{-- 投稿一覧 --}}
            @include('tasks.tasks')
        </div>
    </div>
@endsection