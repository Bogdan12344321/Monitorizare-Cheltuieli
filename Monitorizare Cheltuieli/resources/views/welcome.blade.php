@include('layouts.master')
<body>
    <div class="image-banner">


        <div class="form">
            <form action="/login" method="POST">
                {{ csrf_field() }}
                <div class="sub-form">
                    <label>Username:</label>
                    <input type="text" id="text" name="username"/>
                </div>

                @if(count($errors)>0)
                    <div class="error">
                        @foreach($errors->get('username') as $error)
                            {{$error }}
                        @endforeach
                    </div>
                @endif

                <div class="sub-form">
                    <label>Password:</label>
                    <input type="password" id="text" name="password"/>
                </div>

                @if(count($errors)>0)
                    <div class="error">
                        @foreach($errors->get('password') as $error)
                            {{$error }}
                        @endforeach
                    </div>
                @endif

                <input type="submit" id="submit" class="button"value="Login">
                <a href="/register"><div class="button2">Register</div></a>
            </form>
        </div>

    </div>
</body>
