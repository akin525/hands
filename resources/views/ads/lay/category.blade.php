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
                    <img src="{{asset('assets/img/icon/caticon3.svg')}}" class="icon" alt="images"> <span> Vehicles <span class="itemNumber">(1,200)</span></span>
                </a></li>
            <li class="listItem"><a href="{{route('all-category', 'Appliances' )}}" class="items">
                    <img src="{{asset('assets/img/icon/caticon4.svg')}}" class="icon" alt="images"> <span> Appliances <span class="itemNumber">(1,203)</span></span>
                </a></li>
            <li class="listItem"><a href="{{route('all-category', 'Fashions' )}}" class="items">
                    <img src="{{asset('assets/img/icon/caticon5.svg')}}" class="icon" alt="images"> <span> Fashions <span class="itemNumber">(1,110)</span></span>
                </a></li>
            <li class="listItem"><a href="{{route('all-category', 'Properties' )}}" class="items">
                    <img src="{{asset('assets/img/icon/caticon6.svg')}}" class="icon" alt="images"> <span> Properties <span class="itemNumber">(1,200)</span></span>
                </a></li>
{{--            <li class="listItem"><a href="{{route('all-category', 'Pets' )}}" class="items">--}}
{{--                    <img src="{{asset('assets/img/icon/caticon7.svg')}}" class="icon" alt="images"> <span> Pets <span class="itemNumber">(1,012)</span></span>--}}
{{--                </a></li>--}}
            <li class="listItem"><a href="{{route('all-category', 'Education' )}}" class="items">
                    <img src="{{asset('assets/img/icon/caticon8.svg')}}" class="icon" alt="images"> <span> Educations <span class="itemNumber">(1,301)</span></span>
                </a></li>
            <li class="listItem"><a href="a{{route('all-category', 'Businesses' )}}" class="items">
                    <img src="{{asset('assets/img/icon/caticon9.svg')}}" class="icon" alt="images"> <span> Businesses <span class="itemNumber">(902)</span></span>
                </a></li>
{{--            <li class="listItem"><a href="{{route('all-category', 'Sport' )}}" class="items">--}}
{{--                    <img src="{{asset('assets/img/icon/caticon10.svg')}}" class="icon" alt="images"> <span> Sports <span class="itemNumber">(507)</span></span>--}}
{{--                </a></li>--}}
        </ul>

        <div class="price mb-10">
            <h5 class="catTittle">Price</h5>

            <form action="#" class="picPrice">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="input-form">
                            <input type="text" placeholder="Min">

                            <div class="icon"><i class="las la-dollar-sign"></i></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="input-form">
                            <input type="text" placeholder="Max">

                            <div class="icon"><i class="las la-dollar-sign"></i></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="dateTime mb-30">
            <h5 class="catTittle">Date Posted</h5>

            <div class="datePicker">
                <input id="datepicker1" placeholder="10/04/2022" />
            </div>
        </div>
        <div class="btn-wrapper">
            <a href="#" class="cmn-btn4 w-100"> Reset Filter</a>
        </div>
    </div>
</div>
