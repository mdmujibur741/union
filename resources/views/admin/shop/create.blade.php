@extends('layouts.admin')

@section('content')
<div class="row-fluid">
    <div class="col-sm-12">
        <div class="card">

            <div class="row" style="margin:10px;">
                <div class="col-sm-12" >
                    <form method="Post" action="{{route('admin.shops.store')}}"  id="tabs" style="width:100%; ">
                        @csrf
                        <table width="100%" border="0" class="table-bordered table" >


                            <tr>
                                <td>প্রতিষ্ঠানের নাম<span style="color:#ff0000; font-size:20px;">*</span></td>
                                <td>
                                    <input type="text" class="form-control @error('organization') is-invalid @enderror" name="organization" >
                                    @error('organization')
                                    <div class="py-3 " style="color:#f00">{{ $message }}</div>
                                 @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>মালিকের নাম</td>
                                <td>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" >
                                    @error('name')
                                    <div class="py-3 " style="color:#f00">{{ $message }}</div>
                                 @enderror
                                </td>
                            </tr>
                            <tr>
                                <td> পিতার নাম</td>
                                <td>
                                    <input type="text" class="form-control @error('father') is-invalid @enderror" name="father" >
                                    @error('father')
                                    <div class="py-3 " style="color:#f00">{{ $message }}</div>
                                 @enderror
                                </td>
                            </tr>


                            <tr>
                                <td> ঠিকানা</td>
                                <td>
                                    <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" >
                                @error('address')
                                <div class="py-3 " style="color:#f00">{{ $message }}</div>
                             @enderror
                                </td>
                            </tr>


                            <tr>
                                <td>মোবাইল নাম্বার</td>
                                <td>
                                    <input type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile">
                                 @error('mobile')
                                <div class="py-3 " style="color:#f00">{{ $message }}</div>
                             @enderror
                                </td>
                            </tr>

                            <tr>
                                <td>মূলধন</td>
                                <td>
                                    <input type="text" class="form-control @error('image') is-invalid @enderror" name="budget">
                                    @error('budget')
                                    <div class="py-3 " style="color:#f00">{{ $message }}</div>
                                 @enderror
                                </td>
                            </tr>
                         
                            <tr>
                                <td>দোকানের ধরণ</td>
                                <td>
                                    <div>
                                        <select class="form-control @error('image') is-invalid @enderror" name="type_id">
                                            <option value="">Select</option>
                                            @foreach ($types as $item)
                                                 <option value="{{$item->id}}">{{$item->title}}</option>
                                            @endforeach
                                        </select>
                                        @error('type_id')
                                        <div class="py-3 " style="color:#f00">{{ $message }}</div>
                                     @enderror
                                    </td>
                            </tr>
                            <tr>
                                <td>ধার্য্য</td>
                                <td>
                                    <input type="number" class="form-control @error('annually_tax') is-invalid @enderror" name="annually_tax">
                                    @error('annually_tax')
                                    <div class="py-3 " style="color:#f00">{{ $message }}</div>
                                 @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>মন্তব্য</td>
                                <td>
                                    <input type="text" class="form-control @error('opinion') is-invalid @enderror" name="opinion">
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