@extends('layouts.app')
@section('title','Koboconnect - Details')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../locate/jquery.stateLga.js"></script>
<script src="../locate/jquery.ucfirst.js"></script>

<link rel="stylesheet" href="../Country/css/countrySelect.css">
<link rel="stylesheet" href="../Country/css/demo.css">



<!-- Dynamic State and LGA Filter -->
<script type="text/javascript" src="../locate/Dynamic_State_LGA.js"></script>
<script>
  /* Inlude [JQUERY](code.jquery.com/jquery-1.11.0.min.js) External SOurce Scrit *?
/* SAVE AS Dynamic_State_LGA.js */
// JavaScript Document
/*<![CDATA[*/
// var Abia = ['Select item...', 'Aba North', 'Aba South', 'Arochukwu', 'Bende', 'Ikwuano', 'Isiala Ngwa North', 'Isiala Ngwa South', 'Isuikwuato', 'Obi Ngwa', 'Ohafia', 'Osisioma', 'Ugwunagbo', 'Ukwa East', 'Ukwa West', 'Umuahia North', 'muahia South', 'Umu Nneochi'];

// var Adamawa = ['Select item...', 'Demsa', 'Fufure', 'Ganye', 'Gayuk', 'Gombi', 'Grie', 'Hong', 'Jada', 'Larmurde', 'Madagali', 'Maiha', 'Mayo Belwa', 'Michika', 'Mubi North', 'Mubi South', 'Numan', 'Shelleng', 'Song', 'Toungo', 'Yola North', 'Yola South'];

var AkwaIbom = ['Select item...', 'Abak', 'Eastern Obolo', 'Eket', 'Esit Eket', 'Essien Udim', 'Etim Ekpo', 'Etinan', 'Ibeno', 'Ibesikpo Asutan', 'Ibiono-Ibom', 'Ika', 'Ikono', 'Ikot Abasi', 'Ikot Ekpene', 'Ini', 'Itu', 'Mbo', 'Mkpat-Enin', 'Nsit-Atai', 'Nsit-Ibom', 'Nsit-Ubium', 'Obot Akara', 'Okobo', 'Onna', 'Oron', 'Oruk Anam', 'Udung-Uko', 'Ukanafun', 'Uruan', 'Urue-Offong Oruko', 'Uyo'];

// var Anambra = ['Select item...', 'Aguata', 'Anambra East', 'Anambra West', 'Anaocha', 'Awka North', 'Awka South', 'Ayamelum', 'Dunukofia', 'Ekwusigo', 'Idemili North', 'Idemili South', 'Ihiala', 'Njikoka', 'Nnewi North', 'Nnewi South', 'Ogbaru', 'Onitsha North', 'Onitsha South', 'Orumba North', 'Orumba South', 'Oyi'];

// var Bauchi = ['Select item...', 'Alkaleri', 'Bauchi', 'Bogoro', 'Damban', 'Darazo', 'Dass', 'Gamawa', 'Ganjuwa', 'Giade', 'Itas-Gadau', 'Jama are', 'Katagum', 'Kirfi', 'Misau', 'Ningi', 'Shira', 'Tafawa Balewa', ' Toro', ' Warji', ' Zaki'];

// var Bayelsa = ['Select item...', 'Brass', 'Ekeremor', 'Kolokuma Opokuma', 'Nembe', 'Ogbia', 'Sagbama', 'Southern Ijaw', 'Yenagoa'];

// var Benue = ['Select item...', 'Agatu', 'Apa', 'Ado', 'Buruku', 'Gboko', 'Guma', 'Gwer East', 'Gwer West', 'Katsina-Ala', 'Konshisha', 'Kwande', 'Logo', 'Makurdi', 'Obi', 'Ogbadibo', 'Ohimini', 'Oju', 'Okpokwu', 'Oturkpo', 'Tarka', 'Ukum', 'Ushongo', 'Vandeikya'];

// var Borno = ['Select item...', 'Abadam', 'Askira-Uba', 'Bama', 'Bayo', 'Biu', 'Chibok', 'Damboa', 'Dikwa', 'Gubio', 'Guzamala', 'Gwoza', 'Hawul', 'Jere', 'Kaga', 'Kala-Balge', 'Konduga', 'Kukawa', 'Kwaya Kusar', 'Mafa', 'Magumeri', 'Maiduguri', 'Marte', 'Mobbar', 'Monguno', 'Ngala', 'Nganzai', 'Shani'];

var CrossRiver = ['Select item...', 'Abi', 'Akamkpa', 'Akpabuyo', 'Bakassi', 'Bekwarra', 'Biase', 'Boki', 'Calabar Municipal', 'Calabar South', 'Etung', 'Ikom', 'Obanliku', 'Obubra', 'Obudu', 'Odukpani', 'Ogoja', 'Yakuur', 'Yala'];

// var Delta = ['Select item...', 'Aniocha North', 'Aniocha South', 'Bomadi', 'Burutu', 'Ethiope East', 'Ethiope West', 'Ika North East', 'Ika South', 'Isoko North', 'Isoko South', 'Ndokwa East', 'Ndokwa West', 'Okpe', 'Oshimili North', 'Oshimili South', 'Patani', 'Sapele', 'Udu', 'Ughelli North', 'Ughelli South', 'Ukwuani', 'Uvwie', 'Warri North', 'Warri South', 'Warri South West'];

// var Ebonyi = ['Select item...', 'Abakaliki', 'Afikpo North', 'Afikpo South', 'Ebonyi', 'Ezza North', 'Ezza South', 'Ikwo', 'Ishielu', 'Ivo', 'Izzi', 'Ohaozara', 'Ohaukwu', 'Onicha'];

// var Edo = ['Select item...', 'Akoko-Edo', 'Egor', 'Esan Central', 'Esan North-East', 'Esan South-East', 'Esan West', 'Etsako Central', 'Etsako East', 'Etsako West', 'Igueben', 'Ikpoba Okha', 'Orhionmwon', 'Oredo', 'Ovia North-East', 'Ovia South-West', 'Owan East', 'Owan West', 'Uhunmwonde'];

// var Ekiti = ['Select item...', 'Ado Ekiti', 'Efon', 'Ekiti East', 'Ekiti South-West', 'Ekiti West', 'Emure', 'Gbonyin', 'Ido Osi', 'Ijero', 'Ikere', 'Ikole', 'Ilejemeje', 'Irepodun-Ifelodun', 'Ise-Orun', 'Moba', 'Oye'];

// var Enugu = ['Select item...', 'Aninri', 'Awgu', 'Enugu East', 'Enugu North', 'Enugu South', 'Ezeagu', 'Igbo Etiti', 'Igbo Eze North', 'Igbo Eze South', 'Isi Uzo', 'Nkanu East', 'Nkanu West', 'Nsukka', 'Oji River', 'Udenu', 'Udi', 'Uzo Uwani'];

// var FCT = ['Select item...', 'Abaji', 'Bwari', 'Gwagwalada', 'Kuje', 'Kwali', 'Municipal Area Council'];

// var Gombe = ['Select item...', 'Akko', 'Balanga', 'Billiri', 'Dukku', 'Funakaye', 'Gombe', 'Kaltungo', 'Kwami', 'Nafada', 'Shongom', 'Yamaltu-Deba'];

// var Imo = ['Select item...', 'Aboh Mbaise', 'Ahiazu Mbaise', 'Ehime Mbano', 'Ezinihitte', 'Ideato North', 'Ideato South', 'Ihitte-Uboma', 'Ikeduru', 'Isiala Mbano', 'Isu', 'Mbaitoli', 'Ngor Okpala', 'Njaba', 'Nkwerre', 'Nwangele', 'Obowo', 'Oguta', 'Ohaji-Egbema', 'Okigwe', 'Orlu', 'Orsu', 'Oru East', 'Oru West', 'Owerri Municipal', 'Owerri North', 'Owerri West', 'Unuimo'];

// var Jigawa = ['Select item...', 'Auyo', 'Babura', 'Biriniwa', 'Birnin Kudu', 'Buji', 'Dutse', 'Gagarawa', 'Garki', 'Gumel', 'Guri', 'Gwaram', 'Gwiwa', 'Hadejia', 'Jahun', 'Kafin Hausa', 'Kazaure', 'Kiri Kasama', 'Kiyawa', 'Kaugama', 'Maigatari', 'Malam Madori', 'Miga', 'Ringim', 'Roni', 'Sule Tankarkar', 'Taura', 'Yankwashi'];

// var Kaduna = ['Select item...', 'Birnin Gwari', 'Chikun', 'Giwa', 'Igabi', 'Ikara', 'Jaba', 'Jema a', 'Kachia', 'Kaduna North', 'Kaduna South', 'Kagarko', 'Kajuru', 'Kaura', 'Kauru', 'Kubau', 'Kudan', 'Lere', 'Makarfi', 'Sabon Gari', 'Sanga', 'Soba', 'Zangon Kataf', 'Zaria'];

// var Kano = ['Select item...', 'Ajingi', 'Albasu', 'Bagwai', 'Bebeji', 'Bichi', 'Bunkure', 'Dala', 'Dambatta', 'Dawakin Kudu', 'Dawakin Tofa', 'Doguwa', 'Fagge', 'Gabasawa', 'Garko', 'Garun Mallam', 'Gaya', 'Gezawa', 'Gwale', 'Gwarzo', 'Kabo', 'Kano Municipal', 'Karaye', 'Kibiya', 'Kiru', 'Kumbotso', 'Kunchi', 'Kura', 'Madobi', 'Makoda', 'Minjibir', 'Nasarawa', 'Rano', 'Rimin Gado', 'Rogo', 'Shanono', 'Sumaila', 'Takai', 'Tarauni', 'Tofa', 'Tsanyawa', 'Tudun Wada', 'Ungogo', 'Warawa', 'Wudil'];

// var Katsina = ['Select item...', 'Bakori', 'Batagarawa', 'Batsari', 'Baure', 'Bindawa', 'Charanchi', 'Dandume', 'Danja', 'Dan Musa', 'Daura', 'Dutsi', 'Dutsin Ma', 'Faskari', 'Funtua', 'Ingawa', 'Jibia', 'Kafur', 'Kaita', 'Kankara', 'Kankia', 'Katsina', 'Kurfi', 'Kusada', 'Mai Adua', 'Malumfashi', 'Mani', 'Mashi', 'Matazu', 'Musawa', 'Rimi', 'Sabuwa', 'Safana', 'Sandamu', 'Zango'];

// var Kebbi = ['Select item...', 'Aleiro', 'Arewa Dandi', 'Argungu', 'Augie', 'Bagudo', 'Birnin Kebbi', 'Bunza', 'Dandi', 'Fakai', 'Gwandu', 'Jega', 'Kalgo', 'Koko Besse', 'Maiyama', 'Ngaski', 'Sakaba', 'Shanga', 'Suru', 'Wasagu Danko', 'Yauri', 'Zuru'];

// var Kogi = ['Select item...', 'Adavi', 'Ajaokuta', 'Ankpa', 'Bassa', 'Dekina', 'Ibaji', 'Idah', 'Igalamela Odolu', 'Ijumu', 'Kabba Bunu', 'Kogi', 'Lokoja', 'Mopa Muro', 'Ofu', 'Ogori Magongo', 'Okehi', 'Okene', 'Olamaboro', 'Omala', 'Yagba East', 'Yagba West'];

// var Kwara = ['Select item...', 'Asa', 'Baruten', 'Edu', 'Ekiti', 'Ifelodun', 'Ilorin East', 'Ilorin South', 'Ilorin West', 'Irepodun', 'Isin', 'Kaiama', 'Moro', 'Offa', 'Oke Ero', 'Oyun', 'Pategi'];

// var Lagos = ['Select item...', 'Agege', 'Ajeromi-Ifelodun', 'Alimosho', 'Amuwo-Odofin', 'Apapa', 'Badagry', 'Epe', 'Eti Osa', 'Ibeju-Lekki', 'Ifako-Ijaiye', 'Ikeja', 'Ikorodu', 'Kosofe', 'Lagos Island', 'Lagos Mainland', 'Mushin', 'Ojo', 'Oshodi-Isolo', 'Shomolu', 'Surulere'];

// var Nassarawa = ['Select item...', 'Akwanga', 'Awe', 'Doma', 'Karu', 'Keana', 'Keffi', 'Kokona', 'Lafia', 'Nasarawa', 'Nasarawa Egon', 'Obi', 'Toto', 'Wamba'];

// var Niger = ['Select item...', 'Agaie', 'Agwara', 'Bida', 'Borgu', 'Bosso', 'Chanchaga', 'Edati', 'Gbako', 'Gurara', 'Katcha', 'Kontagora', 'Lapai', 'Lavun', 'Magama', 'Mariga', 'Mashegu', 'Mokwa', 'Moya', 'Paikoro', 'Rafi', 'Rijau', 'Shiroro', 'Suleja', 'Tafa', 'Wushishi'];

// var Ogun = ['Select item...', 'Abeokuta North', 'Abeokuta South', 'Ado-Odo Ota', 'Egbado North', 'Egbado South', 'Ewekoro', 'Ifo', 'Ijebu East', 'Ijebu North', 'Ijebu North East', 'Ijebu Ode', 'Ikenne', 'Imeko Afon', 'Ipokia', 'Obafemi Owode', 'Odeda', 'Odogbolu', 'Ogun Waterside', 'Remo North', 'Shagamu'];

// var Ondo = ['Select item...', 'Akoko North-East', 'Akoko North-West', 'Akoko South-West', 'Akoko South-East', 'Akure North', 'Akure South', 'Ese Odo', 'Idanre', 'Ifedore', 'Ilaje', 'Ile Oluji-Okeigbo', 'Irele', 'Odigbo', 'Okitipupa', 'Ondo East', 'Ondo West', 'Ose', 'Owo'];

// var Osun = ['Select item...', 'Atakunmosa East', 'Atakunmosa West', 'Aiyedaade', 'Aiyedire', 'Boluwaduro', 'Boripe', 'Ede North', 'Ede South', 'Ife Central', 'Ife East', 'Ife North', 'Ife South', 'Egbedore', 'Ejigbo', 'Ifedayo', 'Ifelodun', 'Ila', 'Ilesa East', 'Ilesa West', 'Irepodun', 'Irewole', 'Isokan', 'Iwo', 'Obokun', 'Odo Otin', 'Ola Oluwa', 'Olorunda', 'Oriade', 'Orolu', 'Osogbo'];

// var Oyo = ['Select item...', 'Afijio', 'Akinyele', 'Atiba', 'Atisbo', 'Egbeda', 'Ibadan North', 'Ibadan North-East', 'Ibadan North-West', 'Ibadan South-East', 'Ibadan South-West', 'Ibarapa Central', 'Ibarapa East', 'Ibarapa North', 'Ido', 'Irepo', 'Iseyin', 'Itesiwaju', 'Iwajowa', 'Kajola', 'Lagelu', 'Ogbomosho North', 'Ogbomosho South', 'Ogo Oluwa', 'Olorunsogo', 'Oluyole', 'Ona Ara', 'Orelope', 'Ori Ire', 'Oyo', 'Oyo East', 'Saki East', 'Saki West', 'Surulere'];

// var Plateau = ['Select item...', 'Bokkos', 'Barkin Ladi', 'Bassa', 'Jos East', 'Jos North', 'Jos South', 'Kanam', 'Kanke', 'Langtang South', 'Langtang North', 'Mangu', 'Mikang', 'Pankshin', 'Qua an Pan', 'Riyom', 'Shendam', 'Wase'];

var Rivers = ['Select item...', 'Abua Odual', 'Ahoada East', 'Ahoada West', 'Akuku-Toru', 'Andoni', 'Asari-Toru', 'Bonny', 'Degema', 'Eleme', 'Emuoha', 'Etche', 'Gokana', 'Ikwerre', 'Khana', 'Obio Akpor', 'Ogba Egbema Ndoni', 'Ogu Bolo', 'Okrika', 'Omuma', 'Opobo Nkoro', 'Oyigbo', 'Port Harcourt', 'Tai'];

// var Sokoto = ['Select item...', 'Binji', 'Bodinga', 'Dange Shuni', 'Gada', 'Goronyo', 'Gudu', 'Gwadabawa', 'Illela', 'Isa', 'Kebbe', 'Kware', 'Rabah', 'Sabon Birni', 'Shagari', 'Silame', 'Sokoto North', 'Sokoto South', 'Tambuwal', 'Tangaza', 'Tureta', 'Wamako', 'Wurno', 'Yabo'];

// var Taraba = ['Select item...', 'Ardo Kola', 'Bali', 'Donga', 'Gashaka', 'Gassol', 'Ibi', 'Jalingo', 'Karim Lamido', 'Kumi', 'Lau', 'Sardauna', 'Takum', 'Ussa', 'Wukari', 'Yorro', 'Zing'];

// var Yobe = ['Select item...', 'Bade', 'Bursari', 'Damaturu', 'Fika', 'Fune', 'Geidam', 'Gujba', 'Gulani', 'Jakusko', 'Karasuwa', 'Machina', 'Nangere', 'Nguru', 'Potiskum', 'Tarmuwa', 'Yunusari', 'Yusufari'];

// var Zamfara = ['Select item...', 'Anka', 'Bakura', 'Birnin Magaji Kiyaw', 'Bukkuyum', 'Bungudu', 'Gummi', 'Gusau', 'Kaura Namoda', 'Maradun', 'Maru', 'Shinkafi', 'Talata Mafara', 'Chafe', 'Zurmi'];



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
        </li>
   --}}
        <!-- Messages Dropdown Menu -->
        {{-- <li class="nav-item dropdown" style="user-select: auto;">
          <a class="nav-link" data-toggle="dropdown" href="#" style="user-select: auto;">
            <i class="far fa-comments" style="user-select: auto;"></i>
            <span class="badge badge-danger navbar-badge" style="user-select: auto;">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="user-select: auto;">
            <a href="#" class="dropdown-item" style="user-select: auto;">
              <!-- Message Start --> --}}
              {{-- <div class="media" style="user-select: auto;">
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
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown" style="user-select: auto;">
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
        </li> --}}
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
                  <a href="{{ route('home') }}" class="nav-link activee pro">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                     <b>Dashboard</b> 
                      {{-- <i class="right fas fa-angle-left"></i> --}}
                    </p>
                  </a>
               
                </li>
              
                <li class="nav-item">
                  <a href="#" class="nav-link pro">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                    <b>Profile</b>  
                      <i class="fas fa-angle-left right"></i>
                      <span class="badge badge-info right userPay">4</span>
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
                     
                      <li class="breadcrumb-item "><a href="#" class="userz"><span class="userPay">{{ Auth::user()->name }}</span></a></li>
                                  
                                      <li class="breadcrumb-item"> <a class="userz" href="{{ route('logout') }}" 
                                          onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                          <span class="userPay2"><img src="{{ asset('../storage/userdash/logout.png') }}" width="20px" height="20px" />  {{ __('Logout') }}</span>
                                       </a>
                                       <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                          @csrf
                                      </form></li>
      
                    
                    {{-- <li class="breadcrumb-item active">Dashboard v1</li> --}}
                  </ol>
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.container-fluid -->
          </div>
          <!-- /.content-header -->





<div class="card card-primary" style="user-select: auto;">
  <div class="card user-nav" style="user-select: auto;">
    <h3 class="card-title userzB" style="user-select: auto;">Details Of Company</h3>
  </div>
  <!-- /.card-header -->

  <div class="form-group" style="user-select: auto;">
    <a href="{{ route('adminview') }}" class="nav-link"><button  class="btn userbutton float-right" style="user-select: auto;">Back</button></a> <br><br>
{{--    
    <a href="{{ route('Viewcompanydetails') }}" class="nav-link"> <button  class="btn userbutton float-right" style="user-select: auto;">
View
      </button>
      </a> --}}
      
     
</div>

  <!-- form start -->
  @if(Session::has('success'))
  <div class="alert alert-success text-center">
      {{Session::get('success')}}
  </div>
  
@endif 


<form id="contact-frm" action="{{route('admininsert')}}" method="POST" role="form" enctype="multipart/form-data" style="user-select: auto;" onSubmit="return validate();">
  @csrf
  {{-- @method('PUT')  --}}

  <div class="card-body" style="user-select: auto;">
    
   
    {{-- @foreach ($users as $user)
    @if ($user->email == Auth::user()->email)
<div class="form-group" style="user-select: auto;">
  <label name="names" value="" style="user-select: auto;"><span class="userPay">Data Inputed</span></label><br>
  

</div>
@endif
     

@endforeach --}}
<div class="form-group" style="user-select: auto;">
{{-- {{ Auth::user()->email}} --}}
<label for="exampleInputEmail1" style="user-select: auto;">Mail</label>
<input type="email"  value=""  name="email" class="form-control" id="exampleInputEmail1" placeholder="email" style="user-select: auto;"  required>
<input type="hidden" value="{{ Auth::id() }}" name="AuthID" class="form-control" id="AuthID" placeholder="AuthID" style="user-select: auto;"  required>

</div>

<div class="form-group" style="user-select: auto;">
  <label for="exampleInputEmail1" style="user-select: auto;">Company Name</label>
  <input type="text" value="" name="company_name"  class="form-control" id="exampleInputEmail1" placeholder="Company Name" style="user-select: auto;" required>
</div>



<div class="form-group" style="user-select: auto;">
  <label style="user-select: auto;">Artisan Type</label>
  <select  name="artisan_type" id="artisan" class="form-control" style="user-select: auto;" required>
    <option  value="" style="user-select: auto;">------</option>

    <optgroup label="AutoMechanic">
    {{-- <option value="CakeBaker" style="user-select: auto;">Japanese</option> --}}
      <option value="Japanese AutoMechanic" style="user-select: auto;">Japanese</option>
      <option value="Germans AutoMechanic" style="user-select: auto;">Germans</option>
      <option value="Tricycle AutoMechanic" style="user-select: auto;">Tricycle</option>
    </optgroup>

    <optgroup label="Carpenter">
        {{-- <option value="CakeBaker" style="user-select: auto;">Japanese</option> --}}
          <option value="Rough carpenter" style="user-select: auto;">Rough carpenter</option>
          <option value="Trim carpenter" style="user-select: auto;">Trim carpenter</option>
          <option value="Cabinet maker" style="user-select: auto;">Cabinet maker</option>
          <option value="Framer" style="user-select: auto;">Framer</option>
          <option value="Roofer" style="user-select: auto;">Roofer</option>
          <option value="Ships carpenters" style="user-select: auto;">Ship's carpenter</option>
          <option value="Joister" style="user-select: auto;">Joister and Merchandise</option>
        </optgroup>


    <optgroup label="Electrician">
        {{-- <option value="CakeBaker" style="user-select: auto;">Japanese</option> --}}
          <option value="Japanese Electrician" style="user-select: auto;">Japanese</option>
          <option value="Germans Electrician" style="user-select: auto;">Germans</option>
          <option value="Tricycle Electrician" style="user-select: auto;">Tricycle</option>
          <option value="Household Electrician" style="user-select: auto;">Household</option>
        </optgroup>

        <optgroup label="Panel beater">
            {{-- <option value="CakeBaker" style="user-select: auto;">Japanese</option> --}}
              <option value="Japanese Panel beater " style="user-select: auto;">Japanese</option>
              <option value="Germans Panel beater" style="user-select: auto;">Germans</option>
              <option value="Tricycle Panel beater" style="user-select: auto;">Tricycle</option>
         </optgroup>

        <option value="Vulcanizer" style="user-select: auto;">Vulcanizer</option>
        <option value="HVAC" style="user-select: auto;">HVAC(Heating, Ventilation, and Air Conditioning) technician</option>
   
        <option value="Plumber" style="user-select: auto;">Plumber</option>
        <option value="Brick layer" style="user-select: auto;">Bricklayer</option>
        <option value="Builder" style="user-select: auto;">Builder</option>
        <option value="Household painter" style="user-select: auto;">Household painter</option>

        <option value="Vehicle spray painter" style="user-select: auto;">Vehicle spray painter</option>
        <option value="Interior decorator" style="user-select: auto;">Interior decorator</option>
        <option value="Tiler" style="user-select: auto;">Tiler</option>
        <option value="Welder" style="user-select: auto;">Welder</option>
         <option value="Tutors" style="user-select: auto;">Tutors</option>
        <option value="Dry cleaner" style="user-select: auto;">Dry cleaner</option>
        <option value="Makeup Artist" style="user-select: auto;">Makeup Artist</option>
        <option value="Baker" style="user-select: auto;">Baker</option>
        <option value="Cobbler" style="user-select: auto;">Cobbler</option>
        <option value="Fashion designer" style="user-select: auto;">Fashion designer</option>
        <option value="Sculptors" style="user-select: auto;">Sculptors</option>
        <option value="Photographer" style="user-select: auto;">Photographer</option>
        <option value="Butcher" style="user-select: auto;">Butcher</option>
        <option value="Herb doctor" style="user-select: auto;">Herb doctor</option>
        <option value="Kiosk owner" style="user-select: auto;">Kiosk owner</option>
        <option value="Petty trader" style="user-select: auto;">Petty trader</option>
    
 
 
  </select>
</div>


<div class="form-group" style="user-select: auto;">
  <label style="user-select: auto;">Company Description</label>
  <textarea type="textarea" value="{{ old('business_description') }}" id="business_description" name="business_description"  rows="4" cols="50"  class="form-control" placeholder=" Description"  style="user-select: auto;"required >
  </textarea>
  </div>


<div class="form-group" style="user-select: auto;">
  <label style="user-select: auto;">1. Service</label>
  <input type="text" value="{{ old('Service1') }}" id="Service1" name="Service1"  class="form-control" placeholder=" Service"  style="user-select: auto;"required >
</div>

<div class="form-group" style="user-select: auto;">
  <label style="user-select: auto;">2. Service</label>
  <input type="text" value="{{ old('Service2') }}" id="Service2" name="Service2"  class="form-control" placeholder=" Service"  style="user-select: auto;"required >
</div>

<div class="form-group" style="user-select: auto;">
  <label style="user-select: auto;">3. Service</label>
  <input type="text" value="{{ old('Service3') }}" name="Service3"  id="Service3" class="form-control" placeholder=" Service"  style="user-select: auto;"required >
</div>


<div class="form-group" style="user-select: auto;">
  <label style="user-select: auto;">4. Service</label>
  <input type="text" value="{{ old('Service4') }}" id="Service4" name="Service4"  class="form-control" placeholder=" Service"  style="user-select: auto;"required >
</div>






<div class="form-group" style="user-select: auto;">
<label for="exampleInputEmail1" style="user-select: auto;">Company Address</label>
<input type="text" value="{{ old('company_address') }}" name="company_address"class="form-control" id="company_address" placeholder="Company Address" style="user-select: auto;" required>
</div>


<div class="form-group" style="user-select: auto;">
  <label for="exampleInputEmail1" style="user-select: auto;">State</label>
  {{-- <input type="text"  value="{{ old('State') }}"  name="State" class="form-control" id="exampleInputEmail1" placeholder="State" style="user-select: auto;"  required>

  --}}
 
  {{-- <select id="states"  class="form-control"  name="State" style="user-select: auto;"  required>
  </select> --}}

  <select id="states"  class="form-control"  name="State" style="user-select: auto;"  required >
    <option selected="selected">Select item...</option>
    {{-- <option value='Abia'>Abia</option>
    <option value='Adamawa'>Adamawa</option> --}}
    <option value='AkwaIbom'>AkwaIbom</option>
    {{-- <option value='Anambra'>Anambra</option>
    <option value='Bauchi'>Bauchi</option>
    <option value='Bayelsa'>Bayelsa</option>
    <option value='Benue'>Benue</option>
    <option value='Borno'>Borno</option> --}}
    <option value='CrossRivers'>CrossRivers</option>
    {{-- <option value='Delta'>Delta</option>
    <option value='Ebonyi'>Ebonyi</option>
    <option value='Edo'>Edo</option>
    <option value='Ekiti'>Ekiti</option>
    <option value='Enugu'>Enugu</option>
    <option value='Gombe'>Gombe</option>
    <option value='Imo'>Imo</option> --}}
    {{-- <option value='Jigawa'>Jigawa</option>
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
    <option value='Plateau'>Plateau</option> --}}
    <option value='Rivers'>Rivers</option>
    {{-- <option value='Sokoto'>Sokoto</option>
    <option value='Taraba'>Taraba</option>
    <option value='Yobe'>Yobe</option>
    <option value='Zamfara'>Zamafara</option> --}}
  </select>


</div>



<div class="form-group" style="user-select: auto;">
  <label for="exampleInputEmail1" style="user-select: auto;">LGA</label>
  {{-- <input type="text" value="{{ old('LGA') }}"  name="LGA" class="form-control" id="exampleInputEmail1" placeholder="LGA" style="user-select: auto;"  required> --}}

{{-- <select id="lgas"  name="LGA" class="form-control"  placeholder="LGA" style="user-select: auto;"  required>
</select>  --}}
<select  id="lgas" name="LGA" class="form-control"  placeholder="LGA" style="user-select: auto;"  required>
  {{-- <option selected="selected">Select item...</option> --}}
</select>


</div>





{{-- <div class="form-group" style="user-select: auto;">
  <label for="exampleInputEmail1" style="user-select: auto;">Nationality</label>
  <input type="text"  value="{{ old('Nationality') }}"  name="Nationality" class="form-control" id="exampleInputEmail1" placeholder="Nationality" style="user-select: auto;"  required>
</div> --}}


         
<div class="form-group" style="user-select: auto;">
  <label for="exampleInputEmail1" style="user-select: auto;">Nationality</label>

  <input id="country_selector" type="text"  value="{{ old('Nationality') }}"  name="Nationality" class="form-control"  placeholder="Nationality" style="user-select: auto;"  required>
  <label for="country_selector" style="display:none;">Select a country here...</label>
</div>






<div class="form-group" style="user-select: auto;">
  <label for="exampleInputEmail1" style="user-select: auto;">Company Phone Number</label>
  <input type="text" value="{{ old('company_phone_number') }}"  id="company_phone_number" name="company_phone_number" class="form-control" id="exampleInputEmail1" placeholder="Company Phone Number" style="user-select: auto;" required>
</div>





<div class="form-control" style="user-select: auto;">
  <label>
  <input type="radio" name="colorRadio" 
   value="Monday" required> Monday</label>
  
   <label>
  <input type="radio" name="colorRadio" 
   value="Tuesday" required> Tuesday</label>
  
   <label>
   <input type="radio" name="colorRadio" 
   value="Wedsday" required> Wedsday</label>

   <label>
  <input type="radio" name="colorRadio" 
   value="Thursday" required> Thursday</label>

   <label>
    <input type="radio" name="colorRadio" 
     value="Friday" required> Friday</label>

     <label>
      <input type="radio" name="colorRadio" 
      value="Saturday" required> Saturday</label>

      <label>
      <input type="radio" name="colorRadio" 
      value="Sunday" required> Sunday</label>
  </div>


  <div class="Monday selectt" >
    <strong>Monday</strong>
    <select name="Monday1" id="Monday" class="form-control" style="user-select: auto;" required>
      <option value="" style="user-select: auto;">-----</option>
      <option value="6am-6pm" style="user-select: auto;">6am-6pm</option>
      <option value="6am-12pm" style="user-select: auto;">6am-12pm</option>
      <option value="6am-10pm" style="user-select: auto;">6am-10pm</option>
      <option value="7am-6pm" style="user-select: auto;">7am-6pm</option>
      <option value="7am-12pm" style="user-select: auto;">7am-12pm</option>
      <option value="7am-10pm" style="user-select: auto;">7am-10pm</option>
      <option value="8am-5pm" style="user-select: auto;">8am-5pm</option>
      <option value="8am-12pm" style="user-select: auto;">8am-12pm</option>
      <option value="8am-10pm" style="user-select: auto;">8am-10pm</option>
      <option value="9am-5pm" style="user-select: auto;">9am-5pm</option>
      <option value="9am-12pm" style="user-select: auto;">9am-12pm</option>
      <option value="9am-10pm" style="user-select: auto;">9am-10pm</option>
      <option value="10am-5pm" style="user-select: auto;">10am-5pm</option>
      <option value="10am-12pm" style="user-select: auto;">10am-12pm</option>
      <option value="10am-10pm" style="user-select: auto;">10am-10pm</option>
      <option value="11am-5pm" style="user-select: auto;">11am-5pm</option>
      <option value="11am-12pm" style="user-select: auto;">11am-12pm</option>
      <option value="11am-10pm" style="user-select: auto;">11am-10pm</option>
      <option value="12pm-6pm" style="user-select: auto;">12pm-6pm</option>
      <option value="12pm-10pm" style="user-select: auto;">12pm-10pm</option>
    </select>
  </div>
  

  <div class="Tuesday selectt" >
    <strong>Tuesday</strong>
    <select name="Tuesday1" id="Tuesday"  class="form-control" style="user-select: auto;"required>
      <option value="" style="user-select: auto;">-----</option>
      <option value="6am-6pm" style="user-select: auto;">6am-6pm</option>
      <option value="6am-12pm" style="user-select: auto;">6am-12pm</option>
      <option value="6am-10pm" style="user-select: auto;">6am-10pm</option>
      <option value="7am-6pm" style="user-select: auto;">7am-6pm</option>
      <option value="7am-12pm" style="user-select: auto;">7am-12pm</option>
      <option value="7am-10pm" style="user-select: auto;">7am-10pm</option>
      <option value="8am-5pm" style="user-select: auto;">8am-5pm</option>
      <option value="8am-12pm" style="user-select: auto;">8am-12pm</option>
      <option value="8am-10pm" style="user-select: auto;">8am-10pm</option>
      <option value="9am-5pm" style="user-select: auto;">9am-5pm</option>
      <option value="9am-12pm" style="user-select: auto;">9am-12pm</option>
      <option value="9am-10pm" style="user-select: auto;">9am-10pm</option>
      <option value="10am-5pm" style="user-select: auto;">10am-5pm</option>
      <option value="10am-12pm" style="user-select: auto;">10am-12pm</option>
      <option value="10am-10pm" style="user-select: auto;">10am-10pm</option>
      <option value="11am-5pm" style="user-select: auto;">11am-5pm</option>
      <option value="11am-12pm" style="user-select: auto;">11am-12pm</option>
      <option value="11am-10pm" style="user-select: auto;">11am-10pm</option>
      <option value="12pm-6pm" style="user-select: auto;">12pm-6pm</option>
      <option value="12pm-10pm" style="user-select: auto;">12pm-10pm</option>
    </select>
  
  
  </div>
  <div class="Wedsday selectt">
    <strong>Wedsday</strong> 
    <select name="Wedsday1" id="Wedsday"  class="form-control" style="user-select: auto;"required>
      <option value="" style="user-select: auto;">-----</option>
      <option value="6am-6pm" style="user-select: auto;">6am-6pm</option>
      <option value="6am-12pm" style="user-select: auto;">6am-12pm</option>
      <option value="6am-10pm" style="user-select: auto;">6am-10pm</option>
      <option value="7am-6pm" style="user-select: auto;">7am-6pm</option>
      <option value="7am-12pm" style="user-select: auto;">7am-12pm</option>
      <option value="7am-10pm" style="user-select: auto;">7am-10pm</option>
      <option value="8am-5pm" style="user-select: auto;">8am-5pm</option>
      <option value="8am-12pm" style="user-select: auto;">8am-12pm</option>
      <option value="8am-10pm" style="user-select: auto;">8am-10pm</option>
      <option value="9am-5pm" style="user-select: auto;">9am-5pm</option>
      <option value="9am-12pm" style="user-select: auto;">9am-12pm</option>
      <option value="9am-10pm" style="user-select: auto;">9am-10pm</option>
      <option value="10am-5pm" style="user-select: auto;">10am-5pm</option>
      <option value="10am-12pm" style="user-select: auto;">10am-12pm</option>
      <option value="10am-10pm" style="user-select: auto;">10am-10pm</option>
      <option value="11am-5pm" style="user-select: auto;">11am-5pm</option>
      <option value="11am-12pm" style="user-select: auto;">11am-12pm</option>
      <option value="11am-10pm" style="user-select: auto;">11am-10pm</option>
      <option value="12pm-6pm" style="user-select: auto;">12pm-6pm</option>
      <option value="12pm-10pm" style="user-select: auto;">12pm-10pm</option>
    </select>
  
  
  
  </div>
  <div class="Thursday selectt">
    <strong>Thursday</strong> 
    <select name="Thursday1" id="Thursday" class="form-control" style="user-select: auto;"required>
      <option value="" style="user-select: auto;">-----</option>
      <option value="6am-6pm" style="user-select: auto;">6am-6pm</option>
      <option value="6am-12pm" style="user-select: auto;">6am-12pm</option>
      <option value="6am-10pm" style="user-select: auto;">6am-10pm</option>
      <option value="7am-6pm" style="user-select: auto;">7am-6pm</option>
      <option value="7am-12pm" style="user-select: auto;">7am-12pm</option>
      <option value="7am-10pm" style="user-select: auto;">7am-10pm</option>
      <option value="8am-5pm" style="user-select: auto;">8am-5pm</option>
      <option value="8am-12pm" style="user-select: auto;">8am-12pm</option>
      <option value="8am-10pm" style="user-select: auto;">8am-10pm</option>
      <option value="9am-5pm" style="user-select: auto;">9am-5pm</option>
      <option value="9am-12pm" style="user-select: auto;">9am-12pm</option>
      <option value="9am-10pm" style="user-select: auto;">9am-10pm</option>
      <option value="10am-5pm" style="user-select: auto;">10am-5pm</option>
      <option value="10am-12pm" style="user-select: auto;">10am-12pm</option>
      <option value="10am-10pm" style="user-select: auto;">10am-10pm</option>
      <option value="11am-5pm" style="user-select: auto;">11am-5pm</option>
      <option value="11am-12pm" style="user-select: auto;">11am-12pm</option>
      <option value="11am-10pm" style="user-select: auto;">11am-10pm</option>
      <option value="12pm-6pm" style="user-select: auto;">12pm-6pm</option>
      <option value="12pm-10pm" style="user-select: auto;">12pm-10pm</option>
    </select>
  
  
  </div>


  <div class=" Friday selectt">
    <strong> Friday</strong> 
    <select name="Friday1" id="Friday"  class="form-control" style="user-select: auto;"required>
      <option value="" style="user-select: auto;">-----</option>
      <option value="6am-6pm" style="user-select: auto;">6am-6pm</option>
      <option value="6am-12pm" style="user-select: auto;">6am-12pm</option>
      <option value="6am-10pm" style="user-select: auto;">6am-10pm</option>
      <option value="7am-6pm" style="user-select: auto;">7am-6pm</option>
      <option value="7am-12pm" style="user-select: auto;">7am-12pm</option>
      <option value="7am-10pm" style="user-select: auto;">7am-10pm</option>
      <option value="8am-5pm" style="user-select: auto;">8am-5pm</option>
      <option value="8am-12pm" style="user-select: auto;">8am-12pm</option>
      <option value="8am-10pm" style="user-select: auto;">8am-10pm</option>
      <option value="9am-5pm" style="user-select: auto;">9am-5pm</option>
      <option value="9am-12pm" style="user-select: auto;">9am-12pm</option>
      <option value="9am-10pm" style="user-select: auto;">9am-10pm</option>
      <option value="10am-5pm" style="user-select: auto;">10am-5pm</option>
      <option value="10am-12pm" style="user-select: auto;">10am-12pm</option>
      <option value="10am-10pm" style="user-select: auto;">10am-10pm</option>
      <option value="11am-5pm" style="user-select: auto;">11am-5pm</option>
      <option value="11am-12pm" style="user-select: auto;">11am-12pm</option>
      <option value="11am-10pm" style="user-select: auto;">11am-10pm</option>
      <option value="12pm-6pm" style="user-select: auto;">12pm-6pm</option>
      <option value="12pm-10pm" style="user-select: auto;">12pm-10pm</option>
    </select>
  
  
  </div>

  <div class="Saturday selectt">
    <strong>Saturday</strong> 
    <select name="Saturday1" id="Saturday"   class="form-control" style="user-select: auto;"required>
      <option value="" style="user-select: auto;">-----</option>
      <option value="6am-6pm" style="user-select: auto;">6am-6pm</option>
      <option value="6am-12pm" style="user-select: auto;">6am-12pm</option>
      <option value="6am-10pm" style="user-select: auto;">6am-10pm</option>
      <option value="7am-6pm" style="user-select: auto;">7am-6pm</option>
      <option value="7am-12pm" style="user-select: auto;">7am-12pm</option>
      <option value="7am-10pm" style="user-select: auto;">7am-10pm</option>
      <option value="8am-5pm" style="user-select: auto;">8am-5pm</option>
      <option value="8am-12pm" style="user-select: auto;">8am-12pm</option>
      <option value="8am-10pm" style="user-select: auto;">8am-10pm</option>
      <option value="9am-5pm" style="user-select: auto;">9am-5pm</option>
      <option value="9am-12pm" style="user-select: auto;">9am-12pm</option>
      <option value="9am-10pm" style="user-select: auto;">9am-10pm</option>
      <option value="10am-5pm" style="user-select: auto;">10am-5pm</option>
      <option value="10am-12pm" style="user-select: auto;">10am-12pm</option>
      <option value="10am-10pm" style="user-select: auto;">10am-10pm</option>
      <option value="11am-5pm" style="user-select: auto;">11am-5pm</option>
      <option value="11am-12pm" style="user-select: auto;">11am-12pm</option>
      <option value="11am-10pm" style="user-select: auto;">11am-10pm</option>
      <option value="12pm-6pm" style="user-select: auto;">12pm-6pm</option>
      <option value="12pm-10pm" style="user-select: auto;">12pm-10pm</option>
    </select>
  
  
  </div>

  

  <div class="Sunday selectt">
    <strong>Sunday</strong> 
    <select name="Sunday1" id="Sunday"  class="form-control" style="user-select: auto;"required>
      <option value="" style="user-select: auto;">-----</option>
      <option value="6am-6pm" style="user-select: auto;">6am-6pm</option>
      <option value="6am-12pm" style="user-select: auto;">6am-12pm</option>
      <option value="6am-10pm" style="user-select: auto;">6am-10pm</option>
      <option value="7am-6pm" style="user-select: auto;">7am-6pm</option>
      <option value="7am-12pm" style="user-select: auto;">7am-12pm</option>
      <option value="7am-10pm" style="user-select: auto;">7am-10pm</option>
      <option value="8am-5pm" style="user-select: auto;">8am-5pm</option>
      <option value="8am-12pm" style="user-select: auto;">8am-12pm</option>
      <option value="8am-10pm" style="user-select: auto;">8am-10pm</option>
      <option value="9am-5pm" style="user-select: auto;">9am-5pm</option>
      <option value="9am-12pm" style="user-select: auto;">9am-12pm</option>
      <option value="9am-10pm" style="user-select: auto;">9am-10pm</option>
      <option value="10am-5pm" style="user-select: auto;">10am-5pm</option>
      <option value="10am-12pm" style="user-select: auto;">10am-12pm</option>
      <option value="10am-10pm" style="user-select: auto;">10am-10pm</option>
      <option value="11am-5pm" style="user-select: auto;">11am-5pm</option>
      <option value="11am-12pm" style="user-select: auto;">11am-12pm</option>
      <option value="11am-10pm" style="user-select: auto;">11am-10pm</option>
      <option value="12pm-6pm" style="user-select: auto;">12pm-6pm</option>
      <option value="12pm-10pm" style="user-select: auto;">12pm-10pm</option>
    </select>
  
  
  </div>


  <div class="form-group" style="user-select: auto;">
    <label for="exampleInputFile" style="user-select: auto;">Company Image (*3 required)</label>
    <div class="input-group" style="user-select: auto;">
      <div class="custom-file" style="user-select: auto;">
        {{-- <input type="file" name="relationship" value="{{ old('file') }}" class="custom-file-input" id="exampleInputFile" style="user-select: auto;" required> --}}
        {{-- <label class="custom-file-label" for="exampleInputFile" style="user-select: auto;">Choose file</label> --}}
        {{-- <input id="file" type="file" class="form-control @error('file') is-invalid @enderror" name="file" value="{{ old('file') }}">
       --}}


         <input type="file" id="f" onchange="loadPreview(this)" name="image[]"   multiple/>
        <span class="text-danger">{{ $errors->first('image') }}</span>
        <div id="thumb-output"></div>
        <br> 

        {{-- <input id="file2" type="file" class="form-control @error('file2') is-invalid @enderror" name="file2" value="{{ old('file2') }}">
        <input id="file3" type="file" class="form-control @error('file3') is-invalid @enderror" name="file3" value="{{ old('file3') }}">
       --}}
      
      </div>

</div>
  </div>



 <div class="form-group" style="user-select: auto;">
    <label for="exampleInputFile" style="user-select: auto;">Video</label>
    <div class="input-group" style="user-select: auto;">
      <div class="custom-file" style="user-select: auto;">
     
        {{-- <input  type="file" class="form-control @error('video') is-invalid @enderror" name="video" value="{{ old('video') }}">
       --}}

        <input type="file" id="f" name="video" class="demoInputBox"/>
        <p>
         @if($errors->has('video'))
           {{ $errors->first('video') }}
         @endif
        </p>
      </div>

</div>
  </div>
 

  <div class="form-group" style="user-select: auto;">
    <label style="user-select: auto;">facebook</label>
   
    <input type="url" value="{{ old('facebook')}} " id="facebook" name="facebook"  class="form-control" placeholder=" facebook url"  style="user-select: auto;"required >
  </div>
  

  <div class="form-group" style="user-select: auto;">
    <label style="user-select: auto;">twitter</label>
    <input type="url" value="{{ old('twiter')}} " name="twitter" id="twitter" class="form-control" placeholder=" twitter url"  style="user-select: auto;"required >
  </div>

  <div class="form-group" style="user-select: auto;">
    <label style="user-select: auto;">instagram</label>
    <input type="url" value="{{ old('instagram') }} "name="instagram" id="instagram" class="form-control" placeholder=" instagram url"  style="user-select: auto;"required >
  </div>
  
  <div class="form-group" style="user-select: auto;">
    <label style="user-select: auto;">whatsapp</label>
    <input type="url" value="{{ old('whatsapp')}} " name="whatsapp" id="whatsapp"  class="form-control" placeholder=" whatsapp group url"  style="user-select: auto;"required >
  </div>
 


 
<div class="card-footer" style="user-select: auto;">
  <button type="submit" id="submitt" class="btn userbutton2" style="user-select: auto;" >Submit</button>
  </div>
  </form>
  </div>
  <script type="text/javascript">
    $(document).ready(function() {
        $('input[type="radio"]').click(function() {
            var inputValue = $(this).attr("value");
            
            var targetBox = $("." + inputValue);
         
            $(".selectt").not(targetBox).hide();
            $(targetBox).show();
            $("select#Monday").val();
            $("select#Tuesday").val();
            $("select#Wedsday").val();
            $("select#Thursday").val();
            $("select#Friday").val();
            $("select#Saturday").val();
            $("select#Sunday").val();
        });
    });
  </script>

<style>

  #frmFile {border-top:#F0F0F0 2px solid;background:#FAF8F8;padding:10px;}
  .demoInputBox{padding:10px; border:#F0F0F0 1px solid; border-radius:4px;background-color:#FFF;}
  #file_error{color: #FF0000;}
  /* #btnSubmit{background-color:#2FC332;border:0;padding:10px 40px; margin:15px 0px; color:#FFF;border:#F0F0F0 1px solid; border-radius:4px;} */
  </style>



<script>
  function validate() {
    $("#file_error").html("");
    $(".demoInputBox").css("border-color","#F0F0F0");
    var file_size = $('#f')[0].files[0].size;
      if(file_size>2097152) {
        $("#file_error").html("File size is greater than 2MB");
        $(".demoInputBox").css("border-color","#FF0000");
        return false;
      } 
      return true;
    }
    </script>

 



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



  
{{--     
    @foreach ($users as $user)
    @if ($user->email == Auth::user()->email )
    <script type="text/javascript">
      $(document).ready(function() {
          $('button').click(function() {
            $('#submitt').attr('disabled', 'disabled');
             
          });
      });
    </script>

  @endif
     

      @endforeach --}}


{{-- <div class="card-footer" style="user-select: auto;">
<button type="submit" id="submit" class="btn userbutton2" style="user-select: auto;"  >Submit</button>
</div>
</form>
</div>

   --}}







</div>
</div>



 <!-- Control Sidebar -->
 <aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->



{{-- 
<script>
  $(document).ready(function(){
      $("#contact-frm").submit(function(e){
          e.preventDefault();
          let url = $(this).attr('action');
          $("#submitt").attr('disabled', true);
          $.post(url, 
          { 
              email: $("#email").val(),
              company_name: $("#company_name").val(),
              artisan_type: $("#artisan").val(),
              business_description : $("#business_description").val(),
              business_services1: $("#Service1").val(),
              business_services2: $("#Service2").val(),
              business_services3: $("#Service3").val(),
              business_services4: $("#Service4").val(),
              company_address : $("#company_address").val(),
              lga: $("#lgas").val(),
              State: $("#states").val(),
              nationality: $("#country_selector").val(),
              company_phone_number: $("#company_phone_number").val(),
              monday : $("#Monday").val(),
              tuesday: $("#Tuesday").val(),
              wedsday: $("#Wedsday").val(),
              thursday: $("#Thursday").val(),
              friday : $("#Friday").val(),
              saturday: $("#Saturday").val(),
              sunday: $("#Sunday").val(),
              company_photo1: $("#f").val(),
              company_photo2: $("#f").val(),
              company_photo3: $("#f").val(),
              video: $("#f").val(),
              facebook: $("#facebook").val(),
              twiter: $("#twitter").val(),
              instagram: $("#instagram").val(),
              whatsapp: $("#whatsapp").val(),
              auth_user_id: $("#AuthID").val(),
             
             
             
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
</body>

@endsection