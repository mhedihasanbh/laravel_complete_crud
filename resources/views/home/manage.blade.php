@extends('master')
@section('tittle')
    Manage

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
        <h5 class="card-header"> Data Insert</h5>
        <div class="card-body">

            <form action="{{route('insertData')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Post Tittle</label>
                    <input type="text" class="form-control"  name="post_tittle" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Post Image</label>
                    <input type="file"  name="post_image" class="form-control-file" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Post Description</label>

                    <textarea name="post_description"  rowa="20" id="exampleInputPassword1" class="form-control-file"> </textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection
