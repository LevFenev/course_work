<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Events;
use App\Models\EventsComments;
use App\Models\News;
use App\Models\NewsComments;

class CommentsController extends Controller
{
    public function store($id){
       if(request('type')=='events'){
           $events=Events::findOrFail($id);
           if($events){
               $comments_name=request('name');
               $comments_text=request('comment');
               if($comments_name && $comments_text){
                   $comments=new EventsComments();
                   $comments->name=$comments_name;
                   $comments->comment=$comments_text;
                   $comments->events()->associate($events);
                   $comments->save();

                   return redirect('events/'.$events->id);
               }
           }
       }

       else{
            $news=News::findOrFail($id);
            if($news){
                $comments_name=request('name');
                $comments_text=request('comment');
                if($comments_name && $comments_text){
                    $comments=new NewsComments();
                    $comments->name=$comments_name;
                    $comments->comment=$comments_text;
                    $comments->news()->associate($news);
                    $comments->save();

                    return redirect('news/'.$news->id);
                }
            }
       }
    }

    public function destroy($id){
        if(request('type')=='events'){
            $comments=EventsComments::findOrFail($id);
            $comments->delete();

            return back();
        } else {
            $comments=NewsComments::findOrFail($id);
            $comments->delete();

            return back();
        }

}
}