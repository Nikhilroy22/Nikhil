@foreach($user as $users)

<pre><a href="/{{ $users->slug }}">{{ $users->title }}</a>
</pre>
@endforeach