@extends('layouts.admin')

@section('content')
<div class="col-sm-12">
    <div class="page-header">
        <h3 class="page-title">Create New Employee</h3>
        <ol class="breadcrumb">
            <li><a href="index.html">Dashboard</a></li>
            <li>Settings</li>
            <li class="active">New Employee</li>
            <li style="text-align:right; float:right">
                <a href="members-list.html" style="color:#fff;"><i class="fa fa-list"></i> View
                    Employee List</a>
            </li>
        </ol>
    </div>

</div>
<div class="row-fluid">
    <div class="col-sm-12">
        <div class="card">

            <div class="row" style="margin:10px">
                <div class="col-sm-12">
                    <form method="POST" action="{{route('admin.members.store')}}" enctype="multipart/form-data">
                       @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">Name</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"  >
                                @error('name')
                                <div class="py-3 " style="color:#f00">{{ $message }}</div>
                             @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="designation" class="col-md-2 col-form-label text-md-right">Designation</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('designation') is-invalid @enderror" name="designation" value="">
                                @error('designation')
                                <div class="py-3 " style="color:#f00">{{ $message }}</div>
                             @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="department" class="col-md-2 col-form-label text-md-right">Department</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('department') is-invalid @enderror" name="department" >
                                @error('department')
                                <div class="py-3 " style="color:#f00">{{ $message }}</div>
                             @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="branch" class="col-md-2 col-form-label text-md-right">Branch</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('type') is-invalid @enderror" name="branch" >
                                @error('branch')
                                <div class="py-3 " style="color:#f00">{{ $message }}</div>
                             @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="contact" class="col-md-2 col-form-label text-md-right">Mobile No.</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" >
                                @error('mobile')
                                <div class="py-3 " style="color:#f00">{{ $message }}</div>
                             @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label text-md-right">Email</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" >
                                @error('email')
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
                            <label class="col-md-2 col-form-label text-md-right" for="menuname">Sequence
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="number" class="form-control @error('sequence') is-invalid @enderror" name="sequence"  style="width:30%">
                                @error('sequence')
                                <div class="py-3 " style="color:#f00">{{ $message }}</div>
                             @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">Status</label>
                            <div class="col-md-8">
                                <select name="status" class="form-control @error('status') is-invalid @enderror">
                                    <option value="1">Display</option>
                                    <option value="0">Not Display</option>
                                </select>
                                @error('status')
                                <div class="py-3 " style="color:#f00">{{ $message }}</div>
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