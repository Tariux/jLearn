<?php
    $user_data = (auth()->user()) ? auth()->user() : exit;

?>

        @include('includes.header')

        <div class="container center-screen">
            <div>

            
            <form action="{{ route('save-profile') }}" method="post">
                @csrf
                    <label for="username">نام کاربری:</label>
                    <input type="text" id="username" name="username" placeholder="اینجا وارد کنید" value="{{$user_data->username}}">    
                    <br>
    
                    <label for="email">پست الکترونیک:</label>
                    <input type="email" name="email" id="email" placeholder="اینجا وارد کنید" value="{{$user_data->email}}" disabled>    
                    <br>
    
                    <label for="mobile">شماره همراه:</label>
                    <input type="text" name="mobile" id="mobile" placeholder="اینجا وارد کنید" value="{{$user_data->mobile}}">
                    <br>
    
                    <br>
                    <input type="submit" class="success" value="ذخیره اطلاعات">
                    
    
    
    
                    
    
            </form>

            <br>
            <a href="{{ route('logout') }}">
                <button class="fail">
                    خروج از حساب
                </button>
            </a>
            <br>
        </div>

        </div>
     
        
        
    
</body>

</html>