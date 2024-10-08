<div class="modal" id="myModal">
  <span class="n2">
    <div class="head">
      @Auth
      {{ Auth::user()->name }}
      @endauth
      </div>
  <ol class="catnav">
    <il class="catlist"><a href="/login">Login</a></il>
    <il class="catlist"><a href="/signup">Sign Up</a></il>
   
    
</ol>
    <span class="close">X</span>
</span>
</div>