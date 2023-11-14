
<div class="col-lg-3">
    <div class="sidebar">
        <h3>Category</h3>
        <div class="boder-bar"></div>
        <ul class="category">
            <li>
                <a href="{{route('all-category', 'Vehicles' )}}">Vehicles<span>32</span></a>
            </li>
            <li>
                <a href="{{route('all-category', 'Appliances' )}}">Appliances<span>12</span></a>
            </li>
            <li>
                <a href="{{route('all-category', 'Fashions' )}}">Fashions<span>14</span></a>
            </li>
            <li>
                <a href="{{route('all-category', 'Properties' )}}">Properties<span>7</span></a>
            </li>
            <li>
                <a href="{{route('all-category', 'Education' )}}">Education<span>10</span></a>
            </li>
            <li class="end">
                <a href="a{{route('all-category', 'Businesses' )}}">Business<span>30</span></a>
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
