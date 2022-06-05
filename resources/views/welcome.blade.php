<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IFFA Bandung</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-primary navbar-expand-lg ">
        <div class="container">
            <img style="width: 70px;" src="/img/iffa.png">
            <h1 style="font-family: 'Permanent Marker', cursive;">IFFA Bandung Database</h1>
        </div>
    </nav>
    <div class="container container-fluid mt-3">
        <form class="d-flex search" role="search" action="" method="get" id="nameform">
            <input class="form-control rounded-phill" type="search" placeholder="Cari pemain disini" aria-label="Search" name="search">
            <button class="button btn btn-outline-primary ms-2" type="submit">Search</button>
        </form>
    </div>
    <div class="container mt-3">
        <button class="btn btn-link" id="filter" style="color: black; text-decoration: none"><h4>Filter</h4></button><span id="close-filter-appear" style="display: none"><button id="close-filter" class="btn btn-link text-danger"><i class="fa-solid fa-xmark"></i></button><span>
    </div>
    <div id="filter-appear" style="display: none">
        <div class="container">
            <button class="btn btn-link" id="team" style="color: black; text-decoration: none"><h5>Team</h5></button><span id="close-team-appear" style="display: none"><button id="close-team" class="btn btn-link text-danger"><i class="fa-solid fa-xmark"></i></button><span>
            <div id="team-appear" style="display: none">
                <div class="row mb-1">
                    <form class="d-flex search col" action="" method="get" id="nameform">
                        <button class="btn btn-outline-primary rounded-pill me-2" type="submit" name="searchteam" value="Bandits">Bandits</button>
                        <button class="btn btn-outline-primary rounded-pill me-2" type="submit" name="searchteam" value="Crows">Crows</button>
                        <button class="btn btn-outline-primary rounded-pill me-2" type="submit" name="searchteam" value="Free_Agent">Free Agent</button>
                        <button class="btn btn-outline-primary rounded-pill me-2" type="submit" name="searchteam" value="Ganesha_Touchdown">Ganesha Touchdown</button>
                        <button class="btn btn-outline-primary rounded-pill me-2" type="submit" name="searchteam" value="Panzers">Panzers</button>
                        <button class="btn btn-outline-primary rounded-pill me-2" type="submit" name="searchteam" value="Polar_Bears">Polar Bears</button>
                    </form>
                </div>
                <div class="row mb-1">
                    <form class="d-flex search col" action="" method="get" id="nameform">
                        <button class="btn btn-outline-primary rounded-pill me-2" type="submit" name="searchteam" value="Redskin_Predator">Redskin Predator</button>
                        <button class="btn btn-outline-primary rounded-pill me-2" type="submit" name="searchteam" value="Royal_Flush">Royal Flush</button>
                        <button class="btn btn-outline-primary rounded-pill me-2" type="submit" name="searchteam" value="Siberian_Husky">Siberian Husky</button>
                        <button class="btn btn-outline-primary rounded-pill me-2" type="submit" name="searchteam" value="Wff_Bandung">Wff Bandung</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="container mt-3">
            <button class="btn btn-link" style="color: black; text-decoration: none" id="posisi"><h5>Posisi</h5></button><span id="close-posisi-appear" style="display: none"><button id="close-posisi" class="btn btn-link text-danger"><i class="fa-solid fa-xmark"></i></button><span>
            <div id="posisi-appear" style="display: none">
                <h6 class="ms-2">Offense</h6>
                <div class="row ms-2 mb-1">
                    <form class="d-flex search col" action="" method="get" id="nameform">
                        <button class="btn btn-outline-primary rounded-pill me-2" type="submit" name="searchposisi" value="QB">QB</button>
                        <button class="btn btn-outline-primary rounded-pill me-2" type="submit" name="searchposisi" value="WR">WR</button>
                        <button class="btn btn-outline-primary rounded-pill me-2" type="submit" name="searchposisi" value="RB">RB</button>
                        <button class="btn btn-outline-primary rounded-pill me-2" type="submit" name="searchposisi" value="OL">OL</button>
                        <button class="btn btn-outline-primary rounded-pill me-2" type="submit" name="searchposisi" value="TE">TE</button>
                    </form>
                </div>
                <h6 class="ms-2">Defense</h6>
                <div class="row ms-2">
                    <form class="d-flex search col" action="" method="get" id="nameform">
                        <button class="btn btn-outline-primary rounded-pill me-2" type="submit" name="searchposisi" value="DL">DL</button>
                        <button class="btn btn-outline-primary rounded-pill me-2" type="submit" name="searchposisi" value="S">S</button>
                        <button class="btn btn-outline-primary rounded-pill me-2" type="submit" name="searchposisi" value="CB">CB</button>
                        <button class="btn btn-outline-primary rounded-pill me-2" type="submit" name="searchposisi" value="LB">LB</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="container mt-3">
            <button class="btn btn-link" style="color: black; text-decoration: none" id="domisili"><h5>Domisili</h5></button><span id="close-domisili-appear" style="display: none"><button id="close-domisili" class="btn btn-link text-danger"><i class="fa-solid fa-xmark"></i></button><span>
            <div class="row mb-1" id="domisili-appear" style="display: none">
                <form class="d-flex search col" role="search" action="" method="get" id="nameform">
                    <button class="btn btn-outline-primary rounded-pill me-2" type="submit" name="searchdomisili" value="Bandung">Bandung</button>
                    <button class="btn btn-outline-primary rounded-pill me-2" type="submit" name="searchdomisili" value="Bandung Barat">Bandung Barat</button>
                    <button class="btn btn-outline-primary rounded-pill me-2" type="submit" name="searchdomisili" value="Bekasi">Bekasi</button>
                    <button class="btn btn-outline-primary rounded-pill me-2" type="submit" name="searchdomisili" value="Cimahi">Cimahi</button>
                    <button class="btn btn-outline-primary rounded-pill me-2" type="submit" name="searchdomisili" value="Karawan">Karawang</button>
                    <button class="btn btn-outline-primary rounded-pill me-2" type="submit" name="searchdomisili" value="Subang">Subang</button>
                    <button class="btn btn-outline-primary rounded-pill me-2" type="submit" name="searchdomisili" value="Sukabumi">Sukabumi</button>
                    <button class="btn btn-outline-primary rounded-pill me-2" type="submit" name="searchdomisili" value="Tangerang">Tangerang</button>
                    <button class="btn btn-outline-primary rounded-pill me-2" type="submit" name="searchdomisili" value="Tasikmalaya">Tasikmalaya</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container mt-3  ">
        @if ($test == "")
            <div class="row row-cols-4 g-4">
                <?php $i = 0; ?>
                <?php foreach ($data as $dat) : ?>
                    <div class="col">
                    <div class="card">
                        <img src="/img/avatar.png" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title text-center"><?= $dat['nama'] ?></h5>
                        <p class="card-text">
                            <div><i class="fa-solid fa-person me-2 mb-2"></i><b>Posisi: </b></i><?= $dat['posisi'] ?></div>
                            <div><i class="fa-solid fa-user-tie me-2 mb-2"></i><b>Nama Jersey: </b></i><?= $dat['nama_jersey'] ?></div>
                            <div><i class="fa-solid fa-shirt me-2 mb-2"></i><b>Nomor Punggung: </b></i><?= $dat['nomor_punggung'] ?></div>
                            <div><i class="fa-solid fa-phone me-2 mb-2"></i><b>Nomor HP: </b></i><?= $dat['nomor_hp'] ?></div>
                            <div><i class="fa-solid fa-location-dot me-2 mb-2"></i><b>Domisili: </b></i><?= $dat['domisili'] ?></div>
                            <div><i class="fa-solid fa-calendar-days me-2 mb-2"></i><b>TTL: </b></i><?= $dat['tempat_lahir'] ?>, <?= $dat['tanggal_lahir'] ?></div>
                            <div><i class="fa-solid fa-people-group me-2 mb-2"></i><b>Team: </b></i>
                                @if ($dat['player_in'] == 'http://www.semanticweb.org/mf/ontologies/2022/4/player#Free_Agent')
                                    Free Agent
                                @elseif ($dat['player_in'] == 'http://www.semanticweb.org/mf/ontologies/2022/4/player#Bandits')
                                    Bandits
                                @elseif ($dat['player_in'] == 'http://www.semanticweb.org/mf/ontologies/2022/4/player#Crows')
                                    Crows
                                @elseif ($dat['player_in'] == 'http://www.semanticweb.org/mf/ontologies/2022/4/player#Ganesha_Touchdown')
                                    Ganesha Touchdown
                                @elseif ($dat['player_in'] == 'http://www.semanticweb.org/mf/ontologies/2022/4/player#Panzers')
                                    Panzers
                                @elseif ($dat['player_in'] == 'http://www.semanticweb.org/mf/ontologies/2022/4/player#Polar_Bears')
                                    Polar Bears
                                @elseif ($dat['player_in'] == 'http://www.semanticweb.org/mf/ontologies/2022/4/player#Redskin_Predator')
                                    Redskin Predator
                                @elseif ($dat['player_in'] == 'http://www.semanticweb.org/mf/ontologies/2022/4/player#Royal_Flush')
                                    Royal Flush
                                @elseif ($dat['player_in'] == 'http://www.semanticweb.org/mf/ontologies/2022/4/player#Siberian_Husky')
                                    Siberian Husky
                                @elseif ($dat['player_in'] == 'http://www.semanticweb.org/mf/ontologies/2022/4/player#Wff_Bandung')
                                    WFF Bandung
                                @endif
                            </div>
                        </p>
                        </div>
                    </div>
                    </div>
                <?php endforeach; ?>
            </div>
        @else
            <div class="row mb-2">  
                <form class="" role="clear" action="" method="get" id="nameform">
                    <i class="fa-solid fa-magnifying-glass"></i> Hasil pencarian untuk "<?php echo $test; ?>"
                    <button class="button btn btn-outline-danger ms-3" type="submit">Clear</button>
                </form>
            </div>
            <div class="row row-cols-4 g-4">
                <?php $i = 0; ?>
                <?php foreach ($data as $dat) : ?>
                    <div class="col">
                    <div class="card">
                        <img src="/img/avatar.png" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title text-center"><?= $dat['nama'] ?></h5>
                        <p class="card-text">
                            <div><i class="fa-solid fa-person me-2 mb-2"></i><b>Posisi: </b></i><?= $dat['posisi'] ?></div>
                            <div><i class="fa-solid fa-user-tie me-2 mb-2"></i><b>Nama Jersey: </b></i><?= $dat['nama_jersey'] ?></div>
                            <div><i class="fa-solid fa-shirt me-2 mb-2"></i><b>Nomor Punggung: </b></i><?= $dat['nomor_punggung'] ?></div>
                            <div><i class="fa-solid fa-phone me-2 mb-2"></i><b>Nomor HP: </b></i><?= $dat['nomor_hp'] ?></div>
                            <div><i class="fa-solid fa-location-dot me-2 mb-2"></i><b>Domisili: </b></i><?= $dat['domisili'] ?></div>
                            <div><i class="fa-solid fa-calendar-days me-2 mb-2"></i><b>TTL: </b></i><?= $dat['tempat_lahir'] ?>, <?= $dat['tanggal_lahir'] ?></div>
                            <div><i class="fa-solid fa-people-group me-2 mb-2"></i><b>Team: </b></i>
                                @if ($dat['player_in'] == 'http://www.semanticweb.org/mf/ontologies/2022/4/player#Free_Agent')
                                    Free Agent
                                @elseif ($dat['player_in'] == 'http://www.semanticweb.org/mf/ontologies/2022/4/player#Bandits')
                                    Bandits
                                @elseif ($dat['player_in'] == 'http://www.semanticweb.org/mf/ontologies/2022/4/player#Crows')
                                    Crows
                                @elseif ($dat['player_in'] == 'http://www.semanticweb.org/mf/ontologies/2022/4/player#Ganesha_Touchdown')
                                    Ganesha Touchdown
                                @elseif ($dat['player_in'] == 'http://www.semanticweb.org/mf/ontologies/2022/4/player#Panzers')
                                    Panzers
                                @elseif ($dat['player_in'] == 'http://www.semanticweb.org/mf/ontologies/2022/4/player#Polar_Bears')
                                    Polar Bears
                                @elseif ($dat['player_in'] == 'http://www.semanticweb.org/mf/ontologies/2022/4/player#Redskin_Predator')
                                    Redskin Predator
                                @elseif ($dat['player_in'] == 'http://www.semanticweb.org/mf/ontologies/2022/4/player#Royal_Flush')
                                    Royal Flush
                                @elseif ($dat['player_in'] == 'http://www.semanticweb.org/mf/ontologies/2022/4/player#Siberian_Husky')
                                    Siberian Husky
                                @elseif ($dat['player_in'] == 'http://www.semanticweb.org/mf/ontologies/2022/4/player#Wff_Bandung')
                                    WFF Bandung
                                @endif
                            </div>
                        </p>
                        </div>
                    </div>
                    </div>
                <?php endforeach; ?>
            </div>
        @endif
    </div>

    <script type="text/javascript">

        $("#filter").click(
            function()
            {
                $("#filter-appear").show();
                $("#close-filter-appear").show();
            }
        )

        $("#close-filter").click(
            function()
            {
                $("#filter-appear").hide();
                $("#close-filter-appear").hide();
            }
        )

        $("#team").click(
            function()
            {
                $("#team-appear").show();
                $("#close-team-appear").show();
            }
        )

        $("#close-team").click(
            function()
            {
                $("#team-appear").hide();
                $("#close-team-appear").hide();
            }
        )

        $("#posisi").click(
            function()
            {
                $("#posisi-appear").show();
                $("#close-posisi-appear").show();
            }
        )

        $("#close-posisi").click(
            function()
            {
                $("#posisi-appear").hide();
                $("#close-posisi-appear").hide();
            }
        )

        $("#domisili").click(
            function()
            {
                $("#domisili-appear").show();
                $("#close-domisili-appear").show();
            }
        )

        $("#close-domisili").click(
            function()
            {
                $("#domisili-appear").hide();
                $("#close-domisili-appear").hide();
            }
        )

    </script>
</body>

</html>