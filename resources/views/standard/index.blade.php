<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <title>Invitation</title>
</head>
<body>
  
<div id="invitationPage" class="hidden">
    {{-- pembukaan --}}
    <section id="home" class="section bg-cover bg-no-repeat bg-center" style="background-image: url('{{ asset('images/templates/standard/1.png') }}');">
      <div class="container mx-auto vh-100">
        <div class="h-screen flex justify-center items-center ">
          <div class="flex-col text-center justify-center items-center p-16">
            <h4 class="text-2xl text-slate-900 font-ral mb-7 ">We are getting married</h4>
            <h1 class="text-4xl p-4 text-slate-700 md:text-7xl font-pd font-semibold mb-5 slide-in-right">Elsa & Rifaldy</h1>
            <p class="font-sans text-xl text-slate-900 slide-in-left mb-3">10 April 2025</p>
            <hr class="mb-5"/>
            <div class="simply-countdown text-sm md:text-lg text-slate-50 mx-auto slide-in-bottom "></div>
          </div>
        </div>
      </div>
    </section>
    {{-- arrum --}}
    <div id="arum" class=" w-full px-4 text-center py-14 md:px-48 md:text-lg bg-beige ">
      <div class="" data-aos="fade-right" data-aos-delay="500">
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
            <p class="font-ral md:text-2xl text-slate-900 mb-7">Assalamu’alaikum Warahmatullahi Wabarakatuh</p>
            <p class="font-ral text-slate-900 w-full text-center md:text-xl md:w-5/6">Maha suci Allah SWT yang telah menciptakan makhluk-Nya berpasang-pasangan. Ya Allah, perkenankanlah kami merangkai kasih sayang yang Kau ciptakan di antara putra-putri kami:</p>
          </div>
        </div>

        <div class="flex-row md:flex">
          <div class="w-full text-white flex justify-center space-x-3 bg-sage md:py-24 px-5 py-10">
            <div class=" text-right self-center md:self-end" data-aos="fade-down-right" data-aos-duration="1000">
              <h1 class="font-pd font-semibold text-2xl mb-2">Elsa Diana Maulana</h1>
              <hr class="mb-1">
              <p class="font-ral xl:text-xl">Putri dari <br class=""> Bapak Hadiana Astra Yasuka <br> dan Ibu Enik Wijayanti</p>
            </div>
            <div class="bg-cover rounded-2xl w-2/6 md:w-3/6 lg:w-2/6 overflow-hidden group hover:scale-95 transition-all duration-500" data-aos="flip-right" data-aos-delay="500" data-aos-duration="2000">
              <div class="bg-cover rounded-2xl  aspect-[6/9] w-full group-hover:scale-125 transition-all duration-500 group-hover:rotate-12" style="background-image: url('{{ asset('images/couple/1.jpg') }}')"></div>
            </div>
            <div class="flex justify-center items-center">
              <h2 class="font-ral md:text-4xl rotate-90  w-full"> The Bride</h2>
            </div>
          </div>

          <div class="w-full flex justify-center space-x-3 bg-beige md:py-24 px-5 py-10">
            <div class="flex justify-center items-center">
              <h2 class="font-ral md:text-4xl -rotate-90"> The Groom</h2>
            </div>
            <div class="bg-cover rounded-2xl w-2/6 md:w-3/6 lg:w-2/6 overflow-hidden group hover:scale-95 transition-all duration-500" data-aos="flip-left" data-aos-delay="500" data-aos-duration="2000">
              <div class="bg-cover rounded-2xl aspect-[6/9] w-full group-hover:scale-125 transition-all duration-500 group-hover:rotate-12" style="background-image: url('{{ asset('images/couple/1.jpg') }}')"></div>
            </div>
            <div class="text-left" data-aos="fade-up-right" data-aos-duration="1000">
              <h1 class="font-pd font-semibold text-2xl mb-2">Rifaldy Yoga Irawan</h1>
              <hr class="mb-3 bg-slate-900 text-slate-900 border border-slate-900">
              <p class="font-ral xl:text-xl">Putra dari <br class="xl:hidden"> Bapak Parno <br> dan Ibu Umi Kulsum</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- galleries --}}
    <section id="gallery" class="section bg-offWhite py-10 ">
      <div class="text-center pt-8 pb-10">
        <h1 class="font-ral text-xl md:text-5xl lg:text-5xl mb-16 font-semibold">Galleries</h1>
        <div class="flex justify-center h-full mx-auto">
          <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-5 gap-7 place-content-center">
            <div class="h-56  md:h-96 rounded-lg group overflow-hidden hover:scale-95 transition-all duration-500" data-aos="zoom-out" data-aos-duration="1000">
              <div class=" bg-cover rounded-lg h-full aspect-[6/9] group-hover:scale-125 transition-all duration-500 group-hover:rotate-12" style="background-image: url('{{ asset('images/couple/1.jpg') }}');"></div>
            </div>
            <div class="h-56  md:h-96 rounded-lg group overflow-hidden hover:scale-95 transition-all duration-500" data-aos="zoom-out" data-aos-duration="1000">
              <div class=" bg-cover rounded-lg h-full aspect-[6/9] group-hover:scale-125 transition-all duration-500 group-hover:rotate-12" style="background-image: url('{{ asset('images/couple/1.jpg') }}');"></div>
            </div>
            <div class="h-56  md:h-96 rounded-lg group overflow-hidden hover:scale-95 transition-all duration-500" data-aos="zoom-out" data-aos-duration="1000">
              <div class=" bg-cover rounded-lg h-full aspect-[6/9] group-hover:scale-125 transition-all duration-500 group-hover:rotate-12" style="background-image: url('{{ asset('images/couple/1.jpg') }}');"></div>
            </div>
            <div class="h-56  md:h-96 rounded-lg group overflow-hidden hover:scale-95 transition-all duration-500" data-aos="zoom-out" data-aos-duration="1000">
              <div class=" bg-cover rounded-lg h-full aspect-[6/9] group-hover:scale-125 transition-all duration-500 group-hover:rotate-12" style="background-image: url('{{ asset('images/couple/1.jpg') }}');"></div>
            </div>
            <div class="h-56  md:h-96 rounded-lg group overflow-hidden hover:scale-95 transition-all duration-500" data-aos="zoom-out" data-aos-duration="1000">
              <div class=" bg-cover rounded-lg h-full aspect-[6/9] group-hover:scale-125 transition-all duration-500 group-hover:rotate-12" style="background-image: url('{{ asset('images/couple/1.jpg') }}');"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    {{-- weddings --}}
    <section id="wedding" class="section pt-28 pb-16 lg:pt-28 bg-beige ">
      <div class="container mx-auto px-5">

        <div class="flex justify-between md:justify-evenly space-x-4 mb-16">
          <div class=" h-48 lg:h-72 xl:h-80 rounded-lg -rotate-6 bg-cover aspect-[6/9] hover:rotate-0 transition-all duration-500" style="background-image: url('{{ asset('images/couple/1.jpg') }}')">
          </div>
          <div class=" h-52 md:h-64 lg:hidden hidden md:block rotate-12 rounded-lg bg-cover aspect-[6/9] hover:rotate-0 transition-all duration-500" style="background-image: url('{{ asset('images/couple/1.jpg') }}')">
          </div>
          <div class="flex items-center ">
            <div data-aos="fade-down-right" data-aos-duration="1000">
              <h1 class="mb-4 font-ral font-semibold text-xl text-slate-800"> Akad & Resepsi</h1>
              <h3 class="text-slate-800"> 10 April 2025</h3>
              <p class="font-ral text-slate-800">Kediaman mempelai wanita</p>
              <hr class="mb-2 bg-slate-950">
              <p class="text-balance text-slate-600 mb-2 lg:mb-4">Tamanasri RT.08 RW.03 Kec. Ampelgading</p>
              <div class="text-center">
                <a href="https://maps.app.goo.gl/P1tPYXEkJpVVdmg37" class="py-1 px-2 text-white rounded-xl bg-sage items-center text-xs border border-sage hover:bg-white hover:text-slate-900" target="blank">google maps</a>
              </div>
            </div>
          </div>
        </div>
        <div class="flex justify-between md:justify-evenly space-x-4 mb-16">
          <div class="flex items-center h-52 ">
            <div class="">    
              <div class="maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3948.6483410599635!2d112.85516737500974!3d-8.238071391794987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zOMKwMTQnMTcuMSJTIDExMsKwNTEnMjcuOSJF!5e0!3m2!1sid!2sid!4v1734965637806!5m2!1sid!2sid" class="h-48 md:h-80 w-full md:mt-16 rounded-lg border border-sage" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
          <div class=" h-52 md:h-64 lg:hidden hidden md:block -rotate-12 rounded-lg bg-cover aspect-[6/9] hover:rotate-0 transition-all duration-500" style="background-image: url('{{ asset('images/couple/1.jpg') }}')"></div>
          <div class=" h-48 lg:h-72 xl:h-80 rounded-lg lg:rotate-6 bg-cover aspect-[6/9]" style="background-image: url('{{ asset('images/couple/1.jpg') }}')"></div>
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
                <button type="submit" id="sendChat" name="sendChat" class="bg-beige py-2  w-full rounded-lg text-slate-900 mb-5">Kirim</button>
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
        <div class="w-full px-4 text-center py-14 md:px-48 md:text-lg ">
          <h1 class="mb-10 font-semibold">بِسْمِ اللَّهِ الرحمن الرَّحِيمِ</h1>
          <div class="flex justify-center items-center mb-10">
              <p class="font-ral w-full text-center xl:w-4/6">
                Atas kehadiran dan do’a restu dari
                Bapak/Ibu/Saudara/i sekalian,
                kami mengucapkan Terima Kasih.</p>        
          </div>
          <h1 class="text-center">Wassalamualaikum Wr. Wb</h1>
        </div>
      </div>
    </section>

  <footer class="bg-slate-800 text-white text-sm w-full">
    <div class="flex justify-center items-center h-16">
      <p>&copy; 2024 <a href="https://milki.chickencode.org" target="blank" class="">kowalsky invitaton.</a> All rights reserved.</p>
    </div>
  </footer>
  <div class="fixed top-0 right-0 h-full w-14">
    <div class="flex flex-col justify-center h-full">
        <ul class="text-center space-y-1 bg-slate-400/40 rounded-lg">
            <li><a href="#" class="block text-4xl py-3 hover:bg-slate-600/75 hover:text-white hover:rounded-t-lg"><i class="fa-regular fa-envelope"></i></a></li>
            <li><a href="#couple" class="block text-4xl py-3 hover:bg-slate-600/75 hover:text-white"><i class="fa-regular fa-heart"></i></a></li>
            <li><a href="#gallery" class="block text-4xl py-3 hover:bg-slate-600/75 hover:text-white"><i class="fa-regular fa-images"></i></a></li>
            <li><a href="#wedding" class="block text-4xl py-3 hover:bg-slate-600/75 hover:text-white"><i class="fa-solid fa-calendar-days"></i></a></li>
            <li><a href="#chatsection" class="block text-4xl py-3 hover:bg-slate-600/75 hover:text-white"><i class="fa-regular fa-comment-dots"></i></a></li>
            <li><button id="song" class="text-4xl py-3 hover:bg-slate-600/75 hover:text-white w-full hover:rounded-b-lg" onclick="toggleMusic()"><i class="fa-solid fa-music"></i></button></li>
        </ul>
    </div>
  </div>
</div>
  <div class="tampil fixed top-0 right-0 left-0 bottom-0 mx-auto bg-cover bg-center slide-up" id="tampil" style="background-image: url('{{ asset('images/templates/standard/1.png') }}');">
    <div class="tampil-body flex w-full text-center h-full justify-center py-10 items-center" >
      <div class="hero">
        <p class="mb-10 font-ral">Assalamualaikum Warohmatullahi Wabarokatuh</p>
        <h4 class="mb-10 font-ral">Kepada Bapak/Ibu/Saudara/i, <span class="font-semibold"></span></h4>
        <h1 class="font-ral font-semibold text-3xl mb-5">You're Invited!</h1>
        <p class="mb-5 font-ral text-xl">Join us for a special celebration of love and happiness.</p>
        <div class="simply-countdown text-sm md:text-lg text-slate-50 mx-auto mb-10"></div>
        <button type="submit" id="openInvitationBtn" class="py-1 px-3 bg-slate-200 text-slate-900 rounded-full border hover:bg-slate-700/50 hover:text-white" >Open Invitation</button>
      </div>
    </div>
  </div>
  
  <script>
    simplyCountdown('.simply-countdown', {
      year: 2025, // Target year (required)
        month: 4, // Target month [1-12] (required)
        day: 10, // Target day [1-31] (required)
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
                name.value = '';
                chat.value = '';
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
        var audio = new Audio('{{ asset('audio/komang.mp3') }}');
        function putarmusic(){
            audio.play();
            audio.loop = true; 
        };

        function toggleMusic() {
            var button = document.getElementById('song'); // Ambil tombol
            
            if (audio.paused) {
                audio.play(); // Mulai musik

            } else {
                audio.pause(); // Hentikan musik
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