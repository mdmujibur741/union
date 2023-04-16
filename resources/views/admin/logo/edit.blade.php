@extends('layouts.admin')

@section('content')
<div class="col-sm-12">
    <div class="page-header">
        <h3 class="page-title">Edit Logo</h3>
        <ol class="breadcrumb">
            <li><a href="index.html">Dashboard</a></li>
            <li>Settings</li>
            <li class="active">Edit Logo</li>
            <li style="text-align:right; float:right">
                <a href="Logo-list.html" style="color:#fff;"><i class="fa fa-list"></i> View Logo List</a>
            </li>
        </ol>
    </div>

</div>
<div class="row-fluid">
    <div class="col-sm-12">
        <div class="card">
           				

            <div class="row" style="margin:10px">
                <div class="col-sm-offset-2">
                    <form method="POST" action="{{route('admin.logos.update', $logo->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">Logo Caption</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{$logo->caption}}">
                                @error('caption')
                                <div class="py-3 " style="color:#f00">{{ $message }}</div>
                             @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">Image</label>
                            <div class="col-md-6">
                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                                @error('image')
                                <div class="py-3 " style="color:#f00">{{ $message }}</div>
                             @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">URL (Optional)</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{$logo->url}}">
                                @error('url')
                                <div class="py-3 " style="color:#f00">{{ $message }}</div>
                             @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">Meta Details</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('meta_details') is-invalid @enderror" name="meta_details" value="{{$logo->meta_details}}">
                                @error('meta_details')
                                <div class="py-3 " style="color:#f00">{{ $message }}</div>
                             @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">Keywords</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('keywords') is-invalid @enderror" name="keywords" value="{{$logo->keywords}}" >
                                @error('keywords')
                                <div class="py-3 " style="color:#f00">{{ $message }}</div>
                             @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">Sequence</label>
                            <div class="col-md-6">
                                <input type="number" class="form-control @error('sequence') is-invalid @enderror" name="sequence" value="{{$logo->sequence}}" style="width:30%">
                                @error('sequence')
                                <div class="py-3 " style="color:#f00">{{ $message }}</div>
                             @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">Status</label>
                            <div class="col-md-6">
                                <select name="status" class="form-control @error('status') is-invalid @enderror">
                                  @foreach ($displays as $key=>$item)
                                  <option value="{{$key}}" @if($logo->status ==$key) selected @endif>{{$item}}</option>
                                  @endforeach
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