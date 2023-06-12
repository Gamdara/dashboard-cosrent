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

        .splash-screen {
            /* background-image: url("<?= base_url() ?>/img/splash2.jpg"); */
            background-size: cover;
            background-repeat: no-repeat;
            background-position: bottom;
        }
    </style>
</head>

<body class="custom-background">
    <div class="fixed grid place-items-center bg-[url(<?= base_url('/img/splash_sm.jpg') ?>)] md:bg-[url(<?= base_url('/img/splash3.jpg') ?>)] splash-screen h-[100%] w-full z-50 transition duration-1000 ease-out" id="loading-screen">
        <div class="rounded-full overflow-hidden w-[20%] md:w-[12%] animate-bounce">
            <img src="<?= base_url() ?>/img/logo.jpg" alt="">
        </div>
    </div>
    <form action="<?= base_url('pesanan/create') ?>" method="post" enctype="multipart/form-data" class="w-100 min-h-[70vh] flex justify-center content-center p-10" id="store-data">
        <div class="glass w-full p-7 md:p-14 shadow-lg md:w-[65%] transition duration-400 ease-in opacity-0" id="form-data-diri">
            <div class="flex justify-between">
                <div class="mb-6">
                    <h1 class="text-3xl text-gray-900" id="titleForm1"></h1>
                </div>
                <div class="mb-6">
                    <label for="languange" class="block mb-2 text-base font-bold text-gray-900"><span id="bahasa"></span></label>
                    <select id="languange" class="bg-gray-50 w-[60px] md:w-[100px] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="ID">ID</option>
                        <option value="EN">EN</option>
                    </select>
                </div>
            </div>

            <div class="mb-6">
                <label for="nama_lengkap" class="block mb-2 text-sm font-bold text-gray-900"><span id="nl"></span></label>
                <input type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                <i class="text-xs text-red-600 font-bold"><span id="sm_nl" class="hidden"></span></i>
            </div>
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="Nama Lengkap" class="block mb-2 text-sm font-bold text-gray-900"><span id="sosmed1"></span> 1</label>
                    <input type="text" name="social_media" id="social_media" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required="">
                    <i class="text-xs text-red-600 font-bold">* <span id="sm_note"></span></i>
                </div>
                <div>
                    <label for="Nama Lengkap" class="block mb-2 text-sm font-bold text-gray-900"><span id="sosmed2"></span> 2</label>
                    <input type="text" name="social_media2" id="social_media2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required="">
                    <i class="text-xs text-red-600 font-bold">* <span id="sm_note2"></span></i>
                </div>
                <div>
                    <label class="block mb-2 text-sm font-bold text-gray-900" for="default_size"><span id="ktp"></span></label>
                    <input name="ktp" id="file_ktp" class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="default_size" type="file">
                    <i class="text-xs text-red-600 font-bold"><span id="sm_ktp" class="hidden"></span></i>
                </div>
                <div>
                    <label class="block mb-2 text-sm font-bold text-gray-900" for="default_size"><span id="selfie_ktp"></span></label>
                    <input name="ktp_selfie" id="file_selfie" class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="default_size" type="file">
                    <i class="text-xs text-red-600 font-bold"><span id="sm_selfie" class="hidden"></span></i>
                </div>
            </div>
            <div class="mb-6">
                <label for="no_hp_kerabat" class="block mb-2 text-sm font-bold text-gray-900"><span id="tx-phone"></span></label>
                <input type="text" name="hp_kerabat" id="no_hp_kerabat" placeholder="ex:08xxxxxxxxxxx" maxlength="13" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="john.doe@company.com" required="">
                <i class="text-xs text-red-600 font-bold"><span id="sm_kerabat" class="hidden"></span></i>
            </div>
            <div class="flex items-start mb-6">
                <div class="flex items-center h-5">
                    <input id="real" type="checkbox" value="" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required="">
                </div>
                <label for="remember" class="ml-2 text-sm font-medium text-gray-900"><span id="con"></span>.</label>
            </div>
            <button type="button" id="btn-next" disabled class="flex text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-3 text-center mr-2 mb-2">
                <span class="flex inline-block">
                    Next
                </span>
                <span class="flex inline-block align-middle ml-1">
                    <img src="<?= base_url() ?>/img/icon.png" alt="" class="h-5 w-5 bg-center bg-cover">
                </span>
            </button>
        </div>



        <div class="glass w-full p-14 shadow-lg md:w-[65%] hidden" id="form-pengiriman">
            <div class="flex justify-between">
                <div class="mb-6">
                    <h1 class="text-2xl md:text-3xl text-gray-900" id="titleForm2"></h1>
                </div>
                <div class="mb-6">
                    <label for="languange2" class="block mb-2 text-sm font-medium text-gray-900"><span id="bahasa"></span></label>
                    <select id="languange2" class="bg-gray-50 w-[100px] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="ID">ID</option>
                        <option value="EN">EN</option>
                    </select>
                </div>
            </div>

            <div class="mb-6">
                <label for="nama_penerima" class="block mb-2 text-sm font-medium"><span id="np"></span></label>
                <input type="text" id="nama_penerima" name="nama_penerima" placeholder="Nama Penerima" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                <i class="text-xs text-red-600 font-bold"><span id="sm_penerima" class="hidden"></span></i>
            </div>
            <div class="mb-6">
                <label for="kostum" class="block mb-2 text-sm font-medium"><span id="nk"></span></label>
                <input type="text" id="kostum" name="kostum" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required="">
                <i class="text-xs text-red-600 font-bold"><span id="sm_kostum" class="hidden"></span></i>
            </div>
            <div class="mb-6">
                <label for="alamat" class="block mb-2 text-sm font-medium"><span id="na"></span></label>
                <textarea id="alamat" name="alamat" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                <i class="text-xs text-red-600 font-bold"><span id="sm_alamat" class="hidden"></span></i>
            </div>
            <div class="mb-6">
                <label for="no_hp" class="block mb-2 text-sm font-medium"><span id="tx-hp"></span></label>
                <input type="text" name="no_hp" id="no_hp" placeholder="ex:08xxxxxxxxxxx" maxlength="13" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="john.doe@company.com" required="">
                <i class="text-xs text-red-600 font-bold"><span id="sm_hp" class="hidden"></span></i>
            </div>
            <div class="mb-6">
                <label for="payment" class="block mb-2 text-sm font-medium"><span id="tx-payment"></span></label>
                <div class="md:flex items-start justify-between w-full md:w-[75%]">
                    <div class="flex items-center w-full pl-4 mb-3 md:mr-3 rounded-lg bg-gray-700 border border-gray-200 dark:border-gray-700">
                        <input id="dp" type="radio" value="dp" name="jenis_payment" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="dp" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Down Payment(DP)</label>
                    </div>
                    <div class="flex items-center w-full pl-4 md:ml-3 rounded-lg bg-gray-700 border border-gray-200 dark:border-gray-700">
                        <input id="fp" type="radio" value="full" name="jenis_payment" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="fp" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Full Pay</label>
                    </div>
                </div>
                <i class="text-xs text-red-600 font-bold"><span id="sm_payment" class="hidden"></span></i>
            </div>
            <div class="mb-6">
                <div class="relative">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input datepicker="" datepicker-buttons datepicker-format="yyyy-mm-dd" id="tanggal_sewa" name="tanggal_sewa" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 datepicker-input" placeholder="Select date">
                </div>
                <i class="text-xs text-red-600 font-bold"><span id="sm_sewa" class="hidden"></span></i>
            </div>

            <div class="flex items-start mb-6">
                <div class="flex items-center h-5">
                    <input id="agree" type="checkbox" value="" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required="">
                </div>
                <label for="agree" class="ml-2 text-sm font-medium text-gray-900"><span id="term1"></span><a href="#" id="showModalTNC" class="text-blue-600 hover:underline" data-modal-toggle="modalTNC"><span id="term2"></span></a>.</label>
            </div>
            <div class="flex items-start mb-6">
                <div class="flex items-center h-5">
                    <input id="agreeReturn" type="checkbox" value="" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required="">
                </div>
                <label for="agreeReturn" class="ml-2 text-sm font-medium text-gray-900"><span id="termR1"></span><a href="#" id="showModalReturn" class="text-blue-600 hover:underline" data-modal-toggle="modalReturn"><span id="termR2"></span></a>.</label>
            </div>
            <div class="flex items-start mb-6">
                <div class="flex items-center h-5">
                    <input id="agreeMR" type="checkbox" value="" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required="">
                </div>
                <label for="agreeMR" class="ml-2 text-sm font-medium text-gray-900"><span id="termMR1"></span><a href="#" id="showModalMR" class="text-blue-600 hover:underline" data-modal-toggle="modalMR"><span id="termMR2"></span></a>.</label>
            </div>

            <div class="flex space-x-1">
                <button type="button" id="btn-back" class="flex text-white bg-gradient-to-r from-red-400 via-red-600 to-red-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-3 text-center mr-2 mb-2">
                    <span class="flex inline-block align-middle mr-1">
                        <img src="<?= base_url() ?>/img/icon.png" alt="" class="h-5 w-5 bg-center bg-cover">
                    </span>
                    <span class="inline-block align-middle" id="kembali">Back</span>
                </button>
                <button type="button" id="btn-submit" disabled class="text-white bg-gradient-to-r from-blue-500 via-blue-700 to-blue-800 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-3 text-center mr-2 mb-2">Submit</button>
            </div>
        </div>
    </form>


    <div id="modalTNC" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
            <div class="relative rounded-lg shadow bg-gray-700">
                <div class="flex justify-between items-start p-4 rounded-t border-b border-gray-600">
                    <h3 class="text-xl font-semibold text-white" id="titleTNC">
                    </h3>
                    <button type="button" class="bg-transparent hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center hover:bg-gray-600 hover:text-white" data-modal-toggle="modalTNC">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="p-10 space-y-5">
                    <ul class="list-disc text-white">
                        <li>Wajib mengisi form yang admin berikan.</li>
                        <li>DP 50% diperbolehkan, namun kostum dikirim setelah lunas</li>
                        <li>tidak terima DADAKAN. Usahakan h-7 sebelum event kalau booking</li>
                        <li>Admin mengirim kostum atas tanggal yang kalian minta. Kostum telat, diluar tanggung jawab admin.</li>
                        <li>Apabila kostum kekecilan, jangan dipaksa pakai. Admin cantumkan detail sizenya agar kalian bisa pilih kostum ukuran kalian.</li>
                        <li>WAJIB memakai akun asli (setidaknya ada foto kalian di postingan) dan tidak digembok.</li>
                    </ul>
                </div>
                <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                    <button data-modal-toggle="modalTNC" id="setujuTNC" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                    <button data-modal-toggle="modalTNC" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div id="modalReturn" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
            <div class="relative rounded-lg shadow bg-gray-700">
                <div class="flex justify-between items-start p-4 rounded-t border-b border-gray-600">
                    <h3 class="text-xl font-semibold text-white" id="titleReturn">
                    </h3>
                    <button type="button" class="bg-transparent hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center hover:bg-gray-600 hover:text-white" data-modal-toggle="modalTNC">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="p-10 space-y-5">
                    <ul class="list-disc text-white">
                        <li>Tidak boleh memakai plastik yang tembus pandang (rawan hilang)</li>
                        <li>Kostum tidak perlu dicuci, kecuali ada noda (chat admin dulu)</li>
                        <li>Jika memakai kostum hingga berkeringat, tolong di angin anginkan dulu sebelum dikembalikan.</li>
                        <li>Pengembalian dilarang menggunakan jasa selain yang disarankan (JNE/JNT)</li>
                        <li>Tidak bisa refund jika kesalahan bukan dari kita (Event batal, pengiriman datang telat)</li>
                        <li>Chat admin untuk detail alamat pengembalian</li>
                    </ul>
                </div>
                <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                    <button data-modal-toggle="modalReturn" id="setujuReturn" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                    <button data-modal-toggle="modalReturn" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div id="modalMR" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
            <div class="relative rounded-lg shadow bg-gray-700">
                <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-white" id="titleMR">
                    </h3>
                    <button type="button" class="bg-transparent hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center hover:bg-gray-600 hover:text-white" data-modal-toggle="modalMR">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="p-10 space-y-5">
                    <ul class="list-disc text-white">
                        <li>wajib membuat video unboxing pada saat paket datang dan sebelum mengembalikan paket.</li>
                        <li>DILARANG mengubah stylingan wig (gunting, lem, dll)</li>
                        <li>Tidak bisa ganti tanggal / karakter yang sudah di booking</li>
                        <li>Kostum / acc hilang, menggantikan harga yang sama</li>
                        <li>Kostum / acc rusak, ganti biaya repair</li>
                        <li>Telat mengembalikan, denda 35k/hari</li>
                        <li>Wig kusut parah, ganti harga repair.</li>
                        <li>Plastik / net wig hilang, denda 5k</li>
                    </ul>

                    <span class="p-1 before:block before:absolute before:-inset-1 before:-skew-y-3 before:bg-white relative inline-block">
                        <span class="text-2xl relative text-red-600">*CANCEL, DP/FULLPAY HANGUS*</span>
                    </span>

                    <span class="p-1 before:block before:absolute before:-inset-1 before:-skew-y-3 before:bg-white relative inline-block">
                        <span class="text-2xl relative text-red-600 -skew-y-3">*Tidak bertanggung jawab, auto blacklist*</span>
                    </span>

                </div>
                <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                    <button data-modal-toggle="modalMR" id="setujuMR" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                    <button data-modal-toggle="modalMR" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/flowbite@1.5.1/dist/datepicker.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $('#loading-screen').css('opacity', '0');
                setTimeout(function() {
                    $('#loading-screen').addClass('hidden');
                    $('#form-data-diri').css('opacity', '1');
                }, 1100);
            }, 2500);
        });

        var LANG = {
            bahasa: ["Languanges", "Bahasa"],
            title1: ['Personal Data', 'Data Diri'],
            title2: ['Shipping Data', 'Data Pengiriman'],
            nama: ["Full Name", "Nama Lengkap"],
            sosmed: ["Social Media", "Sosial Media"],
            sosmed_note: ["Must include an active Social Media account", "Wajib mencatumkan akun Sosial Media yang masih aktif"],
            ktp: ["Photo ID", "Foto KTP"],
            selfie: ["Selfie with ID", "Foto Selfie KTP"],
            kerabat: ["Relative's phone number", "No.HP Kerabat"],
            con: ['Confirm the data entered is correct', 'Konfirmasi data yang diinputkan sudah benar'],
            setuju: ["I agree with ", "Saya setuju dengan "],
            term: ['Term & Condition', 'Syarat & Ketentuan'],
            termR: ['Term & Condition Return', 'Syarat & Ketentuan Pengembalian'],
            termMR: ['Term & Condition Costume', 'Syarat & Ketentuan Kostum'],
            penerima: ["Recipient's name", 'Nama Penerima'],
            kostum: ['Costume name', 'Nama Kostum'],
            pay: ['Payment option', 'Opsi Pembayaran'],
            alamat: ['Recipient address', 'Alamat Penerima'],
            hp: ['Recipient phone number', 'No.HP Penerima'],
            kembali: ['Back', 'Kembali'],

            blank: ['Fill this field first', 'Isi data ini terlebih dahulu'],

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
        $('#languange2').on('change', function() {
            if (this.value === 'EN') {
                $('#languange').val('EN')
                switchLanguanges(0);
            } else {
                $('#languange').val('ID')
                switchLanguanges(1);
            }
        });

        $('#btn-next').on('click', function() {
            let a = checkFirstForm();
            if (!a.includes(false)) {
                $('#form-data-diri').addClass("hidden");
                $('#form-pengiriman').removeClass("hidden");
            }
        });
        $('#btn-back').on('click', function() {
            $('#form-data-diri').removeClass("hidden");
            $('#form-pengiriman').addClass("hidden");
        });
        $('#btn-submit').on('click', function() {
            let a = checkSecondForm();
            if (!a.includes(false)) {
                $('#store-data').trigger('submit');
            }
        });

        $('#agree').on('change', function() {
            $('#agree').prop('checked', false);
            document.getElementById('showModalTNC').click();
            isAgree();
        });
        $('#setujuTNC').on('click', function() {
            $('#agree').prop('checked', true);
            isAgree();
        });

        $('#agreeMR').on('change', function() {
            $('#agreeMR').prop('checked', false);
            document.getElementById('showModalMR').click();
            isAgree();
        });
        $('#setujuMR').on('click', function() {
            $('#agreeMR').prop('checked', true);
            isAgree();
        });

        $('#agreeReturn').on('change', function() {
            $('#agreeReturn').prop('checked', false);
            document.getElementById('showModalReturn').click();
            isAgree();
        });
        $('#setujuReturn').on('click', function() {
            $('#agreeReturn').prop('checked', true);
            isAgree();
        });

        $('#real').on('change', function() {
            if ($('#real').is(':checked')) {
                $('#btn-next').attr('disabled', false);
            } else {
                $('#btn-next').attr('disabled', true);
            }
        });

        function checkFirstForm() {
            let filled = [];
            if ($('#nama_lengkap').val() == '') {
                $('#sm_nl').removeClass('hidden');
                filled.push(false)
            } else {
                $('#sm_nl').addClass('hidden');
                filled.push(true)
            }
            if ($('#no_hp_kerabat').val() == '') {
                $('#sm_kerabat').removeClass('hidden');
                filled.push(false)
            } else {
                $('#sm_kerabat').addClass('hidden');
                filled.push(true)
            }
            if ($('#file_ktp').val() == '') {
                $('#sm_ktp').removeClass('hidden');
                filled.push(false)
            } else {
                $('#sm_ktp').addClass('hidden');
                filled.push(true)
            }
            if ($('#file_selfie').val() == '') {
                $('#sm_selfie').removeClass('hidden');
                filled.push(false)
            } else {
                $('#sm_selfie').addClass('hidden');
                filled.push(true)
            }
            // if()

            return filled;
        }

        function checkSecondForm() {
            let filled = [];
            if ($('#nama_penerima').val() == '') {
                $('#sm_penerima').removeClass('hidden');
                filled.push(false)
            } else {
                $('#sm_penerima').addClass('hidden');
                filled.push(true)
            }
            if ($('#no_hp').val() == '') {
                $('#sm_hp').removeClass('hidden');
                filled.push(false)
            } else {
                $('#sm_hp').addClass('hidden');
                filled.push(true)
            }
            if ($('#kostum').val() == '') {
                $('#sm_kostum').removeClass('hidden');
                filled.push(false)
            } else {
                $('#sm_kostum').addClass('hidden');
                filled.push(true)
            }
            if ($('#alamat').val() == '') {
                $('#sm_alamat').removeClass('hidden');
                filled.push(false)
            } else {
                $('#sm_alamat').addClass('hidden');
                filled.push(true)
            }
            if ($('[name="jenis_payment"]').is(':checked')) {
                $('#sm_payment').addClass('hidden');
                filled.push(true)
            } else {
                $('#sm_payment').removeClass('hidden');
                filled.push(false);
            }
            if ($('#tanggal_sewa').val() == '') {
                $('#sm_sewa').removeClass('hidden');
                filled.push(false)
            } else {
                $('#sm_sewa').addClass('hidden');
                filled.push(true)
            }

            return filled;
        }

        function isAgree() {
            if ($('#agree').is(':checked') && $('#agreeReturn').is(':checked') && $('#agreeMR').is(':checked')) {
                $('#btn-submit').attr('disabled', false);
            } else {
                $('#btn-submit').attr('disabled', true);
            }
        }

        function switchLanguanges(n) {

            $('#titleForm1').text(LANG['title1'][n]);
            $('#titleForm2').text(LANG['title2'][n]);

            $('#sm_nl').text(LANG['blank'][n]);
            $('#sm_kerabat').text(LANG['blank'][n]);
            $('#sm_ktp').text(LANG['blank'][n]);
            $('#sm_selfie').text(LANG['blank'][n]);
            $('#sm_penerima').text(LANG['blank'][n]);
            $('#sm_alamat').text(LANG['blank'][n]);
            $('#sm_kostum').text(LANG['blank'][n]);
            $('#sm_hp').text(LANG['blank'][n]);
            $('#sm_payment').text(LANG['blank'][n]);
            $('#sm_sewa').text(LANG['blank'][n]);

            $('#bahasa').text(LANG['bahasa'][n]);
            $('#nl').text(LANG['nama'][n]);
            $('#nama_lengkap').attr("placeholder", LANG['nama'][n]);

            $('#sosmed1').text(LANG['sosmed'][n]);
            $('#sosmed2').text(LANG['sosmed'][n]);
            $('#social_media').attr("placeholder", LANG['sosmed'][n]);
            $('#social_media2').attr("placeholder", LANG['sosmed'][n]);
            $('#sm_note').text(LANG['sosmed_note'][n]);
            $('#sm_note2').text(LANG['sosmed_note'][n]);

            $('#ktp').text(LANG['ktp'][n]);
            $('#selfie_ktp').text(LANG['selfie'][n]);
            $('#tx-phone').text(LANG['kerabat'][n]);
            $('#tx-payment').text(LANG['pay'][n]);
            $('#con').text(LANG['con'][n]);

            $('#term1').text(LANG['setuju'][n]);
            $('#term2').text(LANG['term'][n]);
            $('#titleTNC').text(LANG['term'][n]);
            $('#termMR1').text(LANG['setuju'][n]);
            $('#termMR2').text(LANG['termMR'][n]);
            $('#titleMR').text(LANG['termMR'][n]);
            $('#termR1').text(LANG['setuju'][n]);
            $('#termR2').text(LANG['termR'][n]);
            $('#titleReturn').text(LANG['termR'][n]);

            $('#np').text(LANG['penerima'][n]);
            $('#nama_penerima').attr("placeholder", LANG['penerima'][n]);

            $('#nk').text(LANG['kostum'][n]);
            $('#kostum').attr("placeholder", LANG['kostum'][n]);

            $('#na').text(LANG['alamat'][n]);
            $('#alamat').attr("placeholder", LANG['alamat'][n]);

            $('#tx-hp').text(LANG['hp'][n]);
            $('#kembali').text(LANG['kembali'][n]);
        }
    </script>
</body>

</html>