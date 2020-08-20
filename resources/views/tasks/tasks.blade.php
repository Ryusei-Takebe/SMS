<!-- 1週間分の予定を表示したい -->
<!-- index下の方にincludeで使う用 -->
@if (count($tasksWeek) > 0)
    <ul class="list-unstyled">
        @foreach ($tasksWeek as $task)
            <li class="media mb-3">
                {{-- 投稿の所有者のメールアドレスをもとにGravatarを取得して表示 --}}
                <img class="mr-2 rounded" src="{{ Gravatar::get($task->user->email, ['size' => 50]) }}" alt="">
                <div class="media-body">
                    <div class="row">
                        <div class="col-sm-10">
                            {{-- 投稿内容 --}}
                            <p class="mb-0">{!! nl2br(e($task->date)) !!} {!! nl2br(e($task->task_start)) !!}-{!! nl2br(e($task->task_end)) !!}</p>
                            <p class="mb-0">{!! nl2br(e($task->title)) !!}</p>
                        </div>
                        <div class="col-sm-2">
                            
                        </div>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
    {{-- ページネーションのリンク --}}
    {{ $tasksWeek->links() }}
@endif
