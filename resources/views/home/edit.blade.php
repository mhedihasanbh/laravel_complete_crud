@extends('master')
@section('tittle')
    Edit

@endsection
@section('body')
    @if($message=Session::get('message'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{$message}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="container pt-5">
        <div class="card">
            <h5 class="card-header"> Data Edit</h5>
            <div class="card-body">

                <form action="{{route('data-update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Post Tittle</label>
                        <input type="text" value="{{$dataedite->post_tittle}}" class="form-control"  name="post_tittle" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <input type="hidden" value="{{$dataedite->id}}" name="id"/>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Post Image</label>
                        <input type="file"  name="post_image" class="form-control-file" id="exampleInputPassword1">
                        <img src="{{asset($dataedite->post_image)}}" width="100" height="100">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Post Description</label>

                        <textarea name="post_description"  rows="5" id="exampleInputPassword1" class="form-control-file">{{$dataedite->post_description}} </textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>

@endsection

