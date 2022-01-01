<!-- ======= Header ======= -->
<!-- Navigation -->
<nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-dark" aria-label="Main navigation">
  <div class="container">
  <!-- Image Logo -->
  <!-- <a class="navbar-brand logo-image" href="index.html"><img src="images/logo.webp" alt="alternative"></a> -->
  <!-- Text Logo - Use this if you don't have a graphic logo -->
  <a class="navbar-brand logo-text" href="/">BEWS</a>
<button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button> 
<div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault" >
  <ul class="navbar-nav ms-auto navbar-nav-scroll">
          @foreach ($menus as $menu) 
            @if($menu->parent_id == 0)
              @if ($menu->sub_menus_count > 0)
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false" href="#">{{ $menu->title }} <i class="bi bi-chevron-down"></i></a>
                  @if ($menu->sub_menus_count > 0)

                  <ul class="dropdown-menu" aria-labelledby="dropdown01">
                    @foreach ($menu->subMenus as $subMenu)
                      @if (count($subMenu->subMenus) > 0)

                          <li><a class="dropdown-item" href="#">{{ $subMenu->title }} <i class="bi bi-chevron-right"></i></a>
                          <ul class="dropdown-menu" aria-labelledby="dropdown01">

                          @foreach ($subMenu->subMenus as $subChlid)
                                <li><a class="dropdown-item" href="{{ url($subChlid->slug) }}">{{ $subChlid->title }}</a></li> 
                          @endforeach
                        </ul>
                        @else
                        <li><a class="nav-link scrollto" href="{{ url($subMenu->slug) }}">{{ $subMenu->title }}</a></li> 
                      @endif
                        </li> 
                    @endforeach
                  </ul>
                  @endif
                </li>
                @else
                  <li class="nav-item">
                    <a class="nav-link @if($loop->first) active @endif" aria-current="page"  href="{{ url($menu->slug) }}">{{ $menu->title }}</a>
                  </li>
               @endif 
            @endif
          @endforeach
        </ul>
        <span class="nav-item social-icons">
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-facebook-f fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-twitter fa-stack-1x"></i>

                        </a>
                    </span>
                </span>
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
<!-- end of navigation -->