
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');
        *{
            font-family: 'Ubuntu', sans-serif;
        }

      
        ul{
            text-align: center;
            list-style: none;
            font-size: 16px;
           
        }

        a{
            color: black;
        }
    </style>

    
    <x-navbar/>
        <ul>
            <li><a href="{{ route('articoli') }}">Articoli</a></li>
            <li><a href="{{ route('homepage') }}">Welcome</a></li>
            
        </ul>
        {{$slot}}
    <x-footer/>