<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="stylesheet" href="./public/css/output.css" />
   <link rel="stylesheet" href="./public/css/owl.carousel.min.css" />
   <link rel="stylesheet" href="./public/css/owl.theme.default.min.css" />
   <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.tailwindcss.css">
   <link rel="stylesheet" href="./public/css/style.css">
   <!-- JS FILES -->

   <!-- datatable -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
   <script src="./public/js/owl.carousel.js"></script>

   <!-- fontawasome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
      integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!-- fontawasome -->

   <!-- datatable -->
   <title>وب سایت ابزار وی پی ان</title>

</head>

<body>
   <!-- nav -->
   <nav class="w-full h-[50px] md:h-[70px] border-gray-200 border bg-white shadow-sm">
      <div class="w-full md:hidden flex justify-between h-full items-center p-3">
         <span id="btnNavRight" class="cursor-pointer"> <i class="fa-solid fa-align-right fa-beat-fade fa-lg"></i></span>
        
      </div>


      <div class=" gap-x-4 hidden md:flex w-11/12 m-auto  items-center h-full   ">

         <!-- Dropdown Menu -->
         <div class="grow flex items-center ">
            <a href="#" class="h-full flex items-center text-lg">
               <span>وی پی ان</span>
            </a>
            <ul id="nav_menu" class="flex h-full items-center gap-x-4 text-clamp">
               <!-- <li data-time="1" id="subItem00"
               class=" h-full relative font-Yekan flex items-center gap-1 px-2 transition   ease-in-out delay-150 ">
               <a href="#" class=" text-gray-700 hover:text-green_snap"> سوپر اسنپ </a>
               <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"
                  class="bi bi-chevron-down" viewBox="0 0 16 16">
                  <path fill-rule="evenodd"
                     d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
               </svg>

               <ul
                  class="text-clamp z-10 hidden shadow-sm absolute border p-1.5  top-[48px] w-[200px] bg-gray-50  flex-col gap-3  items-center rounded text-text_nav border-t-0  leading-9">
                  <li class="py-1 text-gray-800 ">
                     <a href="#" class="hover:text-green_snap">اپلیکیشن سازمانی</a>
                  </li>
                  <li class="py-1 text-gray-800">
                     <a href="#" class="hover:text-green_snap">نرم افزار مدیریت</a>
                  </li>

               </ul>
            </li> -->

               <li data-time="5" class="font-Yekan hover:text-green_snap text-gray-700 px-2">
                  <a href="#"> تعرفه قیمت ها </a>
               </li>
               <li data-time="6"
                  class="group/item font-Yekan hover:text-green_snap flex px-2 items-center gap-1 text-gray-700">
                  <a href="#"> آموزش نصب وفعالسازی </a>
               </li>

            </ul>
         </div>
         <div>
            <a href="./register.php"
               class="font-Yekan  border-red-400 text-neutral-700 rounded px-3.5 shadow-md cursor-pointer border gap-2 flex hover:bg-slate-100 transition ease-in-out duration-200 ">
               <span class="p-0.5">
                  <i class="fa-solid fa-arrow-right-to-bracket fa-flip-horizontal"></i>
               </span>
               <span>
                  ثبت نام&nbsp;&nbsp;/&nbsp;&nbsp;ورود
               </span>
            </a>
         </div>

      </div>


      <!-- sidebar right in mobile application -->
      <section>
         <div id="nav_right" class="bg-transparent  w-full  min-h-screen md:hidden ">
            <div id="siRight" class="w-1/2 translate-x-full relative  z-10 transition  bg-white h-screen shadow-2xl ">
               <ul id="subMenuMobile" class="">
                  <li
                     class="font-Yekan text-sm  flex p-3 border-b items-center justify-between cursor-pointer  text-clamp">


                     <a href="#"
                        class="font-Yekan text-clamp  border-red-400 text-neutral-700 rounded px-3.5 py-0.5 shadow-md cursor-pointer border-2 gap-2 flex">

                        ثبت نام&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;ورود
                     </a>
                  </li>

                  <!-- <li>
                     <a href="#"
                        class="font-Yekan text-sm  flex p-3 border-b items-center justify-between cursor-pointer ">
                        <span> سوپر اسنپ</span>
                        <svg c xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"
                           class="bi bi-chevron-down  " viewBox="0 0 16 16">
                           <path fill-rule="evenodd"
                              d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                        </svg>
                     </a>


                     <ul class=" hidden border-r-4 border-red-400">
                        <li class="py-1 text-gray-800  flex gap-2 pt-3 px-3 ">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                              class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                              <path fill-rule="evenodd"
                                 d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5" />
                           </svg>
                           <a href="#" class="hover:text-green_snap font-Yekan text-sm ">اپلیکیشن سازمانی</a>
                        </li>
                        <li class="py-1 text-gray-800  flex gap-2 pt-3 px-3 ">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                              class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                              <path fill-rule="evenodd"
                                 d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5" />
                           </svg>
                           <a href="#" class="hover:text-green_snap font-Yekan text-sm ">نرم افزار مدیریت</a>
                        </li>

                     </ul>
                  </li> -->

                  <li class="font-Yekan text-sm flex p-3 border-b items-center cursor-pointer ">
                     <span class="font-Yekan flex items-center p-1.5"><i class="fa-solid fa-file-invoice-dollar fa-lg"></i></span>
                     <a href="#"> تعرفه قیمت ها </a>
                  </li>
                  <li class="font-Yekan text-sm flex p-3 border-b items-center cursor-pointer ">
                     <span class="font-Yekan flex items-center p-1.5"><i class="fa-solid fa-chalkboard-user fa-lg"></i></span>
                     <a href="#"> آموزش نصب وفعالسازی </a>
                  </li>




               </ul>
               <span id="idCloseNav" class="absolute hidden cursor-pointer border bg-red-300 text-white rounded-md p-1"
                  style="top: 0; left: -27px;">
                  <i class="fa-solid fa-xmark px-1.5"></i>
               </span>

            </div>

         </div>
      </section>
   </nav>
   <!-- nav -->

   <!-- main  -->
   <main class=" ">
      <!-- baner main  -->
      <div class="w-full container m-auto">
         <!-- banner new  -->
         <p class=" animate-typing text-xl md:text-2xl lg:text-3xl font-Yekan  text-clamp w-full text-center  p-3.5  text-red-600 bg-white"
            data-animate-loop="true" data-type-speed="200" data-type-delay="200" data-remove-speed="50"
            data-remove-delay="500" data-cursor-speed="200">
            | تجربه یک وی پی ان پرسرعت
            |بدون قطعی
            |آپ تایم 99 درصد
         </p>
         <img class="w-full " src="./public/images/download_bg.jpg" alt="">
         <!-- banner new  -->

      </div>

      <!-- speed and save monay -->
      <div class=" my-4 md:my-0">
         <div class="flex w-11/12 m-auto  bg-transparent rounded shadow-xl">
            <ul class="flex w-full gap-4 shadow-xl text-clamp">
               <li class="flex flex-1 flex-col font-Yekan items-center gap-3 my-4">
                  <svg class="size-11" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" width="64px"
                     height="64px" fill="#000000">
                     <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                     <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                     <g id="SVGRepo_iconCarrier">
                        <path style="fill:#5e2fb6;"
                           d="M368,512H144c-17.6,0-32-14.4-32-32V32c0-17.6,14.4-32,32-32h224c17.6,0,32,14.4,32,32v448 C400,497.6,385.6,512,368,512z">
                        </path>
                        <rect x="135.456" y="50.672" style="fill:#0BA4E0;" width="241.28" height="372"></rect>
                        <g>
                           <path style="fill:#D6D6D6;"
                              d="M256.176,489.44c-12.496,0-22.656-10.16-22.656-22.656s10.16-22.672,22.656-22.672 s22.672,10.176,22.672,22.672S268.672,489.44,256.176,489.44z M256.176,452.112c-8.08,0-14.656,6.576-14.656,14.672 c0,8.08,6.576,14.656,14.656,14.656c8.096,0,14.672-6.576,14.672-14.656C270.848,458.688,264.272,452.112,256.176,452.112z">
                           </path>
                           <circle style="fill:#D6D6D6;" cx="256.16" cy="25.328" r="7.792"></circle>
                           <circle style="fill:#D6D6D6;" cx="312.816" cy="25.328" r="7.792"></circle>
                           <circle style="fill:#D6D6D6;" cx="337.44" cy="25.328" r="7.792"></circle>
                        </g>
                        <g>
                           <rect x="169.904" y="285.008" style="fill:#FFFFFF;" width="48.928" height="16"></rect>
                           <rect x="169.904" y="247.456" style="fill:#FFFFFF;" width="90.016" height="16"></rect>
                           <rect x="169.904" y="209.92" style="fill:#FFFFFF;" width="131.104" height="16"></rect>
                           <rect x="169.904" y="172.336" style="fill:#FFFFFF;" width="172.192" height="16"></rect>
                        </g>
                     </g>
                  </svg>
                  <p class="text-center text-xs md:text-sm">قابل اجرا در تمامی سیستم عامل های موبای </p>
               </li>
               <li class="flex   flex-1 flex-col font-Yekan items-center gap-3 my-4">
                  <svg class="size-11" height="64px" width="64px" version="1.1" id="Layer_1"
                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512"
                     xml:space="preserve" fill="#000000">
                     <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                     <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                     <g id="SVGRepo_iconCarrier">
                        <path style="fill:#000000;"
                           d="M418.432,313.703c0.05,6.792-3.971,12.908-10.132,15.765c-38.769,17.983-92.665,29.146-152.3,29.146 s-113.531-11.162-152.301-29.146c-6.161-2.858-10.182-8.974-10.132-15.765C94.782,150.473,124.642,8.017,256,8.017 S417.218,150.473,418.432,313.703z">
                        </path>
                        <path style="fill:#E6AF78;"
                           d="M315.858,340.124v-41.368H196.142v41.368c0,11.042-7.065,20.846-17.542,24.337l-81.491,27.164 c-17.458,5.82-29.234,22.158-29.234,40.561v54.695c0,9.446,7.656,17.102,17.102,17.102h342.046c9.446,0,17.102-7.656,17.102-17.102 v-54.695c0-18.403-11.776-34.742-29.235-40.561l-81.491-27.164C322.923,360.969,315.858,351.166,315.858,340.124z">
                        </path>
                        <path style="fill:#D29B6E;"
                           d="M196.142,340.124c0,10.35-6.251,19.542-15.655,23.537c95.822,16.331,135.344-52.079,135.344-52.079 l0.027-0.018v-12.809H196.142V340.124z">
                        </path>
                        <path style="fill:#E4EAF6;"
                           d="M414.89,391.624l-66.588-22.196c-31.692,42.995-68.683,67.021-92.302,74.696 c-23.618-7.676-60.609-31.701-92.302-74.696L97.11,391.624c-17.459,5.82-29.235,22.158-29.235,40.561v54.695 c0,9.445,7.658,17.102,17.102,17.102h342.046c9.445,0,17.102-7.658,17.102-17.102v-54.695 C444.125,413.783,432.349,397.445,414.89,391.624z">
                        </path>
                        <g>
                           <path style="fill:#D7DEED;"
                              d="M126.265,451.209l-47.436-47.436c-6.839,7.661-10.954,17.648-10.954,28.413v54.695 c0,9.446,7.656,17.102,17.102,17.102h51.307v-28.588C136.284,466.324,132.681,457.624,126.265,451.209z">
                           </path>
                           <path style="fill:#D7DEED;"
                              d="M385.735,451.209l47.436-47.436c6.839,7.661,10.954,17.648,10.954,28.413v54.695 c0,9.446-7.656,17.102-17.102,17.102h-51.307v-28.588C375.716,466.324,379.319,457.624,385.735,451.209z">
                           </path>
                        </g>
                        <g>
                           <path style="fill:#707487;"
                              d="M146.267,187.677l-9.93-0.032c-9.466-0.03-17.157,7.636-17.157,17.102v33.806 c0,9.578,7.866,17.289,17.443,17.099l14.739-0.294L146.267,187.677z">
                           </path>
                           <path style="fill:#707487;"
                              d="M365.733,187.677l9.93-0.032c9.466-0.03,17.157,7.636,17.157,17.102v33.806 c0,9.578-7.866,17.289-17.443,17.099l-14.739-0.294L365.733,187.677z">
                           </path>
                        </g>
                        <path style="fill:#F0C087;"
                           d="M144.835,110.63V147.5c0,15.32,0.588,30.635,1.763,45.909l4.928,64.058 c1.178,15.312,9.152,29.291,21.733,38.097l51.638,36.147c9.112,6.379,19.967,9.801,31.09,9.801h0.026 c11.123,0,21.978-3.422,31.09-9.801l51.638-36.147c12.581-8.807,20.556-22.786,21.733-38.098l4.928-64.058 c1.175-15.274,1.763-30.59,1.763-45.909V110.63H144.835z">
                        </path>
                        <path style="fill:#E6AF78;"
                           d="M366.524,110.63H144.835v36.871c0,4.751,0.16,9.499,0.274,14.248l0,0v0.003 c0.136,5.71,0.353,11.416,0.652,17.119c0,0.001,0,0.003,0,0.003v0.001c0.254,4.845,0.466,9.693,0.838,14.532l4.928,64.058 c1.178,15.312,9.152,29.291,21.734,38.098l51.638,36.147c9.112,6.378,19.967,9.8,31.09,9.8c-13.722,0-28.803-23.62-38.266-41.533 c-6.234-11.8-9.56-24.88-9.809-38.223l-1.444-71.012c-0.114-6.157,4.346-11.394,10.413-12.447 c45.858-7.959,82.26-20.963,103.069-30.151c16.496,27.269,38.225,35.425,41.041,36.387l2.69,0.919h2.548 c0.3-5.698,0.52-17.811,0.657-23.516L366.524,110.63z">
                        </path>
                        <path style="fill:#000000;"
                           d="M136.284,102.079v59.858c101.31,0,178.429-35.27,191.346-43.063 c13.882,34.511,38.894,43.063,38.894,43.063h9.193v-59.858H136.284z">
                        </path>
                        <path style="fill:#D7DEED;"
                           d="M249.952,463.694l6.048,2.124l6.048-2.124c27.741-9.749,69.228-37.731,106.406-87.547l-20.153-6.718 c-31.692,42.995-68.683,67.021-92.302,74.696c-23.618-7.676-60.609-31.701-92.302-74.696l-20.153,6.718 C180.724,425.962,222.211,453.944,249.952,463.694z">
                        </path>
                        <path
                           d="M417.425,384.019l-66.477-22.158c-0.02-0.007-0.041-0.014-0.061-0.02l-9.522-3.174c26.12-5.109,50.186-12.59,70.31-21.925 c9.048-4.198,14.848-13.263,14.775-23.098C425.446,179.001,406.687,0,256,0S86.554,179.001,85.551,313.644 c-0.073,9.834,5.727,18.9,14.775,23.097c20.124,9.334,44.189,16.815,70.309,21.924l-9.529,3.177 c-0.017,0.005-0.033,0.011-0.049,0.016l-66.481,22.16c-20.766,6.922-34.718,26.28-34.718,48.168v54.695 c0,13.851,11.268,25.119,25.119,25.119h342.046c13.851,0,25.119-11.268,25.119-25.119v-54.695 C452.142,410.298,438.191,390.94,417.425,384.019z M138.83,195.671l3.906,51.842l-6.271,0.125c-2.456,0.048-4.784-0.873-6.542-2.595 c-1.757-1.723-2.726-4.028-2.726-6.488v-33.806c0-2.432,0.949-4.717,2.671-6.435c1.722-1.718,3.983-2.649,6.443-2.651 L138.83,195.671z M154.266,187.139c-0.369-5.481-0.665-11.294-0.897-17.612c81.795-3.128,146.125-27.732,170.463-39.578 c11.279,22.484,26.854,33.022,34.882,37.225c-0.243,7.209-0.564,13.773-0.979,19.933l-5.255,69.745 c-0.311,4.042-1.175,7.961-2.538,11.668c-10.848,8.708-29.551,16.743-61.731,18.354c-3.046-7.738-10.578-13.237-19.385-13.237 h-8.551c-11.493,0-20.843,9.351-20.843,20.843c0,11.493,9.351,20.843,20.843,20.843h8.551c8.475,0,15.772-5.092,19.026-12.371 c12.315-0.562,22.99-2.027,32.253-4.129l-37.599,26.32c-7.805,5.463-16.967,8.351-26.518,8.351c-9.527,0-18.687-2.888-26.494-8.351 l-51.638-36.147c-10.656-7.46-17.34-19.175-18.336-32.132L154.266,187.139z M375.535,247.637l-6.271-0.125l3.906-51.842l2.517-0.009 c2.408-0.007,4.72,0.934,6.443,2.651c1.722,1.717,2.671,4.002,2.671,6.435v33.806c0,2.462-0.968,4.765-2.726,6.488 C380.319,246.764,378.011,247.693,375.535,247.637z M273.637,294.48c0,2.652-2.158,4.81-4.81,4.81h-8.551 c-2.652,0-4.81-2.158-4.81-4.81s2.158-4.81,4.81-4.81h8.551C271.479,289.67,273.637,291.828,273.637,294.48z M204.159,340.124 v-13.143L220.3,338.28c10.514,7.359,22.854,11.249,35.713,11.249c12.833,0,25.174-3.89,35.687-11.249l16.141-11.3v13.144 c0,14.516,9.252,27.352,23.023,31.942l4.165,1.389c-19.469,23.938-49.238,51.563-79.031,62.201 c-29.792-10.638-59.562-38.263-79.031-62.201l4.165-1.389C194.906,367.476,204.159,354.639,204.159,340.124z M101.584,313.763 c0.698-93.765,11.088-162.768,31.762-210.953C158.401,44.419,198.522,16.033,256,16.033s97.599,28.386,122.653,86.777 c20.675,48.185,31.065,117.188,31.762,210.951c0.027,3.565-2.128,6.875-5.489,8.435c-22.393,10.386-50.12,18.373-80.259,23.143 c-0.513-1.659-0.794-3.411-0.794-5.215v-24.266c0-0.033-0.004-0.065-0.005-0.098l19.469-13.628 c8.824-6.176,15.642-14.491,19.973-24.022c5.389-4.915,9.095-9.939,11.64-14.447c0,0,0.608,0.011,0.779,0.011 c6.611,0,12.833-2.539,17.569-7.182c4.859-4.763,7.535-11.134,7.535-17.938v-33.806c0-6.724-2.623-13.043-7.385-17.79 c-4.763-4.748-11.094-7.368-17.814-7.329l-1.4,0.004c0.28-5.451,0.501-11.23,0.67-17.48c0.059-2.162-0.76-4.257-2.269-5.808 c-1.154-1.185-2.637-1.976-4.238-2.282c-4.032-1.707-22.294-10.739-33.332-38.18c-0.877-2.181-2.666-3.866-4.895-4.611 c-2.23-0.745-4.672-0.475-6.684,0.739c-12.968,7.823-85.499,39.837-178.547,41.723c-2.135,0.044-4.164,0.936-5.637,2.481 c-1.474,1.545-2.271,3.614-2.214,5.749c0.169,6.324,0.392,12.159,0.674,17.67l-1.4-0.004c-0.028,0-0.055,0-0.082,0 c-6.694,0-12.988,2.602-17.732,7.329c-4.763,4.747-7.385,11.065-7.385,17.79v33.806c0,6.805,2.675,13.175,7.535,17.938 c4.736,4.643,10.957,7.182,17.569,7.182c0.172,0,7.954-0.154,7.954-0.154c2.647,15.581,11.344,29.446,24.439,38.613l19.469,13.628 c0,0.033-0.005,0.065-0.005,0.098v24.266c0,1.804-0.281,3.556-0.794,5.215c-30.139-4.769-57.866-12.756-80.259-23.143 C103.712,320.637,101.558,317.327,101.584,313.763z M99.645,399.23l61.124-20.375c32.24,41.908,68.772,65.101,92.753,72.894 c0.805,0.262,1.642,0.392,2.478,0.392c0.836,0,1.673-0.13,2.478-0.392c23.982-7.794,60.513-30.987,92.753-72.894l61.124,20.375 c3.381,1.128,6.487,2.748,9.275,4.748l-41.564,41.563c-7.974,7.975-12.366,18.577-12.366,29.855v20.571H144.301v-20.571 c0-11.278-4.392-21.88-12.366-29.855l-41.564-41.563C93.158,401.978,96.265,400.357,99.645,399.23z M75.891,486.881v-54.695 c0-5.741,1.413-11.221,3.943-16.071l40.762,40.762c4.946,4.947,7.67,11.523,7.67,18.518v20.572h-43.29 C79.967,495.967,75.891,491.891,75.891,486.881z M436.109,486.881c0,5.01-4.076,9.086-9.086,9.086h-43.29v-20.571 c0-6.995,2.724-13.571,7.67-18.518l40.762-40.762c2.53,4.85,3.943,10.33,3.943,16.071V486.881z">
                        </path>
                     </g>
                  </svg>
                  <p class=" text-center text-xs md:text-sm">پشتیبانی 7 روز هفته 24 ساعته </p>
               </li>
               <li class="flex   flex-1 flex-col font-Yekan items-center gap-3 my-4 ">
                  <svg class="size-11" height="64px" width="64px" version="1.1" id="Layer_1"
                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512"
                     xml:space="preserve" fill="#000000">
                     <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                     <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                     <g id="SVGRepo_iconCarrier">
                        <circle style="fill:#c3e5da;" cx="256" cy="256" r="245.106"></circle>
                        <path style="fill:#FF7D46;"
                           d="M267.385,299.566c-24.062,0.421-43.908-18.746-44.328-42.808 c-0.421-24.062,18.746-43.908,42.808-44.328c24.062-0.419,191.668,40.236,191.668,40.236S291.447,299.146,267.385,299.566z">
                        </path>
                        <g>
                           <path style="fill:#1d1618;"
                              d="M437.019,74.981C388.667,26.628,324.38,0,256,0S123.333,26.628,74.981,74.981 C26.628,123.332,0,187.62,0,256s26.628,132.667,74.981,181.019S187.62,512,256,512s132.667-26.628,181.019-74.981 S512,324.38,512,256S485.372,123.332,437.019,74.981z M256,490.213C126.854,490.213,21.787,385.145,21.787,256 S126.854,21.787,256,21.787S490.213,126.855,490.213,256S385.146,490.213,256,490.213z">
                           </path>
                           <path style="fill:#1d1618;"
                              d="M468.426,256c0-36.93-9.67-73.281-27.949-105.215c-0.151-0.338-0.321-0.671-0.511-0.998 c-3.008-5.208-9.667-6.995-14.881-3.987l-31.977,18.461c-5.21,3.008-6.996,9.67-3.987,14.881c2.019,3.495,5.679,5.448,9.445,5.448 c1.848,0,3.72-0.471,5.436-1.461l22.235-12.837c10.762,21.317,17.41,44.535,19.59,68.353 c-42.8-10.233-158.855-37.466-180.154-37.107c-14.546,0.254-28.123,6.157-38.23,16.623s-15.533,24.24-15.278,38.788 c0.519,29.708,24.849,53.519,54.445,53.517c0.32,0,0.644-0.003,0.965-0.009c21.313-0.373,136.285-31.633,178.721-43.363 c-1.519,26.001-8.356,51.431-20.06,74.613l-22.235-12.837c-5.211-3.009-11.874-1.223-14.881,3.987 c-3.009,5.21-1.223,11.873,3.987,14.881l31.977,18.461c1.716,0.99,3.588,1.461,5.436,1.461c3.765,0,7.427-1.953,9.445-5.448 c0.188-0.327,0.358-0.659,0.51-0.997C458.755,329.281,468.426,292.93,468.426,256z M267.194,288.674 c-18.044,0.322-32.931-14.089-33.247-32.106c-0.153-8.728,3.104-16.993,9.168-23.272c6.063-6.28,14.21-9.822,22.939-9.974 c0.1-0.001,0.203-0.002,0.308-0.002c14.24,0,85.508,15.615,147.38,30.111C351.954,270.201,280.675,288.439,267.194,288.674z">
                           </path>
                           <path style="fill:#1d1618;"
                              d="M256,102.285c6.015,0,10.894-4.877,10.894-10.894V54.468c0-6.017-4.878-10.894-10.894-10.894 s-10.894,4.877-10.894,10.894v36.923C245.106,97.407,249.985,102.285,256,102.285z">
                           </path>
                           <path style="fill:#1d1618;"
                              d="M102.286,256c0-6.017-4.878-10.894-10.894-10.894H54.468c-6.015,0-10.894,4.877-10.894,10.894 c0,6.017,4.878,10.894,10.894,10.894h36.924C97.407,266.894,102.286,262.017,102.286,256z">
                           </path>
                           <path style="fill:#1d1618;"
                              d="M107.998,328.871l-31.977,18.461c-5.21,3.008-6.996,9.67-3.987,14.881 c2.019,3.495,5.679,5.448,9.445,5.448c1.848,0,3.721-0.471,5.436-1.461l31.977-18.461c5.21-3.008,6.996-9.67,3.987-14.881 C119.87,327.648,113.209,325.862,107.998,328.871z">
                           </path>
                           <path style="fill:#1d1618;"
                              d="M164.668,76.021c-3.009-5.209-9.669-6.996-14.881-3.987c-5.21,3.008-6.996,9.67-3.987,14.881 l18.461,31.976c2.019,3.495,5.679,5.448,9.445,5.448c1.848,0,3.721-0.471,5.436-1.461c5.21-3.008,6.996-9.67,3.987-14.881 L164.668,76.021z">
                           </path>
                           <path style="fill:#1d1618;"
                              d="M118.892,164.262L86.915,145.8c-5.213-3.009-11.874-1.222-14.881,3.987 c-3.009,5.21-1.223,11.873,3.987,14.881l31.977,18.461c1.716,0.991,3.588,1.461,5.436,1.461c3.765,0,7.427-1.953,9.445-5.448 C125.888,173.932,124.102,167.269,118.892,164.262z">
                           </path>
                           <path style="fill:#1d1618;"
                              d="M332.858,122.878c1.716,0.99,3.588,1.461,5.436,1.461c3.765,0,7.426-1.953,9.445-5.448L366.2,86.915 c3.009-5.21,1.223-11.873-3.987-14.881c-5.212-3.009-11.872-1.223-14.881,3.987l-18.461,31.976 C325.862,113.208,327.647,119.87,332.858,122.878z">
                           </path>
                           <path style="fill:#1d1618;"
                              d="M312.647,381.161h-73.895c-6.015,0-10.894,4.877-10.894,10.894c0,6.017,4.878,10.894,10.894,10.894 h73.895c6.015,0,10.894-4.877,10.894-10.894C323.54,386.038,318.662,381.161,312.647,381.161z">
                           </path>
                           <path style="fill:#1d1618;"
                              d="M200.443,381.161h-1.089c-6.015,0-10.894,4.877-10.894,10.894c0,6.017,4.878,10.894,10.894,10.894 h1.089c6.015,0,10.894-4.877,10.894-10.894C211.336,386.038,206.458,381.161,200.443,381.161z">
                           </path>
                        </g>
                     </g>
                  </svg>
                  <p class=" text-center text-xs md:text-sm">سرعت فوق العاده بالا </p>
               </li>
               <li class="flex flex-1 flex-col font-Yekan items-center gap-3 my-4">
                  <svg class="size-11" height="64px" width="64px" version="1.1" id="Layer_1"
                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512"
                     xml:space="preserve" fill="#000000">
                     <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                     <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                     <g id="SVGRepo_iconCarrier">
                        <path style="fill:#EFEFEF;"
                           d="M500.989,331.04v13.29c0,20.622-16.714,37.337-37.326,37.337H48.337 c-20.612,0-37.326-16.715-37.326-37.337v-13.29H500.989z">
                        </path>
                        <path style="fill:#FF7D46;"
                           d="M500.989,68.566V331.04H11.011V68.566c0-20.612,16.714-37.326,37.326-37.326h415.326 C484.275,31.239,500.989,47.955,500.989,68.566z">
                        </path>
                        <path style="fill:#D1D5D8;"
                           d="M333.076,480.762c-51.384,0-102.767,0-154.151,0c12.022-32.827,17.426-66.269,17.734-99.097 c39.561,0,79.121,0,118.683,0C315.651,414.493,321.055,447.934,333.076,480.762z">
                        </path>
                        <g>
                           <path style="fill:#000000;"
                              d="M390.883,69.163c-6.081,0-11.011,4.931-11.011,11.011v0.524c0,6.08,4.93,11.011,11.011,11.011 c6.081,0,11.011-4.931,11.011-11.011v-0.524C401.894,74.094,396.964,69.163,390.883,69.163z">
                           </path>
                           <path style="fill:#000000;"
                              d="M463.663,20.228H48.337C21.683,20.228,0,41.912,0,68.566V344.33 c0,26.659,21.683,48.348,48.337,48.348h136.994c-1.233,26.663-6.005,52.508-14.227,77.072h-33.468 c-6.081,0-11.011,4.931-11.011,11.011s4.93,11.011,11.011,11.011h236.731c6.081,0,11.011-4.931,11.011-11.011 s-4.93-11.011-11.011-11.011h-33.468c-8.221-24.565-12.993-50.411-14.227-77.072h136.991c26.654,0,48.337-21.689,48.337-48.348 V68.566C512,41.912,490.317,20.228,463.663,20.228z M194.244,469.751c7.593-24.705,11.997-50.529,13.14-77.072h97.233 c1.143,26.541,5.548,52.367,13.141,77.072H194.244z M489.979,344.331c0,14.518-11.805,26.327-26.316,26.327H48.337 c-14.511,0-26.316-11.81-26.316-26.327v-2.279h467.957V344.331z M489.979,320.029H22.022V68.566 c0-14.511,11.805-26.316,26.316-26.316h415.326c14.511,0,26.316,11.806,26.316,26.316V320.029z">
                           </path>
                           <path style="fill:#000000;"
                              d="M121.119,218.91c-6.081,0-11.011,4.931-11.011,11.011v53.953c0,6.08,4.93,11.011,11.011,11.011 c6.081,0,11.011-4.931,11.011-11.011V229.92C132.13,223.84,127.201,218.91,121.119,218.91z">
                           </path>
                           <path style="fill:#000000;"
                              d="M166.08,121.465c-6.081,0-11.011,4.931-11.011,11.011v151.398c0,6.08,4.93,11.011,11.011,11.011 s11.011-4.931,11.011-11.011V132.475C177.09,126.395,172.161,121.465,166.08,121.465z">
                           </path>
                           <path style="fill:#000000;"
                              d="M211.04,174.867c-6.081,0-11.011,4.931-11.011,11.011v97.996c0,6.08,4.93,11.011,11.011,11.011 c6.081,0,11.011-4.931,11.011-11.011v-97.996C222.051,179.797,217.121,174.867,211.04,174.867z">
                           </path>
                           <path style="fill:#000000;"
                              d="M256.001,232.877c-6.081,0-11.011,4.931-11.011,11.011v39.986c0,6.08,4.93,11.011,11.011,11.011 c6.081,0,11.011-4.931,11.011-11.011v-39.986C267.012,237.807,262.082,232.877,256.001,232.877z">
                           </path>
                           <path style="fill:#000000;"
                              d="M300.961,115.409c-6.081,0-11.011,4.931-11.011,11.011v157.454c0,6.08,4.929,11.011,11.011,11.011 c6.081,0,11.011-4.931,11.011-11.011V126.419C311.972,120.339,307.043,115.409,300.961,115.409z">
                           </path>
                           <path style="fill:#000000;"
                              d="M345.922,142.018c-6.081,0-11.011,4.931-11.011,11.011v130.844c0,6.08,4.93,11.011,11.011,11.011 c6.081,0,11.011-4.931,11.011-11.011V153.029C356.932,146.949,352.003,142.018,345.922,142.018z">
                           </path>
                           <path style="fill:#000000;"
                              d="M390.883,110.225c-6.081,0-11.011,4.931-11.011,11.011v162.638c0,6.08,4.93,11.011,11.011,11.011 c6.081,0,11.011-4.931,11.011-11.011V121.236C401.894,115.155,396.964,110.225,390.883,110.225z">
                           </path>
                        </g>
                     </g>
                  </svg>
                  <p class="text-center text-xs md:text-sm">اجرا در تمامی سیستم عامل های ویندوز</p>
               </li>
            </ul>

         </div>
      </div>
      <!-- plane -->
      <section id="plans">
         <div class="w-full bg-blue-200 ">
            <p class="font-Yekan text-3xl text-center p-1.5  bg-red-400 text-white my-4 text-clamp">پلن های موجود </p>
            <div id="tab" class="container m-auto justify-center flex flex-col">
               <div class="w-full md:w-3/4 m-auto  shadow-lg  my-11 ">
                  <ul id='title_plane' class="flex w-full bg-gray-100 rounded-t-md">
                    
                     <li class="tab font-Yekan p-3.5 flex-1 transition-all ease-in-out focus:bg-white" data-id="1">
                        <a href="#" class=" p-1 font-Yekan  text-slate-600 flex gap-3">
                         
                           <span> سرویس نامحدود کاربری / V2RAY</span>
                        </a>
                     </li>
                  </ul>
                  <!-- content tabs -->
                  <div id="content_plane" class="bg-white">
                     <!-- ssh services  -->
                    

                     <!-- v2ray services -->
                     <ul id="1" class="CardContent  w-full owl-carousel transition-all ease-in-out owl-theme ">
                        <!-- card 1 -->
                        <li class="font-Yekan rounded-3xl p-2.5 w-full  m-2.5 border-2 items ">
                           <h4 class=" text-center text-white border rounded-full p-2.5 bg-red-400 m-auto  shadow-md ">
                              سرویس v2ray / یک ماهه </h4>

                           <div class="flex justify-between flex-wrap">
                              <p class=" flex-1  p-3 text-center"> تک کاربر </p>
                              <p class=" flex-1  p-3 text-center"> نامحدود </p>
                              <p class=" flex-1  p-3 text-center"> 100-هزارتومان </p>
                              <p class=" flex-1  p-3 text-center"><a href="#"
                                    class="font-Yekan text-clamp border px-6 py-px border-blue-500 rounded-xl bg-blue-100 text-gray-600 hover:text-white hover:bg-red-400 focus:ring-blue-300  cursor-pointer  transition-all ease-in-out duration-300 hover:border-red-500">
                                    خرید </a>
                              </p>
                           </div>
                           <div class="flex justify-between flex-wrap">
                              <p class=" flex-1  p-3 text-center"> تک کاربر </p>
                              <p class=" flex-1  p-3 text-center"> نامحدود </p>
                              <p class=" flex-1  p-3 text-center"> 100-هزارتومان </p>
                              <p class=" flex-1  p-3 text-center"><a href="#"
                                    class="font-Yekan text-clamp border px-6 py-px border-blue-500 rounded-xl bg-blue-100 text-gray-600 hover:text-white hover:bg-red-400 focus:ring-blue-300  cursor-pointer  transition-all ease-in-out duration-300 hover:border-red-500">
                                    خرید </a>
                              </p>
                           </div>
                           <div class="flex justify-between flex-wrap">
                              <p class=" flex-1  p-3 text-center"> تک کاربر </p>
                              <p class=" flex-1  p-3 text-center"> نامحدود </p>
                              <p class=" flex-1  p-3 text-center"> 100-هزارتومان </p>
                              <p class=" flex-1  p-3 text-center"><a href="#"
                                    class="font-Yekan text-clamp border px-6 py-px border-blue-500 rounded-xl bg-blue-100 text-gray-600 hover:text-white hover:bg-red-400 focus:ring-blue-300  cursor-pointer  transition-all ease-in-out duration-300 hover:border-red-500">
                                    خرید </a>
                              </p>
                           </div>


                        </li>
                        <!-- card 1 -->
                        <!-- card 2 -->
                        <li class="font-Yekan rounded-3xl p-2.5 w-full  m-2.5 border-2 items ">
                           <h4 class=" text-center text-white border rounded-full p-2.5 bg-red-400 m-auto  shadow-md ">
                              سرویس v2ray / دو ماهه </h4>

                           <div class="flex justify-between flex-wrap">
                              <p class=" flex-1  p-3 text-center"> تک کاربر </p>
                              <p class=" flex-1  p-3 text-center"> نامحدود </p>
                              <p class=" flex-1  p-3 text-center"> 20-هزارتومان </p>
                              <p class=" flex-1  p-3 text-center"><a href="#"
                                    class="font-Yekan text-clamp border px-6 py-px border-blue-500 rounded-xl bg-blue-100 text-gray-600 hover:text-white hover:bg-red-400 focus:ring-blue-300  cursor-pointer  transition-all ease-in-out duration-300 hover:border-red-500">
                                    خرید </a>
                              </p>

                           </div>
                        </li>
                        <!-- card 2 -->

                     </ul>
                  </div>
               </div>
               <!--  -->
               <div>
               </div>
            </div>
         </div>
      </section>
      <!-- plane -->
   </main>
   <!-- main  -->

   <!-- footer -->


   <footer class="w-full p-4 bg-slate-200 text-gray-700">
      <div class="flex my-3.5">
         <div class="  flex flex-wrap gap-2 flex-1 border-l border-red-500">
            <div>
               <a href=""
                  class="font-Yekan flex justify-between border p-2 rounded-lg my-2  w-64 hover:text-red-400 transition duration-300 ease-in-out ">
                  <span>دانلود نرم افزار نپسترنت- اندروید</span>

                  <span>&nbsp;|&nbsp;<i class="fa-solid fa-download"></i></span>
               </a>
            </div>
            <div>
               <a href=""
                  class="font-Yekan border p-2 rounded-lg my-2 flex justify-between  w-64 hover:text-red-400 transition duration-300 ease-in-out">
                  <span>دانلود نرم افزار نپسترنت - آیفون</span>

                  <span>&nbsp;|&nbsp;<i class="fa-solid fa-download"></i></span>
               </a>
            </div>
            <div>
               <a href=""
                  class="font-Yekan border p-2 rounded-lg my-2 flex justify-between  w-64 hover:text-red-400 transition duration-300 ease-in-out">
                  <span>دانلود نرم افزار v2box - اندروید </span>

                  <span>&nbsp;|&nbsp;<i class="fa-solid fa-download"></i></span>
               </a>
            </div>
            <div>
               <a href=""
                  class="font-Yekan border p-2 rounded-lg my-2 flex justify-between  w-64 hover:text-red-400 transition duration-300 ease-in-out ">
                  <span>دانلود نرم افزار v2box - آیفون</span>

                  <span> &nbsp;|&nbsp;<i class="fa-solid fa-download"></i></span>
               </a>
            </div>
         </div>
         <div class="flex-1">
            <div class="flex justify-center">
               <a href="#"
                  class="font-Yekan m-2.5 flex  gap-1.5  hover:text-red-400 transition duration-300 ease-in-out">
                  <span>کانال تلگرام</span>
                  <span><i class="fa-brands fa-telegram"></i></span>
               </a>
            </div>

         </div>

      </div>

      <!-- speed -->

      <div class=" my-4 md:my-0">
         <div class="flex w-11/12 m-auto  b rounded ">
            <ul class="flex w-full gap-4  text-clamp">
               <li class="flex flex-1 flex-col font-Yekan items-center gap-3 my-4">
                  <svg class="size-11" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve"
                     width="64px" height="64px" fill="#000000">
                     <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                     <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                     <g id="SVGRepo_iconCarrier">
                        <path style="fill:#5e2fb6;"
                           d="M368,512H144c-17.6,0-32-14.4-32-32V32c0-17.6,14.4-32,32-32h224c17.6,0,32,14.4,32,32v448 C400,497.6,385.6,512,368,512z">
                        </path>
                        <rect x="135.456" y="50.672" style="fill:#0BA4E0;" width="241.28" height="372"></rect>
                        <g>
                           <path style="fill:#D6D6D6;"
                              d="M256.176,489.44c-12.496,0-22.656-10.16-22.656-22.656s10.16-22.672,22.656-22.672 s22.672,10.176,22.672,22.672S268.672,489.44,256.176,489.44z M256.176,452.112c-8.08,0-14.656,6.576-14.656,14.672 c0,8.08,6.576,14.656,14.656,14.656c8.096,0,14.672-6.576,14.672-14.656C270.848,458.688,264.272,452.112,256.176,452.112z">
                           </path>
                           <circle style="fill:#D6D6D6;" cx="256.16" cy="25.328" r="7.792"></circle>
                           <circle style="fill:#D6D6D6;" cx="312.816" cy="25.328" r="7.792"></circle>
                           <circle style="fill:#D6D6D6;" cx="337.44" cy="25.328" r="7.792"></circle>
                        </g>
                        <g>
                           <rect x="169.904" y="285.008" style="fill:#FFFFFF;" width="48.928" height="16"></rect>
                           <rect x="169.904" y="247.456" style="fill:#FFFFFF;" width="90.016" height="16"></rect>
                           <rect x="169.904" y="209.92" style="fill:#FFFFFF;" width="131.104" height="16"></rect>
                           <rect x="169.904" y="172.336" style="fill:#FFFFFF;" width="172.192" height="16"></rect>
                        </g>
                     </g>
                  </svg>
                  <p class="text-center text-xs md:text-sm">قابل اجرا در تمامی سیستم عامل های موبای </p>
               </li>
               <li class="flex   flex-1 flex-col font-Yekan items-center gap-3 my-4">
                  <svg class="size-11" height="64px" width="64px" version="1.1" id="Layer_1"
                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                     viewBox="0 0 512 512" xml:space="preserve" fill="#000000">
                     <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                     <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                     <g id="SVGRepo_iconCarrier">
                        <path style="fill:#000000;"
                           d="M418.432,313.703c0.05,6.792-3.971,12.908-10.132,15.765c-38.769,17.983-92.665,29.146-152.3,29.146 s-113.531-11.162-152.301-29.146c-6.161-2.858-10.182-8.974-10.132-15.765C94.782,150.473,124.642,8.017,256,8.017 S417.218,150.473,418.432,313.703z">
                        </path>
                        <path style="fill:#E6AF78;"
                           d="M315.858,340.124v-41.368H196.142v41.368c0,11.042-7.065,20.846-17.542,24.337l-81.491,27.164 c-17.458,5.82-29.234,22.158-29.234,40.561v54.695c0,9.446,7.656,17.102,17.102,17.102h342.046c9.446,0,17.102-7.656,17.102-17.102 v-54.695c0-18.403-11.776-34.742-29.235-40.561l-81.491-27.164C322.923,360.969,315.858,351.166,315.858,340.124z">
                        </path>
                        <path style="fill:#D29B6E;"
                           d="M196.142,340.124c0,10.35-6.251,19.542-15.655,23.537c95.822,16.331,135.344-52.079,135.344-52.079 l0.027-0.018v-12.809H196.142V340.124z">
                        </path>
                        <path style="fill:#E4EAF6;"
                           d="M414.89,391.624l-66.588-22.196c-31.692,42.995-68.683,67.021-92.302,74.696 c-23.618-7.676-60.609-31.701-92.302-74.696L97.11,391.624c-17.459,5.82-29.235,22.158-29.235,40.561v54.695 c0,9.445,7.658,17.102,17.102,17.102h342.046c9.445,0,17.102-7.658,17.102-17.102v-54.695 C444.125,413.783,432.349,397.445,414.89,391.624z">
                        </path>
                        <g>
                           <path style="fill:#D7DEED;"
                              d="M126.265,451.209l-47.436-47.436c-6.839,7.661-10.954,17.648-10.954,28.413v54.695 c0,9.446,7.656,17.102,17.102,17.102h51.307v-28.588C136.284,466.324,132.681,457.624,126.265,451.209z">
                           </path>
                           <path style="fill:#D7DEED;"
                              d="M385.735,451.209l47.436-47.436c6.839,7.661,10.954,17.648,10.954,28.413v54.695 c0,9.446-7.656,17.102-17.102,17.102h-51.307v-28.588C375.716,466.324,379.319,457.624,385.735,451.209z">
                           </path>
                        </g>
                        <g>
                           <path style="fill:#707487;"
                              d="M146.267,187.677l-9.93-0.032c-9.466-0.03-17.157,7.636-17.157,17.102v33.806 c0,9.578,7.866,17.289,17.443,17.099l14.739-0.294L146.267,187.677z">
                           </path>
                           <path style="fill:#707487;"
                              d="M365.733,187.677l9.93-0.032c9.466-0.03,17.157,7.636,17.157,17.102v33.806 c0,9.578-7.866,17.289-17.443,17.099l-14.739-0.294L365.733,187.677z">
                           </path>
                        </g>
                        <path style="fill:#F0C087;"
                           d="M144.835,110.63V147.5c0,15.32,0.588,30.635,1.763,45.909l4.928,64.058 c1.178,15.312,9.152,29.291,21.733,38.097l51.638,36.147c9.112,6.379,19.967,9.801,31.09,9.801h0.026 c11.123,0,21.978-3.422,31.09-9.801l51.638-36.147c12.581-8.807,20.556-22.786,21.733-38.098l4.928-64.058 c1.175-15.274,1.763-30.59,1.763-45.909V110.63H144.835z">
                        </path>
                        <path style="fill:#E6AF78;"
                           d="M366.524,110.63H144.835v36.871c0,4.751,0.16,9.499,0.274,14.248l0,0v0.003 c0.136,5.71,0.353,11.416,0.652,17.119c0,0.001,0,0.003,0,0.003v0.001c0.254,4.845,0.466,9.693,0.838,14.532l4.928,64.058 c1.178,15.312,9.152,29.291,21.734,38.098l51.638,36.147c9.112,6.378,19.967,9.8,31.09,9.8c-13.722,0-28.803-23.62-38.266-41.533 c-6.234-11.8-9.56-24.88-9.809-38.223l-1.444-71.012c-0.114-6.157,4.346-11.394,10.413-12.447 c45.858-7.959,82.26-20.963,103.069-30.151c16.496,27.269,38.225,35.425,41.041,36.387l2.69,0.919h2.548 c0.3-5.698,0.52-17.811,0.657-23.516L366.524,110.63z">
                        </path>
                        <path style="fill:#000000;"
                           d="M136.284,102.079v59.858c101.31,0,178.429-35.27,191.346-43.063 c13.882,34.511,38.894,43.063,38.894,43.063h9.193v-59.858H136.284z">
                        </path>
                        <path style="fill:#D7DEED;"
                           d="M249.952,463.694l6.048,2.124l6.048-2.124c27.741-9.749,69.228-37.731,106.406-87.547l-20.153-6.718 c-31.692,42.995-68.683,67.021-92.302,74.696c-23.618-7.676-60.609-31.701-92.302-74.696l-20.153,6.718 C180.724,425.962,222.211,453.944,249.952,463.694z">
                        </path>
                        <path
                           d="M417.425,384.019l-66.477-22.158c-0.02-0.007-0.041-0.014-0.061-0.02l-9.522-3.174c26.12-5.109,50.186-12.59,70.31-21.925 c9.048-4.198,14.848-13.263,14.775-23.098C425.446,179.001,406.687,0,256,0S86.554,179.001,85.551,313.644 c-0.073,9.834,5.727,18.9,14.775,23.097c20.124,9.334,44.189,16.815,70.309,21.924l-9.529,3.177 c-0.017,0.005-0.033,0.011-0.049,0.016l-66.481,22.16c-20.766,6.922-34.718,26.28-34.718,48.168v54.695 c0,13.851,11.268,25.119,25.119,25.119h342.046c13.851,0,25.119-11.268,25.119-25.119v-54.695 C452.142,410.298,438.191,390.94,417.425,384.019z M138.83,195.671l3.906,51.842l-6.271,0.125c-2.456,0.048-4.784-0.873-6.542-2.595 c-1.757-1.723-2.726-4.028-2.726-6.488v-33.806c0-2.432,0.949-4.717,2.671-6.435c1.722-1.718,3.983-2.649,6.443-2.651 L138.83,195.671z M154.266,187.139c-0.369-5.481-0.665-11.294-0.897-17.612c81.795-3.128,146.125-27.732,170.463-39.578 c11.279,22.484,26.854,33.022,34.882,37.225c-0.243,7.209-0.564,13.773-0.979,19.933l-5.255,69.745 c-0.311,4.042-1.175,7.961-2.538,11.668c-10.848,8.708-29.551,16.743-61.731,18.354c-3.046-7.738-10.578-13.237-19.385-13.237 h-8.551c-11.493,0-20.843,9.351-20.843,20.843c0,11.493,9.351,20.843,20.843,20.843h8.551c8.475,0,15.772-5.092,19.026-12.371 c12.315-0.562,22.99-2.027,32.253-4.129l-37.599,26.32c-7.805,5.463-16.967,8.351-26.518,8.351c-9.527,0-18.687-2.888-26.494-8.351 l-51.638-36.147c-10.656-7.46-17.34-19.175-18.336-32.132L154.266,187.139z M375.535,247.637l-6.271-0.125l3.906-51.842l2.517-0.009 c2.408-0.007,4.72,0.934,6.443,2.651c1.722,1.717,2.671,4.002,2.671,6.435v33.806c0,2.462-0.968,4.765-2.726,6.488 C380.319,246.764,378.011,247.693,375.535,247.637z M273.637,294.48c0,2.652-2.158,4.81-4.81,4.81h-8.551 c-2.652,0-4.81-2.158-4.81-4.81s2.158-4.81,4.81-4.81h8.551C271.479,289.67,273.637,291.828,273.637,294.48z M204.159,340.124 v-13.143L220.3,338.28c10.514,7.359,22.854,11.249,35.713,11.249c12.833,0,25.174-3.89,35.687-11.249l16.141-11.3v13.144 c0,14.516,9.252,27.352,23.023,31.942l4.165,1.389c-19.469,23.938-49.238,51.563-79.031,62.201 c-29.792-10.638-59.562-38.263-79.031-62.201l4.165-1.389C194.906,367.476,204.159,354.639,204.159,340.124z M101.584,313.763 c0.698-93.765,11.088-162.768,31.762-210.953C158.401,44.419,198.522,16.033,256,16.033s97.599,28.386,122.653,86.777 c20.675,48.185,31.065,117.188,31.762,210.951c0.027,3.565-2.128,6.875-5.489,8.435c-22.393,10.386-50.12,18.373-80.259,23.143 c-0.513-1.659-0.794-3.411-0.794-5.215v-24.266c0-0.033-0.004-0.065-0.005-0.098l19.469-13.628 c8.824-6.176,15.642-14.491,19.973-24.022c5.389-4.915,9.095-9.939,11.64-14.447c0,0,0.608,0.011,0.779,0.011 c6.611,0,12.833-2.539,17.569-7.182c4.859-4.763,7.535-11.134,7.535-17.938v-33.806c0-6.724-2.623-13.043-7.385-17.79 c-4.763-4.748-11.094-7.368-17.814-7.329l-1.4,0.004c0.28-5.451,0.501-11.23,0.67-17.48c0.059-2.162-0.76-4.257-2.269-5.808 c-1.154-1.185-2.637-1.976-4.238-2.282c-4.032-1.707-22.294-10.739-33.332-38.18c-0.877-2.181-2.666-3.866-4.895-4.611 c-2.23-0.745-4.672-0.475-6.684,0.739c-12.968,7.823-85.499,39.837-178.547,41.723c-2.135,0.044-4.164,0.936-5.637,2.481 c-1.474,1.545-2.271,3.614-2.214,5.749c0.169,6.324,0.392,12.159,0.674,17.67l-1.4-0.004c-0.028,0-0.055,0-0.082,0 c-6.694,0-12.988,2.602-17.732,7.329c-4.763,4.747-7.385,11.065-7.385,17.79v33.806c0,6.805,2.675,13.175,7.535,17.938 c4.736,4.643,10.957,7.182,17.569,7.182c0.172,0,7.954-0.154,7.954-0.154c2.647,15.581,11.344,29.446,24.439,38.613l19.469,13.628 c0,0.033-0.005,0.065-0.005,0.098v24.266c0,1.804-0.281,3.556-0.794,5.215c-30.139-4.769-57.866-12.756-80.259-23.143 C103.712,320.637,101.558,317.327,101.584,313.763z M99.645,399.23l61.124-20.375c32.24,41.908,68.772,65.101,92.753,72.894 c0.805,0.262,1.642,0.392,2.478,0.392c0.836,0,1.673-0.13,2.478-0.392c23.982-7.794,60.513-30.987,92.753-72.894l61.124,20.375 c3.381,1.128,6.487,2.748,9.275,4.748l-41.564,41.563c-7.974,7.975-12.366,18.577-12.366,29.855v20.571H144.301v-20.571 c0-11.278-4.392-21.88-12.366-29.855l-41.564-41.563C93.158,401.978,96.265,400.357,99.645,399.23z M75.891,486.881v-54.695 c0-5.741,1.413-11.221,3.943-16.071l40.762,40.762c4.946,4.947,7.67,11.523,7.67,18.518v20.572h-43.29 C79.967,495.967,75.891,491.891,75.891,486.881z M436.109,486.881c0,5.01-4.076,9.086-9.086,9.086h-43.29v-20.571 c0-6.995,2.724-13.571,7.67-18.518l40.762-40.762c2.53,4.85,3.943,10.33,3.943,16.071V486.881z">
                        </path>
                     </g>
                  </svg>
                  <p class=" text-center text-xs md:text-sm">پشتیبانی 7 روز هفته 24 ساعته </p>
               </li>
               <li class="flex   flex-1 flex-col font-Yekan items-center gap-3 my-4 ">
                  <svg class="size-11" height="64px" width="64px" version="1.1" id="Layer_1"
                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                     viewBox="0 0 512 512" xml:space="preserve" fill="#000000">
                     <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                     <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                     <g id="SVGRepo_iconCarrier">
                        <circle style="fill:#c3e5da;" cx="256" cy="256" r="245.106"></circle>
                        <path style="fill:#FF7D46;"
                           d="M267.385,299.566c-24.062,0.421-43.908-18.746-44.328-42.808 c-0.421-24.062,18.746-43.908,42.808-44.328c24.062-0.419,191.668,40.236,191.668,40.236S291.447,299.146,267.385,299.566z">
                        </path>
                        <g>
                           <path style="fill:#1d1618;"
                              d="M437.019,74.981C388.667,26.628,324.38,0,256,0S123.333,26.628,74.981,74.981 C26.628,123.332,0,187.62,0,256s26.628,132.667,74.981,181.019S187.62,512,256,512s132.667-26.628,181.019-74.981 S512,324.38,512,256S485.372,123.332,437.019,74.981z M256,490.213C126.854,490.213,21.787,385.145,21.787,256 S126.854,21.787,256,21.787S490.213,126.855,490.213,256S385.146,490.213,256,490.213z">
                           </path>
                           <path style="fill:#1d1618;"
                              d="M468.426,256c0-36.93-9.67-73.281-27.949-105.215c-0.151-0.338-0.321-0.671-0.511-0.998 c-3.008-5.208-9.667-6.995-14.881-3.987l-31.977,18.461c-5.21,3.008-6.996,9.67-3.987,14.881c2.019,3.495,5.679,5.448,9.445,5.448 c1.848,0,3.72-0.471,5.436-1.461l22.235-12.837c10.762,21.317,17.41,44.535,19.59,68.353 c-42.8-10.233-158.855-37.466-180.154-37.107c-14.546,0.254-28.123,6.157-38.23,16.623s-15.533,24.24-15.278,38.788 c0.519,29.708,24.849,53.519,54.445,53.517c0.32,0,0.644-0.003,0.965-0.009c21.313-0.373,136.285-31.633,178.721-43.363 c-1.519,26.001-8.356,51.431-20.06,74.613l-22.235-12.837c-5.211-3.009-11.874-1.223-14.881,3.987 c-3.009,5.21-1.223,11.873,3.987,14.881l31.977,18.461c1.716,0.99,3.588,1.461,5.436,1.461c3.765,0,7.427-1.953,9.445-5.448 c0.188-0.327,0.358-0.659,0.51-0.997C458.755,329.281,468.426,292.93,468.426,256z M267.194,288.674 c-18.044,0.322-32.931-14.089-33.247-32.106c-0.153-8.728,3.104-16.993,9.168-23.272c6.063-6.28,14.21-9.822,22.939-9.974 c0.1-0.001,0.203-0.002,0.308-0.002c14.24,0,85.508,15.615,147.38,30.111C351.954,270.201,280.675,288.439,267.194,288.674z">
                           </path>
                           <path style="fill:#1d1618;"
                              d="M256,102.285c6.015,0,10.894-4.877,10.894-10.894V54.468c0-6.017-4.878-10.894-10.894-10.894 s-10.894,4.877-10.894,10.894v36.923C245.106,97.407,249.985,102.285,256,102.285z">
                           </path>
                           <path style="fill:#1d1618;"
                              d="M102.286,256c0-6.017-4.878-10.894-10.894-10.894H54.468c-6.015,0-10.894,4.877-10.894,10.894 c0,6.017,4.878,10.894,10.894,10.894h36.924C97.407,266.894,102.286,262.017,102.286,256z">
                           </path>
                           <path style="fill:#1d1618;"
                              d="M107.998,328.871l-31.977,18.461c-5.21,3.008-6.996,9.67-3.987,14.881 c2.019,3.495,5.679,5.448,9.445,5.448c1.848,0,3.721-0.471,5.436-1.461l31.977-18.461c5.21-3.008,6.996-9.67,3.987-14.881 C119.87,327.648,113.209,325.862,107.998,328.871z">
                           </path>
                           <path style="fill:#1d1618;"
                              d="M164.668,76.021c-3.009-5.209-9.669-6.996-14.881-3.987c-5.21,3.008-6.996,9.67-3.987,14.881 l18.461,31.976c2.019,3.495,5.679,5.448,9.445,5.448c1.848,0,3.721-0.471,5.436-1.461c5.21-3.008,6.996-9.67,3.987-14.881 L164.668,76.021z">
                           </path>
                           <path style="fill:#1d1618;"
                              d="M118.892,164.262L86.915,145.8c-5.213-3.009-11.874-1.222-14.881,3.987 c-3.009,5.21-1.223,11.873,3.987,14.881l31.977,18.461c1.716,0.991,3.588,1.461,5.436,1.461c3.765,0,7.427-1.953,9.445-5.448 C125.888,173.932,124.102,167.269,118.892,164.262z">
                           </path>
                           <path style="fill:#1d1618;"
                              d="M332.858,122.878c1.716,0.99,3.588,1.461,5.436,1.461c3.765,0,7.426-1.953,9.445-5.448L366.2,86.915 c3.009-5.21,1.223-11.873-3.987-14.881c-5.212-3.009-11.872-1.223-14.881,3.987l-18.461,31.976 C325.862,113.208,327.647,119.87,332.858,122.878z">
                           </path>
                           <path style="fill:#1d1618;"
                              d="M312.647,381.161h-73.895c-6.015,0-10.894,4.877-10.894,10.894c0,6.017,4.878,10.894,10.894,10.894 h73.895c6.015,0,10.894-4.877,10.894-10.894C323.54,386.038,318.662,381.161,312.647,381.161z">
                           </path>
                           <path style="fill:#1d1618;"
                              d="M200.443,381.161h-1.089c-6.015,0-10.894,4.877-10.894,10.894c0,6.017,4.878,10.894,10.894,10.894 h1.089c6.015,0,10.894-4.877,10.894-10.894C211.336,386.038,206.458,381.161,200.443,381.161z">
                           </path>
                        </g>
                     </g>
                  </svg>
                  <p class=" text-center text-xs md:text-sm">سرعت فوق العاده بالا </p>
               </li>
               <li class="flex flex-1 flex-col font-Yekan items-center gap-3 my-4">
                  <svg class="size-11" height="64px" width="64px" version="1.1" id="Layer_1"
                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                     viewBox="0 0 512 512" xml:space="preserve" fill="#000000">
                     <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                     <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                     <g id="SVGRepo_iconCarrier">
                        <path style="fill:#EFEFEF;"
                           d="M500.989,331.04v13.29c0,20.622-16.714,37.337-37.326,37.337H48.337 c-20.612,0-37.326-16.715-37.326-37.337v-13.29H500.989z">
                        </path>
                        <path style="fill:#FF7D46;"
                           d="M500.989,68.566V331.04H11.011V68.566c0-20.612,16.714-37.326,37.326-37.326h415.326 C484.275,31.239,500.989,47.955,500.989,68.566z">
                        </path>
                        <path style="fill:#D1D5D8;"
                           d="M333.076,480.762c-51.384,0-102.767,0-154.151,0c12.022-32.827,17.426-66.269,17.734-99.097 c39.561,0,79.121,0,118.683,0C315.651,414.493,321.055,447.934,333.076,480.762z">
                        </path>
                        <g>
                           <path style="fill:#000000;"
                              d="M390.883,69.163c-6.081,0-11.011,4.931-11.011,11.011v0.524c0,6.08,4.93,11.011,11.011,11.011 c6.081,0,11.011-4.931,11.011-11.011v-0.524C401.894,74.094,396.964,69.163,390.883,69.163z">
                           </path>
                           <path style="fill:#000000;"
                              d="M463.663,20.228H48.337C21.683,20.228,0,41.912,0,68.566V344.33 c0,26.659,21.683,48.348,48.337,48.348h136.994c-1.233,26.663-6.005,52.508-14.227,77.072h-33.468 c-6.081,0-11.011,4.931-11.011,11.011s4.93,11.011,11.011,11.011h236.731c6.081,0,11.011-4.931,11.011-11.011 s-4.93-11.011-11.011-11.011h-33.468c-8.221-24.565-12.993-50.411-14.227-77.072h136.991c26.654,0,48.337-21.689,48.337-48.348 V68.566C512,41.912,490.317,20.228,463.663,20.228z M194.244,469.751c7.593-24.705,11.997-50.529,13.14-77.072h97.233 c1.143,26.541,5.548,52.367,13.141,77.072H194.244z M489.979,344.331c0,14.518-11.805,26.327-26.316,26.327H48.337 c-14.511,0-26.316-11.81-26.316-26.327v-2.279h467.957V344.331z M489.979,320.029H22.022V68.566 c0-14.511,11.805-26.316,26.316-26.316h415.326c14.511,0,26.316,11.806,26.316,26.316V320.029z">
                           </path>
                           <path style="fill:#000000;"
                              d="M121.119,218.91c-6.081,0-11.011,4.931-11.011,11.011v53.953c0,6.08,4.93,11.011,11.011,11.011 c6.081,0,11.011-4.931,11.011-11.011V229.92C132.13,223.84,127.201,218.91,121.119,218.91z">
                           </path>
                           <path style="fill:#000000;"
                              d="M166.08,121.465c-6.081,0-11.011,4.931-11.011,11.011v151.398c0,6.08,4.93,11.011,11.011,11.011 s11.011-4.931,11.011-11.011V132.475C177.09,126.395,172.161,121.465,166.08,121.465z">
                           </path>
                           <path style="fill:#000000;"
                              d="M211.04,174.867c-6.081,0-11.011,4.931-11.011,11.011v97.996c0,6.08,4.93,11.011,11.011,11.011 c6.081,0,11.011-4.931,11.011-11.011v-97.996C222.051,179.797,217.121,174.867,211.04,174.867z">
                           </path>
                           <path style="fill:#000000;"
                              d="M256.001,232.877c-6.081,0-11.011,4.931-11.011,11.011v39.986c0,6.08,4.93,11.011,11.011,11.011 c6.081,0,11.011-4.931,11.011-11.011v-39.986C267.012,237.807,262.082,232.877,256.001,232.877z">
                           </path>
                           <path style="fill:#000000;"
                              d="M300.961,115.409c-6.081,0-11.011,4.931-11.011,11.011v157.454c0,6.08,4.929,11.011,11.011,11.011 c6.081,0,11.011-4.931,11.011-11.011V126.419C311.972,120.339,307.043,115.409,300.961,115.409z">
                           </path>
                           <path style="fill:#000000;"
                              d="M345.922,142.018c-6.081,0-11.011,4.931-11.011,11.011v130.844c0,6.08,4.93,11.011,11.011,11.011 c6.081,0,11.011-4.931,11.011-11.011V153.029C356.932,146.949,352.003,142.018,345.922,142.018z">
                           </path>
                           <path style="fill:#000000;"
                              d="M390.883,110.225c-6.081,0-11.011,4.931-11.011,11.011v162.638c0,6.08,4.93,11.011,11.011,11.011 c6.081,0,11.011-4.931,11.011-11.011V121.236C401.894,115.155,396.964,110.225,390.883,110.225z">
                           </path>
                        </g>
                     </g>
                  </svg>
                  <p class="text-center text-xs md:text-sm">اجرا در تمامی سیستم عامل های ویندوز</p>
               </li>
            </ul>

         </div>
      </div>

      <hr>

      <div class="flex justify-center ">
         <p class="p-3 "> &copy 2024 | All rights reserved </p>
      </div>
   </footer>


   <!-- footer -->


   <!-- ادرس لینک پلاگین  -->
   <!-- https://www.jqueryscript.net/animation/animate-typing.html -->
   <script src="./public/js/jquery.animateTyping.js"></script>
   <script src="./public/js/script.js"></script>
   <!-- افزودن کلاس به تب ها -->
   <script>
      $('.tab').click(function(e) {
         e.preventDefault();
         var tabID = $(this).data('id');
         $('.tab').removeClass("active");
         $(this).addClass("active")
         showTabContent(tabID);

      });

      function showTabContent(tabID) {
         $('#content_plane ul').removeClass("active");
         $('#content_plane').find('#' + tabID).addClass('active');
         $('.tab').attr('data-id').addClass('active');
      }
   </script>

   <!-- افزودن کلاس به تب ها -->

   <!-- fonts script -->

   <!-- fonts script -->

   <!-- دستورات منو  -->
   <script>
      // دستورات منو در حاالت دسکتاپ
      var timer = {};
      $('#nav_menu li').hover(function() {
         // over         
         var tag = $(this);
         var timerAttr = tag.attr('data-time');
         clearTimeout(timer[timerAttr]);
         timer[timerAttr] = setTimeout(() => {
            $(">ul", tag).slideDown();
         }, 500);

      }, function() {
         // out
         var tag = $(this);
         var timerAttr = tag.attr('data-time');
         clearTimeout(timer[timerAttr]);
         timer[timerAttr] = setTimeout(() => {
            $(">ul", tag).slideUp();
         }, 500);
      });

      // دستورات منو در حالت موبایل
   </script>
   <!-- دستورات منو  -->

   <!-- کروسر -->
   <script>
      $(document).ready(function() {
         $('.owl-carousel').owlCarousel({
            rtl: true,
            loop: true,
            margin: 10,
            nav: true,
            autoplay: false,
            autoplayTimeout: 1000,
            autoplayHoverPause: true,
            responsive: {
               0: {
                  items: 1
               },
               600: {
                  items: 2
               },
               1000: {
                  items: 2
               }
            }
         })
      });
   </script>
   <!-- کروسر -->

   <!-- دیتاتیبل -->
   <script>
      $(document).ready(function() {
         $('#example').dataTable({
            "showNEntries": false
         });
      });
   </script>
   <!-- دیتاتیبل -->



</body>

</html>