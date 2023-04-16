@extends('layouts.admin')

@section('content')
<div class="col-sm-12">
    <div class="page-header">
        <h3 class="page-title">Create New Banner</h3>
        <ol class="breadcrumb">
            <li><a href="index.html">Dashboard</a></li>
            <li>Settings</li>
            <li class="active">New Banner</li>
            <li style="text-align:right; float:right">
                <a href="Banner-list.html" style="color:#fff;"><i class="fa fa-list"></i> View Banner List</a>
            </li>
        </ol>
    </div>

</div>
<div class="row-fluid">
    <div class="col-sm-12">
        <div class="card">

            <div class="row" style="margin:10px">
                <div class="col-sm-offset-2">
                    <form method="POST" action="{{route('admin.banners.store')}}" enctype="multipart/form-data">
                     @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">Banner Caption</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('caption') is-invalid @enderror" name="caption"  >
                                @error('caption')
                                <div class="alert  text-center" style="color:#f00">{{ $message }}</div>
                             @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">Image</label>
                            <div class="col-md-6">
                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                                @error('image')
                                <div class="alert  text-center" style="color:#f00">{{ $message }}</div>
                             @enderror
                            </div>
                            <small>Size should be Width: 1200 x Height: 	200</small>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">Status</label>
                            <div class="col-md-6">
                                <select name="status" class="form-control @error('status') is-invalid @enderror" >
                        <option value="1">Display</option>
                     <option value="0">Not Display</option>
                   </select>
                   @error('status')
                   <div class="alert  text-center" style="color:#f00">{{ $message }}</div>
                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                        Save
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