<!-- 認証後はマイページ(index.blade)に飛びたい -->
<!-- 認証前は登録ログインサービス概要のページ -->

@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div class="row">
            <div class="col-sm-4">
                
            </div>
            <div class="col-sm-8">
                {{-- マイページ --}}
                @include('tasks.index')
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