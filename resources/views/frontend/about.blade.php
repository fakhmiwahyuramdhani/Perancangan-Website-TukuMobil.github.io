@extends('layouts.frontend')

@section('content')
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="{{ route('home') }}" rel="nofollow">beranda</a>
                <a href="#"><span></span> about me </a>
            </div>
        </div>
    </div>

    <header style="text-align: center;">
        <img src="{{ asset('frontend/imgs/fakhmi.jpg') }}" width="170" height="170" style="border-radius: 40%;" />
        <h1>Fakhmi Wahyu Ramdhani</h1>
        Student of informatics
        Universitas Gunadarma
    </header>

    <hr />

    <article style="text-align: center; max-width: 1000px; margin: 3em auto">
        <h2>Overview</h2>
        <table width="100%">
            <tr>

                    <p style="text-indent: 45px;">Website TukuMobil merupakan website yang saya buat untuk memenuhi nilai Ujian Praktikum, project semester 5.
                    Dalam website ini, saya mengimplementasikan fungsi CRUD (Create, Read, Update, Delete) yang memungkinkan admin untuk membuat, membaca,
                    mengubah, dan menghapus data mobil bekas. Admin dapat dengan mudah memasukkan informasi mengenai mobil yang ingin mereka jual, serta
                    pembeli dapat mencari mobil bekas yang sesuai dengan kebutuhan mereka. </p>
                    <p style="text-indent: 45px;">Selain fungsionalitas CRUD, saya juga berusaha menciptakan tampilan yang menarik dan intuitif.
                    tampilan ini saya dapat dari template surfide media, dan untuk admin saya menggunakan bootsrap sb admin.Pada website ini juga terdapat
                    satu fitur sistem pendukung keputusan, yaitu menentukan pembelian mobil bekas terbaik menggunakan metode SAW, namun karena keterbatasan,
                    saya hanya menampilkan didalam menu admin. </p>

            </tr>
        </table>
    </article>
@endsection
