<!-- 認証後はマイページ(index.blade)に飛びたい -->
<!-- 認証前は登録ログインサービス概要のページ -->

@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div class="row">
            <aside class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ Auth::user()->name }}</h3>
                    </div>
                    <div class="card-body">
                        {{-- 認証済みユーザのメールアドレスをもとにGravatarを取得して表示 --}}
                        <img class="rounded img-fluid" src="{{ Gravatar::get(Auth::user()->email, ['size' => 500]) }}" alt="">
                    </div>
                </div>
            </aside>
            <div class="col-sm-8">
                {{-- 投稿フォーム --}}
                 <button>{!! link_to_route('tasks.create', 'タスク追加', [], ['class' => 'btn btn-lg btn-primary']) !!}</button>
                {{-- 投稿一覧 --}}
                @include('tasks.show')
            </div>
        </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Sheduling Management Service</h1>
            </div>
            <div>
                <!-- bootstrapでレイアウトを工夫する -->
                {{-- ユーザ登録ページへのリンク --}}
                <button>{!! link_to_route('signup.get', '会員登録', [], ['class' => 'btn btn-lg btn-primary']) !!}</button>
                {{-- ログインページへのリンク --}}
                <button>{!! link_to_route('login', 'ログイン', [], ['class' => 'btn btn-lg btn-secondary']) !!}</botton>
            </div>
        
            <div class="text-center">
                <!-- サービスの概要説明記入部分 -->
            </div>
        
            <div>
                <!-- bootstrapでレイアウトを工夫する -->    
                {{-- ユーザ登録ページへのリンク --}}
                <button>{!! link_to_route('signup.get', '会員登録', [], ['class' => 'btn btn-lg btn-primary']) !!}</button>
                {{-- ログインページへのリンク --}}
                <button>{!! link_to_route('login', 'ログイン', [], ['class' => 'btn btn-lg btn-secondary']) !!}</botton>
            </div>
        </div>
    @endif
@endsection