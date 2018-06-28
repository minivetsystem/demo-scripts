@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Event details</div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-4 item-photo">
                                <img style="max-width:100%;" src="{{asset('events/'.$event->image)}}" />
                            </div>
                            <div class="col-xs-8" style="border:0px solid gray">
                                <!-- Datos del vendedor y titulo del producto -->
                                <h3>{{$event->title}}</h3>
                                <h5 style="color:#337ab7">{{$event->user->fullname}}</h5>
                                <p>Social media : {{$event->user->socialmedia}}</p>
                                <p >Bio : {{$event->user->biomsg}}</p>

                                @if(Auth::guard('user')->check())
                                    @if(!in_array($event->id, $user_events_ar))
                                        <a class="btn btn-blog pull-right marginBottom10"
                                           href="{{Route('add-to-profile',['id'=>$event->id])}}">Add To Profile</a>
                                    @endif
                                @endif

                            </div>

                            <div class="col-xs-12">
                                <ul class="menu-items">
                                    <li class="active">Description</li>

                                </ul>
                                <div style="width:100%;border-top:1px solid silver">
                                    <p style="padding:15px;">
                                        <?php
                                        echo nl2br($event->description);
                                        ?>
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page_css')
    <style>
        ul > li{margin-right:25px;font-weight:lighter;cursor:pointer}
        li.active{border-bottom:3px solid silver;}

        .item-photo{display:flex;justify-content:center;align-items:center;border-right:1px solid #f6f6f6;}
        .menu-items{list-style-type:none;font-size:11px;display:inline-flex;margin-bottom:0;margin-top:20px}
        .btn-success{width:100%;border-radius:0;}
        .section{width:100%;margin-left:-15px;padding:2px;padding-left:15px;padding-right:15px;background:#f8f9f9}
        .title-price{margin-top:30px;margin-bottom:0;color:black}
        .title-attr{margin-top:0;margin-bottom:0;color:black;}
        .btn-minus{cursor:pointer;font-size:7px;display:flex;align-items:center;padding:5px;padding-left:10px;padding-right:10px;border:1px solid gray;border-radius:2px;border-right:0;}
        .btn-plus{cursor:pointer;font-size:7px;display:flex;align-items:center;padding:5px;padding-left:10px;padding-right:10px;border:1px solid gray;border-radius:2px;border-left:0;}
        div.section > div {width:100%;display:inline-flex;}
        div.section > div > input {margin:0;padding-left:5px;font-size:10px;padding-right:5px;max-width:18%;text-align:center;}
        .attr,.attr2{cursor:pointer;margin-right:5px;height:20px;font-size:10px;padding:2px;border:1px solid gray;border-radius:2px;}
        .attr.active,.attr2.active{ border:1px solid orange;}

        @media (max-width: 426px) {
            .container {margin-top:0px !important;}
            .container > .row{padding:0 !important;}
            .container > .row > .col-xs-12.col-sm-5{
                padding-right:0 ;
            }
            .container > .row > .col-xs-12.col-sm-9 > div > p{
                padding-left:0 !important;
                padding-right:0 !important;
            }
            .container > .row > .col-xs-12.col-sm-9 > div > ul{
                padding-left:10px !important;

            }
            .section{width:104%;}
            .menu-items{padding-left:0;}
        }
    </style>
@endsection