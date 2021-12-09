  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
   
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item">
                <a href="{{route('personal.main.index')}}" class="nav-link">
                  <i class="nav-icon fas fa-home"></i>
                  <p>
                    Main
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('personal.liked.index')}}" class="nav-link">
                  <i class="nav-icon fas fa-heart"></i>
                  <p>
                    liked posts
                  </p>
                </a>
              </li>
              <li class="nav-item">
                    <a href="{{route('personal.comment.index')}}" class="nav-link">
                      <i class="nav-icon fas fa-comment"></i>
                      <p>
                        comments
                      </p>
                    </a>
                  </li>
            </ul>
        </nav>
    </div>
  </aside>