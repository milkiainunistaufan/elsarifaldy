<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- mata --}}
    <meta property="og:title" content="Elasa dan Rifaldy" />
    <meta property="og:description" content="Doakan kami Sakinah, Mwaddah, Warrohmah" />
    <meta property="og:image" content="https://elsarifaldy.chickencode.org/public/images/galleries/4.jpg" />
    <meta property="og:url" content="https://elsarifaldy.chickencode.org/public/" />
    <meta property="og:type" content="website" />
    {{-- font google --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    {{-- tailwind css --}}
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <link rel="stylesheet" href="{{ asset('css/front.css') }}">
    {{-- simply countdown --}}
    <link rel="stylesheet" href="{{ asset('css/simplyCountdown.theme.default.css') }}"/>
    <script src="{{ asset('js/simplyCountdown.min.js') }}"></script>
    {{-- font awesome icon --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    {{-- animate on scroll --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    {{-- fancy box --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>

    <title>Invitation</title>
</head>
<body>
  
<div id="invitationPage" class="hidden">
    {{-- pembukaan --}}
    <section id="home" class="section bg-cover bg-no-repeat bg-center" style="background-image: url('{{ asset('images/templates/standard/1.jpg') }}');">
      <div class=" bg-black/40 mx-auto vh-100">
        <div class="h-screen flex justify-center items-end ">
          <div class="flex-col text-center justify-center items-center p-16">
            <h4 class="text-2xl font-ral mb-7 text-white">We are getting married</h4>
            <h1 class="text-4xl text-white md:text-7xl font-pd font-semibold mb-5 slide-in-right">Elsa & Rifaldy</h1>
            <p class="font-sans text-xl slide-in-left mb-3 text-white">05 April 2025</p>
            <hr class="mb-5"/>
            <div class="simply-countdown text-sm md:text-lg text-white mx-auto slide-in-bottom  "></div>
          </div>
        </div>
      </div>
    </section>
    {{-- arrum --}}
    <div id="arum" class=" w-full px-4 text-center py-14 md:px-48 md:text-lg bg-beige ">
      <div class="text-white" data-aos="fade-right" data-aos-delay="500">
        <h1 class="mb-10 font-semibold " >بِسْمِ اللَّهِ الرحمن الرَّحِيمِ</h1>
        <div class="flex justify-center items-center mb-10 ">
            <p class="font-ral w-full text-center xl:w-4/6">Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan sayang. Sungguh, pada yang demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir.</p>        
        </div>
        <h1 class="text-center font-semibold ">Q.S. Ar-Rum : 21</h1>
      </div>
    </div>

    {{-- pasangan --}}
    <section id="couple" class="section bg-offWhite ">
      <div class="h-full mx-auto">
        <div class=" bg-offWhite flex-row justify-center pt-12 px-2 mb-10">
          <div class="flex-row justify-items-center text-center" data-aos="fade-right" data-aos-delay="500">
            <p class="font-ral md:text-2xl  mb-7">Assalamu’alaikum Warahmatullahi Wabarakatuh</p>
            <p class="font-ral  w-full text-center md:text-xl md:w-5/6">Maha suci Allah SWT yang telah menciptakan makhluk-Nya berpasang-pasangan. Ya Allah, perkenankanlah kami merangkai kasih sayang yang Kau ciptakan di antara kami:</p>
          </div>
        </div>

        <div class="flex-row md:flex">
          <div class="w-full text-white flex justify-center space-x-3 bg-sage md:py-24 px-5 py-10">
            <div class=" text-right self-center md:self-end" >
              <h1 class="font-pd font-semibold text-2xl mb-2" data-aos="fade-right" data-aos-duration="1000">The Bride |</h1>
              <h1 class="font-pd font-semibold text-2xl mb-2" data-aos="fade-right" data-aos-duration="2000">Elsa Diana Maulana</h1>
              <hr class="mb-1">
              <p class="font-ral xl:text-xl" data-aos="fade-up-right" data-aos-duration="3000">Putri dari <br class=""> Bapak Hadiana Astra Yasuka <br> dan Ibu Enik Wijayanti</p>
            </div>
            <div class="bg-cover rounded-2xl w-2/6 md:w-3/6 lg:w-2/6 overflow-hidden group hover:scale-95 transition-all duration-500" data-aos="flip-right" data-aos-delay="500" data-aos-duration="2000">
              <div class="bg-cover rounded-2xl  aspect-[6/9] w-full group-hover:scale-125 transition-all duration-500 group-hover:rotate-12" style="background-image: url('{{ asset('images/couple/bride.jpg') }}')"></div>
            </div>
            {{-- <div class="flex justify-center items-center">
              <h2 class="font-ral md:text-4xl rotate-90  w-full"> The Bride</h2>
            </div> --}}
          </div>

          <div class="w-full flex justify-center space-x-3 bg-beige md:py-24 px-5 py-10">
            {{-- <div class="flex justify-center items-center">
              <h2 class="font-ral md:text-4xl -rotate-90"> The Groom</h2>
            </div> --}}
            <div class="bg-cover rounded-2xl w-2/6 md:w-3/6 lg:w-2/6 overflow-hidden group hover:scale-95 transition-all duration-500" data-aos="flip-left" data-aos-delay="500" data-aos-duration="2000">
              <div class="bg-cover rounded-2xl aspect-[6/9] w-full group-hover:scale-125 transition-all duration-500 group-hover:rotate-12" style="background-image: url('{{ asset('images/couple/groom.jpg') }}')"></div>
            </div>
            <div class="flex justify-center items-center lg:items-start text-white">
              <div class="text-left" >
                <h1 class="font-pd font-semibold text-2xl mb-2" data-aos="fade-right" data-aos-duration="1000">| The Groom</h1>
                <h1 class="font-pd font-semibold text-2xl mb-2" data-aos="fade-right" data-aos-duration="2000">Rifaldy Yoga Irawan</h1>
                <hr class="mb-3 bg-slate-900 text-slate-900 border border-slate-900">
                <p class="font-ral xl:text-xl" data-aos="fade-up-right" data-aos-duration="3000">Putra dari <br class="xl:hidden"> Bapak Parno <br> dan Ibu Umi Kulsum</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- love stories --}}
    <section id="loveStory" class="bg-offWhite  bg-cover bg-center" style="background-image: url('{{ asset('images/templates/standard/story.jpg') }}')">
      <div class="p-5 py-16 bg-slate-800/50 text-white" data-aos="fade-right" data-aos-delay="500" data-aos-duration="1000">
        <h1 class="font-ral text-xl md:text-5xl lg:text-5xl mb-10 font-semibold text-center" >Our Love Stories</h1>
        <div class="flex justify-center items-center mb-10 ">
            <p class="font-ral w-full text-center text-balance xl:w-5/6">
              Coba aku tebak, mungkin suatu saat kamu akan banyak bercerita ke anak kita bagaimana pertama kamu dulu mencintaiku, dari awal melihatku, datang dan mendekatiku, mencoba memberi pesan lewat whatsapp, dan sampai meminta tolong ke temanku, sampai akhirnya menikahiku. <br> <br>
              Hmmm Entah kenapa dahulu aku menolak kamu, entah mengapa dahulu aku tidak mebalas kasih mu, entah kenapa dahulu aku tidak pernah menghargai keberadaan seseorang yang sekarang akan berani menafkahiku. <br> <br>
              mungkin kamu akan bilang "biarlah itu sudah berlalu" dan "terimakasih sudah mau mengenalku dan menerima aku". Hey.. hey.. hey.. Perjalanan kita masih sangat panjang, dan di awal kisah kita biarkanlah aku meminta maaf dengan tulus ya.
            </p>  
          </div>
          <div class="flex justify-center items-center mb-4">
              <p class="font-ral w-full text-center bg-sage py-4 px-6 rounded-lg xl:w-4/6 text-white">
                &rsquo; Kita memang tidak diberi gambaran akan seperti apa kita masa depan, tapi kita diberi kesempatan menjalani dan belajar bersamanya. &rsquo;
              </p>  
          </div>
          <h3 class="font-ral text-center italic mb-2">By : <span class="font-pd">Eca Frozen</span></h3>
          <h4 class="font-ral text-center italic">
            ~ Mungkin anak kita akan lebih mengerti perjuangan kamu untuk aku ~
          </h4> 
      </div>
    </section>
    {{-- galleries --}}
    <section id="gallery" class="section bg-offWhite py-10 px-3">
      <div class="text-center pt-8 pb-10">
        <h1 class="font-ral text-2xl md:text-5xl lg:text-5xl mb-16 font-semibold text-black">Galleries</h1>
        <div class="flex justify-center h-full mx-auto">
          <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-6 gap-4">
            <a href="{{ asset('images/galleries/1.jpg') }}" data-aos="zoom-out" data-aos-duration="1000" data-fancybox="gallery"><img src="{{ asset('images/galleries/1.jpg') }}" class="rounded shadow"></a>
            <a href="{{ asset('images/galleries/2.jpg') }}" data-aos="zoom-out" data-aos-duration="1000" data-fancybox="gallery"><img src="{{ asset('images/galleries/2.jpg') }}" class="rounded shadow"></a>
            <a href="{{ asset('images/galleries/3.jpg') }}" data-aos="zoom-out" data-aos-duration="1000" data-fancybox="gallery"><img src="{{ asset('images/galleries/3.jpg') }}" class="rounded shadow"></a>
            <a href="{{ asset('images/galleries/4.jpg') }}" data-aos="zoom-out" data-aos-duration="1000" data-fancybox="gallery"><img src="{{ asset('images/galleries/4.jpg') }}" class="rounded shadow"></a>
            <a href="{{ asset('images/galleries/5.jpg') }}" data-aos="zoom-out" data-aos-duration="1000" data-fancybox="gallery"><img src="{{ asset('images/galleries/5.jpg') }}" class="rounded shadow"></a>
            <a href="{{ asset('images/galleries/6.jpg') }}" data-aos="zoom-out" data-aos-duration="1000" data-fancybox="gallery"><img src="{{ asset('images/galleries/6.jpg') }}" class="rounded shadow"></a>
        </div>
          {{-- <div class="grid grid-cols-1 md:grid-cols-3 xl:grid-cols-6 gap-7 md:gap-4 lg:gap-2 place-content-center">
            <div class="h-96 border border-sage  md:h-96 rounded-lg group overflow-hidden hover:scale-95 transition-all duration-500" data-aos="zoom-out" data-aos-duration="1000">
              <div class=" bg-cover rounded-lg h-full aspect-[8/11] group-hover:scale-125 transition-all duration-500 group-hover:rotate-12" style="background-image: url('{{ asset('images/galleries/1.jpg') }}');"></div>
            </div>
            <div class="h-96 border border-sage md:h-96 rounded-lg group overflow-hidden hover:scale-95 transition-all duration-500" data-aos="zoom-out" data-aos-duration="1000">
              <div class=" bg-cover rounded-lg h-full aspect-[8/11] group-hover:scale-125 transition-all duration-500 group-hover:rotate-12" style="background-image: url('{{ asset('images/galleries/2.jpg') }}');"></div>
            </div>
            <div class="h-96 border border-sage md:h-96 rounded-lg group overflow-hidden hover:scale-95 transition-all duration-500" data-aos="zoom-out" data-aos-duration="1000">
              <div class=" bg-cover rounded-lg h-full aspect-[8/11] group-hover:scale-125 transition-all duration-500 group-hover:rotate-12" style="background-image: url('{{ asset('images/galleries/3.jpg') }}');"></div>
            </div>
            <div class="h-96 border border-sage md:h-96 rounded-lg group overflow-hidden hover:scale-95 transition-all duration-500" data-aos="zoom-out" data-aos-duration="1000">
              <div class=" bg-cover rounded-lg h-full aspect-[8/11] group-hover:scale-125 transition-all duration-500 group-hover:rotate-12" style="background-image: url('{{ asset('images/galleries/4.jpg') }}');"></div>
            </div>
            <div class="h-96 border border-sage md:h-96 rounded-lg group overflow-hidden hover:scale-95 transition-all duration-500" data-aos="zoom-out" data-aos-duration="1000">
              <div class=" bg-cover rounded-lg h-full aspect-[8/11] group-hover:scale-125 transition-all duration-500 group-hover:rotate-12" style="background-image: url('{{ asset('images/galleries/5.jpg') }}');"></div>
            </div>
            <div class="h-96 border border-sage md:h-96 rounded-lg group overflow-hidden hover:scale-95 transition-all duration-500" data-aos="zoom-out" data-aos-duration="1000">
              <div class=" bg-cover rounded-lg h-full aspect-[8/11] group-hover:scale-125 transition-all duration-500 group-hover:rotate-12" style="background-image: url('{{ asset('images/galleries/6.jpg') }}');"></div>
            </div>
          </div> --}}
        </div>
      </div>
    </section>
    
    {{-- weddings --}}
    <section id="wedding" class="section  bg-beige " >
      <div class="h-full pt-28 pb-16 lg:pt-28  mx-auto px-5">

        <div class=" flex justify-center items-center md:justify-evenly space-x-7 mb-16 p-2">
          <div class=" h-48 lg:h-72 xl:h-80 rounded-lg -rotate-6 bg-cover aspect-[6/9] hover:rotate-0 transition-all duration-500" style="background-image: url('{{ asset('images/templates/standard/akad.jpg') }}')">
          </div>
          <div class=" h-52 md:h-64 lg:hidden hidden md:block rotate-12 rounded-lg bg-cover aspect-[6/9] hover:rotate-0 transition-all duration-500" style="background-image: url('{{ asset('images/templates/standard/resepsi.jpg') }}')">
          </div>
          <div class="flex items-center text-white ">
            <div>
              <h1 class="mb-4 font-ral font-semibold text-2xl " data-aos="zoom-in-right" data-aos-duration="1000"> Akad & Resepsi</h1>
              <h3 class="" data-aos="fade-right" data-aos-duration="1000"> 05 April 2025</h3>
              <p class="font-ral " data-aos="fade-right" data-aos-duration="2000">Kediaman mempelai wanita</p>
              <hr class="mb-2 bg-slate-950">
              <p class="text-balance  mb-2 lg:mb-4" data-aos="fade-up" data-aos-duration="2000">Tamanasri RT.08 RW.03 Kec. Ampelgading</p>
            </div>
          </div>
        </div>
        <div class="text-white text-center">
          <h1 class="text-2xl mb-8 font-ral font-semibold">
            Klik untuk lokasi
          </h1>
        </div>
        <div class=" flex-row md:flex justify-center items-center mb-3 w-full text-white">
          <div class="flex items-center justify-center md:w-1/2  mb-8">
            <div class="text-center ">
              <a href="https://maps.app.goo.gl/P1tPYXEkJpVVdmg37" class=" w-52 py-2 px-4 flex justify-center items-center space-x-2 rounded-xl bg-sage items-center border border-sage hover:bg-white hover:text-slate-900" target="blank">
                  <i class="fa-brands fa-android text-3xl"></i> <h1>google maps</h1>
              </a>
            </div>
          </div>
          <div class="flex items-center justify-center md:w-1/2  ">
            <div class="text-center ">
              <a href="https://maps.apple.com/?ll=-8.238078,112.857841&q=Lokasi%20eca&t=m" class="w-52 py-2 px-4 flex justify-center items-center space-x-2 rounded-xl bg-sage items-center border border-sage hover:bg-white hover:text-slate-900" target="blank">
                <i class="fa-brands fa-apple text-3xl"></i> <h1>Apple Maps</h1>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="">    
      <div class="maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3948.6483410599635!2d112.85516737500974!3d-8.238071391794987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zOMKwMTQnMTcuMSJTIDExMsKwNTEnMjcuOSJF!5e0!3m2!1sid!2sid!4v1734965637806!5m2!1sid!2sid" class="h-48 md:h-80 w-full md:mt-16 rounded-lg border border-sage" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
    {{-- weddings gift --}}
    <section id="giftsection" class="section gift bg-offWhite">
      <div class="container mx-auto">
        <div class="w-full px-4 text-center py-14 md:px-48 md:text-lg ">
          <h1 class="font-ral text-xl md:text-5xl lg:text-5xl mb-10 font-semibold text-center" >Wedding Gift</h1>
          <div class="flex justify-center items-center mb-10">
              <p class="font-ral w-full text-center xl:w-4/6">
                Doa Restu Anda merupakan karunia yang sangat berarti bagi kami.
              </p>        
          </div>
          <button id="toggleGiftBtn" class="bg-sage text-5xl rounded-md py-4 px-4 text-white font-semibold hover:bg-white hover:text-slate-900 hover:border-sage"><i class="fa-solid fa-gift"></i></button>
        </div>
      </div>
    </section>
    {{-- chat --}}
    <section id="chatsection" class="chat section bg-sage pt-20 pb-10 ">
      <div class="container mx-auto text-white ">
        <h1 class=" text-center font-pd text-4xl font-semibold mb-10">Ucapan</h1>
        <div class="flex-row md:flex justify-center items-center">
          <div class="w-full flex justify-center items-center ">
            <div class="w-2/3 mb-4">
                <div class="mb-4">
                  <label for="name" class="block">Nama</label>
                  <input type="text" required id="name" name="name" class="text-slate-900 w-full p-2 rounded-lg " placeholder="Nama" required>
                </div>
                <div class="mb-3">
                  <label for="chat" class="block">Chat</label>
                  <textarea required id="chat" name="chat" class="w-full p-2 rounded-lg text-slate-800" required></textarea>
                </div>
                <button type="submit" id="sendChat" name="sendChat" class="bg-offWhite py-2  w-full rounded-lg text-black mb-5">Kirim</button>
            </div>
          </div>
          <div id="chat-container" class=" w-full flex justify-center text-slate-900 h-60 ">
            <div id="chatContainer" class="w-2/3 text-white overflow-y-auto" style="scrollbar-width: none;"></div>
          </div>
        </div>
      </div>
    </section>

    <section id="penutup" class="section penutup bg-beige ">
      <div class="container mx-auto">
        <div class="w-full px-4 text-center py-14 md:px-48 md:text-lg text-white">
          <div class="flex justify-center items-center mb-10">
              <p class="font-ral w-full text-center xl:w-4/6">
                Atas kehadiran dan do’a restu dari
                Bapak/Ibu/Saudara/i sekalian,
                kami mengucapkan Terima Kasih.</p>        
          </div>
          <h1 class="text-center">Wassalamualaikum Warahmatullahi Wabarakatuh</h1>
        </div>
      </div>
    </section>

  <footer class="bg-sage text-white text-sm w-full">
    <div class="flex justify-center items-center h-16">
      <p>&copy; 2024 <a href="https://milki.chickencode.org" target="blank" class="">kowalsky invitaton.</a> All rights reserved.</p>
    </div>
  </footer>
  <div class="fixed top-0 right-0 h-full w-14">
    <div class="flex flex-col justify-center h-full">
        <ul class="text-center space-y-1 bg-slate-100/40 rounded-lg">
            <li><a href="#" class="block text-4xl py-3 hover:bg-slate-600/75 hover:text-white hover:rounded-t-lg"><i class="fa-regular fa-envelope"></i></a></li>
            <li><a href="#couple" class="block text-4xl py-3 hover:bg-slate-600/75 hover:text-white"><i class="fa-regular fa-heart"></i></a></li>
            <li><a href="#loveStory" class="block text-4xl py-3 hover:bg-slate-600/75 hover:text-white"><i class="fa-regular fa-note-sticky"></i></a></li>
            <li><a href="#gallery" class="block text-4xl py-3 hover:bg-slate-600/75 hover:text-white"><i class="fa-regular fa-images"></i></a></li>
            <li><a href="#wedding" class="block text-4xl py-3 hover:bg-slate-600/75 hover:text-white"><i class="fa-solid fa-calendar-days"></i></a></li>
            <li><a href="#chatsection" class="block text-4xl py-3 hover:bg-slate-600/75 hover:text-white"><i class="fa-regular fa-comment-dots"></i></a></li>
            <li><button id="song" class="text-4xl py-3 hover:bg-slate-600/75 hover:text-white w-full hover:rounded-b-lg" onclick="toggleMusic()"><i class="fa-solid fa-music"></i></button></li>
        </ul>
    </div>
  </div>
  <div id="takeGift" class="hidden fixed top-0 left-0 bg-white text-bca w-full h-full">
    <div class="flex justify-end w-full py-4 px-4 text-4xl">
      <button id="toggleGiftBtnx">
        <i class="fa-solid fa-square-xmark"></i>
      </button>
    </div>
    <div class="flex justify-center items-center h-full">
      <div class="h-1/2 text-center">
        <h1 class="text-4xl font-bold mb-3">BCA</h1>
        <h2 class="text-2xl font-semibold mb-2">an. Elsadiana Maulana</h2>
        <div class="flex items-center text-2xl">
            <input type="text" id="rekening" value="1240614746" class="border p-2 rounded-l-md w-48 text-center font-semibold" readonly>
            <button onclick="copyRekening()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-r-md">
                <i class="fa-regular fa-copy"></i>
            </button>
        </div>
      </div>
    </div>
  </div>
</div>
  <div class="tampil fixed top-0 right-0 left-0 bottom-0 mx-auto bg-cover bg-center slide-up" id="tampil" style="background-image: url('{{ asset('images/templates/standard/1.jpg') }}');">
    <div class="tampil-body bg-black/35 flex w-full text-center h-full justify-center py-32 px-4 items-end" >
      <div class="hero text-white">
        {{-- <p class="mb-3 font-ral">Assalamualaikum Warohmatullahi Wabarokatuh</p> --}}
        <h4 class=" font-ral">Dear Mr./Mrs./Brother/Sister, <br> <span class="font-semibold"></span></h4>
        <hr class="mb-3">
        <h1 class="font-ral font-semibold text-xl mb-2">You're Invited!</h1>
        <p class="mb-3 font-ral text-sm">Join us for a special celebration of love and happiness.</p>
        <button type="submit" id="openInvitationBtn" class="py-2 px-7 bg-slate-700/50 border hover:bg-slate-200 hover:text-slate-800" ><i class="fa-regular fa-envelope"></i>&nbsp; Open Invitation</button>
      </div>
    </div>
  </div>
  
  <script>
    simplyCountdown('.simply-countdown', {
      year: 2025, // Target year (required)
        month: 4, // Target month [1-12] (required)
        day: 5, // Target day [1-31] (required)
        hours: 8, // Target hour [0-23], default: 0
        
        words: { // Custom labels, with lambda for plurals
            days: { root: 'hari', lambda: (root, n) => n > 1 ? root + '' : root },
            hours: { root: 'Jam', lambda: (root, n) => n > 1 ? root + '' : root },
            minutes: { root: 'menit', lambda: (root, n) => n > 1 ? root + '' : root },
            seconds: { root: 'Detik', lambda: (root, n) => n > 1 ? root + '' : root }
        },
        
    })
  </script>
  <script>
    Fancybox.bind("[data-fancybox]", {
      autoFocus: false, // Mencegah Fancybox memaksa fokus
    });
  </script>
  <script>
    function copyRekening() {
        let input = document.getElementById("rekening");
        input.select();
        input.setSelectionRange(0, 99999); // Untuk mobile
        navigator.clipboard.writeText(input.value).then(() => {
            alert("Nomor rekening berhasil disalin!");
        }).catch(err => {
            console.error("Gagal menyalin: ", err);
        });
    }
</script>
  <script>
    document.getElementById('toggleGiftBtn').addEventListener('click', function () {
        const takeGift = document.getElementById('takeGift');

        if (takeGift.classList.contains('hidden')) {
            takeGift.classList.remove('hidden');
            takeGift.classList.add('slide-in-bottom-bca');
        } else {
            takeGift.classList.add('hidden');
        }
    });
    document.getElementById('toggleGiftBtnx').addEventListener('click', function () {
        const takeGift = document.getElementById('takeGift');
          takeGift.classList.add('hidden');
    });
</script>
  <script>
    document.getElementById('sendChat').addEventListener('click', function () {
            const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            // Get input values by their 'name' attribute
            const name = document.querySelector('input[name="name"]').value;
            const chat = document.querySelector('textarea[name="chat"]').value;

            // Create data object
            const data = {
                name: name,
                chat: chat
            };

            // Axios request
            axios.post('/api/chat', data, {
                headers: {
                    'X-CSRF-TOKEN': token
                }
            })
            .then(response => {
                console.log('Success:', response.data);
                alert('Chat submitted successfully!');
                document.querySelector('input[name="name"]').value="";
                document.querySelector('textarea[name="chat"]').value="";
                fetchChats(existingChats);
            })
            .catch(error => {
                console.error('Error:', error.response ? error.response.data : error.message);
                alert('Failed to submit chat.');
            });
        });
        function fetchChats(existingChats = []) {
                  axios.get('/api/chats') // Ganti URL ini sesuai endpoint GET untuk membaca data chats
                      .then(response => {
                          const chats = response.data.data; // Asumsi respons berupa array objek
                          const chatContainer = document.getElementById('chatContainer');

                          // Insert data into chatContainer
                          chats.forEach(chat => {
                            if (!existingChats.some(existing => existing.id === chat.id)){
                              const chatItem = document.createElement('div');
                              chatItem.classList.add('chat-item');
                              chatItem.innerHTML = `
                                <div class="flex space-x-4 w-full ">
                                  <i class="fa-regular fa-heart text-xl mt-1"></i>
                                  <div class="w-full mb-5">
                                    <h3>${chat.name}</h3>
                                    <p class="break-words">Pesan : ${chat.chat}</p>
                                    <p>${chat.human_created_at}</p>
                                    <hr>
                                  </div>
                                </div>
                              `;
                              chatContainer.prepend(chatItem);
                              existingChats.push(chat);
                            }
                          });
                      })
                      .catch(error => {
                          console.error('Error fetching chats:', error.response ? error.response.data.data : error.message);
                      });
              }
              const existingChats = [];
              // Call fetchChats when the page loads
              document.addEventListener('DOMContentLoaded', fetchChats(existingChats));
  </script>
  <script>
        const openInvitationBtn = document.getElementById('openInvitationBtn');
        const landingPage = document.getElementById('tampil');
        const invitationPage = document.getElementById('invitationPage');
        

        openInvitationBtn.addEventListener('click', () => {
            // Tambahkan kelas hidden untuk animasi geser ke atas
            landingPage.classList.add('hidden');
            setTimeout(() => {
              // Tampilkan halaman undangan setelah animasi selesai
              invitationPage.classList.remove('hidden');
            }, 500); // Delay harus sama dengan durasi animasi CSS
            putarmusic();
        });
        var audio = new Audio('{{ asset('audio/asmaranala.mp3') }}');
        function putarmusic(){
            audio.play();
            audio.loop = true; 
        };

        function toggleMusic() {
            const button = document.getElementById('song'); // Ambil tombol
            const icon = button.querySelector('i');

            
            if (audio.paused) {
                audio.play(); // Mulai musik
                
                icon.classList.remove("fa-volume-xmark");
                icon.classList.add("fa-music");

            } else {
                audio.pause(); // Hentikan musik
                icon.classList.remove("fa-music");
                icon.classList.add("fa-volume-xmark");
            }
        };

        const urlParams = new URLSearchParams(window.location.search);
        const name = urlParams.get('n');
        const nameContainer = document.querySelector('.hero h4 span');
        nameContainer.innerText = name;
  </script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  <script>
    const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('show');
        }
      });
    });

    const elements = document.querySelectorAll('.slide-in-right');
    elements.forEach((el) => observer.observe(el));
  </script>
</body>
</html>