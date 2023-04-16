@extends('layouts.admin')
@section('content')
<div class="col-sm-12">
    <div class="page-header" style="border:none; margin:0; padding:0">
        <h3 class="page-title">Create New Article</h3>
        <ol class="breadcrumb">
            <li><a href="index.html">Dashboard</a></li>
            <li>Settings</li>
            <li class="active">New Article</li>
            <li style="text-align:right; float:right">
                <a href="contents-list.html" style="color:#fff;"><i class="fa fa-list"></i> View
                    Article List</a>
            </li>
        </ol>
    </div>
</div>
<div class="row-fluid">
    <div class="col-sm-12">
        <div class="card">

            <div class="row" style="margin:10px">
                <form method="" action="" class="form-horizontal" enctype="">
                    <input type="hidden" name="_token" value="">

                    <div class="col-sm-12" style="margin-bottom:10px;">

                        <div class="form-group">
                            <label class="control-label col-md-1 col-sm-1 col-xs-12" for="menu">Menu</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="menu_id" class="form-control">
                                    <option value="">Select a Menu Item</option>
                                                                                        <option value="">যোগাযোগ</option>
                                                                                        <option value="">ইউপি সদস্যবৃন্দ</option>
                                                                                        <option value="">নোটিশ</option>
                                                                                        <option value="">ফটো গ্যালারী</option>
                                                                                        <option value="">ভিডিও গ্যালারী</option>
                                                                                        <option value="">হোল্ডিং তথ্য সমূহ</option>
                                                                                        <option value="">পটভূমি</option>
                                                                                        <option value="">চাম্বল বাজার</option>
                                                                                        <option value="">অন্যান্য</option>
                                                                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12" style="margin-bottom:10px;">
                        <div class="form-group">
                            <label class="control-label col-md-1 col-sm-1 col-xs-12" for="title">Title <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="title" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12" style="margin-bottom:10px;">
                        <div class="form-group">
                            <label class="control-label col-md-1 col-sm-1 col-xs-12" for="content">Content</span>
                            </label>
                            <div class="col-md-11 col-sm-11 col-xs-12">
                                <textarea name="content" class="form-control ckeditor"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <button class="btn btn-info" type="reset">Reset</button>
                            <a href="contents-list.html" class="btn btn-primary">Cancel</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection