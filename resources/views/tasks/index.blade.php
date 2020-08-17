<!-- マイページ -->
<!-- welcomeにincludeで使う用 -->


<!-- 今日の予定を表示 -->
    <!-- tasks.taskをinclude -->

<!-- タスク追加ページへのリンク -->
        {{-- 投稿フォーム --}}
            <div class="text-right">
                 <button>{!! link_to_route('tasks.create', 'タスク追加', [], ['class' => 'btn btn-lg btn-primary']) !!}</button>
            </div>
<!-- カレンダーページへのリンク -->
        <div>
            <a href="{{ route('tasks.calendar') }}"><img src="https://1.bp.blogspot.com/-Z7U0BwwAQuU/Xdtt5kMHvlI/AAAAAAABWNo/7quuKrklTikmPjEm9zoX6tnw9nYeLe8MgCNcBGAsYHQ/s1600/template_calender_e.jpg"　
                width="600" height="500" alt="カレンダーへのリンク"></a>
        </div>

<!-- 今週の予定を表示 -->
    <!-- tasks.tasksをinclude -->