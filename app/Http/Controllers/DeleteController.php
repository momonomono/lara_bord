<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todos\TodoList;

// MainControllerに統合したほうが良いと思います。
// 理由1.deleteのためだけにControllerを作成するのはもったいない
// 理由2.1画面で完結しているので、Controllerを分ける必要がない
class DeleteController extends Controller
{
    public function delete($id)
    {
        // バリデーションするならFormRequestを使用するのを推奨（可読性、役割分担、FatController回避の観点から）
        if (empty($id)) {
            return redirect()
                ->route("todo")
                ->with("msg", "IDがありません");
        }

        $data = TodoList::findById($id);

        if (empty($data)) {
            return redirect()
                ->route("todo")
                ->with("msg", "データがありませんでした");
        }

        TodoList::deleteById($id);

        return redirect()
            ->route("todo")
            ->with("msg","成功しました");
    }
}
