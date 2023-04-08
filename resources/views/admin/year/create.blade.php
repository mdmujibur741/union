@extends('layouts.admin')

@section('content')
<div class="col-sm-12">
    <div class="page-header" style="border:none">
        <h3 class="page-title">Create New House Type</h3>
        <ol class="breadcrumb">
            <li><a href="index.html">Dashboard</a></li>
            <li>Settings</li>
            <li class="active">New House Type</li>
            <li style="text-align:right; float:right">
                <a href="Budget-years.html" style="color:#fff;"><i class="fa fa-list"></i> View
                    House Type List</a>
            </li>
        </ol>
    </div>

</div>
<div class="row-fluid">
    <div class="col-sm-12">
        <div class="card">

            <div class="row" style="margin:10px">
                <form method="POST" action="{{route('admin.years.store')}}" enctype="">
                    @csrf
                    <div class="col-sm-12">
                        <div class="col-sm-6">

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Title
                                    <span style="color:#ff0000; font-size:20px;">*</span></label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"  >
                                    @error('name')
                                    <div class="py-3" style="color:#f00">{{ $message }}</div>
                                 @enderror
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