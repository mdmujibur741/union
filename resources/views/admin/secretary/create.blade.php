@extends('layouts.admin')

@section('content')
<div class="col-sm-12">
    <div class="page-header" style="border:none">
        <h3 class="page-title">Create New Secretary</h3>
        <ol class="breadcrumb">
            <li><a href="index.html">Dashboard</a></li>
            <li>Settings</li>
            <li class="active">New Secretary</li>
            <li style="text-align:right; float:right">
                <a href="Secretary-list.html" style="color:#fff;"><i class="fa fa-list"></i> View Secretary List</a>
            </li>
        </ol>
    </div>

</div>
<div class="row-fluid">
    <div class="col-sm-12">
        <div class="card">

            <div class="row" style="margin:10px">
                <form method="POST" action="{{route('admin.secretary.store')}}" enctype="multipart/form-data" id="tabs">
                  
                    @csrf
                    <div class="col-sm-12">
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">User Name
                            <span style="color:#ff0000; font-size:20px;">*</span></label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"  placeholder="Enter Secratary Name">
                                @error('name')
                                <div class="py-3 " style="color:#f00">{{ $message }}</div>
                             @enderror
                            </div>
                          
                        </div>
                        <div class="form-group row">
                            <label for="contact" class="col-md-2 col-form-label text-md-right">Contact</label>
                            <div class="col-md-6">
                                <input id="contact" type="text" class="form-control @error('contact') is-invalid @enderror" name="contact"  placeholder="Enter Contact No">
                                @error('contact')
                                <div class="py-3 " style="color:#f00">{{ $message }}</div>
                             @enderror
                            </div>
                           
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label text-md-right">Email</label>
                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter Email">
                                @error('email')
                                <div class="py-3 " style="color:#f00">{{ $message }}</div>
                             @enderror
                            </div>
                           
                        </div>

                        <div class="form-group row">
                            <label for="designation" class="col-md-2 col-form-label text-md-right">Designation</label>
                            <div class="col-md-6">
                                <input id="designation" type="text" class="form-control @error('designation') is-invalid @enderror" name="designation" >
                                @error('designation')
                                <div class="py-3 " style="color:#f00">{{ $message }}</div>
                             @enderror
                            </div>
                           
                        </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-2 col-form-label text-md-right">Password</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                                @error('password')
                                <div class="py-3 " style="color:#f00">{{ $message }}</div>
                             @enderror
                            </div>
                           
                        </div>

                        <div class="form-group row">
                            <label for="password_confirmation" class="col-md-2 col-form-label text-md-right">Retype Password</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation">
                                @error('password_confirmation')
                                <div class="py-3 " style="color:#f00">{{ $message }}</div>
                             @enderror
                            </div>
                           
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-2 col-form-label text-md-right">Address</label>
                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" placeholder="Enter Address Here">
                                @error('address')
                                <div class="py-3 " style="color:#f00">{{ $message }}</div>
                             @enderror
                            </div>
                         
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-md-2 col-form-label text-md-right">Photo</label>
                            <div class="col-md-6">
                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                                @error('image')
                                <div class="py-3 " style="color:#f00">{{ $message }}</div>
                             @enderror
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