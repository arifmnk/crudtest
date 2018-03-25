@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div id="accordion">
                        @foreach($semuapost as $satupost)
                        <div class="card">
                            <div class="card-header" id="heading{{$satupost->id}}">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{$satupost->id}}" aria-expanded="true" aria-controls="collapseOne">
                                {{$satupost->title}} 
                                    <a href="{{route('editpost',['postid'=>$satupost->id])}}" id="button1id" name="button1id" class="btn btn-success">Update</a>
                                </button>
                                    <form action="{{route('kitadestroy',['postid'=>$satupost->id])}}" method="post">
                                   <input type="hidden" name="_method" value="DELETE">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                            </h5>
                            </div>

                            <div id="collapse{{$satupost->id}}" class="collapse" aria-labelledby="heading{{$satupost->id}}" data-parent="#accordion">
                            <div class="card-body">
                                {{ $satupost->description}}
                            </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                   
                    You are logged in! <a href="{{ route('nps')}}" id="singlebutton" name="singlebutton" class="btn btn-primary">Create New</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
