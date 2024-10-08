<x-nikhil>
  <h1>Category</h1>
  @foreach($cate as $cat)
  <h1><a href="/{{$cat->slug}}"> {{$cat->title}}</a></h1>
 
  @endforeach
  
</x-nikhil>