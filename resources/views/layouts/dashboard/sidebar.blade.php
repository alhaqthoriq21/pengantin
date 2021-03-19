<style>
h3 {
    text-align: center;
}
</style>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8"> -->
        <span class="brand-text font-weight-light"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
            </div>
            <div class="info">
                <a href="#" class="d-block">
                    <h3>Pengantin</h3>
                </a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('get.calon.data')}}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Calon Pengantin</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('get.akadNikah.data')}}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Akad Nikah</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('get.resepsi.data')}}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Resepsi</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('get.loveStory.data')}}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Love Story</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('get.quotes.data')}}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Quotes</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('get.fotoHeader.data')}}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Foto Header</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('get.fotoBody.data')}}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Foto Body</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('get.fotoFooter.data')}}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Foto Footer</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('get.song.data')}}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Song</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('get.comment.data')}}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Comment</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('get.reservasi.data')}}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Reservasi</p>
                            </a>
                        </li>
                    </ul>






                </li>
                <!-- <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li> -->
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>