<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.tailwindcss.com"></script>   
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
          <div class="relative flex h-16 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
              <!-- Mobile menu button-->
              <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                <span class="absolute -inset-0.5"></span>
                <span class="sr-only">Open main menu</span>
                <!--
                  Icon when menu is closed.
      
                  Menu open: "hidden", Menu closed: "block"
                -->
                <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                <!--
                  Icon when menu is open.
      
                  Menu open: "block", Menu closed: "hidden"
                -->
                <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
              <div class="flex shrink-0 items-center">
                <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
              </div>
              <div class="hidden sm:ml-6 sm:block">
                <div class="flex space-x-4">
                  <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                  <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white" aria-current="page"><i class="fa-regular fa-calendar-days" style="color: #eee4c0;"> </i> Dashboard</a>
                  <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white"><i class="fa-solid fa-user" style="color: #3befff;"> </i> Team</a>
                  <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white"><i class="fa-solid fa-trophy" style="color: #FFD43B;"> </i> Achievment</a>
                  <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Calendar</a>
                </div>
              </div>
            </div>

            
           
              <!-- Profile dropdown -->
              <div class="relative ml-3">
                <div>
                  <button type="button" class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                    <span class="absolute -inset-1.5"></span>
                    <span class="sr-only">Open user menu</span>
                    <img class="size-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                  </button>
                </div>
      
                <!--
                  Dropdown menu, show/hide based on menu state.
      
                  Entering: "transition ease-out duration-100"
                    From: "transform opacity-0 scale-95"
                    To: "transform opacity-100 scale-100"
                  Leaving: "transition ease-in duration-75"
                    From: "transform opacity-100 scale-100"
                    To: "transform opacity-0 scale-95"
                -->
                {{-- <div class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                  <!-- Active: "bg-gray-100 outline-none", Not Active: "" -->
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                </div> --}}
              </div>
            </div>
          </div>
        </div>
      
        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden" id="mobile-menu">
          <div class="space-y-1 px-2 pb-3 pt-2">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white" aria-current="page">🔔Dashboard</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Team</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Projects</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Calendar</a>
          </div>
        </div>
      </nav>



    <!-- Navigation Buttons -->
    <div class="absolute inset-y-0 left-0 flex items-center justify-center">
        <button class="text-white bg-gray-700 p-2 rounded-full focus:outline-none hover:bg-gray-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>
    </div>
    <div class="absolute inset-y-0 right-0 flex items-center justify-center">
        <button class="text-white bg-gray-700 p-2 rounded-full focus:outline-none hover:bg-gray-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>
    </div>
</div>


    
<div id="default-carousel" class="relative w-full mt-20 flex justify-center" data-carousel="slide">
  <!-- Carousel wrapper -->
  <div class="relative h-70 w-3/4 max-w-[800px] overflow-hidden rounded-lg md:h-96">
       <!-- Item 1 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="{{asset('images/kebersamaan.webp')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
      </div>
      <!-- Item 2 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="/docs/images/carousel/carousel-2.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
      </div>
      <!-- Item 3 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="/docs/images/carousel/carousel-3.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
      </div>
      <!-- Item 4 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="/docs/images/carousel/carousel-4.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
      </div>
      <!-- Item 5 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="/docs/images/carousel/carousel-5.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
      </div>
  </div>
  <!-- Hilangkan tombol slider -->
</div>



<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
  <a href="#">
      <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
  </a>
  <div class="p-5">
      <a href="#">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
      </a>
      <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
      <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
          Read more
           <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
          </svg>
      </a>
  </div>
</div>


      
<h1 class="text-center text-4xl font-bold text-gray-800 mb-10"><A>Anggota</A></h1>
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
  <!-- Card Team Members -->
  <!-- Looping dimulai -->
  <div class="bg-white rounded-lg shadow-md p-4 text-center">
    <img class="w-24 h-24 mx-auto rounded-full object-cover mb-4" src="https://i.pravatar.cc/150?img=1" alt="Team Member">
    <h2 class="text-lg font-semibold text-gray-800">John Doe</h2>
    <p class="text-gray-500 text-sm">Web Developer</p>
  </div>
  <div class="bg-white rounded-lg shadow-md p-4 text-center">
    <img class="w-24 h-24 mx-auto rounded-full object-cover mb-4" src="https://i.pravatar.cc/150?img=2" alt="Team Member">
    <h2 class="text-lg font-semibold text-gray-800">Jane Smith</h2>
    <p class="text-gray-500 text-sm">UI/UX Designer</p>
  </div>
  <div class="bg-white rounded-lg shadow-md p-4 text-center">
    <img class="w-24 h-24 mx-auto rounded-full object-cover mb-4" src="https://i.pravatar.cc/150?img=3" alt="Team Member">
    <h2 class="text-lg font-semibold text-gray-800">Michael Brown</h2>
    <p class="text-gray-500 text-sm">Project Manager</p>
  </div>
  <div class="bg-white rounded-lg shadow-md p-4 text-center">
    <img class="w-24 h-24 mx-auto rounded-full object-cover mb-4" src="https://i.pravatar.cc/150?img=4" alt="Team Member">
    <h2 class="text-lg font-semibold text-gray-800">Emily Davis</h2>
    <p class="text-gray-500 text-sm">Software Engineer</p>
  </div>
  <div class="bg-white rounded-lg shadow-md p-4 text-center">
    <img class="w-24 h-24 mx-auto rounded-full object-cover mb-4" src="https://i.pravatar.cc/150?img=5" alt="Team Member">
    <h2 class="text-lg font-semibold text-gray-800">William Harris</h2>
    <p class="text-gray-500 text-sm">Data Scientist</p>
  </div>
  <div class="bg-white rounded-lg shadow-md p-4 text-center">
    <img class="w-24 h-24 mx-auto rounded-full object-cover mb-4" src="https://i.pravatar.cc/150?img=6" alt="Team Member">
    <h2 class="text-lg font-semibold text-gray-800">Sophia Martin</h2>
    <p class="text-gray-500 text-sm">Marketing Specialist</p>
  </div>
  <div class="bg-white rounded-lg shadow-md p-4 text-center">
    <img class="w-24 h-24 mx-auto rounded-full object-cover mb-4" src="https://i.pravatar.cc/150?img=7" alt="Team Member">
    <h2 class="text-lg font-semibold text-gray-800">James Wilson</h2>
    <p class="text-gray-500 text-sm">DevOps Engineer</p>
  </div>
  <div class="bg-white rounded-lg shadow-md p-4 text-center">
    <img class="w-24 h-24 mx-auto rounded-full object-cover mb-4" src="https://i.pravatar.cc/150?img=8" alt="Team Member">
    <h2 class="text-lg font-semibold text-gray-800">Isabella Clark</h2>
    <p class="text-gray-500 text-sm">Graphic Designer</p>
  </div>
  <!-- Tambahkan hingga 40 card -->
  <!-- Card terakhir -->
  <div class="bg-white rounded-lg shadow-md p-4 text-center">
    <img class="w-24 h-24 mx-auto rounded-full object-cover mb-4" src="https://i.pravatar.cc/150?img=40" alt="Team Member">
    <h2 class="text-lg font-semibold text-gray-800">Olivia Taylor</h2>
    <p class="text-gray-500 text-sm">Content Creator</p>
  </div>
  <div class="bg-white rounded-lg shadow-md p-4 text-center">
    <img class="w-24 h-24 mx-auto rounded-full object-cover mb-4" src="https://i.pravatar.cc/150?img=1" alt="Team Member">
    <h2 class="text-lg font-semibold text-gray-800">John Doe</h2>
    <p class="text-gray-500 text-sm">Web Developer</p>
  </div>
  <div class="bg-white rounded-lg shadow-md p-4 text-center">
    <img class="w-24 h-24 mx-auto rounded-full object-cover mb-4" src="https://i.pravatar.cc/150?img=2" alt="Team Member">
    <h2 class="text-lg font-semibold text-gray-800">Jane Smith</h2>
    <p class="text-gray-500 text-sm">UI/UX Designer</p>
  </div>
  <div class="bg-white rounded-lg shadow-md p-4 text-center">
    <img class="w-24 h-24 mx-auto rounded-full object-cover mb-4" src="https://i.pravatar.cc/150?img=3" alt="Team Member">
    <h2 class="text-lg font-semibold text-gray-800">Michael Brown</h2>
    <p class="text-gray-500 text-sm">Project Manager</p>
  </div>
  <div class="bg-white rounded-lg shadow-md p-4 text-center">
    <img class="w-24 h-24 mx-auto rounded-full object-cover mb-4" src="https://i.pravatar.cc/150?img=4" alt="Team Member">
    <h2 class="text-lg font-semibold text-gray-800">Emily Davis</h2>
    <p class="text-gray-500 text-sm">Software Engineer</p>
  </div>
  <div class="bg-white rounded-lg shadow-md p-4 text-center">
    <img class="w-24 h-24 mx-auto rounded-full object-cover mb-4" src="https://i.pravatar.cc/150?img=5" alt="Team Member">
    <h2 class="text-lg font-semibold text-gray-800">William Harris</h2>
    <p class="text-gray-500 text-sm">Data Scientist</p>
  </div>
  <div class="bg-white rounded-lg shadow-md p-4 text-center">
    <img class="w-24 h-24 mx-auto rounded-full object-cover mb-4" src="https://i.pravatar.cc/150?img=6" alt="Team Member">
    <h2 class="text-lg font-semibold text-gray-800">Sophia Martin</h2>
    <p class="text-gray-500 text-sm">Marketing Specialist</p>
  </div>
  <div class="bg-white rounded-lg shadow-md p-4 text-center">
    <img class="w-24 h-24 mx-auto rounded-full object-cover mb-4" src="https://i.pravatar.cc/150?img=7" alt="Team Member">
    <h2 class="text-lg font-semibold text-gray-800">James Wilson</h2>
    <p class="text-gray-500 text-sm">DevOps Engineer</p>
  </div>
  <div class="bg-white rounded-lg shadow-md p-4 text-center">
    <img class="w-24 h-24 mx-auto rounded-full object-cover mb-4" src="https://i.pravatar.cc/150?img=8" alt="Team Member">
    <h2 class="text-lg font-semibold text-gray-800">Isabella Clark</h2>
    <p class="text-gray-500 text-sm">Graphic Designer</p>
  </div>
  <!-- Tambahkan hingga 40 card -->
  <!-- Card terakhir -->
  <div class="bg-white rounded-lg shadow-md p-4 text-center">
    <img class="w-24 h-24 mx-auto rounded-full object-cover mb-4" src="https://i.pravatar.cc/150?img=40" alt="Team Member">
    <h2 class="text-lg font-semibold text-gray-800">Olivia Taylor</h2>
    <p class="text-gray-500 text-sm">Content Creator</p>
  </div>
  <div class="bg-white rounded-lg shadow-md p-4 text-center">
    <img class="w-24 h-24 mx-auto rounded-full object-cover mb-4" src="https://i.pravatar.cc/150?img=1" alt="Team Member">
    <h2 class="text-lg font-semibold text-gray-800">John Doe</h2>
    <p class="text-gray-500 text-sm">Web Developer</p>
  </div>
  <div class="bg-white rounded-lg shadow-md p-4 text-center">
    <img class="w-24 h-24 mx-auto rounded-full object-cover mb-4" src="https://i.pravatar.cc/150?img=2" alt="Team Member">
    <h2 class="text-lg font-semibold text-gray-800">Jane Smith</h2>
    <p class="text-gray-500 text-sm">UI/UX Designer</p>
  </div>
  <div class="bg-white rounded-lg shadow-md p-4 text-center">
    <img class="w-24 h-24 mx-auto rounded-full object-cover mb-4" src="https://i.pravatar.cc/150?img=3" alt="Team Member">
    <h2 class="text-lg font-semibold text-gray-800">Michael Brown</h2>
    <p class="text-gray-500 text-sm">Project Manager</p>
  </div>
  <div class="bg-white rounded-lg shadow-md p-4 text-center">
    <img class="w-24 h-24 mx-auto rounded-full object-cover mb-4" src="https://i.pravatar.cc/150?img=4" alt="Team Member">
    <h2 class="text-lg font-semibold text-gray-800">Emily Davis</h2>
    <p class="text-gray-500 text-sm">Software Engineer</p>
  </div>
  <div class="bg-white rounded-lg shadow-md p-4 text-center">
    <img class="w-24 h-24 mx-auto rounded-full object-cover mb-4" src="https://i.pravatar.cc/150?img=5" alt="Team Member">
    <h2 class="text-lg font-semibold text-gray-800">William Harris</h2>
    <p class="text-gray-500 text-sm">Data Scientist</p>
  </div>
  <div class="bg-white rounded-lg shadow-md p-4 text-center">
    <img class="w-24 h-24 mx-auto rounded-full object-cover mb-4" src="https://i.pravatar.cc/150?img=6" alt="Team Member">
    <h2 class="text-lg font-semibold text-gray-800">Sophia Martin</h2>
    <p class="text-gray-500 text-sm">Marketing Specialist</p>
  </div>
  <div class="bg-white rounded-lg shadow-md p-4 text-center">
    <img class="w-24 h-24 mx-auto rounded-full object-cover mb-4" src="https://i.pravatar.cc/150?img=7" alt="Team Member">
    <h2 class="text-lg font-semibold text-gray-800">James Wilson</h2>
    <p class="text-gray-500 text-sm">DevOps Engineer</p>
  </div>
  <div class="bg-white rounded-lg shadow-md p-4 text-center">
    <img class="w-24 h-24 mx-auto rounded-full object-cover mb-4" src="https://i.pravatar.cc/150?img=8" alt="Team Member">
    <h2 class="text-lg font-semibold text-gray-800">Isabella Clark</h2>
    <p class="text-gray-500 text-sm">Graphic Designer</p>
  </div>
  <!-- Tambahkan hingga 40 card -->
  <!-- Card terakhir -->
  <div class="bg-white rounded-lg shadow-md p-4 text-center">
    <img class="w-24 h-24 mx-auto rounded-full object-cover mb-4" src="https://i.pravatar.cc/150?img=40" alt="Team Member">
    <h2 class="text-lg font-semibold text-gray-800">Olivia Taylor</h2>
    <p class="text-gray-500 text-sm">Content Creator</p>
  </div>
  <div class="bg-white rounded-lg shadow-md p-4 text-center">
    <img class="w-24 h-24 mx-auto rounded-full object-cover mb-4" src="https://i.pravatar.cc/150?img=1" alt="Team Member">
    <h2 class="text-lg font-semibold text-gray-800">John Doe</h2>
    <p class="text-gray-500 text-sm">Web Developer</p>
  </div>
  <div class="bg-white rounded-lg shadow-md p-4 text-center">
    <img class="w-24 h-24 mx-auto rounded-full object-cover mb-4" src="https://i.pravatar.cc/150?img=2" alt="Team Member">
    <h2 class="text-lg font-semibold text-gray-800">Jane Smith</h2>
    <p class="text-gray-500 text-sm">UI/UX Designer</p>
  </div>
  <div class="bg-white rounded-lg shadow-md p-4 text-center">
    <img class="w-24 h-24 mx-auto rounded-full object-cover mb-4" src="https://i.pravatar.cc/150?img=3" alt="Team Member">
    <h2 class="text-lg font-semibold text-gray-800">Michael Brown</h2>
    <p class="text-gray-500 text-sm">Project Manager</p>
  </div>
  <div class="bg-white rounded-lg shadow-md p-4 text-center">
    <img class="w-24 h-24 mx-auto rounded-full object-cover mb-4" src="https://i.pravatar.cc/150?img=4" alt="Team Member">
    <h2 class="text-lg font-semibold text-gray-800">Emily Davis</h2>
    <p class="text-gray-500 text-sm">Software Engineer</p>
  </div>
  <div class="bg-white rounded-lg shadow-md p-4 text-center">
    <img class="w-24 h-24 mx-auto rounded-full object-cover mb-4" src="https://i.pravatar.cc/150?img=5" alt="Team Member">
    <h2 class="text-lg font-semibold text-gray-800">William Harris</h2>
    <p class="text-gray-500 text-sm">Data Scientist</p>
  </div>
  <div class="bg-white rounded-lg shadow-md p-4 text-center">
    <img class="w-24 h-24 mx-auto rounded-full object-cover mb-4" src="https://i.pravatar.cc/150?img=6" alt="Team Member">
    <h2 class="text-lg font-semibold text-gray-800">Sophia Martin</h2>
    <p class="text-gray-500 text-sm">Marketing Specialist</p>
  </div>
  <div class="bg-white rounded-lg shadow-md p-4 text-center">
    <img class="w-24 h-24 mx-auto rounded-full object-cover mb-4" src="https://i.pravatar.cc/150?img=7" alt="Team Member">
    <h2 class="text-lg font-semibold text-gray-800">James Wilson</h2>
    <p class="text-gray-500 text-sm">DevOps Engineer</p>
  </div>
  <div class="bg-white rounded-lg shadow-md p-4 text-center">
    <img class="w-24 h-24 mx-auto rounded-full object-cover mb-4" src="https://i.pravatar.cc/150?img=8" alt="Team Member">
    <h2 class="text-lg font-semibold text-gray-800">Isabella Clark</h2>
    <p class="text-gray-500 text-sm">Graphic Designer</p>
  </div>
  <!-- Tambahkan hingga 40 card -->
  <!-- Card terakhir -->
  <div class="bg-white rounded-lg shadow-md p-4 text-center">
    <img class="w-24 h-24 mx-auto rounded-full object-cover mb-4" src="https://i.pravatar.cc/150?img=40" alt="Team Member">
    <h2 class="text-lg font-semibold text-gray-800">Olivia Taylor</h2>
    <p class="text-gray-500 text-sm">Content Creator</p>
  </div>
  <div class="bg-white rounded-lg shadow-md p-4 text-center">
    <img class="w-24 h-24 mx-auto rounded-full object-cover mb-4" src="https://i.pravatar.cc/150?img=1" alt="Team Member">
    <h2 class="text-lg font-semibold text-gray-800">John Doe</h2>
    <p class="text-gray-500 text-sm">Web Developer</p>
  </div>
  <div class="bg-white rounded-lg shadow-md p-4 text-center">
    <img class="w-24 h-24 mx-auto rounded-full object-cover mb-4" src="https://i.pravatar.cc/150?img=2" alt="Team Member">
    <h2 class="text-lg font-semibold text-gray-800">Jane Smith</h2>
    <p class="text-gray-500 text-sm">UI/UX Designer</p>
  </div>
  <div class="bg-white rounded-lg shadow-md p-4 text-center">
    <img class="w-24 h-24 mx-auto rounded-full object-cover mb-4" src="https://i.pravatar.cc/150?img=3" alt="Team Member">
    <h2 class="text-lg font-semibold text-gray-800">Michael Brown</h2>
    <p class="text-gray-500 text-sm">Project Manager</p>
  </div>
  <div class="bg-white rounded-lg shadow-md p-4 text-center">
    <img class="w-24 h-24 mx-auto rounded-full object-cover mb-4" src="https://i.pravatar.cc/150?img=4" alt="Team Member">
    <h2 class="text-lg font-semibold text-gray-800">Emily Davis</h2>
    <p class="text-gray-500 text-sm">Software Engineer</p>
  </div>
  <div class="bg-white rounded-lg shadow-md p-4 text-center">
    <img class="w-24 h-24 mx-auto rounded-full object-cover mb-4" src="https://i.pravatar.cc/150?img=5" alt="Team Member">
    <h2 class="text-lg font-semibold text-gray-800">William Harris</h2>
    <p class="text-gray-500 text-sm">Data Scientist</p>
  </div>
  <div class="bg-white rounded-lg shadow-md p-4 text-center">
    <img class="w-24 h-24 mx-auto rounded-full object-cover mb-4" src="https://i.pravatar.cc/150?img=6" alt="Team Member">
    <h2 class="text-lg font-semibold text-gray-800">Sophia Martin</h2>
    <p class="text-gray-500 text-sm">Marketing Specialist</p>
  </div>
  <div class="bg-white rounded-lg shadow-md p-4 text-center">
    <img class="w-24 h-24 mx-auto rounded-full object-cover mb-4" src="https://i.pravatar.cc/150?img=7" alt="Team Member">
    <h2 class="text-lg font-semibold text-gray-800">James Wilson</h2>
    <p class="text-gray-500 text-sm">DevOps Engineer</p>
  </div>
  <div class="bg-white rounded-lg shadow-md p-4 text-center">
    <img class="w-24 h-24 mx-auto rounded-full object-cover mb-4" src="https://i.pravatar.cc/150?img=8" alt="Team Member">
    <h2 class="text-lg font-semibold text-gray-800">Isabella Clark</h2>
    <p class="text-gray-500 text-sm">Graphic Designer</p>
  </div>
  <!-- Tambahkan hingga 40 card -->
  <!-- Card terakhir -->
  <div class="bg-white rounded-lg shadow-md p-4 text-center">
    <img class="w-24 h-24 mx-auto rounded-full object-cover mb-4" src="https://i.pravatar.cc/150?img=40" alt="Team Member">
    <h2 class="text-lg font-semibold text-gray-800">Olivia Taylor</h2>
    <p class="text-gray-500 text-sm">Content Creator</p>
  </div>
  <div class="bg-white rounded-lg shadow-md p-4 text-center">
    <img class="w-24 h-24 mx-auto rounded-full object-cover mb-4" src="https://i.pravatar.cc/150?img=1" alt="Team Member">
    <h2 class="text-lg font-semibold text-gray-800">John Doe</h2>
    <p class="text-gray-500 text-sm">Web Developer</p>
  </div>
  <div class="bg-white rounded-lg shadow-md p-4 text-center">
    <img class="w-24 h-24 mx-auto rounded-full object-cover mb-4" src="https://i.pravatar.cc/150?img=2" alt="Team Member">
    <h2 class="text-lg font-semibold text-gray-800">Jane Smith</h2>
    <p class="text-gray-500 text-sm">UI/UX Designer</p>
  </div>
  <div class="bg-white rounded-lg shadow-md p-4 text-center">
    <img class="w-24 h-24 mx-auto rounded-full object-cover mb-4" src="https://i.pravatar.cc/150?img=3" alt="Team Member">
    <h2 class="text-lg font-semibold text-gray-800">Michael Brown</h2>
    <p class="text-gray-500 text-sm">Project Manager</p>
  </div>
  <div class="bg-white rounded-lg shadow-md p-4 text-center">
    <img class="w-24 h-24 mx-auto rounded-full object-cover mb-4" src="https://i.pravatar.cc/150?img=4" alt="Team Member">
    <h2 class="text-lg font-semibold text-gray-800">Emily Davis</h2>
    <p class="text-gray-500 text-sm">Software Engineer</p>
  </div>
  <div class="bg-white rounded-lg shadow-md p-4 text-center">
    <img class="w-24 h-24 mx-auto rounded-full object-cover mb-4" src="https://i.pravatar.cc/150?img=5" alt="Team Member">
    <h2 class="text-lg font-semibold text-gray-800">William Harris</h2>
    <p class="text-gray-500 text-sm">Data Scientist</p>
  </div>
  <div class="bg-white rounded-lg shadow-md p-4 text-center">
    <img class="w-24 h-24 mx-auto rounded-full object-cover mb-4" src="https://i.pravatar.cc/150?img=6" alt="Team Member">
    <h2 class="text-lg font-semibold text-gray-800">Sophia Martin</h2>
    <p class="text-gray-500 text-sm">Marketing Specialist</p>
  </div>
  <div class="bg-white rounded-lg shadow-md p-4 text-center">
    <img class="w-24 h-24 mx-auto rounded-full object-cover mb-4" src="https://i.pravatar.cc/150?img=2" alt="Team Member">
    <h2 class="text-lg font-semibold text-gray-800">Jane Smith</h2>
    <p class="text-gray-500 text-sm">UI/UX Designer</p>
  </div>
 
  
</div>
      <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

</body>
</html>