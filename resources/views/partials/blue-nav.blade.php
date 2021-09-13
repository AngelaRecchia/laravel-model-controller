<div class="blue-nav">
    <?php
        $blueNav = [
            [
                'pathImg' => 'buy-comics-digital-comics.png',
                'text' => 'Digital Comics'
            ],
            [
                'pathImg' => 'buy-comics-merchandise.png',
                'text' => 'DC Merchandise'
            ],
            [
                'pathImg' => 'buy-comics-subscriptions.png',
                'text' => 'Subscription'
            ],
            [
                'pathImg' => 'buy-comics-shop-locator.png',
                'text' => 'Comic Shop Locator'
            ],
            [
                'pathImg' => 'buy-dc-power-visa.svg',
                'text' => 'DC Power Visa'
            ],
        ]
    ?>

    <div class="container">
        @foreach($blueNav as $elem)
            <div class="elem">
                <img src="{{asset('img').'/'.$elem['pathImg']}}" alt="">
                <span class="text">{{$elem['text']}}</span>
            </div>
        @endforeach
    </div>
</div>