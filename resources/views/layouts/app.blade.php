  <!doctype html>
  <html lang="en">

  <head>
      @include('partials.head')
  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="100">

      <!-- Preloaders or other global elements -->
      <div class="lines-wrap">
          <div class="lines-inner">
              <div class="lines"></div>
          </div>
      </div>

      <!-- Mobile Menu -->
      <div class="site-mobile-menu site-navbar-target">
          <div class="site-mobile-menu-header">
              <div class="site-mobile-menu-close">
                  <span class="icofont-close js-menu-toggle"></span>
              </div>
          </div>
          <div class="site-mobile-menu-body"></div>
      </div>

      <!-- Navbar -->
      @include('partials.nav')

      <!-- Main Content -->
      <main>
          @yield('content')
      </main>

      <!-- Footer -->
      @include('partials.footer')

      <!-- Scripts -->
      @include('partials.scripts')

      <!-- Loader -->
      <div id="overlayer"></div>
      <div class="loader">
          <div class="spinner-border" role="status">
              <span class="sr-only">Loading...</span>
          </div>
      </div>

  </body>

  </html>
