<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>CV ABS</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!--
Ramayana CSS Template
https://templatemo.com/tm-529-ramayana
-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset ('rama/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset ('rama/assets/css/templatemo-style.css') }}">
    <link rel="stylesheet" href="{{ asset ('rama/assets/css/owl.css') }}">

  </head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

      <!-- Main -->
        <div id="main">
          <div class="inner">

            <!-- Header -->
            <header id="header">
              <div class="logo">
                <h1>CV Akasa Burhan Samudera<h1>
              </div>
            </header>

            <!-- Banner -->
            
            <section class="main-banner">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <div class="banner-content">
                      <div class="row">
                        <div class="col-md-12">

                         
           
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-md-6">
                        <div class="ibox">
                            <div class="ibox-head">
                                
                                <div class="ibox-tools">
                                </div>
                            </div>

                            <div class="banner-content">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="banner-caption">

                            <div class="col-10 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h1 class="card-title">Data Pemesanan</h1>
                  <!-- <p class="card-description">
                    Basic form elements
                  </p> -->
                  <form class="forms-sample">
                    <div class="form-group">
                    <div class="col-md-10">
                 
                    <div class="ibox">
                    <div class="ibox-head">
                        <!-- <div class="ibox-title">Responsive Table</div> -->
                    </div>
                    <div class="ibox-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th width="10px"></th>
                                        <th>nama_customer</th>
                                        <th>no_tlp</th>
                                        <th>alamat</th>
                                        <th>tgl_pesanan</th>
                                        <th>id_produk</th>
                                        <th>nama_produk</th>
                                        <th>harga_perproduk</th>
                                        <th>jumlah_produk</th>
                                        <th>total_harga</th>
                                        <th>aksi</th>
                                    </tr>
</thead>
                                    <tbody>
                                    @foreach ($pemesanan as $item)
                                <tr class = "table-info">
                                  <td>{{ $loop->iteration }}</td> 
                                  <td>{{ $item->nama_customer }}</td>
                                  <td>{{ $item->no_tlp }}</td>
                                  <td>{{ $item->alamat }}</td>
                                  <td>{{ $item->tgl_pesanan }}</td>
                                  <td>{{ $item->id_produk }}</td>
                                  <td>{{ $item->nama_produk }}</td>
                                  <td>{{ $item->harga_perproduk}}</td>                                  
                                  <td>{{ $item->jumlah_produk}}</td>
                                  <td>{{ $item->total_harga }}</td>

                                  <td>
                                  <button class="btn btn-default btn-xs m-r-5" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i></button>
                                            <button class="btn btn-default btn-xs" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></button>
                                  </td>
                                  </tr>
                                  
                                    </thead>
                                    <tr>
                                        <td>
                                            <label class="ui-checkbox">
                                                <input type="checkbox">
                                                <span class="input-span"></span>
                                            </label>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        
                                        <td>
                                            <!-- <button class="btn btn-default btn-xs m-r-5" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i></button>
                                            <button class="btn btn-default btn-xs" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></button> -->
                                        </td>
                                    </tr>
                                    <!-- <tr>
                                        <td>
                                            <label class="ui-checkbox">
                                                <input type="checkbox">
                                                <span class="input-span"></span>
                                            </label>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <button class="btn btn-default btn-xs m-r-5" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i></button>
                                            <button class="btn btn-default btn-xs" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="ui-checkbox">
                                                <input type="checkbox">
                                                <span class="input-span"></span>
                                            </label>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <button class="btn btn-default btn-xs m-r-5" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i></button>
                                            <button class="btn btn-default btn-xs" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>
                                            <label class="ui-checkbox">
                                                <input type="checkbox">
                                                <span class="input-span"></span>
                                            </label>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        
                                        <td>
                                            <button class="btn btn-default btn-xs m-r-5" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i></button>
                                            <button class="btn btn-default btn-xs" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="ui-checkbox">
                                                <input type="checkbox">
                                                <span class="input-span"></span>
                                            </label>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <button class="btn btn-default btn-xs m-r-5" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i></button>
                                            <button class="btn btn-default btn-xs" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="ui-checkbox">
                                                <input type="checkbox">
                                                <span class="input-span"></span>
                                            </label>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            
                                            <button class="btn btn-default btn-xs m-r-5" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i></button>
                                            <button class="btn btn-default btn-xs" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></button>
                                        </td>
                                    </tr> -->
                                </tbody>
                                @endforeach
                                
                            </table>
                        </div>
                    </div>
                </div>
                
               
                     


              <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="statistics-details d-flex align-items-center justify-content-between">
                          <div>
                            

              <div class="row">
            <div class="col-lg-8">
              <div class="ibox">
                <div class="ibox-head">
                  <!-- <div class="ibox-title">Pesanan</div> -->
                  <div class="ibox-tools">
                    <br></br>

                    
                    
                  </div>
                </div>
                
                                  
            </section>

            

            

            

            <!-- Top Image -->
            <section class="top-image">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    
                  </div>
                </div>
              </div>
            </section>

            <!-- Left Image -->
            <section class="left-image">
              <div class="container-fluid">
                <div class="row">
                  
                </div>
              </div>
            </section>

            <!-- Right Image -->
            <section class="right-image">
              <div class="container-fluid">
                <div class="row">
                 
                </div>
              </div>
            </section>

          </div>
        </div>

      <!-- Sidebar -->
        <div id="sidebar">

          <div class="inner">

            <!-- Search Box -->
            <section id="search" class="alt">
              <form method="get" action="#">
                <input type="text" name="search" id="search" placeholder="Search..." />
              </form>
            </section>
              
            <!-- Menu -->
            <nav id="menu">
              <ul>
              <li><a href="beranda">Beranda</a></li>
                <li><a href="produk">Produk</a></li>
                <li><a href="form">Form</a></li>
                <li><a href="tabel">Tabel</a></li>
                <li><a href="login">Login</a></li>
                 <li>
               

            <!-- Footer -->
            <footer id="footer">
              <p class="copyright">Copyright &copy; 2023 
                CV Akasa Burhan Samudera
              <br><a rel="nofollow" href="https://www.facebook.com/templatemo"></a></p>
            </footer>

          </div>
        </div>

    </div>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="{{ asset ('rama/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset ('rama/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset ('rama/assets/js/browser.min.js') }}"></script>
    <script src="{{ asset ('rama/assets/js/breakpoints.min.js') }}"></script>
    <script src="{{ asset ('rama/assets/js/transition.js') }}"></script>
    <script src="{{ asset ('rama/assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset ('rama/assets/js/custom.js') }}"></script>
</body>


  </body>

</html>