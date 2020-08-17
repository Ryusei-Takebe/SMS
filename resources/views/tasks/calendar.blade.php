<!-- カレンダーページを作りたい -->
@extends('layouts.app')

@section('content')

<!-- タスク追加ページへのリンク -->
        {{-- 投稿フォーム --}}
            <div class="text-right">
                 <button>{!! link_to_route('tasks.create', 'タスク追加', [], ['class' => 'btn btn-lg btn-primary']) !!}</button>
            </div>

<!-- カレンダーを表示 -->
<!-- 日付に下にtasks.taskを表示するボタン -->
<!-- 日付の下に詳細ページへのリンク(マウスオーバーで見えるようにしたい) -->
    <div class="text-center">
    <table class="table table-bordered table-hover">
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
                <td class="cellSaturday"><p>1</p><p><a href="{{ route('tasks.calendar') }}">kwsk</a></p></td>
            </tr>
            <tr>
                <td class="cellSunday">2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>7</td>
                <td class="cellSaturday">8</td>
            </tr>
            <tr>
                <td class="cellSunday">9</td>
                <td>10</td>
                <td class="cellHoliday">11</td>
                <td>12</td>
                <td>13</td>
                <td>14</td>
                <td class="cellSaturday">15</td>
            </tr>
            <tr>
                <td class="cellToday">16</td>
                <td>17</td>
                <td>18</td>
                <td>19</td>
                <td>20</td>
                <td>21</td>
                <td class="cellSaturday">22</td>
            </tr>
            <tr>
                <td class="cellSunday">23</td>
                <td>24</td>
                <td>25</td>
                <td>26</td>
                <td>27</td>
                <td>28</td>
                <td class="cellSaturday">29</td>
            </tr>
            <tr>
                <td class="cellSunday">30</td>
                <td>31</td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td class="cellSaturday"> </td>
            </tr>
        </tbody>
    </table>
    </div>
    
<!-- 指定した日付の予定を表示 -->


@endsection