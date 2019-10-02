<!-- Main Header -->
<header class="main-header">
    <nav class="navbar navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <a href="/online/dashboard" class="navbar-brand"><b>HALK</b>24</a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                    <i class="fa fa-bars"></i>
                </button>
            </div>

            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="{{ Request::is('online/orders') || Request::is('online/reports/orders') ? 'active' : '' }}">
                        {{link_to(action('OrdersController@index'), trans('order.Orders'))}}
                    </li>
                    <li class="{{ Request::is('online/policies') || Request::is('online/policies/*') ? 'active' : '' }}">
                        {{link_to(action('PoliciesController@index'), trans('policy.Policies'))}}
                    </li>
                    @if(Auth::user()->isAdmin() || Auth::user()->isHeadManager())
                    <li class="{{ Request::is('online/reports/bordero') ? 'active' : '' }}">
                        {{link_to(action('ReportsController@getBordero'), trans('report.Bordero Report'))}}
                    </li>
                    @endif
                    <li>
                        {{link_to('help#calc-osago', trans('general.Calc OSAGO'))}}
                    </li>
                    <li>
                        {{link_to('help#calc-kbm', trans('general.Calc KBM'))}}
                    </li>
                    <li>
                        {{link_to('help#to', trans('general.TO'))}}
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                        {{ Html::image('images/default-avatar-160x160.png', '', array('class' => 'user-image')) }}
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
{{--                            <span class="hidden-xs">{{ Auth::user()->name }}</span>--}}
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                {{ Html::image('images/default-avatar-160x160.png', '', array('class' => 'img-circle')) }}
                                <p>
{{--                                    {{ Auth::user()->name }}--}}
                                </p>
                            </li>
                            <li class="user-footer">
                                <div class="pull-right">
                                    {{link_to('logout', trans('Sign out'))}}
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-custom-menu -->
        </div><!-- /.container-fluid -->
    </nav>
</header>