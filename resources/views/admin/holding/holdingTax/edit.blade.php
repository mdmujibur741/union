@extends('layouts.admin')

@section('content')
<div class="col-sm-12">
    <div class="page-header" style="border:none">
        <h3 class="page-title">Create New Tax</h3>
        <ol class="breadcrumb">
            <li><a href="index.html">Dashboard</a></li>
            <li>Settings</li>
            <li class="active">New Tax</li>
            <li style="text-align:right; float:right">
                <a href="tax-list.html" style="color:#fff;"><i class="fa fa-list"></i> View
                    Tax List</a>
            </li>
        </ol>
    </div>

</div>
<div class="row-fluid">
    <div class="col-sm-12">
        <div class="card">

            <div class="row" style="margin:10px">
                <form method="POST" action="{{route('admin.holding_tax.update',$tax->id)}}" enctype="">
                   @csrf
                   @method('put')
                    <div class="col-sm-12">
                        <div class="col-sm-8">

                           

                        

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">অর্থ বছর
                                    <span style="color:#ff0000; font-size:20px;">*</span></label>
                                <div class="col-md-8">
                                    <select name="year_id" class="form-control @error('year_id') is-invalid @enderror">
                                        <option value="">Select</option>
                                           @foreach ($years as $item)
                                               <option value="{{$item->id}}" @if($item->id==$tax->year_id) selected @endif> {{$item->name}} </option>
                                           @endforeach                                                    
                                      </select>
                                      @error('year_id')
                                      <div class="py-3" style="color:#f00">{{ $message }}</div>
                                   @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">টাকা
                                    <span style="color:#ff0000; font-size:20px;">*</span></label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control @error('tax') is-invalid @enderror" name="tax" value="{{$tax->tax}}" >
                                    @error('tax')
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