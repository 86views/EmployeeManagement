<template>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
  <inertia-link :href="route('admin.dashboard.index')" class="brand-link">
      <img :src="'../storage/images/AdminLTELogo.png'" alt="DayAdmin" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">DayAdmin</span>
    </inertia-link>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img :src="'../storage/images/user2-160x160.jpg'" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{$page.props.user.name }}</a>
        </div>
      </div>

      
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
           
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                 Tables
               <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          
          
           
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <inertia-link href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Admins</p>
                </inertia-link>
              </li>
             <li class="nav-item">
                <inertia-link href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Users</p>
                </inertia-link>
              </li>
              <li class="nav-item">
                <inertia-link href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Roles</p>
                </inertia-link>
              </li>
              <li class="nav-item">
                <inertia-link href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Permission</p>
                </inertia-link>
              </li>
             
            </ul>
          </li>
          
     
          
          <li class="nav-header">MISCELLANEOUS</li>
          <li class="nav-item">
            <inertia-link :href="route('dashboard')" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>Site</p>
            </inertia-link>
          </li>

           <li class="nav-item">
            <a href="#" class="nav-link" role="button">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p> Log Out </p>
            </a>
          </li>
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
</template>

<script>
export default {
   
}
</script>


