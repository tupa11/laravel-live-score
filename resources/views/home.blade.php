<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Match Results</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>

<body>
    <div class="container">
        <div class="tabs">
            @foreach($categories as $k => $category)
            <a class="tab-btn {{(isset($_GET['filter']) && $_GET['filter'] == $k) || (!isset($_GET['filter']) && $k == 'all') ? 'active' : ''}}" href="{{ route('home', ['filter' => $k]) }}">{{$category}} ({{$countMatches[$k]}})</a>
            @endforeach
        </div>

        <div class="matches">
            @foreach ($tournaments as $k => $tournament)
            <div class="league-header">
                <img src="{{$tournament['country']['logo']}}" class="flag" alt="{{$tournament['country']['name']}}">
                <span>
                    {{$tournament['country']['name']}}: 
                    <img src="{{$tournament['tournament']['logo']}}" class="flag" alt="{{$tournament['tournament']['name']}}">
                    {{$tournament['tournament']['name']}}
                </span>
            </div>

            @foreach ($tournament['matches'] as $match)
            <div class="match-row">
                <div class="star">☆</div>
                <div class="time">{{$match['match']['hours_match_time']}}</div>
                <div class="status live">{{$match['match']['status_match']}}</div>
                <div class="team home">
                    {{$match['home_team']['name']}}
                    <img src="{{$match['home_team']['logo']}}" alt="{{$match['home_team']['name']}}" class="flag">
                </div>
                <div class="score">{{$match['home_scores']['score_full_time']}} - {{$match['away_scores']['score_full_time']}}</div>
                <div class="team away">
                    <img src="{{$match['away_team']['logo']}}" alt="{{$match['away_team']['name']}}" class="flag">
                    {{$match['away_team']['name']}}
                </div>
                <div class="match-stats">
                    <div class="additional-info">HT {{$match['home_scores']['score_half_time_1']}} - {{$match['away_scores']['score_half_time_1']}}</div>
                    <div class="corner-stats">C {{$match['home_scores']['corner']}} - {{$match['away_scores']['corner']}}</div>
                </div>
            </div>
            @endforeach

            @endforeach
        </div>
    </div>
</body>

</html>