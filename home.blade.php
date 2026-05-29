<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Zhahira</title>

    @vite('resources/css/app.css')

   <style>
    html {
        scroll-behavior: smooth;
    }

    body {
        font-family: 'Poppins', sans-serif;
    }


    @keyframes gradientMove {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }

    body {
        background: linear-gradient(-45deg,
                #020617,
                #0f172a,
                #082f49,
                #1e1b4b);
        background-size: 400% 400%;
        animation: gradientMove 15s ease infinite;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(80px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fadeInUp {
        animation: fadeInUp 1.2s ease-out forwards;
    }

    @keyframes floating {

        0%,
        100% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-20px);
        }
    }

    .animate-floating {
        animation: floating 5s ease-in-out infinite;
    }

    @keyframes glow {

        0%,
        100% {
            box-shadow:
                0 0 20px #06b6d4,
                0 0 40px #06b6d4;
        }

        50% {
            box-shadow:
                0 0 35px #3b82f6,
                0 0 70px #3b82f6;
        }
    }

    .glow-animation {
        animation: glow 3s ease-in-out infinite;
    }


    .shine-btn {
        position: relative;
        overflow: hidden;
    }

    .shine-btn::before {
        content: "";
        position: absolute;
        top: 0;
        left: -100%;
        width: 60%;
        height: 100%;
        background: rgba(255, 255, 255, 0.3);
        transform: skewX(-25deg);
    }

    .shine-btn:hover::before {
        left: 130%;
        transition: 0.9s;
    }

    .skill-card {
        transition: all 0.5s ease;
        transform-style: preserve-3d;
    }

    .skill-card:hover {
        transform:
            rotateY(10deg)
            rotateX(10deg)
            scale(1.05);
    }

    @keyframes loadBar {
        from {
            width: 0;
        }
    }

    .skill-progress {
        animation: loadBar 2s ease;
    }


    .text-glow {
        text-shadow:
            0 0 10px rgba(34, 211, 238, 0.8),
            0 0 20px rgba(59, 130, 246, 0.8),
            0 0 40px rgba(168, 85, 247, 0.7);
    }


    .particles span {
        position: absolute;
        display: block;
        width: 10px;
        height: 10px;
        background: rgba(255,255,255,0.15);
        border-radius: 50%;
        animation: animateParticles 25s linear infinite;
        bottom: -150px;
    }

    @keyframes animateParticles {
        0% {
            transform: translateY(0) rotate(0deg);
            opacity: 0;
        }

        10% {
            opacity: 1;
        }

        100% {
            transform: translateY(-1200px) rotate(720deg);
            opacity: 0;
        }
    }

    .particles span:nth-child(1) {
        left: 10%;
        width: 20px;
        height: 20px;
        animation-duration: 15s;
    }

    .particles span:nth-child(2) {
        left: 25%;
        animation-duration: 20s;
    }

    .particles span:nth-child(3) {
        left: 40%;
        width: 15px;
        height: 15px;
        animation-duration: 18s;
    }

    .particles span:nth-child(4) {
        left: 60%;
        animation-duration: 22s;
    }

    .particles span:nth-child(5) {
        left: 75%;
        width: 25px;
        height: 25px;
        animation-duration: 17s;
    }

    .particles span:nth-child(6) {
        left: 90%;
        animation-duration: 24s;
    }
</style>

</head>

<body class="bg-linear-to-br from-slate-950 via-blue-950 to-slate-900 min-h-screen text-white overflow-x-hidden">

    <!-- Grid Futuristic -->
    <div class="absolute inset-0 -z-10 opacity-70">

    <div
        class="w-full h-full"
        style="
            background-image:
            linear-gradient(rgba(255,255,255,0.08) 1px, transparent 1px),
            linear-gradient(90deg, rgba(255,255,255,0.08) 1px, transparent 1px);

            background-size: 50px 50px;">
    </div>

    </div>

    <!-- Navbar -->
    <nav class="bg-black/30 backdrop-blur-md shadow-lg fixed w-full z-50">

        <div class="container mx-auto flex justify-between items-center px-8 py-5">

            <h1 class="text-3xl font-bold text-cyan-400">
                MyPortfolio
            </h1>

            <ul class="flex gap-8 text-lg">

                <li>
                    <a href="/" class="hover:text-cyan-400 duration-300">
                        Home
                    </a>
                </li>

                <li>
                    <a href="/about" class="hover:text-cyan-400 duration-300">
                        About
                    </a>
                </li>
                <li>
                    <a href="/contact" class="hover:text-cyan-400 duration-300">
                        Contact
                    </a>
                </li>

            </ul>

        </div>

    </nav>

    <!-- Hero Section -->
    <section class="min-h-screen flex items-center justify-center px-10 relative overflow-hidden">

        <!-- Glow Effect -->
        <div class="absolute top-0 left-0 w-125 h-125 bg-cyan-500 rounded-full blur-[150px] opacity-20"></div>

        <div class="absolute bottom-0 right-0 w-125 h-125 bg-blue-600 rounded-full blur-[150px] opacity-20"></div>

        <div class="absolute top-40 right-40 w-75 h-75 bg-purple-500 rounded-full blur-[120px] opacity-20"></div>

        <!-- Content -->
        <div class="grid md:grid-cols-2 gap-20 items-center relative z-10 animate-fadeInUp">

            <!-- Text -->
            <div>

                <h2 class="text-6xl font-bold animate-pulse mb-6">

                    Halo, Saya

                    <span class="bg-linear-to-r from-cyan-400 via-blue-500 to-purple-500 bg-clip-text text-transparent">
                        Zhahira
                    </span>

                </h2>

                <p class="text-lg text-gray-300 leading-relaxed tracking-wide mb-8">

                    Saya seorang mahasiswa yang fokus pada pengembangan website menggunakan Laravel dan Tailwind CSS.
                    Saya memiliki minat dalam membangun tampilan website yang modern, responsive, dan user-friendly.
                    Saya senang mengeksplorasi desain antarmuka yang menarik serta mengembangkan fitur website yang dapat memberikan pengalaman terbaik bagi pengguna.

                </p>

                <!-- Button -->
                <div class="flex gap-5">

                    <a href="/about"
                        class="px-8 py-4 rounded-2xl hover:scale-110 duration-300 bg-linear-to-r from-cyan-500 to-blue-600 text-white shadow-2xl shadow-cyan-500/30">

                        Tentang Saya

                    </a>
                    <a href="/contact"
                        class="px-8 py-4 rounded-2xl hover:scale-110 duration-300 bg-linear-to-r from-cyan-500 to-blue-600 text-white shadow-2xl shadow-cyan-500/30">

                        Contact
                    </a>

                </div>

            </div>

            

            <!-- Image -->
            <div class="flex justify-center relative">

    <!-- Neon Glow -->
    <div class="absolute w-105 h-105 bg-cyan-500/20 rounded-full blur-3xl animate-pulse"></div>

    <!-- Radar Circle -->
    <div class="absolute w-87.5 h-87.5 border border-cyan-400/20 rounded-full animate-spin"></div>

    <div class="absolute w-95 h-95 border border-purple-500/10 rounded-full animate-ping"></div>

    <!-- AI Card -->
    <div class="absolute top-10 -left-20 bg-slate-900/80 border border-cyan-400/20 backdrop-blur-xl p-5 rounded-2xl shadow-2xl">

        <p class="text-cyan-400 text-sm font-mono mb-2">
            SYSTEM STATUS
        </p>

        <div class="space-y-2">

            <div>
                <p class="text-xs text-gray-400">Laravel</p>

                <div class="w-40 h-2 bg-slate-700 rounded-full overflow-hidden">
                    <div class="w-[85%] h-full bg-cyan-400 rounded-full animate-pulse"></div>
                </div>
            </div>

            <div>
                <p class="text-xs text-gray-400">Tailwind</p>

                <div class="w-40 h-2 bg-slate-700 rounded-full overflow-hidden">
                    <div class="w-[90%] h-full bg-purple-400 rounded-full animate-pulse"></div>
                </div>
            </div>

            <div>
                <p class="text-xs text-gray-400">JavaScript</p>

                <div class="w-40 h-2 bg-slate-700 rounded-full overflow-hidden">
                    <div class="w-[75%] h-full bg-yellow-400 rounded-full animate-pulse"></div>
                </div>
            </div>

        </div>

    </div>

    <!-- Floating Tech Bubble -->
    <div class="absolute top-20 right-0 w-24 h-24 rounded-full bg-red-500/10 border border-red-400/20 backdrop-blur-xl flex items-center justify-center animate-bounce shadow-2xl">

    <img
        src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg"
        class="w-12 h-12"
        alt="Laravel">

    </div>

    <div class="absolute bottom-10 left-0 w-20 h-20 rounded-full bg-cyan-500/10 border border-cyan-400/20 backdrop-blur-xl flex items-center justify-center animate-bounce delay-300 shadow-2xl">

    <img
        src="https://www.vectorlogo.zone/logos/tailwindcss/tailwindcss-icon.svg"
        class="w-10 h-10"
        alt="Tailwind">

    </div>

    <div class="absolute bottom-0 right-10 w-28 h-28 rounded-full bg-yellow-500/10 border border-yellow-400/20 backdrop-blur-xl flex items-center justify-center animate-bounce delay-500 shadow-2xl">

    <img
        src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg"
        class="w-12 h-12"
        alt="JavaScript">

    </div>

    <!-- Scanner Line -->
    <div class="absolute w-87.5 h-87.5 rounded-full border border-cyan-400/10 overflow-hidden">

        <div class="absolute top-0 left-0 w-full h-1 bg-cyan-400/40 animate-pulse"></div>

    </div>

    <!-- Profile Image -->
    <img
        src="{{ asset('profile.jpeg') }}"
        alt="Profile"
        class="relative z-10 w-100 h-100 object-cover rounded-full animate-floating border-4 border-cyan-400 shadow-[0_0_60px_rgba(34,211,238,0.6)] hover:scale-105 duration-500"
    >

</div>

        </div>

    </section>

<!-- Skill Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

    <!-- Laravel -->
    <div class="bg-white/10 backdrop-blur-lg border border-white/10 rounded-3xl p-8 h-full hover:scale-105 duration-500 shadow-2xl hover:shadow-cyan-500/20">

        <div class="flex justify-center mb-6">

            <img
                src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg"
                class="w-16 h-16 object-contain"
                alt="Laravel"
            >

        </div>

        <h3 class="text-2xl font-bold text-cyan-400 mb-4 text-center">
            Laravel
        </h3>

        <p class="text-gray-300 leading-relaxed mb-6 text-center">
            Membuat website modern menggunakan framework Laravel.
        </p>

        <div class="w-full h-3 bg-gray-700 rounded-full overflow-hidden">

            <div class="w-[85%] h-full bg-linear-to-r from-cyan-400 to-blue-500 rounded-full"></div>

        </div>

    </div>

    <!-- Tailwind CSS -->
    <div class="bg-white/10 backdrop-blur-lg border border-white/10 rounded-3xl p-8 h-full hover:scale-105 duration-500 shadow-2xl hover:shadow-purple-500/20">

        <div class="flex justify-center mb-6">

            <img
                src="{{ asset('Tailwind.jpg') }}"
                class="w-16 h-16 object-contain rounded-xl"
                alt="Tailwind CSS"
            >

        </div>

        <h3 class="text-2xl font-bold text-purple-400 mb-4 text-center">
            Tailwind CSS
        </h3>

        <p class="text-gray-300 leading-relaxed mb-6 text-center">
            Mendesain website responsive dan modern menggunakan Tailwind CSS.
        </p>

        <div class="w-full h-3 bg-gray-700 rounded-full overflow-hidden">

            <div class="w-[90%] h-full bg-linear-to-r from-purple-400 to-pink-500 rounded-full"></div>

        </div>

    </div>

    <!-- JavaScript -->
    <div class="bg-white/10 backdrop-blur-lg border border-white/10 rounded-3xl p-8 h-full hover:scale-105 duration-500 shadow-2xl hover:shadow-yellow-500/20">

        <div class="flex justify-center mb-6">

            <img
                src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg"
                class="w-16 h-16 object-contain"
                alt="JavaScript"
            >

        </div>

        <h3 class="text-2xl font-bold text-yellow-400 mb-4 text-center">
            JavaScript
        </h3>

        <p class="text-gray-300 leading-relaxed mb-6 text-center">
            Membuat website interaktif dengan JavaScript modern.
        </p>

        <div class="w-full h-3 bg-gray-700 rounded-full overflow-hidden">

            <div class="w-[75%] h-full bg-linear-to-r from-yellow-400 to-orange-500 rounded-full"></div>

        </div>

    </div>

    <!-- Python -->
    <div class="bg-white/10 backdrop-blur-lg border border-white/10 rounded-3xl p-8 h-full hover:scale-105 duration-500 shadow-2xl hover:shadow-blue-500/20">

        <div class="flex justify-center mb-6">

            <img
                src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg"
                class="w-16 h-16 object-contain"
                alt="Python"
            >

        </div>

        <h3 class="text-2xl font-bold text-blue-400 mb-4 text-center">
            Python
        </h3>

        <p class="text-gray-300 leading-relaxed mb-6 text-center">
            Membuat automation dan pengolahan data menggunakan Python.
        </p>

        <div class="w-full h-3 bg-gray-700 rounded-full overflow-hidden">

            <div class="w-[80%] h-full bg-linear-to-r from-blue-400 to-cyan-500 rounded-full"></div>

        </div>

    </div>

    <!-- HTML -->
    <div class="bg-white/10 backdrop-blur-lg border border-white/10 rounded-3xl p-8 h-full hover:scale-105 duration-500 shadow-2xl hover:shadow-orange-500/20">

        <div class="flex justify-center mb-6">

            <img
                src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg"
                class="w-16 h-16 object-contain"
                alt="HTML"
            >

        </div>

        <h3 class="text-2xl font-bold text-orange-400 mb-4 text-center">
            HTML5
        </h3>

        <p class="text-gray-300 leading-relaxed mb-6 text-center">
            Membuat struktur website modern menggunakan HTML5.
        </p>

        <div class="w-full h-3 bg-gray-700 rounded-full overflow-hidden">

            <div class="w-[95%] h-full bg-linear-to-r from-orange-400 to-red-500 rounded-full"></div>

        </div>

    </div>

    <!-- CSS -->
    <div class="bg-white/10 backdrop-blur-lg border border-white/10 rounded-3xl p-8 h-full hover:scale-105 duration-500 shadow-2xl hover:shadow-cyan-500/20">

        <div class="flex justify-center mb-6">

            <img
                src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg"
                class="w-16 h-16 object-contain"
                alt="CSS"
            >

        </div>

        <h3 class="text-2xl font-bold text-cyan-400 mb-4 text-center">
            CSS3
        </h3>

        <p class="text-gray-300 leading-relaxed mb-6 text-center">
            Mendesain tampilan website agar lebih menarik dan aesthetic.
        </p>

        <div class="w-full h-3 bg-gray-700 rounded-full overflow-hidden">

            <div class="w-[90%] h-full bg-linear-to-r from-cyan-400 to-blue-500 rounded-full"></div>

        </div>

    </div>

</div>

    </section>

</body>
</html>