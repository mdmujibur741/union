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
                <form method="" action="" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="">
                    <div class="col-sm-12">
                        <div class="col-sm-6">

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Title
                            <span style="color:#ff0000; font-size:20px;">*</span></label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="name" value="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Type
                            <span style="color:#ff0000; font-size:20px;">*</span></label>
                                <div class="col-md-8">
                                    <select name="type" class="form-control" required>
                                       <option value="">Select Type</option>
                                    <option value="url">URL</option>
                                    <option value="login">User Login</option>
                               </select>
                                </div>
                            </div>

                            <div class="form-group row" style="display:none">
                                <label for="name" class="col-md-4 col-form-label text-md-right">URL
                            <span style="color:#ff0000; font-size:20px;">*</span></label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="links" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Image</label>
                                <div class="col-md-8">
                                    <input type="file" class="form-control" name="image">
                                </div>
                            </div>

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
@endsection