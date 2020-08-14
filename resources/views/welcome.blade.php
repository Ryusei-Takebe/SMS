@extends('layouts.app')

@section('content')
    @if (Auth::check())
        {{ Auth::user()->name }}
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