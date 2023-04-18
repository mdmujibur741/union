<nav class="main-nav float-right d-none d-lg-block">
    <ul class="p-0">
        <li class="active"><a href="#">হোম</a></li>
        <li class=""><a href="#">যোগাযোগ </a>
        </li>
        <li class=""><a href="#">ইউপি সদস্যবৃন্দ </a>
        </li>
        <li class=""><a href="{{route('web.holding')}}">হোল্ডিং তথ্য সমূহ </a> </li>
        <li class=""><a href="{{route('web.shop')}}"> ট্রেড লাইসেন্স </a> </li>
        <li class=""><a href="#">পটভূমি </a>
        </li>
        <li class=""><a href="#">ছদাহা বাজার </a>
        </li>
        <li class=""><a href="{{route('web.blog')}}">ব্লগ</a>
        </li>
        <li class="drop-down"><a href="#">অন্যান্য </a>
            <ul>
                <li class=""><a href="#">নোটিশ </a>
                </li>
                <li class=""><a href="#">ফটো গ্যালারী </a>
                </li>
                <li class=""><a href="#">ভিডিও গ্যালারী </a>
                </li>
            </ul>
        </li>

        <li style="float:right">
            <i class="bx bx-chevron-right"></i> 
            @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                @auth
                    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                 
                @endauth
            </div>
        @endif
            </li>

    </ul>
</nav>