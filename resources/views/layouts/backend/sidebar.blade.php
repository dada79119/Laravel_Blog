<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ Auth::user()->gravatar() }}" class="img-circle" alt="{{ Auth::user()->name }}">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li>
          <a href="{{ url('/home') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview" id="blog-item">
          <a href="#">
            <i class="fa fa-pencil"></i>
            <span>Blog</span>
            <span class="pull-right-container" >
              <i class="fa fa-angle-right" id="blog-arrow"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('backend.blog.index') }}"><i class="fa fa-circle-o"></i> All Posts</a></li>
            <li><a href="{{ route('backend.blog.create') }}"><i class="fa fa-circle-o"></i> Add New</a></li>
          </ul>
        </li>
        <li><a href="{{ route('backend.categories.index') }}"><i class="fa fa-folder"></i> <span>Categories</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <script type="text/javascript">
    $('#blog-item').on("click", function(e){
    
    if ($('#blog-arrow').hasClass("fa fa-angle-right")){
        $('#blog-arrow').removeClass("fa fa-angle-right")
                        .addClass("fa fa-angle-down");
      }else{
        $('#blog-arrow').removeClass("fa fa-angle-down")
                        .addClass("fa fa-angle-right");
      }

    });
  </script>