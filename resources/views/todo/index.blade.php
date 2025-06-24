@extends('layouts.layout')

@section("content")
    <div class="l-content">
        @if (session("msg"))
            <p class="c-text__normal">{{ session("errMsg")}}</p>
        @endif
        <h1 class="c-text__title">Todo List</h1>
        <article class="p-grid__todo">
            <ul class="p-grid__todo-list">
                @foreach ($todolists as $todolist)
                    <li class="p-grid__todo-item">
                        <div class="p-grid__todo-text">
                            <p class="c-text__normal">{{ $todolist->title }}</p>
                            <p class="c-text__detail">{{ $todolist->detail }}</p>
                        </div>
                        <div class="p-grid__todo-icon">
                            <select class="c-form__select" name="status_id">
                                <option value="1"
                                    @if($todolist->status_id == 1)
                                        selected
                                    @endif
                                >未着手</option>
                                <option value="2"
                                    @if($todolist->status_id == 2)
                                        selected
                                    @endif
                                >進行中</option>
                                <option value="3"
                                    @if($todolist->status_id == 3)
                                        selected
                                    @endif
                                >完了</option>
                            </select>
                            <a data-id="1">
                                <img class="c-image__icon" src="{{ asset('img/edit.png') }}">
                            </a>
                            
                            <a id="js-delete" href="{{ route('todo.delete', ['id' => $todolist->id]) }}">
                                <img class="c-image__icon" src="{{ asset('img/delete.png') }}">
                            </a>

                                
                        </div>
                    </li>
                @endforeach
            </ul>
            <section class="p-grid__todo-form">
                <form method="post" action="{{ route('todo.store') }}">
                    @csrf
                    <label class="p-grid__todo-label">
                        <p class="c-text__normal">タイトル</p>
                        <input type="text" class="c-form__main" name="title">
                    </label>
                    <input type="hidden" name="status_id" value="1">
                    <label class="p-grid__todo-label">
                        <p class="c-text__normal">詳細</p>
                        <textarea class="c-form__textarea" name="detail"></textarea>
                    </label>
                    <button class="c-button__main">送信</button>
                </form>
            </section>
        </article>
    </div>
@endsection