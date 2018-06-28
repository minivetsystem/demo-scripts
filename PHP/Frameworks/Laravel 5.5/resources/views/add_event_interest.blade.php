@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('add-event-interest') }}" method="post">
        {{csrf_field()}}
        <!-- Nav tabs -->
            <h1 class="panel-heading">Interest</h1>
            <ul class="nav nav-tabs" role="tablist">
                @foreach($category as $key=>$row)
                    <li role="presentation" class="{{$key==0 ? 'active' : ''}}"><a href="#home{{$row->id}}"
                                                                                   aria-controls="home" role="tab"
                                                                                   data-toggle="tab">{{$row->name}}</a>
                    </li>
                @endforeach
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                @foreach($category as $key=>$row)
                    <div role="tabpanel" class="tab-pane {{$key==0 ? 'active' : ''}}" id="home{{$row->id}}">
                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <div class="thumbnail">
                                    <?php
                                    $types = \App\EventType::where('cid', $row->id)->get()->all();
                                    ?>
                                    @foreach($types as $type)

                                        <div class="chip">
                                            <label class="">
                                                <input style="margin-left: 10px;" type="checkbox" id="inlineCheckbox1" name="event[]"
                                                       value="{{$type->id}}" {{in_array($type->id, $user_events) ? 'checked' : ''}}>
                                            </label>
                                            {{$type->name}}
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
@endsection

@section('page_css')
<style>

    .chip {
        display: inline-block;
        padding: 0 25px;
        height: 50px;
        font-size: 16px;
        line-height: 50px;
        border-radius: 25px;
        background-color: #f1f1f1;
        margin-top: 10px;
    }

    .chip label {
        float: left;
        margin: 0 10px 0 -25px;
        height: 50px;
        width: 50px;
        border-radius: 50%;
    }
</style>
@endsection