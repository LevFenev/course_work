@extends('layouts.layout')

@section('content')
    <main>
        <h1>Редактирование мероприятия</h1>

            <form method="post" action="" class="col-md-4 col-sm-12">
        @csrf
            <div class="form-group mt-3">
                <label for="heading">Название Мероприятия</label>
                <input  id="heading" name="heading" type="text" class="form-control" value="{{$events->heading}}" required>
            </div>

            <div class=" form-group mt-3">
                <label for="description" class="form-label">Содержание</label>
                <textarea class="form-control" id="description" name="description" rows="4" required>{{$events->description}}</textarea>
            </div> 

            <div class="form-group ">
                <label for="name">Имя автора</label>
                <input  id="name" name="name" type="text" class="form-control" value="{{$events->name}}" required>
            </div>

            <div class="form-group mt-3">
                <label for="date_create">Дата</label>
                <input required id="date_create" name="date_create"  type="date"  class="form-control" value="{{substr($events->date_create, 0,10)}}">
            </div>
                <button type="submit" class="btn btn-primary mt-3">Опубликовать</button>
        </form>

    </main>

@endsection