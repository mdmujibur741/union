@extends('layouts.admin')

@section('content')
<div class="col-sm-12">
    <div class="page-header">
        <h3 class="page-title">Shop Info Information Edit</h3>
        <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li>Settings</li>
            <li class="active">Edit - </li>
            <li style="text-align:right; float:right">
                <a href="Shop-list.html" style="color:#fff;"><i class="fa fa-list"></i> View Shop Info List</a>
            </li>
        </ol>
    </div>

</div>
<div class="row-fluid">
    <div class="col-sm-12">
        <div class="card">
            <div class="row" style="margin:10px">
                <div class="col-sm-offset-2">
                    <form method="post" action="{{route('admin.shops.update', $shop->id)}}" accept-charset="UTF-8" class="form-horizontal" >
                       @csrf
                       @method('put')
                        <table width="100%" border="0" class="table-bordered table">


                            <tr>
                                <td>প্রতিষ্ঠানের নাম<span style="color:#ff0000; font-size:20px;">*</span></td>
                                <td>
                                    <input type="text" class="form-control @error('organization') is-invalid @enderror" name="organization" value="{{$shop->organization}}" >
                                    @error('organization')
                                    <div class="py-3 " style="color:#f00">{{ $message }}</div>
                                 @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>মালিকের নাম</td>
                                <td>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$shop->name}}">
                                    @error('name')
                                    <div class="py-3 " style="color:#f00">{{ $message }}</div>
                                 @enderror
                                </td>
                            </tr>
                            <tr>
                                <td> পিতার নাম</td>
                                <td>
                                    <input type="text" class="form-control @error('father') is-invalid @enderror" name="father" value="{{$shop->father}}">
                                    @error('father')
                                    <div class="py-3 " style="color:#f00">{{ $message }}</div>
                                 @enderror
                                </td>
                            </tr>


                            <tr>
                                <td> ঠিকানা</td>
                                <td>
                                    <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{$shop->address}}">
                                    @error('address')
                                    <div class="py-3 " style="color:#f00">{{ $message }}</div>
                                 @enderror
                                </td>
                            </tr>


                            <tr>
                                <td>মোবাইল নাম্বার</td>
                                <td>
                                    <input type="text" class="form-control @error('mobile') is-invalid @enderror" value="{{$shop->mobile}}" name="mobile">
                                    @error('mobile')
                                    <div class="py-3 " style="color:#f00">{{ $message }}</div>
                                 @enderror
                                </td>
                            </tr>

                            <tr>
                                <td> দোকানের ধরণ</td>
                                <td>
                                     <select name="type_id" id="" class="form-control @error('type_id') is-invalid @enderror">
                                            @foreach ($types as $item)
                                                 <option value="{{$item->id}}" @if($item->id == $shop->type_id) selected @endif> {{$item->title}} </option>
                                            @endforeach
                                     </select>
                                     @error('type_id')
                                     <div class="py-3 " style="color:#f00">{{ $message }}</div>
                                  @enderror
                                    </td>
                            </tr>

                            <tr>
                                <td>মূলধন</td>
                                <td>
                                    <input type="text" class="form-control @error('budget') is-invalid @enderror" name="budget" value="{{$shop->budget}}">
                                    @error('budget')
                                    <div class="py-3 " style="color:#f00">{{ $message }}</div>
                                 @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>ধার্য্য</td>
                                <td>
                                    <input type="text" class="form-control @error('annually_tax') is-invalid @enderror" name="annually_tax" value="{{$shop->annually_tax}}">
                                    @error('annually_tax')
                                    <div class="py-3 " style="color:#f00">{{ $message }}</div>
                                 @enderror
                                </td>
                            </tr>

                        
                            <tr>
                                <td>মন্তব্য</td>
                                <td>
                                    <input type="text" class="form-control @error('opinion') is-invalid @enderror" name="opinion" value="{{$shop->opinion}}">
                                    @error('opinion')
                                    <div class="py-3 " style="color:#f00">{{ $message }}</div>
                                 @enderror
                                </td>
                            </tr>
                            <tr>
                                <td><button type="submit" class="btn btn-primary">Submit</button></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection