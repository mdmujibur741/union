@extends('layouts.admin')

@section('content')
<div class="col-sm-12">
    <div class="page-header" style="border:none">
        <h3 class="page-title">View Usefull Link List</h3>
        <div class="col-sm-6" style="margin:0; padding:0">
            <ol class="breadcrumb" style="padding:13px;">
                <li><a href="index.html">Dashboard</a></li>
                <li class="active">Usefull Link List</li>
            </ol>
        </div>
        <div class="col-sm-6 breadcrumb pull-right" style="float:right; text-align:right">
            <a href="#" style="color:#fff; margin-right:5px;" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Multiple Delete</a>
            <a href="Usefull-create-new.html" style="color:#fff; margin-right:0" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add New Type</a>
        </div>
    </div>
</div>
<div class="row-fluid">
    <div class="col-sm-12">
        <div class="card">

            <div class="card-block">
                <form id="form_check">
                    <table width="100%" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="2%"><input name="checkbox" onclick='checkedAll();' type="checkbox" readonly="readonly" /></th>
                                <th width="4%" height="22">SI</th>
                                <th width="34%">Site name</th>
                                <th width="34%">Usefull Link</th>
                                <th width="7%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($useFullLinks as $item)
                           <tr class="tablerow">
                            <td><input type="checkbox" name="" value="" /></td>
                            <td>{{$item->id}} </td>
                            <td> {{$item->title}} </td>
                            <td> {{$item->link}} </td>
                            <td align="center">

                                <a href="{{route('admin.usefulls.edit', $item->id)}}" class="btn btn-warning btn-xs" style="font-size: 12px; float:left; margin-right:5px;" title="Edit">
                                    <i class="fa fa-edit"></i></a>
                                <a onclick="return confirm('Are you sure you want to delete this item?');"  href="{{route('admin.usefulls.destroy', $item->id)}}" class="btn btn-danger btn-xs" style="font-size: 12px; float:left;"><i class="fa fa-trash"></i></a>


                            </td>
                        </tr>
                           @endforeach

                            <tr>
                                <td colspan="10"></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="text-center">
                        {{ $useFullLinks->links() }}
                     </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection