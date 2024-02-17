@extends('layouts.createdefault')
@section('title', "Home")
@section('content')

<section class="pricing-section section-padding section-bg p-5">
    <div class="container">
    @if(session()->has('success')) 
        <div class="alert alert-success solid alert-dismissible mx-4 mb-0 mt-3 fade show success-info">
            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                {{ session('success') }}
            Go back to <a href="{{ route('index') }}">Home Page</a>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
            </button>
        </div>
    @endif
        <div class="row">
            <div class="col-12 mx-auto">
                <h2 class="text-center mb-4">Get your Ticket</h2>
            </div>

            <div class="col-lg-7 col-12 mb-4 mx-auto">
                <div class="pricing-thumb p-4">
                    <div class="d-flex">
                        <div class="mt-2">
                            <h3><small>{{ $selectedLive->name }}</small> ${{ $selectedLive->price }}</h3>

                            <p>Including good things:</p>
                        </div>
                        <p class="pricing-tag create-pricing-tag my-4 mx-5">
                            <img src="{{ asset("storage/$selectedLive->liveImg") }}" alt="">
                        </p>
                    </div>

                    <ul class="pricing-list mt-3">
                        <li class="pricing-list-item">Venue - {{ $selectedLive->venue }}</li>

                        <li class="pricing-list-item">Date - {{ \Carbon\Carbon::parse($selectedLive->date)->isoFormat('DD MMMM, YYYY') }}</li>

                        <li class="pricing-list-item">Time - {{ $selectedLive->time }}</li>

                    </ul>

                    
                    <form action="{{ route('ticket.store', $selectedLive->id) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input type="number" class="form-control" id="quantity" name="quantity" oninput="calculateTotalPrice()">
                        </div>
                        <div class="mb-3">
                            <label for="total_price" class="form-label">Total Price - </label>
                            <span id="total_price1" class="total_price"></span>
                            <input type="hidden" class="form-control" id="total_price" name="total_price">
                        </div>
                        <button type="submit" class="btn btn-secondary p-2">
                            Get Ticket
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
<script>
    function calculateTotalPrice() {
        // Get the quantity and price values
        var quantity = document.getElementById('quantity').value;
        var price = {{ $selectedLive->price }}

        // Calculate the total price
        var totalPrice = quantity * price;

        // Update the total price input field
        document.getElementById('total_price1').innerHTML = '$' + totalPrice;
        document.getElementById('total_price').value = totalPrice;
    }
</script>
@endsection