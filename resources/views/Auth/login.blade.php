<x-nikhil>
 
   
   <form method="post" action="{{route('login')}}" class="form-container">
    <h1>Login</h1>
   @if(session('loginmessage'))
    <p style="color:red;">{{ session('loginmessage') }}</p>
@endif
     @csrf
    <input class="input-form" type="text" name="username" placeholder="Username"/>
  <p>@error('username')
  {{ $message }}
  @enderror</p>
    <input class="input-form" type="text" name="password" placeholder="Password"/>
    <p>@error('password')
  {{ $message }}
  @enderror</p>
    <button class="button">Login</button>
  </form>
    <p class="forgot">forgot password</p>
  
  
   <yy class="wrap">Not registered?  
  <a href="{{ route('signup') }}" wiree:navigate> Sign Up</a>
  </yy>
  

</x-nikhil>