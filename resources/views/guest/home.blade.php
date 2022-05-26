@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2>Welcome!</h2>
            </div>
        </div>
    </div>
    <div id="root"></div>
@endsection

@section('script')
    <script src="{{ asset('js/front.js')}}"></script>
@endsection
