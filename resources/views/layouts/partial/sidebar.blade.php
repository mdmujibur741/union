
<div class="layout-sidebar">
    <div class="layout-sidebar-backdrop"></div>
    <div class="layout-sidebar-body">
        <div class="custom-scrollbar" style="margin-top:50px;">
            <nav id="sidenav" class="sidenav-collapse collapse">


                <ul class="sidenav">
                    <li class="sidenav-heading">Administration</li>
                    <li class="sidenav-item"><a href="/dashboard"><span
                            class="sidenav-icon icon icon-columns"><i class="fa-solid fa-table-columns"></i></span><span
                            class="sidenav-label">Dashboard</span></a></li>
                    <li class="sidenav-item has-subnav"><a href="#" aria-haspopup="true"><span
                            class="sidenav-icon fa fa-user"></span><span
                            class="sidenav-label">Admin</span>
                            <i class="fa-solid fa-angle-right arrow-icons"></i></a>
                        <ul class="sidenav-subnav collapse">
                            <li><a href="{{route('admin.admin.index')}}"><span
                                    class="sidenav-icon fa fa-bars"></span>Admin List</a></li>
                            <li><a href="{{route('admin.admin.create')}}"><span
                                    class="sidenav-icon fa fa-plus"></span>New Admin</a></li>
                        </ul>
                    </li>


                    <li class="sidenav-item has-subnav"><a href="#" aria-haspopup="true"><span
                            class="sidenav-icon fa fa-map"></span><span class="sidenav-label">Secretary
                            (Login User)</span> <i class="fa-solid fa-angle-right arrow-icons"></i></a>
                        <ul class="sidenav-subnav collapse">
                            <li><a href="{{route('admin.secretary.index')}}"><span
                                    class="sidenav-icon fa fa-bars"></span>Secretary List</a></li>
                            <li><a href="{{route('admin.secretary.create')}}"><span
                                    class="sidenav-icon fa fa-plus"></span>Add New Secretary</a></li>
                        </ul>
                    </li>

                    <li class="sidenav-item has-subnav"><a href="#" aria-haspopup="true"><span
                            class="sidenav-icon fa fa-map"></span><span class="sidenav-label">Notice
                            Type</span> <i class="fa-solid fa-angle-right arrow-icons"></i></a>
                        <ul class="sidenav-subnav collapse">
                            <li><a href="{{route('admin.notice_types.index')}}"><span
                                    class="sidenav-icon fa fa-bars"></span>Notice Type List</a></li>
                            <li><a href="{{route('admin.notice_types.create')}}"><span
                                    class="sidenav-icon fa fa-plus"></span>Add New Type</a></li>
                        </ul>
                    </li>


                    <li class="sidenav-item has-subnav"><a href="#" aria-haspopup="true"><span
                            class="sidenav-icon fa fa-map"></span><span
                            class="sidenav-label">Notice</span><i class="fa-solid fa-angle-right arrow-icons"></i></a>
                        <ul class="sidenav-subnav collapse">
                            <li><a href="{{route('admin.notices.index')}}"><span
                                    class="sidenav-icon fa fa-bars"></span>Notice List</a></li>
                            <li><a href="{{route('admin.notices.create')}}"><span
                                    class="sidenav-icon fa fa-plus"></span>Add New Notice</a></li>
                        </ul>
                    </li>

                    <li class="sidenav-item has-subnav"><a href="#" aria-haspopup="true"><span
                            class="sidenav-icon fa fa-map"></span><span class="sidenav-label">Latest
                            Update</span><i class="fa-solid fa-angle-right arrow-icons"></i></a>
                        <ul class="sidenav-subnav collapse">
                            <li><a href="{{route('admin.updates.index')}}"><span
                                    class="sidenav-icon fa fa-bars"></span>Update List</a></li>
                            <li><a href="{{route('admin.updates.create')}}"><span
                                    class="sidenav-icon fa fa-plus"></span>Add New Update</a></li>
                        </ul>
                    </li>

                    <li class="sidenav-item has-subnav"><a href="#" aria-haspopup="true"><span
                            class="sidenav-icon fa fa-map"></span><span
                            class="sidenav-label">Messages</span><i class="fa-solid fa-angle-right arrow-icons"></i></a>
                        <ul class="sidenav-subnav collapse">
                            <li><a href="Messages-list.html"><span
                                    class="sidenav-icon fa fa-bars"></span>Message List</a></li>
                            <li><a href="massage-new-create.html"><span
                                    class="sidenav-icon fa fa-plus"></span>Add New Message</a></li>
                        </ul>
                    </li>

                    {{-- <li class="sidenav-item has-subnav">
                        <a href="#" aria-haspopup="true">
                            <span class="sidenav-icon fa fa-map"></span><span class="sidenav-label">Documents</span><i class="fa-solid fa-angle-right arrow-icons"></i></a>
                        <ul class="sidenav-subnav collapse">
                            <li><a href="Documents-list.html"><span
                                    class="sidenav-icon fa fa-bars"></span>Document List</a></li>
                            <li><a href="Documents-create.html"><span
                                    class="sidenav-icon fa fa-plus"></span>Add New Document</a></li>
                        </ul>
                    </li> --}}

                    <li class="sidenav-item has-subnav">
                        <a href="#" aria-haspopup="true">
                            <span class="sidenav-icon fa fa-map"></span><span class="sidenav-label">Money
                            Receipt</span><i class="fa-solid fa-angle-right arrow-icons"></i></a>
                        <ul class="sidenav-subnav collapse">
                            <li><a href="{{route('admin.receipts.index')}}"><span
                                    class="sidenav-icon fa fa-bars"></span>Receipt List</a></li>
                            <li><a href="{{route('admin.receipts.create')}}"><span
                                    class="sidenav-icon fa fa-plus"></span>Add New Receipt</a></li>
                        </ul>
                    </li>

                    <li class="sidenav-item has-subnav"><a href="#" aria-haspopup="true"><span
                            class="sidenav-icon fa fa-map"></span><span class="sidenav-label">House/Shop
                            Type</span><i class="fa-solid fa-angle-right arrow-icons"></i></a>
                        <ul class="sidenav-subnav collapse">
                            <li><a href="{{route('admin.home_shop_types.index')}}"><span
                                    class="sidenav-icon fa fa-bars"></span>House/Shop Type List</a></li>
                            <li><a href="{{route('admin.home_shop_types.create')}}"><span
                                    class="sidenav-icon fa fa-plus"></span>Add New Type</a></li>
                        </ul>
                    </li>

                    <li class="sidenav-item has-subnav"><a href="#" aria-haspopup="true"><span
                            class="sidenav-icon fa fa-map"></span><span class="sidenav-label">Budget
                            Year</span><i class="fa-solid fa-angle-right arrow-icons"></i></a>
                        <ul class="sidenav-subnav collapse">
                            <li><a href="{{route('admin.years.index')}}"><span
                                    class="sidenav-icon fa fa-bars"></span>Year List</a></li>
                            <li><a href="{{route('admin.years.create')}}"><span
                                    class="sidenav-icon fa fa-plus"></span>Add New Year</a></li>
                        </ul>
                    </li>

                  

                    <li class="sidenav-item has-subnav">
                        <a href="#" aria-haspopup="true">
                            <span class="sidenav-icon fa fa-map"></span><span class="sidenav-label">Holding
                            Info</span><i class="fa-solid fa-angle-right arrow-icons"></i></a>
                        <ul class="sidenav-subnav collapse">
                            <li><a href="{{route('admin.holdings.index')}}"><span
                                    class="sidenav-icon fa fa-bars"></span>Holding List</a></li>
                            <li><a href="{{route('admin.holdings.create')}}"><span
                                    class="sidenav-icon fa fa-plus"></span>Add New Holding</a></li>
                        </ul>
                    </li>

                    <li class="sidenav-item has-subnav">
                        <a href="#" aria-haspopup="true">
                            <span class="sidenav-icon fa fa-map"></span><span class="sidenav-label">Shop
                            Info</span><i class="fa-solid fa-angle-right arrow-icons"></i></a>
                        <ul class="sidenav-subnav collapse">
                            <li><a href="{{route('admin.shops.index')}}"><span
                                    class="sidenav-icon fa fa-bars"></span>Shop List</a></li>
                            <li><a href="{{route('admin.shops.create')}}"><span
                                    class="sidenav-icon fa fa-plus"></span>Add New Shop</a></li>
                        </ul>
                    </li>

                    <li class="sidenav-item has-subnav">
                        <a href="#" aria-haspopup="true">
                            <span class="sidenav-icon fa fa-map"></span><span class="sidenav-label">Members</span><i class="fa-solid fa-angle-right arrow-icons"></i></a>
                        <ul class="sidenav-subnav collapse">
                            <li><a href="{{route('admin.members.index')}}"><span
                                    class="sidenav-icon fa fa-bars"></span>Member List</a></li>
                            <li><a href="{{route('admin.members.create')}} "><span
                                    class="sidenav-icon fa fa-plus"></span>Add New Member</a></li>
                        </ul>
                    </li>


                    <li class="sidenav-item has-subnav">
                        <a href="#" aria-haspopup="true">
                            <span class="sidenav-icon fa fa-map"></span><span class="sidenav-label">Photo
                            Gallery</span><i class="fa-solid fa-angle-right arrow-icons"></i></a>
                        <ul class="sidenav-subnav collapse">
                            <li><a href="{{route('admin.photos.index')}}"><span
                                    class="sidenav-icon fa fa-bars"></span>Gallery List</a></li>
                            <li><a href="{{route('admin.photos.create')}}"><span
                                    class="sidenav-icon fa fa-plus"></span>Add New Image</a></li>
                        </ul>
                    </li>


                    <li class="sidenav-item has-subnav"><a href="#" aria-haspopup="true"><span
                            class="sidenav-icon fa fa-list"></span><span class="sidenav-label">Video
                            Gallery</span><i class="fa-solid fa-angle-right arrow-icons"></i></a>
                        <ul class="sidenav-subnav collapse">
                            <li><a href="{{route('admin.videos.index')}}"><span
                                    class="sidenav-icon fa fa-bars"></span>Video List</a></li>
                            <li><a href="{{route('admin.videos.create')}}"><span
                                    class="sidenav-icon fa fa-plus"></span>New Video</a></li>
                        </ul>
                    </li>

                    <li class="sidenav-item has-subnav">
                        <a href="#" aria-haspopup="true">
                            <span class="sidenav-icon fa fa-user"></span><span class="sidenav-label">Logo</span><i class="fa-solid fa-angle-right arrow-icons"></i></a>
                        <ul class="sidenav-subnav collapse">
                            <li><a href="{{route('admin.logos.index')}}"><span
                                    class="sidenav-icon fa fa-bars"></span>Logo List</a></li>
                            <li><a href="{{route('admin.logos.create')}}"><span
                                    class="sidenav-icon fa fa-plus"></span>New Logo</a></li>
                        </ul>
                    </li>


                    <li class="sidenav-item has-subnav">
                        <a href="#" aria-haspopup="true">
                            <span class="sidenav-icon fa fa-user"></span><span class="sidenav-label">Banner</span><i class="fa-solid fa-angle-right arrow-icons"></i></a>
                        <ul class="sidenav-subnav collapse">
                            <li><a href="{{route('admin.banners.index')}}"><span
                                    class="sidenav-icon fa fa-bars"></span>Banner List</a></li>
                            <li><a href="{{route('admin.banners.create')}}"><span
                                    class="sidenav-icon fa fa-plus"></span>New Banner</a></li>
                        </ul>
                    </li>

                    <li class="sidenav-item has-subnav">
                        <a href="#" aria-haspopup="true">
                            <span class="sidenav-icon fa fa-user"></span><span class="sidenav-label">Slider</span><i class="fa-solid fa-angle-right arrow-icons"></i></a>
                        <ul class="sidenav-subnav collapse">
                            <li><a href="{{route('admin.sliders.index')}}"><span
                                    class="sidenav-icon fa fa-bars"></span>Slider List</a></li>
                            <li><a href="{{route('admin.sliders.create')}}"><span
                                    class="sidenav-icon fa fa-plus"></span>New Slider</a></li>
                        </ul>
                    </li>

                    <li class="sidenav-item has-subnav"><a href="#" aria-haspopup="true"><span
                            class="sidenav-icon fa fa-list"></span><span class="sidenav-label">Usefull
                            Link</span><i class="fa-solid fa-angle-right arrow-icons"></i></a>
                        <ul class="sidenav-subnav collapse">
                            <li><a href="{{route('admin.usefulls.index')}}"><span
                                    class="sidenav-icon fa fa-bars"></span>Link List</a></li>
                            <li><a href="{{route('admin.usefulls.create')}}"><span
                                    class="sidenav-icon fa fa-plus"></span>New Link</a></li>
                        </ul>
                    </li>

                    <li class="sidenav-item has-subnav"><a href="#" aria-haspopup="true"><span
                            class="sidenav-icon fa fa-list"></span><span class="sidenav-label">Menu</span><i class="fa-solid fa-angle-right arrow-icons"></i></a>
                        <ul class="sidenav-subnav collapse">
                            <li><a href="{{route('admin.menus.index')}}"><span
                                    class="sidenav-icon fa fa-bars"></span>Menu List</a></li>
                            <li><a href="{{route('admin.menus.create')}}"><span
                                    class="sidenav-icon fa fa-plus"></span>New Menu</a></li>
                        </ul>
                    </li>


                    <li class="sidenav-item has-subnav"><a href="#" aria-haspopup="true"><span
                            class="sidenav-icon fa fa-list"></span><span
                            class="sidenav-label">Content</span><i class="fa-solid fa-angle-right arrow-icons"></i></a>
                        <ul class="sidenav-subnav collapse">
                            <li><a href="{{route('admin.contents.index')}}"><span
                                    class="sidenav-icon fa fa-bars"></span>Content List</a></li>
                            <li><a href="{{route('admin.contents.create')}}"><span
                                    class="sidenav-icon fa fa-plus"></span>Content Menu</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>