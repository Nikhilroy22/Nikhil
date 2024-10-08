<x-nikhil>
   <form method="post" action="signup">
     @csrf
    <h1>Sign Up</h1>
    <input type="text" name="username" placeholder="Username"/>
     <p>@error('username')
  {{ $message }}
  @enderror</p>
    <input type="text" name="name" placeholder="Name"/>
     <p>@error('name')
  {{ $message }}
  @enderror</p>
    <input type="text" name="email" placeholder="email"/>
     <p>@error('email')
  {{ $message }}
  @enderror</p>
    <input type="text" name="password" placeholder="Password"/>
     <p>@error('password')
  {{ $message }}
  @enderror</p>
    <button>Sign Up</button>
  </form>
   <u class="wrap">Already registered?  
  <a href="{{ route('login') }}" wiree:navigate> Login</a>
  </u>
  <br>
 
  <div id="demo"></div>
  <div id="pinu"></div>
 <form>
   <input type="text" id="text" placeholder="type text">
   <input class="btn" id="button" type="submit">
   
 </form>
  
  <div id="kall" style="color:red; text-align:center;"></div>
  
  <div id="loading" style="color:red; text-align:center;"><h1>Loading..</h1></div>
 <style>
   .pala{
     color: red;
   }
 </style>
  
  <script>
    
    
  
    $(document).ready(function(){
      
      
      $("#button").click(function(e){
        e.preventDefault();
        document.getElementById("button").disabled = true;
        //$("#pinu").prepend('<p class="pala">kk</p>');
        //$(".btn").attr("disabled", 'disabled');
      // alert('click');
      const data = {
        'name': $('#text').val(),
      }
      //Livewire.navigate('/new/url');
      console.log(data);
      $('#text').val("");
    //alert(data.name);
    document.getElementById("demo").innerHTML = data.name; 
    //document.getElementById("button").disabled = false;
     //  $(".btn").removeAttr("disabled");
});
$("#loading").show();

//const nikhil = process.env.NIKHIL;
  $.ajax({
    type:"GET",
    url: '{{route('fetchdata')}}',
    headers: {
        'api_key': 'vtn16awab25iwpny5lxt',},
    success: function(response) {
           $("#loading").hide();
            $.each(response, function(key, user) {
            console.log(key);
                 $('#kall').append(`<h1>${user.name} (${user.email})</h1>`);
            });
            
          
        },
      error:function(err){
        alert('faild');
      }
    
  });
});
      
 
    
  </script>
  
</x-nikhil>