@extends('layouts.layout')
@section ('content')

<h1>{{$events->heading}}</h1>
<p>{{$events->description}}</p>
<p>{{$events->name}}</p>
<p>{{substr($events->date_create, 0,10)}}</p>

@foreach ($comments as $comment)
    <div class="comment">
        <h2>{{$comment->name}}</h2>
        <p>{{$comment->comment}}</p>

        <a href="../comments/remove/{{$comment->id}}?type=events">
            <svg style='margin-left: 10px' xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
            </svg>
        </a>
    </div>
@endforeach

    <form  action="../{{$events->id}}/addComment" method="post" class="col-md-5">
            @csrf 
            <h3>Добавить комментарий</h3>


            <div class="form-group">
                <label for="comment-title">Введите имя</label>
                <input type="text" name="name" id="review-name" class="form-control">
            </div>
            <div class="form-group mt-3">
                <label for="comment-text">Введите текст</label>
                <textarea name="comment" id="review-comment" class="form-control" rows="3"></textarea>
            </div>

            <input type="hidden" name="type" value="events">

            <button type="submit" class="btn btn-primary mt-3">Отправить</button>
    </form>

@endsection