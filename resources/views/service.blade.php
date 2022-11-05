@include('includes.header')

        <div class="container center-screen">
            <div>

                <p style="font-weight: 50;color:#fff;">{{$service_data->service_price}} تومان</p>
                <span style="font-weight: 50;color:#fff;">{{$service_data->service_type}}</span>
                <h1 style="font-weight: 50;color:#fff;">{{$service_data->service_title}}</h1>
                <p style="font-weight: 50;color:#fff;">{{$service_data->service_desc}}</p>

                <a href="{{ route('home') }}">
                    <button class="success">
                        افزودن به سبد خرید (بزودی)
                    </button>
                </a>

                <a href="{{ route('create-service-page') }}">
                    <button class="fail">
                        نمایش همه سرویس ها
                    </button>
                </a>
        </div>

        </div>
     
        
        
    
</body>

</html>