@extends('layout.default')

@section('page_title', 'DC Comics')

@section('main')
<main>

    <section class='bg-grey'>

        <div class='container'>

                <div class="row">
                    @foreach($comics as $key => $value)
                        
                        <div class='my-card col-2'>
                            <a href="#">

                                <img src="{{ $comics[$key]['thumb']}}" alt="">
                                <p>{{$comics[$key]['title']}}</p>
                        
                            </a>
                        </div>  

                    @endforeach
                </div>

            <div class='load-more-btn'>
                <button>LOAD MORE</button>
            </div>

        </div>

    </section>
    <section class='bg-blue'>

        <div class='container blue-menu'>

            <div>

                <img src="{{ asset('images/buy-comics-digital-comics.png')}}" alt="">
                <p>DIGITAL COMICS</p>

            </div>
            <div>

                <img src="{{ asset('images/buy-comics-merchandise.png')}}" alt="">
                <p>DC MERCHANDISE</p>

            </div>
            <div>

                <img src="{{ asset('images/buy-comics-subscriptions.png')}}" alt="">
                <p>SUBSCRIPTIONS</p>

            </div>
            <div>

                <img src="{{ asset('images/buy-comics-shop-locator.png')}}" alt="">
                <p>COMIC SHOP LOCATOR</p>

            </div>
            <div>

                <img src="{{ asset('images/buy-dc-power-visa.svg')}}" alt="">
                <p>DC POWER VISA</p>

            </div>
            
        </div>
    </section>

</main>
@endsection