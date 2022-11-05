
    @include('includes.header')

    <span class="page-number">

    </span>
    <div class="control-buttons">
        <button onclick="prevPage()">قبلی</button>
        <button onclick="nextPage()">بعدی</button>

    </div>
    
    <form action="{{ route('login') }}" method="post">

        {{ csrf_field() }}
        <div class="container center-screen page" id="welcome">

            <h1 class="no-select">ورود به حساب کاربری!</h1> 
    
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
            </svg>
        </div>
        <div class="container center-screen page" id="insert_personal_data_name">
            <div>

                <label for="email">پست الکترونیک</label>
                <br>
                <input type="email" name="email" id="email" placeholder="اینجا وارد کنید">    
                <br>
                <label for="password">کلمه عبور</label>
                <br>
                <input type="password" id="password" name="password" placeholder="اینجا وارد کنید">
            
                <br>
                <input type="submit" class="success" value="ورود">

            </div>
        </div>
        
    </form>
    <div class="center-screen message success" id="logged_in">       
        <div>
            <h1>با موفقیت به حساب کاربری وارد شدید!</h1>
            <a href="{{ route('account') }}">
                <button>
                    ناحیه کاربری
                </button>
            </a>
    
        </div>
    </div>
    <div class="center-screen message fail" id="fail">       
        <div>
            <h1>مشکلی پیش آمد</h1>
            <a href="{{ route('login') }}">

            <button>
                تلاش مجدد
            </button>
            </a>
    
        </div>
    </div>
</body>

</html>