<h1>User page</h1>
@if($user=="anil")
<h2>hi {{$user}}</h2>
@elseif($user=="sam")
<h3>hi{{$user}}</h3>
@else
<h1>
    hello unknown users
</h1>
@endif
@for($i=0;$i<10;$i++)
<h4>{{$i}}</h4>
@endfor


