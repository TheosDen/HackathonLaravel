<div class="col-lg-4">
    <img class="rounded-circle"
         src="/images/{{$hero->id}}-small.jpg"
         alt="Generic placeholder image" width="140" height="140">
    <h2>{{$hero->name}}</h2>
    <p>{{$hero->description}}</p>
    <p><a class="btn btn-secondary" href="/heroes/{{$hero->id}}" role="button">View details &raquo;</a></p>
</div><!-- /.col-lg-4 -->