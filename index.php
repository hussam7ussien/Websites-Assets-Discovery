
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="apple-touch-icon" sizes="57x57" href="favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
    <link rel="manifest" href="favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title>Find, browse and download</title>

    <!-- Bootstrap core CSS -->
    <link href="resources/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom styles for this template -->
    <link href="resources/css/style.css" rel="stylesheet">
  </head>

  <body>
    <div id="loader"></div>
    <nav class="navbar navbar-toggleable-md navbar-inverse bg-rocket fixed-top">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">Find | Browse | Download</a>
    </nav>

    <div class="container">

      <div class="text-center">
            <img src="resources/images/lock.png" alt="logo" />
            <p class="lead">Website assets downloader.<br>Browse all resources like CSS, JS, Images and others.</p>
            <div class="row">
                <div class="col-sm-6 col-md-5 offset-md-2 col-lg-8 offset-lg-2">
                        <div class="input-group">
                            <input type="text" class="search-query form-control" id="filter" placeholder="Write website url ..." />
                            <span class="input-group-btn">
                                <button class="btn btn-default btn-rocket" type="button" id="findSourceCode">
                                    <span class="fa fa-rocket"></span>
                                </button>
                            </span>
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-5 offset-md-2 col-lg-8 offset-lg-2">
                    <div class="alert alert-success" role="alert" id="success-message">
                      <strong>Well done!</strong> We successfully fetch website results.
                    </div>
                    <div class="alert alert-danger" role="alert" id="error-message">
                      <strong>Oh snap!</strong> This website cannot be reached.
                    </div>
                </div>
            </div>            
            <div class="row" id="results-tab">
                <div class="col-sm-6 col-md-5 offset-md-2 col-lg-8 offset-lg-2">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">                      
                      <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#html" role="tab">HTML</a>
                      </li>                      
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#javascript" role="tab">Javascripts</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#css" role="tab">CSS</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#images" role="tab">Images</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#other" role="tab">Ohter Assets</a>
                      </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div class="tab-pane active" id="html" role="tabpanel">...</div>
                      <div class="tab-pane" id="javascript" role="tabpanel">...</div>
                      <div class="tab-pane" id="css" role="tabpanel">...</div>
                      <div class="tab-pane" id="images" role="tabpanel">...</div>
                      <div class="tab-pane" id="other" role="tabpanel">...</div>
                    </div>
                </div>
            </div>
      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="resources/bootstrap/js/bootstrap.min.js"></script>
    <script src="resources/js/scripts.js"></script>
  </body>
</html>
