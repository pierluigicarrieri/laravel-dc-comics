@php
    
    $footerData = [
    'images' => [
        'backgroundImage' => '/images/footer-bg.jpg',
        'logo' => '/images/dc-logo-bg.png'
    ],
    'topFooterItems' => [
        [
            'title' => 'DC COMICS',
            'items' => [
                'Characters',
                'Comics',
                'Movies',
                'TV',
                'Games',
                'Videos',
                'News'
            ]
        ],
        [
            'title' => 'SHOP',
            'items' => [
                'Shop DC',
                'Shop DC Collectibles'
            ]
        ],
        [
            'title' => 'DC',
            'items' => [
                'Terms of use',
                'Privacy policy (New)',
                'Ad Choices',
                'Advertising',
                'Jobs',
                'Subscriptions',
                'Talent Workshops',
                'CPSC Certificates',
                'Ratings',
                'Shop Help',
                'Contact Us'
                ]
        ],
        [
            'title' => 'SITES',
            'items' => [
                'DC',
                'MAD Magazine',
                'DC Kids',
                'DC Universe',
                'DC Power Visa'
            ]
        ],
    ],
    'bottomFooterItems' => [
        '/images/footer-facebook.png',
        '/images/footer-twitter.png',
        '/images/footer-youtube.png',
        '/images/footer-pinterest.png',
        '/images/footer-periscope.png'
    ]
];

@endphp



<footer class="flex-grow-1 d-flex flex-column">

    <div class="footer-top flex-grow-1">
        <div class="container d-flex justify-content-between">

            <div class="footer-left d-flex py-3">
                <ul class="nav d-flex flex-column px-2">
                    <li class="nav-item title"><strong>{{ $footerData['topFooterItems'][0]['title'] }}</strong></li>
                    @foreach ($footerData['topFooterItems'][0]['items'] as $item)
                    <li class="nav-item">
                        <a href="#">{{$item}}</a>
                    </li>
                    @endforeach
                    <li class="nav-item title mt-4"><strong>{{ $footerData['topFooterItems'][1]['title'] }}</strong></li>
                    @foreach ($footerData['topFooterItems'][1]['items'] as $item)
                    <li class="nav-item">
                        <a href="#">{{$item}}</a>
                    </li>
                    @endforeach
                </ul>
                <ul class="nav d-flex flex-column px-2">
                    <li class="nav-item title"><strong>{{ $footerData['topFooterItems'][2]['title'] }}</strong></li>
                    @foreach ($footerData['topFooterItems'][2]['items'] as $item)
                    <li class="nav-item">
                        <a href="#">{{$item}}</a>
                    </li>
                    @endforeach
                </ul>
                <ul class="nav d-flex flex-column px-2">
                    <li class="nav-item title"><strong>{{ $footerData['topFooterItems'][3]['title'] }}</strong></li>
                    @foreach ($footerData['topFooterItems'][3]['items'] as $item)
                    <li class="nav-item">
                        <a href="#">{{$item}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>

            <div class="footer-right">
                <img src="{{ $footerData['images']['logo'] }}" alt="">
            </div>
        </div>

    </div>

    <div class="footer-bottom">
        <div class="container d-flex justify-content-between align-items-center py-4">
            <button class="btn btn-primary text-white">SIGN-UP NOW!</button>
            <div class="d-flex align-items-center">
                <div class="text-primary"><strong>FOLLOW US</strong></div>
                    <ul class="d-flex m-auto">
                        @foreach ($footerData['bottomFooterItems'] as $item)
                        <li class="px-2">
                            <a href="#">
                                <img src="{{ $item }}" alt="">
                            </a>  
                        </li>
                        @endforeach

                    </ul>
            </div>
        </div>
    </div>
    
</footer>


