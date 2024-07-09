<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixel Positions</title>
    @vite(['resources/js/app.js','resources/css/app.css'])
</head>
<body>
    <div>
        <nav>
            <!-- logo -->
            <div>
                <a href="/">
                    <img src="{{\Illuminate\Support\Facades\Vite::asset('resources/images/logo.svg')}}" alt="">
                </a>
            </div>
            <!-- links -->
                <div>
                    <a href="#">Jobs</a>    
                    <a href="#">Careers</a>
                    <a href="#">Salaries</a>
                    <a href="#">Companies</a>
                </div>
            <div>post a job</div>

        </nav>
        <main>
            {{$slot}}
        </main>
    </div>
    
</body>
</html>