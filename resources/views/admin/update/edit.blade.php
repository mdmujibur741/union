@extends('layouts.admin')

@section('content')
<div class="col-sm-12">
    <div class="page-header">
        <h3 class="page-title">Create New Update</h3>
        <ol class="breadcrumb">
            <li><a href="index.html">Dashboard</a></li>
            <li>Settings</li>
            <li class="active">New Update</li>
            <li style="text-align:right; float:right">
                <a href="Latest-update-list.html" style="color:#fff;"><i class="fa fa-list"></i> View Update List</a>
            </li>
        </ol>
    </div>


 

</div>
<div class="row-fluid">
    <div class="col-sm-12">
        <div class="card">

            <div class="row" style="margin:10px">
                <div class="col-sm-12">
                    <form method="POST" action="{{route('admin.updates.update',$update->id)}}" enctype="multipart/form-data">
                       @csrf
                       @method('put')
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">Update Headline</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control @error('headline') is-invalid @enderror" name="headline" value="{{$update->headline}}">
                                @error('headline')
                                <div class="py-3 " style="color:#f00">{{ $message }}</div>
                             @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">Update Details</label>
                            <div class="col-md-8">
                                <textarea class="form-control ckeditor @error('details') is-invalid @enderror" name="details" value=""> {{$update->details}} </textarea>
                                @error('details')
                                <div class="py-3 " style="color:#f00">{{ $message }}</div>
                             @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">Image</label>
                            <div class="col-md-8">
                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                                @error('image')
                                <div class="py-3 " style="color:#f00">{{ $message }}</div>
                             @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">Meta Details</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control @error('meta_details') is-invalid @enderror" name="meta_details" value="{{$update->meta_details}}">
                                @error('meta_details')
                                <div class="py-3 " style="color:#f00">{{ $message }}</div>
                             @enderror
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">Sequence</label>
                            <div class="col-md-8">
                                <input type="number" class="form-control @error('sequence') is-invalid @enderror" name="sequence" value="{{$update->sequence}}"   style="width:30%">
                                @error('sequence')
                                <div class="py-3 " style="color:#f00">{{ $message }}</div>
                             @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">Status</label>
                            <div class="col-md-8">
                                <select name="status" class="form-control @error('status') is-invalid @enderror" value="{{$update->status}}">
                            @foreach ($displays as $key=>$item)
                                 <option value="{{$key}}" @if($update->status==$key) selected @endif> {{$item}} </option>
                            @endforeach
                   </select>
                   @error('status')
                   <div class="py-3 " style="color:#f00">{{ $message }}</div>
                @enderror
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
</div>
@endsection