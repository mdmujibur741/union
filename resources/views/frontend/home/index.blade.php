@extends('layouts.frontend')

@section('content')


{{-- banner  --}}
<section class="admin-home">
     <div class="container">
        <div class="wrapper banner-slider">
            <div class="my-slider">
                <div><img src="{{asset('frontend')}}/img/travel-banner5.jpg" alt="" class="" /></div>
                <div><img src="{{asset('frontend')}}/img/travel-banner5.jpg" alt="" class="" /></div>
                <div><img src="{{asset('frontend')}}/img/travel-banner5.jpg" alt="" class="" /></div>
                <div><img src="{{asset('frontend')}}/img/travel-banner5.jpg" alt="" class="" /></div>
                <div><img src="{{asset('frontend')}}/img/travel-banner5.jpg" alt="" class="" /></div>
                <div><img src="{{asset('frontend')}}/img/travel-banner5.jpg" alt="" class="" /></div>
            </div>
        </div>
     </div>
</section>

<section>
    <div class="container pt-2">
        <div class="row m-0">
            <div class="col-lg-3 col-md-3 col-sm-12 " style="padding-left: 0;">
                <div id="services">
                    <div class="box">
                        <header class="section-header">
                            <h3>চেয়ারম্যান</h3>
                        </header>
                        <center>
                            <img src="{{asset('frontend')}}/img/chairman.jpg" alt="আলহাজ্ব মুজিবুল হক চৌধুরী">
                            <h4>মোঃ মোরশেদুর রহমান</h4>
                        </center>
                        <p>প্রিয় ইউনিয়নবাসী,</br> আসুন, হাতে হাত রেখে, কাঁধে কাঁধ মিলিয়ে সকল ভেদাভেদ, ক্...</p>
                        <a href="#">বিস্তারিত দেখুন</a>
                    </div>
                    <div class="box">
                        <header class="section-header">
                            <h3>ইউপি সদস্যবৃন্দ</h3>
                        </header>
                        <div class="lists">
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="row" style="padding:0 10px">
                                            <div class="col-sm-3" style="margin:0; padding:0"><img src="{{asset('frontend')}}/img/chairman.jpg" alt="আলহাজ্ব মুজিবুল হক চৌধুরী"></div>
                                            <div class="col-sm-9" style="margin:0; padding:0">
                                                <div class="name">মোঃ মোরশেদুর রহমান</div>
                                                <div class="designation">চেয়ারম্যান</div>
                                                <div class="designation"> ১৫ নং ছদাহা ইউনিয়ন পরিষদ</div>
                                                <div class="designation">মোবাইলঃ ০১৭১২-৯৮০০৮৪
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="row" style="padding:0 10px">
                                            <div class="col-sm-3" style="margin:0; padding:0"><img src="{{asset('frontend')}}/img/chairman.jpg" alt="আলহাজ্ব মুজিবুল হক চৌধুরী"></div>
                                            <div class="col-sm-9" style="margin:0; padding:0">
                                                <div class="name">আলহাজ্ব মুজিবুল হক চৌধুরী</div>
                                                <div class="designation">চেয়ারম্যান</div>
                                                <div class="designation">১৫ নং ছদাহা ইউনিয়ন পরিষদ</div>
                                                <div class="designation">মোবাইলঃ ০১৭১২-৯৮০০৮৪
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="row" style="padding:0 10px">
                                            <div class="col-sm-3" style="margin:0; padding:0"><img src="{{asset('frontend')}}/img/chairman.jpg" alt="আলহাজ্ব মুজিবুল হক চৌধুরী"></div>
                                            <div class="col-sm-9" style="margin:0; padding:0">
                                                <div class="name">আলহাজ্ব মুজিবুল হক চৌধুরী</div>
                                                <div class="designation">চেয়ারম্যান</div>
                                                <div class="designation">১৫ নং ছদাহা ইউনিয়ন পরিষদ</div>
                                                <div class="designation">মোবাইলঃ ০১৭১২-৯৮০০৮৪
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="row" style="padding:0 10px">
                                            <div class="col-sm-3" style="margin:0; padding:0"><img src="{{asset('frontend')}}/img/chairman.jpg" alt="আলহাজ্ব মুজিবুল হক চৌধুরী"></div>
                                            <div class="col-sm-9" style="margin:0; padding:0">
                                                <div class="name">আলহাজ্ব মুজিবুল হক চৌধুরী</div>
                                                <div class="designation">চেয়ারম্যান</div>
                                                <div class="designation">১০নং ছদাহা ইউনিয়ন পরিষদ</div>
                                                <div class="designation">মোবাইলঃ ০১৭১২-৯৮০০৮৪
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                            </ul>
                            <a href="#">তালিকা দেখুন</a>
                        </div>
                    </div>

                    <div class="box">
                        <header class="section-header">
                            <h3>ক্যালেন্ডার</h3>
                        </header>
                        <div>
                            <div class="elegant-calencar">
                                <p id="reset">Reset</p>
                                <div id="header-calender" class="clearfix">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="pre-button"><i class="fa fa-angle-left"></i></div>
                                        </div>

                                        <div class="col-sm-8">
                                            <div class="head-info">
                                                <div class="head-day">26</div>
                                                <div class="head-month">Mar - 2023</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="next-button"><i class="fa fa-angle-right"></i></div>
                                        </div>
                                    </div>
                                </div>

                                <table id="calendar">
                                    <thead>
                                        <tr>
                                            <th>রবি</th>
                                            <th>সোম</th>
                                            <th>মঙ্গল</th>
                                            <th>বুধ</th>
                                            <th>বৃহস্পতি</th>
                                            <th>শুক্র</th>
                                            <th>শনি</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td id="disabled" class=""></td>
                                            <td id="disabled" class=""></td>
                                            <td id="disabled" class=""></td>
                                            <td id="" class="">1</td>
                                            <td id="" class="">2</td>
                                            <td id="" class="">3</td>
                                            <td id="" class="">4</td>
                                        </tr>
                                        <tr>
                                            <td id="" class="">5</td>
                                            <td id="" class="">6</td>
                                            <td id="" class="">7</td>
                                            <td id="" class="">8</td>
                                            <td id="" class="">9</td>
                                            <td id="" class="">10</td>
                                            <td id="" class="">11</td>
                                        </tr>
                                        <tr>
                                            <td id="" class="">12</td>
                                            <td id="" class="">13</td>
                                            <td id="" class="">14</td>
                                            <td id="" class="">15</td>
                                            <td id="" class="">16</td>
                                            <td id="" class="">17</td>
                                            <td id="" class="">18</td>
                                        </tr>
                                        <tr>
                                            <td id="" class="">19</td>
                                            <td id="" class="">20</td>
                                            <td id="" class="">21</td>
                                            <td id="" class="">22</td>
                                            <td id="" class="">23</td>
                                            <td id="" class="">24</td>
                                            <td id="" class="">25</td>
                                        </tr>
                                        <tr>
                                            <td id="today" class="">26</td>
                                            <td id="" class="">27</td>
                                            <td id="" class="">28</td>
                                            <td id="" class="">29</td>
                                            <td id="" class="">30</td>
                                            <td id="" class="">31</td>
                                            <td id="disabled" class=""></td>
                                        </tr>
                                        <tr>
                                            <td id="disabled" class=""></td>
                                            <td id="disabled" class=""></td>
                                            <td id="disabled" class=""></td>
                                            <td id="disabled" class=""></td>
                                            <td id="disabled" class=""></td>
                                            <td id="disabled" class=""></td>
                                            <td id="disabled" class=""></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>


                    </div>
                    {{-- <div class="box" style="border-bottom-right-radius:0 !important; border-bottom-left-radius:0 !important;">
                        <header class="section-header">
                            <h3>লোকেশন</h3>
                        </header>


                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1864819.479788304!2d87.9901875!3d24.093562500000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755fde85740581f%3A0xe38aaf9ae33ed25d!2z4Ken4KerIOCmqOCmgiDgppvgpqbgpr7gprngpr4g4KaH4KaJ4Kao4Ka_4Kav4Ka84KaoIOCmquCmsOCmv-Cmt-Cmpg!5e0!3m2!1sbn!2sbd!4v1679855739892!5m2!1sbn!2sbd"
                            width="500" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


                    </div> --}}
                </div>

            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">

                <div id="services" style="margin-top:10px; float:left">
                    <div class="col-sm-12 info-center">
                        <h2>পটভূমি</h2>
                        <p><strong>কালের স্বাক্ষী বহনকারী গোমতীর তীরে গড়ে&nbsp; উঠা বাঁশখালী উপজেলার একটি ঐতিহ্যবাহী অঞ্চল হলো ১০নংছদাহাইউনিয়ন।কালপরিক্রমায় আজ১ ০নংচাম্বলইউনিয়ন শিক্ষা, সংস্কৃতি, ধর্মীয়অনুষ্ঠান, খেলাধুলাসহ বিভিন্ন ক্ষেত্রেতার নিজস্ব স্বকীয়তা আজ ও সমুজ্জ্বল।</strong></p>

                        <p><strong>ক) নাম–১৫নং  চাম্বলইউনিয়নপরিষদ।</strong></p>

                        <p><strong>খ) আয়তন– ১৪.৭০(বর্গকিঃমিঃ)</strong></p>

                        <p>গ) লোকসংখ্যা– ৩২৪০২জন(প্রায়) (২০১১সালেরআদমশুমারিঅনুযায়ী)</p>

                        <p>ঘ) গ্রামেরসংখ্যা– ০৩টি।</p>

                        <p>ঙ) মৌ...
                            <a href="#">বিস্তারিত
                            দেখুন</a>
                        </p>
                    </div>
                </div>
                <div id="services">
                    <div class="box left-margin-10">
                        <header class="section-header">
                            <h3> আমাদের সেবা সমূহ </h3>
                        </header>
                        <div class="grid">
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="{{asset('frontend')}}/img/links_1678089600.jpg">
                                        <h4 class="name">ট্রেড লাইসেন্স</h4>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{asset('frontend')}}/img/links_1677998025.jpg">
                                        <h4 class="name">হোল্ডিং ট্যাক্স</h4>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{asset('frontend')}}/img/links_1677998222.jpg">
                                        <h4 class="name">ডিজিটাল হোল্ডিং প্লেট</h4>
                                    </a>
                                </li>
                            </ul>
                        </div>


                    </div>

                    <div class="box left-margin-10">
                        <header class="section-header">
                            <h3> নোটিশ বোর্ড</h3>
                        </header>
                        <div class="lists" style="max-height:300px; overflow:auto">
                            <marquee scrollamount="3" scrolldelay="10" direction="down" loop="-1" height="100%" behavior="alternate" id="marque_common" onmouseover="document.getElementById('marque_common').stop();" onmouseout="document.getElementById('marque_common').start();">
                                <ul>
                                </ul>
                            </marquee>
                        </div>
                    </div>

                    <div class="box left-margin-10">
                        <header class="section-header">
                            <h3> ভিডিও গ্যালারী</h3>
                        </header>
                        <div class="row">
                            <div class="col-sm-4" style="margin:0; padding:0 5px">
                                <div style="margin:5px; float:left; width:100%; padding:0; height:100px;box-shadow:#ccc 0 0 2px 2px;">
                                    <a class="youtube cboxElement" href="#">
                                        <img src="{{asset('frontend')}}/img/video_1611727858 (1).png" style="width:100%; height:auto; max-height:100px; text-align:center" title="" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4" style="margin:0; padding:0 5px">
                                <div style="margin:5px; float:left; width:100%; padding:0; height:100px;box-shadow:#ccc 0 0 2px 2px;">
                                    <a class="youtube cboxElement" href="#">
                                        <img src="{{asset('frontend')}}/img/defaultimage.jpg" style="width:100%; height:auto; max-height:100px; text-align:center" title="" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4" style="margin:0; padding:0 5px">
                                <div style="margin:5px; float:left; width:100%; padding:0; height:100px;box-shadow:#ccc 0 0 2px 2px;">
                                    <a class="youtube cboxElement" href="#">
                                        <img src="{{asset('frontend')}}/img/video_1611727486.png" style="width:100%; height:auto; max-height:100px; text-align:center" title="" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4" style="margin:0; padding:0 5px">
                                <div style="margin:5px; float:left; width:100%; padding:0; height:100px;box-shadow:#ccc 0 0 2px 2px;">
                                    <a class="youtube cboxElement" href="#">
                                        <img src="{{asset('frontend')}}/img/video_1611727602.png" style="width:100%; height:auto; max-height:100px; text-align:center" title="" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4" style="margin:0; padding:0 5px">
                                <div style="margin:5px; float:left; width:100%; padding:0; height:100px;box-shadow:#ccc 0 0 2px 2px;">
                                    <a class="youtube cboxElement" href="#">
                                        <img src="{{asset('frontend')}}/img/video_1611727858.png" style="width:100%; height:auto; max-height:100px; text-align:center" title="" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4" style="margin:0; padding:0 5px">
                                <div style="margin:5px; float:left; width:100%; padding:0; height:100px;box-shadow:#ccc 0 0 2px 2px;">
                                    <a class="youtube cboxElement" href="#">
                                        <img src="{{asset('frontend')}}/img/video_1611727486.png" style="width:100%; height:auto; max-height:100px; text-align:center" title="" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4" style="margin:0; padding:0 5px">
                                <div style="margin:5px; float:left; width:100%; padding:0; height:100px;box-shadow:#ccc 0 0 2px 2px;">
                                    <a class="youtube cboxElement" href="#">
                                        <img src="{{asset('frontend')}}/img/video_1611727486.png" style="width:100%; height:auto; max-height:100px; text-align:center" title="" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4" style="margin:0; padding:0 5px">
                                <div style="margin:5px; float:left; width:100%; padding:0; height:100px;box-shadow:#ccc 0 0 2px 2px;">
                                    <a class="youtube cboxElement" href="#">
                                        <img src="{{asset('frontend')}}/img/video_1611727602.png" style="width:100%; height:auto; max-height:100px; text-align:center" title="" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12" style="padding-right: 0;">
                <div id="services">
                    <div class="box">
                        <header class="section-header">
                            <h3>সচিব</h3>
                        </header>
                        <center>
                            <img src="{{asset('frontend')}}/img/management_1677881348.jpg" alt="মোঃ ফয়সাল আবেদীন">
                            <h4>মোহাম্মদ নুরুল আবছার</h4>
                        </center>

                        <p>একটি সুন্দর ইউনিয়ন গড়তে সকলে সহযোগীতা দরকার। তাই ১৫নং ছদাহা&nbsp;ইউনিয়ন পরিষদ স...</p>
                        <a href="#">বিস্তারিত দেখুন</a>
                    </div>

                    <div class="box">
                        <header class="section-header">
                            <h3>সরকারি নোটিশ</h3>
                        </header>
                        <div class="lists" style="max-height:250px; overflow:auto">

                            <ul>
                            </ul>

                        </div>
                    </div>
                    <div class="box">
                        <header class="section-header">
                            <h3>জনসংখ্যান নোটিশ</h3>
                        </header>
                        <div class="lists" style="max-height:250px; overflow:auto">

                            <ul>
                            </ul>

                        </div>
                    </div>
                    <div class="box">
                        <header class="section-header">
                            <h3>সাধারণ নোটিশ</h3>
                        </header>
                        <div class="lists" style="max-height:250px; overflow:auto">

                            <ul>
                            </ul>

                        </div>
                    </div>

                    <div class="box">
                        <header class="section-header">
                            <h3>জাতীয় সঙ্গীত</h3>
                        </header>

                        <div class="player paused">
                            <div class="album">
                                <div class="cover">
                                    <div><img src="{{asset('frontend')}}/img/flag.gif" alt="3rdburglar by Wordburglar" /></div>
                                </div>
                            </div>
                            <div class="all-info">
                                <div class="info">
                                    <div class="time">
                                        <span class="current-time">0:00</span>
                                        <span class="progress"><span></span></span>
                                        <span class="duration">0:00</span>
                                    </div>
                                    <h2>music-glitch-squid-game-way-back-then-55389</h2>
                                </div>

                                <div class="actions">
                                    <button class="shuffle">
                                <div class="arrow"></div>
                                <div class="arrow"></div>
                              </button>
                                    <button class="button rw">
                                <div class="arrow"></div>
                                <div class="arrow"></div>
                              </button>
                                    <button class="button play-pause">
                                <div class="arrow"></div>
                              </button>
                                    <button class="button ff">
                                <div class="arrow"></div>
                                <div class="arrow"></div>
                              </button>
                                    <button class="repeat"></button>
                                </div>

                                <audio prelaod src="{{asset('frontend')}}/mp-3/Amar-Sonar-Bangla-Ami-.mp3"></audio>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
</section>
@endsection