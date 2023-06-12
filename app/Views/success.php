<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luminous Cosrent</title>
    <link rel="apple-touch-icon" sizes="57x57" href="<?= base_url() ?>/img/icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= base_url() ?>/img/icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url() ?>/img/icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>/img/icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= base_url() ?>/img/icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= base_url() ?>/img/icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url() ?>/img/icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= base_url() ?>/img/icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>/img/icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= base_url() ?>/img/icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>/img/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url() ?>/img/icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>/img/icon/favicon-16x16.png">
    <link rel="manifest" href="<?= base_url() ?>/img/icon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?= base_url() ?>/img/icon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.1/dist/flowbite.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/6.6.4/css/flag-icons.min.css" integrity="sha512-uvXdJud8WaOlQFjlz9B15Yy2Au/bMAvz79F7Xa6OakCl2jvQPdHD0hb3dEqZRdSwG4/sknePXlE7GiarwA/9Wg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
    <style>
        * {
            font-family: 'Nunito';
        }

        .glass {
            background: rgba(255, 255, 255, 0.56);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5.8px);
            -webkit-backdrop-filter: blur(5.8px);
        }

        .custom-background {
            background-image: url("<?= base_url() ?>/img/petra_gurin.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: top;
        }
    </style>
</head>

<body class="custom-background">
    <div class="w-100 min-h-[70vh] flex justify-center content-center p-10 z-100">
        <div class="glass w-full p-7 md:p-14 shadow-lg md:w-[65%] transition duration-400 ease-in">
            <div class="flex justify-between">
                <div class="mb-6">
                    <h1 class="text-2xl md:text-3xl text-gray-900" id="titleForm2"></h1>
                </div>
                <div class="mb-6">
                    <label for="languange" class="block mb-2 text-sm font-medium text-gray-900"><span id="bahasa"></span></label>
                    <select id="languange" class="bg-gray-50 w-[100px] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="ID">ID</option>
                        <option value="EN">EN</option>
                    </select>
                </div>
            </div>
            <h1 class="text-center text-2xl font-bold mb-10" id="title">Success</h1>

            <div class="p-4 w-full rounded-lg border shadow-md sm:p-6 bg-gray-800 border-gray-700">
                <h5 class="mb-3 text-base font-semibold md:text-xl text-white" id="select">
                    Select payment method
                </h5>
                <p class="text-sm font-normal text-gray-500 dark:text-gray-400" id="silahkan">Please make payment via</p>
                <ul class="my-4 space-y-3">
                    <li>
                        <div class="flex items-center p-3 text-base text-gray-900 bg-gray-50 rounded-lg hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                            <img src="<?= base_url() ?>/img/logo bri.jpg" alt="" class="w-24 rounded-lg">
                            <span class="md:flex">
                                <span class="flex-1 ml-3 font-bold md:whitespace-nowrap">624801020385535</span>
                                <p class="md:flex-1 ml-3 md:whitespace-nowrap"> A/N Lintang Yadian Ayuningtyas</p>
                                <input type="hidden" id="bri-copy" value="624801020385535">
                            </span>
                            <span data-tooltip-target="tooltip-copy" class="inline-flex items-center justify-center px-2 py-0.5 ml-3 text-xs font-medium rounded cursor-pointer bg-gray-700 text-gray-400" id="btn-bri" onclick="copyText('bri-copy', this.id)">
                                <ion-icon name="copy-outline" class="mr-1"></ion-icon>Copy
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center p-3 text-base text-gray-900 bg-gray-50 rounded-lg hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                            <img src="<?= base_url() ?>/img/Logo shopeepay.png" alt="" class="w-24 py-4 rounded-lg bg-white">
                            <span class="md:flex">
                                <span class="flex-1 ml-3 font-bold md:whitespace-nowrap">081232889441</span>
                                <p class="md:flex-1 ml-3 md:whitespace-nowrap"> A/N Lintang Yadian Ayuningtyas</p>
                                <input type="hidden" id="spay-copy" value="081232889441">
                            </span>
                            <span data-tooltip-target="tooltip-copy" class="inline-flex items-center justify-center px-2 py-0.5 ml-10 text-xs font-medium rounded cursor-pointer bg-gray-700 text-gray-400" id="btn-spay" onclick="copyText('spay-copy', this.id)">
                                <ion-icon name="copy-outline" class="mr-1"></ion-icon> Copy
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center p-3 text-base rounded-lg group hover:shadow bg-gray-600 hover:bg-gray-500 text-white">
                            <img src="<?= base_url() ?>/img/logo dana.png" alt="" class="w-24 rounded-lg">
                            <span class="md:flex">
                                <span class="flex-1 ml-3 font-bold md:whitespace-nowrap">081232889441</span>
                                <p class="md:flex-1 ml-3 md:whitespace-nowrap"> A/N Lintang Yadian Ayuningtyas</p>
                                <input type="hidden" id="dana-copy" value="081232889441">
                            </span>
                            <span data-tooltip-target="tooltip-copy" class="inline-flex items-center justify-center px-2 py-0.5 ml-10 text-xs font-medium rounded cursor-pointer bg-gray-700 text-gray-400" id="btn-dana" onclick="copyText('dana-copy', this.id)">
                                <ion-icon name="copy-outline" class="mr-1"></ion-icon> Copy
                            </span>
                            <div id="tooltip-copy" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
                                Copy number
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                        </div>
                    </li>
                </ul>
                <span class="p-1 before:block before:absolute before:-inset-1 before:bg-white relative inline-block">
                    <span class="text-xl relative text-red-600" id="proof">*Send proof of payment via Instagram DM*</span>
                    <a href="https://instagram.com/luminous_cosrent?igshid=YmMyMTA2M2Y=" data-tooltip-target="tooltip-default" class="text-xl relative text-red-600 underline hover:text-blue-500">@luminous_cosrent</a>
                    <div id="tooltip-default" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
                        Open Instagram
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                </span>
            </div>
        </div>
    </div>



    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/flowbite@1.5.1/dist/datepicker.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
    <script>
        var LANG = {
            bahasa: ["Languanges", "Bahasa"],
            title: ['Success', 'Sukses'],
            select: ['Select payment method', 'Pilih metode pembayaran'],
            silahkan: ['Please make payment via', 'Silahkan melakukan pembayaran melalui'],
            proof: ['Send proof of payment via Instagram DM', 'Kirim bukti pembayaran melalui DM Instagram'],

        }

        $(document).ready(switchLanguanges(1));

        $('#languange').on('change', function() {
            if (this.value === 'EN') {
                $('#languange2').val('EN')
                switchLanguanges(0);
            } else {
                $('#languange2').val('ID')
                switchLanguanges(1);
            }
        });

        function switchLanguanges(n) {

            $('#title').text(LANG['title'][n]);

            $('#bahasa').text(LANG['bahasa'][n]);
            $('#silahkan').text(LANG['silahkan'][n]);
            $('#select').text(LANG['select'][n]);
            $('#proof').text('*' + LANG['proof'][n] + '*');
        }

        function copyText(id, btnId) {
            console.log(btnId)
            var copyText = document.getElementById(`${id}`);

            copyText.select();

            navigator.clipboard.writeText(copyText.value);

            $(`#${btnId}`).removeClass(['text-gray-400', 'bg-gray-700']);
            $(`#${btnId}`).addClass(['text-white', 'bg-emerald-500']);
            $(`#${btnId}`).find('ion-icon').prop('name', 'checkmark');

            var cd = setInterval(() => {
                $(`#${btnId}`).removeClass(['text-white', 'bg-emerald-500']);
                $(`#${btnId}`).addClass(['text-gray-400', 'bg-gray-700']);
                $(`#${btnId}`).find('ion-icon').prop('name', 'copy-outline');
                clearInterval(cd);
            }, 4000);

        }
    </script>
</body>

</html>