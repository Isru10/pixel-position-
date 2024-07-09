<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixel Positions</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div>
        <nav>
            <div>
                <a href="">
                    <img src="{{\Illuminate\Support\Facades\Vite::asset('resources/images/logo.svg')}}" alt="">
                </a>
            </div>
                <div>links </div>
            <div>post a job</div>

        </nav>
        <main>
            {{$slot}}
        </main>
    </div>
    
</body>
</html>