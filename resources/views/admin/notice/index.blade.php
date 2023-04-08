@extends('layouts.admin')

@section('content')
<div class="col-sm-12">
    <div class="page-header" style="border:none">
        <h3 class="page-title">View Notice List</h3>
        <div class="col-sm-5" style="margin:0; padding:0">
            <ol class="breadcrumb" style="padding:13px;">
                <li><a href="index.html">Dashboard</a></li>
                <li>Settings</li>
                <li class="active">Notice List</li>
            </ol>
        </div>
        <div class="col-sm-7 breadcrumb pull-right" style="float:right; text-align:right">
            <a href="#" style="color:#000; margin-right:20px;" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Approved</a>
            <a href="#" style="color:#000; margin-right:20px;" class="btn btn-warning btn-sm"><i class="fa fa-times"></i> Disapproved</a>
            <a href="#" style="color:#fff; margin-right:20px;" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Multiple Delete</a>
            <a href="Notice-new-create.html" style="color:#fff; margin-right:20px" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Create New Notice</a>
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
                            <div class="col-md-6"></div>
                            <div class="col-md-6">

                                <div class="dataTables_filter">

                                    <label><i class="fa-solid fa-magnifying-glass"></i>
                                        <input type="search" class="form-control input-sm" placeholder="" aria-controls="responsive-datatable"></label></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-striped table-bordered dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="" style="width: 100%;">
                                    <thead>
                                        <tr role="row">
                                            <th width="4%" class="sorting_desc" tabindex="0" aria-controls="responsive-datatable" rowspan="1" colspan="1" style="width: 13px;" aria-label="" aria-sort="descending"><input name="checkbox" type="checkbox" readonly=""></th>
                                            <th width="13%" class="sorting" tabindex="0" aria-controls="responsive-datatable" rowspan="1" colspan="1" style="width: 94px;" aria-label="">Notice Type</th>
                                            <th width="13%" class="sorting" tabindex="0" aria-controls="responsive-datatable" rowspan="1" colspan="1" style="width: 90px;" aria-label="">Name</th>
                                            <th width="24%" class="sorting" tabindex="0" aria-controls="responsive-datatable" rowspan="1" colspan="1" style="width: 193px;" aria-label="">Details</th>
                                            <th width="22%" class="sorting" tabindex="0" aria-controls="responsive-datatable" rowspan="1" colspan="1" style="width: 174px;" aria-label="">Image</th>
                                            <th width="10%" class="sorting" tabindex="0" aria-controls="responsive-datatable" rowspan="1" colspan="1" style="width: 65px;" aria-label="">Sequence</th>
                                            <th width="10%" class="sorting" tabindex="0" aria-controls="responsive-datatable" rowspan="1" colspan="1" style="width: 63px;" aria-label="">Status</th>
                                            <th width="12%" align="right" class="sorting" tabindex="0" aria-controls="responsive-datatable" rowspan="1" colspan="1" style="width: 39px;" aria-label="">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach ($notices as $key=>$item)
                                              
                                         <tr>
                                               <td> {{$key+1}} </td>
                                               <td> {{$item->noticeType->name}} </td>
                                               <td> {{$item->headline}} </td>
                                               <td> {!!$item->details!!} </td>
                                               <td> <img src="{{'/storage/' .$item->image}}" alt="" width="60px"> </td>
                                               <td>{{$item->sequence}} </td>
                                               <td>{{$item->status}} </td>
                                               <td align="center">


                                                <a href="" class="btn btn-info btn-xs" style="font-size: 12px; float:left; margin-right:5px;" title="Details">
                                                    <i class="fa fa-file"></i></a>
                                                <a href="{{route('admin.notices.edit',$item->id)}}" class="btn btn-warning btn-xs" style="font-size: 12px; float:left; margin-right:5px;" title="Edit">
                                                    <i class="fa fa-edit"></i></a>
                                             
            
                                                    <a href="{{route('admin.notices.destroy',$item->id)}}" class="btn btn-danger" style="font-size: 12px; float:left; padding:3px 5px"><i class="fa fa-trash"></i>  </a>
            
                                            </td>
                                         </tr>

                                         @endforeach
                                        <tr class="odd">
                                            <td valign="top" colspan="8" class="dataTables_empty">No data available in table</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="text-center">
                                    {{ $notices->links() }}
                                 </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="dataTables_info" id="responsive-datatable_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div>
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