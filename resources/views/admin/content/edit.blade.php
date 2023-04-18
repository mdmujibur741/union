@extends('layouts.admin')
@section('content')
<div class="col-sm-12">
    <div class="page-header" style="border:none; margin:0; padding:0">
        <h3 class="page-title">Create New Article</h3>
        <ol class="breadcrumb">
            <li><a href="index.html">Dashboard</a></li>
            <li>Settings</li>
            <li class="active">New Article</li>
            <li style="text-align:right; float:right">
                <a href="contents-list.html" style="color:#fff;"><i class="fa fa-list"></i> View
                    Article List</a>
            </li>
        </ol>
    </div>
</div>
<div class="row-fluid">
    <div class="col-sm-12">
        <div class="card">

            <div class="row" style="margin:10px">
                <form method="post" action="{{route('admin.contents.update', $content->id)}}" class="form-horizontal" enctype="multipart/form-data">
                    @csrf

                    <div class="col-sm-12" style="margin-bottom:10px;">

                        <div class="form-group">
                            <label class="control-label col-md-1 col-sm-1 col-xs-12" for="menu">Menu</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="menu_id" class="form-control @error('menu_id') is-invalid @enderror">
                                    <option value="">Select a Menu Item</option>
                                            @foreach ($menu as $item)
                                                 <option value="{{$item->id}}" > {{$item->menu}} </option>
                                            @endforeach
                                        </select>
                                        @error('menu_id')
                                        <div class="alert  text-center" style="color:#f00">{{ $message }}</div>
                                     @enderror  
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12" style="margin-bottom:10px;">
                        <div class="form-group">
                            <label class="control-label col-md-1 col-sm-1 col-xs-12" for="title">Title <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror col-md-7 col-xs-12">
                                @error('title')
                                <div class="alert  text-center" style="color:#f00">{{ $message }}</div>
                             @enderror  
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12" style="margin-bottom:10px;">
                        <div class="form-group">
                            <label class="control-label col-md-1 col-sm-1 col-xs-12" for="content">Content</span>
                            </label>
                            <div class="col-md-11 col-sm-11 col-xs-12">
                                <textarea name="content" class="form-control ckeditor @error('content') is-invalid @enderror"></textarea>
                                @error('content')
                                <div class="alert  text-center" style="color:#f00">{{ $message }}</div>
                             @enderror  
                            </div>
                        </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <button class="btn btn-info" type="reset">Reset</button>
                            <a href="contents-list.html" class="btn btn-primary">Cancel</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection