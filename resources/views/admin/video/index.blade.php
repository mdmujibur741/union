@extends('layouts.admin')

@section('content')
<div class="col-sm-12">
    <div class="page-header" style="border:none">
        <h3 class="page-title">View Video List</h3>
        <div class="col-sm-5" style="margin:0; padding:0">
            <ol class="breadcrumb" style="padding:13px;">
                <li><a href="index.html">Dashboard</a></li>
                <li>Settings</li>
                <li class="active">Blog List</li>
            </ol>
        </div>
        <div class="col-sm-7 breadcrumb pull-right" style="float:right; text-align:right">

            <a href="Video-create.html" style="color:#fff; margin-right:20px" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Create New Video</a>
        </div>
    </div>
</div>
<div class="row-fluid">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-block">
                <form>
                    <table class="table table-striped table-bordered" cellspacing="0" width="100%">

                        <tr>
                            <th width="29%">Title</th>
                            <th width="9%">Video Code</th>
                            <th width="9%">Cover Photo</th>
                            <th width="10%">Created At</th>
                            <th>Actions</th>
                        </tr>


                  @foreach ($videos as $key=>$item)
                  <tr class="tablerow">
                    <td> {{$item->title}} </td>
                    <td> {{$item->youtube}} </td>
                    <td><img src="{{'/storage/'.$item->image}}" style="width:100px; height:auto" /></td>
                    <td> {{$item->created_at->format('d-m-Y')}} </td>
                    <td width="15%">
                        <a href="{{route('admin.videos.edit',$item->id)}}" class="btn btn-warning" style="font-size: 12px; float:left; width:40%; margin-right:10px;">Edit</a>
                        <div style="width:50%; float:left">
                           
                            <a onclick="return confirm('Are you sure you want to delete this item?');"  href="{{route('admin.videos.destroy', $item->id)}}" class="btn btn-danger custom-delete-button">Delete</a>
                        </div>
                    </td>
                </tr>
                  @endforeach


                    </table>

                    <div class="text-center">
                        {{ $videos->links() }}
                     </div>
            </div>
        </div>
    </div>
</div>
@endsection