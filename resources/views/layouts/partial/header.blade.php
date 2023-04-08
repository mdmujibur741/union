<div class="layout-header">
    <div class="navbar navbar-default">
        <div class="navbar-header">
            <a class="navbar-brand navbar-brand-center" href="#" target="_blank" style="width:100%; padding:0; margin:0 0 20px 0; text-align:center;">
                <img src="{{'/storage/image/logo.jpeg'}}" alt="Chambal UP" style="width:auto; height:50px;">
            </a>
            <button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse" data-target="#sidenav">
            <span class="sr-only">Toggle navigation</span>
            <span class="bars">
                <span class="bar-line bar-line-1 out"></span>
                <span class="bar-line bar-line-2 out"></span>
                <span class="bar-line bar-line-3 out"></span>
            </span>
            <span class="bars bars-x">
                <span class="bar-line bar-line-4"></span>
                <span class="bar-line bar-line-5"></span>
            </span>
        </button>
            <button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="arrow-up"></span>
            <span class="ellipsis ellipsis-vertical">
                                        <img class="ellipsis-object" width="32" height="32"
                        src="./images/user/2022-04-23-6263633d3b0a6.png" alt="demo"
                        style="float:left; margin-right:5px;">
                                </span>
        </button>
        </div>
        <div class="navbar-toggleable">
            <nav id="navbar" class="navbar-collapse collapse">
                <button class="sidenav-toggler hidden-xs" title="Collapse sidenav ( [ )" aria-expanded="true" type="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="bars">
                    <span class="bar-line bar-line-1 out"></span>
                    <span class="bar-line bar-line-2 out"></span>
                    <span class="bar-line bar-line-3 out"></span>
                    <span class="bar-line bar-line-4 in"></span>
                    <span class="bar-line bar-line-5 in"></span>
                    <span class="bar-line bar-line-6 in"></span>
                </span>
            </button>
                <ul class="nav navbar-nav navbar-right">
                    <li class="visible-xs-block">
                        <h4 class="navbar-text text-center">Hi, </h4>
                    </li>



                    <li class="dropdown hidden-xs">
                        <button class="navbar-account-btn" data-toggle="dropdown" aria-haspopup="true">
                                                        <img class="ellipsis-object" width="32" height="32"
                                src="{{'/storage/image/user.png'}}" alt="user"
                                style="float:left; margin-right:5px;">
                                                   {{auth()->user()->name}}                     <span class="caret"></span>
                    </button>
                        <ul class="dropdown-menu dropdown-menu-right">
                            {{-- <li>
                                <a href="#" onClick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out"></i> Logout</a>
                                <form id="logout-form" action="#" method="POST" style="display: none;"><input type="hidden" name="_token" value=""></form>
                            </li> --}}
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
    
                                <x-dropdown-link :href="route('logout')" style="padding: 10px;"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('  Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </ul>
                    </li>

                    <li class="visible-xs-block">
                        <a href="#" onClick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out"></i> Logout</a>
                        <form id="logout-form" action="#" method="" style="display: none;"><input type="hidden" name="_token" value=""></form>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>