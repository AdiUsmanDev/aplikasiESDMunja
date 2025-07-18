<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/png" href="{{ asset('assets/img/logo-esdm.svg') }}" />
  <title>Masuk</title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Nucleo Icons -->
  <link href=" {{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href=" {{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- Main Styling -->
  <link href="{{ asset('assets/css/argon-dashboard-tailwind.css?v=1.0.1') }}" rel="stylesheet" />

<link rel="stylesheet" href="https://unpkg.com/tippy.js@6/themes/light.css" />

<!-- Tambahkan sebelum </body> -->
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/tippy.js@6"></script>

</head>



<body class="m-0 font-sans antialiased font-normal bg-white text-start text-base leading-default text-slate-500">
  <div class="container sticky top-0 z-sticky">
    <div class="flex flex-wrap -mx-3">
      <div class="w-full max-w-full px-3 flex-0">
        <!-- Navbar 
          <nav class="absolute top-0 left-0 right-0 z-30 flex flex-wrap items-center px-4 py-2 m-6 mb-0 shadow-sm rounded-xl bg-white/80 backdrop-blur-2xl backdrop-saturate-200 lg:flex-nowrap lg:justify-start">
            <div class="flex items-center justify-between w-full p-0 px-6 mx-auto flex-wrap-inherit">
              <a class="py-1.75 text-sm mr-4 ml-4 whitespace-nowrap font-bold text-slate-700 lg:ml-0" href="https://demos.creative-tim.com/argon-dashboard-tailwind/pages/dashboard.html" target="_blank"> Argon Dashboard 2 </a>
              <button navbar-trigger class="px-3 py-1 ml-2 leading-none transition-all ease-in-out bg-transparent border border-transparent border-solid rounded-lg shadow-none cursor-pointer text-lg lg:hidden" type="button" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="inline-block mt-2 align-middle bg-center bg-no-repeat bg-cover w-6 h-6 bg-none">
                  <span bar1 class="w-5.5 rounded-xs relative my-0 mx-auto block h-px bg-gray-600 transition-all duration-300"></span>
                  <span bar2 class="w-5.5 rounded-xs mt-1.75 relative my-0 mx-auto block h-px bg-gray-600 transition-all duration-300"></span>
                  <span bar3 class="w-5.5 rounded-xs mt-1.75 relative my-0 mx-auto block h-px bg-gray-600 transition-all duration-300"></span>
                </span>
              </button>
              <div navbar-menu class="items-center flex-grow transition-all duration-500 lg-max:overflow-hidden ease lg-max:max-h-0 basis-full lg:flex lg:basis-auto">
                <ul class="flex flex-col pl-0 mx-auto mb-0 list-none lg:flex-row xl:ml-auto">
                  <li>
                    <a class="flex items-center px-4 py-2 mr-2 font-normal transition-all ease-in-out lg-max:opacity-0 duration-250 text-sm text-slate-700 lg:px-2" aria-current="page" href="../pages/dashboard.html">
                      <i class="mr-1 fa fa-chart-pie opacity-60"></i>
                      Dashboard
                    </a>
                  </li>
                  <li>
                    <a class="block px-4 py-2 mr-2 font-normal transition-all ease-in-out lg-max:opacity-0 duration-250 text-sm text-slate-700 lg:px-2" href="../pages/profile.html">
                      <i class="mr-1 fa fa-user opacity-60"></i>
                      Profile
                    </a>
                  </li>
                  <li>
                    <a class="block px-4 py-2 mr-2 font-normal transition-all ease-in-out lg-max:opacity-0 duration-250 text-sm text-slate-700 lg:px-2" href="../pages/sign-up.html">
                      <i class="mr-1 fas fa-user-circle opacity-60"></i>
                      Sign Up
                    </a>
                  </li>
                  <li>
                    <a class="block px-4 py-2 mr-2 font-normal transition-all ease-in-out lg-max:opacity-0 duration-250 text-sm text-slate-700 lg:px-2" href="../pages/sign-in.html">
                      <i class="mr-1 fas fa-key opacity-60"></i>
                      Sign In
                    </a>
                  </li>
                </ul>
                 online builder btn  -->
        <!-- <li class="flex items-center">
                  <a
                    class="leading-pro ease-in text-blue-500 border-blue-500 text-xs tracking-tight-rem bg-150 bg-x-25 rounded-3.5xl hover:border-blue-500 hover:-translate-y-px hover:text-blue-500 active:hover:border-blue-500 active:hover:-translate-y-px active:hover:text-blue-500 active:opacity-85 active:shadow-xs active:bg-blue-500 active:border-blue-500 mr-2 mb-0 inline-block cursor-pointer border border-solid bg-transparent py-2 px-8 text-center align-middle font-bold uppercase shadow-none transition-all hover:bg-transparent hover:opacity-75 hover:shadow-none active:scale-100 active:text-white active:hover:bg-transparent active:hover:opacity-75 active:hover:shadow-none"
                    target="_blank"
                    href="https://www.creative-tim.com/builder/soft-ui?ref=navbar-dashboard&amp;_ga=2.76518741.1192788655.1647724933-1242940210.1644448053"
                    >Online Builder</a
                  
                </li> 
                <ul class="hidden pl-0 mb-0 list-none lg:block lg:flex-row">
                  <li>
                    <a href="https://www.creative-tim.com/product/argon-dashboard-tailwind" target="_blank" class="inline-block px-8 py-2 mb-0 mr-1 font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer hover:-translate-y-px hover:shadow-xs active:opacity-85 text-xs tracking-tight-rem">Free Download</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div> -->
        <main class="mt-0 transition-all duration-200 ease-in-out">
          <section>
            <div class="relative flex items-center min-h-screen p-0 overflow-hidden bg-center bg-cover">
              <div class="container z-1">
                <div class="flex flex-wrap -mx-3">
                  <div class="flex flex-col w-full max-w-full px-3 mx-auto lg:mx-0 shrink-0 md:flex-0 md:w-7/12 lg:w-5/12 xl:w-4/12">
                    <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none lg:py4 dark:bg-gray-950 rounded-2xl bg-clip-border">
                      <div class="p-6 pb-0 mb-0">
                        <h4 class="font-bold">Masuk</h4>
                        <p class="mb-0">Masukan Email dan Kata Sandi Anda </p>
                      </div>

                      <div class="flex-auto p-6">
                        <form  id="formLogin" role="form" action="{{ route('loginmanual') }}" method="POST">
                           <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <div class="mb-4">
                            <input type="email" name="email" placeholder="Email" class="focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" />
                          </div>
                          <div class="mb-4 relative">
                            <input type="password" name="password" id="password" placeholder="Kata Sandi" class="focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" />
                            <br>  
                            <button
                              type="button"
                              id="togglePassword"
                              class="absolute right-5 top-1/2 -translate-y-1/2 text-xs text-blue-600 underline focus:outline-none">
                              Tampilkan
                            </button>
                          </div>
                          <div class="flex items-center pl-12 mb-0.5 text-left min-h-6">
                            <input id="rememberMe" class="mt-0.5 rounded-10 duration-250 ease-in-out after:rounded-circle after:shadow-2xl after:duration-250 checked:after:translate-x-5.3 h-5 relative float-left -ml-12 w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-zinc-700/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-blue-500/95 checked:bg-blue-500/95 checked:bg-none checked:bg-right" type="checkbox" />
                            <label class="ml-2 font-normal cursor-pointer select-none text-sm text-slate-700" for="rememberMe">Ingat saya</label>
                          </div>
                          <div class="text-center">
                            <button type="submit"
                              class="inline-block w-full px-16 py-3.5 mt-6 mb-0 font-bold leading-normal text-center text-white align-middle transition-all bg-blue-500 border-0 rounded-lg cursor-pointer hover:-translate-y-px active:opacity-85 hover:shadow-xs text-sm ease-in tracking-tight-rem shadow-md bg-150 bg-x-25">
                              Masuk
                            </button>
                          </div>

                        </form>

              <div class="text-center mb-4">
 <p>

  <div class="flex justify-center">
    <a href="{{ url('auth/google') }}"
       class="flex items-center gap-2 px-5 py-2.5 text-white font-semibold uppercase bg-white border border-gray-300 rounded-lg shadow-md hover:shadow-lg hover:-translate-y-0.5 transition transform duration-200 ease-in-out">

      <svg class="w-6 h-6" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" fill="none">
        <g fill-rule="nonzero">
          <path d="M57.81 30.15c0-2.43-.2-4.2-.62-6.03H29.5v10.95h16.26c-.33 2.72-2.1 6.82-6.05 9.58l-.06.37 8.76 6.78.61.06c5.57-5.15 8.77-12.72 8.77-21.71z" fill="#4285F4"/>
          <path d="M29.5 58.99c7.96 0 14.65-2.62 19.54-7.14l-9.31-7.21c-2.49 1.72-5.84 2.91-10.23 2.91-7.8 0-14.42-5.15-16.8-12.23l-.35.03-9.1 7.05-.12.33C8 52.37 17.96 58.99 29.5 58.99z" fill="#34A853"/>
          <path d="M12.72 35.33a17.46 17.46 0 0 1-.98-5.83c0-2.03.36-3.99.97-5.83l-.02-.39-9.22-7.16-.3.14A29.48 29.48 0 0 0 0 29.5c0 4.75 1.15 9.24 3.14 13.22l9.58-7.39z" fill="#FBBC05"/>
          <path d="M29.5 11.4c5.54 0 9.3 2.4 11.43 4.4l8.32-8.13C44.1 2.92 37.46 0 29.5 0 17.96 0 8 6.62 3.15 16.26l9.53 7.41C15.08 16.55 21.7 11.4 29.5 11.4z" fill="#EB4335"/>
        </g>
      </svg>
    </a>
  </div>
</div>


                    

             @if ($errors->has('email'))
                            <script>
    document.addEventListener('DOMContentLoaded', () => {
        const formLogin = document.querySelector('#formLogin');
        const errorMessage = @json($errors->first('email'));

        if (formLogin && errorMessage) {
            tippy(formLogin, {
                content: errorMessage,
                theme: 'custom-error',
                placement: 'top',
                trigger: 'manual',
                showOnCreate: true,
                animation: 'scale',
                duration: [200, 150],
                inertia: true,
                maxWidth: 300,
            });
        }
    });
</script>

               @endif

                      </div>
                      <div class="border-black/12.5 rounded-b-2xl border-t-0 border-solid p-6 text-center pt-0 px-1 sm:px-6">
                        <p class="mx-auto mb-6 leading-normal text-sm">Belum punya akun? <a href="{{ route('daftar') }}" class="font-semibold text-transparent bg-clip-text bg-gradient-to-tl from-blue-500 to-violet-500">Daftar akun</a></p>
                      </div>
                    </div>
                  </div>

                  <div class="absolute top-0 right-0 flex-col justify-center hidden w-6/12 h-full max-w-full px-3 pr-0 my-auto text-center flex-0 lg:flex">
                    <div class="relative flex flex-col justify-center h-full bg-cover px-24 m-4 overflow-hidden rounded-xl " style="background-image: url('{{ asset('assets/img/listrik1.jpg') }}')">
                      <span class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-orange-500 to-violet-500 opacity-60"></span>
                      <h4 class="z-20 mt-12 font-bold text-white">--</h4>
                      <p class="z-50 text-white" style="text-align: justify; ">"Sistem ini adalah aplikasi berbasis web yang dibuat untuk mempermudah proses pengajuan izin pembangunan dan operasional pembangkit listrik.
                        Pengajuan bisa dilakukan oleh perusahaan (swasta/BUMN) atau perorangan secara online.
                        Aplikasi ini digunakan oleh Dinas ESDM Provinsi Jambi untuk menggantikan proses pengajuan manual agar lebih cepat, efisien, dan terdokumentasi dengan baik."
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </main>
        <footer class="py-12">
        </footer>
</body>


<script>
  function loginBerhasil() {
    const rememberCheckbox = document.getElementById("rememberMe");

    if (rememberCheckbox.checked) {
      localStorage.setItem("rememberMe", "true");
    } else {
      localStorage.removeItem("rememberMe");
    }
  }

  window.onload = function () {
    const checkbox = document.getElementById("rememberMe");
    if (localStorage.getItem("rememberMe") === "true") {
      checkbox.checked = true;
    } else {
      checkbox.checked = false;
    }
  };
 

  document.addEventListener('DOMContentLoaded', function () {
    const passwordInput = document.getElementById('password');
    const iconPassword = document.getElementById('iconPassword');
    const toggleBtn = document.getElementById('togglePassword');

    toggleBtn.addEventListener('click', () => {
      const isPassword = passwordInput.type === 'password';
      passwordInput.type = isPassword ? 'text' : 'password';

      iconPassword.src = isPassword
        ? 'https://www.svgrepo.com/show/500228/eye-off.svg'
        : 'https://www.svgrepo.com/show/500227/eye.svg';
    });
  });

</script>


<!-- plugin for scrollbar  -->
<script src="../assets/js/plugins/perfect-scrollbar.min.js" async></script>
<!-- main script file  -->
<script src="../assets/js/argon-dashboard-tailwind.js?v=1.0.1" async></script>

</html>