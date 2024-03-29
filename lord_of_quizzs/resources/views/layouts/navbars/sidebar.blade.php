<div class="sidebar">
    <div class="sidebar-wrapper">
        <!-- <div class="logo">
            <a href="#" class="simple-text logo-mini">{{ __('BD') }}</a>
            <a href="#" class="simple-text logo-normal">{{ __('Black Dashboard') }}</a>
        </div> -->
        <ul class="nav">
            <li @if ($pageSlug = 'dashboard') class="active" @endif>
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('Thống Kê') }}</p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                    <i class="fab fa-laravel" ></i>
                    <span class="nav-link-text" >{{ __('Tài Khoản') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="laravel-examples">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug = 'profile') class="active " @endif>
                            <a href="{{ route('profile.edit')  }}">
                                <i class="tim-icons icon-single-02"></i>
                                <p>{{ __('Thông Tin Tài Khoản') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug = 'users') class="active " @endif>
                            <a href="{{ route('user.index')  }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ __('Danh Sách Tài khoản') }}</p>
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
        </ul>
    </div>
</div>
