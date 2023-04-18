@extends('layouts.admin')

@section('content')
<div class="col-sm-12">
    <div class="page-header" style="border:none">
        <h3 class="page-title">Create New Usefull Link</h3>
        <ol class="breadcrumb">
            <li><a href="index.html">Dashboard</a></li>
            <li>Settings</li>
            <li class="active">New Usefull Link</li>
            <li style="text-align:right; float:right">
                <a href="Usefull-list.html" style="color:#fff;"><i class="fa fa-list"></i> View Usefull Link List</a>
            </li>
        </ol>
    </div>

</div>
<div class="row-fluid">
    <div class="col-sm-12">
        <div class="card">

            <div class="row" style="margin:10px">
                <form method="post" action="{{route('admin.usefulls.update', $link->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="col-sm-12">
                        <div class="col-sm-6">

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Title
                            <span style="color:#ff0000; font-size:20px;">*</span></label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{$link->title}}">
                                    @error('title')
                                    <div class="" style="color:#f00">{{ $message }}</div>
                                 @enderror 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Type
                            <span style="color:#ff0000; font-size:20px;">*</span></label>
                                <div class="col-md-8">
                                    <select name="type" class="form-control @error('type') is-invalid @enderror" >
                                      
                                       @foreach ($types as $item)
                                         <option value="{{$item}}" @if($item== $link->type) selected @endif> {{$item}} </option>
                                       @endforeach 
                               </select>
                               @error('type')
                               <div class="" style="color:#f00">{{ $message }}</div>
                            @enderror   
                            </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">url
                            <span style="color:#ff0000; font-size:20px;">*</span></label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control @error('link') is-invalid @enderror" name="link" value="{{$link->link}}">
                               @error('link')
                               <div class="" style="color:#f00">{{ $message }}</div>
                            @enderror   
                            </div>
                            </div>
                          
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Image</label>
                                <div class="col-md-8">
                                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                                    @error('image')
                                    <div class="" style="color:#f00">{{ $message }}</div>
                                 @enderror 
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                        Update
                    </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection