<!-- タスク詳細ページ -->

@extends('layouts.app')

@section('content')

    <!-- dropdownで日付選択 -->
    
    <!-- 選択した日の予定(details)をincludeで表示 -->
    <div class="row">
        <aside class="col-sm-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $user->name }}</h3>
                </div>
                <div class="card-body">
                    {{-- ユーザのメールアドレスをもとにGravatarを取得して表示 --}}
                    <img class="rounded img-fluid" src="{{ Gravatar::get($user->email, ['size' => 500]) }}" alt="">
                </div>
            </div>
        </aside>
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