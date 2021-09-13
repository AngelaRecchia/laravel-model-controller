<section id="comics">
        <div class="container">
            <div class="button-big bold halfway">Current Series</div>
            <div class="comics-cont">
                @foreach($comics as $comic)
                <div class="card">
                    <div class="comic-poster">
                        <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}" class="poster">
                    </div>
                    <div class="comic-title">{{$comic['series']}}</div>
                </div>
                @endforeach
            </div>
            <div class="btn-cont center">
                <div class="button-medium bold">Load More</div>
            </div>
            
        </div>
        
    </section>