@extends('layouts.app')
@section('content')
<div class="row mt-5 mr-0" style="height: 100vh;">
    <div class="col-sm-4">
        <div class="container">
            <img src="{{auth()->user()->profileurl}}" class="rounded-lg" style="width: 100%;height: 100%;
            cursor: pointer;box-shadow: 2px 2px 1px 4px gray;" data-toggle="modal" data-target="#imagePreview">
            <form id="myform" action="{{route('imageUpdate')}}" method="post" enctype="multipart/form-data">
                {{@csrf_field()}}
                {{ method_field('PUT') }}
                <input type="file" name="file" id="img" accept="image/*" style="display:none;"/>
                <button type="button" class="btn btn-dark mt-4" style="cursor:pointer;"><label for="img">Change Profile Image</label></button>
                <br>
                <h6 class="mt-2"></h6>
                <div class="alert font-weight-bold" style="font-family: cursive" id="message">
                    @if($errors->any())
                        @foreach($errors->all() as $e)
                            {{$e}}
                        @endforeach
                    @endif
                </div>
                <button type="button" id="saveProfile" class="btn btn-primary mt-3" style="font-family: 'cursive';letter-spacing: 1px">Save Changes</button>
            </form>
        </div>
    </div>
    <div class="col-sm-8">
         <div class="container mt-2">
                 <div class="form-group" style="width: 75%">
                     <label for="date" class="font-weight-bold">Name</label>
                     <input disabled class="form-control" id="name" name="name" value="{{auth()->user()->name}}" placeholder="click here to select date">
                 </div>
                 <div class="form-group" style="width: 75%">
                     <label for="name" class="font-weight-bold">Email</label>
                     <input disabled class="form-control" id="email" name="email" value="{{auth()->user()->email}}">
                 </div>
         </div>
    </div>
</div>


<div class="modal fade" id="imagePreview" tabindex="-1" role="dialog" aria-labelledby="imagePreviewLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-body">
                <img src="{{auth()->user()->profileurl}}" style="width: 100%;height: auto" alt="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@endsection

