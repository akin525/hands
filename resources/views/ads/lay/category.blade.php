<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<div class="col-xxl-3  col-xl-3 col-lg-4 col-md-5">
    <div class="cateSidebar">
        <h5 class="catTittle2">All Categories</h5>

        <ul class="listing listScroll">
{{--            <li class="listItem"><a href="{{route('all-category', 'Electronics' )}}" class="items">--}}
{{--                    <img src="{{asset('assets/img/icon/caticon1.svg')}}" class="icon" alt="images"> <span>Electronics <span class="itemNumber">(1,200)</span></span>--}}
{{--                </a></li>--}}
{{--            <li class="listItem"><a href="{{route('all-category', 'Mobile' )}}" class="items">--}}
{{--                    <img src="{{asset('assets/img/icon/caticon2.svg')}}" class="icon" alt="images"> <span> Mobile <span class="itemNumber">(1,299)</span></span>--}}
{{--                </a></li>--}}
            <li class="listItem"><a href="{{route('all-category', 'Vehicles' )}}" class="items">
                    <img src="{{asset('assets/img/icon/caticon3.svg')}}" class="icon" alt="images"> <span> Vehicles <span class="itemNumber"></span></span>
                </a></li>
            <li class="listItem"><a href="{{route('all-category', 'Appliances' )}}" class="items">
                    <img src="{{asset('assets/img/icon/caticon4.svg')}}" class="icon" alt="images"> <span> Appliances <span class="itemNumber"></span></span>
                </a></li>
            <li class="listItem"><a href="{{route('all-category', 'Fashions' )}}" class="items">
                    <img src="{{asset('assets/img/icon/caticon5.svg')}}" class="icon" alt="images"> <span> Fashions <span class="itemNumber"></span></span>
                </a></li>
            <li class="listItem"><a href="{{route('all-category', 'Properties' )}}" class="items">
                    <img src="{{asset('assets/img/icon/caticon6.svg')}}" class="icon" alt="images"> <span> Properties <span class="itemNumber"></span></span>
                </a></li>
{{--            <li class="listItem"><a href="{{route('all-category', 'Pets' )}}" class="items">--}}
{{--                    <img src="{{asset('assets/img/icon/caticon7.svg')}}" class="icon" alt="images"> <span> Pets <span class="itemNumber">(1,012)</span></span>--}}
{{--                </a></li>--}}
            <li class="listItem"><a href="{{route('all-category', 'Education' )}}" class="items">
                    <img src="{{asset('assets/img/icon/caticon2.svg')}}" class="icon" alt="images"> <span> Phone Gadgets <span class="itemNumber"></span></span>
                </a></li>
            <li class="listItem"><a href="a{{route('all-category', 'Businesses' )}}" class="items">
                    <img src="{{asset('assets/img/icon/caticon9.svg')}}" class="icon" alt="images"> <span> Businesses <span class="itemNumber"></span></span>
                </a></li>
{{--            <li class="listItem"><a href="{{route('all-category', 'Sport' )}}" class="items">--}}
{{--                    <img src="{{asset('assets/img/icon/caticon10.svg')}}" class="icon" alt="images"> <span> Sports <span class="itemNumber">(507)</span></span>--}}
{{--                </a></li>--}}
        </ul>

    </div>
</div>
