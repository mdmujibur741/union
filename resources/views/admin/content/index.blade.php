@extends('layouts.admin')
@section('content')
<div class="col-sm-12">
    <div class="page-header" style="border:none; margin:0; padding:0">
        <h3 class="page-title">View Article List</h3>
        <div class="col-sm-6" style="margin:0; padding:0">
            <ol class="breadcrumb" style="padding:13px;">
                <li><a href="index.html">Dashboard</a></li>
                <li>Settings</li>
                <li class="active">Article List</li>
            </ol>
        </div>
        <div class="col-sm-6 breadcrumb pull-right" style="float:right; text-align:right">

            <a href="#" style="color:#fff; margin-right:20px;" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Multiple Delete</a>
            <a href="contents-create-new.html" style="color:#fff; margin-right:20px" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Create New Article</a>
        </div>
    </div>

</div>
<div class="row-fluid">
    <div class="col-sm-12">
        <div class="card">

            <div class="card-block">
                <div class="row">
                    <form id="form_check">
                        <table id="responsive-datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th width="4%"><input name="checkbox" onclick='checkedAll();' type="checkbox" readonly="readonly" /></th>
                                    <th>Title</th>
                                    <th>Menu Name</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr class="tablerow">
                                    <td><input type="checkbox" name="" value="" /></td>
                                    <td>যোগাযোগের ঠিকানা</td>
                                    <td>যোগাযোগ</td>
                                    <td>2021-10-29 06:59:46</td>
                                    <td>2023-03-04 13:04:25</td>
                                    <td align="right">
                                        <div style="width:50%; float:left">
                                            <a href="contents-edit.html" class="btn btn-warning" style="font-size: 12px; float:left; padding:3px 5px"><i class="fa fa-edit"></i></a>
                                        </div>
                                        <div style="width:50%; float:left">
                                            <button type="button" class="btn btn-danger" style="font-size: 12px; float:left; padding:3px 5px"><i class="fa fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>



                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection