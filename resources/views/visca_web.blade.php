<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Visca Web API</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
            .odd{
                color: black;
                justify-content: center;
                width: 100%;
                text-align: center;
                border-bottom: 1px solid black;
            }
            .options{
                display: flex;
                width: 100%;
            }
            .option{
                text-align: center;
                margin-right: 20px;
                width: 100%;
            }
        </style>
    </head>
    <body>
        @forelse($odds as $odd)
            <div class="odd">
                <p>{{ $odd->BetName }}</p>
                @if($odd->BetOptions)
                    <div class="options">
                        @foreach($odd->BetOptions as $bet)
                            <div class="option">
                                <p>{{ $bet->Outcome }}</p>
                                <p>{{ $bet->Odds }}</p>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        @empty
            <p>No hay apuestas disponibles</p>
        @endforelse
        
    </body>
</html>