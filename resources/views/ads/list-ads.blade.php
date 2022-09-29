@extends("ads.lay.header")

@section('content')
    <div class="section-padding2 plr">
        <div class="container-fluid">
            <center>
            <a href="{{url('/', $banner->picture)}}"> <img width="800" src="{{url('/', $banner->picture)}}" alt="banner"></a>
            </center>
            <div class="row">

                @include('ads.lay.category')
                <div class="col-xxl-9 col-xl-9  col-lg-8 col-md-7">
                    <div class="viewItems">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="select-itms">
{{--                                    <select name="select" class="niceSelect">--}}
{{--                                        <option value="">New York, USA</option>--}}
{{--                                        <option value="">Location PK</option>--}}
{{--                                        <option value="">Location US</option>--}}
{{--                                        <option value="">Location UK</option>--}}
{{--                                    </select>--}}
                                    <i class="las la-map-marker-alt  icon"></i>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="SearchWrapper">
                                    <div class="searchBox-wrapper">

{{--                                        <form action="#" class="search-box">--}}
{{--                                            <div class="input-form">--}}
{{--                                                <input type="text" class=" keyup-input" placeholder="Search">--}}

{{--                                                <div class="icon">--}}
{{--                                                    <i class="las la-search"></i>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </form>--}}

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
                            @foreach($all as$pa)
                            <div class="col-xl-4  col-lg-6  col-md-12 col-sm-6">
                                <div class="singleFeature mb-24">
                                    <div class="">
                                        <a href="{{route('ads-detail', $pa->id)}}"><img width="200" src="{{url('/', $pa->cover_image)}}" alt="images"></a>
                                    </div>
                                    <div class="featureCaption">
                                        <h4><a href="{{route('ads-detail', $pa->id)}}" class="featureTittle">{{$pa->advert_name}}</a></h4>
                                         <span class="featurePricing">₦{{number_format(intval($pa->amount *1))}}</span>
                                        <div class="btn-wrapper">
                                            <span class="pro-btn1">NEW</span>
                                            <span class="pro-btn2">PROMTED</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Styles -->
                    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

                    <!-- Scripts -->
                    <script src="{{ asset('js/app.js') }}" defer></script>
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            {{$all->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
