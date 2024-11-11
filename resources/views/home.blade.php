@extends('layouts.app')
@section('content')

    <nav class="navbarr">
        <h1>Lampung Championship</h1>
        <img src="/asset/images/logo.png" alt="Logo" class="logo">
        <div>
            <ul class="navbar">
                <li><a href="index.html">Home</a></li>
                <li><a href="#fitur">Fitur</a></li>
                <div class="dropdown">
                    <a class="dropbtn">Daftar <i class="fas fa-caret-down"></i></a>
                    <div class="dropdown-content">
                        <a href="laga.php">Laga</a>
                        <a href="{{ route('senitunggal.register') }}">Seni Tunggal</a>
                        <a href="seniganda.html">Seni Ganda</a>
                        <a href="{{ route('seniregu.register') }}">Seni Beregu</a>
                    </div>
                </div>
            </ul>
        </div>
    </nav>

    <section id="fitur">
    <div class="content">
        <img src="asset/images/bga2.jpg" alt="Kejuaraan Silat" style="width: 100%; height: auto;">
        <h2 class="text-center mb-5" style="margin-top:40px; font-size: 35px; color:  #a67a5b">Fitur</h2>
        <div class="card-container">
            <div class="card">
                <img src="/asset/images/laga.jpg" alt="Card Image 1">
                <div class="card-content">
                    <h2>Laga</h2>
                    <h3>Kategori Laga atau Tanding merupakan pertarungan satu lawan satu yang menampilkan
                        teknik pembelaan dan serangan berdasarkan kaidah pencak silat.
                        Dalam kategori ini, pesilat bertanding menggunakan berbagai teknik tendangan, pukulan,
                        tangkisan, dan bantingan untuk mengumpulkan poin atau mencapai kemenangan.</h3>
                </div>
            </div>
            <div class="card">
                <img src="/asset/images/senitunggal.jpg" alt="Card Image 2">
                <div class="card-content">
                    <h2>Seni Tunggal</h2>
                    <h3>Seni Tunggal adalah pertunjukan jurus baku tunggal dimana pesilat menampilkan kemahiran dalam
                        memperagakan jurus-jurus pencak silat secara solo. Pesilat harus menampilkan 100 gerakan dalam
                        waktu 3 menit dengan menggunakan senjata golok dan toya.</h3>
                </div>
            </div>
            <div class="card">
                <img src="/asset/images/seniganda.jpg" alt="Card Image 3">
                <div class="card-content">
                    <h2>Seni Ganda</h2>
                    <h3>Seni Ganda menampilkan dua orang pesilat dari tim yang sama memperagakan kemahiran dalam jurus
                        serang bela yang telah dirangkai dengan kreatif dan terstruktur. Pasangan pesilat harus
                        menunjukkan koordinasi yang baik dalam memperagakan teknik serangan dan pembelaan diri selama 3 menit.</h3>
                </div>
            </div>
            <div class="card">
                <img src="/asset/images/seniregu.jpg" alt="Card Image 4">
                <div class="card-content">
                    <h2>Seni Beregu</h2>
                    <h3>Seni Regu adalah pertunjukan yang dilakukan oleh tiga orang pesilat dalam formasi segitiga yang menampilkan
                        jurus-jurus baku secara bersamaan. Tim regu harus menampilkan gerakan yang kompak dan sinkron dengan tingkat
                        kesulitan yang tinggi selama waktu yang ditentukan.</h3>
                </div>
            </div>
        </div>
    </div>
</section>

        <section>
            <div class="container">
                <div class="text">
                    <h5 class="text-center mb-5" style="margin-top:40px; font-size: 30px; color:  #a67a5b">PENDAFTARAN PENCAK SILAT<br>LAMPUNG CHAMPIONSHIP</h5>
                </div>
                <div class="card2">
                    <div class="card-image2">
                        <img src="/asset/images/laga.jpg" alt="">
                    </div>
                    <div class="content2">
                        <h4>Pencak Silat Laga</h4>
                        <p>Rp 100.000,00</p>
                        <p></p>
                        <a href="laga.html" class='btn'>DAFTAR</a>
                    </div>
                </div>
                <div class="card2">
                    <div class="card-image2">
                        <img src="/asset/images/senitunggal.jpg" alt="">
                    </div>
                    <div class="content2">
                        <h4>Pencak Silat Seni Tunggal</h4>
                        <p>Rp 80.000,00</p>
                        <a href="{{ route('senitunggal.register') }}" class='btn'>DAFTAR</a>
                    </div>
                </div>
                <div class="card2">
                    <div class="card-image2">
                        <img src="/asset/images/seniganda.jpg" alt="">
                    </div>
                    <div class="content2">
                        <h4>Pencak Silat Seni Ganda</h4>
                        <p>Rp 125.000,00</p>
                        <a href="seniganda.html" class='btn'>DAFTAR</a>
                    </div>
                </div>
                <div class="card2">
                    <div class="card-image2">
                        <img src="/asset/images/seniregu.jpg" alt="">
                    </div>
                    <div class="content2">
                        <h4>Pencak Silat Seni Beregu</h4>
                        <p>Rp 180.000,00</p>
                        <a href="{{ route('seniregu.register') }}" class='btn'>DAFTAR</a>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <section class="medsos-section">
        <div class="medsos-text">
            <h2>Social<span>Media</span></h2>
        </div>
        <ul>
            <li><a href="https://www.instagram.com/iam_kynis/"><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href="https://www.youtube.com/channel/iam_kynis"><i
                        class="fa-brands fa-youtube"></i></a></li>
            <li><a href="www.linkedin.com/in/kyla-nisrina-409b29274"><i
                        class="fa-brands fa-linkedin"></i></a></li>
            <li><a href="https://github.com/kylanisrina"><i class="fa-brands fa-github"></i></a></li>
        </ul>
    </section>


    <footer class="footer">
        <div class="info-tambahan">
            <h2>Informasi Tambahan</h2>
            <p>Kejuaraan ini diadakan setiap tahun dan terbuka untuk semua peserta dari berbagai kategori.</p>
            <p>Untuk informasi lebih lanjut, hubungi kami di <a
                    href="mailto:info@kejuaraansilat.com">info@kejuaraansilat.com</a>.</p>
        </div>
        <p>&copy; 2024 Lampung Championship. All Rights Reserved.</p>
    </footer>
    @endsection
