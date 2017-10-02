<h2 class="p-2 text-center">All Matches</h2>

<div class="row justify-content-center">
    <ul class="list-group col-4 p-2">
        <li class="list-group-item list-group-item-primary">
            {{ $allMatches[0]->Group->GroupName }}
        </li>
    <?php
        $group = 1;
        foreach($allMatches as $match):
            if($group != $match->Group->GroupOrderID)
            {
                echo "</ul><ul class='list-group col-4 p-2'><li class='list-group-item list-group-item-primary'>
                    {$match->Group->GroupName}
                </li>";
                $group = $match->Group->GroupOrderID;
            }
    ?>
          <li class="list-group-item text-center">
            {{ $match->Team1->TeamName }} x {{ $match->Team2->TeamName }}
          </li>
        @endforeach
    </ul>
</div>
