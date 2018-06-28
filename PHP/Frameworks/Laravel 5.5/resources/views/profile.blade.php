@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Profile</div>

                    <div class="panel-body">

                        <form class="form-horizontal" method="post" action="{{ route('profile/update') }}"
                              enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                                <label for="userimg" class="col-md-4 control-label">Picture</label>
                                <div class="col-md-6">
                                    <p>
                                        <img class="img-responsive img-thumbnail" alt="No Image"
                                             src="{{asset('images/'.$model->image)}}"/>
                                    </p>

                                    <input id="userimg" type="file" class="form-control" name="file">
                                    @if ($errors->has('file'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('file') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="text" class="form-control" name="email"
                                           value="<?= (old('email') != "") ? old('email') : $model->email?>">

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('fullname') ? ' has-error' : '' }}">
                                <label for="fullname" class="col-md-4 control-label">Full Name</label>

                                <div class="col-md-6">
                                    <input id="fullname" type="text" class="form-control" name="fullname"
                                           value="<?= (old('fullname') != "") ? old('fullname') : $model->fullname?>">

                                    @if ($errors->has('fullname'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('fullname') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                <label for="phone" class="col-md-4 control-label">Phone</label>

                                <div class="col-md-6">
                                    <input id="phone" type="text" class="form-control" name="phone"
                                           value="<?= (old('phone') != "") ? old('phone') : $model->phone?>">

                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">
                                <label for="birthday" class="col-md-4 control-label">Birthday</label>

                                <div class="col-md-6">
                                    <input id="birthday" type="text" class="form-control" name="birthday"
                                           value="<?= (old('birthday') != "") ? old('birthday') : $model->birthday ?>">

                                    @if ($errors->has('birthday'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('birthday') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('link') ? ' has-error' : '' }}">
                                <label for="link" class="col-md-4 control-label">Link</label>

                                <div class="col-md-6">
                                    <input id="link" type="text" class="form-control" name="link"
                                           value="<?= (old('link') != "") ? old('link') : $model->link?>">

                                    @if ($errors->has('link'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('link') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('socialmedia') ? ' has-error' : '' }}">
                                <label for="socialmedia" class="col-md-4 control-label">Social Media</label>

                                <div class="col-md-6">
                                    <input id="socialmedia" type="text" class="form-control" name="socialmedia"
                                           value="<?= (old('socialmedia') != "") ? old('socialmedia') : $model->socialmedia?>">

                                    @if ($errors->has('socialmedia'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('socialmedia') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('payemail') ? ' has-error' : '' }}">
                                <label for="payemail" class="col-md-4 control-label">PaypalE-Mail</label>

                                <div class="col-md-6">
                                    <input id="payemail" type="text" class="form-control" name="payemail"
                                           value="<?= (old('payemail') != "") ? old('payemail') : $model->payemail?>">

                                    @if ($errors->has('payemail'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('payemail') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                                <label for="city" class="col-md-4 control-label">City</label>

                                <div class="col-md-6">
                                    <input id="city" type="text" class="form-control" name="city"
                                           value="<?= (old('city') != "") ? old('city') : $model->city?>">

                                    @if ($errors->has('city'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('biomsg') ? ' has-error' : '' }}">
                                <label for="biomsg" class="col-md-4 control-label">Bio Message</label>

                                <div class="col-md-6">

                                    <textarea id="biomsg" class="form-control"
                                              name="biomsg"><?= (old('biomsg') != "") ? old('biomsg') : $model->biomsg?></textarea>
                                    @if ($errors->has('biomsg'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('biomsg') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="biomsg" class="col-md-4 control-label">Gender</label>
                                <div class="col-md-6">
                                    <div class="radio">
                                        <label class="radio-inline">
                                            <input type="radio" name="gender"
                                                   {{ old('gender')=='' || old('gender') == 'm'  ? 'checked' : '' }} value="m">
                                            Male
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="gender"
                                                   {{ old('gender')=='f' ? 'checked' : '' }} value="f"> Female
                                        </label>
                                    </div>
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