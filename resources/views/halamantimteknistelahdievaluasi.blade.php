<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/png" href=" {{ asset('assets/img/logo-esdm.svg') }} " />
  <title>Daftar Permohonan</title>
  <!--     Fonts and icons     -->

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Nucleo Icons -->
  <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- Popper -->
  <script src="https://unpkg.com/@popperjs/core@2"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Main Styling -->
  <link href="{{ asset('assets/css/argon-dashboard-tailwind.css?v=1.0.1') }}" rel="stylesheet" />
</head>
<style>
  .border-red-500 {
    border-color: red !important;
    outline: none;
  }

  .hidden {
    display: none;
  }

  .overflow-scroll {
    overflow-x: auto;
  }

  table {
    border-collapse: collapse;
    min-width: 600px;
  }

  th,
  td {
    border: 1px solid #ccc;
    padding: 6px;
    text-align: center;
  }

  input {
    width: 100%;
    padding: 4px;
    box-sizing: border-box;
  }

  @media screen and (max-width: 768px) {
    .overflow-scroll {
      width: 100%;
      display: block;
    }
  }
</style>

<body class="m-0 font-sans text-base antialiased font-normal dark:bg-slate-900 leading-default bg-gray-50 text-slate-500">
  <div class="absolute w-full bg-blue-500 dark:hidden min-h-75"></div>


  <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-90 rounded-xl">
    <!-- Navbar -->
    <nav
      class="relative flex flex-wrap items-center justify-between px-2 py-2 mx-1 transition-all ease-in shadow-none duration-250 rounded-2xl lg:flex-nowrap lg:justify-start"
      navbar-main navbar-scroll="false">
      <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
        <nav>
          <!-- breadcrumb -->
          <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
            <li class="text-sm leading-normal">
              <a class="text-white opacity-50" href="javascript:;">Halaman</a>
            </li>
            <li
              class="text-sm pl-2 capitalize leading-normal text-white before:float-left before:pr-2 before:text-white before:content-['/']"
              aria-current="page">Data Teknis</li>
          </ol>
          <h6 class="mb-0 font-bold text-white capitalize">Data Teknis</h6>
        </nav>

        <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
          <div class="flex items-center md:ml-auto md:pr-4">
            <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease">
              <span
                class="text-sm ease leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                <i class="fas fa-search"></i>
              </span>
            </div>
          </div>
          <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
            <!-- online builder btn  -->
            <!-- <li class="flex items-center">
                <a class="inline-block px-8 py-2 mb-0 mr-4 text-xs font-bold text-center text-blue-500 uppercase align-middle transition-all ease-in bg-transparent border border-blue-500 border-solid rounded-lg shadow-none cursor-pointer leading-pro hover:-translate-y-px active:shadow-xs hover:border-blue-500 active:bg-blue-500 active:hover:text-blue-500 hover:text-blue-500 tracking-tight-rem hover:bg-transparent hover:opacity-75 hover:shadow-none active:text-white active:hover:bg-transparent" target="_blank" href="https://www.creative-tim.com/builder/soft-ui?ref=navbar-dashboard&amp;_ga=2.76518741.1192788655.1647724933-1242940210.1644448053">Online Builder</a>
              </li> -->

            <li class="flex items-center pl-4 xl:hidden">
              <a href="javascript:;" class="block p-0 text-sm text-white transition-all ease-nav-brand" sidenav-trigger>
                <div class="w-4.5 overflow-hidden">
                  <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"></i>
                  <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"></i>
                  <i class="ease relative block h-0.5 rounded-sm bg-white transition-all"></i>
                </div>
              </a>
            </li>
            <li class="flex items-center px-4">
              <a href="javascript:;" class="p-0 text-sm text-white transition-all ease-nav-brand">
                <i fixed-plugin-button-nav class="cursor-pointer fa fa-cog"></i>
                <!-- fixed-plugin-button-nav  -->
              </a>
            </li>

            <!-- notifications -->

            <li class="relative flex items-center pr-2">
              <p class="hidden transform-dropdown-show"></p>
              <a href="javascript:;" class="block p-0 text-sm text-white transition-all ease-nav-brand" dropdown-trigger
                aria-expanded="false">
                <i class="cursor-pointer fa fa-bell"></i>
              </a>

              <ul dropdown-menu
                class="text-sm transform-dropdown before:font-awesome before:leading-default before:duration-350 before:ease lg:shadow-3xl duration-250 min-w-44 before:sm:right-8 before:text-5.5 pointer-events-none absolute right-0 top-0 z-50 origin-top list-none rounded-lg border-0 border-solid border-transparent dark:shadow-dark-xl dark:bg-slate-850 bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all before:absolute before:right-2 before:left-auto before:top-0 before:z-50 before:inline-block before:font-normal before:text-white before:antialiased before:transition-all before:content-['\f0d8'] sm:-mr-6 lg:absolute lg:right-0 lg:left-auto lg:mt-2 lg:block lg:cursor-pointer">
                <!-- add show class on dropdown open js -->
                <li class="relative mb-2">
                  <a class="dark:hover:bg-slate-900 ease py-1.2 clear-both block w-full whitespace-nowrap rounded-lg bg-transparent px-4 duration-300 hover:bg-gray-200 hover:text-slate-700 lg:transition-colors"
                    href="javascript:;">
                    <div class="flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/team-2.jpg"
                          class="inline-flex items-center justify-center mr-4 text-sm text-white h-9 w-9 max-w-none rounded-xl" />
                      </div>
                      <div class="flex flex-col justify-center">
                        <h6 class="mb-1 text-sm font-normal leading-normal dark:text-white"><span
                            class="font-semibold"> New message</span> from Laur</h6>
                        <p class="mb-0 text-xs leading-tight text-slate-400 dark:text-white/80">
                          <i class="mr-1 fa fa-clock"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>

                <li class="relative mb-2">
                  <a class="dark:hover:bg-slate-900 ease py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 transition-colors duration-300 hover:bg-gray-200 hover:text-slate-700"
                    href="javascript:;">
                    <div class="flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/small-logos/logo-spotify.svg"
                          class="inline-flex items-center justify-center mr-4 text-sm text-white bg-gradient-to-tl from-zinc-800 to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 h-9 w-9 max-w-none rounded-xl" />
                      </div>
                      <div class="flex flex-col justify-center">
                        <h6 class="mb-1 text-sm font-normal leading-normal dark:text-white"><span
                            class="font-semibold">New album</span> by Travis Scott</h6>
                        <p class="mb-0 text-xs leading-tight text-slate-400 dark:text-white/80">
                          <i class="mr-1 fa fa-clock"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>

                <li class="relative">
                  <a class="dark:hover:bg-slate-900 ease py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 transition-colors duration-300 hover:bg-gray-200 hover:text-slate-700"
                    href="javascript:;">
                    <div class="flex py-1">
                      <div
                        class="inline-flex items-center justify-center my-auto mr-4 text-sm text-white transition-all duration-200 ease-nav-brand bg-gradient-to-tl from-slate-600 to-slate-300 h-9 w-9 rounded-xl">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                          xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background"
                                    d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                    opacity="0.593633743"></path>
                                  <path class="color-background"
                                    d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                  </path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="flex flex-col justify-center">
                        <h6 class="mb-1 text-sm font-normal leading-normal dark:text-white">Payment successfully
                          completed</h6>
                        <p class="mb-0 text-xs leading-tight text-slate-400 dark:text-white/80">
                          <i class="mr-1 fa fa-clock"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- end Navbar -->


    <!-- Card Form Pengajuan Surat -->
    <div class="flex justify-center px-3 mb-6">
      <div class="w-full max-w-full px-3 mb-6 sm:w-full sm:flex-none xl:mb-0 xl:w-full">
        <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
          <div class="flex-auto p-4">
            <div class="flex flex-col -mx-3">
              <div class="w-full max-w-full px-3">


                <!-- Halaman 1: Data Administrasi -->
                <div id="page1">
                  <h2 class="text-center font-bold text-lg bg-gray-100 p-3 rounded-t border-b border-gray-300">DATA ADMINISTRASI</h2>
                  <!-- Container 3 Kolom -->
                  <div class="grid grid-cols-1 md:grid-cols-3 border border-gray-200 rounded-b shadow-sm overflow-hidden">

                    <!-- Kolom 1: Data Administrasi -->
                    <div class="bg-white rounded shadow p-4 space-y-3">
                      <h2 class="text-lg text-center font-bold border-b pb-2 mb-2">Profil Badan Usaha</h2>
                      <div class="text-sm space-y-2">
                        <div class="flex">
                          <div class="w-48 font-semibold">Nama Badan Usaha</div>
                          <div>: Perseroan Terbatas (PT)</div>
                        </div>
                        <div class="flex">
                          <div class="w-48 font-semibold">Nama Pengguna</div>
                          <div>: Fahrul Uron</div>
                        </div>
                        <div class="flex">
                          <div class="w-48 font-semibold">Kode KBLI</div>
                          <div>: 55311</div>
                        </div>
                        <div class="flex">
                          <div class="w-48 font-semibold">Judul KBLI</div>
                          <div>: Pertambangan dan Penggalian</div>
                        </div>
                        <div class="flex">
                          <div class="w-48 font-semibold">No Tlp / HP</div>
                          <div>: 08123456789</div>
                        </div>
                        <div class="flex">
                          <div class="w-48 font-semibold">Email Perusahaan</div>
                          <div>: info@perusahaan.co.id</div>
                        </div>
                        <div class="flex">
                          <div class="w-48 font-semibold">Alamat Badan Usaha</div>
                          <div>: Jl. Merdeka No. 123, Jakarta</div>
                        </div>
                        <div class="flex">
                          <div class="w-48 font-semibold">NIB</div>
                          <div>
                            : 1234567890123<br>
                          </div>
                        </div>
                        <div class="flex">
                          <div class="w-48 font-semibold">NPWP</div>
                          <div>: 09.123.456.7-890.000</div>
                        </div>
                      </div>
                    </div>

                    <!-- Kolom 2: Lampiran -->
                    <div class="bg-white rounded shadow p-4 flex flex-col space-y-4">
                      <h2 class="text-lg text-center font-bold border-b pb-2 mb-2">Lampiran</h2>

                      <!-- Area Scrollable -->
                      <div class="overflow-y-scroll max-h-[480px] pr-2 rounded-md border border-gray-200">
                        <div class="p-2 space-y-5">

                          <!-- Gambar NIB -->
                          <div>
                            <p class="text-base font-semibold mb-1">NIB (Gambar)</p>
                            <img src="../assets/img/NIB.jpg" class="w-full rounded border" />
                          </div>

                          <!-- Gambar NPWP -->
                          <div>
                            <p class="text-base font-semibold mb-1">NPWP (Gambar)</p>
                            <img src="../assets/img/NPWP.jpg" class="w-full rounded border" />
                          </div>

                          <!-- Dokumen PDF (dibungkus agar tidak memanjang) -->
                          <div>
                            <p class="text-base font-semibold mb-1">NIB (PDF)</p>
                            <div class="w-full h-[300px] rounded overflow-hidden">
                              <iframe
                                src="https://drive.google.com/file/d/13Be63aeAeqLQqcZAKnf0JqMFoQ8gT_w-/preview"
                                class="w-full h-full border-none">
                              </iframe>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>



                    <!-- Kolom 3: Evaluasi -->
                    <div class="bg-white rounded shadow p-4 space-y-4">
                      <h2 class="text-lg text-center font-bold border-b pb-2 mb-2">Evaluasi</h2>

                      <label class="text-sm font-semibold">Catatan Perbaikan:</label>
                      <textarea rows="8" class="w-full p-2 border rounded text-sm bg-gray-100 " readonly>Sudah Benar</textarea>
                      <label class="text-sm font-semibold">Status Permohonan :</label>
                      <!-- Tampilannya untuk pengguna -->
                      <select class="w-full border p-2 rounded text-sm pointer-events-none bg-gray-100">
                      <option selected>Disetujui</option>
                      </select>
                      <!-- Hidden input untuk dikirim ke backend -->
                      <input type="hidden" name="status" value="Disetujui">
                      <!-- Tombol Simpan 1 -->
                        <div class="pt-2">
                        <button onclick="" class="bg-green-600 hover:bg-green-700 text-white font-semibold px-4 py-2 rounded w-full">
                            Simpan Evaluasi
                        </button>
                        </div>

                        <!-- Modal Pop-up 1 -->
                        <div id="popupBerhasil1" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden z-50">
                        <div class="bg-white p-6 rounded-lg shadow-lg text-center w-80">
                            <h2 class="text-lg font-semibold text-green-700 mb-2">Berhasil!</h2>
                            <p class="text-gray-700 mb-4">Evaluasi Berhasil Disimpan</p>
                            <button onclick="tutupPopup1()" class="bg-green-600 hover:bg-green-700 text-white font-semibold px-4 py-2 rounded">
                            OK
                            </button>
                        </div>
                        </div>
                    </div>
                  </div>

                  <div class="mt-6 text-left">

                  </div>

               <!-- Tombol navigasi: Keluar di kiri, Selanjutnya di kanan -->
<div class="mt-6 flex justify-between">
  
  <!-- Tombol Keluar -->
  <a href="/daftarpengajuanteknis"
     class="inline-block px-5 py-2 bg-red-600 text-white font-semibold rounded-lg hover:bg-red-700 transition">
    Keluar
  </a>

  <!-- Tombol Selanjutnya -->
  <button onclick="nextPage()" type="button"
    class="inline-block px-5 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition">
    Selanjutnya
  </button>

</div>

                </div>


<!-- Halaman 2: Data Teknis -->
                <div id="page2" class="hidden">
                  <h2 class="text-center font-bold text-lg bg-gray-100 p-3 rounded-t border-b border-gray-300">DATA TEKNIS</h2>

                  <!-- Container 1: FORM NON SURYA | LAMPIRAN | EVALUASI -->
                  <div class="grid grid-cols-1 md:grid-cols-3 gap-4 border border-gray-200 rounded shadow-sm overflow-hidden p-4">
                    <!-- KOLOM 1: FORM NON SURYA -->
                    <div class="bg-white rounded shadow p-4 space-y-4">
                      <h2 class="text-lg  text-center font-bold border-b pb-2 mb-2">Pembangkit Listrik Tenaga Surya</h2>
                      <div class="overflow-x-auto">
                        <table class="w-full table-auto border text-sm text-left">
                          <thead class="bg-gray-200">
                            <tr>
                              <th class="px-4 py-2 border">Spesifikasi</th>
                              <th class="px-4 py-2 border text-center">Unit 1</th>
                              <th class="px-4 py-2 border text-center">Unit 2</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="border px-4 py-2">Merek</td>
                              <td class="border px-4 py-2 text-center">Elliott</td>
                              <td class="border px-4 py-2 text-center">FG WILSON</td>
                            </tr>
                            <tr>
                              <td class="border px-4 py-2">Tipe</td>
                              <td class="border px-4 py-2 text-center">DYRUG III</td>
                              <td class="border px-4 py-2 text-center">D2840LE201</td>
                            </tr>
                            <tr>
                              <td class="border px-4 py-2">Negara Pembuat</td>
                              <td class="border px-4 py-2 text-center">USA</td>
                              <td class="border px-4 py-2 text-center">GERMANY</td>
                            </tr>
                            <tr>
                              <td class="border px-4 py-2">Tahun Pembuatan</td>
                              <td class="border px-4 py-2 text-center">2010</td>
                              <td class="border px-4 py-2 text-center">2009</td>
                            </tr>
                            <tr>
                              <td class="border px-4 py-2">Kapasitas (kilo waatt-peak)</td>
                              <td class="border px-4 py-2 text-center">1488</td>
                              <td class="border px-4 py-2 text-center">496</td>
                            </tr>
                            <tr>
                              <td class="border px-4 py-2">Titik Koordinat (Latitude)</td>
                              <td class="border px-4 py-2 text-center">-1.234567</td>
                              <td class="border px-4 py-2 text-center">-1.234567</td>
                            </tr>
                            <tr>
                              <td class="border px-4 py-2">Titik Koordinat (Longitude)</td>
                              <td class="border px-4 py-2 text-center">103.456789</td>
                              <td class="border px-4 py-2 text-center">103.456789</td>
                            </tr>
                            <tr>
                              <td class="border px-4 py-2">Sifat Penggunaan</td>
                              <td class="border px-4 py-2 text-center">Darurat</td>
                              <td class="border px-4 py-2 text-center">Sementara</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>

                    <!-- KOLOM 2: LAMPIRAN -->
                    <div class="bg-white rounded shadow p-4 space-y-4">
                      <h2 class="text-lg text-center font-bold border-b pb-2 mb-2">Lampiran</h2>
                      <div class="space-y-4 overflow-y-auto max-h-[500px] pr-2">
                        <div>
                          <p class="text-sm font-bold mb-2">Unit 1 (Gambar)</p><img src="../assets/img/mesinpenggerak.jpg" class="w-full rounded border mt-2" />
                        </div>
                        <div>
                          <p class="text-sm font-semibold mb-1">Foto papan Nama (Nama Plate) Modul PLTS (Gambar)</p><img src="../assets/img/nameplatemesin.jpg" class="w-full rounded border mt-2" />
                        </div>
                        <div>
                          <p class="text-sm font-semibold mb-1">Foto papan Nama (Nama Plate) Inverter PLTS (Gambar)</p><img src="../assets/img/namegenerator.jpg" class="w-full rounded border mt-2" />
                        </div>
                        <div>
                          <p class="text-sm font-bold mb-2">Unit 2 (Gambar)</p><img src="../assets/img/generator.jpg" class="w-full rounded border mt-2" />
                        </div>
                        <div>
                          <p class="text-sm font-semibold mb-1">Foto papan Nama (Nama Plate) Modul PLTS (Gambar)</p><img src="../assets/img/namemesin2.jpg" class="w-full rounded border mt-2" />
                        </div>
                        <div>
                          <p class="text-sm font-semibold mb-1">Foto papan Nama (Nama Plate) Inverter PLTS (Gambar)</p><img src="../assets/img/namegenerator2.jpg" class="w-full rounded border mt-2" />
                        </div>
                      </div>
                    </div>

                    <!-- KOLOM 3: EVALUASI -->
                    <div class="bg-white rounded shadow p-4 space-y-4">
                      <h2 class="text-lg text-center font-bold border-b pb-2 mb-2">Evaluasi</h2>
                      <label class="text-sm font-semibold">Catatan Perbaikan :</label>
                      <textarea rows="8" class="w-full p-2 border rounded text-sm bg-gray-100" readonly>Sudah Benar</textarea>
                      <label class="text-sm font-semibold">Status Permohonan :</label>
                      <select class="w-full border p-2 rounded text-sm pointer-events-none bg-gray-100">
                      <option selected>Disetujui</option>
                      </select>
                      <input type="hidden" name="status" value="Disetujui">

                      <!-- Tombol Simpan 2 -->
                        <div class="pt-2 mt-6">
                        <button onclick="tampilkanPopup2()" class="bg-green-600 hover:bg-green-700 text-white font-semibold px-4 py-2 rounded w-full">
                            Simpan Evaluasi
                        </button>
                        </div>

                        <!-- Modal Pop-up 2 -->
                        <div id="popupBerhasil2" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden z-50">
                        <div class="bg-white p-6 rounded-lg shadow-lg text-center w-80">
                            <h2 class="text-lg font-semibold text-green-700 mb-2">Berhasil!</h2>
                            <p class="text-gray-700 mb-4">Evaluasi Berhasil Disimpan</p>
                            <button onclick="tutupPopup2()" class="bg-green-600 hover:bg-green-700 text-white font-semibold px-4 py-2 rounded">
                            OK
                            </button>
                        </div>
                        </div>
                    </div>
                  </div>

                  <!-- Container 2: LOKASI DAN DATA TAMBAHAN | LAMPIRAN | EVALUASI -->
                  <div class="grid grid-cols-1 md:grid-cols-3 gap-4 border border-gray-200 rounded shadow-sm overflow-hidden p-4">
                    <!-- KOLOM 1: Lokasi dan Data Tambahan -->
                    <div class="bg-white rounded shadow p-4 space-y-4">
                      <h2 class="text-lg text-center font-bold border-b pb-2 mb-2">Jaringan Distribusi & Sambungan Listrik</h2>
                      <div class="grid grid-cols-2 text-sm border border-gray-200 rounded overflow-hidden">
                        <div class="p-3 font-semibold border-b">Panjang Saluran (Kms)</div>
                        <div class="p-3 border-b">: 13,00</div>
                        <div class="p-3 font-semibold border-b">Tegangan (Volt)</div>
                        <div class="p-3 border-b">: 220,00</div>
                        <div class="p-3 font-semibold border-b">Dari Pihak Lain</div>
                        <div class="p-3 border-b">: PT. PLN</div>
                        <div class="p-3 font-semibold border-b">Daya Tersambung (kVA)</div>
                        <div class="p-3 border-b">: 50,00</div>
                      </div>
                    </div>

                    <!-- KOLOM 2: LAMPIRAN -->
                    <div class="bg-white rounded shadow p-4 space-y-4">
                      <h2 class="text-lg text-center font-bold border-b pb-2 mb-2">Lampiran</h2>

                      <div class="space-y-4 overflow-y-auto max-h-[500px] pr-2">
                        <div>
                          <p class="text-sm font-semibold mb-1">Bukti Tagihan Listrik (Gambar)</p><img src="../assets/img/tagihan.jpg" class="w-full rounded border mt-2" />
                        </div>
                      </div>
                    </div>

                    <!-- KOLOM 3: Evaluasi (copy) -->
                    <div class="bg-white rounded shadow p-4 space-y-4">
                      <h2 class="text-lg text-center font-bold border-b pb-2 mb-2">Evaluasi</h2>
                      <label class="text-sm font-semibold">Catatan Perbaikan :</label>
                      <textarea rows="8" class="w-full p-2 border rounded text-sm bg-gray-100" readonly>Sudah Benar</textarea>

                      <label class="text-sm font-semibold">Status Permohonan :</label>
                      <select class="w-full border p-2 rounded text-sm bg-gray-100 pointer-events-none">
                      <option value="Disetujui" selected>Disetujui</option>
                      <option value="Ditolak">Ditolak</option>
                      </select>
                      <input type="hidden" name="status" value="Disetujui">

                      <!-- Tombol Simpan 3 -->
                        <div class="pt-2 mt-6">
                        <button onclick="tampilkanPopup3()" class="bg-green-600 hover:bg-green-700 text-white font-semibold px-4 py-2 rounded w-full">
                            Simpan Evaluasi 
                        </button>
                        </div>

                        <!-- Modal Pop-up 3 -->
                        <div id="popupBerhasil3" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden z-50">
                        <div class="bg-white p-6 rounded-lg shadow-lg text-center w-80">
                            <h2 class="text-lg font-semibold text-green-700 mb-2">Berhasil!</h2>
                            <p class="text-gray-700 mb-4">Evaluasi Berhasil Disimpan</p>
                            <button onclick="tutupPopup3()" class="bg-green-600 hover:bg-green-700 text-white font-semibold px-4 py-2 rounded">
                            OK
                            </button>
                        </div>
                        </div>
                    </div>
                  </div>

                  <!-- Container 3: LOKASI DAN DATA TAMBAHAN | LAMPIRAN | EVALUASI -->
                  <div class="grid grid-cols-1 md:grid-cols-3 gap-4 border border-gray-200 rounded shadow-sm overflow-hidden p-4">
                    <!-- KOLOM 1: Lokasi dan Data Tambahan -->
                    <div class="bg-white rounded shadow p-4 space-y-4">
                      <h2 class="text-lg text-center font-bold border-b pb-2 mb-2">Lokasi Instalasi</h2>
                      <div class="grid grid-cols-2 text-sm border border-gray-200 rounded overflow-hidden">
                        <div class="p-3 font-semibold border-b">Nama Jalan</div>
                        <div class="p-3 border-b">: JL. Tanah Tumbuh</div>
                        <div class="p-3 font-semibold border-b">Desa / Kelurahan</div>
                        <div class="p-3 border-b">: Sungai Gambir</div>
                        <div class="p-3 font-semibold border-b">Kecamatan</div>
                        <div class="p-3 border-b">: Tanah Sepenggal</div>
                        <div class="p-3 font-semibold border-b">Kota / Kabupaten</div>
                        <div class="p-3 border-b">: Bungo</div>
                        <div class="p-3 font-semibold">Provinsi</div>
                        <div class="p-3">: Jambi</div>
                      </div>
                    </div>

                    <!-- KOLOM 2: LAMPIRAN -->
                    <div class="bg-white rounded shadow p-4 space-y-4">
                      <h2 class="text-lg text-center font-bold border-b pb-2 mb-2">Lampiran</h2>
                      <div class="space-y-4 overflow-y-auto max-h-[500px] pr-2">
                        <div>
                          <p class="text-sm font-semibold mb-1">Situasi / Tata Letak (Gambar)</p><img src="../assets/img/situasi.jpg" class="w-full rounded border mt-2" />
                        </div>
                      </div>
                    </div>

                    <!-- KOLOM 3: Evaluasi (copy) -->
                    <div class="bg-white rounded shadow p-4 space-y-4">
                      <h2 class="text-lg text-center font-bold border-b pb-2 mb-2">Evaluasi</h2>
                      <label class="text-sm font-semibold">Catatan Perbaikan :</label>
                      <textarea rows="8" class="w-full p-2 border rounded text-sm bg-gray-100" readonly>Sudah Benar</textarea>

                      <label class="text-sm font-semibold">Status Permohonan :</label>
                      <select class="w-full border p-2 rounded text-sm bg-gray-100 pointer-events-none">
                      <option value="Disetujui" selected>Disetujui</option>
                      <option value="Ditolak">Ditolak</option>
                      </select>
                      <input type="hidden" name="status" value="Disetujui">
                       <!-- Tombol Simpan 4 -->
                       <div class="pt-2 mt-6">
                        <button onclick="tampilkanPopup4()" class="bg-green-600 hover:bg-green-700 text-white font-semibold px-4 py-2 rounded w-full">
                            Simpan Evaluasi 
                        </button>
                        </div>

                        <!-- Modal Pop-up 4 -->
                        <div id="popupBerhasil4" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden z-50">
                        <div class="bg-white p-6 rounded-lg shadow-lg text-center w-80">
                            <h2 class="text-lg font-semibold text-green-700 mb-2">Berhasil!</h2>
                            <p class="text-gray-700 mb-4">Evaluasi Berhasil Disimpan</p>
                            <button onclick="tutupPopup4()" class="bg-green-600 hover:bg-green-700 text-white font-semibold px-4 py-2 rounded">
                            OK
                            </button>
                        </div>
                    </div>
                    </div>
                  </div>
                  <div class="w-full flex justify-between mt-6">
                    <button onclick="prevPage()" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition">
                      Kembali
                    </button>


                    <!-- Tombol Aksi di kanan -->

                    <!-- Tombol Kirim Hasil Evaluasi -->
                    <div class="relative inline-block">
                      <button onclick="openKirimHasilModal()" class="px-5 py-2 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 transition">
                        Proses Permohonan
                      </button>
                    </div>
                    <script>
                      function showPage(hideId, showId) {
                        const hidePage = document.getElementById(hideId);
                        const showPage = document.getElementById(showId);

                        if (!hidePage) {
                          console.error("Element not found to hide:", hideId);
                          return;
                        }
                        if (!showPage) {
                          console.error("Element not found to show:", showId);
                          return;
                        }

                        hidePage.classList.add("hidden");
                        showPage.classList.remove("hidden");

                        // Scroll ke atas halaman baru
                        requestAnimationFrame(() => {
                          showPage.scrollIntoView({
                            behavior: "auto",
                            block: "start"
                          });
                        });
                      }

                      function nextPage() {
                        showPage("page1", "page2");
                      }

                      function prevPage() {
                        showPage("page2", "page1");
                      }
                    </script>

                    <script>
                      function openModal(docName) {
                        document.getElementById('modal-evaluasi').classList.remove('hidden');
                        document.body.classList.add('overflow-hidden');
                        document.getElementById('nama-dokumen').textContent = Dokumen: $ {
                          docName
                        };
                        document.getElementById('catatan-evaluasi').value = '';
                        document.getElementById('status-evaluasi').value = 'Setuju';
                      }

                      function closeModal() {
                        document.getElementById('modal-evaluasi').classList.add('hidden');
                        document.body.classList.remove('overflow-hidden');
                      }


                      function simpanEvaluasi() {
                        const doc = document.getElementById('nama-dokumen').textContent;
                        const catatan = document.getElementById('catatan-evaluasi').value;
                        const status = document.getElementById('status-evaluasi').value;
                        console.log(Evaluasi disimpan untuk $ {
                          doc
                        }: $ {
                          status
                        }, Catatan: $ {
                          catatan
                        });
                        closeModal();
                      }
                    </script>

                     <!-- Modal Popup Pilihan Kirim Hasil -->
                     <div id="modal-kirim-hasil" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
                      <div class="bg-white dark:bg-slate-800 rounded-lg p-6 w-full max-w-sm shadow-lg relative">
                        <button disabled class="w-full text-left px-4 py-2 mb-3 bg-yellow-300 text-white rounded opacity-60 cursor-not-allowed">
                          Penugasan Evaluator
                        </button>
                        <button onclick="openModal()" class="w-full text-left px-4 py-2 mb-3 bg-red-600 text-white rounded hover:bg-red-700 transition">
                          Perbaikan
                        </button>
                        <!-- Tombol 3: Proses Verifikasi -->
                        <button onclick="openModal()" class="w-full text-left px-4 py-2 mb-3 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                          Verifikasi
                        </button>
                        <button onclick="closeKirimHasilModal()" class="absolute top-0 right-2 font-bold text-xl text-gray-600 hover:text-gray-900 dark:hover:text-white">&times;</button>
                      </div>
                    </div>

                    <script>
                      function openKirimHasilModal() {
                        document.getElementById('modal-kirim-hasil').classList.remove('hidden');
                        document.body.classList.add('overflow-hidden');
                      }

                      function closeKirimHasilModal() {
                        document.getElementById('modal-kirim-hasil').classList.add('hidden');
                        document.body.classList.remove('overflow-hidden');
                      }

                      // fungsi kirim langsung
                      function kirimLangsung() {
                        alert("Dokumen dikirim ke Validator.");
                        closeKirimHasilModal();
                        // Tambahkan aksi kirim langsung sesuai kebutuhanmu
                      }
                    </script>
                    <!-- Modal Popup Proses Verifikasi -->
                    <div id="verifikasi-popup" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
                      <div class="bg-white dark:bg-slate-800 rounded-lg p-6 w-full max-w-sm shadow-lg relative">
                        <h3 class="text-lg font-semibold mb-4 text-center text-gray-800 dark:text-white">Verifikasi</h3>
                        <p class="text-sm text-gray-700 dark:text-gray-300 text-center mb-4">Data Telah Dikirim Untuk Proses Validasi</p>
                        <div class="flex justify-center">
                        <a href="javascript:history.back()" class="inline-block px-5 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition text-center">
                          Tutup
                        </a>
                        </div>
                      </div>
                    </div>

                    <!-- Script JavaScript -->
                    <script>
                      // Sembunyikan semua popup lain (misalnya evaluasi, revisi, dll) di sini
                      function closeAllOtherPopups() {
                        const allPopups = ['modal-evaluator', 'modal-revisi', 'modal-kirim-hasil']; // tambahkan ID popup lain jika ada
                        allPopups.forEach(id => {
                          const el = document.getElementById(id);
                          if (el) el.classList.add('hidden');
                        });
                      }

                      function openVerifikasiPopup() {
                        closeAllOtherPopups(); // pastikan popup lain disembunyikan
                        document.getElementById('verifikasi-popup').classList.remove('hidden');
                        document.body.classList.add('overflow-hidden');
                      }

                      function closeVerifikasiPopup() {
                        document.getElementById('verifikasi-popup').classList.add('hidden');
                        document.body.classList.remove('overflow-hidden');
                      }

                      function redirectAfterVerifikasi() {
                        // Tutup popup (opsional)
                        closeVerifikasiPopup();
                        // Redirect ke halaman lain
                        window.location.href = "/verifikasi/selesai"; // ganti dengan URL tujuanmu
                      }
                    </script>

                    <!-- Modal Perbaikan -->
                    <div id="modal-evaluasi" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
                      <div class="bg-white dark:bg-slate-800 rounded-xl p-6 w-full max-w-md shadow-lg relative">
                        <!-- Catatan -->
                        <label class="text-sm font-semibold text-gray-700 dark:text-white mb-1">Catatan Perbaikan :</label>
                        <textarea id="catatan-evaluasi" rows="8" class="w-full p-2 border rounded text-sm mb-4" placeholder="Tulis catatan perbaikan..."></textarea>

                        <!-- Status 
                        <label class="text-sm font-semibold text-gray-700 dark:text-white mb-1">Status Permohonan :</label>
                        <select id="status-evaluasi" class="w-full border p-2 rounded text-sm mb-4">
                          <option value="" disabled selected hidden>-- Status --</option>
                          <option value="Disetujui">Disetujui</option>
                          <option value="Ditolak">Ditolak</option>
                        </select>-->

                        <!-- Tombol Aksi -->
                        <div class="pt-2 flex justify-end gap-2">
                          <button onclick="closeModal()" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold px-4 py-2 rounded">
                            Batal
                          </button>
                          <button onclick="simpanEvaluasi()" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded">
                            Kirim
                          </button>
                        </div>
                      </div>
                    </div>

                    <!-- Modal Pop-up 1 -->
                    <div id="popupBerhasil1" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden z-50">
                      <div class="bg-white p-6 rounded-lg shadow-lg text-center w-80">
                        <h2 class="text-lg font-semibold text-green-700 mb-2">Berhasil!</h2>
                        <p class="text-gray-700 mb-4">Evaluasi Berhasil Disimpan</p>
                        <button onclick="tutupPopup1()" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded">
                          OK
                        </button>
                      </div>
                    </div>

                    <script>
                      function openModal() {
                        closeKirimHasilModal(); // Tutup modal kirim hasil
                        document.getElementById('modal-evaluasi').classList.remove('hidden');
                        document.body.classList.add('overflow-hidden');
                        document.getElementById('catatan-evaluasi').value = '';
                        document.getElementById('status-evaluasi').value = '';
                      }


                      function closeModal() {
                        document.getElementById('modal-evaluasi').classList.add('hidden');
                        document.body.classList.remove('overflow-hidden');
                      }

                      function tampilkanPopup1() {
                        document.getElementById('popupBerhasil1').classList.remove('hidden');
                        closeModal();
                      }

                      function tutupPopup1() {
                        document.getElementById('popupBerhasil1').classList.add('hidden');
                        document.body.classList.remove('overflow-hidden');
                      }

                      function tampilkanPopup2() {
                        document.getElementById('popupBerhasil2').classList.remove('hidden');
                        closeModal();
                      }

                      function tutupPopup2() {
                        document.getElementById('popupBerhasil2').classList.add('hidden');
                        document.body.classList.remove('overflow-hidden');
                      }

                      function simpanEvaluasi() {
                        const catatan = document.getElementById('catatan-evaluasi').value.trim();

                        if (!catatan) {
                          alert("Catatan wajib diisi.");
                          return;
                        }


                        console.log("Catatan:", catatan);


                        closeModal();
                        showPopupEvaluasi(); // Menampilkan popup notifikasi setelah simpan evaluasi
                      }
                    </script>

                    <!-- Popup Notifikasi Evaluasi -->
                    <div id="popup-evaluasi-notif" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-40 hidden z-[999]">
                      <div class="bg-white dark:bg-slate-800 rounded-lg p-6 max-w-sm w-full shadow-lg text-center">
                        <p class="text-lg font-semibold text-gray-800 dark:text-white mb-4">Terkirim ke Badan Usaha</p>
                        <a href="javascript:history.back()" class="inline-block px-5 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition text-center">
                          Tutup
                        </a>
                      </div>
                    </div>

                    <script>
                      function showPopupEvaluasi() {
                        closeKirimHasilModal(); // Tutup modal kirim hasil
                        document.getElementById('popup-evaluasi-notif').classList.remove('hidden');
                        document.body.classList.add('overflow-hidden');
                      }


                      function closePopupEvaluasi() {
                        document.getElementById('popup-evaluasi-notif').classList.add('hidden');
                        document.body.classList.remove('overflow-hidden');
                      }
                    </script>



                    <!-- Modal Pilih Evaluator -->
                    <div id="modal-evaluator" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
                      <div class="bg-white dark:bg-slate-800 rounded-xl p-6 w-full max-w-2xl shadow-lg relative max-h-[90vh] flex flex-col">

                        <h2 class="text-xl font-bold mb-4 text-gray-800 dark:text-white">Penugasan Evaluator</h2>

                        <!-- Scrollable Evaluator List -->
                        <div class="space-y-4 overflow-y-auto pr-2" style="max-height: 60vh;">
                          <!-- Evaluator 1 -->
                          <label class="flex items-center gap-4 border p-3 rounded-lg cursor-pointer hover:bg-gray-100 dark:hover:bg-slate-700 transition-all">
                            <input type="radio" name="evaluator" value="evaluator1" class="hidden peer" />
                            <img src="https://img.freepik.com/vektor-premium/ilustrasi-datar-vektor-dalam-skala-abu-abu-ikon-orang-profil-pengguna-avatar-gambar-profil-siluet-netral-gender-cocok-untuk-ikon-profil-media-sosial-screensaver-dan-sebagai-templatx9xa_719432-1096.jpg" alt="Foto Evaluator" class="w-12 h-12 rounded-full object-cover" />
                            <div>
                              <p class="font-semibold text-gray-800 dark:text-white">Ahmad Yusuf</p>
                              <p class="text-sm text-gray-500 dark:text-gray-300">NIP: 1987654321</p>
                            </div>
                            <div class="ml-auto hidden peer-checked:flex items-center justify-center w-6 h-6 rounded-full bg-blue-500 text-white font-bold transition-all duration-200">
                              ✓
                            </div>
                          </label>

                          <!-- Evaluator 2 -->
                          <label class="flex items-center gap-4 border p-3 rounded-lg cursor-pointer hover:bg-gray-100 dark:hover:bg-slate-700 transition-all">
                            <input type="radio" name="evaluator" value="evaluator2" class="hidden peer" />
                            <img src="https://img.freepik.com/vektor-premium/ilustrasi-datar-vektor-dalam-skala-abu-abu-ikon-orang-profil-pengguna-avatar-gambar-profil-siluet-netral-gender-cocok-untuk-ikon-profil-media-sosial-screensaver-dan-sebagai-templatx9xa_719432-1096.jpg" alt="Foto Evaluator" class="w-12 h-12 rounded-full object-cover" />
                            <div>
                              <p class="font-semibold text-gray-800 dark:text-white">Siti Rahmawati</p>
                              <p class="text-sm text-gray-500 dark:text-gray-300">NIP: 1990123456</p>
                            </div>
                            <div class="ml-auto hidden peer-checked:flex items-center justify-center w-6 h-6 rounded-full bg-blue-500 text-white font-bold transition-all duration-200">
                              ✓
                            </div>
                          </label>

                          <!-- Evaluator 3 -->
                          <label class="flex items-center gap-4 border p-3 rounded-lg cursor-pointer hover:bg-gray-100 dark:hover:bg-slate-700 transition-all">
                            <input type="radio" name="evaluator" value="evaluator3" class="hidden peer" />
                            <img src="https://img.freepik.com/vektor-premium/ilustrasi-datar-vektor-dalam-skala-abu-abu-ikon-orang-profil-pengguna-avatar-gambar-profil-siluet-netral-gender-cocok-untuk-ikon-profil-media-sosial-screensaver-dan-sebagai-templatx9xa_719432-1096.jpg" alt="Foto Evaluator" class="w-12 h-12 rounded-full object-cover" />
                            <div>
                              <p class="font-semibold text-gray-800 dark:text-white">Rizki Monika</p>
                              <p class="text-sm text-gray-500 dark:text-gray-300">NIP: 19901234587</p>
                            </div>
                            <div class="ml-auto hidden peer-checked:flex items-center justify-center w-6 h-6 rounded-full bg-blue-500 text-white font-bold transition-all duration-200">
                              ✓
                            </div>
                          </label>

                          <!-- Tambahkan evaluator baru sebanyak yang kamu mau disini -->
                          <!-- Contoh evaluator tambahan -->
                          <label class="flex items-center gap-4 border p-3 rounded-lg cursor-pointer hover:bg-gray-100 dark:hover:bg-slate-700 transition-all">
                            <input type="radio" name="evaluator" value="evaluator4" class="hidden peer" />
                            <img src="https://img.freepik.com/vektor-premium/ilustrasi-datar-vektor-dalam-skala-abu-abu-ikon-orang-profil-pengguna-avatar-gambar-profil-siluet-netral-gender-cocok-untuk-ikon-profil-media-sosial-screensaver-dan-sebagai-templatx9xa_719432-1096.jpg" alt="Foto Evaluator" class="w-12 h-12 rounded-full object-cover" />
                            <div>
                              <p class="font-semibold text-gray-800 dark:text-white">Budi Santoso</p>
                              <p class="text-sm text-gray-500 dark:text-gray-300">NIP: 1990112233</p>
                            </div>
                            <div class="ml-auto hidden peer-checked:flex items-center justify-center w-6 h-6 rounded-full bg-blue-500 text-white font-bold transition-all duration-200">
                              ✓
                            </div>
                          </label>

                          <label class="flex items-center gap-4 border p-3 rounded-lg cursor-pointer hover:bg-gray-100 dark:hover:bg-slate-700 transition-all">
                            <input type="radio" name="evaluator" value="evaluator4" class="hidden peer" />
                            <img src="https://img.freepik.com/vektor-premium/ilustrasi-datar-vektor-dalam-skala-abu-abu-ikon-orang-profil-pengguna-avatar-gambar-profil-siluet-netral-gender-cocok-untuk-ikon-profil-media-sosial-screensaver-dan-sebagai-templatx9xa_719432-1096.jpg" alt="Foto Evaluator" class="w-12 h-12 rounded-full object-cover" />
                            <div>
                              <p class="font-semibold text-gray-800 dark:text-white">Budi Santoso</p>
                              <p class="text-sm text-gray-500 dark:text-gray-300">NIP: 1990112233</p>
                            </div>
                            <div class="ml-auto hidden peer-checked:flex items-center justify-center w-6 h-6 rounded-full bg-blue-500 text-white font-bold transition-all duration-200">
                              ✓
                            </div>
                          </label>

                          <label class="flex items-center gap-4 border p-3 rounded-lg cursor-pointer hover:bg-gray-100 dark:hover:bg-slate-700 transition-all">
                            <input type="radio" name="evaluator" value="evaluator4" class="hidden peer" />
                            <img src="https://img.freepik.com/vektor-premium/ilustrasi-datar-vektor-dalam-skala-abu-abu-ikon-orang-profil-pengguna-avatar-gambar-profil-siluet-netral-gender-cocok-untuk-ikon-profil-media-sosial-screensaver-dan-sebagai-templatx9xa_719432-1096.jpg" alt="Foto Evaluator" class="w-12 h-12 rounded-full object-cover" />
                            <div>
                              <p class="font-semibold text-gray-800 dark:text-white">Budi Santoso</p>
                              <p class="text-sm text-gray-500 dark:text-gray-300">NIP: 1990112233</p>
                            </div>
                            <div class="ml-auto hidden peer-checked:flex items-center justify-center w-6 h-6 rounded-full bg-blue-500 text-white font-bold transition-all duration-200">
                              ✓
                            </div>
                          </label>

                          <!-- dst... -->
                        </div>

                        <!-- Tombol Aksi di Bawah -->
                        <div class="mt-6 space-y-3">
                          <button onclick="kirimKeEvaluator()" class="w-full px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition">
                            Kirim
                          </button>
                          <button onclick="closeEvaluatorModal()" class="w-full px-4 py-2 bg-gray-300 text-gray-800 rounded hover:bg-gray-400 transition">
                            Batal
                          </button>
                        </div>
                      </div>
                    </div>



                    <!-- Popup Notifikasi -->
                    <div id="popup-notif" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-40 hidden z-[999]">
                      <div class="bg-white dark:bg-slate-800 rounded-lg p-6 max-w-sm w-full shadow-lg text-center">
                        <p class="text-lg font-semibold text-gray-800 dark:text-white mb-4">Dokumen Berhasil Dikirim Evaluator</p>
                        <a href="javascript:history.back()" class="inline-block px-5 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition text-center">
                          Tutup
                        </a>
                      </div>
                    </div>

                    <script>
                      function openEvaluatorModal() {
                        closeKirimHasilModal(); // Tutup modal kirim hasil
                        document.getElementById('modal-evaluator').classList.remove('hidden');
                        document.body.classList.add('overflow-hidden');
                      }


                      function closeEvaluatorModal() {
                        document.getElementById('modal-evaluator').classList.add('hidden');
                        document.body.classList.remove('overflow-hidden');
                      }

                      function showPopupNotif() {
                        closeKirimHasilModal(); // Tutup modal kirim hasil
                        document.getElementById('popup-notif').classList.remove('hidden');
                        document.body.classList.add('overflow-hidden');
                      }

                      function closePopupNotif() {
                        document.getElementById('popup-notif').classList.add('hidden');
                        document.body.classList.remove('overflow-hidden');
                      }

                      function kirimKeEvaluator() {
                        const selected = document.querySelector('input[name="evaluator"]:checked');
                        if (!selected) {
                          alert("Pilih salah satu evaluator terlebih dahulu.");
                          return;
                        }

                        const evaluatorID = selected.value;
                        console.log("Evaluator yang dipilih:", evaluatorID);

                        // TODO: Tambahkan AJAX / pengiriman data ke server jika perlu

                        closeEvaluatorModal();
                        showPopupNotif();
                      }
                    </script>
                    <script>
                      function showPopupNotif() {
                        document.getElementById('popup-notif').classList.remove('hidden');
                        document.body.classList.add('overflow-hidden');
                      }

                      function closePopupNotif() {
                        document.getElementById('popup-notif').classList.add('hidden');
                        document.body.classList.remove('overflow-hidden');
                      }

                      function kirimKeEvaluator() {
                        const selected = document.querySelector('input[name="evaluator"]:checked');
                        if (!selected) {
                          alert("Pilih salah satu evaluator terlebih dahulu.");
                          return;
                        }

                        const evaluatorID = selected.value;
                        console.log("Evaluator yang dipilih:", evaluatorID);

                        // Tutup modal evaluator
                        closeEvaluatorModal();

                        // Tampilkan notifikasi
                        showPopupNotif();
                      }
                    </script>


</body>
<!-- plugin for charts  -->
<script src="../assets/js/plugins/chartjs.min.js" async></script>
<!-- plugin for scrollbar  -->
<script src="../assets/js/plugins/perfect-scrollbar.min.js" async></script>
<!-- main script file  -->
<script src="../assets/js/argon-dashboard-tailwind.js?v=1.0.1" async></script>

</html>