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
                            <tr class="tablerow">
                                <td><input type="checkbox" name="" value="" /></td>
                                <td>1</td>
                                <td>ট্রেড লাইসেন্স</td>
                                <td>http://chambalup.org/shopinfo</td>
                                <td align="center">

                                    <a href="Usefull-edit.html" class="btn btn-warning btn-xs" style="font-size: 12px; float:left; margin-right:5px;" title="Edit">
                                        <i class="fa fa-edit"></i></a>
                                    <button type="button" class="btn btn-danger btn-xs" style="font-size: 12px; float:left;"><i class="fa fa-trash"></i></button>


                                </td>
                            </tr>

                            <tr>
                                <td colspan="10"></td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection