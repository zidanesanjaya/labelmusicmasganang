<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="/home">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item nav-category">Manage</li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('manage.page')}}">
              <i class="menu-icon mdi mdi-language-html5"></i>
              <span class="menu-title">Page</span>
            </a>
          </li>
          <li class="nav-item nav-category">Datas</li>
          <li class="nav-item">
            <a class="nav-link" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="menu-icon mdi mdi-account"></i>
              <span class="menu-title">Artist</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('datas.music')}}" aria-expanded="false" aria-controls="charts">
              <i class="menu-icon mdi mdi-bookmark-music"></i>
              <span class="menu-title">Music</span>
            </a>
            
          </li>
          
          <li class="nav-item nav-category">Authentication</li>
          <li class="nav-item">
            <a class="nav-link btn btn-danger text-white" href="/logout-post">
              <i class="menu-icon mdi mdi-logout text-white"></i>
              <span class="menu-title">Logout</span>
            </a>
          </li>
          <li class="nav-item">
             
          </li>
        </ul>
      </nav>