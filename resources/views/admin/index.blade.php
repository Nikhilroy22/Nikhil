<x-adminlayout>
<h1><a href="/admin/addpost">Add Post</a></h1>
<form class="kk" method="post" action="/admin/catadd">
  @csrf
  <input class="select" name="slug" type="text" placeholder="Type Category Name">
   @error('slug')
    <p>{{ $message }}</p>
    @enderror
  <button class="button">Add Category</button>
</form>

</x-adminlayout>
  
  

