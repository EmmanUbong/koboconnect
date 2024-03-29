@extends('layouts.app')
@section('title','Koboconnect - Bio-Data')
@section('content')
<link rel="stylesheet" href="../Country/css/countrySelect.css">
<link rel="stylesheet" href="../Country/css/demo.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../locate/jquery.stateLga.js"></script>
<script src="../locate/jquery.ucfirst.js"></script>

{{-- <script type="text/javascript">
  function message()
  {
  alert("This alert box was called with the onload event");
  }
  </script> --}}
  </head>

<!-- Dynamic State and LGA Filter -->
<script type="text/javascript" src="../locate/Dynamic_State_LGA.js"></script>
<script>
  /* Inlude [JQUERY](code.jquery.com/jquery-1.11.0.min.js) External SOurce Scrit *?
/* SAVE AS Dynamic_State_LGA.js */
// JavaScript Document
/*<![CDATA[*/
var Abia = ['Select item...', 'Aba North', 'Aba South', 'Arochukwu', 'Bende', 'Ikwuano', 'Isiala Ngwa North', 'Isiala Ngwa South', 'Isuikwuato', 'Obi Ngwa', 'Ohafia', 'Osisioma', 'Ugwunagbo', 'Ukwa East', 'Ukwa West', 'Umuahia North', 'muahia South', 'Umu Nneochi'];

var Adamawa = ['Select item...', 'Demsa', 'Fufure', 'Ganye', 'Gayuk', 'Gombi', 'Grie', 'Hong', 'Jada', 'Larmurde', 'Madagali', 'Maiha', 'Mayo Belwa', 'Michika', 'Mubi North', 'Mubi South', 'Numan', 'Shelleng', 'Song', 'Toungo', 'Yola North', 'Yola South'];

var AkwaIbom = ['Select item...', 'Abak', 'Eastern Obolo', 'Eket', 'Esit Eket', 'Essien Udim', 'Etim Ekpo', 'Etinan', 'Ibeno', 'Ibesikpo Asutan', 'Ibiono-Ibom', 'Ika', 'Ikono', 'Ikot Abasi', 'Ikot Ekpene', 'Ini', 'Itu', 'Mbo', 'Mkpat-Enin', 'Nsit-Atai', 'Nsit-Ibom', 'Nsit-Ubium', 'Obot Akara', 'Okobo', 'Onna', 'Oron', 'Oruk Anam', 'Udung-Uko', 'Ukanafun', 'Uruan', 'Urue-Offong Oruko', 'Uyo'];

var Anambra = ['Select item...', 'Aguata', 'Anambra East', 'Anambra West', 'Anaocha', 'Awka North', 'Awka South', 'Ayamelum', 'Dunukofia', 'Ekwusigo', 'Idemili North', 'Idemili South', 'Ihiala', 'Njikoka', 'Nnewi North', 'Nnewi South', 'Ogbaru', 'Onitsha North', 'Onitsha South', 'Orumba North', 'Orumba South', 'Oyi'];

var Bauchi = ['Select item...', 'Alkaleri', 'Bauchi', 'Bogoro', 'Damban', 'Darazo', 'Dass', 'Gamawa', 'Ganjuwa', 'Giade', 'Itas-Gadau', 'Jama are', 'Katagum', 'Kirfi', 'Misau', 'Ningi', 'Shira', 'Tafawa Balewa', ' Toro', ' Warji', ' Zaki'];

var Bayelsa = ['Select item...', 'Brass', 'Ekeremor', 'Kolokuma Opokuma', 'Nembe', 'Ogbia', 'Sagbama', 'Southern Ijaw', 'Yenagoa'];

var Benue = ['Select item...', 'Agatu', 'Apa', 'Ado', 'Buruku', 'Gboko', 'Guma', 'Gwer East', 'Gwer West', 'Katsina-Ala', 'Konshisha', 'Kwande', 'Logo', 'Makurdi', 'Obi', 'Ogbadibo', 'Ohimini', 'Oju', 'Okpokwu', 'Oturkpo', 'Tarka', 'Ukum', 'Ushongo', 'Vandeikya'];

var Borno = ['Select item...', 'Abadam', 'Askira-Uba', 'Bama', 'Bayo', 'Biu', 'Chibok', 'Damboa', 'Dikwa', 'Gubio', 'Guzamala', 'Gwoza', 'Hawul', 'Jere', 'Kaga', 'Kala-Balge', 'Konduga', 'Kukawa', 'Kwaya Kusar', 'Mafa', 'Magumeri', 'Maiduguri', 'Marte', 'Mobbar', 'Monguno', 'Ngala', 'Nganzai', 'Shani'];

var CrossRiver = ['Select item...', 'Abi', 'Akamkpa', 'Akpabuyo', 'Bakassi', 'Bekwarra', 'Biase', 'Boki', 'Calabar Municipal', 'Calabar South', 'Etung', 'Ikom', 'Obanliku', 'Obubra', 'Obudu', 'Odukpani', 'Ogoja', 'Yakuur', 'Yala'];

var Delta = ['Select item...', 'Aniocha North', 'Aniocha South', 'Bomadi', 'Burutu', 'Ethiope East', 'Ethiope West', 'Ika North East', 'Ika South', 'Isoko North', 'Isoko South', 'Ndokwa East', 'Ndokwa West', 'Okpe', 'Oshimili North', 'Oshimili South', 'Patani', 'Sapele', 'Udu', 'Ughelli North', 'Ughelli South', 'Ukwuani', 'Uvwie', 'Warri North', 'Warri South', 'Warri South West'];

var Ebonyi = ['Select item...', 'Abakaliki', 'Afikpo North', 'Afikpo South', 'Ebonyi', 'Ezza North', 'Ezza South', 'Ikwo', 'Ishielu', 'Ivo', 'Izzi', 'Ohaozara', 'Ohaukwu', 'Onicha'];

var Edo = ['Select item...', 'Akoko-Edo', 'Egor', 'Esan Central', 'Esan North-East', 'Esan South-East', 'Esan West', 'Etsako Central', 'Etsako East', 'Etsako West', 'Igueben', 'Ikpoba Okha', 'Orhionmwon', 'Oredo', 'Ovia North-East', 'Ovia South-West', 'Owan East', 'Owan West', 'Uhunmwonde'];

var Ekiti = ['Select item...', 'Ado Ekiti', 'Efon', 'Ekiti East', 'Ekiti South-West', 'Ekiti West', 'Emure', 'Gbonyin', 'Ido Osi', 'Ijero', 'Ikere', 'Ikole', 'Ilejemeje', 'Irepodun-Ifelodun', 'Ise-Orun', 'Moba', 'Oye'];

var Enugu = ['Select item...', 'Aninri', 'Awgu', 'Enugu East', 'Enugu North', 'Enugu South', 'Ezeagu', 'Igbo Etiti', 'Igbo Eze North', 'Igbo Eze South', 'Isi Uzo', 'Nkanu East', 'Nkanu West', 'Nsukka', 'Oji River', 'Udenu', 'Udi', 'Uzo Uwani'];

var FCT = ['Select item...', 'Abaji', 'Bwari', 'Gwagwalada', 'Kuje', 'Kwali', 'Municipal Area Council'];

var Gombe = ['Select item...', 'Akko', 'Balanga', 'Billiri', 'Dukku', 'Funakaye', 'Gombe', 'Kaltungo', 'Kwami', 'Nafada', 'Shongom', 'Yamaltu-Deba'];

var Imo = ['Select item...', 'Aboh Mbaise', 'Ahiazu Mbaise', 'Ehime Mbano', 'Ezinihitte', 'Ideato North', 'Ideato South', 'Ihitte-Uboma', 'Ikeduru', 'Isiala Mbano', 'Isu', 'Mbaitoli', 'Ngor Okpala', 'Njaba', 'Nkwerre', 'Nwangele', 'Obowo', 'Oguta', 'Ohaji-Egbema', 'Okigwe', 'Orlu', 'Orsu', 'Oru East', 'Oru West', 'Owerri Municipal', 'Owerri North', 'Owerri West', 'Unuimo'];

var Jigawa = ['Select item...', 'Auyo', 'Babura', 'Biriniwa', 'Birnin Kudu', 'Buji', 'Dutse', 'Gagarawa', 'Garki', 'Gumel', 'Guri', 'Gwaram', 'Gwiwa', 'Hadejia', 'Jahun', 'Kafin Hausa', 'Kazaure', 'Kiri Kasama', 'Kiyawa', 'Kaugama', 'Maigatari', 'Malam Madori', 'Miga', 'Ringim', 'Roni', 'Sule Tankarkar', 'Taura', 'Yankwashi'];

var Kaduna = ['Select item...', 'Birnin Gwari', 'Chikun', 'Giwa', 'Igabi', 'Ikara', 'Jaba', 'Jema a', 'Kachia', 'Kaduna North', 'Kaduna South', 'Kagarko', 'Kajuru', 'Kaura', 'Kauru', 'Kubau', 'Kudan', 'Lere', 'Makarfi', 'Sabon Gari', 'Sanga', 'Soba', 'Zangon Kataf', 'Zaria'];

var Kano = ['Select item...', 'Ajingi', 'Albasu', 'Bagwai', 'Bebeji', 'Bichi', 'Bunkure', 'Dala', 'Dambatta', 'Dawakin Kudu', 'Dawakin Tofa', 'Doguwa', 'Fagge', 'Gabasawa', 'Garko', 'Garun Mallam', 'Gaya', 'Gezawa', 'Gwale', 'Gwarzo', 'Kabo', 'Kano Municipal', 'Karaye', 'Kibiya', 'Kiru', 'Kumbotso', 'Kunchi', 'Kura', 'Madobi', 'Makoda', 'Minjibir', 'Nasarawa', 'Rano', 'Rimin Gado', 'Rogo', 'Shanono', 'Sumaila', 'Takai', 'Tarauni', 'Tofa', 'Tsanyawa', 'Tudun Wada', 'Ungogo', 'Warawa', 'Wudil'];

var Katsina = ['Select item...', 'Bakori', 'Batagarawa', 'Batsari', 'Baure', 'Bindawa', 'Charanchi', 'Dandume', 'Danja', 'Dan Musa', 'Daura', 'Dutsi', 'Dutsin Ma', 'Faskari', 'Funtua', 'Ingawa', 'Jibia', 'Kafur', 'Kaita', 'Kankara', 'Kankia', 'Katsina', 'Kurfi', 'Kusada', 'Mai Adua', 'Malumfashi', 'Mani', 'Mashi', 'Matazu', 'Musawa', 'Rimi', 'Sabuwa', 'Safana', 'Sandamu', 'Zango'];

var Kebbi = ['Select item...', 'Aleiro', 'Arewa Dandi', 'Argungu', 'Augie', 'Bagudo', 'Birnin Kebbi', 'Bunza', 'Dandi', 'Fakai', 'Gwandu', 'Jega', 'Kalgo', 'Koko Besse', 'Maiyama', 'Ngaski', 'Sakaba', 'Shanga', 'Suru', 'Wasagu Danko', 'Yauri', 'Zuru'];

var Kogi = ['Select item...', 'Adavi', 'Ajaokuta', 'Ankpa', 'Bassa', 'Dekina', 'Ibaji', 'Idah', 'Igalamela Odolu', 'Ijumu', 'Kabba Bunu', 'Kogi', 'Lokoja', 'Mopa Muro', 'Ofu', 'Ogori Magongo', 'Okehi', 'Okene', 'Olamaboro', 'Omala', 'Yagba East', 'Yagba West'];

var Kwara = ['Select item...', 'Asa', 'Baruten', 'Edu', 'Ekiti', 'Ifelodun', 'Ilorin East', 'Ilorin South', 'Ilorin West', 'Irepodun', 'Isin', 'Kaiama', 'Moro', 'Offa', 'Oke Ero', 'Oyun', 'Pategi'];

var Lagos = ['Select item...', 'Agege', 'Ajeromi-Ifelodun', 'Alimosho', 'Amuwo-Odofin', 'Apapa', 'Badagry', 'Epe', 'Eti Osa', 'Ibeju-Lekki', 'Ifako-Ijaiye', 'Ikeja', 'Ikorodu', 'Kosofe', 'Lagos Island', 'Lagos Mainland', 'Mushin', 'Ojo', 'Oshodi-Isolo', 'Shomolu', 'Surulere'];

var Nassarawa = ['Select item...', 'Akwanga', 'Awe', 'Doma', 'Karu', 'Keana', 'Keffi', 'Kokona', 'Lafia', 'Nasarawa', 'Nasarawa Egon', 'Obi', 'Toto', 'Wamba'];

var Niger = ['Select item...', 'Agaie', 'Agwara', 'Bida', 'Borgu', 'Bosso', 'Chanchaga', 'Edati', 'Gbako', 'Gurara', 'Katcha', 'Kontagora', 'Lapai', 'Lavun', 'Magama', 'Mariga', 'Mashegu', 'Mokwa', 'Moya', 'Paikoro', 'Rafi', 'Rijau', 'Shiroro', 'Suleja', 'Tafa', 'Wushishi'];

var Ogun = ['Select item...', 'Abeokuta North', 'Abeokuta South', 'Ado-Odo Ota', 'Egbado North', 'Egbado South', 'Ewekoro', 'Ifo', 'Ijebu East', 'Ijebu North', 'Ijebu North East', 'Ijebu Ode', 'Ikenne', 'Imeko Afon', 'Ipokia', 'Obafemi Owode', 'Odeda', 'Odogbolu', 'Ogun Waterside', 'Remo North', 'Shagamu'];

var Ondo = ['Select item...', 'Akoko North-East', 'Akoko North-West', 'Akoko South-West', 'Akoko South-East', 'Akure North', 'Akure South', 'Ese Odo', 'Idanre', 'Ifedore', 'Ilaje', 'Ile Oluji-Okeigbo', 'Irele', 'Odigbo', 'Okitipupa', 'Ondo East', 'Ondo West', 'Ose', 'Owo'];

var Osun = ['Select item...', 'Atakunmosa East', 'Atakunmosa West', 'Aiyedaade', 'Aiyedire', 'Boluwaduro', 'Boripe', 'Ede North', 'Ede South', 'Ife Central', 'Ife East', 'Ife North', 'Ife South', 'Egbedore', 'Ejigbo', 'Ifedayo', 'Ifelodun', 'Ila', 'Ilesa East', 'Ilesa West', 'Irepodun', 'Irewole', 'Isokan', 'Iwo', 'Obokun', 'Odo Otin', 'Ola Oluwa', 'Olorunda', 'Oriade', 'Orolu', 'Osogbo'];

var Oyo = ['Select item...', 'Afijio', 'Akinyele', 'Atiba', 'Atisbo', 'Egbeda', 'Ibadan North', 'Ibadan North-East', 'Ibadan North-West', 'Ibadan South-East', 'Ibadan South-West', 'Ibarapa Central', 'Ibarapa East', 'Ibarapa North', 'Ido', 'Irepo', 'Iseyin', 'Itesiwaju', 'Iwajowa', 'Kajola', 'Lagelu', 'Ogbomosho North', 'Ogbomosho South', 'Ogo Oluwa', 'Olorunsogo', 'Oluyole', 'Ona Ara', 'Orelope', 'Ori Ire', 'Oyo', 'Oyo East', 'Saki East', 'Saki West', 'Surulere'];

var Plateau = ['Select item...', 'Bokkos', 'Barkin Ladi', 'Bassa', 'Jos East', 'Jos North', 'Jos South', 'Kanam', 'Kanke', 'Langtang South', 'Langtang North', 'Mangu', 'Mikang', 'Pankshin', 'Qua an Pan', 'Riyom', 'Shendam', 'Wase'];

var Rivers = ['Select item...', 'Abua Odual', 'Ahoada East', 'Ahoada West', 'Akuku-Toru', 'Andoni', 'Asari-Toru', 'Bonny', 'Degema', 'Eleme', 'Emuoha', 'Etche', 'Gokana', 'Ikwerre', 'Khana', 'Obio Akpor', 'Ogba Egbema Ndoni', 'Ogu Bolo', 'Okrika', 'Omuma', 'Opobo Nkoro', 'Oyigbo', 'Port Harcourt', 'Tai'];

var Sokoto = ['Select item...', 'Binji', 'Bodinga', 'Dange Shuni', 'Gada', 'Goronyo', 'Gudu', 'Gwadabawa', 'Illela', 'Isa', 'Kebbe', 'Kware', 'Rabah', 'Sabon Birni', 'Shagari', 'Silame', 'Sokoto North', 'Sokoto South', 'Tambuwal', 'Tangaza', 'Tureta', 'Wamako', 'Wurno', 'Yabo'];

var Taraba = ['Select item...', 'Ardo Kola', 'Bali', 'Donga', 'Gashaka', 'Gassol', 'Ibi', 'Jalingo', 'Karim Lamido', 'Kumi', 'Lau', 'Sardauna', 'Takum', 'Ussa', 'Wukari', 'Yorro', 'Zing'];

var Yobe = ['Select item...', 'Bade', 'Bursari', 'Damaturu', 'Fika', 'Fune', 'Geidam', 'Gujba', 'Gulani', 'Jakusko', 'Karasuwa', 'Machina', 'Nangere', 'Nguru', 'Potiskum', 'Tarmuwa', 'Yunusari', 'Yusufari'];

var Zamfara = ['Select item...', 'Anka', 'Bakura', 'Birnin Magaji Kiyaw', 'Bukkuyum', 'Bungudu', 'Gummi', 'Gusau', 'Kaura Namoda', 'Maradun', 'Maru', 'Shinkafi', 'Talata Mafara', 'Chafe', 'Zurmi'];



jQuery(window).on('load', function() {
    $("#states").change(function() {
      $("#lgas").empty();
      var state = $(this).val();
      var lga = eval(state);
      lga.forEach(function(element) {
        console.log(element);
        var o = new Option(element, element);
        $("#lgas").append(o);
  
      });
    })
  });

/*]]>*/
</script>
{{-- onload="message()" --}}
<body class="hold-transition sidebar-mini layout-fixed" >
  <div class="wrapper">



    <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="user-select: auto;">
      <!-- Left navbar links -->
      <ul class="navbar-nav" style="user-select: auto;">
        <li class="nav-item" style="user-select: auto;">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button" style="user-select: auto;"><i class="fas fa-bars" style="user-select: auto;"></i></a>
        </li>
        {{-- <li class="nav-item d-none d-sm-inline-block" style="user-select: auto;">
          <a href="index3.html" class="nav-link" style="user-select: auto;">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block" style="user-select: auto;">
          <a href="#" class="nav-link" style="user-select: auto;">Contact</a>
        </li> --}}
      </ul>
  
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto" style="user-select: auto;">
        <!-- Navbar Search -->
        {{-- <li class="nav-item" style="user-select: auto;">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button" style="user-select: auto;">
            <i class="fas fa-search" style="user-select: auto;"></i>
          </a>
          <div class="navbar-search-block" style="user-select: auto;">
            <form class="form-inline" style="user-select: auto;">
              <div class="input-group input-group-sm" style="user-select: auto;">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search" style="user-select: auto;">
                <div class="input-group-append" style="user-select: auto;">
                  <button class="btn btn-navbar" type="submit" style="user-select: auto;">
                    <i class="fas fa-search" style="user-select: auto;"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search" style="user-select: auto;">
                    <i class="fas fa-times" style="user-select: auto;"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li> --}}
  
        <!-- Messages Dropdown Menu -->
        {{-- <li class="nav-item dropdown" style="user-select: auto;">
          <a class="nav-link" data-toggle="dropdown" href="#" style="user-select: auto;">
            <i class="far fa-comments" style="user-select: auto;"></i>
            <span class="badge badge-danger navbar-badge" style="user-select: auto;">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="user-select: auto;">
            <a href="#" class="dropdown-item" style="user-select: auto;">
              <!-- Message Start -->
              <div class="media" style="user-select: auto;">
                <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle" style="user-select: auto;">
                <div class="media-body" style="user-select: auto;">
                  <h3 class="dropdown-item-title" style="user-select: auto;">
                    Brad Diesel
                    <span class="float-right text-sm text-danger" style="user-select: auto;"><i class="fas fa-star" style="user-select: auto;"></i></span>
                  </h3>
                  <p class="text-sm" style="user-select: auto;">Call me whenever you can...</p>
                  <p class="text-sm text-muted" style="user-select: auto;"><i class="far fa-clock mr-1" style="user-select: auto;"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider" style="user-select: auto;"></div>
            <a href="#" class="dropdown-item" style="user-select: auto;">
              <!-- Message Start -->
              <div class="media" style="user-select: auto;">
                <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3" style="user-select: auto;">
                <div class="media-body" style="user-select: auto;">
                  <h3 class="dropdown-item-title" style="user-select: auto;">
                    John Pierce
                    <span class="float-right text-sm text-muted" style="user-select: auto;"><i class="fas fa-star" style="user-select: auto;"></i></span>
                  </h3>
                  <p class="text-sm" style="user-select: auto;">I got your message bro</p>
                  <p class="text-sm text-muted" style="user-select: auto;"><i class="far fa-clock mr-1" style="user-select: auto;"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider" style="user-select: auto;"></div>
            <a href="#" class="dropdown-item" style="user-select: auto;">
              <!-- Message Start -->
              <div class="media" style="user-select: auto;">
                <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3" style="user-select: auto;">
                <div class="media-body" style="user-select: auto;">
                  <h3 class="dropdown-item-title" style="user-select: auto;">
                    Nora Silvester
                    <span class="float-right text-sm text-warning" style="user-select: auto;"><i class="fas fa-star" style="user-select: auto;"></i></span>
                  </h3>
                  <p class="text-sm" style="user-select: auto;">The subject goes here</p>
                  <p class="text-sm text-muted" style="user-select: auto;"><i class="far fa-clock mr-1" style="user-select: auto;"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider" style="user-select: auto;"></div>
            <a href="#" class="dropdown-item dropdown-footer" style="user-select: auto;">See All Messages</a>
          </div>
        </li> --}}
        <!-- Notifications Dropdown Menu -->
        {{-- <li class="nav-item dropdown" style="user-select: auto;">
          <a class="nav-link" data-toggle="dropdown" href="#" style="user-select: auto;">
            <i class="far fa-bell" style="user-select: auto;"></i>
            <span class="badge badge-warning navbar-badge" style="user-select: auto;">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="user-select: auto;">
            <span class="dropdown-item dropdown-header" style="user-select: auto;">15 Notifications</span>
            <div class="dropdown-divider" style="user-select: auto;"></div>
            <a href="#" class="dropdown-item" style="user-select: auto;">
              <i class="fas fa-envelope mr-2" style="user-select: auto;"></i> 4 new messages
              <span class="float-right text-muted text-sm" style="user-select: auto;">3 mins</span>
            </a>
            <div class="dropdown-divider" style="user-select: auto;"></div>
            <a href="#" class="dropdown-item" style="user-select: auto;">
              <i class="fas fa-users mr-2" style="user-select: auto;"></i> 8 friend requests
              <span class="float-right text-muted text-sm" style="user-select: auto;">12 hours</span>
            </a>
            <div class="dropdown-divider" style="user-select: auto;"></div>
            <a href="#" class="dropdown-item" style="user-select: auto;">
              <i class="fas fa-file mr-2" style="user-select: auto;"></i> 3 new reports
              <span class="float-right text-muted text-sm" style="user-select: auto;">2 days</span>
            </a>
            <div class="dropdown-divider" style="user-select: auto;"></div>
            <a href="#" class="dropdown-item dropdown-footer" style="user-select: auto;">See All Notifications</a>
          </div>
        </li>--}}

        <li class="nav-item" style="user-select: auto;">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button" style="user-select: auto;">
            <i class="fas fa-expand-arrows-alt" style="user-select: auto;"></i>
          </a>
        </li> 
        {{-- <li class="nav-item" style="user-select: auto;">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button" style="user-select: auto;">
            <i class="fas fa-th-large" style="user-select: auto;"></i>
          </a>
        </li> --}}
      </ul>
    </nav>



     <!-- Main Sidebar Container -->
        <aside class="main-sidebar user-nav elevation-4">
          <!-- Brand Logo -->
          <p  class="brand-link k">
            <img src="  {{ asset('../img/koboconnect1.png') }}" alt=""width="240px" height="90px"> 
            {{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
            {{-- <span class="brand-text font-weight-light">koboconnect</span> --}}
          </p>
      
          <!-- Sidebar -->
          <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="info userbutton2">
              
                <div class="image">
                <i class="fas fa-circle iconuser"></i>   {{ Auth::user()->name }}
                  {{-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> <i class="fas fa-circle iconuser"></i>   {{ Auth::user()->name }} --}}
                </div>
            
                  </div>
              {{-- @foreach ($users as $user)
    
              @if ($user->Email == Auth::user()->email AND $user->company_photo1==$user->company_photo1)
              <div class="info userbutton2">
              
        
               
             
                    <img class="card-img-top"  width="40px" height="40px"  src="{{ asset( 'public/UserImagefiles/'.$user->company_photo1 ) }}" alt="image 1">  <i class="fas fa-circle iconuser"></i>   {{ Auth::user()->name }}
                  </div>
          
                @else --}}
                {{-- <i class="fas fa-circle iconuser"></i> {{ Auth::user()->name }} --}}
                {{-- <div class="image">
                  <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> <i class="fas fa-circle iconuser"></i>   {{ Auth::user()->name }}
                </div>
                @endif


                @endforeach --}}



           
            </div>
      
            <!-- SidebarSearch Form -->
            {{-- <div class="form-inline">
              <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                  </button>
                </div>
              </div>
            </div>
       --}}
            <!-- Sidebar Menu -->
            <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                  <a href="{{ route('home') }}"class="nav-link activee pro">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                    <b> Dashboard</b> 
                      {{-- <i class="right fas fa-angle-left"></i> --}}
                    </p>
                  </a>
               
                </li>
              
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                      <b>Profile</b>
                      <i class="fas fa-angle-left right"></i>
                      <span class="badge badge-info right userPay">3</span>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a  href="{{ route('registerUser') }}" class="nav-link menus">
                        <img src="{{ asset('../storage/userdash/user.png') }}" width="20px" height="20px" />
                        <p>User</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('registerDetails') }}"  class="nav-link menus">
                        <img src="{{ asset('../storage/userdash/registration.png') }}" width="20px" height="20px" />
                       
                        <p>Registration</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('Paymentindex') }}" class="nav-link menus">
                        <img src="{{ asset('../storage/userdash/debit-card.png') }}" width="20px" height="20px" />
                        <p>Payment</p>
                      </a>
                    </li>
                   
                  </ul>
                </li>
              </ul>
            </nav>
            <!-- /.sidebar-menu -->
          </div>
          <!-- /.sidebar -->
        </aside>
      
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  {{-- <h1 class="m-0">Dashboard</h1> --}}
                </div><!-- /.col -->
                <div class="col-sm-6">
                  
                  <ol class="breadcrumb float-sm-right">
                     
                      <li class="breadcrumb-item ">
                        <a href="#" class="userz"><span class="userPay">{{ Auth::user()->name }}</span></a></li>
                                  
                                      <li class="breadcrumb-item"> <a class="userz" href="{{ route('logout') }}" 
                                          onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                          <span class="userPay2"> <img src="{{ asset('../storage/userdash/logout.png') }}" width="20px" height="20px" /> {{ __('Logout') }}</span>
                                       </a>
                                      
                                      
                                       <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                          @csrf
                                      </form>
                                    </li>
      
                    
                    {{-- <li class="breadcrumb-item active">Dashboard v1</li> --}}
                  </ol>
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.container-fluid -->
          </div>
          <!-- /.content-header -->

<div class="card card-primary" style="user-select: auto;">
    <div class="card user-nav" style="user-select: auto;">
      <h3 class="card-title userzB" style="user-select: auto;">Bio-Data</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <div class="form-group" style="user-select: auto;">
      <a href="{{ route('Viewbio') }}" class="nav-link"> <button  class="btn userbutton float-right" style="user-select: auto;">
View
        </button>
        </a>
        
       
  </div>
    @if(Session::has('success'))
    <div class="alert alert-success text-center">
        {{Session::get('success')}}
    </div>
    
@endif 




    <form id="contact-frm" action="{{route('registerUserStore')}}" method="POST" style="user-select: auto;" role="form" enctype="multipart/form-data" >
     
      @csrf  

      <div class="card-body" style="user-select: auto;">
        
       
        

    @foreach ($users as $user)
    @if ($user->Email == Auth::user()->email)
    <div class="form-group" style="user-select: auto;">
    <label name="names" value="" style="user-select: auto;"><span class="userPay">Data Inputed</span></label><br>
    </div>
    @endif
     

@endforeach
<div class="form-group" style="user-select: auto;">
  {{-- <label name="names" value="{{ Auth::user()->name }}" style="user-select: auto;">Name: {{ Auth::user()->name }}</label><br>
  <label name="email" value="{{ Auth::user()->email}}" style="user-select: auto;">Email: {{ Auth::user()->email}}</label> --}}
  <input type="hidden" value="{{ Auth::user()->name }}" name="names" class="form-control" id="names" placeholder="Name" style="user-select: auto;"  required>
  <input type="hidden"  value="{{ Auth::user()->email}}"  name="email" class="form-control" id="email" placeholder="email" style="user-select: auto;"  required>
  <input type="hidden" value="{{ Auth::id() }}" name="AuthID" class="form-control" id="AuthID" placeholder="AuthID" style="user-select: auto;"  required>


</div>
 

        {{-- <div class="form-group" style="user-select: auto;">
            <label name="names" value="{{ Auth::user()->name }}" style="user-select: auto;">Name: {{ Auth::user()->name }}</label><br>
            <label name="email" value="{{ Auth::user()->email}}" style="user-select: auto;">Email: {{ Auth::user()->email}}</label>
            <input type="hidden" value="{{ Auth::user()->name }}" name="names" class="form-control" id="exampleInputEmail1" placeholder="Name" style="user-select: auto;"  required>
          
            <input type="hidden"  value="{{ Auth::user()->email}}"  name="email" class="form-control" id="exampleInputEmail1" placeholder="email" style="user-select: auto;"  required>
          
          
          </div> --}}



          <div class="form-group" style="user-select: auto;">
            <label for="exampleInputFile" style="user-select: auto;">Profile Photo</label>
            <div class="input-group" style="user-select: auto;">
              <div class="custom-file" style="user-select: auto;">
                <input type="file" id="image"  onchange="loadPreview(this)" name="image[]"  multiple  />
                <span class="text-danger">{{ $errors->first('image') }}</span>
                <div id="thumb-output"></div>
                <br>  
              </div>
        
        </div>
          </div>


          <div class="form-group" style="user-select: auto;">
            <label for="exampleInputEmail1" style="user-select: auto;">DOB</label>
            <input type="date" value="{{ old('DOB') }}" name="DOB" class="form-control" id="DOB" style="user-select: auto;"  required>
          </div>


          <div class="form-group" style="user-select: auto;">
            <label style="user-select: auto;">Status</label>
            <select value="{{ old('Status') }}" id="Status" name="Status" class="form-control" style="user-select: auto;" required>
              <option value="" style="user-select: auto;">-----</option>
              <option value="Single" style="user-select: auto;">Single</option>
              <option value="Married" style="user-select: auto;">Married</option>
              <option value="Divorced" style="user-select: auto;">Divorced</option>
            </select>
          </div>



        <div class="form-group" style="user-select: auto;">
            <label style="user-select: auto;">Gender</label>
            <select value="{{ old('gender') }}" id="gender" name="gender" class="form-control" style="user-select: auto;" required>
              <option value="" style="user-select: auto;">-----</option>
              <option value="Male" style="user-select: auto;">Male</option>
              <option value="Female" style="user-select: auto;">Female</option>
            </select>
          </div>
        



          <div class="form-group" style="user-select: auto;">
            <label for="exampleInputEmail1" style="user-select: auto;">Address</label>
            <input type="text" value="{{ old('Address') }}" name="Address" class="form-control" id="Address" placeholder="Address" style="user-select: auto;"  required>
          </div>


          <div class="form-group" style="user-select: auto;">
            <label for="exampleInputEmail1" style="user-select: auto;">State</label>
           
            {{-- <input type="text"  value="{{ old('State') }}"  name="State" class="form-control" id="exampleInputEmail1" placeholder="State" style="user-select: auto;"  required>
         
            --}}
{{--  name="state" id="state" --}}
            <select id="states"  class="form-control"  name="State" style="user-select: auto;"  required >
              <option selected="selected">Select item...</option>
              <option value='Abia'>Abia</option>
              <option value='Adamawa'>Adamawa</option>
              <option value='AkwaIbom'>AkwaIbom</option>
              <option value='Anambra'>Anambra</option>
              <option value='Bauchi'>Bauchi</option>
              <option value='Bayelsa'>Bayelsa</option>
              <option value='Benue'>Benue</option>
              <option value='Borno'>Borno</option>
              <option value='CrossRivers'>CrossRivers</option>
              <option value='Delta'>Delta</option>
              <option value='Ebonyi'>Ebonyi</option>
              <option value='Edo'>Edo</option>
              <option value='Ekiti'>Ekiti</option>
              <option value='Enugu'>Enugu</option>
              <option value='Gombe'>Gombe</option>
              <option value='Imo'>Imo</option>
              <option value='Jigawa'>Jigawa</option>
              <option value='Kaduna'>Kaduna</option>
              <option value='Kano'>Kano</option>
              <option value='Katsina'>Katsina</option>
              <option value='Kebbi'>Kebbi</option>
              <option value='Kogi'>Kogi</option>
              <option value='Kwara'>Kwara</option>
              <option value='Lagos'>Lagos</option>
              <option value='Nasarawa'>Nasarawa</option>
              <option value='Niger'>Niger</option>
              <option value='Ogun'>Ogun</option>
              <option value='Ondo'>Ondo</option>
              <option value='Osun'>Osun</option>
              <option value='Oyo'>Oyo</option>
              <option value='Plateau'>Plateau</option>
              <option value='Rivers'>Rivers</option>
              <option value='Sokoto'>Sokoto</option>
              <option value='Taraba'>Taraba</option>
              <option value='Yobe'>Yobe</option>
              <option value='Zamfara'>Zamafara</option>
            </select>
{{--            
            <select id="states"  class="form-control"  name="State" style="user-select: auto;"  required>
            </select> --}}
         
          </div>



          <div class="form-group" style="user-select: auto;">
            <label for="exampleInputEmail1" style="user-select: auto;">LGA</label>
            {{-- <input type="text" value="{{ old('LGA') }}"  name="LGA" class="form-control" id="exampleInputEmail1" placeholder="LGA" style="user-select: auto;"  required>
       name="lga"
             --}}

             <select  id="lgas" name="LGA" class="form-control"  placeholder="LGA" style="user-select: auto;"  required>
              {{-- <option selected="selected">Select item...</option> --}}
            </select>
	      {{-- <select id="lgas"  name="LGA" class="form-control"  placeholder="LGA" style="user-select: auto;"  required>
	      </select>  --}}
          </div>

          {{-- <div class="form-group" style="user-select: auto;">
            <label for="exampleInputEmail1" style="user-select: auto;">Nationality</label>
            <input type="text"  value="{{ old('Nationality') }}"  name="Nationality" class="form-control" id="exampleInputEmail1" placeholder="Nationality" style="user-select: auto;"  required>
          </div>
 --}}


            <div class="form-group" style="user-select: auto;">
              <label for="exampleInputEmail1" style="user-select: auto;">Nationality</label>
            
              <input id="country_selector" type="text"  value="{{ old('Nationality') }}"  name="Nationality" class="form-control"  placeholder="Nationality" style="user-select: auto;"  required>
              <label for="country_selector" style="display:none;">Select a country here...</label>
            </div>
   
          <div class="form-group" style="user-select: auto;">
            <label style="user-select: auto;">Religion</label>
            <select id="religion" name="religion" class="form-control" style="user-select: auto;"  required>
              <option  value="" style="user-select: auto;">-----</option>
              <option value="Christianity"  style="user-select: auto;">Christianity</option>
              <option value="Muslim" style="user-select: auto;">Muslim</option>
              <option  value="Traditional"  style="user-select: auto;">Traditional</option>
              <option  value="Other"  style="user-select: auto;">Others</option>
            </select>
          </div>
        
          <div class="form-group" style="user-select: auto;">
            <label id="qualificationn" style="user-select: auto;">Qualification</label>
            <select id="qualification" name="qualification" class="form-control" style="user-select: auto;"  required>
              <option  value="" style="user-select: auto;">-----</option>
              <option value="First School" style="user-select: auto;">First School</option>
              <option  value="Neco" style="user-select: auto;">Neco</option>
              <option value="Waec" style="user-select: auto;">Waec</option>
            
              <option  value="HigherCertificate" style="user-select: auto;">Higher Certificate</option>
              <option value="NationalDiploma" style="user-select: auto;">National Diploma</option>
    
              <option value="BachelorsDegree" style="user-select: auto;">Bachelor's Degree</option>
              <option value="MastersDegree" style="user-select: auto;">Master's Degree</option>
    
              <option value="DoctoralDegree" style="user-select: auto;">Doctoral Degree</option>
            
            </select>
          </div>  

            <div class="form-group" style="user-select: auto;">
              <label style="user-select: auto;">Next Of Kin</label>
          
              <input value="{{ old('NextOfKin') }}"  id="NextOfKin" name="NextOfKin" type="text" class="form-control" placeholder=" Next Of Kin"  style="user-select: auto;"  required>
            </div>
          
            <div class="form-group" style="user-select: auto;">
                <label style="user-select: auto;"> Address- Next Of Kin </label>
                <input  value="{{ old('NextOfKinAddress') }}" id="NextOfKinAddress" name="NextOfKinAddress" type="text" class="form-control" placeholder=" Address-Next Of Kin "  style="user-select: auto;"  required>
              </div>
            
              <div class="form-group" style="user-select: auto;">
                <label style="user-select: auto;">Phone_Number-Next Of Kin </label>
                <input type="text" value="{{ old('NextOfKinPhone_Number') }}" id="NextOfKinPhone_Number" name="NextOfKinPhone_Number" class="form-control" placeholder=" Phone_Number - Next Of Kin " style="user-select: auto;"  required>
              </div>

              <div class="form-group" style="user-select: auto;">
              <label style="user-select: auto;">Relationship</label>
              <select id="relationship" name="relationship" class="form-control" style="user-select: auto;"  required>
                <option  value="" style="user-select: auto;">-----</option>
                <option value="Brother"  style="user-select: auto;">Brother</option>
                <option value="Sister" style="user-select: auto;">Sister</option>
                <option  value="Parent"  style="user-select: auto;">Parent</option>
                <option  value="Son"  style="user-select: auto;">Son</option>
                <option  value="Daugther"  style="user-select: auto;">Daugther</option>
                <option  value="Aunty"  style="user-select: auto;">Aunty</option>
                <option  value="Uncle"  style="user-select: auto;">Uncle</option>
                <option  value="Friend"  style="user-select: auto;">Friend</option>
                <option  value="Other"  style="user-select: auto;">Others</option>
              </select>
            </div>


          

    <div class="card-footer" style="user-select: auto;">
      <button type="submit" id="submitt" class="btn userbutton2" style="user-select: auto;"  >Submit</button>
    </div>
  </form>
</div>
  









{{-- working for payment --}}

 {{-- @foreach ($paystack as $paystacks)  --}}
@if ($paystack )
<script type="text/javascript">
  $(document).ready(function() {
      // $('button').click(function() {
        // $('#submitt').attr('disabled', 'disabled');
        alert("Dear artisan, Thank you for your payment you can register.");
      // });
  });
 
</script>
@else
<script type="text/javascript">
  $(document).ready(function() {
      // $('button').click(function() {
        $('#submitt').attr('disabled', 'disabled');
        alert("Dear artisan, try and make Payment.");
      // });
  });
 
</script>
@endif
 

 {{-- @endforeach  --}}
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="../Country/js/countrySelect.js"></script>
		<script>
			$("#country_selector").countrySelect({
				// defaultCountry: "jp",
				// onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
				// responsiveDropdown: true,
				preferredCountries: ['ca', 'gb', 'us']
			});
		</script>



    @foreach ($users as $user)
    @if ($user->Email== Auth::user()->email )
    <script type="text/javascript">
      $(document).ready(function() {
          $('button').click(function() {
            $('#submitt').attr('disabled', 'disabled');
             
          });
      });
    </script>


  @endif
     

      @endforeach
      
{{-- Compare payment --}}



      
      {{-- <script>
        $('#enabled').click(function () {
            if ($('#submit-button').is(':disabled')) {
                $('#submit-button').removeAttr('disabled');
            } else {
                $('#submit-button').attr('disabled', 'disabled');
            }
        });
    </script> --}}


    {{-- ajax --}}
    
    {{-- <script>
      $(document).ready(function(){
          $("#contact-frm").submit(function(e){
              e.preventDefault();
              let url = $(this).attr('action');
              $("#submitt").attr('disabled', true);
              $.post(url, 
              {
                 
                  Name: $("#names").val(),
                  Email: $("#email").val(),
                  company_photo1: $("#image").val(),
                  Gender: $("#gender").val(),
                  Status: $("#Status").val(),
                  Address: $("#Address").val(),
                  LGA: $("#lgas").val(),
                  State: $("#states").val(),
                  Nationality: $("#country_selector").val(),
                  Religion: $("#religion").val(),
                  Qualification: $("#qualification").val(),
                  Next_Of_Kin: $("#NextOfKin").val(),
                  Address_Next_Of_Kin: $("#NextOfKinAddress").val(),
                  Phone_Number_Next_Of_Kin: $("#NextOfKinPhone_Number").val(),
                  auth_user_id: $("#AuthID").val(),
                  Relationship: $("#relationship").val()
                }, 
              function (response) {
                  if(response.code == 400){
                      $("#submitt").attr('disabled', false);
                      let error = '<span class="alert alert-danger">'+response.msg+'</span>';
                      $("#res").html(error);
                  }else if(response.code == 200){
                      $("#submitt").attr('disabled', false);
                      let success = '<span class="alert alert-success">'+response.msg+'</span>';
                      $("#res").html(success);
                  }
              });
              
              
          })
      })
  </script> --}}

  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

</body>
  @endsection