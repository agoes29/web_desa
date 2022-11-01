@extends('layouts.client')

@section('main')
@include('client.partial.navbar')
<main id="main">

    @if(isset($home))
    @include('client.partial.slider')
    @endif

{{--HomePage--}}
@yield('home')

{{--BlogPage--}}
@yield('blog')

{{--UMKMPage--}}
@yield('umkm')

{{--ProfilDesaPage--}}
@yield('profil')

</main>
@include('client.partial.footer')

@endsection
