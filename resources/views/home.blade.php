@extends('layouts.main')
@section('title', 'Home')

@section('content')
<div class="d-flex bg-primary py-5">
    <div class="container">
          <div class="row">
            <div class="col d-flex align-items-center">
                <img width="50" src="{{asset('images/buy-comics-digital-comics.png')}}" alt="mini card bianca con scritta DC" class="me-3">
                <p class="mb-0 text-white">DIGITAL COMICS</p>
            </div>
            <div class="col d-flex align-items-center">
                <img width="50" src="{{asset('images/buy-comics-merchandise.png')}}" alt="mini immagine maglietta bianca" class="me-3">
                <p class="mb-0 text-white">DC MERCHANDISE</p>
            </div>
            <div class="col d-flex align-items-center">
                <img width="50" src="{{asset('images/buy-comics-subscriptions.png')}}" alt="mini card bianca con simbolo fulmine" class="me-3">
                <p class="mb-0 text-white">SUBSCRIPTION</p>
            </div>
            <div class="col d-flex align-items-center">
                <img width="40" src="{{asset('images/buy-comics-shop-locator.png')}}" alt="simbolo della posizione bianco" class="me-3">
                <p class="mb-0 text-white">COMIC SHOP LOCATOR</p>
            </div>
            <div class="col d-flex align-items-center">
                <img width="50" src="{{asset('images/buy-dc-power-visa.svg')}}" alt="mini simbolo bianco batteria" class="me-3">
                <p class="mb-0 text-white">DC POWER VISA</p>
            </div>
          </div>
    </div>
    <!-- /.container -->
</div>
@endsection