<ul>
    @foreach ($aray as $ray => $ay)
        <li>{{ $ray . " Mempunyai uang sebesar = " . $ay}}</li>
    @endforeach
</ul>