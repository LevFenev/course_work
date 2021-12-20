<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\News;
use App\Models\Events;

class PublicationController extends Controller
{
    public function save(){
    if(request('type')==='news'){
            $news= new News;
            $news->heading=request('heading');
            $news->description=request('description');
            $news->name=request('name');
            $news->date_create=request('date_create');
            $news->save();
            return view('main');
        }
    else{
            $event= new Events;
            $event->heading=request('heading');
            $event->description=request('description');
            $event->name=request('name');
            $event->date_create=request('date_create');
            $event->save();
            return view('main');
        }
    }
    public function showNews(){
        $news= News::all();
        return view('news', ['news'=>$news]); /* 'news' слева - то, как называется страница со всеми новостями*/
    }

    public function showEvents(){
        $event= Events::all();
        return view('events', ['event'=>$event]);
    }

    public function removeNews($id){
        $entity= News::findOrFail($id);
        $entity->delete();
        return redirect('/news');
    }

    public function revealNews($id){
        $entity= News::findOrFail($id);

        $comments=$entity->comments;

        return view('revealNews', ['news'=>$entity, 'comments'=>$comments]);
    }

    public function removeEvents($id){
        $entity= Events::findOrFail($id);
        $entity->delete();
        return redirect('/events');
    }

    public function editNews($id){
        $entity= News::findOrFail($id);
        return view('editNews', ['news'=>$entity]);
    }

    public function updateNews($id){
        $news= News::findOrFail($id);
        $news->heading=request('heading');
        $news->description=request('description');
        $news->name=request('name');
        $news->date_create=request('date_create');
        $news->save();
        return redirect('/news');
    }

    public function editEvents($id){
        $entity= Events::findOrFail($id);
        return view('editEvents', ['events'=>$entity]);
    }

    public function updateEvents($id){
        $events= Events::findOrFail($id);
        $events->heading=request('heading');
        $events->description=request('description');
        $events->name=request('name');
        $events->date_create=request('date_create');
        $events->save();
        return redirect('/events');
    }

    public function revealEvents($id){
        $entity= Events::findOrFail($id);

        $comments=$entity->comments;

        return view('revealEvents', ['events'=>$entity, 'comments'=>$comments]);
    }

}