@extends('layouts.admin')

@section('content')
<div class="col-sm-12">
    <div class="page-header" style="border:none">
        <h3 class="page-title">View Notice Type List</h3>
        <div class="col-sm-5" style="margin:0; padding:0">
            <ol class="breadcrumb" style="padding:13px;">
                <li><a href="index.html">Dashboard</a></li>
                <li>Settings</li>
                <li class="active">Notice Type List</li>
            </ol>
        </div>
        <div class="col-sm-7 breadcrumb pull-right" style="float:right; text-align:right">
            <a style="color:#000; margin-right:20px;" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Approved</a>
            <a style="color:#000; margin-right:20px;" class="btn btn-warning btn-sm"><i class="fa fa-times"></i> Disapproved</a>
            <a style="color:#fff; margin-right:20px;" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Multiple Delete</a>
            <a href="notice-Category.html" style="color:#fff; margin-right:20px" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Create New Notice Type</a>
        </div>
    </div>
</div>
<div class="row-fluid">
    <div class="col-sm-12">
        <div class="card">

            <div class="card-block">
                <form id="form_check">
                    <div class="dataTables_wrapper form-inline dt-bootstrap4 no-footer">

                        <div class="row">
                            <div class="col-md-12">
                                <table id="responsive-datatable" class="table table-striped table-bordered dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="" style="width: 100%;">
                                    <thead>
                                        <tr role="row">
                                            <th width="2%" class="sorting_desc" tabindex="0" aria-controls="responsive-datatable" rowspan="1" colspan="1" aria-sort="descending" aria-label=": activate to sort column ascending" style="width: 24.1719px;"><input name="checkbox" onclick="checkedAll();" type="checkbox" readonly="readonly"></th>
                                            <th width="49%" class="sorting" tabindex="0" aria-controls="responsive-datatable" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" style="width: 742.438px;">Name</th>
                                            <th width="12%" align="right" class="sorting" tabindex="0" aria-controls="responsive-datatable" rowspan="1" colspan="1" aria-label="Action: activate to sort column descending" style="width: 153.391px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    @foreach ($noticeTypes as $key=>$item)
                                    <tr id="tablerow1" class="tablerow odd" role="row">
                                        <td class="sorting_1"><input type="checkbox" name="summe_code[]" id="summe_code1" value="1"></td>
                                        <td> {{$item->name}} </td>
                                        <td align="right">
                                            <div style="width:50%; float:left">
                                                <a href="{{route('admin.notice_types.edit', $item->id)}}" class="btn btn-warning" style="font-size: 12px; float:left; padding:3px 5px"><i class="fa fa-edit"></i> Edit</a>
                                            </div>
                                            <div style="width:50%; float:left">
                                              
                                                <a href="{{route('admin.notice_types.destroy',$item->id)}}" class="btn btn-danger" style="font-size: 12px; float:left; padding:3px 5px"><i class="fa fa-trash"></i>  </a>
                                               
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                     
                                    </tbody>
                                </table>
                                <div class="text-center">
                                    {{ $noticeTypes->links() }}
                                 </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="dataTables_info" id="responsive-datatable_info" role="status" aria-live="polite">Showing 1 to 3 of 3 entries</div>
                            </div>
                            <div class="col-md-7"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection