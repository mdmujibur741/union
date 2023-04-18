@extends('layouts.admin')

@section('content')
<div class="col-sm-12">
    <div class="page-header" style="border:none">
        <h3 class="page-title">View Menu List</h3>
        <div class="col-sm-5" style="margin:0; padding:0">
            <ol class="breadcrumb" style="padding:13px;">
                <li><a href="index.html">Dashboard</a></li>
                <li>Settings</li>
                <li class="active">Menu List</li>
            </ol>
        </div>
        <div class="col-sm-7 breadcrumb pull-right" style="float:right; text-align:right">

            <a href="#" style="color:#fff; margin-right:20px;" class="btn btn-danger btn-sm"><i class="fa fa-times"></i>
                Multiple Delete</a>
            <a href="Menu-create-new.html" style="color:#fff; margin-right:20px" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Create New Menu</a>
        </div>
    </div>
</div>
<div class="row-fluid">
    <div class="col-sm-12">
        <div class="card">

            <div class="card-block">
                <form id="form_check">
                    <table id="responsive-datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th width="2%"><input name="checkbox" onclick='checkedAll();' type="checkbox" readonly="readonly" /></th>
                                <th width="27%">ID</th>
                                <th width="27%">Menu Name</th>
                                <th width="27%">Structure</th>
                                <th width="27%">Sequence</th>
                                <th width="17%" align="right">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                         @foreach ($menus as $item)
                         <tr class="tablerow">
                            <td><input type="checkbox" name="" value="" />
                            </td>
                            <td> {{$item->id}} </td>
                            <td> {{$item->menu}} </td>
                            <td> {{$item->page_structure}} </td>
                            <td> {{$item->sequence}} </td>
                           
                            <td align="right">
                                <div style="width:50%; float:left">
                                    <a href="{{route('admin.menus.edit', $item->id)}}" class="btn btn-warning" style="font-size: 12px; float:left; padding:3px 5px"><i
                                                class="fa fa-edit"></i> </a>
                                </div>
                                <div style="width:50%; float:left">
                                    <a onclick="return confirm('Are you sure you want to delete this item?');"  href="{{route('admin.menus.destroy', $item->id)}}" class="btn btn-danger" style="font-size: 12px; float:left; padding:3px 5px"><i
                                                class="fa fa-trash"></i> </a>
                                </div>
                            </td>
                        </tr>
                         @endforeach

                        </tbody>
                    </table>
                    <div class="text-center">
                        {{ $menus->links() }}
                     </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection