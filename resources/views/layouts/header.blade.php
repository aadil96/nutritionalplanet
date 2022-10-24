<header class="header header-v1 has-over-section stricky dark-header ">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 pull-right">
                    <div class="top-info">
                        <div class="clearfix">
                            <ul class="contact-info pull-left">
                                <li><span><i class="fc-icon ftc-icon-email"></i> {{ config('mail.from.address') }}</span></li>
                                <li><span><i class="fc-icon ftc-icon-phone-contact"></i> Troll Free: +1 212-212-2376</span></li>
                            </ul>
                            <ul class="social pull-right">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                {{-- <li><a href="#"><i class="fa fa-twitter"></i></a></li> --}}
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                {{-- <li><a href="#"><i class="fa fa-youtube"></i></a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-menu-wrapper ">
        <div class="container">
            <nav class="navigation clearfix">
                <div id="menuzord" class="menuzord">
                    <a href="{{ route('home') }}" class="menuzord-brand">
                        <img src="{{ asset('images/logo/logo.ico') }}" style="width: 259px; height: 56px;" alt="Logo Image" id="skin-logo-img" />
                    </a>
                    <ul class="menuzord-menu">
                        <li>
                            <a href="{{ route('home') }}" class="flip-flop-btn"><span data-hover="HOME">HOME</span></a>
                        </li>
                        {{-- <li>
                            <a href="{{ route('privacy-policy') }}" class="flip-flop-btn"><span data-hover="ABOUT">Gallery</span></a>
                        </li> --}}
                        <li>
                            <a href="{{ route('privacy-policy') }}" class="flip-flop-btn"><span data-hover="Privacy Policy">Privacy Policy</span></a>
                        </li>
                        <li>
                            <a href="{{ route('cancellation-policy') }}" class="flip-flop-btn"><span data-hover="Cancellation Policy">Cancellation Policy</span></a>
                        </li>
                        <li>
                            <a href="{{ route('terms-and-conditions') }}" class="flip-flop-btn"><span data-hover="Terms & Conditions">Terms & Conditions</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div><!-- /.header-menu-wrapper -->
    {{-- <div class="search-box collapse" id="search-box">
        <div class="container">
            <form action="#">
                <input type="text" placeholder="To Search Start Typing...">
            </form>
        </div>
    </div> --}}
</header>
