@extends('layouts.admin')

@section('content')


<div class="col-sm-12">
    <div class="page-header">
        <h3 class="page-title">Holding Info Information Edit</h3>
        <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li>Settings</li>
            <li class="active">Edit - name</li>
            <li style="text-align:right; float:right">
                <a href="Holding-list.html" style="color:#fff;"><i
                        class="fa fa-list"></i> View
                    Holding Info List</a>
            </li>
        </ol>
    </div>

</div>
<div class="row-fluid">
    <div class="col-sm-12">
        <div class="card">
            <div class="row" style="margin:10px">
                <div class="col-sm-offset-2">
                    <form method="POST" action="{{route('admin.holdings.update',$holding->id)}}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                       @csrf
                       @method('put')
                        <table width="100%" border="0" class="table-bordered table">
                            <tr>
                                <td>সেবা সমূহ<span style="color:#ff0000; font-size:20px;">*</span></td>
                                <td>
                                    <select name="type_id" class="form-control @error('opinion') is-invalid @enderror">
                                        <option value="">Select</option>
                                        @foreach ($types as $item)
                                        <option value="{{$item->id}}" @if($item->id==$holding->type_id)  selected @endif> {{$item->title}} </option>
                                        @endforeach
                                      
                                    </select>
                                    @error('opinion')
                                    <div class="py-3" style="color:#f00">{{ $message }}</div>
                                 @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>কর দাতার নাম<span style="color:#ff0000; font-size:20px;">*</span>
                                </td>
                                <td>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$holding->name}}" >
                                    @error('name')
                                    <div class="py-3" style="color:#f00">{{ $message }}</div>
                                 @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>পিতা/স্বামীর নাম</td>
                                <td>
                                    <input type="text" class="form-control @error('spouse_name') is-invalid @enderror" name="spouse_name" value="{{$holding->spouse_name}}">
                                    @error('spouse_name')
                                    <div class="py-3" style="color:#f00">{{ $message }}</div>
                                 @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>পরিবারের সদস্য</td>
                                <td>
                                    <select name="gender" class="form-control @error('gender') is-invalid @enderror">
                                       @foreach ($genders as $item)
                                       <option value="{{$item}}" @if($item==$holding->gender) selected @endif> {{$item}} </option>
                                       @endforeach
                                    
                                    </select>
                                    @error('gender')
                                    <div class="py-3" style="color:#f00">{{ $message }}</div>
                                 @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>গ্রাম/পাড়া</td>
                                <td>
                                    <input type="text" class="form-control @error('village') is-invalid @enderror" name="village" value="{{$holding->village}}">
                                    @error('village')
                                    <div class="py-3" style="color:#f00">{{ $message }}</div>
                                 @enderror
                                </td>
                            </tr>

                            <tr>
                                <td>পেশা</td>
                                <td>
                                    <input type="text" class="form-control @error('profession') is-invalid @enderror" name="profession" value="{{$holding->profession}}">
                                    @error('profession')
                                    <div class="py-3" style="color:#f00">{{ $message }}</div>
                                 @enderror
                                </td>
                            </tr>


                            <tr>
                                <td>ভোটার আইডি/জন্ম নিবন্ধন নং</td>
                                <td>
                                    <input type="nid" class="form-control @error('id_no') is-invalid @enderror" name="id_no"  value="{{$holding->id_no}}">
                                    @error('id_no')
                                    <div class="py-3" style="color:#f00">{{ $message }}</div>
                                 @enderror
                                </td>
                            </tr>

                            <tr>
                                <td>হোল্ডিং নং</td>
                                <td>
                                    <input type="text" class="form-control @error('holding_no') is-invalid @enderror" name="holding_no" value="{{$holding->holding_no}}">
                                    @error('holding_no')
                                    <div class="py-3" style="color:#f00">{{ $message }}</div>
                                 @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>ওয়ার্ড নং</td>
                                <td>
                                    <input type="text" class="form-control @error('word_no') is-invalid @enderror" name="word_no" value="{{$holding->word_no}}">
                                    @error('word_no')
                                    <div class="py-3" style="color:#f00">{{ $message }}</div>
                                 @enderror
                                </td>
                            </tr>

                            <tr>
                                <td>বসত বাড়ির ধরণ</td>
                                <td>
                                    <select class="form-control @error('house_type') is-invalid @enderror" name="house_type">
                                           @foreach ($house_type as $item)
                                               <option value="{{$item}}" @if($item==$holding->house_type) selected  @endif>{{$item}}</option>
                                           @endforeach
                                    </select>
                                    @error('house_type')
                                    <div class="py-3" style="color:#f00">{{ $message }}</div>
                                 @enderror
                                </td>
                            </tr>

                        
                            <tr>
                                <td>বাৎসরিক ধার্যকৃত কর</td>
                                <td>
                                    <input type="text" class="form-control @error('yearly_tax') is-invalid @enderror" name="yearly_tax" value="{{$holding->yearly_tax}}">
                                    @error('yearly_tax')
                                    <div class="py-3" style="color:#f00">{{ $message }}</div>
                                 @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>মন্তব্য</td>
                                <td>
                                    <input type="text" class="form-control @error('opinion') is-invalid @enderror" name="opinion" value="{{$holding->opinion}}">
                                    @error('opinion')
                                    <div class="py-3" style="color:#f00">{{ $message }}</div>
                                 @enderror
                                </td>
                            </tr>
                            <tr>
                                <td><button type="submit" class="btn btn-primary">Update</button></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>







@endsection