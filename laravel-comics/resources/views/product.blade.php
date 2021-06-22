@extends('layout.default')

@section('page_title', 'Product')

@section('main')
<main>

    <section class='bg-grey'>

        <div class='container'>

            <div class="row">
                        
                <div class=''>
                     {{-- <h1>Title {{$comic['title']}}</h1> --}}
                     @dump($comic)
                </div>  

            </div>

        </div>

    </section>
</main>
@endsection