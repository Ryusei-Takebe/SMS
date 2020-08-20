<!-- マイページ -->
<!-- welcomeにincludeで使う用 -->


<!-- 今日の予定を表示 -->
    <!-- tasks.taskをinclude -->
    <div class="row">
        <div class="col-sm-6 mt-3 text-right">
            今日の予定
        </div>
        <div class="col-sm-6">
            {{-- 投稿一覧 --}}
            @include('tasks.task')
        </div>
    </div>
    

<!-- タスク追加ページへのリンク -->
        {{-- 投稿フォーム --}}
            <div class="text-right">
                 <button>{!! link_to_route('tasks.create', 'タスク追加', [], ['class' => 'btn btn-lg btn-primary']) !!}</button>
            </div>
<!-- カレンダーページへのリンク -->
        <div class="row">
            <div class="col-sm-2">
            </div>
            <div class="col-sm-4">
                <a href="{{ route('tasks.calendar') }}"><img src="https://1.bp.blogspot.com/-Z7U0BwwAQuU/Xdtt5kMHvlI/AAAAAAABWNo/7quuKrklTikmPjEm9zoX6tnw9nYeLe8MgCNcBGAsYHQ/s1600/template_calender_e.jpg"　
                    width="700" height="600" alt="カレンダーへのリンク"></a>
            </div>
            <div class="col-sm-6">
            </div>
        </div>

<!-- 今週の予定を表示 -->
    <!-- tasks.tasksをinclude -->
        <div class="row">
        <div class="col-sm-6 mt-3 text-right">
            今週の予定
        </div>
        <div class="col-sm-6">
            {{-- 投稿一覧 --}}
            @include('tasks.tasks')
        </div>
    </div>