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
                        <span>Yellow Pages</span>
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
                <h3 class="text-black mb-5">Showcase your skill and/or business on the Laity Council Yellow Pages Directory alongside over 7000 professionals.</h3>
            </div>
            <div class="col-lg-7 col-sm-12">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h3>Categories</h3>
                        <div class="product__details__text">
                            <ul>
                                <li><b>Applicants</b> Personal details, Name, Phone Number and Qualification <span>- Free</span></li>
                                <li><b>Associations</b> Exco Page <span>- &#8358;20,000</span></li>
                                <li><b>Entrepreneurs</b> Business & Contact Details <span>- &#8358;10,000</span></li>
                                <li><b>Professional</b> Specifications & Contact Complementary Cards Details <span>- &#8358;10,000</span></li>
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
            <div class="col-lg-5 col-sm-12 package__list">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Select Your Category</label>
                                <select class="form-control" id="exampleFormControlSelect1" style="width: 100%;">
                                    <!-- <option>Applicants Personal details, Name, Phone Number and Qualification</option>
                                    <option>Associations Exco Page <span>- &#8358;20,000</span></option>
                                    <option><b>Entrepreneurs</b> Business & Contact Details <span>- &#8358;10,000</span></option>
                                    <option><b>Professional</b> Specifications & Contact Complementary Cards Details <span>- &#8358;10,000</span></option>
                                    <option><b>Foptioners for Advert</b> Full &#8358;50,000; Half &#8358;20,000; <span>Quarter &#8358;10,000</span></option>
                                    <option><b>Words Advert</b><span>&#8358;10,000</span></option>
                                    <option><b>Center Spread</b><span>&#8358;1,000,000</span></option>
                                    <option><b>Inside</b>Front & Back Covers<span> &#8358;1,000,000</span></option>
                                    <option><b>Back cover</b><span>&#8358;2,000,000</span></option> -->
                                    <option value="">Select category</option>
                                    @foreach($yellows as $yellow)
                                    <option value="{{ $yellow->id }}">{{ $yellow->title."; ".$yellow->description." - &#8358;".$yellow->amount }}</option>
                                    @endforeach
                                </select>
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