
<!DOCTYPE html>
<html lang="en" class="loading">
  <!-- BEGIN : Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui"
    />
    <meta
      name="description"
      content="Apex admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities."
    />
    <meta
      name="keywords"
      content="admin template, Apex admin template, dashboard template, flat admin template, responsive admin template, web app"
    />
    <meta name="author" content="PIXINVENT" />
    <title>Geogis</title>
    <link
      rel="apple-touch-icon"
      sizes="60x60"
      href="{{asset('app-assets/img/ico/apple-icon-60.png')}}"
    />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="{{asset('app-assets/img/ico/apple-icon-76.png')}}"
    />
    <link
      rel="apple-touch-icon"
      sizes="120x120"
      href="{{asset('app-assets/img/ico/apple-icon-120.png')}}"
    />
    <link
      rel="apple-touch-icon"
      sizes="152x152"
      href="{{asset('app-assets/img/ico/apple-icon-152.png')}}"
    />
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('app-assets/img/ico/favicon.ico')}}" />
    <link
      rel="shortcut icon"
      type="image/png"
      href="{{asset('app-assets/img/ico/favicon-32.png')}}"
    />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-touch-fullscreen" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="default" />
    <link
      href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900"
      rel="stylesheet"
    />
    <!-- BEGIN VENDOR CSS-->
    <!-- font icons-->
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('app-assets/fonts/feather/style.min.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('app-assets/fonts/simple-line-icons/style.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('app-assets/fonts/font-awesome/css/font-awesome.min.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('app-assets/vendors/css/perfect-scrollbar.min.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('app-assets/vendors/css/prism.min.css')}}"
    />
    <!-- END VENDOR CSS-->
    <!-- BEGIN APEX CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/app.css')}}" />
    <!-- END APEX CSS-->
    <!-- BEGIN Page Level CSS-->
    <!-- END Page Level CSS-->
  </head>
  <!-- END : Head-->

  <!-- BEGIN : Body-->
  <body data-col="2-columns" class=" 2-columns ">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="wrapper">
      <!-- main menu-->
      <!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
      <div
        data-active-color="white"
        data-background-color="man-of-steel"
        data-image="{{asset('app-assets/img/sidebar-bg/01.jpg')}}"
        class="app-sidebar"
      >
        <!-- main menu header-->
        <!-- Sidebar Header For Starter Kit starts-->
        <div class="sidebar-header">
          <div class="logo clearfix">
            <a href="index.html" class="logo-text float-left">
              <div class="logo-img"> <img style="height:2.5rem;" src="{{asset('app-assets/img/logo.png')}}"/> </div>
              <span class="text align-middle">GEOGIS</span></a
            ><a
              id="sidebarToggle"
              href="javascript:;"
              class="nav-toggle d-none d-sm-none d-md-none d-lg-block"
              ><i
                data-toggle="expanded"
                class="ft-toggle-right toggle-icon"
              ></i></a
            ><a
              id="sidebarClose"
              href="javascript:;"
              class="nav-close d-block d-md-block d-lg-none d-xl-none"
              ><i class="ft-x"></i
            ></a>
          </div>
        </div>
        <!-- Sidebar Header Ends-->
        <!-- / main menu header-->
        <!-- main menu content-->
        <div class="sidebar-content">
          <div class="nav-container">
            <ul
              id="main-menu-navigation"
              data-menu="menu-navigation"
              data-scroll-to-active="true"
              class="navigation navigation-main"
            >
            <li class=" nav-item">
                <a href="#"
                  ><i class="ft-map"></i
                  ><span data-i18n="" class="menu-title"
                    >Carte d'occupation</span
                  ></a
                >
              </li>
              <li class=" nav-item">
                <a href="#"
                  ><i class="ft-map"></i
                  ><span data-i18n="" class="menu-title"
                    >Carte pédologique</span
                  ></a
                >
              </li>
              <li class=" nav-item">
                <a href="#"
                  ><i class="ft-server"></i
                  ><span data-i18n="" class="menu-title"
                    >Database</span
                  ></a
                >
              </li>
              <li class=" nav-item">
                <a href="#"
                  ><i class="ft-globe"></i
                  ><span data-i18n="" class="menu-title"
                    >Provinces</span
                  ></a
                >
              </li>
              <li class=" nav-item">
                <a href="#"
                  ><i class="ft-navigation"></i
                  ><span data-i18n="" class="menu-title"
                    >Participer</span
                  ></a
                >
              </li>
            </ul>
          </div>
        </div>
        <!-- main menu content-->
        <!-- main menu footer-->
        <!-- include includes/menu-footer-->
        <!-- main menu footer-->
      </div>
      <!-- / main menu-->

      <!-- Navbar (Header) Starts-->
      <nav class="navbar navbar-expand-lg navbar-light bg-faded header-navbar">
        <div class="container-fluid">
          <div class="navbar-header">
            <button
              type="button"
              data-toggle="collapse"
              class="navbar-toggle d-lg-none float-left"
            >
              <span class="sr-only">Toggle navigation</span
              ><span class="icon-bar"></span><span class="icon-bar"></span
              ><span class="icon-bar"></span></button
            ><span class="d-lg-none navbar-right navbar-collapse-toggle"
              ><a
                aria-controls="navbarSupportedContent"
                href="javascript:;"
                class="open-navbar-container black"
                ><i class="ft-more-vertical"></i></a
            ></span>
            <form role="search" class="navbar-form navbar-right mt-1">
              <div class="position-relative has-icon-right">
                <input
                  type="text"
                  placeholder="Search"
                  class="form-control round"
                  onkeyup="myFunction()"
                  id="myInput"
                />
                <div class="form-control-position">
                  <i class="ft-search"></i>
                </div>
              </div>
            </form>
          </div>
          <div class="navbar-container">
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
              <ul class="navbar-nav">
                <li class="nav-item mr-2 d-none d-lg-block">
                  <a
                    id="navbar-fullscreen"
                    href="javascript:;"
                    class="nav-link apptogglefullscreen"
                    ><i
                      class="ft-maximize font-medium-3 blue-grey darken-4"
                    ></i>
                    <p class="d-none">fullscreen</p></a
                  >
                </li>
                <li class="dropdown nav-item">
                  <a
                    id="dropdownBasic3"
                    href="#"
                    data-toggle="dropdown"
                    class="nav-link position-relative dropdown-toggle"
                    ><i class="ft-user font-medium-3 blue-grey darken-4"></i>
                    <p class="d-none">{{Auth:: user()->name}}</p></a
                  >
                  <div
                    ngbdropdownmenu=""
                    aria-labelledby="dropdownBasic3"
                    class="dropdown-menu text-left dropdown-menu-right"
                  >
                    <a href="javascript:;" class="dropdown-item py-1"
                      ><i class="ft-edit mr-2"></i><span>Mon profile</span></a
                    ><a href="javascript:;" class="dropdown-item py-1"
                      ><i class="ft-mail mr-2"></i><span>Mes messages</span></a
                    >
                    <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                    </form>
                    <div class="dropdown-divider"></div>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();" class="dropdown-item"
                      ><i class="ft-power mr-2"></i><span>Logout</span></a
                    >
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <!-- Navbar (Header) Ends-->
      @section('content')
    @show
        <!-- END : End Main Content-->

        <!-- BEGIN : Footer-->
        
        <!-- End : Footer-->
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <!-- BEGIN VENDOR JS-->
    <script>
function myFunction() {
  const input = document.getElementById("myInput");
    const cards = document.getElementsByClassName("card");
    let filter = input.value
    for (let i = 1; i < cards.length; i++) {
        let title = cards[i].querySelector(".card-body");
        if (title.innerText.indexOf(filter) > -1) {
            cards[i].classList.remove("d-none")
        } else {
            cards[i].classList.add("d-none")
        }
    }
}
</script>
    <script
      src="{{asset('app-assets/vendors/js/core/jquery-3.2.1.min.js')}}"
      type="text/javascript"
    ></script>
    <script
      src="{{asset('app-assets/vendors/js/core/popper.min.js')}}"
      type="text/javascript"
    ></script>
    <script
      src="{{asset('app-assets/vendors/js/core/bootstrap.min.js')}}"
      type="text/javascript"
    ></script>
    <script
      src="{{asset('app-assets/vendors/js/perfect-scrollbar.jquery.min.js')}}"
      type="text/javascript"
    ></script>
    <script
      src="{{asset('app-assets/vendors/js/prism.min.js')}}"
      type="text/javascript"
    ></script>
    <script
      src="{{asset('app-assets/vendors/js/jquery.matchHeight-min.js')}}"
      type="text/javascript"
    ></script>
    <script
      src="{{asset('app-assets/vendors/js/screenfull.min.js')}}"
      type="text/javascript"
    ></script>
    <script
      src="{{asset('app-assets/vendors/js/pace/pace.min.js')}}"
      type="text/javascript"
    ></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN APEX JS-->
    <script src="{{asset('app-assets/js/app-sidebar.js')}}" type="text/javascript"></script>
    <script
      src="{{asset('app-assets/js/notification-sidebar.js')}}"
      type="text/javascript"
    ></script>
    <script src="{{asset('app-assets/js/customizer.js')}}" type="text/javascript"></script>
    <!-- END APEX JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
  </body>
  <!-- END : Body-->
</html>
