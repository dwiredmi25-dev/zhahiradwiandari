<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Page</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- Remix Icon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">

    <style>

        *{
            scroll-behavior: smooth;
        }

        body{
            font-family: 'Poppins', sans-serif;
        }

        /* =========================
           PARTICLES BACKGROUND
        ==========================*/

        .particles span{
            position: absolute;
            display: block;
            width: 10px;
            height: 10px;
            background: rgba(255,255,255,0.2);
            border-radius: 50%;
            animation: animateParticles 20s linear infinite;
            bottom: -150px;
        }

        .particles span:nth-child(1){
            left: 10%;
            width: 20px;
            height: 20px;
            animation-duration: 15s;
        }

        .particles span:nth-child(2){
            left: 25%;
            width: 10px;
            height: 10px;
            animation-duration: 18s;
        }

        .particles span:nth-child(3){
            left: 40%;
            width: 25px;
            height: 25px;
            animation-duration: 12s;
        }

        .particles span:nth-child(4){
            left: 55%;
            width: 15px;
            height: 15px;
            animation-duration: 22s;
        }

        .particles span:nth-child(5){
            left: 70%;
            width: 30px;
            height: 30px;
            animation-duration: 16s;
        }

        .particles span:nth-child(6){
            left: 85%;
            width: 12px;
            height: 12px;
            animation-duration: 19s;
        }

        @keyframes animateParticles{
            0%{
                transform: translateY(0) rotate(0deg);
                opacity: 0;
            }

            10%{
                opacity: 1;
            }

            100%{
                transform: translateY(-1200px) rotate(720deg);
                opacity: 0;
            }
        }

        /* =========================
           ANIMATED TEXT
        ==========================*/

        .animated-text{
            background: linear-gradient(
                270deg,
                #22d3ee,
                #3b82f6,
                #ffffff,
                #06b6d4,
                #22d3ee
            );

            background-size: 600% 600%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;

            animation: gradientAnimation 8s ease infinite;
        }

        @keyframes gradientAnimation{
            0%{
                background-position: 0% 50%;
            }

            50%{
                background-position: 100% 50%;
            }

            100%{
                background-position: 0% 50%;
            }
        }

        /* =========================
           FLOATING IMAGE
        ==========================*/

        .floating{
            animation: float 5s ease-in-out infinite;
        }

        @keyframes float{
            0%{
                transform: translateY(0px);
            }

            50%{
                transform: translateY(-20px);
            }

            100%{
                transform: translateY(0px);
            }
        }

        /* =========================
           GLOW EFFECT
        ==========================*/

        .glow{
            box-shadow:
            0 0 20px rgba(34,211,238,0.4),
            0 0 50px rgba(34,211,238,0.3),
            0 0 100px rgba(34,211,238,0.2);
        }

        /* =========================
           CARD ANIMATION
        ==========================*/

        .glass-card{
            position: relative;
            overflow: hidden;
        }

        .glass-card::before{
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                45deg,
                transparent,
                rgba(255,255,255,0.1),
                transparent
            );

            transform: rotate(25deg);
            animation: shine 8s linear infinite;
        }

        @keyframes shine{
            0%{
                transform: translateX(-100%) rotate(25deg);
            }

            100%{
                transform: translateX(100%) rotate(25deg);
            }
        }

        /* =========================
           BUTTON EFFECT
        ==========================*/

        .btn-glow{
            position: relative;
            overflow: hidden;
        }

        .btn-glow::before{
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: rgba(255,255,255,0.3);
            transform: skewX(-30deg);
            transition: 0.7s;
        }

        .btn-glow:hover::before{
            left: 120%;
        }

        /* =========================
           ICON FLOATING
        ==========================*/

        .icon-float{
            animation: iconFloat 3s ease-in-out infinite;
        }

        @keyframes iconFloat{
            0%,100%{
                transform: translateY(0px);
            }

            50%{
                transform: translateY(-10px);
            }
        }

    </style>
</head>

<body class="bg-gradient-to-br from-slate-950 via-blue-950 to-slate-950 min-h-screen px-6 py-10 overflow-x-hidden relative">

    <!-- PARTICLES -->
    <div class="particles fixed inset-0 overflow-hidden -z-10">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>

    <!-- Background Blur -->
    <div class="absolute top-10 left-10 w-72 h-72 bg-cyan-500/20 rounded-full blur-3xl"></div>
    <div class="absolute bottom-10 right-10 w-72 h-72 bg-blue-500/20 rounded-full blur-3xl"></div>

    <!-- Main Card -->
    <div data-aos="zoom-in"
        class="glass-card relative max-w-6xl mx-auto w-full bg-white/10 backdrop-blur-2xl border border-white/20 rounded-[40px] shadow-2xl overflow-hidden">

        <div class="grid md:grid-cols-2 gap-10 items-start">

            <!-- LEFT -->
            <div class="p-10 md:p-14 relative z-10">

                <!-- Small Title -->
                <div class="flex items-center gap-3 mb-4">

                    <div class="w-10 h-0.5 bg-cyan-400"></div>

                    <span data-aos="fade-right"
                        class="text-cyan-400 font-semibold tracking-[5px] uppercase text-sm">
                        About Me
                    </span>

                </div>

                <!-- Heading -->
                <h1 data-aos="fade-up"
                    class="text-5xl md:text-5xl font-extrabold leading-tight animated-text">

                    Creative <br>
                    Web Developer

                </h1>

                <!-- Description -->
                <p data-aos="fade-up"
                    data-aos-delay="200"
                    class="text-gray-300 leading-relaxed mt-8 text-lg">

                    Halo, saya Zhahira Dwi Andari, mahasiswa Program Studi Teknik Informatika,
                    Fakultas Teknik, Universitas Malikussaleh, yang memiliki ketertarikan besar
                    dalam dunia teknologi, khususnya pengembangan website modern dan desain UI/UX.

                    <br><br>

                    Saya menyukai desain website futuristik, interaktif, responsive,
                    dan elegan dengan pengalaman pengguna yang nyaman di berbagai perangkat.

                    <br><br>

                    Fokus utama saya saat ini adalah membangun website menggunakan Laravel
                    dan Tailwind CSS untuk menghasilkan tampilan modern dengan performa optimal.

                </p>

                <!-- Info -->
                <div class="mt-8 flex flex-wrap gap-4">
                <!-- CODE CARD + EDUCATION -->
                <div class="mt-8 flex flex-row gap-6 items-start">

                    <!-- EDUCATION -->
                    <div class="w-72">

                        <!-- Title -->
                        <div class="flex items-center gap-2 mb-4">

                            <div class="w-2 h-2 rounded-full bg-cyan-400 animate-pulse"></div>

                            <h3 class="text-cyan-400 font-bold tracking-[4px] text-sm uppercase">
                                Education
                            </h3>

                        </div>

                        <!-- Card 1 -->
                        <div class="bg-white/5 border border-white/10 backdrop-blur-xl rounded-3xl p-5 shadow-xl hover:scale-105 duration-300">

                            <div class="flex items-start gap-4">

                                <div class="w-14 h-14 rounded-2xl bg-cyan-400/10 flex items-center justify-center shrink-0">

                                    <i class="ri-graduation-cap-fill text-cyan-400 text-3xl"></i>

                                </div>

                                <div>

                                    <h4 class="text-white font-bold text-lg">
                                        S1 Teknik Informatika
                                    </h4>

                                    <p class="text-gray-400 text-sm mt-1 leading-relaxed">
                                        Universitas Malikussaleh • Web & Mobile Engineering
                                    </p>

                                </div>

                            </div>

                        </div>

                        <!-- Card 2 -->
                        <div class="mt-5 bg-white/5 border border-white/10 backdrop-blur-xl rounded-3xl p-5 shadow-xl hover:scale-105 duration-300">

                            <div class="flex items-start gap-4">

                                <div class="w-14 h-14 rounded-2xl bg-indigo-400/10 flex items-center justify-center shrink-0">

                                    <i class="ri-building-4-fill text-indigo-400 text-3xl"></i>

                                </div>

                                <div>

                                    <h4 class="text-white font-bold text-lg">
                                        SMA Negeri 1 Air Putih
                                    </h4>

                                    <p class="text-gray-400 text-sm mt-1 leading-relaxed">
                                        Jurusan MIPA • Lulus 2024
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- CODE CARD -->
                    <div
                        class="w-72 bg-black/40 border border-cyan-400/20 rounded-3xl p-6 backdrop-blur-xl shadow-2xl relative overflow-hidden">

                        <!-- Background Glow -->
                        <div class="absolute inset-0 bg-linear-to-br from-cyan-500/5 via-transparent to-blue-500/5"></div>

                        <!-- Terminal Dots -->
                        <div class="flex items-center gap-2 mb-5 relative z-10">

                            <div class="w-3 h-3 rounded-full bg-red-400"></div>
                            <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                            <div class="w-3 h-3 rounded-full bg-green-400"></div>

                        </div>

                        <!-- CODE -->
                        <pre class="text-xs leading-4 relative z-10 text-gray-200 overflow-hidden font-mono">

                        <span class="text-gray-500">// about me</span>

                        <span class="text-cyan-400">const</span>
                        <span class="text-blue-400">zhahira</span> = {

                        <span class="text-cyan-300">role</span>:
                        <span class="text-green-400">"IT Student"</span>,

                        <span class="text-cyan-300">focus</span>: [
                            <span class="text-green-400">"Web Dev"</span>,
                            <span class="text-green-400">"UI/UX"</span>
                        ],

                        <span class="text-cyan-300">coffee</span>:
                        <span class="text-yellow-400">"Infinity"</span>

                        };

                        </pre>
                    </div>

                </div>

                    <div class="bg-white/10 border border-white/10 px-5 py-3 rounded-2xl backdrop-blur-lg hover:scale-105 duration-300">
                        <span class="text-cyan-400 font-bold">UI/UX</span>
                    </div>

                    <div class="bg-white/10 border border-white/10 px-5 py-3 rounded-2xl backdrop-blur-lg hover:scale-105 duration-300">
                        <span class="text-cyan-400 font-bold">Laravel</span>
                    </div>

                    <div class="bg-white/10 border border-white/10 px-5 py-3 rounded-2xl backdrop-blur-lg hover:scale-105 duration-300">
                        <span class="text-cyan-400 font-bold">Tailwind CSS</span>
                    </div>

                </div>

                <!-- Button -->
                <div data-aos="fade-up"
                    data-aos-delay="400"
                    class="mt-10 flex flex-wrap gap-4">

                    <a href="/"
                        class="btn-glow relative bg-cyan-500 hover:bg-cyan-400 text-white px-8 py-4 rounded-2xl font-semibold duration-300 shadow-lg shadow-cyan-500/40 hover:scale-110 flex items-center gap-2">

                        <i class="ri-arrow-left-line text-xl"></i>
                        Kembali Home

                    </a>

                </div>

            </div>

            <!-- RIGHT -->
            <!-- RIGHT -->
            <!-- RIGHT -->
            <div class="relative hidden md:flex flex-col items-center justify-start pt-32">

                <!-- Glow -->
                <div class="absolute w-72 h-72 bg-cyan-400 rounded-full blur-3xl opacity-20 animate-pulse"></div>
                <!-- Circle Border -->
                <div class="absolute w-72 h-72 border border-cyan-400/20 rounded-full animate-spin"
                    style="animation-duration: 15s;">
                </div>

                <div class="absolute w-80 h-80 border border-blue-400/10 rounded-full animate-spin"
                    style="animation-duration: 20s; animation-direction: reverse;">
                </div>

                <!-- Image -->
                <img src="profile.jpeg"
                alt="Profile"
                data-aos="fade-left"
                class="relative w-64 md:w-72 rounded-[30px] border border-white/20 shadow-2xl floating glow hover:scale-105 duration-500 z-10">

                <!-- Floating Icons -->
                <div class="absolute top-16 left-10 bg-white/10 backdrop-blur-lg border border-white/10 p-4 rounded-2xl icon-float">
                    <i class="ri-code-s-slash-line text-cyan-400 text-3xl"></i>
                </div>

                <div class="absolute bottom-16 right-10 bg-white/10 backdrop-blur-lg border border-white/10 p-4 rounded-2xl icon-float"
                    style="animation-delay: 1s;">
                    <i class="ri-layout-4-line text-cyan-400 text-3xl"></i>
                </div>

                <div class="absolute top-1/2 -right-2 bg-white/10 backdrop-blur-lg border border-white/10 p-4 rounded-2xl icon-float"
                    style="animation-delay: 2s;">
                    <i class="ri-terminal-window-line text-cyan-400 text-3xl"></i>
                </div>

            </div>

        </div>

    </div>

    <!-- AOS Script -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <script>

        AOS.init({
            duration: 1400,
            once: true,
        });

    </script>

</body>
</html>