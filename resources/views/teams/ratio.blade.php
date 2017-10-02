<h2 class="p-2 text-center">Teams Win/loss Ratio</h2>
<div class="row justify-content-center">
    <ul class="list-group col-6 pb-2">
        @foreach($teamsRatio as $teamRatio)
        <?php
            $ratio = round($teamRatio['win']/$teamRatio['total']*100, 2);
            $class = "text-success";
            if($ratio < 50) $class = "text-danger";
        ?>

            <li class="list-group-item text-center">
                <span class="{{$class}}">
                    {{$teamRatio['name']}}: {{$ratio}} %
                </span>
            </li>
        @endforeach
    </ul>
</div>
