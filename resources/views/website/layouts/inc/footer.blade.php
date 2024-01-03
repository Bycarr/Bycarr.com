<!-- Footer -->
<footer class="footer pt pb">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-wrap">
                    <h3>Let's Help You</h3>
                    <ul class="footer-menu">
                        @if (!empty($widget1))
                            @foreach ($widget1['parent'] as $item)
                                <li><a href="{{ $item['url'] ?? '' }}" {{ $item['target'] }}>{{ $item['title'] }}</a>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-wrap">
                    <h3>Who We Are</h3>
                    <ul class="footer-menu">
                        @if (!empty($widget2))
                            @foreach ($widget2['parent'] as $item)
                                <li><a href="{{ $item['url'] ?? '' }}" {{ $item['target'] }}>{{ $item['title'] }}</a>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-wrap">
                    <h3>Related Brands</h3>
                    <ul class="footer-menu">
                        @if (!empty($widget3))
                            @foreach ($widget3['parent'] as $item)
                                <li><a href="{{ $item['url'] ?? '' }}" {{ $item['target'] }}>{{ $item['title'] }}</a>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-wrap">
                    <h3>Subscribe Newsletter</h3>
                    <span>Sign up to our newsletter to receive promotions and more.</span>
                    <form action="">
                        <input type="email" class="form-control" placeholder="Enter your email">
                        <button type="submit"><i class="las la-arrow-right"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <div class="payment">
            <div class="download">
                <a href="#"><img src="{{ asset('/website/img/app1.png') }}" alt="images"></a>
                <a href="#"><img src="{{ asset('/website/img/app2.png') }}" alt="images"></a>
            </div>
            <div class="pay">
                <a href="#"><img src="{{ asset('/website/img/app3.svg') }}" alt="images"></a>
                <a href="#"><img src="{{ asset('/website/img/app4.svg') }}" alt="images"></a>
                <a href="#"><img src="{{ asset('/website/img/app5.svg') }}" alt="images"></a>
                <a href="#"><img src="{{ asset('/website/img/app6.svg') }}" alt="images"></a>
                <a href="#"><img src="{{ asset('/website/img/app8.svg') }}" alt="images"></a>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->

<!-- Footer Bottom -->
<section class="footer-bottom">
    <div class="container">
        <ul>
            <li>Copyright {{date('Y')}} {{config('app.name')}}. All Rights Reserved</li>
            <li>Design By: <a href="#" target="_blank">Sagar Basnet</a></li>
            <li>Developed By: <a href="#" target="_blank">Naresh Kumar Khasu</a></li>
        </ul>
    </div>
</section>
<!-- Footer Bottom End -->

<!-- Scroll Top -->
<div class="go-top">
    <div class="pulse">
        <i class="las la-angle-up"></i>
    </div>
</div>
<!-- Scroll Top End -->
