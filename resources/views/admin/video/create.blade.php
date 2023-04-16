@extends('layouts.admin')

@section('content')
<div class="col-sm-12">
    <div class="page-header" style="border:none">
        <h3 class="page-title">View Video List</h3>
        <div class="col-sm-5" style="margin:0; padding:0">
            <ol class="breadcrumb" style="padding:13px;">
                <li><a href="index.html">Dashboard</a></li>
                <li>Settings</li>
                <li class="active">Blog List</li>
            </ol>
        </div>
        <div class="col-sm-7 breadcrumb pull-right" style="float:right; text-align:right">

            <a href="Video-list.html" style="color:#fff; margin-right:20px" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Create New Blog</a>
        </div>
    </div>
</div>
<div class="row-fluid">
    <div class="col-sm-12">
        <div class="card">

            <div class="row" style="margin:10px">
                <form method="post" action="{{route('admin.videos.store')}}" class="form-horizontal" enctype="multipart/form-data">
                   @csrf


                    <div class="col-sm-12" style="margin-bottom:10px;">
                        <div class="col-sm-12">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="content">Video Title</span></label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control ckeditor @error('title') is-invalid @enderror" name="title" style="margin-bottom:5px;" />
                                @error('title')
                                <div class="py-3 " style="color:#f00">{{ $message }}</div>
                             @enderror
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="content">Cover Image</span></label>
                            <div class="col-md-9 col-sm-9 col-xs-12"><input type="file" class="form-control @error('image') is-invalid @enderror" name="image" style="margin-bottom:5px;" /></div>
                            @error('image')
                            <div class="py-3 " style="color:#f00">{{ $message }}</div>
                         @enderror
                        </div>
                        <div class="col-sm-12">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="content">Video  (YouTube 11 digit code)</span></label>
                            <div class="col-md-9 col-sm-9 col-xs-12">

                                <input type="text" class="form-control @error('youtube') is-invalid @enderror" name="youtube" placeholder="YouTube 11 digit code">
                                @error('youtube')
                                <div class="py-3 " style="color:#f00">{{ $message }}</div>
                             @enderror
                            </div>
                        </div>



                        <div class="col-sm-12" style="margin-top:30px;">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>
@endsection