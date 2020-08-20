<!-- カレンダーページを作りたい -->
@extends('layouts.app')

@section('content')

<!-- タスク追加ページへのリンク -->
            <div class="text-right">
                 <button>{!! link_to_route('tasks.show', 'タスク一覧', [], ['class' => 'btn btn-lg btn-secondary']) !!}</button>
            </div>
        {{-- 投稿フォーム --}}
            <div class="text-right">
                 <button>{!! link_to_route('tasks.create', 'タスク追加', [], ['class' => 'btn btn-lg btn-primary']) !!}</button>
            </div>

<!-- カレンダーを表示 -->
<!-- 日付に下にtasks.taskを表示するボタン -->
<!-- 日付の下に詳細ページへのリンク(マウスオーバーで見えるようにしたい) -->
    <div class="text-center">
    <table class="table table-bordered">
        <tbody>
            <tr>
                <th colspan="7" class="cellTableHead">2020年8月</th>
            </tr>
            <tr>
                <th class="cellSunday">日</th>
                <th>月</th>
                <th>火</th>
                <th>水</th>
                <th>木</th>
                <th>金</th>
                <th class="cellSaturday">土</th>
            </tr>
            <tr>
                <td class="cellSunday"> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td class="cellSaturday"><!-- <p><a href="{{ route('tasks.calendar') }}"> 1</a></p>
                    <p><a href="{{ route('tasks.show') }}" style="color: lightsteelblue;"><i class="fas fa-calendar-day"></i></a></p> -->1</td>
            </tr>
            <tr>
                <td class="cellSunday"><!-- <p>2</p>
                    <p><a href="{{ route('tasks.show') }}" style="color: lightsteelblue;"><i class="fas fa-calendar-day"></i></a></p> -->2</td>
                <td><!-- <p>3</p>
                    <p><a href="{{ route('tasks.show') }}" style="color: lightsteelblue;"><i class="fas fa-calendar-day"></i></a></p> -->3</td>
                <td><!-- <p>4</p>
                    <p><a href="{{ route('tasks.show') }}" style="color: lightsteelblue;"><i class="fas fa-calendar-day"></i></a></p> -->4</td>
                <td><!-- <p>5</p>
                    <p><a href="{{ route('tasks.show') }}" style="color: lightsteelblue;"><i class="fas fa-calendar-day"></i></a></p> -->5</td>
                <td><!-- <p>6</p>
                    <p><a href="{{ route('tasks.show') }}" style="color: lightsteelblue;"><i class="fas fa-calendar-day"></i></a></p> -->6</td>
                <td><!-- <p>7</p>
                    <p><a href="{{ route('tasks.show') }}" style="color: lightsteelblue;"><i class="fas fa-calendar-day"></i></a></p> -->7</td>
                <td class="cellSaturday"><!-- <p>8</p>
                    <p><a href="{{ route('tasks.show') }}" style="color: lightsteelblue;"><i class="fas fa-calendar-day"></i></a></p> -->8</td>
            </tr>
            <tr>
                <td class="cellSunday"><!-- <p>9</p>
                    <p><a href="{{ route('tasks.show') }}" style="color: lightsteelblue;"><i class="fas fa-calendar-day"></i></a></p> -->9</td>
                <td><!-- <p>10</p>
                    <p><a href="{{ route('tasks.show') }}" style="color: lightsteelblue;"><i class="fas fa-calendar-day"></i></a></p> -->10</td>
                <td class="cellHoliday"><!-- <p>11</p>
                    <p><a href="{{ route('tasks.show') }}" style="color: lightsteelblue;"><i class="fas fa-calendar-day"></i></a></p> -->11</td>
                <td><!-- <p>12</p>
                    <p><a href="{{ route('tasks.show') }}" style="color: lightsteelblue;"><i class="fas fa-calendar-day"></i></a></p> -->12</td>
                <td><!-- <p>13</p>
                    <p><a href="{{ route('tasks.show') }}" style="color: lightsteelblue;"><i class="fas fa-calendar-day"></i></a></p> -->13</td>
                <td><!-- <p>14</p>
                    <p><a href="{{ route('tasks.show') }}" style="color: lightsteelblue;"><i class="fas fa-calendar-day"></i></a></p> -->14</td>
                <td class="cellSaturday"><!-- <p>15</p>
                    <p><a href="{{ route('tasks.show') }}" style="color: lightsteelblue;"><i class="fas fa-calendar-day"></i></a></p> -->15</td>
            </tr>
            <tr>
                <td class="cellToday"><!-- <p>16</p>
                    <p><a href="{{ route('tasks.show') }}" style="color: lightsteelblue;"><i class="fas fa-calendar-day"></i></a></p> -->16</td>
                <td><!-- <p>17</p>
                    <p><a href="{{ route('tasks.show') }}" style="color: lightsteelblue;"><i class="fas fa-calendar-day"></i></a></p> -->17</td>
                <td><!-- <p>18</p>
                    <p><a href="{{ route('tasks.show') }}" style="color: lightsteelblue;"><i class="fas fa-calendar-day"></i></a></p> -->18</td>
                <td><!-- <p>19</p>
                    <p><a href="{{ route('tasks.show') }}" style="color: lightsteelblue;"><i class="fas fa-calendar-day"></i></a></p> -->19</td>
                <td><!-- <p>20</p>
                    <p><a href="{{ route('tasks.show') }}" style="color: lightsteelblue;"><i class="fas fa-calendar-day"></i></a></p> -->20</td>
                <td><!-- <p>21</p>
                    <p><a href="{{ route('tasks.show') }}" style="color: lightsteelblue;"><i class="fas fa-calendar-day"></i></a></p> -->21</td>
                <td class="cellSaturday"><!-- <p>22</p>
                    <p><a href="{{ route('tasks.show') }}" style="color: lightsteelblue;"><i class="fas fa-calendar-day"></i></a></p> -->22</td>
            </tr>
            <tr>
                <td class="cellSunday"><!-- <p>23</p>
                    <p><a href="{{ route('tasks.show') }}" style="color: lightsteelblue;"><i class="fas fa-calendar-day"></i></a></p> -->23</td>
                <td><!-- <p>24</p>
                    <p><a href="{{ route('tasks.show') }}" style="color: lightsteelblue;"><i class="fas fa-calendar-day"></i></a></p> -->24</td>
                <td><!-- <p>25</p>
                    <p><a href="{{ route('tasks.show') }}" style="color: lightsteelblue;"><i class="fas fa-calendar-day"></i></a></p> -->25</td>
                <td><!-- <p>26</p>
                    <p><a href="{{ route('tasks.show') }}" style="color: lightsteelblue;"><i class="fas fa-calendar-day"></i></a></p> -->26</td>
                <td><!-- <p>27</p>
                    <p><a href="{{ route('tasks.show') }}" style="color: lightsteelblue;"><i class="fas fa-calendar-day"></i></a></p> -->27</td>
                <td><!-- <p>28</p>
                    <p><a href="{{ route('tasks.show') }}" style="color: lightsteelblue;"><i class="fas fa-calendar-day"></i></a></p> -->28</td>
                <td class="cellSaturday"><!-- <p>29</p>
                    <p><a href="{{ route('tasks.show') }}" style="color: lightsteelblue;"><i class="fas fa-calendar-day"></i></a></p> -->29</td>
            </tr>
            <tr>
                <td class="cellSunday"><!-- <p>30</p>
                    <p><a href="{{ route('tasks.show') }}" style="color: lightsteelblue;"><i class="fas fa-calendar-day"></i></a></p> -->30</td>
                <td><!-- <p>31</p>
                    <p><a href="{{ route('tasks.show') }}" style="color: lightsteelblue;"><i class="fas fa-calendar-day"></i></a></p> -->31</td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td class="cellSaturday"> </td>
            </tr>
        </tbody>
    </table>
    </div>
    
<!-- 指定した日付の予定を表示したい -->
<!-- tasks.taskをinclude -->
<!-- まだ実装は難しいので本日の予定を表示しておく -->
        <div class="row">
            <div class="col-sm-4">
                本日の予定
            </div>
            <div class-="col-sm-8">
                {{-- 投稿一覧 --}}
            @include('tasks.task')
            </div>
        </div>
            

@endsection