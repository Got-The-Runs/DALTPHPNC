<div class="sidebar">
    <div class="sidebar-wrapper">
        <!-- <div class="logo">
            <a href="#" class="simple-text logo-mini">{{ __('BD') }}</a>
            <a href="#" class="simple-text logo-normal">{{ __('Black Dashboard') }}</a>
        </div> -->
        <ul class="nav">
            <li @if ($pageSlug = 'dashboard') class="active " @endif>
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                    <i class="fab fa-laravel" ></i>
                    <span class="nav-link-text" >{{ __('Laravel Examples') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="laravel-examples">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug = 'profile') class="active " @endif>
                            <a href="{{ route('profile.edit')  }}">
                                <i class="tim-icons icon-single-02"></i>
                                <p>{{ __('User Profile') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug = 'users') class="active " @endif>
                            <a href="{{ route('user.index')  }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ __('User Management') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li @if ($pageSlug = 'cauhoi') class="active " @endif>
                <a href="{{ route('cauhois.index') }}">
                    <i class="tim-icons icon-puzzle-10"></i>
                    <p>{{ __('Câu Hỏi') }}</p>
                </a>
            </li>
            <li @if ($pageSlug = 'linhvuc') class="active " @endif>
                <a href="{{ route('linhvucs.index') }}">
                    <i class="tim-icons icon-atom"></i>
                    <p>{{ __('Lĩnh Vực') }}</p>
                </a>
            </li>
            <li @if ($pageSlug = 'bocauhoi') class="active " @endif>
                <a href="{{ route('bocauhois.index') }}">
                    <i class="tim-icons icon-align-center"></i>
                    <p>{{ __('Bộ Câu Hỏi') }}</p>
                </a>
            </li>
            <li @if ($pageSlug = 'chitietbocauhoi') class="active " @endif>
                <a href="{{ route('chitietbocauhois.index') }}">
                    <i class="tim-icons icon-bullet-list-67"></i>
                    <p>{{ __('Chi Tiết Bộ Câu Hỏi') }}</p>
                </a>
            </li>
            <li @if ($pageSlug = 'nguoichoi') class="active " @endif>
                <a href="{{ route('nguoichois.index') }}">
                <i class="tim-icons icon-single-02"></i>              
                    <p>{{ __('Lịch Sử Người Chơi') }}</p>
                </a>
            </li>
            <!-- <li @if ($pageSlug = 'maps') class="active " @endif>
                <a href="{{ route('pages.maps') }}">
                    <i class="tim-icons icon-pin"></i>
                    <p>{{ __('Maps') }}</p>
                </a>
            </li> -->
            <!-- <li @if ($pageSlug = 'notifications') class="active " @endif>
                <a href="{{ route('pages.notifications') }}">
                    <i class="tim-icons icon-bell-55"></i>
                    <p>{{ __('Notifications') }}</p>
                </a>
            </li>
            <li @if ($pageSlug = 'tables') class="active " @endif>
                <a href="{{ route('pages.tables') }}">
                    <i class="tim-icons icon-puzzle-10"></i>
                    <p>{{ __('Table List') }}</p>
                </a>
            </li>
            <li @if ($pageSlug = 'rtl') class="active " @endif>
                <a href="{{ route('pages.rtl') }}">
                    <i class="tim-icons icon-world"></i>
                    <p>{{ __('RTL Support') }}</p>
                </a>
            </li> -->
            <!-- <li class=" {{ $pageSlug == 'upgrade' ? 'active' : '' }} bg-info">
                <a href="{{ route('pages.upgrade') }}">
                    <i class="tim-icons icon-spaceship"></i>
                    <p>{{ __('Upgrade to PRO') }}</p>
                </a>
            </li> -->
        </ul>
    </div>
</div>