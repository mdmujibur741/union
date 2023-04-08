@extends('layouts.admin')

@section('content')
<div class="col-sm-12">
    <div class="page-header">
        <h3 class="page-title">Edit Admin</h3>
        <ol class="breadcrumb">
            <li><a href="index.html">Dashboard</a></li>
            <li>Settings</li>
            <li class="active">Edit Admin</li>
            <li style="text-align:right; float:right">
                <a href="admins.html" style="color:#fff;"><i class="fa fa-list"></i> View Admin List</a>
            </li>
        </ol>
    </div>

</div>

   <div class="row-fluid">
    <div class="col-sm-12">
        <div class="card">

            <div class="row" style="margin:10px">
                <div class="">

                    <form action="{{route('admin.admin.update',$admin->id)}}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="col-sm-12">
                            <fieldset style="width:100%; height:auto; float:left; margin:20px 5px; padding:10px; text-align:center; border:1px solid #00CC66">
                                <legend style="width:25%; height:auto; text-transform:uppercase; color:#00CC66; border:none">General Information</legend>

                                <div class="col-md-6" style="padding:3px; margin:0">
                                    <div class="form-group">
                                        <label class="control-label" style="width:38%; float:left; text-align:right; margin:1% 1% 0 0;">
                                        Name<span style="color:#f00">*</span> : </label>
                                        <input type="text" class="inputFieldCss @error('name') is-invalid @enderror" name="name" value="{{$admin->name}}" placeholder="Name" >
                                        @error('name')
                                        <div class="alert  text-center" style="color:#f00">{{ $message }}</div>
                                     @enderror
                                    </div>
                                </div>

                                <div class="col-md-6" style="padding:3px; margin:0">
                                    <div class="form-group">
                                        <label class="control-label" style="width:38%; float:left; text-align:right; margin:1% 1% 0 0;">
                                        Contact No<span style="color:#f00">*</span> : </label>
                                        <input type="text" class="inputFieldCss @error('name') is-invalid @enderror" name="contact" value="{{$admin->contact}}" placeholder="Contact No" >
                                        @error('name')
                                        <div class="alert  text-center" style="color:#f00">{{ $message }}</div>
                                     @enderror
                                    </div>
                                </div>
                                <div class="col-md-6" style="padding:3px; margin:0">
                                    <div class="form-group">
                                        <label class="control-label" style="width:38%; float:left; text-align:right; margin:1% 1% 0 0;">Designation : </label>
                                        <input type="text" class="inputFieldCss @error('name') is-invalid @enderror" name="designation" value="{{$admin->designation}}" placeholder="Designation">
                                        @error('name')
                                        <div class="alert  text-center" style="color:#f00">{{ $message }}</div>
                                     @enderror
                                    </div>
                                </div>
                                <div class="col-md-6" style="padding:3px; margin:0">
                                    <div class="form-group">
                                        <label class="control-label" style="width:38%; float:left; text-align:right; margin:1% 1% 0 0;">Email : </label>
                                        <input type="email" class="inputFieldCss @error('email') is-invalid @enderror" value="{{$admin->email}}" name="email" placeholder="Email">
                                        @error('email')
                                        <div class="alert text-center " style="color:#f00">{{ $message }}</div>
                                     @enderror
                                    </div>
                                </div>
                                <div class="col-md-6" style="padding:3px; margin:0">
                                    <div class="form-group">
                                        <label class="control-label" style="width:38%; float:left; text-align:right; margin:1% 1% 0 0;">Photo : </label>
                                        <input type="file" class="inputFieldCss @error('image') is-invalid @enderror" name="image">
                                        @error('image')
                                        <div class="alert  text-center" style="color:#f00">{{ $message }}</div>
                                     @enderror
                                    </div>
                                </div>
                                <div class="col-md-6" style="padding:3px; margin:0">
                                    <div class="form-group">
                                        <label class="control-label" style="width:38%; float:left; text-align:right; margin:1% 1% 0 0;">Address : </label>
                                        <textarea class="inputFieldCss @error('address') is-invalid @enderror"  name="address" placeholder="Address">
                                        {{$admin->address}}
                                        </textarea>
                                        @error('address')
                                        <div class="alert  text-center" style="color:#f00">{{ $message }}</div>
                                     @enderror
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset style="width:100%; height:auto; float:left; margin:20px 5px; padding:10px; text-align:center; border:1px solid #E2B003">
                                <legend style="width:25%; border:none; height:auto; text-transform:uppercase; color:#E2B003">Login Information</legend>
                                <div class="col-md-6" style="padding:3px; margin:0">
                                    <div class="form-group">
                                        <label class="control-label" style="width:38%; float:left; text-align:right; margin:1% 1% 0 0;">
                                                Password<span style="color:#f00">*</span> : </label>
                                        <input type="password" class="inputFieldCss @error('password') is-invalid @enderror" name="password" placeholder="Password"  >
                                        @error('password')
                                        <div class="alert text-center" style="color:#f00">{{ $message }}</div>
                                     @enderror
                                    </div>
                                </div>
                                <div class="col-md-6" style="padding:3px; margin:0">
                                    <div class="form-group">
                                        <label class="control-label" style="width:38%; float:left; text-align:right; margin:1% 1% 0 0;">
                                               Retype Password<span style="color:#f00">*</span> : </label>
                                        <input type="password" class="inputFieldCss" name="password_confirmation" placeholder="Retype Password"  >
                                     
                                    </div>
                                </div>
                            </fieldset>

                            <button type="submit" class="btn btn-success btn-sm">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

