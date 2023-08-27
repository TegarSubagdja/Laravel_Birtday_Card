@extends('layouts.header')

@section('content')
    <div class="tirai">
        <img class="inKiri" src="assets/gambar/tiraiKiri.png" alt="">
        <img class="inKanan" src="assets/gambar/tiraiKanan.png" alt="">
    </div>
    <div class="container-first">
        <div class="content">
            <img id="frame" src="assets/gambar/frame2.png" alt="">
            <img id="artis"
                src="https://awsimages.detik.net.id/community/media/visual/2023/01/10/citra-kalkulator_43.jpeg?w=1200"
                alt="">
        </div>
    </div>
    <div class="bottom">
        <img class="inKiri hold" src="assets/gambar/terompetKiri.png" alt="">
        <img class="inKanan hold" src="assets/gambar/terompetKanan.png" alt="">
    </div>
    <script src="{{ asset('assets/js/script.js') }}"></script>
@endsection