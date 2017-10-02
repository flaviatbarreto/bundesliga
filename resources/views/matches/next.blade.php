<h2 class="p-2 text-center">{{ $nextGameGroup }}. Spieltag</h2>
<div class="row justify-content-center">
    <ul class="list-group col-6 pb-2">
        @foreach($nextMatches as $match)
          <li class="list-group-item text-center">
            {{ $match->Team1->TeamName }} x {{ $match->Team2->TeamName }}
          </li>
        @endforeach
    </ul>
</div>
