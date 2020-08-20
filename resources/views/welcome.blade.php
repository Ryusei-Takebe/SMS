<!-- 認証後はマイページ(index.blade)に飛びたい -->
<!-- 認証前は登録ログインサービス概要のページ -->

@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <p></p>
        <div>
                {{-- マイページ --}}
                @include('tasks.index')
            
        </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Sheduling Management Service</h1>
            </div>
            <!-- bootstrapでレイアウトを工夫する -->
            <div class="row">
                <div class="col-sm-6 text-right">
                    {{-- ユーザ登録ページへのリンク --}}
                <button>{!! link_to_route('signup.get', '会員登録', [], ['class' => 'btn btn-lg btn-primary']) !!}</button>
                </div>
                
                <div class="col-sm-6">
                    {{-- ログインページへのリンク --}}
                <button>{!! link_to_route('login', 'ログイン', [], ['class' => 'btn btn-lg btn-secondary']) !!}</botton>
                </div>
            </div>
            
            <br>
            <div class="text-center">
                <!-- サービスの概要説明記入部分 -->
                <p>本サービスは簡易的なタスク管理を行うアプリケーションを提供しています。</p>
                
                <hr>
                <p>本サービスの特徴</p>
                    <ul style=list-style:none;>
                        <li>カレンダーを用いて日付ごとのタスク管理を行っている</li>
                        <li>タスクの概要を一目で管理できる表示　　　　　　　　</li>
                        <li>タスクの追加も簡単！　　　　　　　　　　　　　　　</li>
                    </ul>
                <hr>
                <div class="row">
                    <div class="col-sm-8 text-right">
                        <p>本サービスの利用対象者はずばり　　　　</p>
                        ”<mark><em>手帳に予定は記入するが、見返すことが出来ない人</em></mark>”
                    </div>
                    <div class="col-sm-4">
                        <img src="https://2.bp.blogspot.com/-Hp_LhwYmWsI/VEEToljnaZI/AAAAAAAAoi4/lf1TcerHsPc/s800/techou.png"
                          width="100" height="100" alt="閉じたままの手帳" style=float:left;>
                    </div>
                </div>
                
                <hr>
                <p>なんといっても、そういった方は手帳を常に傍に置いているわけではない。</p>
                <p>しかし、PCやスマートフォン、タブレット端末はどうであろうか？</p>
                
                <p>手帳に比べ、携帯率が高く
                タスクを登録し、確認することが容易になるでしょう。</p>
                
                <p>まずは是非お試しを！</p>
            </div>
            <br>
        
            <!-- bootstrapでレイアウトを工夫する -->
            <div class="row">
                <div class="col-sm-6 text-right">
                    {{-- ユーザ登録ページへのリンク --}}
                <button>{!! link_to_route('signup.get', '会員登録', [], ['class' => 'btn btn-lg btn-primary']) !!}</button>
                </div>
                
                <div class="col-sm-6">
                    {{-- ログインページへのリンク --}}
                <button>{!! link_to_route('login', 'ログイン', [], ['class' => 'btn btn-lg btn-secondary']) !!}</botton>
                </div>
            </div>
        </div>
    @endif
@endsection