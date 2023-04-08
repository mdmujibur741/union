@extends('layouts.admin')

@section('content')
<div class="col-sm-12">
    <div class="page-header">
        <h3 class="page-title">Create New Money Receipt</h3>
        <ol class="breadcrumb">
            <li><a href="/dashboard">Dashboard</a></li>
            <li>Settings</li>
            <li class="active">New Money Receipt</li>
            <li style="text-align:right; float:right">
                <a href="Money-list.html" style="color:#fff;"><i class="fa fa-list"></i> View Money Receipt List</a>
            </li>
        </ol>
    </div>

</div>
<div class="row-fluid">
    <div class="col-sm-12">
        <div class="card">

            <div class="row" style="margin:10px">
                <div class="col-sm-12">
                    <form method="POST" action="{{route('admin.receipts.store')}}" enctype="" id="tabs" style="width:100%;">
                      @csrf

                        <table width="100%" border="0" class="table-bordered table">

                            <tr>
                                <td>দাতার নাম<span style="color:#ff0000; font-size:20px;">*</span></td>
                                <td>
                                    <input type="text" class="form-control @error('sender_name') is-invalid @enderror" name="sender_name" >
                                    @error('sender_name')
                                    <div class="py-3 " style="color:#f00">{{ $message }}</div>
                                 @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>গ্রহীতার নাম</td>
                                <td>
                                    <input type="text" class="form-control @error('receiver_name') is-invalid @enderror" name="receiver_name" value="">
                                    @error('receiver_name')
                                    <div class="py-3 " style="color:#f00">{{ $message }}</div>
                                 @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>গ্রহীতার মোবাইল নং</td>
                                <td>
                                    <input type="text" class="form-control @error('receiver_contact') is-invalid @enderror" name="receiver_contact" value="">
                                    @error('receiver_contact')
                                    <div class="py-3 " style="color:#f00">{{ $message }}</div>
                                 @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>উদ্দেশ্য</td>
                                <td>
                                    <input type="text" class="form-control @error('purpose') is-invalid @enderror" name="purpose" value="">
                                    @error('purpose')
                                    <div class="py-3 " style="color:#f00">{{ $message }}</div>
                                 @enderror
                                </td>
                            </tr>

                            <tr>
                                <td>টাকার পরিমাণ</td>
                                <td>
                                    <input type="text" class="form-control @error('amount') is-invalid @enderror" name="amount" value="">
                                    @error('amount')
                                    <div class="py-3 " style="color:#f00">{{ $message }}</div>
                                 @enderror
                                </td>
                            </tr>


                            <tr>
                                <td>টাকার পরিমাণ (কথায়)</td>
                                <td>
                                    <input type="hidden" id="number" size="15" />
                                    <input type="text" name="amount_in_word" class="form-control @error('amount_in_word') is-invalid @enderror col-md-7 col-xs-12" style="text-transform:capitalize" value="">
                                    @error('amount_in_word')
                                    <div class="py-3 " style="color:#f00">{{ $message }}</div>
                                 @enderror
                                </td>
                            </tr>




                            <tr>
                                <td>পাঠানোর তারিখ</td>
                                <td>
                                    <input type="date" class="form-control @error('date') is-invalid @enderror" name="date">
                                    @error('date')
                                    <div class="py-3 " style="color:#f00">{{ $message }}</div>
                                 @enderror
                                </td>
                            </tr>

                            <tr>
                                <td>মতামত</td>
                                <td>
                                    <textarea class="form-control @error('remark') is-invalid @enderror" name="remark" > </textarea>
                                    @error('remark')
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