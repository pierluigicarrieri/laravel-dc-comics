@php   
    $headerData = [
        1 => 'CHARACTERS',
        2 => 'COMICS',
        3 => 'MOVIES',
        4 => 'TV',
        5 => 'GAMES',
        6 => 'COLLECTIBLES',
        7 => 'VIDEOS',
        8 => 'FANS',
        9 => 'NEWS',
        10 => 'SHOP'               
    ]  
@endphp

<div class="container">
    <header class="d-flex justify-content-between">
        <img class="my-3 logo" src="/images/dc-logo.png" alt="dc-logo">
        <nav class="d-flex align-items-center">
            <ul class="nav">
                @foreach ($headerData as $listItem)
                <li class="nav-item">
                    <a class="nav-link" href="{{route('comics.index')}}"><strong>{{ $listItem }}</strong></a>
                </li>
                @endforeach
            </ul>
        </nav>
    </header>
</div>
<div class="jumbo"></div>


