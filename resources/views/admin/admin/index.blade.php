@extends('layouts.admin')
@section('content')
<div class="col-sm-12">
    <div class="page-header" style="border:none">
        <h3 class="page-title">View Admin List</h3>
        <div class="col-sm-5" style="margin:0; padding:0">
            <ol class="breadcrumb" style="padding:13px;">
                <li><a href="/dashboard">Dashboard</a></li>
                <li>Settings</li>
                <li class="active">Admin List</li>
            </ol>
        </div>
        <div class="col-sm-7 breadcrumb pull-right" style="float:right; text-align:right">
            <a href="#" style="color:#000; margin-right:20px;" class="btn btn-success btn-sm"><i
                    class="fa fa-check"></i> Approved</a>
            <a href="#" style="color:#000; margin-right:20px;" class="btn btn-warning btn-sm"><i
                    class="fa fa-times"></i> Disapproved</a>
            <a href="#" style="color:#fff; margin-right:20px;" class="btn btn-danger btn-sm"><i
                    class="fa fa-times"></i> Multiple Delete</a>
            <a href="#" style="color:#fff; margin-right:20px" class="btn btn-primary btn-sm"><i
                    class="fa fa-plus"></i> Create New Admin</a>
        </div>
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
                                            <th width="21%" class="sorting" tabindex="0" aria-controls="responsive-datatable" rowspan="1" colspan="1" aria-label="Full Name: activate to sort column descending" style="width: 117.234px;">Full Name</th>
                                            {{-- <th width="11%" class="sorting" tabindex="0" aria-controls="responsive-datatable" rowspan="1" colspan="1" aria-label="Username: activate to sort column descending" style="width: 145.969px;">Username</th> --}}
                                            <th width="19%" class="sorting" tabindex="0" aria-controls="responsive-datatable" rowspan="1" colspan="1" aria-label="Email: activate to sort column descending" style="width: 150.969px;">Email</th>
                                            <th width="12%" class="sorting" tabindex="0" aria-controls="responsive-datatable" rowspan="1" colspan="1" aria-label="Contact: activate to sort column descending" style="width: 80.4062px;">Contact</th>
                                            <th width="20%" class="sorting" tabindex="0" aria-controls="responsive-datatable" rowspan="1" colspan="1" aria-label="Designation: activate to sort column descending" style="width: 120.625px;">Designation</th>
                                            <th width="7%" class="sorting" tabindex="0" aria-controls="responsive-datatable" rowspan="1" colspan="1" aria-label="Status: activate to sort column descending" style="width: 46.4062px;">Status</th>
                                            <th width="9%" align="right" class="sorting" tabindex="0" aria-controls="responsive-datatable" rowspan="1" colspan="1" aria-label="Action: activate to sort column descending" style="width: 110.3906px;">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                    @foreach ($admins as $key=>$item)
                                        
                                  
                                        <tr id="tablerow10" class="tablerow odd" role="row">
                                            <td class="sorting_1"><input type="checkbox" name="summe_code[]" id="summe_code1" value="10">
                                            </td>
                                            <td> {{$item->name}} </td>
                                            <td>{{$item->email}} </td>
                                            {{-- <td>masudrana@gmail.com</td> --}}
                                            <td>{{$item->contact}} </td>
                                            <td>{{$item->designation}}</td>
                                            <th width="7%" align="center"><span style="background:#006600; padding:3px 8px; border-radius:5px; margin:2px;float:left; font-size:16px;text-align:center"><i
                                                        class="fa fa-check"></i> </span></th>
                                            <td align="right">
                                                <div style="width:50%; float:left">
                                                    <a href="{{route('admin.admin.edit',$item->id)}}" class="btn btn-warning" style="font-size: 12px; float:left; padding:3px 5px"><i
                                                            class="fa fa-edit"></i> Edit</a>
                                                </div>
                                                <div style="width:50%; float:left">

                                                    <a href="{{route('admin.admin.destroy',$item->id)}}" class="btn btn-danger" style="font-size: 12px; float:left; padding:3px 5px"><i class="fa fa-trash"></i>  </a>
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                 <div class="text-center">
                                    {{ $admins->links() }}
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