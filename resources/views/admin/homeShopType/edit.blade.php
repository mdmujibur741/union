@extends('layouts.admin')

@section('content')
<div class="col-sm-12">
    <div class="page-header" style="border:none">
        <h3 class="page-title">EditHouse/Shop Type</h3>
        <ol class="breadcrumb">
            <li><a href="index.html">Dashboard</a></li>
            <li>Settings</li>
            <li class="active">New House/Shop Type</li>
        
        </ol>
    </div>

</div>
<div class="row-fluid">
    <div class="col-sm-12">
        <div class="card">

            <div class="row" style="margin:10px">
                <form method="POST" action="{{route('admin.home_shop_types.update', $type->id)}}" >
                   @csrf
                   @method('put')
                    <div class="col-sm-12">
                        <div class="col-sm-6">

                            <div class="form-group row">
                                <label for="type" class="col-md-4 col-form-label text-md-right">Type
                                    <span style="color:#ff0000; font-size:20px;">*</span></label>
                                <div class="col-md-8"> 
                                    <select name="type" id="type" value="{{$type->type}}" class="form-control  @error('type') is-invalid @enderror">
                                        @foreach ($allType as $item)
                                             <option value="{{$item}}" @if($item == $type->type) selected @endif > {{$item}} </option>
                                        @endforeach
                                    </select>
                                    @error('type')
                                    <div class="py-3" style="color:#f00">{{ $message }}</div>
                                 @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Title
                                    <span style="color:#ff0000; font-size:20px;">*</span></label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control  @error('title') is-invalid @enderror" name="title" value="{{$type->title}}">
                                    @error('title')
                                    <div class="py-3" style="color:#f00">{{ $message }}</div>
                                 @enderror
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                               Update
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection