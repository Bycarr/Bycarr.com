<!-- Modal  -->
<div class="modal fade location-modal-wrap" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Select a Popular Cities</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="location-modal">
                    <ul>
                        @foreach ($headerCities as $item)
                            <li>
                                <a href="{{ route('city.show', $item->slug) }}">
                                    <div class="location-icons">
                                        <img src="{{ asset('/storage/' . $item->icon) }}" alt="{{ $item->title }}">
                                    </div>
                                    <div class="location-list">
                                        <span>{{ $item->title }}</span>
                                    </div>
                                </a>
                            </li>
                        @endforeach


                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal End  -->

<div class="header-wrapper">

    <!-- Top Header  -->
    <div class="top-header">
        <div class="container">
            <div class="th-wrap">
                <div class="logo">
                    <a href="{{ route('home.index') }}" title="Logo">
                        <img src="{{ asset('/website/img/logo1.jpeg') }}" alt="Logo">
                    </a>
                </div>
                <div class="search">
                    <form action="{{ route('product.index') }}">
                        <input type="text" name="search" class="form-control"
                            placeholder="Search By Make, Model, Type etc.">
                        <button type="submit"><i class="las la-search"></i></button>
                    </form>
                </div>
                <div class="header-utilities">
                    <ul>
                        <li>
                            <a href="{{ Auth::guard('customer')->check() ? route('customer.logout') : route('customer.register') }}">
                                <div class="icons">
                                    <i class="las la-user"></i>
                                </div>
                                <div class="infos">
                                    @if(Auth::guard('customer')->check())
                                    <span>Login as</span>
                                    <h3>{{auth('customer')->user()->fullname }}</h3>
                                    @else
                                    <span>Sign in here</span>
                                    <h3>Account</h3>
                                    @endif

                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="icons">
                                    <i class="las la-headset"></i>
                                </div>
                                <div class="infos">
                                    <span>Call us now</span>
                                    <h3> {!! config('settings.contact') !!}
                                    </h3>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="header-btns">
                        <a href="#">Post on Bycarr <i class="las la-plus-circle"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Header End  -->

    <!-- Header  -->
    <header class="header">
        <div class="container">
            <div class="h-wrap">
                <div class="header-menu">
                    <ul>
                        @if (!empty($menuItems))
                            @foreach ($menuItems['parent'] as $key => $item)
                                <li><a href="{!! $item['url'] !!}"
                                        {!! $item['target'] !!}>{!! $item['title'] !!}</a>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
                <div class="location">
                    <span data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="las la-map-marker-alt"></i>
                        Choose Location</span>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End  -->

</div>
