@extends('layouts.admin')

@section('content')
<div class="col-sm-12">
    <div class="page-header" style="border:none">
        <h3 class="page-title">View Money Receipt List</h3>
        <div class="col-sm-4" style="margin:0; padding:0">
            <ol class="breadcrumb" style="padding:13px;">
                <li><a href="index.html">Dashboard</a></li>
                <li>Settings</li>
                <li class="active">Money Receipt List</li>
            </ol>
        </div>
        <div class="col-sm-8 breadcrumb pull-right" style="float:right; text-align:right">
            <a href="#" style="color:#000; margin-right:20px;" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Approved</a>
            <a href="#" style="color:#000; margin-right:20px;" class="btn btn-warning btn-sm"><i class="fa fa-times"></i> Disapproved</a>
            <a href="#;" style="color:#fff; margin-right:20px;" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Multiple Delete</a>
            <a href="Money-Receipt-new-create.html" style="color:#fff; margin-right:20px" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Create New Money Receipt</a>
        </div>
    </div>
</div>
<div class="row-fluid">
    <div class="col-sm-12">
        <div class="card">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">

                    <div class="dataTables_filter">

                        <label><i class="fa-solid fa-magnifying-glass"></i>
                            <input type="search" class="form-control input-sm" placeholder="" aria-controls="responsive-datatable"></label></div>
                </div>
            </div>
            <div class="card-block">
                <form id="form_check">
                    <div style="overflow-x:auto; max-width:1024px;">
                        <table class="table-striped table-bordered table" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th width="4%"><input name="checkbox" onclick='checkedAll();' type="checkbox" readonly="readonly" /></th>
                                  
                                    <th>দাতার নাম</th>
                                    <th>গ্রহীতার নাম</th>
                                    <th>গ্রহীতার মোবাইল নং</th>
                                    <th>উদ্দেশ্য</th>
                                    <th>টাকার পরিমাণ</th>
                                    <th>পাঠানোর তারিখ</th>
                                    <th>মতামত</th>
                                    <th>অ্যাকশান</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($receipts as $key=>$item)
                                <tr id="tablerow1" class="tablerow">
                                    <td><input type="checkbox" name="summe_code[]" value="1" /></td>
                                  
                                    <td> {{$item->sender_name}} </td>
                                    <td> {{$item->receiver_name}} </td>
                                    <td>{{$item->receiver_contact}} </td>
                                    <td>{{$item->purpose}} </td>
                                    <td> {{$item->amount}} </td>
                                    <td> {{$item->data}} </td>
                                    <td> {{$item->remark}} </td>
                                    <td align="right">
                                        <div style="width:33%; float:left">
                                            <a href="{{route('admin.receipts.edit',$item->id)}}" class="btn btn-warning" style="font-size: 12px; float:left; padding:3px 5px"><i class="fa fa-edit"></i></a>
                                        </div>
                                        <div style="width:33%; float:left">
                                            <a href="{{route('admin.receipts.destroy',$item->id)}}" class="btn btn-danger" style="font-size: 12px; float:left; padding:3px 5px"><i class="fa fa-trash"></i></a>
                                        </div>
                                     
                                        <div style="width:33%; float:left">
                                            <a href="#" class="btn btn-success btn-sm" style="padding:2px 5px; font-size:12px;" target="_blank">
                                                <i class="fa fa-print"></i></a>
                                        </div>

                                       

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection