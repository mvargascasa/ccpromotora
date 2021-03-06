<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Casa Credito Promotora - @yield('title')</title>

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">

    <!--EFECTOS DE APARECIMIENTO-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{ asset('scss/style.scss') }}">

    <!-- Meta Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '519986722991895');
      fbq('track', 'PageView');
      </script>
      <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=519986722991895&ev=PageView&noscript=1"
      /></noscript>
    <!-- End Meta Pixel Code -->

    {{-- Facebook Verification --}}
    <meta name="facebook-domain-verification" content="jp22ipj62vxlwvbhwunsdns2r0tjh2" />

    <meta name="google-site-verification" content="Y-9EP4y_a2rT6CR0jEqKRGpf7EhQ9yJ2jiUSz1BVs60" />

    @yield('content-head')
</head>
<body>
  <!--NAVBAR-->
    <nav id="menu" class="navbar navbar-expand-lg fixed-top navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('pages.home') }}"><img id="img-logo" class="img-fluid" width="75px" height="75px" src="{{ URL::asset('logo-recortado.png'); }}" alt="Logo Casa Credito Promotora"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon bg-secondary rounded" style="opacity: 0.5"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul id="itemMenu" class="navbar-nav rounded ms-auto">
              <li class="nav-item dropdown">
                <a id="menu-item1" class="nav-link dropdown-toggle text-white rounded" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-current="page" href="">NOSOTROS <i class="fa-solid fa-plus"></i></a>
                <ul id="dropdown-menu" class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{ route('pages.about') }}">Nuestra Empresa</a></li>
                  <li><a class="dropdown-item" href="{{ route('pages.equipo') }}">Equipo</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a id="menu-item2" class="nav-link text-white rounded" href="{{ route('pages.projects') }}">PROYECTOS</a>
              </li>
              <li class="nav-item dropdown">
                <a id="menu-item4" class="nav-link dropdown-toggle text-white rounded" id="navbarDropdown" role="button" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">PARTNERS <i class="fa-solid fa-plus"></i></a>
                <ul id="dropdown-menu" class="dropdown-menu shadow" aria-labelledby="navbarDropdown">
                  <li class="dropend">
                    <a class="dropdown-item dropdown-toggle text-dark" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Entidades financieras <i class="fa-solid fa-angle-right"></i></a>
                    <ul id="dropdown-submenu" class="dropdown-menu shadow" style="margin-left: 165px; margin-top: -37px">
                      <li><a class="dropdown-item" href="{{ route('pages.partners') }}"><b>Los Rios</b></a></li>
                      <li><a class="dropdown-item" href="#"><b>Corpu Corp</b></a></li>
                    </ul>
                  </li>
                  <li class="dropend">
                    <a class="dropdown-item dropdown-toggle text-dark" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Construye <i class="fa-solid fa-angle-right"></i></a>
                    <ul id="dropdown-submenu" class="dropdown-menu shadow" style="margin-left: 165px; margin-top: -37px">
                      <li><a class="dropdown-item" href="{{ route('socios.dolmen')}}"><b>Dolmen</b></a></li>
                      <li><a class="dropdown-item" href="{{ route('socios.dolmen.catalogo')}}"><b>Cat??logo</b></a></li>
                      <li><a class="dropdown-item" href="{{ route('socios.construye')}}"><b>Construcci??n</b></a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a id="menu-item3" class="nav-link text-white rounded" href="{{ route('pages.news') }}">BLOG</a>
              </li>
              <li class="nav-item">
                <a id="menu-item5" class="nav-link text-white rounded" href="{{ route('pages.contact') }}">CONTACTANOS</a>
              </li>
              <li class="nav-item">
                <a id="menu-item6" class="nav-link text-white rounded" href="{{ route('login') }}">LOGIN</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      @yield('content')


      <!--FOOTER-->
    <footer class="text-center text-lg-start bg-light text-muted">
        <section class="pt-5">
          <div class="text-center text-md-start">
            <div class="row mt-3">
              <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                  <p class="fw-bold">
                    Promotora Casa Credito
                  </p>
                  <p class="fw-bold">
                    Av. Juan I??iguez 3-87 y D. Gonzalo Cordero
                  </p>
                  <p>
                    Cuenca - Ecuador
                  </p>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                  <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                    <a target="_blank" style="text-decoration:none; color: gray" href="https://www.facebook.com/Casa-Credito-Promotora-103083175562736/?ref=pages_you_manage">
                      <svg style="margin-right: 5%" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                      </svg>
                    </a>
                    <a target="_blank" style="text-decoration: none; color: gray" href="https://www.linkedin.com/company/casa-cr%C3%A9dito-inmobiliaria/?viewAsMember=true">
                      <svg style="margin-right: 5%" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                      </svg>
                    </a>
                    <a target="_blank" style="text-decoration: none; color: gray" href="https://www.instagram.com/casacreditopromotora/">
                      <svg style="margin-right: 5%" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                      </svg>  
                    </a>
                    {{-- <a style="text-decoration: none; color: gray" href="">    
                      <svg style="margin-right: 5%" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                        <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                      </svg> 
                    </a>    --}}
                  </div>
                </div>

                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                  <p class="fw-bold">ventas@casacreditopromotora.com</p>
                  <p class="fw-bold">1800 CASACREDITO</p>
                  <p>WEB BY CASA CREDITO PRO</p>
                </div>
              </div>
            </div>
          </section>
        </footer>

        <a style="color: #ffffff" href="https://api.whatsapp.com/send?phone=+593983849073&text=Deseo saber m??s informaci??n sobre los proyectos de Casa Cr??dito Promotora" class="whatsapp" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>

        {{-- 593983849073 --}}
    
    @yield('section-scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!--SCRIPT DE ICONOS-->
    <script src="https://kit.fontawesome.com/29da43bc4d.js" crossorigin="anonymous"></script>

    <!--SCRIPT PARA GENERAR LOS EFECTOS DE LA PAGINA-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script>
      document.addEventListener('click',function(e){
  // Hamburger menu
      if(e.target.classList.contains('hamburger-toggle')){
        e.target.children[0].classList.toggle('active');
      }
    })
    </script>
</body>
</html>
      
    

        
    