<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todos\TodoList;

class MainController extends Controller
{
    /**
     * メソッドにはブロックコメントを付ける癖をつけよう
     * Todoリストの一覧を表示
     *
     * @return \Illuminate\View\View
     */
    public function todo()
    {
        // 変数名はキャメルケースで書く（単語の区切りは大文字）
        $todoLists = TodoList::all();

        // statusの配列を作成するとbladeでの表示が楽になる
        $statuses = [
            1 => "未着手",
            2 => "進行中",
            3 => "完了",
        ];
        
        return view("todo.index")
        ->with([
            "todoLists" => $todoLists,
            "statuses" => $statuses,
        ]);

        // 固定値の管理方法について（プログラミング設計の段階で結構重要な要素）
        // statusをここでしか使用しないなら配列で十分だが、
        // もし他の場所でも使用するなら、status用テーブルを作成する, configに定義するなどして、再利用性を高めると良い
        // おすすめはPHP8.1以降で登場したenum
        // https://qiita.com/satoko28/items/858ce484767b95825a99
    }

    public function store(Request $request)
    {
        
        TodoList::create([
            "title" => $request -> input("title"),
            "status_id" => $request -> input("status_id"),
            "detail" => $request -> input("detail")
        ]);

        return redirect()
            ->route("todo")
            ->with("success", "Todo item created successfully!");
    }
}
