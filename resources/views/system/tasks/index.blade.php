@extends('layouts.master')
@section('content')
    <?php $user=\Illuminate\Support\Facades\Auth::user(); ?>

    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tasks List <a class="btn btn-success " style="margin-left: 50px" href="{{route('tasks.create')}}">Add New Task</a></h4>
                        @include('layouts.alert')
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($items as $i=>$item)
                                <tr>
                                    <td>{{$i+1}}</td>
                                    <td>{{$item->title}}</td>
                                    <td >{{\Illuminate\Support\Str::limit($item->description,30,'..')}}</td>
                                    <td>
                                        <a class="btn btn-primary btn-block" href="{{ route('tasks.edit', [$item->id]) }}"> Show & Edit</a><br>
                                        <form action="{{ route('tasks.destroy', $item->id)}}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <input onclick="return confirm('Confirm Delete ... ?')"  class="btn btn-danger btn-block" type="submit" value="Delete" />
                                        </form>


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
    </div>

@endsection