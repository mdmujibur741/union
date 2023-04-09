@extends('layouts.frontend')
@section('content')
<section class="single-pg pt-5 pb-5">
    <div class="container pt-4">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-12">
                <div class="single-img-section">
                    <img src="{{asset('frontend')}}/img/thumb_16_2190e2a973.jpg" alt="">
                    <div class="content-section">
                        <div class="content">
                            <p>If you are over age 30 and not working to counter the natural effects of aging, your muscles are wasting away as you read this. By age 70, you’ll have lost about 40% of your once enviable muscle mass. It doesn’t have
                                to be like this, and if it is, you still have time to fix it.</p>
                            <p>You can build muscle at any age. It just gets a little more challenging later in life.</p>
                            <p>“Old and young people build muscle in the same way,” explains Roger Fielding, PhD, a professor of medicine at Tufts University. “But as you age, many of the biological processes that turn exercise into muscle become
                                less effective. This makes it harder for older people to build strength but also makes it that much more important for everyone to continue exercising as they age.”</p>
                            <p>Building muscle, no matter how old you are, offers clear and numerous health benefits.</p>
                            <h3>Stronger body, longer life</h3>
                            <p>You’ve probably heard plenty about physical and mental well-being boosts from aerobic exercise, such as brisk walking. A new study adds to the smaller but convincing body of work on the health benefits of building muscle.</p>
                            <p>Muscle-strengthening workouts — using weights, resistance bands or even just doing push-ups or some heavy lifting in the garden — lower the risk of heart disease and cancer, and up the odds of longer life, according
                                to a review of 16 studies on the topic, published in the July 2022 issue of the British Journal of Sports Medicine.</p>
                            <h3>You can do this</h3>
                            <p>Around age 50, the chemical and biological processes that trigger muscle growth start working more slowly, Fielding writes. But the process doesn’t stop. It just means older people don’t gain muscle as easily as younger
                                people. And while it might seem hard at first, building muscle gets easier with time, regardless of age.</p>
                            <h3>It’s never too late</h3>
                            <p>What if you’ve never worked out before? No problem.</p>
                            <p>Just ask Mike Harrington, who was a complete couch potato at age 69 and is now a state-champion powerlifter.</p>
                            <p>We don’t have to become powerlifters to reap significant health benefits. The American College of Sports Medicine suggests this basic approach for healthy adults who want to build strength:</p>
                            <ul class="list-info">
                                <li>
                                    <p>Warm up and cool down for 5–10 minutes.</p>
                                </li>
                                <li>
                                    <p>Choose a weight or resistance level that you can move eight to 15 times. The last repetition should be difficult.</p>
                                </li>
                                <li>
                                    <p>Do one to three sets, two or three days a week.</p>
                                </li>
                                <li>
                                    <p>Exercise all the major muscle groups.</p>
                                </li>
                                <li>
                                    <p>Use proper technique and full range of controlled motion.</p>
                                </li>
                                <li>
                                    <p>Seek a professional trainer if you don’t know proper technique.</p>
                                </li>
                            </ul>
                        </div>
                        <ul class="social-share pt-5">
                            <li class="share-info">Share: </li>
                            <li class="socal-icons">
                                <i class="fa fa-facebook"></i>
                            </li>
                            <li class="socal-icons">
                                <i class="fa fa-twitter"></i>
                            </li>
                            <li class="socal-icons">
                                <i class="fa fa-linkedin"></i>
                            </li>
                            <li class="socal-icons">
                                <i class="fa fa-instagram"></i>
                            </li>
                            <li class="socal-icons">
                                <i class="fa fa-pinterest-p"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-12">
                <div class="side-right">
                    <aside class="blog--search">
                        <form method="get">
                            <div class="form-group"><input class="form-control" placeholder="Enter your keyword?"><button aria-label="search-btn"><i class="fa fa-search"></i></button></div>
                        </form>
                    </aside>
                    <div class="Popular-post">
                        <h4>Popular Posts</h4>
                        <img src="{{asset('frontend')}}/img/thumb_16_2190e2a973.jpg" alt="">
                    </div>
                    <div class="resent-post">
                        <span class="post-title">Recent post</span>
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="{{asset('frontend')}}/img/thumb_16_2190e2a973.jpg" alt="">
                            </div>
                            <div class="col-lg-8">
                                <a href="">Discover Your Inner Genius To Better</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="{{asset('frontend')}}/img/thumb_16_2190e2a973.jpg" alt="">
                            </div>
                            <div class="col-lg-8">
                                <a href="">Discover Your Inner Genius To Better</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="{{asset('frontend')}}/img/thumb_16_2190e2a973.jpg" alt="">
                            </div>
                            <div class="col-lg-8">
                                <a href="">Discover Your Inner Genius To Better</a>
                            </div>
                        </div>
                    </div>
                    <aside class="blog--categories">
                        <h4 class="ps-widget__heading"><span>Categories</span></h4>
                        <div class="ps-widget__content">
                            <ul class="ps-list">
                                <li><a href="#">All <span>(50)</span></a></li>
                                <li><a href="#">Travel <span>(12)</span></a></li>
                                <li><a href="#">Lifestyle <span>(20)</span></a></li>
                                <li><a href="#">Design <span>(18)</span></a></li>
                                <li><a href="#">Others <span>(10)</span></a></li>
                            </ul>
                        </div>
                    </aside>
                    <div class="tag">
                        <ul class=" list-unstyled list-inline">
                            <li class="list-inline-item d-block mb-3 tag-title ">Tags: </li>
                            <li class="list-inline-item">
                                <a class="" href="#">Fitness</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="" href="#">Motivation</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection