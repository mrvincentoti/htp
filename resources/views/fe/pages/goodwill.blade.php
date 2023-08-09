@extends('fe.layouts.master')
@section('content')
@include('fe.layouts.hero-2');

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="{{ asset('fe/img/breadcrumb.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>#htp2023harvest</h2>
                    <div class="breadcrumb__option">
                        <a href="/">Home</a>
                        <span>Goodwill Messages</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->
<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                <h3 class="text-black mb-5">Book a section on our HTP 2023 Harvest Brochure for your Goodwill messages and advert.</h3>
            </div>
            <div class="col-lg-5 col-sm-12">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h3>Categories</h3>
                        <div class="product__details__text">
                            <ul>
                                <li><b>Fliers for Advert</b> Full &#8358;50,000; Half &#8358;20,000; <span>Quarter &#8358;10,000</span></li>
                                <li><b>Words Advert</b><span>&#8358;10,000</span></li>
                                <li><b>Center Spread</b><span>&#8358;1,000,000</span></li>
                                <li><b>Inside</b>Front & Back Covers<span> &#8358;1,000,000</span></li>
                                <li><b>Back cover</b><span>&#8358;2,000,000</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-sm-12 package__list">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Select Your Category</label>
                                <select class="form-control" id="exampleFormControlSelect1" style="width: 100%;">
                                    <option><b>Foptioners for Advert</b> Full &#8358;50,000; Half &#8358;20,000; <span>Quarter &#8358;10,000</span></option>
                                    <option><b>Words Advert</b><span>&#8358;10,000</span></option>
                                    <option><b>Center Spread</b><span>&#8358;1,000,000</span></option>
                                    <option><b>Inside</b>Front & Back Covers<span> &#8358;1,000,000</span></option>
                                    <option><b>Back cover</b><span>&#8358;2,000,000</span></option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter the name you want to appear on the brochure" />
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Phone Number</label>
                                <input type="text" class="form-control" name="phone" placeholder="" />
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Email</label>
                                <input type="email" class="form-control" name="name" placeholder="" />
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Message</label>
                                <textarea class="form-control" name="message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-success btn-block">Proceed</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Section End -->

@endsection