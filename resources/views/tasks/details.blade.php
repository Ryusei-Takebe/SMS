<!-- タスクの完全な予定を表示したい -->
<!-- showにincludeに使う用 -->

@if (count($tasks) > 0)
    <ul class="list-unstyled">
        @foreach ($tasks as $task)
            <li class="media mb-3">
                {{-- 投稿の所有者のメールアドレスをもとにGravatarを取得して表示 --}}
                <img class="mr-2 rounded" src="{{ Gravatar::get($task->user->email, ['size' => 50]) }}" alt="">
                <div class="media-body">
                    <div class="row">
                        <div class="col-sm-6">
                            {{-- 投稿内容 --}}
                            <p class="mb-0">{!! nl2br(e($task->date)) !!} {!! nl2br(e($task->task_start)) !!}-{!! nl2br(e($task->task_end)) !!}</p>
                            <p class="mb-0">{!! nl2br(e($task->title)) !!}</p>
                            <p class="mb-0">{!! nl2br(e($task->content)) !!}</p>
                        </div>
                        <div class="col-sm-6 mt-auto">
                            @if (Auth::id() == $task->user_id)
                                {{-- 投稿削除ボタンのフォーム --}}
                                {!! Form::open(['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                {!! Form::close() !!}
                            @endif
                        </div>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
    {{-- ページネーションのリンク --}}
    {{ $tasks->links() }}
@endif
