<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

use Carbon\Carbon;

class TasksController extends Controller
{
    //tasksを取得して表示したい
    public function index()
    {
        $data = [];
        if (\Auth::check()) { // 認証済みの場合
            // 認証済みユーザを取得
            $user = \Auth::user();
            // ユーザの投稿の一覧を日時の降順で取得
            $tasksDay = $user->tasks()->whereDate('date', '=', Carbon::today())->orderBy('task_start', 'asc')->paginate(10);
            //Carbonで週初めと週終わりを取得する
            $tasksWeek = $user->tasks()->whereDate('date', '>=', new Carbon('2020-08-16'))->whereDate('date', '<=', new Carbon('2020-08-22'))->orderBy('date', 'asc')->paginate(10);
            
        } else {
            $user = null;
            $tasksDay = null;
            $tasksWeek = null;
        }

        // welocmeビューでそれらを表示
        return view('welcome', compact('user', 'tasksDay', 'tasksWeek'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     //getでtasks/createにアクセスされた場合の「新規登録画面表示処理」
    public function create()
    {
        $task = new Task;

        // タスク作成ビューを表示
        return view('tasks.create', [
            'task' => $task,
        ]);
    }
    
    //タスク追加に必要な情報を書きたい
    public function store(Request $request)
    {
        // バリデーション
        $request->validate([
            'title' => 'required|max:255',
            'date' => 'required',
            'task_start' => 'required|date_format:H:i|',
            'task_end' => 'required|date_format:H:i|after:task_start',
            'content' => 'required|max:255',
        ]);

        // 認証済みユーザ（閲覧者）の投稿として作成（リクエストされた値をもとに作成）
        $request->user()->tasks()->create([
            'title' => $request->title,
            'date' => $request->date,
            'task_start' => $request->task_start,
            'task_end' => $request->task_end,
            'content' => $request->content,
        ]);

        // 前のURLへリダイレクトさせる
        return redirect('/show');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     //getでtasks/(任意のid)にアクセスされた場合の「取得表示処理」
    public function show(Request $request)
    {
        $data = [];
        if (\Auth::check()) { // 認証済みの場合
            // 認証済みユーザを取得
            $user = \Auth::user();
            // ユーザの投稿を日時で取得
            $getParam = $request->query();
            if(isset($getParam['date'])){
                $tasks = $user->tasks()->whereDate('date', '=', $getParam['date'])->orderBy('task_start', 'asc')->paginate(10);
            } else {
                //Carbonで週初めと週終わりを取得する
                $tasks = $user->tasks()->whereDate('date', '>=', new Carbon('2020-08-16'))->whereDate('date', '<=', new Carbon('2020-08-22'))->orderBy('date', 'asc')->paginate(10);
            }
            
            
        } 

        // showビューでそれらを表示
        return view('tasks.show', compact('user', 'tasks'));
    }
    
    public function destroy($id)
    {
        // idの値で投稿を検索して取得
        $task = \App\Task::findOrFail($id);

        // 認証済みユーザ（閲覧者）がその投稿の所有者である場合は、投稿を削除
        if (\Auth::id() === $task->user_id) {
            $task->delete();
        }

        // 前のURLへリダイレクトさせる
        return back();
    }
    
    
    public function calendar()
    {
        $data = [];
        if (\Auth::check()) { // 認証済みの場合
            // 認証済みユーザを取得
            $user = \Auth::user();
            // ユーザの投稿の一覧を日時の降順で取得
            $tasks = $user->tasks()->orderBy('id', 'desc')->paginate(25);

            $tasksDay = $user->tasks()->whereDate('date', '=', Carbon::today())->orderBy('task_start', 'asc')->paginate(10);
            
            //Carbonで週初めと週終わりを取得する
            $tasksWeek = $user->tasks()->whereDate('date', '>=', new Carbon('2020-08-16'))->whereDate('date', '<=', new Carbon('2020-08-22'))->orderBy('date', 'asc')->paginate(10);
            
            
        }

        // czlendarビューでそれらを表示
        return view('tasks.calendar', compact('user', 'tasksDay', 'tasksWeek'));
    }
}