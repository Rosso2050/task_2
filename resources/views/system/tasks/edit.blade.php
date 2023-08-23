@extends('layouts.master')
@section('content')
    <?php $user = \Illuminate\Support\Facades\Auth::user(); ?>

    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Create New Task</h4>
                        @include('layouts.alert')
                        <form class="forms-sample" method="post" action="{{route('tasks.update',$item->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                            <div class="form-group">
                                <label for="exampleInputUsername1">Title</label>
                                <input required value="{{$item->title}}"  type="text" class="form-control" id="title" name="title" placeholder="Title">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Description</label>
                                <textarea  required rows="5" class="form-control" id="description" name="description"
                                          placeholder="Description">{{$item->description}}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection