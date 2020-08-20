<!-- 1日分の予定を表示したい -->
<!-- indexとcalendarにincludeで使う用 -->

@if (count($tasksDay) > 0)
    <ul class="list-unstyled">
        @foreach ($tasksDay as $task)
            <li class="media mb-3">
                {{-- 投稿の所有者のメールアドレスをもとにGravatarを取得して表示 --}}
                <img class="mr-2 rounded" src="{{ Gravatar::get($task->user->email, ['size' => 50]) }}" alt="">
                <div class="media-body">
                    
                            {{-- 投稿内容 --}}
                            <p class="mb-0">{!! nl2br(e($task->date)) !!} {!! nl2br(e($task->task_start)) !!}-{!! nl2br(e($task->task_end)) !!}</p>
                            <p class="mb-0">{!! nl2br(e($task->title)) !!}</p>
                </div>
            </li>
        @endforeach
    </ul>
    {{-- ページネーションのリンク --}}
    {{ $tasksDay->links() }}
@endif
