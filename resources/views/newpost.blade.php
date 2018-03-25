@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">create form</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                   <form class="form-horizontal" action="{{route('storepost')}}" method="post">
                      
                    @csrf

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Title</label>  
                        <div class="col-md-4">
                        <input id="textinput" name="title" type="text" placeholder="Title" class="form-control input-md">                    
                        </div>
                        </div>

                        <!-- Textarea -->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="textarea">Description</label>
                        <div class="col-md-4">                     
                            <textarea class="form-control" id="textarea" name="description">Description</textarea>
                        </div>
                        </div>
                        <button id="singlebutton" name="singlebutton" class="btn btn-primary">Button</button>
                        
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection