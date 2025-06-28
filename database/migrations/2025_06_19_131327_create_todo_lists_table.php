<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // マイグレーションファイル作成のときに考慮したいこと
        // 1. nullableにするかどうか
        //    ->nullable()をつけると、nullが許容される
        //    ->nullable()をつけないと、nullは許容されない
        // 2. デフォルト値を設定するかどうか
        //    ->default(0)のように設定すると、デフォルト値が0になる
        // 3. 論理名、説明の設定
        //    ->comments('タイトル:TODOリストのタイトル')
        //      :以下はDBの備考欄に記載される
        Schema::create('todo_lists', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            // statusを数値で管理するのはGood（文字列で管理すると、DBのサイズが大きくなる）
            // 現状は'status_id'でわかりやすくしていてもいいが、実務では'status'とすることが多い
            $table->integer("status_id");
            // 長文の内容を保存する場合はtext型を使用するほうが良い
            $table->string("detail");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('todo_lists');
    }
};
