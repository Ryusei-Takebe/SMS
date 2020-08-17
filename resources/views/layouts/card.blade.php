<!-- ifでログイン時はGravatarと名前とメールを表示する -->
<!-- layouts.appにincludeする -->
@if (Auth::check())
        <div class="row">
            <aside class="offset-sm-2 col-sm-3">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{ Auth::user()->name }}</h4>
                    </div>
                    <div class="card-body">
                        {{-- 認証済みユーザのメールアドレスをもとにGravatarを取得して表示 --}}
                        <img class="rounded img-fluid" src="{{ Gravatar::get(Auth::user()->email, ['size' => 50]) }}" alt="">
                    </div>
                </div>
            </aside>
            <div class="col-sm-7  mt-5">
                <ul style="liststyle: none;">
                    <li>名前：{{ Auth::user()->name }}</li>
                    <li>メール：{{ Auth::user()->email }}</li>
                </ul>
            </div>
        </div>
@else
        <br>
@endif