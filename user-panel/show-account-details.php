<?php include("./header-user-panel.php") ?>


<!-- main -->
<div class="p-4 sm:mr-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg  mt-14">

        <div class="grid grid-cols-2 gap-4 mb-4">
            <div class="flex items-center justify-center rounded-sm bg-gray-50 gap-3  h-14 ">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <span>یوزر اکانت شما</span>

            </div>
            <div class="flex items-center justify-center rounded-sm bg-gray-50 h-14 ">
                <?php
                $userAccount = $_GET['inptUser'];

                ?>




                <div class="w-full max-w-[16rem]" dir="ltr">
                    <div class="relative">
                        <label for="npm-install-copy-text" class="sr-only">Label</label>
                        <input id="npm-install-copy-text" type="text" class="block border border-gray-300 focus:border-blue-500 focus:ring-blue-500 px-3 py-2.5 rounded-lg text-gray-500 text-sm w-full" value=<?php echo $userAccount ?> disabled readonly>
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

        </div>


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