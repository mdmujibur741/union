@extends('layouts.admin')

@section('content')
<div class="col-sm-12">
    <div class="page-header" style="border:none">
        <h3 class="page-title">View Employee List</h3>
        <div class="col-sm-4" style="margin:0; padding:0">
            <ol class="breadcrumb" style="padding:13px;">
                <li><a href="index.html">Dashboard</a></li>
                <li>Settings</li>
                <li class="active">Employee List</li>
            </ol>
        </div>
        <div class="col-sm-8 breadcrumb pull-right" style="float:right; text-align:right">
            <a href="#" style="color:#000; margin-right:20px;" class="btn btn-success btn-sm"><i
                    class="fa fa-check"></i> Approved</a>
            <a href="#" style="color:#000; margin-right:20px;" class="btn btn-warning btn-sm"><i
                    class="fa fa-times"></i> Disapproved</a>
            <a href="#" style="color:#fff; margin-right:20px;" class="btn btn-danger btn-sm"><i class="fa fa-times"></i>
                Multiple Delete</a>
            <a href="members-create-new.html" style="color:#fff; margin-right:20px" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Create New Employee</a>
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
                                <th width="4%"><input name="checkbox" onclick='checkedAll();' type="checkbox" readonly="readonly" /></th>
                                <th width="13%">Name</th>
                                <th width="24%">Designation</th>
                                <th width="24%">Department</th>
                                <th width="24%">Branch</th>
                                <th width="24%">Mobile</th>
                                <th width="24%">Email</th>
                                <th width="27%">Sequence</th>
                                <th width="22%">Image</th>
                                <th width="10%">Status</th>
                                <th width="12%" align="right">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                       @foreach ($members as $key=>$item)
                       <tr class="tablerow">
                        <td><input type="checkbox" name="summe_code[]" value="38" />
                        </td>
                        <td> {{$item->name}} </td>
                        <td> {{$item->designation}} </td>
                        <td>{{$item->department}} </td>
                        <td> {{$item->branch}}</td>
                        <td> {{$item->mobile}} </td>
                        <td> {{$item->email}} </td>
                        <td>{{$item->sequence}} </td>
                        <td><img src="{{'/storage/'.$item->image}}" style="width:60px; height:auto" /></td>
                        <th width="10%" align="center"><span style="background:#006600; padding:3px 8px; border-radius:5px; margin:2px;float:left; font-size:16px;text-align:center"><i class="fa fa-check"></i> </span></th>
                        <td align="right">
                            <div style="width:50%; float:left">
                                <a href="{{route('admin.members.edit',$item->id)}}" class="btn btn-warning" style="font-size: 12px; float:left; padding:3px 5px"><i
                                            class="fa fa-edit"></i></a>
                            </div>
                            <div style="width:50%; float:left">
                                <a href="{{route('admin.members.destroy',$item->id)}}" class="btn btn-danger" style="font-size: 12px; float:left; padding:3px 5px"><i
                                            class="fa fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                       @endforeach


                        </tbody>
                    </table>
                    <div class="text-center">
                        {{ $members->links() }}
                     </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection