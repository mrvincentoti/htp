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
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><b>Applicants</b> Personal details, Name, Phone Number and Qualification <span>- Free</span></li>
                                <li class="list-group-item"><b>Associations</b> Exco Page <span>- &#8358;20,000</span></li>
                                <li class="list-group-item"><b>Entrepreneurs</b> Business & Contact Details <span>- &#8358;10,000</span></li>
                                <li class="list-group-item"><b>Professional</b> Specifications & Contact Complementary Cards Details <span>- &#8358;10,000</span></li>
                                <li class="list-group-item"><b>Fliers for Advert</b> Full &#8358;50,000; Half &#8358;20,000; <span>Quarter &#8358;10,000</span></li>
                                <li class="list-group-item"><b>Words Advert</b><span>&#8358;10,000</span></li>
                                <li class="list-group-item"><b>Center Spread</b><span>&#8358;1,000,000</span></li>
                                <li class="list-group-item"><b>Inside</b>Front & Back Covers<span> &#8358;1,000,000</span></li>
                                <li class="list-group-item"><b>Back cover</b><span>&#8358;2,000,000</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-sm-12 package__list">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <form method="POST" action="{{ route('pay') }}">
                            @csrf
                            <div class="form-group">
                                <label for="categoryDropdown">Select Your Category</label>
                                <select class="form-control" id="categoryDropdown" style="width: 100%;">
                                    <option value="">Select category</option>
                                    <option data-amount="0">Applicants Personal details, Name, Phone Number and Qualification</option>
                                    <option data-amount="20000">Associations Exco Page <span>- &#8358;20,000</span></option>
                                    <option data-amount="10000"><b>Entrepreneurs</b> Business & Contact Details <span>- &#8358;10,000</span></option>
                                    <option data-amount="10000"><b>Professional</b> Specifications & Contact Complementary Cards Details <span>- &#8358;10,000</span></option>
                                    <option data-amount="20000"><b>Foptioners for Advert</b> Full &#8358;50,000; Half &#8358;20,000; <span>Quarter &#8358;10,000</span></option>
                                    <option data-amount="10000"><b>Words Advert</b><span>&#8358;10,000</span></option>
                                    <option data-amount="1000000"><b>Center Spread</b><span>&#8358;1,000,000</span></option>
                                    <option data-amount="1000000"><b>Inside</b>Front & Back Covers<span> &#8358;1,000,000</span></option>
                                    <option data-amount="2000000"><b>Back cover</b><span>&#8358;2,000,000</span></option>
                                    {{-- <option value="">Select category</option>
                                    @foreach($yellows as $yellow)
                                    <option name="amount" value="{{ $yellow->amount }}">{{ $yellow->title."; ".$yellow->description." - &#8358;".$yellow->amount }}</option>
                                    @endforeach --}}
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter the name you want to appear on the brochure" />
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Phone Number</label>
                                <input type="text" class="form-control" name="phone" placeholder="Enter your phone number" />
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter your email" />
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Qualification</label>
                                <input type="text" class="form-control" name="qualification" placeholder="Enter your qualification" />
                            </div>
                            <input type="hidden" name="email" value="test@gmail.com" required> {{-- required --}}
                            <input type="hidden" name="orderID" value="345">
                            <input type="hidden" name="amount" id="hiddenAmount" value="2000000"> {{-- required in kobo --}}
                            <input type="hidden" name="quantity" value="1">
                            <input type="hidden" name="currency" value="NGN">
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