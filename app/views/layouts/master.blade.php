
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ Lang::get('persian.admin-panel', array(), 'fa');   }}</title>

    <!-- Bootstrap core CSS -->


    {{ HTML::style('css/bootstrap.css') }}
    {{ HTML::style('css/sb-admin.css') }}
    {{ HTML::style('font-awesome/css/font-awesome.min.css') }}
    {{ HTML::style('css/morris-0.4.3.min.css') }}
    {{ HTML::style('css/morris-0.4.3.min.css') }}
    {{ HTML::script('js/libjs/completeform.js') }}
    {{ HTML::style('jquery-ui.css') }}


    {{ HTML::script('js/jquery-1.10.2.js') }}
    {{ HTML::script('js/bootstrap.js') }}
<!-- JavaScript -->

    {{ HTML::script('js/jquery-ui.min.js') }}


<!-- Page Specific Plugins -->
    {{ HTML::script('js/raphael-min.js') }}
    {{ HTML::script('js/morris-0.4.3.min.js') }}
    <!--{{ HTML::script('js/morris/chart-data-morris.js') }}-->
    {{ HTML::script('js/tablesorter/jquery.tablesorter.js') }}
    {{ HTML::script('js/tablesorter/tables.js') }}

  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">{{ Lang::get('persian.auto-menu', array(), 'fa');   }}</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>




          <a class="navbar-brand" href="index.html">
            {{ Lang::get('persian.site-template', array(), 'fa');   }}
          </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li class="active"><a href="{{URL::to('admin/dashboard')}}"><i class="fa fa-dashboard"></i> {{ Lang::get('persian.admin-firstpage', array(), 'fa');   }}
            </a></li>

            <li><a href="{{URL::to('/')}}"><i class="fa fa-home"></i> {{ Lang::get('persian.site-firstpage', array(), 'fa');   }}
            </a></li>


            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-edit"></i>
            {{ Lang::get('persian.posts-management', array(), 'fa');   }}
                <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="{{URL::to('/admin/news/create')}}"><i class="fa fa-plus"></i>
                  {{ Lang::get('persian.add-news', array(), 'fa');   }}
                </a></li>
                <li><a href="{{URL::to('admin/news/')}}">
                    <i class="fa fa-list"></i>

                  {{ Lang::get('persian.news-list', array(), 'fa');   }}
                </a></li>
              </ul>
            </li>




            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-folder-open"></i>
            {{ Lang::get('persian.categories-management', array(), 'fa');   }}
                <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="{{URL::to('/admin/categories/create')}}"><i class="fa fa-plus"></i>
                  {{ Lang::get('persian.add-category', array(), 'fa');   }}
                </a></li>
                <li><a href="{{URL::to('admin/categories/')}}"><i class="fa fa-list"></i>
                  {{ Lang::get('persian.category-list', array(), 'fa');   }}
                </a></li>
              </ul>
            </li>






            <li><a href="{{URL::to('/admin/orders')}}"><i class="fa fa-list"></i> {{ Lang::get('persian.orders-management', array(), 'fa');   }}
            </a></li>





            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
            {{ Lang::get('persian.users-management', array(), 'fa');   }}
                <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="{{URL::to('admin/users/create')}}"><i class="fa fa-plus"></i>
                  {{ Lang::get('persian.add-user', array(), 'fa');   }}
                </a></li>
                <li><a href="{{URL::to('admin/users')}}"><i class="fa fa-list"></i>
                  {{ Lang::get('persian.user-list', array(), 'fa');   }}
                </a></li>
              </ul>
            </li>


            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-list-alt"></i>
            {{ Lang::get('persian.menus-management', array(), 'fa');   }}
                <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="{{URL::to('admin/menus/create')}}"><i class="fa fa-plus"></i>
                  {{ Lang::get('persian.add-menu', array(), 'fa');   }}
                </a></li>
                <li><a href="{{URL::to('admin/menus')}}"><i class="fa fa-list"></i>
                  {{ Lang::get('persian.menus-list', array(), 'fa');   }}
                </a></li>
              </ul>
            </li>



            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-camera"></i>
            {{ Lang::get('persian.sliders-management', array(), 'fa');   }}
                <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="{{URL::to('admin/sliders/create')}}"><i class="fa fa-plus"></i>
                  {{ Lang::get('persian.add-slider', array(), 'fa');   }}
                </a></li>
                <li><a href="{{URL::to('admin/sliders')}}"><i class="fa fa-list"></i>
                  {{ Lang::get('persian.slider-list', array(), 'fa');   }}
                </a></li>

                <li><a href="{{URL::to('admin/slider/setting')}}"><i class="fa fa-wrench"></i>
                  {{ Lang::get('persian.slider-setting', array(), 'fa');   }}
                </a></li>
              </ul>
            </li>


             <li><a href="{{URL::to('admin/contactusmngt')}}"><i class="fa fa-envelope"></i>
            {{ Lang::get('persian.contactus-management', array(), 'fa');   }}
             </a></li>



             <li><a href="{{URL::to('admin/footer')}}"><i class="fa fa-dashboard"></i>
            {{ Lang::get('persian.footertext-management', array(), 'fa');   }}
             </a></li>



            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i>
            {{ Lang::get('persian.site-settings', array(), 'fa');   }}
                <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="{{URL::to('admin/changepass')}}"><i class="fa fa-cog"></i>
                  {{ Lang::get('persian.changepass', array(), 'fa');   }}
                </a></li>
                <li><a href="{{URL::to('/admin/sitedisable')}}"><i class="fa fa-flash"></i>
                  {{ Lang::get('persian.siteDisable', array(), 'fa');   }}
                </a></li>
              </ul>
            </li>


          </ul>





          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown messages-dropdown">

            </li>

            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
              {{ Lang::get('persian.parspanasonic', array(), 'fa');   }}
                <b class="caret"></b></a>
              <ul class="dropdown-menu">

                <li class="divider"></li>
                <li><a href="{{URL::to('auth/logout')}}"><i class="fa fa-power-off"></i> خارج شدن</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
      <div id="page-wrapper" style="padding-top:40px;">
      {{$content}}
      </div>
    </div><!-- /#wrapper -->




  </body>
</html>
