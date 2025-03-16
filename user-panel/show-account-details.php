<?php include("./header-user-panel.php") ?>
<?php include("../public/plugins/jdf.php") ?>

<!-- main -->
<div class="p-4 sm:mr-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg  mt-14">


        <?php
        $userAccount = $_GET['inptUser'];
        $userAccount = str_replace(' ', '', $userAccount);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://net.abznet.top:8443/XLOo5XjGeMM1n18/login');
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/32.0.1700.107 Chrome/32.0.1700.107 Safari/537.36');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "username=mrkgnetnet&password=65006500");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_COOKIESESSION, true);
        curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie-name');  //could be empty, but cause problems on some hosts
        curl_setopt($ch, CURLOPT_COOKIEFILE, '/var/www/ip4.x/file/tmp');  //could be empty, but cause problems on some hosts
        $answer = curl_exec($ch);
        if (curl_error($ch)) {
            echo curl_error($ch);
        }
        //another request preserving the session
        curl_setopt($ch, CURLOPT_URL, 'https://net.abznet.top:8443/XLOo5XjGeMM1n18/panel/api/inbounds/getClientTraffics/' . $userAccount);
        curl_setopt($ch, CURLOPT_POST, false);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_POSTFIELDS, "");
        $answer2 = curl_exec($ch);
        if (curl_error($ch)) {
            echo curl_error($ch);
        }
        $convertString = json_decode($answer2);
        if ($convertString->obj != null) {
            $username_account = $convertString->obj->email;
            $all_traffic_account = $convertString->obj->total;
            $all_traffic_account = ($all_traffic_account / 1073735424.880463);
            $all_traffic_account = round($all_traffic_account, 2);
            $status_account = $convertString->obj->enable;
            if ($status_account == 'true') {
                $status_account = 'فعال|✅';
            } else {
                $status_account = 'غیرفعال|❌';
            }
            $upload_account = $convertString->obj->up;
            $upload_account = ($upload_account / 1073735424.880463);
            $upload_account = round($upload_account, 2);
            $download_account = $convertString->obj->down;
            $download_account = ($download_account / 1073735424.880463);
            $download_account = round($download_account, 2);
            $end_time = $convertString->obj->expiryTime;
            //  $expire_time_account1= date('Y-m-d H:i:s',  $expire_time_account);
            $end_time = $end_time / 1000;
            // global $now_time_user;
            // global $end_time_user;
            $end_time_user = date("Y-m-d", $end_time);
            $now_time_user = date("Y-m-d", time());
            $dateDiff   = strtotime($end_time_user) - strtotime($now_time_user);
            $numOfDays  = $dateDiff / 86400;
            $numOfDays = ceil($numOfDays);
            if ($numOfDays <= 0) {
                $numOfDays = '<span class="text-red-500 font-bold" >' . 'زمان شما تمام شد|❌' . '<span>';
            } else {
                $numOfDays = '<span class="text-green-600 font-bold" >' . $numOfDays . '<span>'  . " " . "روز";
            }


            $expire_time_account = jdate('Y/n/j ساعت H:i:s ', $end_time);
            $sum_traffic_user = $download_account + $upload_account;
            $baghi_mande_traffic = $all_traffic_account - $sum_traffic_user;
            if ($baghi_mande_traffic <= 0) {
                $baghi_mande_traffic = '<span class="text-red-500 font-bold" >' . 'ترافیک شما تمام شد|❌' . '<span>';
            } else {
                $baghi_mande_traffic = '<span class="text-green-600 font-bold" >' . $baghi_mande_traffic . '<span>'  . " " . "گیگ";
            }
        ?>

            <div class="grid grid-cols-2 gap-4 mb-4">

                <div class="  flex items-center justify-center rounded-sm bg-gray-50 gap-3  h-14 ">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <span class="w-1/2">یوزر اکانت شما</span>

                </div>
                <div class="flex items-center justify-center rounded-sm bg-gray-50 h-14 ">

                    <div class="  w-full max-w-[16rem]" dir="ltr">
                        <div class="relative">
                            <label for="npm-install-copy-text" class="sr-only">Label</label>
                            <input id="npm-install-copy-text" type="text" class="block border border-gray-300 focus:border-blue-500 focus:ring-blue-500 px-3 py-2.5 rounded-lg text-gray-500 text-sm w-full" value=<?= $username_account ?> disabled readonly>
                            <button data-copy-to-clipboard-target="npm-install-copy-text" class="absolute bg-white border border-gray-200 h-8 hover:bg-gray-100 inline-flex justify-center px-2.5 py-2 rounded-lg text-gray-900" style="right: 5px; top:5px;">
                                <span id="default-message">
                                    <span class="inline-flex items-center">
                                        <svg class="w-3 h-3 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                            <path d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z" />
                                        </svg>
                                        <span class="text-xs font-semibold">Copy</span>
                                    </span>
                                </span>
                                <span id="success-message" class="hidden">
                                    <span class="inline-flex items-center">
                                        <svg class="w-3 h-3 text-blue-700  me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                        </svg>
                                        <span class="text-xs font-semibold text-blue-700 ">Copied</span>
                                    </span>
                                </span>
                            </button>
                        </div>
                    </div>


                </div>



                <div class=" flex items-center justify-center rounded-sm bg-gray-50 gap-3  h-14 ">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <span class="w-1/2">وضعیت اکانت</span>

                </div>
                <div class="  flex items-center justify-center rounded-sm bg-gray-50 h-14 ">
                    <?= $status_account ?>
                </div>


                <div class=" flex items-center justify-center rounded-sm bg-gray-50 gap-3  h-14 ">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <span class="w-1/2">حجم باقی مانده</span>

                </div>
                <div class="flex items-center justify-center rounded-sm bg-gray-50 h-14 ">

                    <?= $baghi_mande_traffic ?>

                </div>

                <div class=" flex items-center justify-center rounded-sm bg-gray-50 gap-3  h-14 ">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <span class="w-1/2">زمان باقی مانده</span>

                </div>
                <div class="flex items-center justify-center rounded-sm bg-gray-50 h-14 ">

                    <?= $numOfDays ?>

                </div>
            </div>

        <?php } else { ?>

            <!-- alert -->
            <div id="alert-border-2" class="flex items-center justify-between p-4 mb-4 text-red-800 border-t-4 border-red-300 bg-red-50 " role="alert">
                
                <div class="flex items-center gap-2 ms-3 text-sm font-medium">
                <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                    <p class="mt-1">اطلاعات اکانت شما یافت نشد</p>
                </div>
                <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 " data-dismiss-target="#alert-border-2" aria-label="Close">
                    <span class="sr-only">Dismiss</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
        <?php } ?>
    </div>
</div>



<?php include("./footer-user-panel.php") ?>

<script>
    window.addEventListener('load', function() {
        const clipboard = FlowbiteInstances.getInstance('CopyClipboard', 'npm-install-copy-text');

        const $defaultMessage = document.getElementById('default-message');
        const $successMessage = document.getElementById('success-message');

        clipboard.updateOnCopyCallback((clipboard) => {
            showSuccess();

            // reset to default state
            setTimeout(() => {
                resetToDefault();
            }, 2000);
        })

        const showSuccess = () => {
            $defaultMessage.classList.add('hidden');
            $successMessage.classList.remove('hidden');
        }

        const resetToDefault = () => {
            $defaultMessage.classList.remove('hidden');
            $successMessage.classList.add('hidden');
        }
    })
</script>