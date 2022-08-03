    <!-- JQUERY JS -->
    <script src="{{asset('dashboard/assets/js/jquery.min.js')}}"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{asset('dashboard/assets/plugins/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('dashboard/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- Perfect SCROLLBAR JS-->
    <script src="{{asset('dashboard/assets/plugins/p-scroll/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('dashboard/assets/plugins/p-scroll/pscroll.js')}}"></script>


    @yield('js_vendors')

    <!-- SIDE-MENU JS -->
    <script src="{{asset('dashboard/assets/plugins/sidemenu/sidemenu.js')}}"></script>
    <!-- SIDEBAR JS -->
    <script src="{{asset('dashboard/assets/plugins/sidebar/sidebar.js')}}"></script>
    <!-- Color Theme js -->
    <script src="{{asset('dashboard/assets/js/themeColors.js')}}"></script>

    <!-- Sticky js -->
    <script src="{{asset('dashboard/assets/js/sticky.js')}}"></script>

    <!-- CUSTOM JS -->
    <script src="{{asset('dashboard/assets/js/custom.js')}}"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    
      {{-- {!! Toastr::message() !!} --}}
      
    <script>
        let domain = window.location.href;  
let sidemenu = $(`.app-sidebar .main-sidemenu ul .slide a[href='${domain}']`)
sidemenu.parents('.slide').addClass('is-expanded')
sidemenu.parents('.slide-menu').addClass('open')
sidemenu.addClass('active');

  </script>
    @yield('js_toast')

    @yield('jsfiles')