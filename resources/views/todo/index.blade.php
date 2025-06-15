@extends('layouts.layout')

@section("content")
    <div class="l-main">
        <article class="p-grid__todo">
            <h1>Todo List</h1>
            <ul class="p-grid__todo-list">
                <li class="p-grid__todo-item">
                    <div class="p-grid__todo-icon">
                        <p class="c-text__normal">勉強をする</p>
                    </div>

                    <div class="p-grid__todo-icon">
                        <select class="c-form__select">
                            <option value="0">未着手</option>
                            <option value="1">進行中</option>
                            <option value="2">完了</option>
                        </select>
                        <a>
                            <img class="c-image__icon" src="{{ asset('img/edit.png') }}">
                        </a>
                        <a>
                            <img class="c-image__icon" src="{{ asset('img/delete.png') }}">
                        </a>
                    </div>
                </li>
            </ul>
            <section class="p-grid__todo-input">
                <input type="text" class="c-form__main">
                <button class="c-button__main">送信</button>
            </section>
        </article>
    </div>
@endsection