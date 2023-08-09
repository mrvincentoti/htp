<!-- Hero Section Begin -->
<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories" style="background: #ffffff;">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>Quick Links</span>
                    </div>
                    <ul>
                        <li><a href="{{ route('yellow-pages') }}">Advertise on Yellow Page</a></li>
                        <!-- <li><a href="#">Harvest Donations</a></li> -->
                        <li><a href="{{ route('goodwill-messages') }}">Goodwill Messages</a></li>
                        <li><a href="#">Garage Sales</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">2023 Harvest Program</a></li>
                        <!-- <li><a href="#">Update profile</a></li> -->
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="#">
                            <div class="hero__search__categories">
                                All Categories
                                <span class="arrow_carrot-down"></span>
                            </div>
                            <input type="text" placeholder="What do yo u need?">
                            <button type="submit" class="site-btn">SEARCH</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>+234 8045 8983 89</h5>
                            <span>support 24/7 time</span>
                        </div>
                    </div>
                </div>
                <div class="hero__item set-bg" data-setbg="{{ asset('fe/img/hero/banner-5.png')}}">
                    <div class="hero__text">
                        <span>HTP Maitama</span>
                        <h2>2023 <br />Harvest <br />Of Divine Sustenance</h2>
                        <p>Its good to give God Thanks</p>
                        <a href="#" class="primary-btn">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->