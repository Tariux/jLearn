@include('includes.header')

        <div class="container center-screen">
            <div>

                <h1 style="font-weight: 50;color:#fff;">LIVE FREE OR DIE</h1>
            
            <a href="{{ route('home') }}">
                <button class="success">
                    صفحه اصلی
                </button>
            </a>

            <a href="{{ route('login-page') }}">
                <button class="success">
                    ورود به حساب کاربری
                </button>
            </a>
            <a href="{{ route('create-account') }}">
                <button class="success">
                    ایجاد حساب کاربری
                </button>
            </a>
            <a href="{{ route('account') }}">
                <button class="success">
                    ناحیه کاربری
                </button>
            </a>
            <a href="{{ route('create-service-page') }}">
                <button class="success">
                    سرویس ها
                </button>
            </a>
            <br>
        </div>

        </div>
     
        
        
    
</body>

</html>