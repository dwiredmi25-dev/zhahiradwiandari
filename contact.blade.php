<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <style>
        .elegant-text{
    background: linear-gradient(
        to right,
        #ffffff,
        #cbd5e1,
        #94a3b8
    );

    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;

    text-shadow: 0 0 20px rgba(255,255,255,0.1);
}

body{
    font-family: 'Poppins', sans-serif;
    overflow-x: hidden;
    position: relative;
}

/* Animated Background */
body::before{
    content: "";
    position: fixed;
    inset: 0;
    background:
    radial-gradient(circle at top left, rgba(34,211,238,0.15), transparent 30%),
    radial-gradient(circle at bottom right, rgba(59,130,246,0.15), transparent 30%),
    radial-gradient(circle at center, rgba(255,255,255,0.05), transparent 40%);
    
    animation: bgMove 12s ease-in-out infinite alternate;
    z-index: -2;
}

@keyframes bgMove{
    0%{
        transform: scale(1) rotate(0deg);
    }

    100%{
        transform: scale(1.1) rotate(3deg);
    }
}

.animated-text{
    color: #22d3ee;
    text-shadow: 0 0 15px rgba(34,211,238,0.4);
}

/* Moving Border Glow */
.main-card::before{
    content: "";
    position: absolute;
    inset: -2px;
    background: linear-gradient(
        130deg,
        transparent,
        rgba(34,211,238,0.8),
        transparent,
        rgba(59,130,246,0.8),
        transparent
    );

    background-size: 300% 300%;
    animation: borderRun 6s linear infinite;
    z-index: -1;
}

@keyframes borderRun{
    0%{
        background-position: 0% 50%;
    }

    100%{
        background-position: 300% 50%;
    }
}

.contact-box{
    position: relative;
    overflow: hidden;
    transition: 0.5s;
}

/* Light Sweep */
.contact-box::before{
    content: "";
    position: absolute;
    top: 0;
    left: -120%;
    width: 100%;
    height: 100%;
    background: linear-gradient(
        120deg,
        transparent,
        rgba(255,255,255,0.2),
        transparent
    );

    transition: 0.7s;
}

.contact-box:hover::before{
    left: 120%;
}

/* Hover Animation */
.contact-box:hover{
    transform: translateY(-8px) scale(1.03);
    box-shadow: 0 0 25px rgba(34,211,238,0.3);
}


.profile-img{
    animation: rotateFloat 6s ease-in-out infinite;
    transition: 0.5s;
}

.profile-img:hover{
    transform: scale(1.05) rotate(2deg);
}

@keyframes rotateFloat{
    0%{
        transform: translateY(0px);
    }

    50%{
        transform: translateY(-15px);
    }

    100%{
        transform: translateY(0px);
    }
}


.cool-btn{
    position: relative;
    overflow: hidden;
}

.cool-btn::before{
    content: "";
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: rgba(255,255,255,0.2);
    transform: skewX(30deg);

    transition: 0.6s;
}

.cool-btn:hover::before{
    left: 120%;
}

    </style>
</head>

<body class="bg-gradient-to-br from-slate-900 via-blue-900 to-slate-950 min-h-screen px-6 py-10 overflow-x-hidden">

    <!-- Background Blur -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-cyan-500/20 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-blue-500/20 rounded-full blur-3xl"></div>

    <!-- Main Card -->
    <div data-aos="zoom-in"
        class="main-card relative max-w-5xl mx-auto bg-white/10 backdrop-blur-xl border border-white/20 rounded-3xl shadow-2xl overflow-hidden"
        class="grid md:grid-cols-2">

            <!-- Left -->
            <div class="p-10 md:p-14 flex flex-col justify-center">

                <span class="text-cyan-400 uppercase tracking-[5px] text-sm font-semibold">
                    Contact Me
                </span>

                <h1 class="text-5xl md:text-6xl font-extrabold mt-5 leading-tight elegant-text">
                    Let's Connect
                </h1>

                <p class="text-gray-300 mt-8 leading-relaxed text-lg">
                    Terima kasih telah mengunjungi portfolio saya.
                    Jika ingin berdiskusi, bekerja sama, atau sekadar
                    berkenalan, silakan hubungi saya melalui platform berikut.
                </p>

                <!-- Contact List -->
                <div class="mt-10 space-y-5">

                    <!-- Email -->
                   <a href="https://mail.google.com/mail/?view=cm&fs=1&to=dwiredmi25@gmail.com"
                        target="_blank"
                        class="contact-box flex items-center gap-4 bg-white/10 hover:bg-cyan-500/20 border border-white/10 rounded-2xl p-5 duration-300 hover:scale-105">

                    <!-- Icon -->
                        <div class="w-14 h-14 min-w-14 bg-cyan-500/20 rounded-xl flex items-center justify-center text-cyan-400 text-2xl">
                        <i class="fa-solid fa-envelope"></i>
                        </div>

                    <!-- Text -->
                        <div class="flex flex-col justify-center">
                        <h3 class="text-white font-semibold text-lg leading-none">
                            Email
                        </h3>

                        <p class="text-gray-300 text-sm mt-1">
                            dwiredmi25@gmail.com
                        </p>
                        </div>

                    </a>

                    <!-- WhatsApp -->
                    <a href="https://wa.me/6289518576079"
                        target="_blank"
                        class="contact-box flex items-center gap-4 bg-white/10 hover:bg-green-500/20 border border-white/10 rounded-2xl p-5 duration-300 hover:scale-105">

                        <!-- Icon -->
                        <div class="w-14 h-14 min-w-14 bg-green-500/20 rounded-xl flex items-center justify-center text-green-400 text-2xl">
                            <i class="fa-brands fa-whatsapp"></i>
                        </div>

                        <!-- Text -->
                        <div class="flex flex-col justify-center">
                            <h3 class="text-white font-semibold text-lg">
                                WhatsApp
                            </h3>

                            <p class="text-gray-300 text-sm">
                                +62 895-1857-6079
                            </p>
                        </div>

                    </a>

                    <!-- Instagram -->
                    <a href="https://instagram.com/j33ra.a"
                        target="_blank"
                        class="contact-box flex items-center gap-4 bg-white/10 hover:bg-pink-500/20 border border-white/10 rounded-2xl p-5 duration-300 hover:scale-105">

                        <!-- Icon -->
                        <div class="w-14 h-14 min-w-14 bg-pink-500/20 rounded-xl flex items-center justify-center text-pink-400 text-2xl">
                            <i class="fa-brands fa-instagram"></i>
                        </div>

                        <!-- Text -->
                        <div class="flex flex-col justify-center">
                            <h3 class="text-white font-semibold text-lg">
                                Instagram
                            </h3>

                            <p class="text-gray-300 text-sm">
                                @j33ra.a
                            </p>
                        </div>

                    </a>

                </div>

                <!-- Button -->
                <div class="mt-10">

                    <a href="/"
                        class="inline-block bg-cyan-500 hover:bg-cyan-400 text-white px-7 py-3 rounded-xl font-medium duration-300 shadow-lg shadow-cyan-500/30 hover:scale-105">

                        Kembali Home

                    </a>

                </div>

            </div>

            <!-- Right -->
            <div class="hidden md:flex items-center justify-center relative p-10">

                <!-- Glow -->
                <div class="absolute w-80 h-80 bg-cyan-400/30 rounded-full blur-3xl"></div>

            </div>

        </div>

    </div>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <script>
        AOS.init({
            duration: 1200,
            once: true
        });
    </script>

</body>
</html>