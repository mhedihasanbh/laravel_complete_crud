@extends('master')
@section('tittle')
    Data View
@endsection
@section('body')
    <section class="bg-secondary py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <h5 class="card-header">Data view</h5>
                        <div class="card-body">
                            <h5 class="card-title">All Data View Here</h5>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>SI-NO</th>
                                    <th>POST TITTLE</th>
                                    <th>POST IMAGE</th>
                                    <th>POST DESCRIPTION</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($alldata as $onedata)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$onedata->post_tittle}}</td>
                                    <td><img src="{{asset($onedata->post_image)}}" height="150" width="150"></td>
                                    <td>{{$onedata->post_description}}</td>
                                    <td>
                                        <a href="{{route('edit',['id' => $onedata->id])}}" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="{{route('delete',['id'=>$onedata->id])}}" onclick="return confirm('are you sure delete this')" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>


                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
