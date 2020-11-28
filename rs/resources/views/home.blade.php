@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif



                    <div class="card text-center">
                        <div class="card-header">
                            Featured
                        </div>
                        <div class="card-body">
                            <img src="img/rs.jpg" class="img-fluid" alt="Responsive image">
                            <h5 class="card-title">Rumah Sakit Neotelemetri</h5>
                            <p class="card-text">Nisi id officia incididunt id exercitation quis ea. Voluptate sunt est in mollit duis. Sit pariatur eiusmod aute in consectetur nisi deserunt laborum esse ut duis eu.

                                Sit ex consequat aute aute consectetur laboris magna. Enim reprehenderit elit exercitation anim velit anim magna. Et aute ut anim nulla pariatur nulla dolor nulla occaecat veniam consequat enim ea.

                                Qui eu Lorem occaecat deserunt reprehenderit. Sint ipsum esse ad excepteur. Aute ex cillum exercitation esse irure duis incididunt voluptate est velit proident. Voluptate ea ipsum duis reprehenderit aliquip cillum aliquip amet ut voluptate do occaecat. Non minim laboris sunt consequat irure sit veniam voluptate mollit officia culpa magna ullamco. Eu proident sint in id do est ut officia consectetur aliqua mollit ad.

                            </p>
                            <button type="button" class="btn btn-success"><a href="{{ url('test') }}" style="color:black">Informasi lebih lanjut</a>
                            </button>
                        </div>
                        <div class="card-footer text-muted">

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div> @endsection