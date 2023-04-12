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
                <form method="POST" action="{{route('admin.notice_types.store')}}" class="form-horizontal form-label-left">
                    @csrf


                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="menuname">Name <span class="required">*</span>
                    </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="name" class="form-control col-md-7 col-xs-12 @error('name') is-invalid @enderror">
                            @error('name')
                            <div class="py-3" style="color:#f00">{{ $message }}</div>
                         @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-right">Sequence</label>
                        <div class="col-md-8">
                            <input type="number" class="form-control" name="sequence" value="" style="width:30%">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-right">Status</label>
                        <div class="col-md-8">
                            <select name="status" class="form-control">
                    <option value="1">Display</option>
                 <option value="0">Not Display</option>
               </select>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-success" style="margin:10px;">Submit</button>
                            <a href="noticetype-list.html" class="btn btn-primary">Cancel</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection