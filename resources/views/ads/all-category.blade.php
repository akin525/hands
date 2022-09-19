@extends("ads.lay.header")

@section('content')
    <div class="section-padding2 plr">
        <div class="container-fluid">
            <div class="row">

    @include('ads.lay.category')
                <div class="col-xxl-9 col-xl-9  col-lg-8 col-md-7">
                    <div class="viewItems">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="select-itms">
                                    <select name="select" class="niceSelect">
                                        <option value="">New York, USA</option>
                                        <option value="">Location PK</option>
                                        <option value="">Location US</option>
                                        <option value="">Location UK</option>
                                    </select>
                                    <i class="las la-map-marker-alt  icon"></i>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="SearchWrapper">
                                    <div class="searchBox-wrapper">

                                        <form action="#" class="search-box">
                                            <div class="input-form">
                                                <input type="text" class=" keyup-input" placeholder="Search">

                                                <div class="icon">
                                                    <i class="las la-search"></i>
                                                </div>
                                            </div>
                                        </form>

                                        <div class="category-searchbar search-showHide">

                                            <span class="closed-icon"><i class="las la-times"></i></span>
                                            <div class="search-suggestions" id="search_suggestions_wrap">
                                                <div class="search-inner">
                                                    <div class="category-suggestion item-suggestions">
                                                        <h6 class="item-title">Category Suggestions</h6>
                                                        <ul class="category-suggestion-list">
                                                            <li class="list"> <a href="#" class="item">Fruits &amp; Vegetables</a>
                                                            </li>
                                                            <li class="list"><a href="#" class="item">Cooking</a>
                                                            </li><li class="list"> <a href="#" class="item">Dairy</a> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-suggestion item-suggestions">
                                                        <h6 class="item-title">
<span>
Product Suggestions
</span>
                                                            <a href="#" target="_blank" id="search_result_all" class="showAll">Show all</a>
                                                        </h6>
                                                        <ul class="product-suggestion-list mt-4" id="search_result_products">
                                                            <li class="list">
                                                                <a href="#" class="item">
                                                                    <div class="product-image"><img src="{{asset('assets/img/gallery/wishlist1.jpg')}}" alt="img"></div>
                                                                    <div class="product-info">
                                                                        <div class="product-info-top">
                                                                            <h6 class="product-name">Fresh Fruits</h6>
                                                                        </div>
                                                                        <div class="product-price">
                                                                            <div class="price-update-through">
                                                                                <span class="flash-price fw-500">$200.00</span>
                                                                                <span class="flash-old-prices">$240</span>
                                                                            </div>
                                                                            <span class="stock-out">In Stock</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="view">
                                        <button class="customTab active" data-toggle-target=".customTab-content-1"><i class="las la-th-large"></i></button>
                                        <button class="customTab" data-toggle-target=".customTab-content-2"><i class="las la-bars"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="gridView customTab-content customTab-content-1 active">
                        <div class="row ">
                            <div class="col-xl-4  col-lg-6  col-md-12 col-sm-6">
                                <div class="singleFeature mb-24">
                                    <div class="featureImg">
                                        <a href="add_details.html"><img src="{{asset('assets/img/gallery/catitems8.jpg')}}" alt="images"></a>
                                    </div>
                                    <div class="featureCaption">
                                        <h4><a href="add_details.html" class="featureTittle">Apple smartwatch 6</a></h4>
                                         <span class="featurePricing">$139.40</span>
                                        <div class="btn-wrapper">
                                            <span class="pro-btn1">NEW</span>
                                            <span class="pro-btn2">PROMTED</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4  col-lg-6  col-md-12 col-sm-6">
                                <div class="singleFeature mb-24">
                                    <div class="featureImg">
                                        <a href="add_details.html"> <img src="{{asset('assets/img/gallery/catitems2.jpg')}}" alt="images"></a>
                                    </div>
                                    <div class="featureCaption">
                                        <h4><a href="add_details.html" class="featureTittle">Samsung M32</a></h4>
                                         <span class="featurePricing">$139.40</span>
                                        <div class="btn-wrapper">
                                            <span class="pro-btn1">NEW</span>
                                            <span class="pro-btn2">PROMTED</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4  col-lg-6  col-md-12 col-sm-6">
                                <div class="singleFeature mb-24">
                                    <div class="featureImg">
                                        <a href="add_details.html"> <img src="{{asset('assets/img/gallery/catitems3.jpg')}}" alt="images"></a>
                                    </div>
                                    <div class="featureCaption">
                                        <h4><a href="add_details.html" class="featureTittle">Persian cat</a></h4>
                                         <span class="featurePricing">$139.40</span>
                                        <div class="btn-wrapper">
                                            <span class="pro-btn1">NEW</span>
                                            <span class="pro-btn2">PROMTED</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4  col-lg-6  col-md-12 col-sm-6">
                                <div class="singleFeature mb-24">
                                    <div class="featureImg">
                                        <a href="add_details.html"><img src="{{asset('assets/img/gallery/catitems4.jpg')}}" alt="images"></a>
                                    </div>
                                    <div class="featureCaption">
                                        <h4><a href="add_details.html" class="featureTittle">Beats headphone</a></h4>
                                         <span class="featurePricing">$139.40</span>
                                        <div class="btn-wrapper">
                                            <span class="pro-btn1">NEW</span>
                                            <span class="pro-btn2">PROMTED</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4  col-lg-6  col-md-12 col-sm-6">
                                <div class="singleFeature mb-24">
                                    <div class="featureImg">
                                        <a href="add_details.html"><img src="{{asset('assets/img/gallery/catitems5.jpg')}}" alt="images"></a>
                                    </div>
                                    <div class="featureCaption">
                                        <h4><a href="add_details.html" class="featureTittle">4 Bed 2 storey house</a></h4>
                                         <span class="featurePricing">$139.40</span>
                                        <div class="btn-wrapper">
                                            <span class="pro-btn1">NEW</span>
                                            <span class="pro-btn2">PROMTED</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4  col-lg-6  col-md-12 col-sm-6">
                                <div class="singleFeature mb-24">
                                    <div class="featureImg">
                                        <a href="add_details.html"> <img src="{{asset('assets/img/gallery/catitems6.jpg')}}" alt="images"></a>
                                    </div>
                                    <div class="featureCaption">
                                        <h4><a href="add_details.html" class="featureTittle">Apple smartwatch 6</a></h4>
                                         <span class="featurePricing">$139.40</span>
                                        <div class="btn-wrapper">
                                            <span class="pro-btn1">NEW</span>
                                            <span class="pro-btn2">PROMTED</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6  col-md-12  col-sm-6">
                                <div class="singleFeature mb-24">
                                    <div class="featureImg">
                                        <a href="add_details.html"> <img src="{{asset('assets/img/gallery/catitems7.jpg')}}" alt="images"></a>
                                    </div>
                                    <div class="featureCaption">
                                        <h4><a href="add_details.html" class="featureTittle">Apple smartwatch 6</a></h4>
                                         <span class="featurePricing">$139.40</span>
                                        <div class="btn-wrapper">
                                            <span class="pro-btn1">NEW</span>
                                            <span class="pro-btn2">PROMTED</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6  col-md-12  col-sm-6">
                                <div class="singleFeature mb-24">
                                    <div class="featureImg">
                                        <a href="add_details.html"><img src="{{asset('assets/img/gallery/catitems8.jpg')}}" alt="images"></a>
                                    </div>
                                    <div class="featureCaption">
                                        <h4><a href="add_details.html" class="featureTittle">Apple smartwatch 6</a></h4>
                                         <span class="featurePricing">$139.40</span>
                                        <div class="btn-wrapper">
                                            <span class="pro-btn1">NEW</span>
                                            <span class="pro-btn2">PROMTED</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6  col-md-12  col-sm-6">
                                <div class="singleFeature mb-24">
                                    <div class="featureImg">
                                        <a href="add_details.html"> <img src="{{asset('assets/img/gallery/catitems9.jpg')}}" alt="images"></a>
                                    </div>
                                    <div class="featureCaption">
                                        <h4><a href="add_details.html" class="featureTittle">Apple smartwatch 6</a></h4>
                                         <span class="featurePricing">$139.40</span>
                                        <div class="btn-wrapper">
                                            <span class="pro-btn1">NEW</span>
                                            <span class="pro-btn2">PROMTED</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="listingView customTab-content customTab-content-2">
                        <div class="row ">
                            <div class="col-xl-6 col-lg-12">
                                <div class="singleFlexitem mb-24">
                                    <div class="recentImg">
                                        <a href="add_details.html"><img src="{{asset('assets/img/gallery/catitems8.jpg')}}" alt="images"></a>
                                    </div>
                                    <div class="recentCaption">
                                        <h5><a href="add_details.html" class="featureTittle">Apple smartwatch 6</a></h5>
                                        <p class="featureCap">Dallas, Texas · <strong class="subCap">24hrs ago</strong></p>
                                        <span class="featurePricing">$146,300</span>
                                        <div class="btn-wrapper">
                                            <span class="pro-btn1">RENOVETED</span>
                                            <span class="pro-btn2">PROMOTED</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="singleFlexitem mb-24">
                                    <div class="recentImg">
                                        <a href="add_details.html"><img src="{{asset('assets/img/gallery/catitems2.jpg')}}" alt="images"></a>
                                    </div>
                                    <div class="recentCaption">
                                        <h5><a href="add_details.html" class="featureTittle">Samsung M32</a></h5>
                                        <p class="featureCap">Dallas, Texas · <strong class="subCap">24hrs ago</strong></p>
                                        <span class="featurePricing">$124.80</span>
                                        <div class="btn-wrapper">
                                            <span class="pro-btn1">RENOVETED</span>
                                            <span class="pro-btn2">PROMOTED</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="singleFlexitem mb-24">
                                    <div class="recentImg">
                                        <a href="add_details.html"><img src="{{asset('assets/img/gallery/catitems3.jpg')}}" alt="images"></a>
                                    </div>
                                    <div class="recentCaption">
                                        <h5><a href="add_details.html" class="featureTittle">Persian cat</a></h5>
                                        <p class="featureCap">Dallas, Texas · <strong class="subCap">24hrs ago</strong></p>
                                        <span class="featurePricing">$34.80</span>
                                        <div class="btn-wrapper">
                                            <span class="pro-btn1">RENOVETED</span>
                                            <span class="pro-btn2">PROMOTED</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="singleFlexitem mb-24">
                                    <div class="recentImg">
                                        <a href="add_details.html"><img src="{{asset('assets/img/gallery/catitems4.jpg')}}" alt="images"></a>
                                    </div>
                                    <div class="recentCaption">
                                        <h5><a href="add_details.html" class="featureTittle">Beats headphone</a></h5>
                                        <p class="featureCap">Dallas, Texas · <strong class="subCap">24hrs ago</strong></p>
                                        <span class="featurePricing">$150.19</span>
                                        <div class="btn-wrapper">
                                            <span class="pro-btn2">PROMOTED</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="singleFlexitem mb-24">
                                    <div class="recentImg">
                                        <a href="add_details.html"><img src="{{asset('assets/img/gallery/catitems5.jpg')}}" alt="images"></a>
                                    </div>
                                    <div class="recentCaption">
                                        <h5><a href="add_details.html" class="featureTittle">4 Bed 2 storey house</a></h5>
                                        <p class="featureCap">Dallas, Texas · <strong class="subCap">24hrs ago</strong></p>
                                        <span class="featurePricing">$99.99</span>
                                        <div class="btn-wrapper">
                                            <span class="pro-btn1">RENOVETED</span>
                                            <span class="pro-btn2">PROMOTED</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="singleFlexitem mb-24">
                                    <div class="recentImg">
                                        <a href="add_details.html"><img src="{{asset('assets/img/gallery/catitems6.jpg')}}" alt="images"></a>
                                    </div>
                                    <div class="recentCaption">
                                        <h5><a href="add_details.html" class="featureTittle">Apple smartwatch 6</a></h5>
                                        <p class="featureCap">Dallas, Texas · <strong class="subCap">24hrs ago</strong></p>
                                        <span class="featurePricing">$380</span>
                                        <div class="btn-wrapper">
                                            <span class="pro-btn1">RENOVETED</span>
                                            <span class="pro-btn2">PROMOTED</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="singleFlexitem mb-24">
                                    <div class="recentImg">
                                        <a href="add_details.html"><img src="{{asset('assets/img/gallery/catitems7.jpg')}}" alt="images"></a>
                                    </div>
                                    <div class="recentCaption">
                                        <h5><a href="add_details.html" class="featureTittle">4 Bed 2 storey house</a></h5>
                                        <p class="featureCap">Dallas, Texas · <strong class="subCap">24hrs ago</strong></p>
                                        <span class="featurePricing">$99.99</span>
                                        <div class="btn-wrapper">
                                            <span class="pro-btn1">RENOVETED</span>
                                            <span class="pro-btn2">PROMOTED</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="singleFlexitem mb-24">
                                    <div class="recentImg">
                                        <a href="add_details.html"><img src="{{asset('assets/img/gallery/catitems8.jpg')}}" alt="images"></a>
                                    </div>
                                    <div class="recentCaption">
                                        <h5><a href="add_details.html" class="featureTittle">Apple smartwatch 6</a></h5>
                                        <p class="featureCap">Dallas, Texas · <strong class="subCap">24hrs ago</strong></p>
                                        <span class="featurePricing">$380</span>
                                        <div class="btn-wrapper">
                                            <span class="pro-btn1">RENOVETED</span>
                                            <span class="pro-btn2">PROMOTED</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="pagination mt-60">
                                <ul class="pagination-list">
                                    <li class=" wow fadeInRight" data-wow-delay="0.0s"><a href="#" class="page-number"><i class="las la-angle-left"></i></a></li>
                                    <li><span class="page-number current">1</span></li>
                                    <li><a href="#" class="page-number">2</a></li>
                                    <li><a href="#" class="page-number">3</a></li>
                                    <li><a href="#" class="page-number">4</a></li>
                                    <li><a href="#" class="page-number">5</a></li>
                                    <li class=" wow fadeInLeft" data-wow-delay="0.0s"><a href="#" class="page-number"><i class="las la-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
