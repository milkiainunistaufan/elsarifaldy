<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" href="{{ asset('css/styleSlide.css') }}">
    {{-- simply countdown --}}
    <link rel="stylesheet" href="{{ asset('css/simplyCountdown.theme.default.css') }}"/>
    <script src="{{ asset('js/simplyCountdown.min.js') }}"></script>
    {{-- font awesome icon --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <title>Invitation</title>
</head>
<body>
<div id="invitationPage" class=" absolute  hidden">
    <div id="chatForm" class="chat relative w-full h-full bg-sage pt-8  mx-auto text-white hidden pb-10">
        <h1 class=" text-center font-pd text-4xl font-semibold mb-16">Ucapan</h1>
        <div class="flex-row md:flex justify-center items-center">
            <div class="w-full flex justify-center items-center ">
            <div class="w-2/3 mb-4">
                <div class="mb-4">
                    <label for="name" class="block">Nama</label>
                    <input type="text" required id="name" name="name" class="text-slate-900 w-full p-2 rounded-lg " placeholder="Nama" value="" required>
                </div>
                <div class="mb-3">
                    <label for="chat" class="block">Chat</label>
                    <textarea required id="chat" name="chat" class="w-full p-2 rounded-lg text-slate-800" required></textarea>
                </div>
                <button type="submit" id="sendChat" name="sendChat" class="bg-beige py-2  w-full rounded-lg text-slate-900 mb-5">Kirim</button>
            </div>
            </div>
            
        </div>
    </div>
    
    <header class="relative flex">
        <nav class="pt-8">
            <a href="" class="font-pd font-semibold hover:bg-sage hover:text-white text-3xl hover:rounded-md active:bg-sage">Elsa & Rifaldy</a>
        </nav>
    </header>

    <div class="carousel">
        
        
        <div class="list">
            <div class="item" style="background-image: url('{{ asset('images/templates/slide/1.png') }}')">
                <div class="content-slide absolute w-96 left-4 md:left-40 lg:w-1/2 backdrop-blur-md rounded-lg p-4 border border-sage -translate-y-60 md:-translate-y-44 ">
                    <div class="w-full  text-center  md:text-lg ">
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
            </div>
            <div class="item" style="background-image: url('{{ asset('images/templates/slide/1.png') }}')">
                <div class="content-slide flex justify-center items-center absolute w-96 md:w-2/3 lg:w-1/2 left-4 lg:left-40 text-center -translate-y-64 md:-translate-y-44 lg:-translate-y-44">
                    <div class="w-full">
                        <div class="title font-ral text-2xl mb-5 slide-in-top">We are getting married</div>
                        <div class="name font-pd text-4xl lg:text-7xl font-semibold mb-5 slide-in-right">Elsa & Rifaldy</div>
                        <div class="des mb-1 slide-in-left">10 April 2025</div>
                        <hr class="mb-3 border border-slate-800"/>
                        <div class="simply-countdown text-sm md:text-base text-slate-50 mx-auto slide-in-bottom"></div>
                    </div>
                </div>
            </div>
            <div class="item" style="background-image: url('{{ asset('images/templates/slide/2.jpg') }}')">
                <div class="content-slide absolute left-4 md:left-24 lg:left-32 w-96 md:w-1/2 lg:w-1/3 bg-slate-700/50 rounded-lg p-4 text-white -translate-y-64 md:-translate-y-44">
                    <div class="title text-center font-ral text-2xl mb-5 fade-in">بِسْمِ اللَّهِ الرحمن الرَّحِيمِ</div>
                    <div class="des font-ral mb-5 text-balance fade-in text-center">Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan sayang. Sungguh, pada yang demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir.</div>
                    <div class="name font-semibold text-xl fade-in">Q.S. Ar-Rum : 21</div>
                </div>
            </div>
            <div class="item" style="background-image: url('{{ asset('images/templates/slide/1.png') }}')">
                <div class="content-slide absolute left-4 md:left-10 lg:left-24 w-96 lg:w-1/2 -translate-y-72 md:-translate-y-48 lg:-translate-y-44">
                    <div class="flex gap-8 justify-center">
                        <div class="w-48">
                            <div class="bg-cover mb-6 slide-in-left rounded-2xl w-full overflow-hidden group hover:scale-95 transition-all duration-500">
                                <div class="bg-cover rounded-2xl aspect-[6/9] w-full group-hover:scale-125 transition-all duration-500 group-hover:rotate-12"
                                    style="background-image: url('{{ asset('images/couple/1.jpg') }}')">
                                </div>
                            </div>
                            <div class="text-right slide-in-right">
                                <h1 class="font-pd font-semibold text-base md:text-xl mb-2">Rifaldy Yoga Irawan</h1>
                                <hr class="mb-3 bg-slate-900 text-slate-900 border border-slate-900">
                                <p class="font-ral">Putra dari Bpk Parno <br> dan Ibu Umi Kulsum</p>
                            </div>
                        </div>
                        
                        <div class="w-48">
                            <div class="slide-in-left mb-6">
                                <h1 class="font-pd font-semibold text-base md:text-xl mb-2">Elsa Diana Maulana</h1>
                                <hr class="mb-1 text-slate-900 border border-slate-900">
                                <p class="font-ral ">Putri dari <br class="">Bpk Hadiana Astra Yasuka <br> dan Ibu Enik Wijayanti</p>
                            </div>
                            <div class="bg-cover slide-in-right rounded-2xl w-full overflow-hidden group hover:scale-95 transition-all duration-500">
                                <div class="bg-cover rounded-2xl aspect-[6/9] w-full group-hover:scale-125 transition-all duration-500 group-hover:rotate-12"
                                    style="background-image: url('{{ asset('images/couple/1.jpg') }}')">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item" style="background-image: url('{{ asset('images/templates/slide/2.jpg') }}')">
                <div class="content-slide absolute left-4 w-96 md:w-full xl:w-2/3 rounded-lg p-4 text-white -translate-y-96 md:-translate-y-60 lg:-translate-y-52 ">
                    <div class="flex justify-center h-full mx-auto">
                        <div class="grid grid-cols-2 md:grid-cols-4 xl:grid-cols-4 gap-4 lg:gap-7 place-content-center">
                          <div class="h-56 rounded-lg group overflow-hidden hover:scale-95 transition-all duration-500 zoom-in" >
                            <div class=" bg-cover rounded-lg h-full aspect-[6/9] group-hover:scale-125 transition-all duration-500 group-hover:rotate-12" style="background-image: url('{{ asset('images/couple/1.jpg') }}');"></div>
                          </div>
                          <div class="h-56 rounded-lg group overflow-hidden hover:scale-95 transition-all duration-500 zoom-in" >
                            <div class=" bg-cover rounded-lg h-full aspect-[6/9] group-hover:scale-125 transition-all duration-500 group-hover:rotate-12" style="background-image: url('{{ asset('images/couple/1.jpg') }}');"></div>
                          </div>
                          <div class="h-56 rounded-lg group overflow-hidden hover:scale-95 transition-all duration-500 zoom-in" >
                            <div class=" bg-cover rounded-lg h-full aspect-[6/9] group-hover:scale-125 transition-all duration-500 group-hover:rotate-12" style="background-image: url('{{ asset('images/couple/1.jpg') }}');"></div>
                          </div>
                          <div class="h-56 rounded-lg group overflow-hidden hover:scale-95 transition-all duration-500 zoom-in" >
                            <div class=" bg-cover rounded-lg h-full aspect-[6/9] group-hover:scale-125 transition-all duration-500 group-hover:rotate-12" style="background-image: url('{{ asset('images/couple/1.jpg') }}');"></div>
                          </div>
                          <div class="h-56 rounded-lg group overflow-hidden hover:scale-95 transition-all duration-500 zoom-in" >
                            <div class=" bg-cover rounded-lg h-full aspect-[6/9] group-hover:scale-125 transition-all duration-500 group-hover:rotate-12" style="background-image: url('{{ asset('images/couple/1.jpg') }}');"></div>
                          </div>
                          <div class="h-56 rounded-lg group overflow-hidden hover:scale-95 transition-all duration-500 zoom-in" >
                            <div class=" bg-cover rounded-lg h-full aspect-[6/9] group-hover:scale-125 transition-all duration-500 group-hover:rotate-12" style="background-image: url('{{ asset('images/couple/1.jpg') }}');"></div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
            <div class="item" style="background-image: url('{{ asset('images/templates/slide/1.png') }}')">
                <div class="content-slide absolute left-4 w-96 md:w-2/3 rounded-lg p-4 text-white -translate-y-64 md:-translate-y-44">
                    <div class="flex md:justify-evenly space-x-8 mb-16">
                        <div class=" h-48 lg:h-72 xl:h-80 rounded-lg -rotate-6 bg-cover aspect-[6/9] hover:rotate-0 transition-all duration-500 fade-out" style="background-image: url('{{ asset('images/couple/1.jpg') }}')">
                        </div>
                        <div class="flex items-center ">
                          <div>
                            <h1 class="mb-4 font-ral font-semibold text-xl text-slate-800 slide-in-right"> Akad & Resepsi</h1>
                            <h3 class="text-slate-800 slide-in-right"> 10 April 2025</h3>
                            <p class="font-ral text-slate-800 slide-in-right">Kediaman mempelai wanita</p>
                            <hr class="mb-2 bg-slate-950">
                            <p class="text-balance text-slate-600 mb-2 lg:mb-4 slide-in-right">Tamanasri RT.08 RW.03 Kec. Ampelgading</p>
                            <div class="text-center">
                              <a href="https://maps.app.goo.gl/P1tPYXEkJpVVdmg37" class="py-1 px-2 text-white rounded-xl bg-sage items-center text-xs border border-sage hover:bg-white hover:rounded-xl hover:text-slate-900 slide-in-bottom" target="blank">google maps</a>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
            <div class="item" style="background-image: url('{{ asset('images/templates/slide/2.jpg') }}')">
                <div class="content-slide absolute left-4 md:left-20 w-96 lg:w-1/2 backdrop-blur-md border border-sage rounded-lg p-4 text-white -translate-y-72 md:-translate-y-52">
                    <h1 class="text-2xl text-slate-900 font-semibold text-center mb-4">Ucapan</h1>
                    <div id="chat-container" class=" w-full flex justify-center text-slate-900 h-96 ">
                        <div id="chatContainer" class="w-full overflow-y-auto" style="scrollbar-width: none;"></div>
                      </div>
                </div>
            </div>

        </div>

        <div class="arrows absolute bottom-32 right-40 md:bottom-20 md:right-44 lg:right-48 xl:right-80 text-white">
            <button class="prev rounded-lg w-10 h-10 bg-sage border border-sage hover:bg-white hover:text-slate-900"><</button>
            <button class="next rounded-lg w-10 h-10 bg-sage border border-sage hover:bg-white hover:text-slate-900">></button>
        </div>
        <div id="runningTime" class="timeRunning absolute bg-sage h-2"></div>
    </div>
    <div class="conbut fixed top-24 right-8">
        <button id="song" class=" song py-2 px-3 bg-sage text-white rounded-md " onclick="toggleMusic()"><i class="fa-solid fa-music"></i></button>
        <button id="toggleChatBtn" class="ChatBtn  bg-sage rounded-lg py-2 px-6 border text-white font-semibold hover:bg-white hover:text-slate-900 hover:border-sage ">UCAPAN</button>
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
        document.getElementById('toggleChatBtn').addEventListener('click', function () {
            const chatForm = document.getElementById('chatForm');

            if (chatForm.classList.contains('hidden')) {
                chatForm.classList.remove('hidden');
                chatForm.classList.add('slide-in-top');
            } else {
                chatForm.classList.add('hidden');
            }
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
                                    <h3 class="font-bold">${chat.name}</h3>
                                    <p class="break-words mb-1">Pesan : ${chat.chat}</p>
                                    <p>${chat.human_created_at}</p>
                                    <hr class="border border-sage">
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
                button.innerHTML = '<i class="fa-solid fa-music"></i>';

            } else {
                audio.pause(); // Hentikan musik
                button.innerHTML = '<i class="fa-solid fa-music"></i>  <i class="fa-solid fa-pause"></i>';
            }
        };

        const urlParams = new URLSearchParams(window.location.search);
        const name = urlParams.get('n');
        const nameContainer = document.querySelector('.hero h4 span');
        nameContainer.innerText = name;
  </script>
    <script src="{{ asset('js/appSlide.js') }}"></script>
</body>
</html>