@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="section-1">
            <img src="{{asset('assets/images/home.png')}}" alt="home" width="100%" >
        </div>
    </div>

    <div class="container">
        <div class="d-flex">
            <h3 class="tittle" style="margin-left: 1rem"> Ucap <span style="color: #30BAFF"> 3000 orang </span> lebih tentang Sekolah Rabbani </h3>
            <img src="{{asset('assets/images/icon_basket.png')}}" alt="5_star" width="120" >
        </div>
    </div>

    <div class="center">
        <div class="embed-responsive embed-responsive-16">
            <iframe src="https://www.youtube.com/embed/WQD-hasjoxQ?si=F9ZgbDlG3gCCjBcJ?autoplay=1"  allow="autoplay" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </div>

    <div class="container">
        <p class="mx-3" style="font-size: 12px"> Oleh karena itu, <b>Sekolah Rabbani</b> menjadi tempat terbaik tumbuhnya generasi shalih dan cerdas. </p>
    </div>

    <div class="d-flex" style="align-items: center">
        <img src="{{asset('assets/images/image_sd_cover.png')}}" alt="sd_cover" width="50%" >
        <div class="mt-2">
            <p class="mt-3" style="font-size: 13px"> Gimana? Mau ikut ucapin buat Sekolah Rabbani juga? </p>
            <h4 style="color: #E21387"> <b> Hmmm.. <br>Yakin ada Sekolah se-Seru ini? </b> </h4>
            <p class="mt-3" style="font-size: 13px"> Coba Ayah/Bunda lihat deh video dibawah yang satu ini. </p>
        </div>
    </div>

    <div class="container">
        <h2 class="mx-3 tittle"> Program <span style="color: #30BAFF"> Unggulan </span></h2>
        <div class="center">
            <div class="embed-responsive-short embed-responsive-16by9">
                <iframe
                    width="459"
                    src="https://www.youtube.com/embed/TtNjWS4iaRw?si=neEcCs7O6_4obRZk?version"
                    title="YouTube video player"
                    frameborder="0"
                    allow="autoplay"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen>
                </iframe>
            </div>

            <p class="container" style="text-align: justify; font-size:11px"> Nah gimana? sudah liat kan videonya. Banyak lho program kegiatan untuk anak mengembangkan stimulasi sejak dini. 
                Jangan lama-lama yaa...
            </p>
        </div>
    </div>

    <div class="section-4">
        
        <img class="btn-daftar" src="{{asset('assets/images/btn-daftar.png')}}" onclick="daftar()" alt="btn_daftar" width="40%" >
        <img class="icon-toga" src="{{asset('assets/images/icon_toga.png')}}" alt="icon_toga" width="25%" >
        <img class="icon-cloud-1" src="{{asset('assets/images/icon_cloud.png')}}" alt="cloud-1" width="23%" >
        <img class="icon-cloud-2" src="{{asset('assets/images/icon_cloud_2.png')}}" alt="cloud-2" width="18%" >
        <img class="icon-toga-2" src="{{asset('assets/images/icon_toga.png')}}" alt="icon_toga" width="25%" >
        <img class="ellipse_purple" src="{{asset('assets/images/ellipse_purple.png')}}" alt="icon_ellipse_purple" width="25%" >
        

        <div class="container">
            <h1 class="tittle"> Kalau Ayah/Bunda sudah yakin, boleh langsung <span style="color:#FF3EAA"> daftar aja!! </span> </h1>

            <div class="frame mt-5">
                <img class="center" src="{{asset('assets/images/siswi_cover.png')}}" alt="siswi_cover" width="100%" >
            </div>

        </div>

        <h5 class="mx-3" style="font-weight: 600; color: #333333"> Ayo Ayah/Bunda sekolahkan anaknya di sini!! </h5>

        <div class="keunggulan mt-3" style="font-size: 13px">
            <div class="d-flex" style="align-items: center">
                <img src="{{asset('assets/images/icon_book.png')}}" alt="book" width="8%" >
                <span class="mx-2"> Sekolah yang berfokus mencetak para penghafal Al-Qur’an, pengusaha, dan pemimpin </span>
            </div>
            <div class="d-flex mt-3" style="align-items: center">
                <img src="{{asset('assets/images/icon_piala.png')}}" alt="piala" width="8%" >
                <span class="mx-2"> Telah menorehkan 300++ prestasi </span>
            </div>
            <div class="d-flex mt-3" style="align-items: center">
                <img src="{{asset('assets/images/icon_ekskul.png')}}" alt="ekskul" width="8%" >
                <span class="mx-2"> Memiliki Ekskul Wajib (Berenang, Memanah, dan Berkuda) </span>
            </div>
        </div>
        <img class="ellipse_pink" src="{{asset('assets/images/ellipse_pink.png')}}" alt="ellipse_pink" width="20%" >      
    </div>

    <div class="section-5">
        <div class="container">
            <div style="position: relative">
                <img class="icon_wajik" src="{{asset('assets/images/icon_wajik.png')}}" alt="wajik" width="5%" >      
                <img class="icon_wajik_2" src="{{asset('assets/images/icon_wajik.png')}}" alt="wajik" width="3%" >      
                <div class="mt-3 text-sec-5">
                    <p class="mb-2" style="font-size: 11px"> Ehh.. Ayah/Bunda masih penasaran ya sama Sekolah Rabbani? </p>
                    <h3 class="mt-2 txt-nyaman" > Ini yang buat anak <span style="color: #FF3EAA"> gak mau pulang </span> dari Sekolah!! </h3>
                </div>
               
                <img class="img-sec-5" src="{{asset('assets/images/cover_nyaman.png')}}" alt="cover_5" width="63%" >
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <h1 class="ml-2 mb-3 tittle"> <span style="color: #30BAFF"> Fasilitas </span>  Nyaman </h1>
        <div class="d-flex justify-content-center">
            <img src="{{asset('assets/images/fasil_kelas.png')}}" alt="kelas" width="45%" >
            <img src="{{asset('assets/images/fasil_lift.png')}}" alt="lift"  width="45%" >
        </div>
        <div class=" mt-3 d-flex justify-content-center">
            <img src="{{asset('assets/images/fasil_labkom.png')}}" alt="kelas" width="45%" >
            <img src="{{asset('assets/images/fasil_playground.png')}}" alt="lift"  width="45%" >
        </div>

        <p class="mt-4 px-4" style="font-size: 12px; text-align:justify"> Ga betah gimana coba? Fasilitas lengkap, bersih, dan nyaman yang 
            menjadi anak-anak semakin semangat untuk belajarnya. 
        </p>

        <h3 class="mt-4 px-4"> <b>Eitss.. Gak hanya itu lho!! </b> </h3>
        <p class="px-4" style="font-size: 12px"> Insyaa Allah anak Ayah/Bunda akan menjadi salah satunya yang berprestasi seperti : </p>

        
    </div>
    <img class="center" src="{{asset('assets/images/cover_prestasi.png')}}" alt="prestasi"  width="100%" >

    <div class="section-6">
        <div class="d-flex px-3" style="align-items: center">
            <img src="{{asset('assets/images/icon_champions.png')}}" alt="champions"  width="40%" >
            <div class="center text-white">
                <div class="wrap">
                    <ol class="center hundreds">
                      <li>3</li>
                      <li>2</li>
                      <li>1</li>
                      <li>0</li>
                    </ol>
                    <ol class="center tens">
                      <li>0</li>
                      <li>9</li>
                      <li>8</li>
                      <li>7</li>
                      <li>6</li>
                      <li>5</li>
                      <li>4</li>
                      <li>3</li>
                      <li>2</li>
                      <li>1</li>
                      <li>0</li>
                    </ol>
                    <ol class="center units">
                      <li>5</li>
                      <li>4</li>
                      <li>3</li>
                      <li>2</li>
                      <li>1</li>
                      <li>0</li>
                      <li>9</li>
                      <li>8</li>
                      <li>7</li>
                      <li>6</li>
                      <li>5</li>
                    </ol>
                    <ol class="center">
                        <li>+</li>
                    </ol>
                </div>
                <div class="text-prestasi">
                    <p> <b> Prestasi </b> Anak Rabbani </p>
                </div>
            </div>
        </div>
    </div>

    <div class="section-7">
        <div class="container ">
            <img class="icon-rocket" src="{{asset('assets/images/icon_rocket.png')}}" alt="rocket"  width="30%" >
            <img class="icon-cloud-3" src="{{asset('assets/images/icon_cloud_2.png')}}" alt="cloud"  width="22%" >
            <h1 class="ml-2 tittle" style="width: 67%;">Lokasi Sekolah Rabbani <span style="color: #FF3EAA"> Mudah dijangkau </span> oleh Ayah/Bunda  </h1>
            <span class="ml-2" style="font-size: 12px" > Yuk kita lihat Sekolah Rabbani ada di mana saja! </span>
        </div>
        <img class="center" src="{{asset('assets/images/lokasi_sekolah.png')}}" alt="lokasi_sekolah"  width="100%" >
    </div>

    <div class="section-8 mt-3">
        <div class="container mb-3">
            <h1 class="ml-2" style="width: 80%;"> <b> Ingin <span style="color: #FF3EAA"> merasakan asiknya </span> belajar di Sekolah Rabbani? </b> </h1>

            <div class="d-flex" style="align-items: center">
                <img class="bg-cloud" src="{{asset('assets/images/siswi_cover_2.png')}}" alt="lokasi_sekolah"  width="40%" >
                <span style="font-size: 11px; text-align:justify"> Ayah/Bunda masih perlu bukti? Kami membuka sesi trial class secara GRATIS dan SETIAP HARI, lho. 
                    Jadi, Ayah/Bunda bisa melihat dan merasakan pembelajaran serta suasana sekolah di sekolah kami secara langsung. 
                    <br><br>
                    Ayah/Bunda mau ikut programnya? Langsung daftar disini ya!
                </span>
            </div>

            <button class="center my-3 text-white btn-trial-class" onclick="daftar()" style="text-decoration: none"> IKUTI TRIAL CLASSNYA  </button>
            
            <h4 class="ml-2 mt-4 tittle" style="width: 90%;"> Disini Ayah/Bunda juga bisa <span style="color: #30BAFF"> mengawal perkembangan anak sambil belajar, </span> melalui program-program </h4>
            <div class="container-program">
                <div class="center mx-3">
                    <img src="{{asset('assets/images/qp.png')}}" alt="qp"  width="100%" >
                    <p class="center title-program" style="background-color: #FFD900" > <b> Quranic Parenting </b> </p>
                </div>
            </div>
            <div class="container-program">
                <div class="center mx-3">
                    <img src="{{asset('assets/images/hv.png')}}" alt="hv"  width="100%" >
                    <p class="center title-program-2" style="background-color: #DDB9FF" > <b> Home Visit </b> </p>
                </div>
            </div>
            <div class="container-program">
                <div class="center mx-3">
                    <img src="{{asset('assets/images/kt.png')}}" alt="kt"  width="100%" >
                    <p class="center title-program-3" style="background-color: #9CDEFF" > <b> Kajian Tahsin </b> </p>
                </div>
            </div>
        </div>
    </div>

    <div class="section-6 text-white">
        <div class="container">
            <img class="icon_rocket_2" src="{{asset('assets/images/icon_rocket_2.png')}}" alt="rocket-2"  width="20%" >
            <h6 class="ml-2"> Penutupan Pendaftaran </h6>
            @if ($month == '04')
                <h3 class="ml-2"> <b> Gelombang 2 </b> </h3>
            @else 
                <h3 class="ml-2"> <b> Gelombang 3 </b> </h3>
            @endif
            <div class="d-flex mt-4" style="justify-content: space-evenly">
                <div>
                    <h1 class="center" id="cd-hours">  </h1>
                    <p> HOURS </p>
                </div>
                <div>
                    <h1 class="center" id="cd-minutes"> </h1>
                    <p> MINUTES </p>
                </div>
                <div>
                    <h1 class="center" id="cd-seconds">  </h1>
                    <p> SECONDS </p>
                </div>
            </div>
        </div>
    </div>

    <div class="section-9 mt-3">
        <img class="icon_underscore" src="{{asset('assets/images/icon_underscore.png')}}" alt="underscore"  width="25%" >
        <div class="container">
            <div class="d-flex mb-3" style="align-items: center">
                <h4 class="ml-2 tittle" style="width: 70%; line-height: normal; color: black !important"> Apa yang <span style="color: #30BAFF"> Dikatakan </span> Orangtua terhadap Sekolah Rabbani </h4>
                <div class="center">
                    <button style="border: none; background:none" onclick="prevSlide()"> 
                        <i style="width: 10%; color: #30BAFF" class="fa-solid fa-circle-chevron-left fa-lg"></i> 
                    </button>
                </div>
                <div class="center">
                    <button style="border: none; background:none" onclick="nextSlides()"> 
                        <i style="width: 10%; color: #30BAFF" class="fa-solid fa-circle-chevron-right fa-lg"></i> 
                    </button>
                </div>
            </div>

            <div class="row-card">
                @foreach ($testimoni as $item)
                    <div class="card card-testi shadow-sm">
                        <div class="card-header px-2">
                            <div class="d-flex" style="align-items:center">
                                <img src="{{asset($item->image)}}" alt="pp_{{$item->name}}"  width="17%" height="auto" >
                                <div style="margin-left: 4px">
                                    <p class="mb-0" style="font-size: 10px"> <b> {{$item->name}} </b> </p>
                                    <p class="mb-0" style="font-size: 9px; color:#30BAFF"> {{$item->position}} </p>
                                </div>
                            </div>
                        </div>

                        <div class="card-body py-1 px-1" style="font-size: 9px">
                            <span> {{$item->comments}}
                            </span>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <div class="section-10" id="ppdb_daftar">
        <div class="bg-kelas">
            <img src="{{asset('assets/images/cover-kelas.jpg')}}" alt="cover-kelas"  width="100%" style="height: 531px" >
        </div>
            
        <div class="center text-kelas mt-3">
            <h3 class="p-3" style="font-weight: 700"> Ayo Bergabung Bersama Sekolah Rabbani! Tempat Tumbuhnya Generasi Qurani dan Berprestasi! </h3>
            <h5 class="p-3 mx-3"> Daftar Sekarang & Dapatkan Info Lengkapnya! </h5>

            <a href="https://sekolahrabbani.sch.id/pendaftaran" target="_blank" style="text-decoration: none; color: black" class="center btn-daftar-sekolah my-3"> DAFTAR <b> SEKOLAH </b> </a>
            <a href="https://sekolahrabbani.sch.id/trial-class" style="text-decoration: none; color: black" class="center btn-trial"> DAFTAR <b> TRIAL CLASS </b> </a>
            <a href="https://api.whatsapp.com/send/?phone={{$no_hp}}&text={{$message_url}}" target="_blank" style="text-decoration: none; color: black" class="center btn-kunjungi my-3"> <b> KUNJUNGI </b> KAMI </a>

        </div>
    </div>

    <div class="section-info">
        <div class="container">
            <h6 class="text-white"> Follow Our Social Media </h6>
            <div class="d-flex mt-3" style="width: 40%; justify-content:space-around">
                <a href="https://www.instagram.com/sekolahrabbaniqlp/" target="_blank" > <i class="fa-brands fa-instagram fa-xl" style="color: #D732A8"></i> </a>
                <a href="https://www.youtube.com/@SekolahRabbani" target="_blank"> <i class="fa-brands fa-youtube fa-xl" style="color: #D732A8"></i> </a>
                <a href="https://www.tiktok.com/@SekolahRabbanii" target="_blank" > <i class="fa-brands fa-tiktok fa-lg" style="color: #D732A8"></i> </a>
                <a href="https://sekolahrabbani.sch.id/" target="_blank" > <i class="fa-solid fa-globe fa-lg" style="color: #D732A8"></i> </a>
            </div>

            <div class="d-grid-footer" style="width: 80%;">
                <a href="#" style="text-decoration: none; color: white; font-size: 13px"> Home </a>
                <a href="#" style="text-decoration: none; color: white; font-size: 13px"> Profile </a>
                <a href="#" style="text-decoration: none; color: white; font-size: 13px"> Kurikulum </a>
                <a href="#" style="text-decoration: none; color: white; font-size: 13px"> Karir </a>
                <a href="#" style="text-decoration: none; color: white; font-size: 13px"> Review </a>
                <a href="#" style="text-decoration: none; color: white; font-size: 13px"> Contact Us </a> 
                <a href="#" style="text-decoration: none; color: white; font-size: 13px"> PPDB </a> 
                <a href="#" style="text-decoration: none; color: white; font-size: 13px"> Email </a> 
            </div>
           
            <div class="center mt-5 text-white">
                <p style="font-size: 12px">&copy; <script>document.write(new Date().getFullYear())</script> Sekolah Rabbani. All Rights Reserved</p>
            </div>
        </div>
    </div>

    <script>
        let timer = function (date) {
            let timer = Math.round(new Date(date).getTime()/1000) - Math.round(new Date().getTime()/1000);
            let minutes, seconds;
            setInterval(function () {
                if (--timer < 0) {
                    timer = 0;
                }
                hours = parseInt((timer / 60 / 60) % 24, 10);
                minutes = parseInt((timer / 60) % 60, 10);
                seconds = parseInt(timer % 60, 10);

                hours = hours < 10 ? "0" + hours : hours;
                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                document.getElementById('cd-hours').innerHTML ="<b>" + hours + "</b>";
                document.getElementById('cd-minutes').innerHTML = "<b>" + minutes + "</b>";
                document.getElementById('cd-seconds').innerHTML = "<b>" + seconds + "</b>";
            }, 1000);
        }
 
        //using the function
        const today = new Date()
        const target = new Date("Jan 5, 2030 22:30:00").getTime();
        timer(target);

        function daftar() {
            if (window.location.pathname === '/') {
                document.getElementById('ppdb_daftar').scrollIntoView();
            }
        }

        let currentCard = 0;
        let cards = document.querySelectorAll(".card");
        let totalCards = cards.length ;

        function nextCard() {

            for (let i = 0; i < totalCards; i++) {
                cards[i].style.transform = `translateX(${-100 * (currentCard + 1) }%)`;
            }

            for (let i = 0; i <= currentCard; i++) {
                cards[i].style.transform = `translateX(${500 -(100*currentCard) }%)`;
            }

            (currentCard <= 4) ? currentCard++ : currentCard = 0;
        }

        function previousCard() {
            if (currentCard === 0) {
                currentCard = totalCards - 1;
            } else {
                currentCard--;
            }

            for (let i = 0; i < totalCards; i++) {
                cards[i].style.transform = `translateX(${-100 * (currentCard - 1)}%)`;
            }

        }

        function nextSlides() {
            nextCard();
        }

        function prevSlide() {
            previousCard();
        }

    </script>
@endsection