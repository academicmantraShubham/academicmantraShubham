
<!-- ======= Header ======= -->
<!-- Navigation --> 
<nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-dark" aria-label="Main navigation">
   <div class="container">
      <!-- Image Logo -->
      <a class="navbar-brand logo-image" href="/"><img src="{{$logo->image}}" alt="{{$logo->alt}}"></a> 
      <!-- Text Logo - Use this if you don't have a graphic logo -->
      <!--<a class="navbar-brand logo-text" href="/">BEWS</a>-->
      <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button> 
      <div class="navbar-collapse offcanvas-collapse" id="navbarNavDropdown">
         <ul class="navbar-nav ms-auto navbar-nav-scroll">
            @foreach ($menus as $menu) 
               @if ($menu->subMenus->count() > 0)
                  <li class="nav-item dropdown" >
                     <a class="nav-link dropdown-toggle" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false" href="javascript:void(0)">{{ $menu->title }} <i class="bi bi-chevron-down"></i></a>
                     <ul class="dropdown-menu" aria-labelledby="dropdown01">
                        @foreach ($menu->subMenus as $subMenu)
                           @if ($subMenu->subMenus->count() > 0)
                              <li class="dropdown-submenu">
                                 <a class="dropdown-item dropdown-toggle" href="#">{{ $subMenu->title }}</a>
                                 <ul class="dropdown-menu new_id" id="new_id_{{ $subMenu->id }}">
                                    @foreach ($subMenu->subMenus as $subChlid)
                                       @if ($subChlid->subMenus->count() > 0)
                                       <li class="dropdown-submenu">
                                          <a class="dropdown-item dropdown-toggle" href="#">{{ $subMenu->title }}</a>
                                          <ul class="dropdown-menu new_id child-sub-menu" id="new_id_{{ $subMenu->id }}">
                                             @foreach ( $subChlid->subMenus as $subChlidSub)
                                                <li><a class="dropdown-item" href="{{ $subChlidSub->content ? url($subChlidSub->slug) : 'javascript:void(0)' }}">{{ $subChlidSub->title }}</a></li>
                                             @endforeach
                                          </ul>
                                       </li>
                                       @else
                                          <li><a class="dropdown-item" href="{{ $subChlid->content ? url($subChlid->slug) : 'javascript:void(0)' }}">{{ $subChlid->title }}</a></li>
                                       @endif
                                    @endforeach 
                                 </ul>
                              </li>
                           @else
                              <li><a class="nav-link scrollto" href="{{ url($subMenu->slug) }}">{{ $subMenu->title }}</a></li>
                           @endif
                        @endforeach
                     </ul>
                  </li>
               @else
                  <li class="nav-item">
                     <a class="nav-link @if($loop->first) active @endif" aria-current="page"  href="{{ $menu->content ? url($menu->slug) : 'javascript:void(0)' }}">{{ $menu->title }}</a>
                  </li>
               @endif 
            @endforeach
         </ul>
         <span class="nav-item social-icons">
            <span class="fa-stack">
               <a href="https://www.facebook.com/bestessaywritingservicesau">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x"></i> 
               </a>
            </span>
            <span class="fa-stack">
               <a href="https://www.instagram.com/best_essaywritingservices/">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-instagram fa-stack-1x"></i>
               </a>
            </span>
         </span>
      </div>
      <!-- end of navbar-collapse -->
   </div>
   <!-- end of container -->
</nav>
<!-- end of navbar -->
<!-- end of navigation -->

