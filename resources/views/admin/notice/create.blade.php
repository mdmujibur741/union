@extends('layouts.admin')

@section('content')
<div class="col-sm-12">
    <div class="page-header">
        <h3 class="page-title">Create New Notice</h3>
        <ol class="breadcrumb">
            <li><a href="index.html">Dashboard</a></li>
            <li>Settings</li>
            <li class="active">New Notice</li>
            <li style="text-align:right; float:right">
                <a href="Notice-view.html" style="color:#fff;"><i class="fa fa-list"></i> View Notice List</a>
            </li>
        </ol>
    </div>

</div>
<div class="row-fluid">
    <div class="col-sm-12">
        <div class="card">

            <div class="row" style="margin:10px">
                <div class="col-sm-12">
                    <form method="post" action="{{route('admin.notices.store')}}" enctype="multipart/form-data">
                       @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">Notice Type</label>
                            <div class="col-md-6">
                                <select name="type_id" class="form-control @error('type_id') is-invalid @enderror">
                                                        @foreach ($notice_type as $item)
                                                        <option value="{{$item->id}}"> {{$item->name}} </option>
                                                        @endforeach   
                                                       
                                                </select>
                                                @error('type_id')
                                                <div class="py-3" style="color:#f00">{{ $message }}</div>
                                             @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">Notice Headline</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control @error('headline') is-invalid @enderror" name="headline" >
                                @error('headline')
                                <div class="py-3" style="color:#f00">{{ $message }}</div>
                             @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">Notice Details</label>
                            <div class="col-md-8">
                                <textarea class="form-control ckeditor @error('details') is-invalid @enderror" name="details"  ></textarea>
                                @error('details')
                                <div class="py-3" style="color:#f00">{{ $message }}</div>
                             @enderror
                            </div>
                        </div>
                              
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">Image</label>
                            <div class="col-md-8">
                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                                @error('image')
                                <div class="py-3" style="color:#f00">{{ $message }}</div>
                             @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">Sequence</label>
                            <div class="col-md-8">
                                <input id="" type="number" class="form-control @error('sequence') is-invalid @enderror" name="sequence" value="" style="width:30%">
                                @error('sequence')
                                <div class="py-3" style="color:#f00">{{ $message }}</div>
                             @enderror
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