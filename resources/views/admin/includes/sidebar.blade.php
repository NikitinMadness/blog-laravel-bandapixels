  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
   
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item">
                <a href="{{route('admin.user.index')}}" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Users
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.post.index')}}" class="nav-link">
                  <i class="nav-icon far fa-clipboard"></i>
                  <p>
                    Posts
                  </p>
                </a>
              </li>
              <li class="nav-item">
                    <a href="{{route('admin.category.index')}}" class="nav-link">
                      <i class="nav-icon far fa-image"></i>
                      <p>
                        Categories
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('admin.tag.index')}}" class="nav-link">
                      <i class="nav-icon fas fa-hashtag"></i>
                      <p>
                        Tags
                      </p>
                    </a>
                  </li>
            </ul>
        </nav>
    </div>
  </aside>