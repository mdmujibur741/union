@extends('layouts.admin')

@section('content')
<div class="col-sm-12">
    <div class="page-header" style="border:none">
        <h3 class="page-title">ট্যাক্স তালিকা</h3>
        <div class="col-sm-6" style="margin:0; padding:0">
            <ol class="breadcrumb" style="padding:13px;">
                <li><a href="index.html">Dashboard</a></li>
                <li class="active">ট্যাক্স তালিকা</li>
            </ol>
        </div>
        <div class="col-sm-6 breadcrumb pull-right" style="float:right; text-align:right">
            <a href="" style="color:#fff; margin-right:5px;" class="btn btn-danger btn-sm"><i class="fa fa-times"></i>
                Multiple Delete</a>
            <a href="{{route('admin.holding_tax.create',$id)}}" style="color:#fff; margin-right:0" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add New Tax </a>
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
                                <th width="34%">নাম  </th>
                                <th width="34%"> ধার্য্যকৃত   </th>
                                <th width="34%">অর্থ বছর</th>
                                <th width="34%">টাকা</th>
                                <th width="7%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            @foreach ($taxList as $key=>$item)
                            <tr class="tablerow">
                                <td><input type="checkbox" name="summe_code[]" value="" />
                                </td>
                                <td> {{$key+1}} </td>
                                <td> {{$item->holding->name}} </td>
                                <td> {{$item->holding->yearly_tax}} </td>
                                <td> {{$item->year->name}} </td>
                                <td> {{$item->tax}} </td>
                                <td align="center">
                                    <a href="{{route('admin.holding_tax.edit',$item->id)}}" class="btn btn-warning btn-xs" style="font-size: 12px; float:left; margin-right:5px;" title="Edit">
                                        <i class="fa fa-edit"></i></a>
                                    <a onclick="return confirm('Are you sure you want to delete this item?');"  href="{{route('admin.holding_tax.destroy',$item->id)}}" class="btn btn-danger btn-xs" style="font-size: 12px; float:left;"><i
                                                class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                          

                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection