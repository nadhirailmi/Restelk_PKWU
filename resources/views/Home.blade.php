<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>

    svg{
        cursor:pointer; overflow:visible; 
        width:60px;
        #heart{
            transform-origin:center; 
            animation:animateHeartOut .3s linear forwards;
        }
        #main-circ{
            transform-origin:29.5px 29.5px;
        }
    }

    #checkbox{
        display:none;
    }

    #checkbox:checked + label svg{
        #heart{transform:scale(.2); fill:#E2264D; animation:animateHeart .3s linear forwards .25s;}
        #main-circ{transition:all 2s; animation:animateCircle .3s linear forwards; opacity:1;}
        #grp1{
        opacity:1; transition:.1s all .3s;
        #oval1{
            transform:scale(0) translate(0, -30px);
            transform-origin:0 0 0;
            transition:.5s transform .3s;}
        #oval2{
            transform:scale(0) translate(10px, -50px);
            transform-origin:0 0 0;
            transition:1.5s transform .3s;}
        }
        #grp2{
        opacity:1; transition:.1s all .3s;
        #oval1{
            transform:scale(0) translate(30px, -15px); 
            transform-origin:0 0 0;
            transition:.5s transform .3s;}
        #oval2{
            transform:scale(0) translate(60px, -15px); 
            transform-origin:0 0 0;
            transition:1.5s transform .3s;}
        }
        #grp3{
        opacity:1; transition:.1s all .3s;
        #oval1{
            transform:scale(0) translate(30px, 0px);
            transform-origin:0 0 0;
            transition:.5s transform .3s;}
        #oval2{
            transform:scale(0) translate(60px, 10px);
            transform-origin:0 0 0;
            transition:1.5s transform .3s;}
        }
        #grp4{
        opacity:1; transition:.1s all .3s;
        #oval1{
            transform:scale(0) translate(30px, 15px);
            transform-origin:0 0 0;
            transition:.5s transform .3s;}
        #oval2{
            transform:scale(0) translate(40px, 50px);
            transform-origin:0 0 0;
            transition:1.5s transform .3s;}
        }
        #grp5{
        opacity:1; transition:.1s all .3s;
        #oval1{
            transform:scale(0) translate(-10px, 20px);
            transform-origin:0 0 0;
            transition:.5s transform .3s;}
        #oval2{
            transform:scale(0) translate(-60px, 30px);
            transform-origin:0 0 0;
            transition:1.5s transform .3s;}
        }
        #grp6{
        opacity:1; transition:.1s all .3s;
        #oval1{
            transform:scale(0) translate(-30px, 0px);
            transform-origin:0 0 0;
            transition:.5s transform .3s;}
        #oval2{
            transform:scale(0) translate(-60px, -5px);
            transform-origin:0 0 0;
            transition:1.5s transform .3s;}
        }
        #grp7{
        opacity:1; transition:.1s all .3s;
        #oval1{
            transform:scale(0) translate(-30px, -15px);
            transform-origin:0 0 0;
            transition:.5s transform .3s;}
        #oval2{
            transform:scale(0) translate(-55px, -30px);
            transform-origin:0 0 0;
            transition:1.5s transform .3s;}
        }
        #grp2{opacity:1; transition:.1s opacity .3s;}
        #grp3{opacity:1; transition:.1s opacity .3s;}
        #grp4{opacity:1; transition:.1s opacity .3s;}
        #grp5{opacity:1; transition:.1s opacity .3s;}
        #grp6{opacity:1; transition:.1s opacity .3s;}
        #grp7{opacity:1; transition:.1s opacity .3s;}
    }

    @keyframes animateCircle{
    40%{transform:scale(10); opacity:1; fill:#DD4688;}
    55%{transform:scale(11); opacity:1; fill:#D46ABF;}
    65%{transform:scale(12); opacity:1; fill:#CC8EF5;}
    75%{transform:scale(13); opacity:1; fill:transparent; stroke:#CC8EF5; stroke-width:.5;}
    85%{transform:scale(17); opacity:1; fill:transparent; stroke:#CC8EF5; stroke-width:.2;}
    95%{transform:scale(18); opacity:1; fill:transparent; stroke:#CC8EF5; stroke-width:.1;}
    100%{transform:scale(19); opacity:1; fill:transparent; stroke:#CC8EF5; stroke-width:0;}
    }

    @keyframes animateHeart{
    0%{transform:scale(.2);}
    40%{transform:scale(1.2);}
    100%{transform:scale(1);}
    }

    @keyframes animateHeartOut{
    0%{transform:scale(1.4);}
    100%{transform:scale(1);}
    }

</style>
<body class="bg-[#5F8670]">
    <!-- NAVBAR -->
    <div class="bg-[#5F8670] flex justify-between py-3 px-3 md:px-20 fixed top-0 left-0 right-0 text-white font-medium">
        <img src="/asset/Restelk (1).png" alt="logo" class="w-[20%] md:w-24">

        <div class="hidden md:block align-middle my-auto w-[300px]">

            <ul  class="flex text-primary1 justify-between text-l">
                <li class="font-semibold hover:border-b-2 transition-transform duration-100 cursor-pointer"><a href="/tes">Home</a></li>
                <li class="hover:border-b-2 transition-transform duration-100 cursor-pointer"><a href="/fav">Favorite</a></li>
                <li class="hover:border-b-2 transition-transform duration-100 cursor-pointer"><a href="/soc">Social</a></li>
            </ul>

        </div>

        <!-- HAMBURGER -->
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg md:hidden hover:bg-[##5F8670] focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-white" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>

    </div>

        <div id="navbar-default" class="hidden w-full md:w-auto bg-white">
            <ul class="mx-5 mt-24 text-base text-primary1">
                <li class="py-2 hover:bg-slate-200 rounded-md"><a href="#" class="ml-2">Home</a></li>
                <li class="py-2 hover:bg-slate-200 rounded-md"><a href="#" class="ml-2">Course</a></li>
                <li class="py-2 hover:bg-slate-200 rounded-md"><a href="#" class="ml-2">About</a></li>
                <li class="py-2 hover:bg-slate-200 rounded-md"><a href="#" class="ml-2">Contact Us</a></li>
            </ul>
    </div>

    <!-- HERO -->

    <section class="w-full bg-center-bottom bg-no-repeat bg-cover mb-8 bg-[url('/asset/sate.jpg')] bg-gray-400 bg-blend-multiply">

        <div class="text-white text-center py-72 mx-5">

            <h1 class="font-bold md:text-5xl text-3xl">Lets Cook!</h1>
            <p class="text-lg">Masak makanan dengan RESTELK!</p>

        </div>

    </section>
    
    <!-- KATEGORI -->
    <div  class="justify-center align-middle md:ml-28">

        <div class="grid grid-cols-7 gap-1 md:gap-0">

            <button><img src="/asset/indonesia.svg" alt="indo" class="md:w-16 w-[80%]"></button>
            <button><img src="/asset/malay.svg" alt="malay" class="md:w-16 w-[80%]"></button>
            <button><img src="/asset/india.svg" alt="indi" class="md:w-16 w-[80%]"></button>
            <button><img src="/asset/itali.svg" alt="itali" class="md:w-16 w-[80%]"></button>
            <button><img src="/asset/thai.svg" alt="thai" class="md:w-16 w-[80%]"></button>
            <button><img src="/asset/japan.svg" alt="jap" class="md:w-16 w-[80%]"></button>
            <button><img src="/asset/kor.svg" alt="kor" class="md:w-16 w-[80%]"></button>

        </div>

    </div>

    <!-- TOP MENU -->
    <div class="flex md:mx-32 my-10">

        <div>

            <img src="/asset/nasgor.jpg" alt="" class="rounded-xl w-[40%] md:w-[450px]">
            <div id="main-content" class="mt-[-60px] ml-96">
                <div>
                    <input type="checkbox" id="checkbox" />
                    <label for="checkbox">
                    <svg id="heart-svg" viewBox="467 392 58 57" xmlns="http://www.w3.org/2000/svg">
                        <g id="Group" fill="none" fill-rule="evenodd" transform="translate(467 392)">
                        <path d="M29.144 20.773c-.063-.13-4.227-8.67-11.44-2.59C7.63 28.795 28.94 43.256 29.143 43.394c.204-.138 21.513-14.6 11.44-25.213-7.214-6.08-11.377 2.46-11.44 2.59z" id="heart" fill="#AAB8C2"/>
                        <circle id="main-circ" fill="#E2264D" opacity="0" cx="29.5" cy="29.5" r="1.5"/>

                        <g id="grp7" opacity="0" transform="translate(7 6)">
                            <circle id="oval1" fill="#9CD8C3" cx="2" cy="6" r="2"/>
                            <circle id="oval2" fill="#8CE8C3" cx="5" cy="2" r="2"/>
                        </g>

                        <g id="grp6" opacity="0" transform="translate(0 28)">
                            <circle id="oval1" fill="#CC8EF5" cx="2" cy="7" r="2"/>
                            <circle id="oval2" fill="#91D2FA" cx="3" cy="2" r="2"/>
                        </g>

                        <g id="grp3" opacity="0" transform="translate(52 28)">
                            <circle id="oval2" fill="#9CD8C3" cx="2" cy="7" r="2"/>
                            <circle id="oval1" fill="#8CE8C3" cx="4" cy="2" r="2"/>
                        </g>

                        <g id="grp2" opacity="0" transform="translate(44 6)">
                            <circle id="oval2" fill="#CC8EF5" cx="5" cy="6" r="2"/>
                            <circle id="oval1" fill="#CC8EF5" cx="2" cy="2" r="2"/>
                        </g>

                        <g id="grp5" opacity="0" transform="translate(14 50)">
                            <circle id="oval1" fill="#91D2FA" cx="6" cy="5" r="2"/>
                            <circle id="oval2" fill="#91D2FA" cx="2" cy="2" r="2"/>
                        </g>

                        <g id="grp4" opacity="0" transform="translate(35 50)">
                            <circle id="oval1" fill="#F48EA7" cx="6" cy="5" r="2"/>
                            <circle id="oval2" fill="#F48EA7" cx="2" cy="2" r="2"/>
                        </g>

                        <g id="grp1" opacity="0" transform="translate(24)">
                            <circle id="oval1" fill="#9FC7FA" cx="2.5" cy="3" r="2"/>
                            <circle id="oval2" fill="#9FC7FA" cx="7.5" cy="2" r="2"/>
                        </g>
                        </g>
                    </svg>
                    </label>
                </div>
            </div>

        </div>

        <div class="px-20 justify-center align-middle my-auto">

            <h4 class="text-3xl text-white font-semibold">Nasi Goreng</h4>
            <p class="text-lg text-white my-2 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Praesent elementum facilisis leo vel fringilla. Metus aliquam eleifend mi in nulla posuere sollicitudin aliquam ultrices.</p>


            <!-- TES -->
            <div class="flex">
                <svg class="w-8 h-8 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                </svg>
                <svg class="w-8 h-8 ms-3 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                </svg>
                <svg class="w-8 h-8 ms-3 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                </svg>
                <svg class="w-8 h-8 ms-3 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                </svg>
                <svg class="w-8 h-8 ms-3 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                </svg>
            </div>


        </div>

    </div>


    <!-- MENU CARD LAIN -->
    <h1>hahahahhahahahah</h1>

</body>
</html>