<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
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

<body
  class="m-0 font-sans text-base antialiased font-normal dark:bg-slate-900 leading-default bg-gray-50 text-slate-500">
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
                        <h6 class="mb-1 text-sm font-normal leading-normal dark:text-white"><span class="font-semibold">
                            New message</span> from Laur</h6>
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
        <div
          class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
          <div class="flex-auto p-4">
            <div class="flex flex-col -mx-3">
              <div class="w-full max-w-full px-3">


                <!-- Halaman 1: Data Administrasi -->
                <div id="page1">
                  <h2 class="text-center font-bold text-lg bg-gray-100 p-3 rounded-t border-b border-gray-300">DATA
                    ADMINISTRASI</h2>
                  <!-- Container 3 Kolom -->
                  <div
                    class="grid grid-cols-1 md:grid-cols-3 border border-gray-200 rounded-b shadow-sm overflow-hidden">

                    <!-- Kolom 1: Data Administrasi -->
                     
                    <div class="bg-white rounded shadow p-4 space-y-3">
                      <h2 class="text-lg text-center font-bold border-b pb-2 mb-2">Profil Badan Usaha</h2>
                      <div class="text-sm space-y-2">
                        <div class="flex">
                          <div class="w-48 font-semibold">Nama Badan Usaha</div>
                          <div>: {{ $pengajuan->pengguna->identitas->nama_perusahaan ?? 'tidak ada' }}</div>
                        </div>
                        <div class="flex">
                          <div class="w-48 font-semibold">Nama Pengguna</div>
                          <div>: {{ $pengajuan->pengguna->identitas->nama ?? 'tidak ada' }}</div>
                        </div>
                        <div class="flex">
                          <div class="w-48 font-semibold">Kode KBLI</div>
                          <div>: {{ $pengajuan->pengguna->identitas->kode_kbli ?? 'tidak ada' }}</div>
                        </div>
                        <div class="flex">
                          <div class="w-48 font-semibold">Judul KBLI</div>
                          <div>: {{ $pengajuan->pengguna->identitas->judul_kbli ?? 'tidak ada' }}</div>
                        </div>
                        <div class="flex">
                          <div class="w-48 font-semibold">No Tlp / HP</div>
                          <div>: {{ $pengajuan->pengguna->identitas->nomorhp ?? 'tidak ada' }}</div>
                        </div>
                        <div class="flex">
                          <div class="w-48 font-semibold">Email Perusahaan</div>
                          <div>: {{ $pengajuan->pengguna->identitas->email_perusahaan ?? 'tidak ada' }}</div>
                        </div>
                        <div class="flex">
                          <div class="w-48 font-semibold">Alamat Badan Usaha</div>
                          <div>: {{ $pengajuan->pengguna->identitas->alamatusaha ?? 'tidak ada' }}</div>
                        </div>
                        <div class="flex">
                          <div class="w-48 font-semibold">NIB</div>
                          <div>: {{ $pengajuan->pengguna->identitas->nomor_induk_berusaha ?? 'tidak ada' }}<br></div>
                        </div>
                        <div class="flex">
                          <div class="w-48 font-semibold">NPWP</div>
                          <div>: {{ $pengajuan->pengguna->identitas->nomor_pokok_wajib_pajak ?? 'tidak ada' }}</div>
                        </div>
                      </div>
                    </div>


@php
    function tampilkanLampiran($label, $fileUrl) {
   
       $fileroute = route('private.file', ['path' => $fileUrl]);
    $ext = pathinfo($fileUrl, PATHINFO_EXTENSION);

    echo '<div class="mb-4">';
    echo "<p class='text-base font-semibold mb-1'>{$label}</p>";

    if (in_array(strtolower($ext), ['jpg', 'jpeg', 'png'])) {
        echo "<img src='{$fileroute}' alt='{$label}' class='w-full max-w-md rounded shadow' />";
    } elseif (strtolower($ext) === 'pdf') {
        echo "<div class='w-full h-[300px] rounded overflow-hidden border'>";
        echo "<iframe src='{$fileroute}' class='w-full h-full border-none'></iframe>";
        echo "</div>";
    } else {
        echo "<p class='text-sm text-red-500'>Format file tidak didukung: {$ext}</p>";
    }
    echo '</div>';
    }



     function tampilkanLampiran1($label, $fileUrl, $unitCounter = null)
{
    if (!$fileUrl) return; // Tidak tampilkan jika file kosong

    $fileroute = route('private.file', ['path' => $fileUrl]);
    $ext = strtolower(pathinfo($fileUrl, PATHINFO_EXTENSION));

    // Jika label mengandung "unit", tambahkan keterangan unit
    if (strpos(strtolower($label), 'unit') !== false && $unitCounter !== null) {
        echo "<p class='text-sm font-bold mb-2'>Unit {$unitCounter} (Gambar)</p>";
    } else {
        echo "<p class='text-sm font-semibold mb-1'>{$label}</p>";
    }

    // Tampilkan file sesuai ekstensi
    if (in_array($ext, ['jpg', 'jpeg', 'png'])) {
        echo "<img src='{$fileroute}' alt='{$label}' class='w-full rounded border mt-2' />";
    } elseif ($ext === 'pdf') {
        echo "<div class='w-full h-[300px] rounded overflow-hidden border mt-2'>";
        echo "<iframe src='{$fileroute}' class='w-full h-full border-none'></iframe>";
        echo "</div>";
    } else {
        echo "<p class='text-sm text-red-500'>Format file tidak didukung: {$ext}</p>";
    }
}



@endphp


                    <!-- Kolom 2: Lampiran -->
                    <!-- Kolom 2: Lampiran -->
                    <div class="bg-white rounded shadow p-4 flex flex-col space-y-4">
                      <h2 class="text-lg text-center font-bold border-b pb-2 mb-2">Lampiran</h2>

                      <!-- Area Scrollable -->
                      <div class="overflow-y-scroll max-h-[480px] pr-2 rounded-md border border-gray-200">
                        <div class="p-2 space-y-5">
                       
                        

                       @php
                            $data = is_string($pengajuan->data) ? json_decode($pengajuan->data, true) : $pengajuan->data;
                           // dd($units);
                          $jenisPembangkit = strtolower($pengajuan->jenis_pembangkit ?? $data['jenis_pembangkit'] ?? '');
                        @endphp
                        @php
                              $nib = str_replace('\\', '', $data['nib']);
                               $ktp = str_replace('\\', '', $data['ktp']);
                                $npwp = str_replace('\\', '', $data['npwp']);
                                $situasi = str_replace('\\', '', $data['gambar_situasi']);
                          @endphp
                           
                          <!-- Gambar NIB -->
                         @if (!empty($nib))
                              @php
                                  tampilkanLampiran('NIB', $nib);
                              @endphp
                          @endif

                          {{-- NPWP --}}
                          @if (!empty($npwp))
                              @php
                                  tampilkanLampiran('NPWP', $npwp);
                              @endphp
                          @endif

                          {{-- KTP Penanggung Jawab --}}
                          @if (!empty($ktp))
                              @php
                                  tampilkanLampiran('KTP Penanggung Jawab', $ktp);
                              @endphp
                          @endif


                        </div>
                      </div>
                    </div>

                    <!-- Kolom 3: Evaluasi -->
                    <div class="bg-white rounded shadow p-4 space-y-4">
                      <h2 class="text-lg text-center font-bold border-b pb-2 mb-2">Evaluasi</h2>

                      <label class="text-sm font-semibold">Catatan Perbaikan :</label>
                      <div class="evaluasi-item" data-id="1">
                      <textarea id="catatan1" rows="8" class="w-full p-2 border rounded text-sm"
                        placeholder="Tulis catatan perbaikan..."></textarea>

                      <label class="text-sm font-semibold">Status Permohonan :</label>
                      <select id="status1"  class="w-full border p-2 rounded text-sm">
                        <option value="" disabled selected hidden>-- Status --</option>
                        <option>Disetujui</option>
                        <option>Ditolak</option>
                      </select>

                      <div class="pt-2">
                        <button onclick="simpanDraf(1)"
                          class="bg-green-600 hover:bg-green-700 text-white font-semibold px-4 py-2 rounded w-full">
                          Simpan Evaluasi
                        </button>
                      </div>
                      </div>
                    </div>
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
                  <h2 class="text-center font-bold text-lg bg-gray-100 p-3 rounded-t border-b border-gray-300">DATA
                    TEKNIS</h2>

                  <!-- Container 1: FORM NON SURYA | LAMPIRAN | EVALUASI -->
                  <div
                    class="grid grid-cols-1 md:grid-cols-3 gap-4 border border-gray-200 rounded shadow-sm overflow-hidden p-4">
                    <!-- KOLOM 1: FORM SURYA -->
            @if($jenisPembangkit == 'surya')
                     <div class="bg-white rounded shadow p-4 space-y-4">
                      <h2 class="text-lg  text-center font-bold border-b pb-2 mb-2">Pembangkit Listrik Tenaga Surya</h2>
                      <div class="overflow-x-auto">
                        <table class="w-full table-auto border text-sm text-left">
                          <thead class="bg-gray-200">
                            <tr>
                              <th class="px-4 py-2 border">Spesifikasi</th>
                             @foreach ($units as $index => $unit)
                                <th class="px-4 py-2 border text-center">Unit {{ $index }}</th>
                              @endforeach
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="border px-4 py-2">Merek</td>
                               @foreach ($units as $unit)
                  <td class="border px-4 py-2 text-center">{{ $unit['smerek'] ?? 'tidak ada' }}</td>
                @endforeach
                            </tr>
                            <tr>
                              <td class="border px-4 py-2">Tipe</td>
                              @foreach ($units as $unit)
                  <td class="border px-4 py-2 text-center">{{ $unit['stipe'] ?? 'tidak ada' }}</td>
                @endforeach
                            </tr>
                            <tr>
                              <td class="border px-4 py-2">Negara Pembuat</td>
                               @foreach ($units as $unit)
                  <td class="border px-4 py-2 text-center">{{ $unit['snegara'] ?? 'tidak ada' }}</td>
                @endforeach
                            </tr>
                            <tr>
                              <td class="border px-4 py-2">Tahun Pembuatan</td>
                               @foreach ($units as $unit)
                  <td class="border px-4 py-2 text-center">{{ $unit['stahun'] ?? 'tidak ada' }}</td>
                @endforeach
                            </tr>
                            <tr>
                              <td class="border px-4 py-2">Kapasitas (kilo waatt-peak)</td>
                               @foreach ($units as $unit)
                  <td class="border px-4 py-2 text-center">{{ $unit['skapasitas'] ?? 'tidak ada' }}</td>
                @endforeach
                            </tr>
                            <tr>
                              <td class="border px-4 py-2">Titik Koordinat (Latitude)</td>
                               @foreach ($units as $unit)
                  <td class="border px-4 py-2 text-center">{{ $unit['stitikkordinatla'] ?? 'tidak ada' }}</td>
                @endforeach
                            </tr>
                            <tr>
                              <td class="border px-4 py-2">Titik Koordinat (Longitude)</td>
                                @foreach ($units as $unit)
                  <td class="border px-4 py-2 text-center">{{ $unit['stitikkordinatlo'] ?? 'tidak ada' }}</td>
                @endforeach
                            </tr>
                            <tr>
                              <td class="border px-4 py-2">Sifat Penggunaan</td>
                               @foreach ($units as $unit)
                  <td class="border px-4 py-2 text-center">{{ $unit['ssifat'] ?? 'tidak ada' }}</td>
                @endforeach
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>

                    <!-- KOLOM 2: LAMPIRAN -->
                    <div class="bg-white rounded shadow p-4 space-y-4">
                      <h2 class="text-lg text-center font-bold border-b pb-2 mb-2">Lampiran</h2>
                      <div class="space-y-4 overflow-y-auto max-h-[500px] pr-2">
   @foreach ($units as $index => $unit)
    <div class="mb-4 border p-3 rounded bg-gray-50">
        <h3 class="text-lg font-bold mb-2">UNIT {{ $index  }}</h3>

        {{-- Panggil fungsi untuk menampilkan lampiran --}}
        {!! tampilkanLampiran1('Foto Unit', $unit['sfoto_unit'] ?? '', $index ) !!}
        {!! tampilkanLampiran1('Foto Papan Nama Modul PLTS', $unit['sfoto_modul'] ?? '', $index ) !!}
        {!! tampilkanLampiran1('Foto Papan Nama Inverter PLTS', $unit['sfoto_inverter'] ?? '', $index ) !!}
    </div>
@endforeach
                            
                      </div>
                    </div>

@else
  {{-- table nonsurya --}}

                    <div class="bg-white rounded shadow p-4 space-y-4">
                      <h2 class="text-lg font-bold border-b pb-2 mb-2">Pembangkit Listrik Selain Tenaga Surya</h2>
                      <div class="overflow-x-auto">
                        <table class="w-full table-auto border text-sm text-left">

                          <thead class="bg-gray-200">
                            <tr>
                              <th class="px-4 py-2 border">Spesifikasi</th>
                              @foreach ($units as $index => $unit)
                  <th class="px-4 py-2 border text-center">Unit {{ $index }}</th>
                @endforeach

                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="border px-4 py-2">Jenis Penggerak</td>
                              @foreach ($units as $unit)
                  <td class="border px-4 py-2 text-center">{{ $unit['jenis'] ?? 'tidak ada' }}</td>
                @endforeach
                            </tr>
                            <tr>
                              <td class="border px-4 py-2">Merek</td>
                              @foreach ($units as $unit)
                  <td class="border px-4 py-2 text-center">{{ $unit['merek'] ?? 'tidak ada'}}</td>
                @endforeach
                            </tr>
                            <tr>
                              <td class="border px-4 py-2">Tipe</td>
                              @foreach ($units as $unit)
                  <td class="border px-4 py-2 text-center">{{ $unit['tipe'] ?? 'tidak ada' }}</td>
                @endforeach
                            </tr>
                            <tr>
                              <td class="border px-4 py-2">Negara Pembuat</td>
                              @foreach ($units as $unit)
                  <td class="border px-4 py-2 text-center">{{ $unit['negara'] ?? 'tidak ada' }}</td>
                @endforeach
                            </tr>
                            <tr>
                              <td class="border px-4 py-2">Tahun Pembuatan</td>
                              @foreach ($units as $unit)
                  <td class="border px-4 py-2 text-center">{{ $unit['tahun'] ?? 'tidak ada'}}</td>
                @endforeach
                            </tr>
                            <tr>
                              <td class="border px-4 py-2">Kapasitas (kW)</td>
                              @foreach ($units as $unit)
                  <td class="border px-4 py-2 text-center">{{ $unit['kapasitas'] ?? 'tidak ada'}}</td>
                @endforeach
                            </tr>
                            <tr>
                              <td class="border px-4 py-2">Energi Primer</td>
                               <td class="border px-4 py-2 text-center">{{ $unit['primer'] ?? 'tidak ada'}}</td>
                            </tr>
                            <tr>
                              <td class="border px-4 py-2">Titik Koordinat (Latitude)</td>
                              @foreach ($units as $unit)
                  <td class="border px-4 py-2 text-center">{{ $unit['titikkordinatla'] ?? 'tidak ada' }}</td>
                @endforeach
                            </tr>
                            <tr>
                              <td class="border px-4 py-2">Titik Koordinat (Longitude)</td>
                              @foreach ($units as $unit)
                  <td class="border px-4 py-2 text-center">{{ $unit['titikkordinatlo'] ?? 'tidak ada' }}</td>
                @endforeach
                            </tr>
                            <tr>
                              <td class="border px-4 py-2">Sifat Penggunaan</td>
                              @foreach ($units as $unit)
                  <td class="border px-4 py-2 text-center">{{ $unit['sifat'] ?? 'tidak ada' }}</td>
                @endforeach
                            </tr>

                          </tbody>

                        </table>
                      </div>
                    </div>

                    <!-- KOLOM 2: LAMPIRAN -->
                    <div class="bg-white rounded shadow p-4 space-y-4">
                      <h2 class="text-lg text-center font-bold border-b pb-2 mb-2">Lampiran</h2>
                      <div class="space-y-4 overflow-y-auto max-h-[500px] pr-2">
                        @foreach ($units as $index => $unit)
    <div class="mb-4 border p-3 rounded bg-gray-50">
        <h3 class="text-lg font-bold mb-2">UNIT {{ $index  }}</h3>

        {{-- Panggil fungsi untuk menampilkan lampiran --}}
        {!! tampilkanLampiran1('Foto Unit', $unit['foto_unit'] ?? '', $index ) !!}
        {!! tampilkanLampiran1('Nameplate Mesin Penggerak', $unit['foto_mesin'] ?? '', $index ) !!}
        {!! tampilkanLampiran1('Nameplate Generator', $unit['foto_generator'] ?? '', $index ) !!}
    </div>
@endforeach
                        
                       
                      </div>
                    </div>
@endif
                    <!-- KOLOM 3: EVALUASI -->
                    <div class="bg-white rounded shadow p-4 space-y-4">
                      <h2 class="text-lg text-center font-bold border-b pb-2 mb-2">Evaluasi</h2>
                      <label class="text-sm font-semibold">Catatan Perbaikan :</label>
                      <div class="evaluasi-item" data-id="2">
                      <textarea id="catatan2" rows="8" class="w-full p-2 border rounded text-sm"
                        placeholder="Tulis catatan perbaikan..."></textarea>
                      <label class="text-sm font-semibold">Status Permohonan :</label>
                      <select id="status2"  class="w-full border p-2 rounded text-sm">
                        <option value="" disabled selected hidden>-- Status --</option>
                        <option>Disetujui</option>
                        <option>Ditolak</option>
                      </select>
                      <div class="pt-2">
                        <button onclick="simpanDraf(2)"
                          class="bg-green-600 hover:bg-green-700 text-white font-semibold px-4 py-2 rounded w-full">Simpan
                          Evaluasi</button>
                      </div>
                    </div>
                    </div>
                  </div>

                  <!-- Container 2: LOKASI DAN DATA TAMBAHAN | LAMPIRAN | EVALUASI -->
                  <div
                    class="grid grid-cols-1 md:grid-cols-3 gap-4 border border-gray-200 rounded shadow-sm overflow-hidden p-4">
                    <!-- KOLOM 1: Lokasi dan Data Tambahan -->
                    <div class="bg-white rounded shadow p-4 space-y-4">
                      <h2 class="text-lg text-center font-bold border-b pb-2 mb-2">Jaringan Distribusi & Sambungan
                        Listrik</h2>
                      <div class="grid grid-cols-2 text-sm border border-gray-200 rounded overflow-hidden">
                        <div class="p-3 font-semibold border-b">Panjang Saluran (Kms)</div>
                        <div class="p-3 border-b">: {{  $data['panjang_saluran'] ?? 'tidak ada'}} </div>
                        <div class="p-3 font-semibold border-b">Tegangan (Volt)</div>
                        <div class="p-3 border-b">: {{  $data['tegangan'] ?? 'tidak ada'}}</div>
                        <div class="p-3 font-semibold border-b">Dari Pihak Lain</div>
                        <div class="p-3 border-b">: {{  $data['pihak_lain'] ?? 'tidak ada'}}</div>
                        <div class="p-3 font-semibold border-b">Daya Tersambung (kVA)</div>
                        <div class="p-3 border-b">: {{  $data['daya_tersambung'] ?? 'tidak ada'}}</div>
                      </div>
                    </div>

                    <!-- KOLOM 2: LAMPIRAN -->
                    <div class="bg-white rounded shadow p-4 space-y-4">
                      <h2 class="text-lg text-center font-bold border-b pb-2 mb-2">Lampiran</h2>

                      <div class="space-y-4 overflow-y-auto max-h-[500px] pr-2">
                        <div>
                          <p class="text-sm font-semibold mb-1">Bukti Tagihan Listrik (Gambar)</p><img
                            src="../assets/img/tagihan.jpg" class="w-full rounded border mt-2" />
                        </div>
                      </div>
                    </div>

                    <!-- KOLOM 3: Evaluasi (copy) -->
                    <div class="bg-white rounded shadow p-4 space-y-4">
                      <h2 class="text-lg text-center font-bold border-b pb-2 mb-2">Evaluasi</h2>
                      <label class="text-sm font-semibold">Catatan Perbaikan :</label>
                      <div class="evaluasi-item" data-id="3">
                      <textarea id="catatan3" rows="8" class="w-full p-2 border rounded text-sm"
                        placeholder="Tulis catatan perbaikan..."></textarea>
                      <label class="text-sm font-semibold">Status Permohonan :</label>
                      <select id="status3" class="w-full border p-2 rounded text-sm">
                        <option  value="" disabled selected hidden>-- Status --</option>
                        <option>Disetujui</option>
                        <option>Ditolak</option>
                      </select>
                      <div class="pt-2">
                        <button onclick="simpanDraf(3)"
                          class="bg-green-600 hover:bg-green-700 text-white font-semibold px-4 py-2 rounded w-full">Simpan
                          Evaluasi</button>
                      </div>
</div>
                    </div>
                  </div>

                  <!-- Container 3: LOKASI DAN DATA TAMBAHAN | LAMPIRAN | EVALUASI -->
                  <div
                    class="grid grid-cols-1 md:grid-cols-3 gap-4 border border-gray-200 rounded shadow-sm overflow-hidden p-4">
                    <!-- KOLOM 1: Lokasi dan Data Tambahan -->
                    <div class="bg-white rounded shadow p-4 space-y-4">
                      <h2 class="text-lg text-center font-bold border-b pb-2 mb-2">Lokasi Instalasi</h2>
                      <div class="grid grid-cols-2 text-sm border border-gray-200 rounded overflow-hidden">
                        <div class="p-3 font-semibold border-b">Nama Jalan</div>
                        <div class="p-3 border-b">: {{  $data['keterangan'] ?? 'tidak ada'}}</div>
                        <div class="p-3 font-semibold border-b">Desa / Kelurahan</div>
                        <div class="p-3 border-b">: {{  $data['addressdes'] ?? 'tidak ada'}}</div>
                        <div class="p-3 font-semibold border-b">Kecamatan</div>
                        <div class="p-3 border-b">: {{  $data['addresskec'] ?? 'tidak ada'}}</div>
                        <div class="p-3 font-semibold border-b">Kota / Kabupaten</div>
                        <div class="p-3 border-b">: {{  $data['addresskab'] ?? 'tidak ada'}}</div>
                        <div class="p-3 font-semibold">Provinsi</div>
                        <div class="p-3">: {{  $data['addressprov'] ?? 'tidak ada'}}</div>
                      </div>
                    </div>

                    <!-- KOLOM 2: LAMPIRAN -->
                    <div class="bg-white rounded shadow p-4 space-y-4">
                      <h2 class="text-lg text-center font-bold border-b pb-2 mb-2">Lampiran</h2>
                      <div class="space-y-4 overflow-y-auto max-h-[500px] pr-2">
                        <div>
                          @php
                            tampilkanLampiran('Situasi / Tata letak', $situasi);
                              @endphp
                        </div>
                      </div>
                    </div>

                    <!-- KOLOM 3: Evaluasi (copy) -->
                    <div class="bg-white rounded shadow p-4 space-y-4">
                      <h2 class="text-lg text-center font-bold border-b pb-2 mb-2">Evaluasi</h2>
                      <label class="text-sm font-semibold">Catatan Perbaikan :</label>
                       <div class="evaluasi-item" data-id="4">
                      <textarea id="catatan4" rows="8" class="w-full p-2 border rounded text-sm"
                        placeholder="Tulis catatan perbaikan..."></textarea>
                      <label class="text-sm font-semibold">Status Permohonan :</label>
                      <select id="status4" class="w-full border p-2 rounded text-sm">
                        <option value="" disabled selected hidden>-- Status --</option>
                        <option>Disetujui</option>
                        <option>Ditolak</option>
                      </select>
                      <div class="pt-2">
                        <button onclick="simpanDraf(4)"
                          class="bg-green-600 hover:bg-green-700 text-white font-semibold px-4 py-2 rounded w-full">Simpan
                          Evaluasi</button>
                      </div>
                    </div>
                    </div>

                  </div>
                  <div class="w-full flex justify-between mt-6">
                    <button onclick="prevPage()"
                      class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition">
                      Kembali
                    </button>


                    <!-- Tombol Aksi di kanan -->

                    <!-- Tombol Kirim Hasil Evaluasi -->
                    <div class="relative inline-block">
                      <button onclick="toggleDropdown()"
                        class="px-5 py-2 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 transition">
                        Kirim Hasil
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

                    <!-- Dropdown -->
                    <div id="dropdown-aksi"
                      class="absolute right-0 mt-2 w-64 bg-white dark:bg-slate-800 rounded-lg shadow-lg hidden z-50 p-4 space-y-4">
                      <button onclick="closeDropdown()"
                        class="absolute top-2 right-2 text-gray-600 hover:text-gray-900 dark:hover:text-white font-bold text-xl leading-none">
                        &times;
                      </button>
                      <!-- Kirim Langsung -->
                      <button onclick="kirimLangsung()"
                        class="w-full text-left px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600 transition">
                        Kirim Validator
                      </button>


                      <button onclick="openEvaluatorModal()" type="button"
                        class="w-full text-left px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600 transition">
                        Kirim Evaluator
                      </button>
                      <!-- Perbaiki -->
                      <button onclick="openModal('Nama Dokumen')"
                        class="w-full text-left px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700 transition">
                        Perbaiki
                      </button>
                    </div>
                  </div>

                  <!-- Modal Perbaikan -->
                  <div id="modal-evaluasi"
                    class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
                    <div class="bg-white dark:bg-slate-800 rounded-xl p-6 w-full max-w-md shadow-lg relative">
                      <h2 class="text-xl font-bold mb-4 text-gray-800 dark:text-white">
                        Catatan Perbaikan
                      </h2>
                      <textarea id="catatan-evaluasi" class="w-full p-2 border rounded mb-4" rows="4"
                        placeholder="Tulis catatan perbaikan..."></textarea>

                      <div class="flex justify-end gap-2">
                        <button onclick="closeModal()"
                          class="px-4 py-2 bg-gray-300 text-gray-800 rounded hover:bg-gray-400">
                          Batal
                        </button>
                        <button onclick="simpanEvaluasi()"
                          class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                          Kirim Perbaikan
                        </button>
                      </div>
                    </div>
                  </div>

                  <script>
                    const dropdown = document.getElementById('dropdown-aksi');
                    const dropdownContainer = document.getElementById('dropdown-container');

                    function toggleDropdown() {
                      dropdown.classList.toggle('hidden');
                    }
                    function closeDropdown() {
                      dropdown.classList.add('hidden');
                    }

                    // Tutup dropdown jika klik di luar dropdown dan tombol
                    window.addEventListener('click', function (event) {
                      if (!dropdownContainer.contains(event.target)) {
                        dropdown.classList.add('hidden');
                      }
                    });

                    function kirimLangsung() {
                      window.location.href = "/daftarpengajuanevaluator";
                    }

                    function openModal() {
                      closeDropdown();
                      document.getElementById('modal-evaluasi').classList.remove('hidden');
                      document.body.classList.add('overflow-hidden');
                      document.getElementById('catatan-evaluasi').value = '';
                    }

                    function closeModal() {
                      document.getElementById('modal-evaluasi').classList.add('hidden');
                      document.body.classList.remove('overflow-hidden');
                    }

                   async function simpanEvaluasi() {
                      const catatan = document.getElementById('catatan-evaluasi').value.trim();

                      if (!catatan) {
                        alert("Catatan perbaikan wajib diisi.");
                        return;
                      }

                   
                      const items = document.querySelectorAll('.evaluasi-item');
                      const hasilEvaluasi = [];
                      let idPengajuan = {{ $pengajuan->id }};
                        const catatanval = document.getElementById('catatan-evaluasi').value;

                      items.forEach(item => {
                        const id = item.dataset.id;
                        const catatan = document.getElementById(`catatan${id}`).value;
                        const status = document.getElementById(`status${id}`).value;
                        
                      

                        if (status === 'Ditolak') {
                          hasilEvaluasi.push({
                            id_perbaikan: id,
                            catatan: catatan,
                            status: status
                          });
                        }
                      });


                      const dataKirim = {
                           id_pengajuan: idPengajuan,
                            evaluasi: hasilEvaluasi,
                            catatan: catatanval
                        };

                      if (hasilEvaluasi.length === 0) {
                        alert("Tidak ada evaluasi yang perlu perbaikan.");
                        return;
                      }

                      console.log('Hasil evaluasi sekarang:', dataKirim);

                      try {
                        const response = await fetch('/evaluasi/simpan', {
                          method: 'POST',
                          headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                          },
                          credentials: 'include',
                          body: JSON.stringify(dataKirim)
                        });

                        if (!response.ok) {
                          throw new Error(`HTTP error! status: ${response.status}`);
                        }

                        const data = await response.json();
                        alert("Evaluasi berhasil dikirim!");
                        console.log(data);

                      } catch (error) {
                        console.error('Gagal:', error);
                        alert("Terjadi kesalahan saat mengirim evaluasi.");
                      }

                    

                    /*  closeModal();
                      window.location.href = "/halaman-perbaikan";
                     */
                      
                    }

                    function openEvaluatorModal() {
                      closeDropdown();
                      document.getElementById('modal-evaluator').classList.remove('hidden');
                      document.body.classList.add('overflow-hidden');
                    }

                    function closeEvaluatorModal() {
                      document.getElementById('modal-evaluator').classList.add('hidden');
                      document.body.classList.remove('overflow-hidden');
                    }
                  </script>




                  <!-- Modal Pilih Evaluator -->
                  <div id="modal-evaluator"
                    class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
                    <div
                      class="bg-white dark:bg-slate-800 rounded-xl p-6 w-full max-w-2xl shadow-lg relative max-h-[90vh] flex flex-col">

                      <h2 class="text-xl font-bold mb-4 text-gray-800 dark:text-white">Pilih Evaluator</h2>

                      <!-- Scrollable Evaluator List -->
                      <div class="space-y-4 overflow-y-auto pr-2" style="max-height: 60vh;">
                        <!-- Evaluator 1 -->
                        <label
                          class="flex items-center gap-4 border p-3 rounded-lg cursor-pointer hover:bg-gray-100 dark:hover:bg-slate-700 transition-all">
                          <input type="radio" name="evaluator" value="evaluator1" class="hidden peer" />
                          <img
                            src="https://img.freepik.com/vektor-premium/ilustrasi-datar-vektor-dalam-skala-abu-abu-ikon-orang-profil-pengguna-avatar-gambar-profil-siluet-netral-gender-cocok-untuk-ikon-profil-media-sosial-screensaver-dan-sebagai-templatx9xa_719432-1096.jpg"
                            alt="Foto Evaluator" class="w-12 h-12 rounded-full object-cover" />
                          <div>
                            <p class="font-semibold text-gray-800 dark:text-white">Ahmad Yusuf</p>
                            <p class="text-sm text-gray-500 dark:text-gray-300">NIP: 1987654321</p>
                          </div>
                          <div
                            class="ml-auto hidden peer-checked:flex items-center justify-center w-6 h-6 rounded-full bg-blue-500 text-white font-bold transition-all duration-200">
                            ✓
                          </div>
                        </label>

                        <!-- Evaluator 2 -->
                        <label
                          class="flex items-center gap-4 border p-3 rounded-lg cursor-pointer hover:bg-gray-100 dark:hover:bg-slate-700 transition-all">
                          <input type="radio" name="evaluator" value="evaluator2" class="hidden peer" />
                          <img
                            src="https://img.freepik.com/vektor-premium/ilustrasi-datar-vektor-dalam-skala-abu-abu-ikon-orang-profil-pengguna-avatar-gambar-profil-siluet-netral-gender-cocok-untuk-ikon-profil-media-sosial-screensaver-dan-sebagai-templatx9xa_719432-1096.jpg"
                            alt="Foto Evaluator" class="w-12 h-12 rounded-full object-cover" />
                          <div>
                            <p class="font-semibold text-gray-800 dark:text-white">Siti Rahmawati</p>
                            <p class="text-sm text-gray-500 dark:text-gray-300">NIP: 1990123456</p>
                          </div>
                          <div
                            class="ml-auto hidden peer-checked:flex items-center justify-center w-6 h-6 rounded-full bg-blue-500 text-white font-bold transition-all duration-200">
                            ✓
                          </div>
                        </label>

                        <!-- Evaluator 3 -->
                        <label
                          class="flex items-center gap-4 border p-3 rounded-lg cursor-pointer hover:bg-gray-100 dark:hover:bg-slate-700 transition-all">
                          <input type="radio" name="evaluator" value="evaluator3" class="hidden peer" />
                          <img
                            src="https://img.freepik.com/vektor-premium/ilustrasi-datar-vektor-dalam-skala-abu-abu-ikon-orang-profil-pengguna-avatar-gambar-profil-siluet-netral-gender-cocok-untuk-ikon-profil-media-sosial-screensaver-dan-sebagai-templatx9xa_719432-1096.jpg"
                            alt="Foto Evaluator" class="w-12 h-12 rounded-full object-cover" />
                          <div>
                            <p class="font-semibold text-gray-800 dark:text-white">Rizki Monika</p>
                            <p class="text-sm text-gray-500 dark:text-gray-300">NIP: 19901234587</p>
                          </div>
                          <div
                            class="ml-auto hidden peer-checked:flex items-center justify-center w-6 h-6 rounded-full bg-blue-500 text-white font-bold transition-all duration-200">
                            ✓
                          </div>
                        </label>

                        <!-- Tambahkan evaluator baru sebanyak yang kamu mau disini -->
                        <!-- Contoh evaluator tambahan -->
                        <label
                          class="flex items-center gap-4 border p-3 rounded-lg cursor-pointer hover:bg-gray-100 dark:hover:bg-slate-700 transition-all">
                          <input type="radio" name="evaluator" value="evaluator4" class="hidden peer" />
                          <img
                            src="https://img.freepik.com/vektor-premium/ilustrasi-datar-vektor-dalam-skala-abu-abu-ikon-orang-profil-pengguna-avatar-gambar-profil-siluet-netral-gender-cocok-untuk-ikon-profil-media-sosial-screensaver-dan-sebagai-templatx9xa_719432-1096.jpg"
                            alt="Foto Evaluator" class="w-12 h-12 rounded-full object-cover" />
                          <div>
                            <p class="font-semibold text-gray-800 dark:text-white">Budi Santoso</p>
                            <p class="text-sm text-gray-500 dark:text-gray-300">NIP: 1990112233</p>
                          </div>
                          <div
                            class="ml-auto hidden peer-checked:flex items-center justify-center w-6 h-6 rounded-full bg-blue-500 text-white font-bold transition-all duration-200">
                            ✓
                          </div>
                        </label>

                        <label
                          class="flex items-center gap-4 border p-3 rounded-lg cursor-pointer hover:bg-gray-100 dark:hover:bg-slate-700 transition-all">
                          <input type="radio" name="evaluator" value="evaluator4" class="hidden peer" />
                          <img
                            src="https://img.freepik.com/vektor-premium/ilustrasi-datar-vektor-dalam-skala-abu-abu-ikon-orang-profil-pengguna-avatar-gambar-profil-siluet-netral-gender-cocok-untuk-ikon-profil-media-sosial-screensaver-dan-sebagai-templatx9xa_719432-1096.jpg"
                            alt="Foto Evaluator" class="w-12 h-12 rounded-full object-cover" />
                          <div>
                            <p class="font-semibold text-gray-800 dark:text-white">Budi Santoso</p>
                            <p class="text-sm text-gray-500 dark:text-gray-300">NIP: 1990112233</p>
                          </div>
                          <div
                            class="ml-auto hidden peer-checked:flex items-center justify-center w-6 h-6 rounded-full bg-blue-500 text-white font-bold transition-all duration-200">
                            ✓
                          </div>
                        </label>

                        <label
                          class="flex items-center gap-4 border p-3 rounded-lg cursor-pointer hover:bg-gray-100 dark:hover:bg-slate-700 transition-all">
                          <input type="radio" name="evaluator" value="evaluator4" class="hidden peer" />
                          <img
                            src="https://img.freepik.com/vektor-premium/ilustrasi-datar-vektor-dalam-skala-abu-abu-ikon-orang-profil-pengguna-avatar-gambar-profil-siluet-netral-gender-cocok-untuk-ikon-profil-media-sosial-screensaver-dan-sebagai-templatx9xa_719432-1096.jpg"
                            alt="Foto Evaluator" class="w-12 h-12 rounded-full object-cover" />
                          <div>
                            <p class="font-semibold text-gray-800 dark:text-white">Budi Santoso</p>
                            <p class="text-sm text-gray-500 dark:text-gray-300">NIP: 1990112233</p>
                          </div>
                          <div
                            class="ml-auto hidden peer-checked:flex items-center justify-center w-6 h-6 rounded-full bg-blue-500 text-white font-bold transition-all duration-200">
                            ✓
                          </div>
                        </label>

                        <!-- dst... -->
                      </div>

                      <!-- Tombol Aksi di Bawah -->
                      <div class="mt-6 space-y-3">
                        <button onclick="kirimKeEvaluator()"
                          class="w-full px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition">
                          Kirim
                        </button>
                        <button onclick="closeEvaluatorModal()"
                          class="w-full px-4 py-2 bg-gray-300 text-gray-800 rounded hover:bg-gray-400 transition">
                          Batal
                        </button>
                      </div>
                    </div>
                  </div>


                  <!-- Popup Notifikasi -->
                  <div id="popup-notif"
                    class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-40 hidden z-60">
                    <div class="bg-white dark:bg-slate-800 rounded-lg p-6 max-w-sm w-full shadow-lg text-center">
                      <p class="text-lg font-semibold text-gray-800 dark:text-white mb-4">Dokumen berhasil dikirim ke
                        evaluator.</p>
                      <button onclick="closePopupNotif()"
                        class="px-5 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition">
                        Tutup
                      </button>
                    </div>
                  </div>

                  <script>
                    function openEvaluatorModal() {
                      document.getElementById('modal-evaluator').classList.remove('hidden');
                      document.body.classList.add('overflow-hidden');
                    }

                    function closeEvaluatorModal() {
                      document.getElementById('modal-evaluator').classList.add('hidden');
                      document.body.classList.remove('overflow-hidden');
                    }

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

                      // TODO: Tambahkan AJAX / pengiriman data ke server jika perlu

                      closeEvaluatorModal();
                      showPopupNotif();
                    }

                 
                    // Ambil data yang sudah ada
                    function simpanDraf(nomor) {
                        const catatanInput = document.getElementById(`catatan${nomor}`);
                        const statusSelect = document.getElementById(`status${nomor}`);

                        if (!catatanInput || !statusSelect) {
                          alert('Elemen tidak ditemukan!');
                          return;
                        }

                        const catatan = catatanInput.value;
                        const status = statusSelect.value;

                        // Ambil draf sebelumnya dari sessionStorage
                        let draf = JSON.parse(sessionStorage.getItem('evaluasi_draf')) || {};

                        // Simpan/Update nilai evaluasi ke objek draf
                        draf[`evaluasi${nomor}`] = {
                          catatan: catatan,
                          status: status
                        };

                        // Simpan kembali ke sessionStorage
                        sessionStorage.setItem('evaluasi_draf', JSON.stringify(draf));

                        alert(`Evaluasi ${nomor} berhasil disimpan ke draf!`);
                        
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