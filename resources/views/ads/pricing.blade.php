<style>
    .pricing_table{
        color:#fff;
        margin:10px 0;
        background:#555;
        text-align: center;
        transition: all 0.30s linear 0s;
    }
    .pricing_table:hover{
        background: #930e0e;
    }
    .pricing_table.active,
    .pricing_table .pricing_table_plan .btn-info.active{
        background: #930e0e;
    }
    .pricing_table:hover .pricing_table_plan .btn-info{
        background:#930e0e;
    }
    .pricing_table_header{
        padding:40px;
    }
    .pricing_table_header > i{
        display: block;
        font-size:40px;
    }
    .pricing_table_header .title{
        display:block;
        text-transform: capitalize;
    }
    .pricing_table_header .price-plan{
        display:block;
    }
    .pricing_table_header .price-plan i{
        font-size:16px;
    }
    .pricing_table_header .price{
        font-size:40px;
    }
    .pricing_table_header .monthly_plan{
        font-size:20px;
    }
    .pricing_table .pricing_table_plan{
        border-top-right-radius:30px;
        border-top-left-radius:30px;
        padding:40px 20px;
        background:#222;
    }
    .pricing_table .pricing_table_plan ul{
        margin:0 0 50px;
        padding:0;
    }
    .pricing_table .pricing_table_plan ul li{
        list-style:none;
        margin:15px 0;
    }
    .pricing_table .pricing_table_plan .btn-info{
        padding:8px 40px;
        background: transparent;
        transition: all 0.30s linear 0s;
    }
</style>
<br>
<div class="romana_section_title text-center romana_recent_cause">
    {{--    <h2>Business Plan</h2>--}}
</div>
<div class="container">
    {{--        <h1>Pricing Table</h1>--}}
    <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class="pricing_table">
                <div class="pricing_table_header">
                    <i class="fa fa-home"></i>
                    <h2 class="title">basic</h2>
                    <span class="price-plan">
{{--                        <i class="fa fa-inr"></i>--}}
                        <span class="price">₦10,000</span>
                        <span class="monthly_plan"></span>
                    </span>
                </div>
                <div class="pricing_table_plan">
                    <ul>
                        <li>Once Payment</li>
                        <li>Last for: One Month</li>
                        <li>Training program</li>
                        <li>Training support</li>
                        <li>Strategic planning</li>
                        <li>Financial service</li>
                    </ul>
                    <button type="button" onclick="window.location='{{url('business')}}'" class="btn btn-info">Register Now</button>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="pricing_table active">
                <div class="pricing_table_header">
                    <i class="fa fa-puzzle-piece"></i>
                    <h2 class="title">Advanced</h2>
                    <span class="price-plan">
{{--                        <i class="fa fa-inr"></i>--}}
                        <span class="price">₦20,000</span>
                        <span class="monthly_plan"></span>
                    </span>
                </div>
                <div class="pricing_table_plan">
                    <ul>
                        <li>Once Payment</li>
                        <li>Last for: Two Month</li>
                        <li>Skills training</li>
                        <li>Strategic Planning</li>
                        <li>Financial Service</li>
                        <li>Business Promotion</li>
                        <li>Development</li>
                    </ul>
                    <button type="button" onclick="window.location='{{url('business')}}'" class="btn btn-info active">Register Now</button>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="pricing_table">
                <div class="pricing_table_header">
                    <i class="fa fa-users"></i>
                    <h2 class="title">Pro</h2>
                    <span class="price-plan">
{{--                        <i class="fa fa-inr"></i>--}}
                        <span class="price">₦30,000</span>
                        <span class="monthly_plan"></span>
                    </span>
                </div>
                <div class="pricing_table_plan">
                    <ul>
                        <li>Once Payment</li>
                        <li>Last for: Four Month</li>
                        <li>Training and development</li>
                        <li>Brand management</li>
                        <li>Business Promotion</li>
                        <li>Financial service</li>
                        <li>Portfolio management</li>
                        <li>Business support</li>
                    </ul>
                    <button type="button" class="btn btn-info" onclick="window.location='{{url('business')}}'">Register Now</button>
                </div>
            </div>
        </div>
    </div>
</div>
