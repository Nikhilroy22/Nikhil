<x-Layoutuser>
  <div class="pro">
    
  @auth
  <h1>Username:{{Auth::user()->name}}</h1>
  <h1>UserID:{{Auth::user()->id}}</h1>
  <h1>BDT:{{Auth::user()->balance}}</h1>
  @endauth
  </div>
  <div class="mmm">
  <span class="kk">Deposit</span>
  <span class="kk"><a href="/postadd">Withdrawal</a></span>
  </div>
   <div class="mmm">
  <span class="kk"><a href="/send-money">Send Money</a></span>
  <span class="kk"><a href="/postadd">Add Post</a></span>
  </div>
   <div class="mmm">
  <span class="kk">Setting</span>
  <span class="kk"><a href="/postadd">Add Post</a></span>
  </div>
   <div class="mmm">
  <span class="kk">Setting</span>
  <span class="kk"><a href="/postadd">Add Post</a></span>
  </div>
   <div class="mmm">
  <span class="kk">Setting</span>
  <span class="kk"><a href="/postadd">Add Post</a></span>
  </div>
   <div class="mmm">
  <span class="kk">Setting</span>
 
  </div>
  @auth
<form method="post" action="logout">
  @csrf
  <button class="button">Logout</button>
</form>
@endauth
</x-Layoutuser>