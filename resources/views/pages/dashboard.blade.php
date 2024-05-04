@extends('layouts.app')

@section('title', 'SIAPA (Sistem Informasi Absensi Pemerintah Daerah)')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/owl.carousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/owl.carousel/dist/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/flag-icon-css/css/flag-icon.min.css') }}">
    <?php
        function tgl_indo($tanggal){
            $bulan = array (
                1 =>   'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember'
            );
            $pecahkan = explode('-', $tanggal);

            return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
        }
    ?>
@endpush

@section('main')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card card-statistic-2">
                        <div class="card-stats">
                            <div class="card-stats-title text-center mt-5">
                                <h4>Haloo, {{ Auth::user()->name }}</h4>
                                <p>(Sistem Informasi Absensi Pemerintah Daerah)</p>
                            </div>
                            
                            <div class="text-center mb-5"><h5>{{ tgl_indo(date('Y-m-d')) }}</h5></div>

                            <div class="card-stats-items mb-5">
                                <div class="card-stats-item">
                                    <div class="card-stats-item-count"><span id="jam"></span></div>
                                    <div class="card-stats-item-label">Jam</div>
                                </div>
                                <div class="card-stats-item">
                                    <div class="card-stats-item-count"><span id="menit"></span></div>
                                    <div class="card-stats-item-label">Menit</div>
                                </div>
                                <div class="card-stats-item">
                                    <div class="card-stats-item-count"><span id="detik"></span></div>
                                    <div class="card-stats-item-label">Detik</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <script>
        window.setTimeout("waktu()", 1000);

        function waktu() {
            var waktu = new Date();
            setTimeout("waktu()", 1000);
            document.getElementById("jam").innerHTML = waktu.getHours();
            document.getElementById("menit").innerHTML = waktu.getMinutes();
            document.getElementById("detik").innerHTML = waktu.getSeconds();
        }
    </script>

    <!-- JS Libraies -->
    <script src="{{ asset('library/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('library/chart.js/dist/Chart.js') }}"></script>
    <script src="{{ asset('library/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('library/summernote/dist/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('library/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/index.js') }}"></script>
@endpush
