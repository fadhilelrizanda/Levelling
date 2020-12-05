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
                            Instansi
                        </div>
                        <div class="card-body">
                            <img src="img/rs.jpg" class="img-fluid" alt="Responsive image">
                            <h5 class="card-title">Rumah Sakit Aksa</h5>
                            <p class="card-text">RS Aksa merupakan rumah sakit kelas A yang menjadi rujukan tertinggi (Top referal Hospital) di Provinsi Sumatera Barat,
                                juga menjadi Rumah Sakit Rujukan Nasional dan RS Pedidikan yang bermutu dan berdaya saing di tahun 2045. Beberapa unggulan RS Aksa antara alin,
                                menjadi Pusat unggulan Nasional dalam Bidang Kedokteran Nuklir & menjadi satu-satunya Pusat Pendidikan Spesialis Kedokteran Nuklir; pelayanan Teknologi /
                                Reproduksi Berbantu, Pelayanan Kardiologi; Pelayanan Onkologi & Infeksi dan Pelayanan Transplantasi Ginjal.

                            </p>
                            <button type="button" class="btn btn-success"><a href="{{ url('page') }}" style="color:black">Informasi lebih lanjut</a>
                            </button>
                        </div>
                        <div class="card-footer text-muted">

                        </div>
                    </div>

                    <div class="card text-center">
                        <div class="card-header">
                            Instansi
                        </div>
                        <div class="card-body">
                            <img src="img/rs2.jpg" class="img-fluid" alt="Responsive image">
                            <h5 class="card-title">Rumah Sakit Segi</h5>
                            <p class="card-text">RS Segi merupakan rumah sakit kelas A yang menjadi rujukan tertinggi (Top referal Hospital) di Provinsi Sumatera Barat,
                                juga menjadi Rumah Sakit Rujukan Nasional dan RS Pedidikan yang bermutu dan berdaya saing di tahun 2045. Beberapa unggulan RS Aksa antara alin,
                                menjadi Pusat unggulan Nasional dalam Bidang Kedokteran Nuklir & menjadi satu-satunya Pusat Pendidikan Spesialis Kedokteran Nuklir; pelayanan Teknologi /
                                Reproduksi Berbantu, Pelayanan Kardiologi; Pelayanan Onkologi & Infeksi dan Pelayanan Transplantasi Ginjal.

                            </p>
                            <button type="button" class="btn btn-success"><a href="#" style="color:black">Informasi lebih lanjut</a>
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