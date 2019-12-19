<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="#"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                </li>



                <li class="menu-title">Admin</li><!-- /.menu-title -->

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Article</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa   "></i><a href="{{route('article.create')}}">Add
                                Articles</a></li>
                        <li><i class="menu-icon ti-themify-logo"></i><a href="{{route('article.index')}}">View
                                Articles</a>
                        </li>
                    </ul>
                </li>




            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>