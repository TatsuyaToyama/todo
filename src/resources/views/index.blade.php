@extends('layouts.app')

@section('css')
 <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection

@section('content')
<div class="todo__alert">
  <div class="todo__alert--success">
    Todoを作成しました
  </div>
</div>

<div class="todo__content">
    <form class="create-form" action="/todos" method="post">
        @csrf
        <div class="create-form__item">
            <input class="create-form__item" type="text" name="todo" >
        </div>
        <div class="create-form__button">
            <button class="create-form__button-submit" name="submit">作成</button>
        </div>
    </form>
</div>

<div class="todo-table"> 

    <table class="todo-table__inner">
        <tr class="todo-table__row">
            <th class="todo-table__header">Todo</th>
        </tr>
        @foreach($Todos as $Todo)
        <tr class="todo-table__row">
            <td class="todo-table__item">{{ $Todo['content'] }}</td>
            <td class="todo-table__item">
                <form class="update-form" action="-------" method="post">
                    @csrf
                    <div class="update-form__item">
                        <input class="update-form__item-input" type="text">
                    </div>
                    <div class="update-form__button">
                        <button class="update-form__button-submit" type="submit">更新</button>
                    </div>
                </form>
            </td>
            <td class="todo-table__item">
                <form class="delete-form" action="-----" method="post">
                    @csrf
                    <div class="delete-form__button">
                        <button class="delete-form__button-submit" type="submit">削除</button>
                    </div>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection