
<div class="col-lg-3">
    <div class="sidebar">
        <h3>Category</h3>
        <div class="boder-bar"></div>
        <ul class="category">
            <li>
                <a href="{{route('all-category', 'Vehicles' )}}">Vehicles</a>
            </li>
            <li>
{{--                <a href="{{route('all-category', 'Appliances' )}}">Appliances<span>12</span></a>--}}
                <a href="{{route('all-category', 'Appliances' )}}">Appliances</a>
            </li>
            <li>
                <a href="{{route('all-category', 'Fashions' )}}">Fashions</a>
            </li>
            <li>
                <a href="{{route('all-category', 'Properties' )}}">Properties</a>
            </li>
            <li>
                <a href="{{route('all-category', 'Phone-gadgets' )}}">Phone-Gadgets</a>
            </li>
            <li class="end">
                <a href="a{{route('all-category', 'Businesses' )}}">Business</a>
            </li>
        </ul>
    </div>
    <div class="sidebar">
        <h3>Top Products</h3>
        <div class="boder-bar"></div>
        <ul class="top-products">
            @foreach($top as $tp)
            <li>
                <img width="100" src="{{url('/', $tp->cover_image)}}" alt="top-products">
                <div>
                    <a href="{{route('ads-detail', $tp->id)}}">{{$tp->advert_name}}</a>
                    <span>₦{{number_format(intval($tp->amount *1))}}</span>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>
