<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{url('admin/users')}}">
                    <div class=""></div>
                    <h2 class="brand-text mb-0"></h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

             
          

            <li  ><a href=""><i class="feather icon-user"></i><span class="menu-title" data-i18n="profile">Students</span></a>
                <ul class="menu-content">
                    <li class="{{ Request::is('admin/students')? 'active' : '' }}" ><a href="{{url('students/')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Analytics">View Students</span></a>
                    </li>

                </ul>

            </li>



            {{-- <li  ><a href=""><i class="feather icon-user"></i><span class="menu-title" data-i18n="profile">Categories</span></a>
                <ul class="menu-content">

                    <li class={{ Request::is('admin/teacher/add')? 'active' : '' }} ><a href="{{url('admin/categories')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Analytics">View Categories</span></a>
                    </li>

                   

                </ul>

            </li> --}}




            {{-- <li class={{ Request::is('admin/readings')? 'active' : '' }} ><a href=""><i class="fa fa-newspaper-o"></i><span class="menu-title" data-i18n="profile">News</span></a>
                <ul class="menu-content">

                    <li class={{ Request::is('admin/readings/category')? 'active' : '' }} ><a href="{{url('admin/news')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Analytics">View News</span></a>
                    </li>

                    <!-- <li class={{ Request::is('admin/readings/story')? 'active' : '' }} ><a href="{{url('admin/readings/story')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Analytics">story</span></a>
                    </li> -->

                </ul>

            </li> --}}


             

           



            
           
           

           


          

            </li> 


        </ul>
    </div>
</div>
