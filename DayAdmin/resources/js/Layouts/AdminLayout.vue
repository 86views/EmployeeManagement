<template>
    <div class="dark-mode">

  <div class="wrapper" style="overflow: auto;">

   <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img :src="'../storage/images/AdminLTELogo.png'" class="animation__wobble"  alt="AdminLTELogo" height="60" width="60">
  </div>

  

  <!-- Navbar -->
    <NavBar />
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    
     <SideBar />

    <!-- / Main Sidebar Container -->

  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
              <slot name="header"> </slot>
            <!-- <h1 class="m-0">Dashboard v2</h1> -->
          </div><!-- /.col -->
          <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol> -->
          <!-- </div> -->
          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
      <slot>  </slot>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



  <!-- Main Footer -->
    <Footer />
 
    </div>



  </div>
</template>

<script>
     import Footer from '@/Components/Footer'
     import NavBar from '@/Components/NavBar'
     import SideBar from '@/Components/SideBar'
    export default {
      components: {
        Footer,
        NavBar,
        SideBar,
      },
       
        mounted() {
          this.init()
        },

      methods: {
          init() {
            let SELECTOR_LOADER = '.loader'
            setTimeout(() => {
                let $loader = $(SELECTOR_LOADER)
                if($loader) {
                   $loader.css('height', 0)
                   setTimeout(() => {
                     $loader.children().hide()
                   },2000)
                }
            }, 2000)
          }
      }
  
   } 
</script>