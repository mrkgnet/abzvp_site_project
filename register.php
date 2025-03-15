<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./public/css/output.css" />
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
    <title>وب سایت ابزار وی پی ان</title>
</head>

<body>
    <!-- register -->
    <section class=" max-w-sm mx-auto min-h-screen w-full flex  justify-center items-center ">
        <form class=" flex  flex-col border rounded p-3 shadow-md w-full" action="#" method="post">
            <div class="my-4">
                <h4 class="text-gray-700 block w-full text-center font-Yekan my-2.5">فرم ثبت نام در سایت</h4>
            </div>
            <!-- input email -->
            <div class="flex flex-col mb-5">
                <label class="text-sm font-Yekan font-medium text-gray-900 mb-2.5 items-center flex gap-1" for="email">
                    <span> ایمیل خود را وارد کنید</span>
                    <span class="text-red-600">(اجباری)</span>
                    <span class="text-red-600">*</span>
                </label>
                <div class="flex">
                    <span class="flex items-center font-Yekan border bg-gray-200 p-1.5 border-l-0 rounded-tr rounded-br border-gray-400"><i class="fa-regular fa-envelope text-2xl"></i></span>
                    <input
                        class="border border-gray-400 p-2 bg-gray-50 text-gray-900 shadow-sm w-full text-sm block focus:ring-2 focus:outline-none focus:ring-blue-500 focus:border-blue-500 cursor-pointer rounded-tl-md rounded-bl-md"
                        id="email" type="text" placeholder="ایمیل خود را وارد کنید ">
                </div>

            </div>

            <!-- input password -->
            <div class="flex flex-col mb-5">
                <label class="text-sm font-Yekan font-medium text-gray-900 mb-2.5 items-center flex gap-1" for="email">
                    <span> پسورد خود را وارد کنید</span>
                    <span class="text-red-600">(اجباری)</span>
                    <span class="text-red-600">*</span>
                </label>
                <div class="flex">
                    <span class="flex items-center font-Yekan border bg-gray-200 p-1.5 border-l-0 rounded-tr rounded-br border-gray-400">
                        <i class="fa-solid fa-unlock text-2xl"></i>

                    </span>
                    <input
                        class="border border-gray-400 p-2 bg-gray-50 text-gray-900 shadow-sm w-full text-sm block focus:ring-2 focus:outline-none focus:ring-blue-500 focus:border-blue-500 cursor-pointer rounded-tl-md rounded-bl-md"
                        id="email" type="text" placeholder="ایمیل خود را وارد کنید ">
                </div>

            </div>

            <div class="flex flex-col mb-5">
                <label class="text-sm font-Yekan font-medium text-gray-900 mb-2.5 items-center flex gap-1" for="email">
                    <span>تکرار پسورد خود را وارد کنید</span>
                    <span class="text-red-600">(اجباری)</span>
                    <span class="text-red-600">*</span>
                </label>
                <div class="flex">
                    <span class="flex items-center font-Yekan border bg-gray-200 p-1.5 border-l-0 rounded-tr rounded-br border-gray-400">
                        <i class="fa-solid fa-unlock text-2xl"></i>
                    </span>
                    <input
                        class="border border-gray-400 p-2 bg-gray-50 text-gray-900 shadow-sm w-full text-sm block focus:ring-2 focus:outline-none focus:ring-blue-500 focus:border-blue-500 cursor-pointer rounded-tl-md rounded-bl-md"
                        id="email" type="text" placeholder="ایمیل خود را وارد کنید ">
                </div>

            </div>
            <div class=" mb-5">
                <button class="font-Yekan border px-6 py-1.5 rounded-md w-full bg-red-500 text-white shadow focus:ring-red-800 focus:ring-2" type="submit">ثبت نام</button>

            </div>

            <div class="my-4  gap-2 text-gray-600 text-base">
                <!-- <input class="w-3.5 h-3.5 bg-gray-600 border-0 border-gray-700 cursor-pointer rounded-md " type="checkbox" name="" id=""> -->
                <label for="">
                    <span>آیا قبلا ثبت نام کردید ؟؟</span>
                    <a href="./login.php" class="font-Yekan text-blue-600 border-b border-double">اینجا کلیک کنید</a>
                </label>
            </div>



        </form>

    </section>
    <!-- register -->






    <script>
        $(document).ready(function() {
            $('h1').addClass("font-Yekan");
            $('h2').addClass("font-Yekan");
            $('h3').addClass("font-Yekan");
            $('h4').addClass("font-Yekan");
            $('p').addClass("font-Yekan");
            $('span').addClass("font-Yekan");
            $('li').addClass("font-Yekan");
            $('h1').addClass("font-Yekan");
            $('button').addClass("font-Yekan");
            $('a').addClass("font-Yekan");
            $('th').addClass("font-Yekan");
            $('td').addClass("font-Yekan");
            $('label').addClass("font-Yekan");
            $('placeholder').addClass("font-Yekan");
            $('button').addClass("font-Yekan");

        })
    </script>

</body>

</html>