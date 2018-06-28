@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Events</div>

                    <div class="panel-body">
                        @if(count($events)>0)
                            @foreach($events as $event)
                                <div class="col-md-12 blogShort">
                                    <h1>{{$event->title}}</h1>
                                    <img src="{{asset('events/'.$event->image)}}"
                                         alt="{{$event->title}}"
                                         class="pull-left img-responsive thumb margin10 img-thumbnail"
                                         style="width: 200px;">

                                    <em>
                                        {{$event->fullname}}
                                    </em>

                                    <article>
                                        <p>
                                            {{substr($event->description, 0, 450)}}
                                            @if(strlen(strip_tags($event->description))>450)
                                                ...
                                            @endif
                                        </p>
                                    </article>

                                    <a class="btn btn-blog pull-right marginBottom10" href="{{Route('details',['slug'=>$event->slug])}}">READ MORE</a>
                                    @if(Auth::guard('user')->check())
                                        @if(!in_array($event->id, $user_events_ar))
                                            <a class="btn btn-blog pull-right marginBottom10"
                                               href="{{Route('add-to-profile',['id'=>$event->id])}}">Add To Profile</a>
                                        @endif
                                    @endif

                                </div>
                            @endforeach
                        @else
                            <p>Please add your <a href="{{Route('add-event-interest')}}">interest</a> to show your
                                events.</p>
                        @endif
                        <div class="text-right">
                            {{ $events->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
