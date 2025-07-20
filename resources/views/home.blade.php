@extends('layouts.app')

@section('content')
<div class="flex flex-col md:flex-row items-center justify-start mt-10 gap-6 md:gap-10 px-6 md:px-12">

     <div class="w-full md:w-1/2 flex justify-center md:justify-start">
        <img src="{{ asset('img/avatar.png') }}" alt="avatar"
            class="w-32 md:w-80 rounded-full shadow-[0_0_20px_#a855f7] mb-6">
    </div>

    <div class="w-full md:w">
        <p class="text-purple-400 uppercase tracking-widest text-xl font-semibold">Hello!</p>
        
        <h1 class="text-6xl md:text-8xl font-bold text-white mt-2">
            I'm <span class="text-purple-400 ">Ari</span><br>
            <span class="text-purple-400 ">Reivansyah</span>
        </h1>

        <p class="text-gray-300 text-lg md:text-xl mt-4">
            <span id="typed-text"></span><span class="border-r-2 border-purple-500 animate-pulse ml-1"></span>
        </p>
    </div>
</div>
<br><br>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const text = "Android & Backend Developer";
        const typedText = document.getElementById("typed-text");
        let index = 0;

        function type() {
            if (index < text.length) {
                typedText.innerHTML += text.charAt(index);
                index++;
                setTimeout(type, 60); // kecepatan ketik
            }
        }

        type();
    });
</script>
@endsection

@section('about')
<div class="flex flex-col md:flex-row items-start gap-8 px-6 md:px-16 py-10 text-white">
    <!-- Gambar -->
    <div class="w-full md:w-1/2 flex justify-center md:justify-start">
        <img src="{{ asset('img/avatar.png') }}" alt="avatar"
            class="w-40 md:w-80 rounded-lg object-cover shadow-[0_0_20px_#a855f7]" />
    </div>

    <!-- Konten Deskripsi -->
    <div class="w-full md:w">
        <h2 class="text-4xl md:text-6xl font-extrabold text-white relative">
            <span class="text-purple-400 z-10 relative">About Me</span>
            <span class="absolute top-0 left-0 text-7xl md:text-8xl text-gray-800 opacity-10 font-black -z-0">About</span>
        </h2>

        <span class="text-purple-300 font-medium">Mobile & Backend Developer</span> — I specialize in building mobile apps with <span class="text-purple-300 font-medium">Kotlin</span> using both <span class="text-purple-300 font-medium">Jetpack Compose</span> and <span class="text-purple-300 font-medium">XML</span>.  
                I also develop <span class="text-purple-300 font-medium">desktop applications</span> using <span class="text-purple-300 font-medium">C#</span>, and work on <span class="text-purple-300 font-medium">backend and API development</span> with <span class="text-purple-300 font-medium">native PHP</span>.  
                Currently exploring <span class="text-purple-300 font-medium">Laravel</span> to create modern web and API-based applications.
                

        <div class="mt-6 grid grid-cols-1 sm:grid-cols-1 gap-y-2 text-sm text-gray-300">
            <div class="flex">
                <span class="w-32 font-bold text-white">Name</span>
                <span class="text-white">: Ari Reivansyah</span>
            </div>
            <div class="flex">
                <span class="w-32 font-bold text-white">Date of birth</span>
                <span class="text-white">: March 22, 2008</span>
            </div>
            <div class="flex">
                <span class="w-32 font-bold text-white">Address</span>
                <span class="text-white">: East Jakarta 13710, Indonesia</span>
            </div>
            <div class="flex">
                <span class="w-32 font-bold text-white">Email</span>
                <span class="text-white">: rrardi0202@gmail.com</span>
            </div>
            <div class="flex">
                <span class="w-32 font-bold text-white">Phone</span>
                <span class="text-white">: +62 896-0191-4996</span>
            </div>
        </div>


        <div class="mt-6 mb-5">
            <p class="text-yellow-400 font-semibold text-lg">
                <span id="project-count" class="text-2xl font-bold">0</span> Project complete
            </p>

            <a href="AriReivansyahCV.pdf" download class="inline-block mt-4 bg-purple-600 hover:bg-purple-700 text-white font-semibold py-2 px-4 rounded shadow transition">
                Download CV
            </a>

        </div>

        <div class="flex flex-wrap gap-3 items-center">
            <img src="img/icons/6.png" alt="Kotlin" class="w-12 h-12" />
            <img src="img/icons/3.png" alt="PHP" class="w-12 h-12" />
            <img src="img/icons/1.png" alt="Laravel" class="w-12 h-12" />
            <img src="img/icons/13.png" alt="C#" class="w-12 h-12" />
            <img src="img/icons/8.png" alt="GIT" class="w-12 h-12" />
            <img src="img/icons/9.png" alt="SQL" class="w-12 h-12" />
            <img src="img/icons/7.png" alt="HTML" class="w-12 h-12" />
            <img src="img/icons/2.png" alt="Java" class="w-12 h-12" />
            <img src="img/icons/10.png" alt="JavaScript" class="w-12 h-12" />
            <img src="img/icons/4.png" alt="Bootstrap" class="w-12 h-12" />
            <img src="img/icons/11.png" alt="CSS" class="w-12 h-12" />
            <img src="img/icons/12.png" alt="Tailwind" class="w-12 h-12" />
        </div>

    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const target = 8;
        const speed = 200; // total waktu animasi (ms)
        const element = document.getElementById("project-count");
        let count = 0;
        const increment = target / (speed / 30); // update setiap 30ms

        function countUp() {
            if (count < target) {
                count += 1;
                element.innerText = count;
                setTimeout(countUp, 30);
            } else {
                element.innerText = target;
            }
        }

        countUp();
    });
</script>

@endsection

@section('experience')
<!-- WORK EXPERIENCE -->
<div class="mt-16 px-6 md:px-12">
    <h2 class="text-4xl md:text-6xl font-extrabold text-white mb-8">
        <span class="text-purple-400 z-10 relative">Work Experience</span>
        <span class="absolute top-0 left-0 text-7xl md:text-8xl text-gray-800 opacity-10 font-black -z-0">Experience</span>
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-6xl">
    <!-- ReCode Experience -->
    <div class="p-6 rounded-2xl shadow-lg hover:scale-[1.03] transition-transform duration-300"
         style="background: linear-gradient(to bottom, #1b1333, #120a24);">
        <div class="flex items-center gap-4">
            <img src="{{ asset('img/experience1.png') }}" alt="icon"
                 class="w-16 h-16 object-contain">
            <div class="text-left">
                <h3 class="text-white text-3xl font-bold">ReCode - Startup</h3>
                <p class="text-xl text-yellow-400 font-semibold">2024 - Present</p>
                <p class="text-sm text-gray-300 mt-1">
                    Worked as an <span class="text-purple-300 font-medium">Android Developer</span>, responsible for building and maintaining two key applications:
                </p>

                <div id="desc1" class="overflow-hidden max-h-[160px] transition-all duration-500 mt-2">
                    <ul class="list-disc list-inside text-sm text-gray-300 space-y-1">
                        <li><span class="text-purple-300 font-medium">Ventra POS</span>: A point-of-sale Android app for the Fashion Department, built using Kotlin and integrated with a PHP-based backend API.</li>
                        <li><span class="text-purple-300 font-medium">ReCode Absensi</span>: A GPS-based attendance app with <span class="italic">geofence restrictions</span>, allowing check-in only within a specific location radius using real-time location validation.</li>
                        <li>Collaborated with backend developers and improved location accuracy and attendance logic.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="mt-4 text-left">
            <button onclick="toggleText('desc1', this)"
                class="inline-block px-5 py-2 border border-purple-400 text-purple-300 rounded-md hover:bg-purple-600 hover:text-white transition-all duration-300">
                LEARN MORE
            </button>
        </div>
    </div>

    <!-- NeoRoza Experience -->
    <div class="p-6 rounded-2xl shadow-lg hover:scale-[1.03] transition-transform duration-300"
         style="background: linear-gradient(to bottom, #1b1333, #120a24);">
        <div class="flex items-center gap-4">
            <img src="{{ asset('img/experience2.png') }}" alt="icon"
                 class="w-16 h-16 object-contain">
            <div class="text-left">
                <h3 class="text-white text-3xl font-bold">Neoroza - Startup</h3>
                <p class="text-xl text-yellow-400 font-semibold">2025 - Present</p>
                <p class="text-sm text-gray-300 mt-1">
                    Served as the <span class="text-purple-300 font-medium">Lead Developer & Android Developer</span> for <span class="text-purple-300 font-medium">NeoRoza</span>, a secure testing platform designed for students.
                </p>
                <div id="desc2" class="overflow-hidden max-h-[160px] transition-all duration-500 mt-2">
                    <ul class="list-disc list-inside text-sm text-gray-300 space-y-2">
                        <li>Developed a lockdown-style Android app displaying Google Forms, blocking access to other apps.</li>
                        <li>Integrated dynamic GForm links per subject for flexible exam management.</li>
                        <li>Ensured a distraction-free environment with background service checks and system restrictions.</li>
                        <li>Used custom launcher with zero navigation access and startup checks.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="mt-4 text-left">
            <button onclick="toggleText('desc2', this)"
                class="inline-block px-5 py-2 border border-purple-400 text-purple-300 rounded-md hover:bg-purple-600 hover:text-white transition-all duration-300">
                LEARN MORE
            </button>
        </div>
    </div>
</div>

<!-- Toggle Script -->
<script>
function toggleText(id, btn) {
    const el = document.getElementById(id);
    const collapsed = el.classList.contains('max-h-[100px]');
    if (collapsed) {
        el.classList.remove('max-h-[100px]');
        el.classList.add('max-h-[1000px]');
        btn.textContent = 'SHOW LESS';
    } else {
        el.classList.add('max-h-[100px]');
        el.classList.remove('max-h-[1000px]');
        btn.textContent = 'LEARN MORE';
    }
}
</script>

@endsection

@section('project')
<!-- WORK EXPERIENCE -->
<div class="mt-16 px-6 md:px-12">
    <h2 class="text-4xl md:text-6xl font-extrabold text-white mb-8">
        <span class="text-purple-400 z-10 relative">My Project</span>
        <span class="absolute top-0 left-0 text-7xl md:text-8xl text-gray-800 opacity-10 font-black -z-0">Project/span>
    </h2>
    <!-- Project 1 -->
    <div class="grid md:grid-cols-2 gap-10 items-center mb-20">
        <!-- Text Card -->
        <div class="z-10 order-2 md:order-1">
            <p class="text-sm text-purple-300 font-semibold">March 2025</p>
            <h2 class="text-2xl font-bold text-white">Ventra POS</h2>
            <div class="flex gap-2">
                <span class="bg-blue-600 text-white text-sm px-2 py-1 rounded mb-2">PHP</span>
                <span class="bg-green-600 text-white text-sm px-2 py-1 rounded mb-2">Kotlin</span>
                <span class="bg-yellow-600 text-ehite text-sm px-2 py-1 rounded mb-2">MySQL</span>
            </div>
            <p class="text-white bg-white/10 backdrop-blur-md p-4 rounded-xl shadow-md">
                A <span class="text-purple-300 font-semibold">point-of-sale (POS)</span> Android application developed specifically for the <span class="text-purple-300 font-semibold">Fashion Department of SMKN 24 Jakarta</span>.
                This project was built by a dedicated <span class="text-purple-300 font-semibold">recode startup</span> to streamline <span class="text-purple-300 font-semibold">barcode scanning</span>, <span class="text-purple-300 font-semibold">inventory management</span>, and <span class="text-purple-300 font-semibold">sales transactions</span>.
                The app was developed using <span class="text-purple-300 font-semibold">Kotlin</span> for the Android frontend and integrates seamlessly with a <span class="text-purple-300 font-semibold">PHP-based RESTful API</span> for backend operations, ensuring <span class="text-purple-300 font-semibold">efficient</span> and <span class="text-purple-300 font-semibold">reliable performance</span> in a school production environment.
            </p>

        </div>
        <!-- Image -->
        <div class="relative order-1 md:order-2">
            <img src="{{ asset('img/Ventra.jpeg')}}" alt="Ventra POS" class="rounded-xl shadow-lg w-full">
        </div>
    </div>

    <!-- Project 1 -->
    <div class="grid md:grid-cols-2 gap-10 items-center mb-20">
        <!-- Image -->
        <div class="relative">
            <img src="img/CupSans.png" alt="ReCode Absensi" class="rounded-xl shadow-lg w-full">
        </div>
        <!-- Text Card -->
        <div class="z-10 order-2 md:order-1">
            <p class="text-sm text-purple-300 font-semibold">March 2024</p>
            <h2 class="text-2xl font-bold text-white">CupSans Ultimate Shoutwon</h2>
            <div class="flex gap-2">
                <span class="bg-blue-600 text-white text-sm px-2 py-1 rounded mb-2">PHP</span>
                <span class="bg-green-600 text-white text-sm px-2 py-1 rounded mb-2">Kotlin</span>
                <span class="bg-yellow-600 text-ehite text-sm px-2 py-1 rounded mb-2">MySQL</span>
            </div>
            <p class="text-white bg-white/10 backdrop-blur-md p-4 rounded-xl shadow-md">
                A collaborative <span class="text-purple-300 font-semibold">2D platformer game</span> inspired by the artistic charm of <span class="text-purple-300 font-semibold">Cuphead</span> and the narrative depth of <span class="text-purple-300 font-semibold">Undertale</span>. Players must overcome a series of <span class="text-purple-300 font-semibold">dynamic challenges</span> and <span class="text-purple-300 font-semibold">obstacles</span> before facing <span class="text-purple-300 font-semibold">uniquely designed boss battles</span> at the end of each level. This game emphasizes <span class="text-purple-300 font-semibold">tight gameplay</span>, <span class="text-purple-300 font-semibold">immersive visuals</span>, and <span class="text-purple-300 font-semibold">progressive difficulty</span> to create a <span class="text-purple-300 font-semibold">memorable action-platforming experience</span> crafted by our <span class="text-purple-300 font-semibold">dedicated team</span>.
            </p>
        </div>

    </div>

    <!-- Project 2 (zig-zag reversed) -->
    <div class="grid md:grid-cols-2 gap-10 items-center mb-20">
        <!-- Image -->
        <div class="relative">
            <img src="img/recode.jpeg" alt="ReCode Absensi" class="rounded-xl shadow-lg w-full">
        </div>
        <!-- Text Card -->
        <div class="z-10 order-2 md:order-1">
            <p class="text-sm text-purple-300 font-semibold">November 2024</p>
            <h2 class="text-2xl font-bold text-white">Ventra POS</h2>
            <div class="flex gap-2">
                <span class="bg-blue-600 text-white text-sm px-2 py-1 rounded mb-2">PHP</span>
                <span class="bg-green-600 text-white text-sm px-2 py-1 rounded mb-2">Kotlin</span>
                <span class="bg-yellow-600 text-ehite text-sm px-2 py-1 rounded mb-2">MySQL</span>
            </div>
            <div class="text-white bg-white/10 backdrop-blur-md p-4 rounded-xl shadow-md space-y-3">
            <p>
                An Android-based attendance application designed to enforce
                <span class="text-purple-300 font-semibold">location-based check-ins</span>
                strictly within the school area using
                <span class="text-purple-300 font-semibold">advanced geofencing technology</span>.
            </p>
            <p>
                Developed by the <span class="text-purple-300 font-semibold">ReCode team</span>, this app ensures students can only check in when physically present at school. It includes:
            </p>
            <ul class="list-disc list-inside space-y-1 text-white">
                <li><span class="text-purple-300 font-semibold">Real-time GPS validation</span> to detect accurate presence.</li>
                <li><span class="text-purple-300 font-semibold">Android ID binding</span>, linking each account to a specific device to prevent attendance via multiple phones.</li>
                <li><span class="text-purple-300 font-semibold">VPN/fake GPS protection</span>, blocking common cheating methods.</li>
                <li><span class="text-purple-300 font-semibold">Mandatory live photo capture</span> at check-in (disabling gallery access).</li>
                <li><span class="text-purple-300 font-semibold">Monitoring dashboard</span> for school staff such as guidance counselors (BK) to track student presence transparently.</li>
            </ul>
            <p>
                Built using <span class="text-purple-300 font-semibold">Kotlin for Android</span> with a
                <span class="text-purple-300 font-semibold">secure RESTful API backend</span>,
                <span class="text-purple-300 font-semibold">ReCode Absensi</span> is optimized for school environments that demand both
                <span class="text-purple-300 font-semibold">convenience</span> and
                <span class="text-purple-300 font-semibold">integrity</span> in their attendance systems.
            </p>
        </div>
        </div>
    </div>

    <!-- Project 1 -->
    <div class="grid md:grid-cols-2 gap-10 items-center mb-20">
        <!-- Text Card -->
        <div class="z-10 order-2 md:order-1">
            <p class="text-sm text-purple-300 font-semibold">Juny 2025</p>
            <h2 class="text-2xl font-bold text-white">Zeraxa</h2>
            <div class="flex gap-2">
                <span class="bg-blue-600 text-white text-sm px-2 py-1 rounded mb-2">PHP</span>
                <span class="bg-green-600 text-white text-sm px-2 py-1 rounded mb-2">Kotlin</span>
                <span class="bg-yellow-600 text-ehite text-sm px-2 py-1 rounded mb-2">MySQL</span>
            </div>
            <div class="text-white bg-white/10 backdrop-blur-md p-4 rounded-xl shadow-md space-y-3">
                <p>
                    A modern Android-based exam application built using <span class="text-purple-300 font-semibold">Kotlin with Jetpack Compose</span>, developed by our startup team <span class="text-purple-300 font-semibold">Neoroza</span>.
                </p>
                <p>
                    This app is designed for <span class="text-purple-300 font-semibold">secure and flexible online testing</span>, with two exam modes:
                </p>
                <ul class="list-disc list-inside space-y-1">
                    <li>
                        <span class="text-purple-300 font-semibold">Google Form Integration</span> – Simple mode where students take tests via GForm links. The system tracks <span class="text-purple-300 font-semibold">time usage</span> and calculates how efficiently students used the allotted time.
                    </li>
                    <li>
                        <span class="text-purple-300 font-semibold">Built-in Exam System</span> – Teachers create and manage questions through our custom web platform. This mode provides detailed analytics including:
                        <ul class="list-disc list-inside ml-4 space-y-1">
                            <li><span class="text-purple-300 font-semibold">Total questions</span></li>
                            <li><span class="text-purple-300 font-semibold">Answered vs unanswered questions</span></li>
                            <li><span class="text-purple-300 font-semibold">Time spent</span></li>
                            <li><span class="text-purple-300 font-semibold">Completion percentage</span></li>
                            <li><span class="text-purple-300 font-semibold">Accuracy rate</span></li>
                        </ul>
                    </li>
                </ul>
                <p>
                    To ensure exam integrity, the app implements multiple <span class="text-purple-300 font-semibold">anti-cheating mechanisms</span>:
                </p>
                <ul class="list-disc list-inside space-y-1">
                    <li><span class="text-purple-300 font-semibold">Prevents exiting</span> the app during exams</li>
                    <li><span class="text-purple-300 font-semibold">Blocks notifications</span>, split screen, and floating window access</li>
                    <li><span class="text-purple-300 font-semibold">Locks recent apps</span> and disables screenshots</li>
                </ul>
                <p>
                    This project focuses on delivering a <span class="text-purple-300 font-semibold">secure, distraction-free exam experience</span>, while equipping educators with <span class="text-purple-300 font-semibold">real-time performance insights</span>.
                </p>
            </div>

        </div>
        <!-- Image -->
        <div class="relative order-1 md:order-2">
            <img src="{{ asset('img/Zeraxa.png')}}" alt="Ventra POS" class="rounded-xl shadow-lg w-full">
        </div>
    </div>
</div>

</div>
@endsection