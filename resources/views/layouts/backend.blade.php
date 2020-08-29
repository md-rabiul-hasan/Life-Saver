@include('partial._header')
  <body class="app sidebar-mini">
    <!-- Navbar-->
    
    @include('partial._topbar')
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      @include('partial._sidebar')
    </aside>
    <main class="app-content">
      @yield('content')
    </main>
    <!-- Essential javascripts for application to work-->
    @include('partial._footer')
  </body>
</html>