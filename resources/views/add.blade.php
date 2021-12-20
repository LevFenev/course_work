@extends('layouts.layout')

@section('content')
    <main>
        <h1>Хотите добавить новость или мероприятие?</h1>

            <form method="post" action="/course/public/" class="col-md-4 col-sm-12">
        @csrf
            <div class="form-group mt-3">
                <label for="type">Тип публикации</label>
                <select id="type" name="type" class="form-select mt-3">
                    <option value="news">Новость</option>
                    <option value="event">Мероприятие</option>
              </select>
            </div>

            <div class="form-group mt-3">
                <label for="heading">Название новости / мероприятия</label>
                <input  id="heading" name="heading" type="text" class="form-control">
            </div>

            <div class=" form-group mt-3">
                <label for="description" class="form-label">Содержание</label>
                <textarea class="form-control" id="description" name="description" rows="4"></textarea>
            </div> 

            <div class="form-group ">
                <label for="name">Имя автора</label>
                <input  id="name" name="name" type="text" class="form-control">
            </div>

            <div class="form-group mt-3">
                <label for="date_create">Дата</label>
                <input id="date_create" name="date_create"  type="date"  class="form-control">
            </div>
                <button type="submit" class="btn btn-primary mt-3">Опубликовать</button>
        </form>

    </main>

@endsection