@include('_navigation')
      
<!-- Header -->
<header id="header" class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xl-5">
                <div class="text-container">
                    <h2 class="body-font text-4xl h1-large uppercase">Have you ever felt <div>ologne?</div></h2>
                    <p class="p-large body-font">
                        All house. All electronic.
                    </p>
                    <a class="body-font btn-solid-lg" href="#services">EXPLORE</a>
                </div>
            </div>
            <div class="col-lg-6 col-xl-7">
                <div class="image-container">
                    <img class="img-fluid" width="800" height="800" src="images/hero.jpeg" alt="alternative">
                </div>
            </div>
        </div>
    </div>
</header>

<!-- biography -->
<section class="bg-grey-1 relative">
    
    <div class="container mx-auto py-20">
        <div class="items-center flex flex-wrap">
        <div class="w-full lg:w-4/12 ml-auto mr-auto px-4 mb-12 lg:mb-0">
            <img
            alt="..."
            class="max-w-full rounded-lg shadow-lg"
            src="images/photo-8.jpeg"
            />
        </div>
        <div class="w-full lg:w-5/12 ml-auto mr-auto px-4">

            <div class="lg:pr-12">
            <h3 class="text-4xl body-font">Biography</h3>
            <p class="mt-4 text-lg leading-relaxed text-gray-600 font-normal body-font">
                Ologne is a young Canadian DJ/Producer from Niagara Falls, Ontario.
                Ologne sparked an interest for music at a young age being inspired by his grandfather
                who played a variety of instruments.
            </p>
            <p class="mt-4 text-lg leading-relaxed text-gray-600 font-normal body-font mb-12 sm:mb-0">
                In his teens he bagan to electronically produce
                rap and hip-hop style beats using FL Studios. It wasn't until he attended
                his first Veld music festival in Toronto that he found his true love for electronic music
                He plans to bring a new and exciting sound to the electronic music scene.
            </p>
            
            <ul class="list-none mt-6">

                <li class="py-2 mb-3 sm:mb-0">
                <div class="flex flex-col sm:flex-row items-center">
                    
                    <div class="basis-full flex-auto">
                    <h4 class="text-gray-600 text-xl body-font mb-3 sm:mb-0">
                        Music platforms
                    </h4>
                    </div>

                    <div class="basis-full flex-auto flex justify-end gap-1">
                    <a href="#" class="btn-link spotify rounded-lg shadow-md uppercase">
                        <span><i class="fab fa-spotify"></i></span>
                    </a>
                    <a href="#" class="btn-link applemusic rounded-lg shadow-md uppercase">
                        <span><i class="fas fa-music"></i></span>
                    </a>
                    <a href="#" class="btn-link soundcloud rounded-lg shadow-md uppercase">
                        <span><i class="fab fa-soundcloud"></i></span>
                    </a>
                    <a href="#" class="btn-link youtube rounded-lg shadow-md uppercase">
                        <span><i class="fab fa-youtube"></i></span>
                    </a>
                    <a href="#" class="btn-link beatport rounded-lg shadow-md uppercase">
                        <span><i class="fas fa-headphones"></i></span>
                    </a>
                    
                    </div>
                </div>
                </li>

                <li class="py-2">
                <div class="flex flex-col sm:flex-row items-center">
                    
                    <div class="basis-full flex-auto">
                    <h4 class="text-gray-600 text-xl body-font mb-3 sm:mb-0">
                        Social links
                    </h4>
                    </div>
                
                    <div class="basis-full flex-auto flex justify-end gap-1">
                    <a href="#" class="btn-link instagram rounded-lg shadow-md uppercase">
                        <span><i class="fab fa-instagram"></i></span>
                    </a>
                    <a href="#" class="btn-link facebook rounded-lg shadow-md uppercase">
                        <span><i class="fab fa-facebook-f"></i></span>
                    </a>
                    <a href="#" class="btn-link twitter rounded-lg shadow-md uppercase">
                        <span><i class="fab fa-twitter"></i></span>
                    </a>
                    <a href="#" class="btn-link twitch rounded-lg shadow-md uppercase">
                        <span><i class="fab fa-twitch"></i></span>
                    </a>
                    
                    </div>

                </div>
                </li>

            </ul>
            </div>
        </div>
        </div>
    </div>
</section>
<!-- end of biography -->

@include('_discography')

<!-- videos -->
<section class="bg-grey-1">
    <div class="container mx-auto py-20">

        <div class="text-center mx-auto w-full md:max-w-5xl">
        <h3 class="text-4xl body-font mb-20">Videos</h3>
    
            <iframe class="w-full h-80 h-682" src="https://www.youtube.com/embed/zrzLWU7gJXU"></iframe>
        </div>

    </div>
</section>
<!-- end of videos -->

<!-- photography -->
<section class="bg-white-1">

    <div class="container py-20 mx-auto">

        <h2 class="text-4xl text-gray-800 body-font mb-20">Photos</h2>

        <div class="flex flex-wrap -m-1 md:-m-2">
            <div class="flex flex-wrap w-1/2">
                <div class="w-1/2 p-2 md:p-8">
                <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                    src="images/photo-1.jpg">
                </div>
                <div class="w-1/2 p-2 md:p-8">
                <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                    src="images/photo-2.jpg">
                </div>
                <div class="w-full p-2 md:p-8">
                <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                    src="images/photo-3.jpg">
                </div>
            </div>
            <div class="flex flex-wrap w-1/2">
                <div class="w-full p-2 md:p-8">
                <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                    src="images/photo-7.jpeg">
                </div>
                <div class="w-1/2 p-2 md:p-8">
                <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                    src="images/photo-5.jpg">
                </div>
                <div class="w-1/2 p-2 md:p-8">
                <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                    src="images/photo-4.jpg">
                </div>
            </div>
        </div>
    </div>

</section>
<!-- end of photography -->

<!-- bookings -->
<section class="bg-grey-1 overflow-hidden relative">
    
    <div class="container mx-auto px-4 py-20">
        <div class="items-center flex flex-wrap">
        
        <div class="w-full lg:w-5/12 ml-auto mr-auto px-4 relative z-20">
            <div class="lg:pr-12">

            <h3 class="text-4xl body-font">Bookings</h3>
            <p class="mt-4 text-lg leading-relaxed font-normal text-gray-600 body-font">
                Ologne will bring life to any club, restaurant, party, venue or event.
                To reach him, use the following links below.
            </p>
            <ul class="list-none mt-6">
                <li class="py-2">
                <div class="flex items-center">
                    <div>
                    <span
                        class="text-xl font-semibold inline-block py-1 px-2 uppercase rounded-full text-gray-100 bg-orange-1 mr-3"
                        >
                        <i class="fas fa-phone"></i>
                    </span>
                    </div>
                    <div>
                    <h4 class="text-gray-600 text-xl body-font font-normal">
                        +1 905 123 4567
                    </h4>
                    </div>
                </div>
                </li>
                <li class="py-2">
                <div class="flex items-center">
                    <div>
                    <span
                        class="text-xl font-semibold inline-block py-1 px-2 uppercase rounded-full text-gray-100 bg-orange-1 mr-3"
                        >
                        <i class="fas fa-envelope"></i>
                    </span>
                    </div>
                    <div>
                    <h4 class="text-gray-600 text-xl body-font font-normal">bookings@homeologne.com</h4>
                    </div>
                </div>
                </li>
                <li class="py-2">
                <div class="flex items-center">
                    <div>
                    <span
                        class="text-xl font-semibold inline-block py-1 px-2 uppercase rounded-full text-gray-100 bg-orange-1 mr-3"
                        >
                        <i class="fab fa-instagram"></i>
                    </span>
                    </div>
                    <div>
                    <h4 class="text-gray-600 text-xl body-font font-normal">Instagram direct message</h4>
                    </div>
                </div>
                </li>
            </ul>
            </div>
        </div>

        <div class="hide lg:block w-full lg:w-4/12 ml-auto mr-auto px-4 relative">
            <svg style="top:50%;left:50%;transform:translate(-50%,-50%);opacity:.25" class="absolute" id="visual" viewBox="0 0 900 600" width="900" height="600" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"><rect x="0" y="0" width="900" height="600" fill="transparent"></rect><g transform="translate(483.44959560894426 318.221838601865)"><path d="M117 -125.9C152 -82 181 -41 181.7 0.7C182.4 42.4 154.9 84.9 119.9 109.9C84.9 134.9 42.4 142.4 -14.1 156.6C-70.7 170.7 -141.4 191.4 -188.8 166.4C-236.1 141.4 -260 70.7 -243.3 16.7C-226.6 -37.2 -169.1 -74.5 -121.8 -118.3C-74.5 -162.1 -37.2 -212.6 1.9 -214.5C41 -216.3 82 -169.7 117 -125.9" fill="#C68F03"></path></g></svg>
            <svg style="top:50%;left:50%;transform:translate(-50%,-50%);opacity:.25" class="absolute" id="visual" viewBox="0 0 900 600" width="900" height="600" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"><rect x="0" y="0" width="900" height="600" fill="transparent"></rect><g transform="translate(460.34413216334843 313.64946837379193)"><path d="M207 -196.4C255.2 -158.9 272.1 -79.4 275.6 3.5C279.2 86.5 269.3 173 221.2 211.5C173 250 86.5 240.5 5.5 235C-75.4 229.4 -150.8 227.8 -199.3 189.3C-247.8 150.8 -269.4 75.4 -284.7 -15.3C-300.1 -106.1 -309.1 -212.1 -260.6 -249.6C-212.1 -287.1 -106.1 -256.1 -13.3 -242.8C79.4 -229.4 158.9 -233.9 207 -196.4" fill="#E8A903"></path></g></svg>
            <img
                alt="..."
                src="images/photo-7.jpeg"
                class="relative z-20 shadow-lg rounded-full max-w-full mx-auto"
                style="max-width: 225px;"
            />
            </div>
        </div>

    </div>
</section>
<!-- end of bookings -->

<!-- footer -->
<section class="bg-black-1">
    <div class="container mx-auto py-20">

        <div class="text-center mx-auto w-full md:max-w-5xl">
            <h3 class="text-4xl text-gray-300 header-font mb-8">
                HOME OLOGNE
            </h3>
            <p class="mb-4">
                © 2021 HOME OLOGNE / BUILT BY 
                <a href="https://dallan.ca/">
                    DALLAN
                </a>
            </p>
            <p class="flex justify-center gap-4 text-gray-400">
                <a href="#">
                    <span class="social-link"><i class="fab fa-instagram"></i></span>
                </a>
                <a href="#">
                    <span class="social-link"><i class="fab fa-facebook-f"></i></span>
                </a>
                <a href="#">
                    <span class="social-link"><i class="fab fa-twitter"></i></span>
                </a>
                <a href="#">
                    <span class="social-link"><i class="fab fa-twitch"></i></span>
                </a>
                <a href="#">
                    <span class="social-link"><i class="fab fa-spotify"></i></span>
                </a>
                <a href="#">
                    <span class="social-link"><i class="fas fa-music"></i></span>
                </a>
                <a href="#">
                    <span class="social-link"><i class="fab fa-soundcloud"></i></span>
                </a>
                <a href="#">
                    <span class="social-link"><i class="fab fa-youtube"></i></span>
                </a>
                <a href="#">
                    <span class="social-link"><i class="fas fa-headphones"></i></span>
                </a>
            </p>

        </div>

    </div>
</section>
<!-- end of footer -->

<script src="js/header.js"></script>