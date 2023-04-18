@extends('layouts.admin')

@section('content')
    <div class="col-sm-12">
        <div class="page-header">
            <h3 class="page-title">Create New Menu</h3>
            <ol class="breadcrumb">
                <li><a href="index.html">Dashboard</a></li>
                <li>Settings</li>
                <li class="active">New Menu</li>
                <li style="text-align:right; float:right">
                    <a href="Menu-list.html" style="color:#fff;"><i class="fa fa-list"></i> View Menu
                        List</a>
                </li>
            </ol>
        </div>

    </div>
    <div class="row-fluid">
        <div class="col-sm-12">
            <div class="card">

                <div class="row" style="margin:10px">
                    <form action="{{ route('admin.menus.store') }}" method="post" class="form-horizontal form-label-left">
                        @csrf

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="menuname">Menu Name <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="menu"
                                    class="form-control @error('menu') is-invalid @enderror col-md-7 col-xs-12">
                                @error('menu')
                                    <div class="py-3 " style="color:#f00">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="parent_id">Parent Menu
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="parent_id" class="form-control @error('parent_id') is-invalid @enderror">
                                        <option value="">নাই</option>
                                  @foreach ($parents as $item)
                                       <option value="{{$item->id}}">{{$item->menu}}</option>
                                  @endforeach

                                </select>
                                @error('parent_id')
                                    <div class="py-3 " style="color:#f00">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="menuname">Page Structure
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="page_structure" class="form-control @error('page_structure') is-invalid @enderror">
                                     @foreach ($structure as $item)
                                          <option value="{{$item}}">{{$item}} </option>
                                     @endforeach
                                </select>
                                @error('page_structure')
                                    <div class="py-3 " style="color:#f00">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sequence">Sequence
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="number" class="form-control @error('sequence') is-invalid @enderror"
                                    name="sequence" value="" style="width:30%">
                                @error('sequence')
                                    <div class="py-3 " style="color:#f00">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button type="submit" class="btn btn-success" style="margin:10px;">Submit</button>

                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
