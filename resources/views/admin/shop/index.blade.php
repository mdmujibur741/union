@extends('layouts.admin')

@section('content')
<div class="col-sm-12">
    <div class="page-header" style="border:none">
        <h3 class="page-title">View Shop Info List</h3>
        <div class="col-sm-3" style="margin:0; padding:0">
            <ol class="breadcrumb" style="padding:13px;">
                <li><a href="index.html">Dashboard</a></li>
                <li>Shop Info</li>
            </ol>
        </div>
        <div class="col-sm-9 breadcrumb" style="float:right; text-align:right">
            <span style="margin-right:10px; font-size:15px">Total: 100</span>
            <a href="#" style="color:#000; margin-right:0;" class="btn btn-success btn-sm"><i class="fa fa-check"></i>
                Approved</a>
            <a href="#" style="color:#000; margin-right:0;" class="btn btn-warning btn-sm"><i class="fa fa-times"></i>
                Disapproved</a>
            <a href="#" style="color:#fff; margin-right:0;" class="btn btn-danger btn-sm"><i class="fa fa-times"></i>
                Multiple Delete</a>
            <a href="Shop-new-create.html" style="color:#fff; margin-right:0" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Create New Shop Info</a>
            <a href="#" class="btn btn-success btn-sm" style="color:#fff"><i class="fa fa-download"></i> Export</a>
            <a href="#" class="btn btn-info	 btn-sm" style="color:#fff" data-toggle="modal" data-target="#exampleModalLong"><i class="fa fa-upload"></i> Import</a>
        </div>
    </div>
</div>
<div class="row-fluid">
    <div class="col-sm-12">

        <div style="width:60%; float:left; margin-bottom:10px">
            <input type="text" name="keyword" class="form-control" placeholder="অনুসন্ধান করুন যেকোনো তথ্য দিয়ে..." />
        </div>

        <div style="width:25%; float:left"><button type="button" class="btn btn-primary btn-sm">অনুসন্ধান করুন</button></div>

    </div>
    <div class="col-sm-12">
        <div class="card">


            <form id="form_check">
                <div style="overflow-x:auto; max-width:1024px;">
                    <div>
                        <table id="responsive-datatable" class="table-striped table-bordered table" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th width="4%"><input name="checkbox" onclick='checkedAll();' type="checkbox" readonly="readonly" /></th>
                                    
                                    <th>প্রতিষ্ঠানের নাম</th>
                                    <th>মালিকের নাম</th>
                                    <th>পিতার নাম</th>
                                    <th>ঠিকানা</th>
                                    <th>মোবাইল নং</th>
                                    <th>মূলধন</th>
                                    <th>ধ্যার্য</th>                               
                                    <th>অ্যাকশান</th>

                                </tr>
                            </thead>
                            <tbody>

                            
                            @foreach ($shops as $key=>$item)
                            <tr class="tablerow">
                                <td><input type="checkbox" name="" id="" value="" /></td>
                        
                                <td> {{$item->organization}} </td>
                                <td>{{$item->name}} </td>
                                <td>{{$item->father}}</td>
                                <td>{{$item->address}} </td>
                                <td>{{$item->mobile}}</td>
                                <td> {{$item->budget}} </td>
                                <td> {{$item->annually_tax}} </td>
                        
                                <td >
                                   <div class="d-flex">
                                    <a href="{{route('admin.shop_tax.index', $item->id)}}" class="btn btn-primary " style="font-size: 12px; float:left; margin-right:3px; padding:3px 5px">
                                        Tax</a>
                                    <a href="{{route('admin.shops.edit', $item->id)}}" class="btn btn-warning " style="font-size: 12px; float:left; margin-right:3px; padding:3px 5px"><i
                                        class="fa fa-edit"></i></a>
                                        <a href="{{route('admin.shops.destroy',$item->id)}}" class="btn btn-danger" style="font-size: 12px; float:left; padding:3px 5px"><i class="fa fa-trash"></i>  </a>
                      
                    
                                   </div>

                                </td>
                            </tr>

                            @endforeach


                            </tbody>
                        </table>
                        <div class="text-center">
                            {{ $shops->links() }}
                         </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection