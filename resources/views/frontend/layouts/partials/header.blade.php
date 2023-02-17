@php
    // $menuFields= App\Staticdata::where(['type' => 'linh-vuc-hoat-dong', 'status' => 'ACTIVE'])->get();
    $menu = menu('Home menu', '_json');
@endphp

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Nav Area Start Here
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="nav-area-wrapper-relative">
    <nav class="navbar navbar-area navbar-expand-lg navigation-style-02">
        <div class="container custom-container custom-container-01">
            <div class="responsive-menu">
                <div class="logo-wrapper">
                    <a href="index-2.html" class="logo">
                        <img src="assets/img/Logos/logo-black.svg" alt="">
                    </a>
                </div>
                <button class="navbar-toggler navbar-bs-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#themeim_main_menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="themeim_main_menu">
                <ul class="navbar-nav">
                    @foreach ($menu as $item)
                        @if (count($item->children) > 0)
                            <li class="menu-item-has-children current-menu-item">
                                <a href="{{ asset($item->url) }}" >{{ $item->title }}</a>

                                <ul class="sub-menu">
                                    @foreach ($item->children as $child)
                                        <li>
                                            <a
                                                href="{{ asset($child->url) }}">{{ $child->title }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @else
                            <li class="menu-item-has-children current-menu-item @if ($item->url == '/' . Route::current()->uri) active @endif">
                                <a href="{{ asset($item->url) }}">{{ $item->title }}</a>
                            </li>
                        @endif
                    @endforeach
                    
                </ul>
            </div>
        </div>
    </nav>
</div>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Nav Area End Here
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
