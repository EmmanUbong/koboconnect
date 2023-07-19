@extends('layouts.app')
@section('title','Koboconnect - Bio-Data')
@section('content')
<link rel="stylesheet" href="../Country/css/countrySelect.css">
<link rel="stylesheet" href="../Country/css/demo.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../locate/jquery.stateLga.js"></script>
<script src="../locate/jquery.ucfirst.js"></script>

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
<body class="hold-transition sidebar-mini layout-fixed">
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
                  <a href="{{ route('WorkerDashboard') }}"class="nav-link activee pro">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                     <b>Workers Dashboard</b> 
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
                      <a href="{{ route('registerUser') }}" class="nav-link menus">
                        <img src="{{ asset('../storage/userdash/user.png') }}" width="20px" height="20px" />
                              <p>User Information</p>
                      </a>
                   
                    </li>
                    <li class="nav-item">
                      <a  href="{{ route('adminview') }}" class="nav-link menus">
                        <img src="{{ asset('../storage/userdash/registration.png') }}" width="20px" height="20px" />
                              <p>Artisan Registration</p>
                      </a>
                    </li>

                    <li class="nav-item">
                     
                      <a href="{{ route('Paymentindex') }}" class="nav-link menus">
                        <img src="{{ asset('../storage/userdash/debit-card.png') }}" width="20px" height="20px" />
                        <p>Payment Details</p>
                      </a>
                    </li>
      
                    <li class="nav-item">
                     
                      <a href="{{ route('Paymentindex') }}" class="nav-link menus">
                        <img src="{{ asset('../storage/userdash/debit-card.png') }}" width="20px" height="20px" />
                        <p>Employees</p>
                      </a>
                    </li>




                    {{-- <li class="nav-item">
                      <a href="{{ route('PaymentDetails') }}" class="nav-link menus">
                        <img src="{{ asset('../storage/userdash/debit-card.png') }}" width="20px" height="20px" />
                        
                        <p>Payment Details</p>
                      </a>
                    </li> --}}
                   
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
      <a href="{{ route('ViewWorkerDetail') }}" class="nav-link"> <button  class="btn userbutton float-right" style="user-select: auto;">
Create
        </button>
        </a>
        
       
  </div>
    {{-- @if(Session::has('success'))
    <div class="alert alert-success text-center">
        {{Session::get('success')}}
    </div>
    
@endif  --}}







<table class="table table-bordered">
  <tr>

      <th >S/N</th>
      <th >Name</th>
      <th >	Email</th>
      <th >company_photo1</th>
      <th >Gender</th>
      <th >Status</th>
      <th >Address</th>
      <th >LGA</th>
      <th >State</th>
      <th >Nationality</th>
      <th >Religion</th>
      <th >Qualification</th>
      <th >Next_Of_Kin</th>
      <th>Address_Next_Of_Kin</th>
      <th >Phone_Number_Next_Of_Kin</th>
      <th >Relationship</th>
      <th >deleted_at</th>
      <th>created_at</th>
      <th >updated_at</th>
     
      <th >Action</th>
  </tr>

  @foreach ($users as $user)


    <tr>
      <td >{{ $user->id}}</td>
      <td >{{ $user->Name}}</td>
      <td >{{ $user->Email}}</td>
      <td >{{ $user->company_photo1}}</td>
      <td >{{ $user->Gender}}</td>
      <td >{{ $user->Status}}</td>
      <td >{{ $user->Address}}</td>
      <td >{{ $user->LGA}}</td>
      <td >{{ $user->State}}</td>
      <td >{{ $user->Nationality}}</td>
      <td >{{ $user->Religion}}</td>
      <td >{{ $user->Qualification}}</td>
      <td >{{ $user->Next_Of_Kin}}</td>
      <td >{{ $user->Address_Next_Of_Kin}}</td>
      <td >{{ $user->Phone_Number_Next_Of_Kin}}</td>
      <td >{{ $user->Relationship}}</td>
      <td >{{ $user->deleted_at}}</td>
      <td >{{ $user->created_at}}</td>
      <td >{{ $user->updated_at}}</td>
      
     
      <td><form action="{{ route('admindeleteuserbiodata',$user->id) }}" method="POST">

        <a class="btn btn-info" href="{{ route('adminshowuserbiodata',$user->id) }}"> <img src="  {{ asset('../img/eye.png') }}" alt="" width="30px" height="30px"></a>

        <a class="btn btn-primary" href="{{ route('adminedituserbiodata',$user->id) }}"><img src="  {{ asset('../img/writing.png') }}" alt="" width="30px" height="30px"></a>

        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger"> <img src="  {{ asset('../img/delete.png') }}" alt="" width="30px" height="30px"></button>

    
      </form>
    </td>
    </tr>

 

    @endforeach 
</table>







    
</div>
  
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



    

  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

</body>
  @endsection