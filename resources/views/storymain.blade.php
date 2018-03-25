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
                   <a href="{{ route('story.create')}}" id="singlebutton" name="singlebutton" class="btn btn-primary">Create New story</a>
                   <div id="accordion">
                        @foreach($allstory as $story)
                        <div class="card">
                            <div class="card-header" id="heading{{$story->id}}">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{$story->id}}" aria-expanded="true" aria-controls="collapse{{$story->id}}">
                                {{$story->title}} 
                                </button>
                            </h5>
                            </div>

                            <div id="collapse{{$story->id}}" class="collapse" aria-labelledby="heading{{$story->id}}" data-parent="#accordion">
                            <div class="card-body">
                                {{ $story->description}}
                            </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
