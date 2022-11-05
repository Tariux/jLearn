<?php
    $user_data = (auth()->user()) ? auth()->user() : exit;

?>

        @include('includes.header')

        <span class="page-number">

        </span>
        <div class="control-buttons">
            <button onclick="prevPage()">ایجاد سرویس</button>
            <button onclick="nextPage()">سرویس ها</button>
        
        </div>
        <div class="container center-screen page" id="create_service">
            <div>

            
            <form action="{{ route('create-service') }}" method="post">
                @csrf
                    <label for="service_title">عنوان:</label>
                    <input type="text" id="service_title" name="service_title" placeholder="اینجا وارد کنید">    
                    <br>
    
                    <label for="service_price">قیمت:</label>
                    <input type="text" name="service_price" id="service_price" placeholder="اینجا وارد کنید">    
                    <br>
    
                    <label for="service_desc">توضیحات:</label>
                    <textarea name="service_desc" id="service_desc" cols="19" rows="3"></textarea>
                    <br>

                    <label for="service_type">انتشار به عنوان:</label>
                    <select name="service_type" id="service_type">
                        <option value="نوشته">نوشته</option>
                        <option value="دوره آموزشی">دوره آموزشی</option>
                        <option value="محصول">محصول</option>
                    </select>
    
                    <br>
                    <input type="submit" class="success" value="افزودن سرویس">
                    
    
    
    
                    
    
            </form>

        </div>

        </div>

        <div class="container page" id="services">
                <section class="services">
                    @if (!$services->isEmpty())
                    @foreach ($services as $service)
                    <div class="service-item">
                        <span>{{ $service->service_type }}</span>
                        <a href="/service/{{$service->service_ID}}">
                            <h1>
                                {{ $service->service_title }}
                            </h1>    
                        </a>
                        <p>{{ $service->service_desc }}</p>
                        <span>قیمت: {{ $service->service_price }} تومان</span>

                    </div>
                @endforeach
                
                    @else
                        <h1 style="text-align: center;">نتیجه ای یافت نشد</h1>
                    @endif
                </section>
        </div>
     
        <div class="center-screen message success" id="service_created">       
            <div>
                <h1>سرویس با موفقیت ایجاد شد!</h1>
                <a href="{{ route('create-service-page') }}">
                    <button>
                        مشاهده
                    </button>
                </a>
        
            </div>
        </div>
        <div class="center-screen message fail" id="fail">       
            <div>
                <h1>مشکلی پیش آمد</h1>
                <a href="{{ route('create-service-page') }}">
    
                <button>
                    تلاش مجدد
                </button>
                </a>
        
            </div>
        </div>
        
    
</body>

</html>