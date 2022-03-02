@extends('frontend.layouts.app')
@section('layout_app')
    @include('frontend.layouts.header')

    <section style="padding-top:30px">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center">
                     <h1 style="font-size:162px">404</h1>
                     <h2>Page Not Found</h2>
                     <p>We are sorry, the page you requested could not be found.</p>
                </div>
                
            </div>
        </div>

    </section>

    @include('frontend.layouts.footer')
@endsection