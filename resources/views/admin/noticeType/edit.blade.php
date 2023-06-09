@extends('layouts.admin')

@section('content')
<div class="col-sm-12">
    <div class="page-header">
        <h3 class="page-title">Create New Category</h3>
        <ol class="breadcrumb">
            <li><a href="index.html">Dashboard</a></li>
            <li>Settings</li>
            <li class="active">New Category</li>
            <li style="text-align:right; float:right">
                <a href="noticetype-list.html" style="color:#fff;"><i class="fa fa-list"></i> View Menu List</a>
            </li>
        </ol>
    </div>

</div>
<div class="row-fluid">
    <div class="col-sm-12">
        <div class="card">

            <div class="row" style="margin:10px">
                <form method="POST" action="{{route('admin.notice_types.update',$noticeType->id)}}" class="form-horizontal form-label-left">
                   @csrf
                   @method('put')

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="menuname">Name <span class="required">*</span>
                    </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="name" value="{{$noticeType->name}}" class="form-control col-md-7 col-xs-12 @error('name') is-invalid @enderror">
                            @error('name')
                            <div class="py-3" style="color:#f00">{{ $message }}</div>
                         @enderror
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-success" style="margin:10px;">Update</button>
                           
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection