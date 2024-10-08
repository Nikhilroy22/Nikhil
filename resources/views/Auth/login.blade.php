<x-nikhil>
   <form method="post" action="{{route('login')}}">
     @csrf
    <h1>Login</h1>
    @if (session('message'))
    <p>{{ session('message') }}</p>
@endif
    <input type="text" name="username" placeholder="Username"/>
  <p>@error('username')
  {{ $message }}
  @enderror</p>
    <input type="text" name="password" placeholder="Password"/>
    <p>@error('password')
  {{ $message }}
  @enderror</p>
    <button>Login</button>
  </form>
    <p class="forgot">forgot password</p>
  
  
   <yy class="wrap">Not registered?  
  <a href="{{ route('signup') }}" wiree:navigate> Sign Up</a>
  </yy>
  

</x-nikhil>