@extends('layouts.admin')

@section('content')
<div class="col-sm-12">
    <div class="page-header" style="border:none">
        <h3 class="page-title">View Secretary List</h3>
        <div class="col-sm-6" style="margin:0; padding:0">
            <ol class="breadcrumb" style="padding:13px;">
                <li><a href="index.html">Dashboard</a></li>
                <li class="active">Secretary List</li>
            </ol>
        </div>
        <div class="col-sm-6 breadcrumb " style="float:right; text-align:right">
            <a style="color:#000; margin-right:5px;" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Approved</a>
            <a style="color:#000; margin-right:5px;" class="btn btn-warning btn-sm"><i class="fa fa-times"></i> Disapproved</a>
            <a style="color:#fff; margin-right:5px;" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Multiple Delete</a>
            <a href="Secretary-new-create.html" style="color:#fff; margin-right:0" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add New Secretary</a>
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
                                <th width="2%"><input name="checkbox" onclick="checkedAll();" type="checkbox" readonly="readonly"></th>
                                <th width="5%" height="22">SI</th>
                                <th width="17%">Secretary Name</th>
                                <th width="17%">Photo</th>
                                <th width="16%">Email</th>
                                <th width="13%">Contact</th>
                                <th width="15%">Designation</th>
                                <th width="5%">Status</th>
                                <th width="10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>

           @foreach ($secretaries as $key=>$item)
               
        

                            <tr class="tablerow">
                                <td><input type="checkbox" name="" value=""></td>
                                <td>{{$key+1}} </td>
                                <td> {{$item->name}} </td>
                                <td> <img src="{{'/storage/'.$item->image}}" style="width:70px; height:auto"> </td>
                                <td> {{$item->email}} </td>
                                <td> {{$item->contact}} </td>
                                <td> {{$item->designation}} </td>
                                <td width="5%" align="center" valign="top"><span style="background:#006600; padding:3px 5px; border-radius:5px; margin:2px;float:left; font-size:12px;text-align:center">
            <i class="fa fa-check"></i> </span></td>
                                <td align="center">


                                    <a href="" class="btn btn-info btn-xs" style="font-size: 12px; float:left; margin-right:5px;" title="Details">
                                        <i class="fa fa-file"></i></a>
                                    <a href="{{route('admin.secretary.edit',$item->id)}}" class="btn btn-warning btn-xs" style="font-size: 12px; float:left; margin-right:5px;" title="Edit">
                                        <i class="fa fa-edit"></i></a>
                                 

                                        <a onclick="return confirm('Are you sure you want to delete this item?');"  href="{{route('admin.secretary.destroy',$item->id)}}" class="btn btn-danger" style="font-size: 12px; float:left; padding:3px 5px"><i class="fa fa-trash"></i>  </a>

                                </td>
                            </tr>

                    
                            @endforeach
                   

                         

                        </tbody>
                    </table>
                    <div class="text-center">
                        {{ $secretaries->links() }}
                     </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection