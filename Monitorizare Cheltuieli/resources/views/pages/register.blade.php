@include('layouts.master')
<body>
<div class="image-banner">


    <div class="form2">
        <form  action="/insert" method="POST">
        {{ csrf_field() }}
            <div class="sub-form">
                <label>Nume:</label>
                <input type="text" id="nume" name="nume"/>
            </div>
            @if(count($errors)>0)
            <div class="error">
                @foreach($errors->get('nume') as $error)
                        {{$error }}
                    @endforeach
            </div>
            @endif
            <div class="sub-form">
                <label>Prenume:</label>
                <input type="text" id="prenume" name="prenume"/>
            </div>
            @if(count($errors)>0)
                <div class="error">
                    @foreach($errors->get('prenume') as $error)
                        {{$error }}
                    @endforeach
                </div>
            @endif
            <div class="sub-form">
                <label>Username:</label>
                <input type="text" id="username" name="username"/>
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
                <input type="password" id="password" name="password"/>
            </div>
            @if(count($errors)>0)
                <div class="error">
                    @foreach($errors->get('password') as $error)
                        {{$error }}
                    @endforeach
                </div>
            @endif
            <input type="submit" id="submit" class="button" value="Register">
            <a href="/"><div class="button2">Cancel</div></a>
        </form>
    </div>

</div>
</body>
