@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Linked Events</div>

                    <div class="panel-body">
                        @foreach($events as $row)
                            @include('event.event_component', ['event' => $row->event, 'add_to_profile'=>false, 'show_author'=>true,'edit'=>false])
                        @endforeach
                            <div class="text-right">
                                {{ $events->links() }}
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
