<footer>
    @php
        $footer = [
            [
                'title' => 'DC Comics',
                'li' => [
                    "Characters",
                    "Comics",
                    "Movies",
                    "TV",
                    "Games",
                    "Videos",
                    "News"
                    ]
            ],
            [
                'title' => 'Shop',
                'li' => [
                    "Shop DC",
                    "Shop DC Collectibles"
                    ]
            ],
            [
                'title' => 'DC',
                'li' => [
                    "Terms Of Use",
                    "Privacy Policy (New)",
                    "Ad Choices",
                    "Advertising",
                    "Jobs",
                    "Subscriptions",
                    "Talent Workshops",
                    "CPSC Certificates",
                    "Ratings",
                    "Shop Help",
                    "Contact Us"
                    ]
            ],
            [
                'title' => 'Sites',
                'li' => [
                    "DC",
                    "MAD Magazine",
                    "DC Kids",
                    "DC Universe",
                    "DC Power Visa"
                    ]
            ]
        ];
    @endphp

    <div class="up">

        <div class="container">
            <div class="site-map">
                @foreach($footer as $lis)
                    <div class="cat">
                        <div class="title">{{$lis['title']}}</div>
                        <ul>
                            @foreach($lis['li'] as $li) 
                            <li><a href="#">{{$li}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
            <div class="rights">
                All Site Content TM and &copy; 2020 DC Entertainment, unless otherwise <a href="#">noted here</a>. All rights reserved. 
                <br> 
                <a href="#">Cookies Settings</a>
            </div>
        </div>
        
    </div>

    <div class="bottom">

        <div class="container">
            <div class="button-grey">Sign-up now!</div>
            <div id="social">
                <span>Follow Us</span>
                <a href="#"><img src="../../img/footer-facebook.png" alt="fb icon"></a>
                <a href="#"><img src="../../img/footer-twitter.png" alt="twitter icon"></a>
                <a href="#"><img src="../../img/footer-youtube.png" alt="youtube icon"></a>
                <a href="#"><img src="../../img/footer-pinterest.png" alt="pinterest icon"></a>
                <a href="#"><img src="../../img/footer-periscope.png" alt="periscope icon"></a>
            </div>
        </div>
        
    </div>
</footer>