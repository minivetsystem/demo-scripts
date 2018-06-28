@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Event</div>

                    <div class="panel-body">

                        <form class="form-horizontal" id="event_form" method="post" action="{{ route('edit-event',['id'=>$model->id]) }}"
                              enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
                                <label for="category_id" class="col-md-4 control-label">Category</label>
                                <div class="col-md-6">

                                    <select name="category_id" class="form-control" id="category_id">
                                        <option value="">Select Category</option>
                                        @foreach($category as $cat)
                                            <option {{$cat->id==$model->category_id ? 'selected' : ''}} value="{{$cat->id}}">{{$cat->name}}</option>
                                        @endforeach
                                    </select>

                                    <span class="help-block">

                                    </span>

                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('event_type_id') ? ' has-error' : '' }}">
                                <label for="userimg" class="col-md-4 control-label">Event type</label>
                                <div class="col-md-6">

                                    <select name="event_type_id" class="form-control" id="event_type_id">
                                        <option value="">Select Event Type</option>
                                        @foreach($event_type as $cat)
                                            <option {{$cat->id==$model->event_type_id ? 'selected' : ''}} value="{{$cat->id}}">{{$cat->name}}</option>
                                        @endforeach
                                    </select>

                                    <span class="help-block">

                                    </span>

                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                                <label for="userimg" class="col-md-4 control-label">Image</label>
                                <div class="col-md-6">

                                    <p>
                                        <img class="img-responsive img-thumbnail" alt="No Image"
                                             src="{{asset('events/'.$model->image)}}"/>
                                    </p>
                                    <input id="image" type="file" class="form-control" name="image">

                                    <span class="help-block">

                                    </span>

                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title" class="col-md-4 control-label">Title</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title"
                                           value="<?= (old('title') != "") ? old('title') : $model->title?>">
                                    <span class="help-block">
                                    </span>

                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                <label for="description" class="col-md-4 control-label">Bio Message</label>

                                <div class="col-md-6">

                                    <textarea id="description" class="form-control"
                                              name="description"><?= (old('description') != "") ? old('description') : $model->description?></textarea>

                                    <span class="help-block">

                                    </span>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page_js')
    <script>
        $(document).ready(function () {

            $("#event_form").submit(function (e) {
                e.preventDefault();
                $('.help-block').html('');
                $('.has-error').removeClass('has-error');
                var formData = new FormData(this);

                $.ajax({
                    type: 'POST',
                    url: $(this).attr('action'),
                    data: formData,
                    dataType: 'json',
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function (resp) {
                        if(resp.type=="success"){
                            window.location.reload(true);
                        }else{
                            $.each(resp.message, function(index,elem){
                                $("#"+index).closest('.form-group').addClass('has-error');
                                $("#"+index).closest('.form-group').find('.help-block').html(elem);
                            })
                        }
                    },
                    error: function (data) {
                        console.log("error");
                        console.log(data);
                    }
                });
            })

            $("#category_id").change(function (e) {
                $.get(full_path + "/get-event-type", {cat_id: $(this).val()}, function (resp) {
                    $("#event_type_id").html(resp.html);
                }, 'json');

            })

        })
    </script>
@endsection