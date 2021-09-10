<header>
    
    <header>
        <div class="container">
            <ul>
                <li><a href="#">DC Power&#8480; Visa&reg;</a></li>
                <li><a href="#">Additional DC Sites<i class="fas fa-chevron-down"></i></a></li>
            </ul>
        </div>
    </header>
        
    <nav>
        @php
            $nav = [
                "Characters",
                "Comics",
                "Movies",
                "TV",
                "Games",
                "Collectibles",
                "Videos",
                "Fans",
                "News",
                "Shop"
            ];
        @endphp
        
        <div class="container">

            <img src="{{asset('img/dc-logo.png')}}" alt="dc logo">

            <div class="right">
                <ul>
                    @foreach($nav as $li)
                        <li><a href="#">{{$li}}</a></li>
                    @endforeach
                </ul>

                <div id="block-search">
                    <input type="text" id="search" placeholder="Search">
                    <label for="seach"><i class="fas fa-search"></i></label>
                </div>
                
            </div>
            
        </div>
        

    </nav>
    
    <div id="jumbo">
        <img src="{{ asset('img/jumbotron.jpg') }}" alt="jumbotron dc">
    </div>
</header>