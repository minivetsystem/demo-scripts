<div class="col-md-12 blogShort">
    <h1>{{$event->title}}</h1>
    <img src="{{asset('events/'.$event->image)}}"
         alt="{{$event->title}}" class="pull-left img-responsive thumb margin10 img-thumbnail" style="width: 200px;">
    @if($show_author)
        <em>
            {{$event->user->fullname}}
        </em>
    @endif
    <article>
        <p>
            {{substr($event->description, 0, 450)}}
            @if(strlen(strip_tags($event->description))>450)
                ...
            @endif
        </p>
    </article>

    <a class="btn btn-blog pull-right marginBottom10" href="{{Route('details',['slug'=>$event->slug])}}">READ MORE</a>
    @if($add_to_profile)
        <a class="btn btn-blog pull-right marginBottom10" href="{{Route('add-to-profile',['id'=>$event->id])}}">Add To
            Profile</a>
    @endif

    @if($edit)
        <a class="btn btn-blog pull-right marginBottom10" href="{{Route('edit-event',['id'=>$event->id])}}">Edit</a>
    @endif
</div>