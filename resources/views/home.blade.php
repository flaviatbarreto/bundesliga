<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bundesliga Stats</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <h1 class="mt-5 mb-5 text-center">Bundesliga Stats</h1>

            <ul class="nav nav-pills nav-fill justify-content-center" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link btn-light active" id="next-matches-tab" data-toggle="pill" href="#next-matches" role="tab" aria-controls="next-matches" aria-expanded="true">UPCOMING MATCHES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-light" id="all-matches-tab" data-toggle="pill" href="#all-matches" role="tab" aria-controls="all-matches" aria-expanded="true">ALL MATCHES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-light" id="stats-tab" data-toggle="pill" href="#stats" role="tab" aria-controls="stats" aria-expanded="true">WIN/LOSS RATIO</a>
              </li>
            </ul>
            <br/>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="next-matches" role="tabpanel" aria-labelledby="next-matches-tab">
                    @include('matches/next')
                </div>

                <div class="tab-pane fade" id="all-matches" role="tabpanel" aria-labelledby="all-matches-tab">
                    @include('matches/all')
                </div>

                <div class="tab-pane fade" id="stats" role="tabpanel" aria-labelledby="stats-tab">
                    @include('teams/ratio')
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </body>
</html>
