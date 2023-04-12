@extends('layouts.admin')

@section('content')
<div class="col-sm-12">
    <div class="page-header" style="border:none">
        <h3 class="page-title">View Holding Info List</h3>
        <div class="col-sm-3" style="margin:0; padding:0">
            <ol class="breadcrumb" style="padding:13px;">
                <li><a href="index.html">Dashboard</a></li>
                <li>Holding Info</li>
            </ol>
        </div>
        <div class="col-sm-9 breadcrumb" style="float:right; text-align:right">
            <span style="margin-right:10px; font-size:15px">Total: 00</span>
            
            <a href="#" style="color:#fff; margin-right:0;" class="btn btn-danger btn-sm"><i class="fa fa-times"></i>
                Multiple Delete</a>
            <a href="Holding-new-create.html" style="color:#fff; margin-right:0" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Create New Holding Info</a>
            <a href="{{route('admin.holdings.export')}}" class="btn btn-success btn-sm" style="color:#fff"><i class="fa fa-download"></i> Export</a>
          <form action="{{route('admin.holdings.import')}}" method="post" enctype="multipart/form-data">
            @csrf
              <input type="file" name="file" class="bg-primary" style="width: 300px">
            <button  class="btn btn-info	 btn-sm" style="color:#fff" data-toggle="modal" data-target="#exampleModalLong"><i class="fa fa-upload"></i> Import</button>
        </form>
        </div>
    </div>
</div>
<div class="row-fluid " >
    <div class="col-sm-12" style="margin-bottom: 10px !important;">
        <div style="width:15%; float:left">
            <select name="" class="form-control" required>
                <option value="">সেবা সমূহ</option>
                                                <option value="">ট্রেড লাইসেন্স</option>
                                                <option value="">হোল্ডিং ট্যাক্স</option>
                                                <option value="">ডিজিটাল হোল্ডিং প্লেট</option>
                                        </select>
        </div>
        <div style="width:15%; float:left">
            <input type="text" name="holdingno" class="form-control" placeholder="হোল্ডিং নং" />
        </div>
        <div style="width:15%; float:left">
            <input type="text" name="wordno" class="form-control" placeholder="ওয়ার্ড নং" />
        </div>
        <div style="width:35%; float:left">
            <input type="text" name="keyword" class="form-control" placeholder="অনুসন্ধান করুন যেকোনো তথ্য দিয়ে..." />
        </div>
        <div style="width:15%; float:left"><button type="button" class="btn btn-primary btn-sm">অনুসন্ধান করুন</button></div>

    </div>

</div>


<div class="row-fluid">
    <div class="col-sm-12">
        <div class="card">

            <div class="card-block">
                <form id="form_check">
                    <div id="" class="dataTables_wrapper form-inline dt-bootstrap4 no-footer">

                        <div class="row">
                            <div class="col-md-12">
                                <table id="responsive-datatable" class="table table-striped table-bordered dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="responsive-datatable_info" style="width: 100%;">

                                    <thead>
                                        <tr role="row">
                                            <th width="1%" class="sorting_desc" tabindex="0" aria-controls="responsive-datatable" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 13px;" aria-sort="descending"><input name="checkbox" onclick="checkedAll();" type="checkbox" readonly="readonly"></th>
                                            <th width="10%" class="sorting" tabindex="0" aria-controls="responsive-datatable" rowspan="1" colspan="1" aria-label="Full Name: activate to sort column descending" style="width: 117.234px;">Sl</th>
                                            <th width="11%" class="sorting" tabindex="0" aria-controls="responsive-datatable" rowspan="1" colspan="1" aria-label="Username: activate to sort column descending" style="width: 145.969px;">Owner</th>
                                            <th width="19%" class="sorting" tabindex="0" aria-controls="responsive-datatable" rowspan="1" colspan="1" aria-label="Email: activate to sort column descending" style="width: 150.969px;">Spouce Name</th>
                                            <th width="12%" class="sorting" tabindex="0" aria-controls="responsive-datatable" rowspan="1" colspan="1" aria-label="Contact: activate to sort column descending" style="width: 80.4062px;">Village</th>
                                            <th width="20%" class="sorting" tabindex="0" aria-controls="responsive-datatable" rowspan="1" colspan="1" aria-label="Designation: activate to sort column descending" style="width: 120.625px;">Gender</th>
                                            <th width="7%" class="sorting" tabindex="0" aria-controls="responsive-datatable" rowspan="1" colspan="1" aria-label="Status: activate to sort column descending" style="width: 46.4062px;">Status</th>
                                            <th width="20%" align="right" class="sorting" tabindex="0" aria-controls="responsive-datatable" rowspan="1" colspan="1" aria-label="Action: activate to sort column descending" style="width: 110.3906px;">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                    @foreach ($holdings as $key=>$item)
                                        
                                  
                                        <tr id="tablerow10" class="tablerow odd" role="row">
                                            <td class="sorting_1"><input type="checkbox" name="summe_code[]" id="summe_code1" value="10">
                                            </td>
                                            <td> {{$key+1}} </td>
                                            <td> {{$item->name}} </td>
                                            <td> {{$item->spouse_name}} </td>
                                            <td>{{$item->village}} </td>
                                            <td>{{$item->gender}}</td>
                                            <th width="7%" align="center"><span style="background:#006600; padding:3px 8px; border-radius:5px; margin:2px;float:left; font-size:16px;text-align:center"><i
                                                        class="fa fa-check"></i> </span></th>
                                            <td align="right">
                                                <div style="width:33%; float:left">
                                                    <a href="{{route('admin.holding_tax.index',$item->id)}}" class="btn btn-primary" style="font-size: 12px; float:left; padding:3px 5px">
                                                       Tax 
                                                    </a>
                                                </div>
                                                <div style="width:33%; float:left">
                                                    <a href="{{route('admin.holdings.edit',$item->id)}}" class="btn btn-warning" style="font-size: 12px; float:left; padding:3px 5px"><i
                                                            class="fa fa-edit"></i> </a>
                                                </div>
                                                <div style="width:33%; float:left">

                                                    <a href="{{route('admin.admin.destroy',$item->id)}}" class="btn btn-danger" style="font-size: 12px; float:left; padding:3px 5px"><i class="fa fa-trash"></i>  </a>
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="text-center">
                                    {{ $holdings->links() }}
                                 </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection