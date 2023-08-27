@extends('layouts.header')

@section('content')
<!-- Bagian Atas -->
<div class="tirai">
    <img class="inKiri" src="assets/gambar/tiraiKiri.png" alt="">
    <img class="inKanan" src="assets/gambar/tiraiKanan.png" alt="">
</div>
<!-- Bagian Tengah -->
<div class="container">
    <div class="text">
        <div class="greet">
            <p class="hey">hey</p>
            <p class="name">Veni,</p>
        </div>
        <div class="wish">
            <p class="birthday">Happy Birthday</p>
            <p class="desc">May all your wishes come true</p>
        </div>
        <div class="bf">
            <p class="from">from Tegarr</p>
        </div>
    </div>
</div>
<!-- Bagian Bawah -->
<div class="bottom">
    <img class="inKiri hold" src="assets/gambar/terompetKiri.png" alt="">
    <img id="inBawah" src="assets/gambar/kue.png" alt="">
    <img class="inKanan hold" src="assets/gambar/terompetKanan.png" alt="">
</div>
<!-- Bagian Modal -->
<button type="button" id="button" class="btn btn-warning btn-lg" data-bs-toggle="modal" data-bs-target="#myModal">Klik
    Me!</button>
<!-- Modal -->
<div class="modal fade" tabindex="-1" aria-labelledby="fade" aria-hidden="true" id="myModal">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Dear Fera </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Happy Birthday to my beloved! 🎉 On this awesome day, I just wanna shower you with lots of love and
                    good
                    vibes. You being in my life is like a daily dose of happiness and motivation. Your kindness, beauty,
                    and the
                    way you've always had my back just light up my world in ways I can't even put into words.

                    Here's to hoping this year brings you a ton of success, health, and happiness as you keep being the
                    amazing
                    person you are. And speaking of today, I also wanna say that I know I haven't always been the best,
                    and I'm
                    sorry for the times I've made you sad. I really wish I could've always kept that smile on your face,
                    and I
                    regret those moments when I fell short.</p>
            </div>
            <div class="modal-footer">
                <a type="button" href="{{ route('thank') }}" class="btn btn-warning">Thanks Tegarr</a>
                <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('assets/js/play.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
@endsection