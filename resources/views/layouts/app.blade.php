<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portfolio | Ari</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <script src="{{ asset('js/custome.js') }}"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="https://kit.fontawesome.com/your-kit-id.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-nkuO+DT6mS3k5oBg7uLVu4vGbPRw1kkgx+F9Gp6yMZCvz6MB0jqFx9H5k5zYlWB+PZKJixhEPjzN1vWClVPpKw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-gradient-to-b from-[#0e0b1c] to-[#1a132d] text-white font-sans">

    <header class="flex justify-between items-center sticky top-0 z-50 bg-[#0e0b1c]">
        <div class="text-xl font-bold">
            <img src="img/CodeForU.png" alt="CodeForU Logo" class="rounded-md w-20 h-20">
        </div>
        <nav class="space-x-6 hidden md:flex">
            <a href="#content" class="hover:text-purple-300">Home</a>
            <a href="#about" class="hover:text-purple-300">About</a>
            <a href="#experience" class="hover:text-purple-300">Experience</a>
            <a href=""></a>
        </nav>
    </header>

    <main class="px-4 md:px-12 scroll-smooth">
        <section id="content">
            @yield('content')
        </section>

        <section id="about">
            @yield('about')
        </section>

        <section id="experience">
            @yield('experience')
        </section>

        <section id="project">
            @yield('project')
        </section>
    </main>

    <br><br>

    <footer class="bg-[#120a24] text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
            
            <!-- About -->
            <div>
                <h2 class="text-xl font-bold mb-4">About</h2>
                <span class="text-purple-300 font-medium">Mobile & Backend Developer</span> — I specialize in building mobile apps with <span class="text-purple-300 font-medium">Kotlin</span> using both <span class="text-purple-300 font-medium">Jetpack Compose</span> and <span class="text-purple-300 font-medium">XML</span>.  
                I also develop <span class="text-purple-300 font-medium">desktop applications</span> using <span class="text-purple-300 font-medium">C#</span>, and work on <span class="text-purple-300 font-medium">backend and API development</span> with <span class="text-purple-300 font-medium">native PHP</span>.  
                Currently exploring <span class="text-purple-300 font-medium">Laravel</span> to create modern web and API-based applications.
                <div class="flex space-x-4 mt-4">
                    <a href="https://facebook.com/ari.reivansyah.5" target="_blank" class="hover:text-blue-400">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://instagram.com/arireivansyah2238/" target="_blank" class="hover:text-pink-400">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://linkedin.com/in/ari-reivansyah-14795b288/" target="_blank" class="hover:text-blue-300">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://github.com/AriReiva" target="_blank" class="hover:text-gray-400">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
            </div>

            <!-- Links -->
            <div>
                <h2 class="text-xl font-bold mb-4">Links</h2>
                <ul class="space-y-2 text-gray-300">
                    <li><a href="#home" class="hover:text-purple-300">Home</a></li>
                    <li><a href="#about" class="hover:text-purple-300">About</a></li>
                </ul>
            </div>

            <!-- Services -->
            <div>
                <h2 class="text-xl font-bold mb-4">Services</h2>
                <ul class="space-y-2 text-gray-300">
                    <li>Mobile Development</li>
                    <li>Web Development</li>
                    <li>Dekstop Development</li>
                    <li>Database & API Integration</li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h2 class="text-xl font-bold mb-4">Have a Question?</h2>
                <ul class="space-y-4 text-gray-300 text-sm">
                    <li class="flex items-start">
                        <span class="mr-2"><i class="fas fa-map-marker-alt"></i></span>
                        Pekayon, Kec. Ps. Rebo, Jakarta Timur, DKI Jakarta 13710
                    </li>
                    <li class="flex items-center">
                        <span class="mr-2"><i class="fas fa-phone"></i></span>
                        <a href="tel:+6289601914996">+62 896-0191-4996</a>
                    </li>
                    <li class="flex items-center">
                        <span class="mr-2"><i class="fas fa-envelope"></i></span>
                        <a href="mailto:rrardi0202@gmail.com">rrardi0202@gmail.com</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>

</body>
</html>
