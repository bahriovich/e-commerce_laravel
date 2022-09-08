<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <style type='text/css'>
    
    .borders {
        border: 4px solid #6C7293;
        margin-bottom: 15px;
    }

    .borders p {
        color: black;
        margin-top: -0.5em;
        margin-left: 10px;
        background-color: #6C7293;
        display: block;
        width: 150px;
    }
</style>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">


    <!-- Format Images loader CSS -->
    <link rel="stylesheet" href="{{asset('assets/js/jquery.imagesloader.css')}}">




    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>


    


    <!-- editor script -->
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
        <script>
             tinymce.init({
               selector: 'textarea#editor', });
        </script>

        




    <!-- W3School Stylesheet -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
    <!-- Libraries Stylesheet -->
    <link href="{{asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">




    

</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        @include('admin/sidebar')


        <!-- Content Start -->
        <div class="content">

        @include('admin/navbar')


   
        
        
        <div class="w3-container">

            <div class="w3-row">
                <a href="javascript:void(0)" onclick="openCity(event, 'London');">
                <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">Information Générale</div>
                </a>
                <a href="javascript:void(0)" onclick="openCity(event, 'Paris');">
                <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">Images</div>
                </a>
                <a href="javascript:void(0)" onclick="openCity(event, 'Tokyo');">
                <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">Prix</div>
                </a>
                <a href="javascript:void(0)" onclick="openCity(event, 'Chicago');">
                <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">Promotion</div>
                </a>
            </div>

            <div class="w3-container">                
            <form  action="/admin/produits/store" onsubmit = "return validateForm()" name="myform" method="POST" enctype="multipart/form-data" >
            {{csrf_field()}}
           <!-- @csrf  -->
            
            <fieldset>
                <div id="London" class="w3-container city" style="display:none">
                    <div class="container-fluid pt-4 px-4">
                        <div class="row g-4">
                            <div class="col-sm-12 ">
                                <div class="bg-secondary rounded h-100 p-4">
                                    <h6 class="mb-4">Basic Form</h6>
                                    <center><a href="/admin/produits" class="btn btn-outline-success m-2">tous les produits</a></center> 

                                    
                                    

                                        <div class="mb-3">
                                            <label for="" class="form-label">Nom de produit : </label>
                                            <input name="name" id="name"  class="form-control mb-3" type="text" placeholder="name" aria-label="default input example">                                
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label for="" class="form-label">Catégorie parent: </label>
                                            
                                            <select  name="category_id" id="category_id" class="form-select mb-3" aria-label="Default select example">
                                                <option selected value="0">Choose a category...</option>
                                                @foreach($categories as $categorie)
                                                <option value="{{ $categorie->id}}" >{{$categorie -> name}}</option>
                                                @endforeach
                                            </select>
                                            
                                        </div>   
                                        <div class="mb-3">
                                        <label for="" class="form-label">image principale: </label>
                                            <input name="image_p" class="form-control bg-dark" type="file" id="formFile">
                                        </div>    
                                        <div class="mb-3"> 
                                            <label for="floatingTextarea" class="form-label">description :</label>
                                            <textarea name="description" id="editor"></textarea>
                                        </div>
                                        <div class="row mb-3">
                                            <legend class="col-form-label col-sm-2 pt-0">Disponibilité : </legend>
                                            <div class="col-sm-10">
                                                <select name="disponibilite" class="form-select mb-3" aria-label="Default select example">
                                                    
                                                    <option selected="" value="1">disponible</option>
                                                    <option value="0">Non-disponible</option>
                                                </select> 

                                            </div>
                                        </div>
                                        <fieldset class="row mb-3">
                                            <legend class="col-form-label col-sm-2 pt-0">Rupture De Stock : </legend>
                                            <div class="col-sm-10">
                                                <select name="rupture_stock" class="form-select mb-3" aria-label="Default select example">
                                                    
                                                    <option selected="" value="1">En Stock</option>
                                                    <option value="0">En rupture</option>
                                                </select> 
                                            </div>
                                        </fieldset>
                                    
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>

                <div id="Paris" class="w3-container city" style="display:none">
                    <div class="container-fluid pt-4 px-4">
                        <div class="row g-4">
                            <div class="col-sm-12 ">
                                <div class="bg-secondary rounded h-100 p-4">
                                        <!--Image Upload-->
                                        <div class="row mt-3 mb-2">
                                            <div class="col-12 pr-0 text-left">
                                                <label for="Images" class="col-form-label text-nowrap"><strong>Images loader</strong></label>
                                            </div>
                                        </div>
                                        <!--Image container -->
                                        <div class="row"
                                            data-type="imagesloader"
                                            data-errorformat="Accepted file formats"
                                            data-errorsize="Maximum size accepted"
                                            data-errorduplicate="File already loaded"
                                            data-errormaxfiles="Maximum number of images you can upload"
                                            data-errorminfiles="Minimum number of images to upload"
                                            data-modifyimagetext="Modify immage">

                                            <!-- Progress bar -->
                                            <div class="col-12 order-1 mt-2">
                                                <div data-type="progress" class="progress" style="height: 25px; display:none;">
                                                    <div data-type="progressBar" class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 100%;">Load in progress...</div>
                                                </div>
                                            </div>

                                            <!-- Model -->
                                            <div data-type="image-model" class="col-4 pl-2 pr-2 pt-2" style="max-width:200px; display:none;">
                                                <div class="ratio-box text-center" data-type="image-ratio-box">
                                                    <img data-type="noimage" class="btn btn-light ratio-img img-fluid p-2 image border dashed rounded" src="{{asset('assets/img/photo-camera-gray.svg')}}" style="cursor:pointer;">
                                                        <div data-type="loading" class="img-loading" style="color:#218838; display:none;">
                                                            <span class="fa fa-2x fa-spin fa-spinner"></span>
                                                        </div>
                                                    <img data-type="preview" class="btn btn-light ratio-img img-fluid p-2 image border dashed rounded" src="" style="display: none; cursor: default;">
                                                    <span class="badge badge-pill badge-success p-2 w-50 main-tag" style="display:none;">Main</span>
                                                </div>
                                                <!-- Buttons -->
                                                <div data-type="image-buttons" class="row justify-content-center mt-2">
                                                    <button data-type="add" class="btn btn-outline-success" type="button"><span class="fa fa-camera mr-2"></span>Add</button>
                                                    <button data-type="btn-modify" type="button" class="btn btn-outline-success m-0" data-toggle="popover" data-placement="right" style="display:none;">
                                                        <span class="fa fa-pencil-alt mr-2"></span>Modify
                                                    </button>
                                                </div>
                                            </div>

                                            <!-- Popover operations -->
                                            <div data-type="popover-model" style="display:none">
                                                <div data-type="popover" class="ml-3 mr-3" style="min-width:150px;">
                                                    <div class="row">
                                                        <div class="col p-0">
                                                        <button data-operation="main" class="btn btn-block btn-success btn-sm rounded-pill" type="button"><span class="fa fa-angle-double-up mr-2"></span>Main</button>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-6 p-0 pr-1">
                                                            <button data-operation="left" class="btn btn-block btn-outline-success btn-sm rounded-pill" type="button"><span class="fa fa-angle-left mr-2"></span>Left</button>
                                                        </div>
                                                        <div class="col-6 p-0 pl-1">
                                                            <button data-operation="right" class="btn btn-block btn-outline-success btn-sm rounded-pill" type="button">Right<span class="fa fa-angle-right ml-2"></span></button>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-6 p-0 pr-1">
                                                            <button data-operation="rotateanticlockwise" class="btn btn-block btn-outline-success btn-sm rounded-pill" type="button"><span class="fas fa-undo-alt mr-2"></span>Rotate</button>
                                                        </div>
                                                        <div class="col-6 p-0 pl-1">
                                                            <button data-operation="rotateclockwise" class="btn btn-block btn-outline-success btn-sm rounded-pill" type="button">Rotate<span class="fas fa-redo-alt ml-2"></span></button>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <button data-operation="remove" class="btn btn-outline-danger btn-sm btn-block" type="button"><span class="fa fa-times mr-2"></span>Remove</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="form-group row">
                                            <div class="input-group">
                                                <!--Hidden file input for images-->
                                                <input id="files" type="file" name="filenames[]" multiple="" style="display:none;">
                                            </div>
                                        </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="Tokyo" class="w3-container city" style="display:none">
                    <div class="container-fluid pt-4 px-4" >
                        <div class="row g-4">
                            <div class="col-sm-12 ">
                                <div class="bg-secondary rounded h-100 p-4">
                                    
                                        <div class="container">
                                            <!-- Repeater Html Start -->
                                            <div id="repeater">
                                                <!-- Repeater Heading -->
                                                <div class="repeater-heading">
                                                    <h5 class="pull-left">Prix Produit</h5>
                                                    <center><button type="button" class="btn btn-primary pt-5 pull-right repeater-add-btn">Add</button></center>
                                                </div>
                                                <div class="clearfix"></div>
                                                <!-- Repeater Items -->
                                                <div class="items" data-group="test">
                                                    <!-- Repeater Content -->
                                                    <div class="item-content">
                                                        <div class="form-group">
                                                            <label for="inputEmail" class="col-lg-2 control-label">Poids</label>
                                                            <div class="col-lg-14">
                                                                <input type="text" class="form-control" id="inputName" placeholder="Kg" data-name="prix_poids">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputEmail" class="col-lg-2 control-label">Prix</label>
                                                            <div class="col-lg-14">
                                                                <input type="text" class="form-control" id="" placeholder="Euro" data-name="prix_price">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Repeater Remove Btn -->
                                                    <div class="pull-right repeater-remove-btn">
                                                        <center><button class="btn btn-danger remove-btn">Remove</button></center>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div> 

                                            </div>
                                            <!-- Repeater End -->
                                        </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    

                <div id="Chicago" class="w3-container city" style="display:none">
                    <div class="container-fluid pt-4 px-4">
                        <div class="row g-4">
                            <div class="col-sm-12 ">
                                <div class="bg-secondary rounded h-100 p-4">
                                    
                                        <div class="mb-3">
                                            <label for="" class="form-label">Minimum prix d'achat pour promotion : </label>
                                            <input class="form-control mb-3" name="min_pr_prix" type="text" placeholder="supérieur à" aria-label="default input example" >                                
                                        </div>

                                        <div class="borders">
                                            <p>Promotion</p>
                                            <div class="container">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Valeur de promotion : </label>
                                                    <input  type="" name="valeur_pr" class="form-control" id="" aria-describedby="" style="color: black ; background-color: #6C7293">
                                                </div>  
                                                
                                                <label for="" class="form-label">Type de promotion : </label>
                                                <select name="type_pr" class="form-select mb-3" aria-label="Default select example" style="color: black ; background-color: #6C7293">
                                                    <option selected="" value="1">$ (en euro)</option>
                                                    <option value="2">% (en pourcentage)</option>
                                                </select>
                                            </div>    
                                        </div>

                                        <div class="borders">
                                            <p>Dilée de promotion</p>
                                            <div class="container">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Date de début : </label>
                                                    <input class="form-control mb-3" name="d_debut" type="date" placeholder="" aria-label="" style="color: black ; background-color: #6C7293">                                
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Date de fin : </label>
                                                    <input class="form-control mb-3" name="d_fin" type="date" placeholder="" aria-label="" style="color: black ; background-color: #6C7293">                                
                                                </div>
                                            </div>    
                                        </div>    
      
                                </div> 
                            </div>
                        </div>
                    </div>  
                </div>
                    
                <center> <button type="submit" class="btn btn-outline-success m-2">Submit</button> </center>
                <fieldset>    
            </form>    
            </div>
        </div>






            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                            <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>






        

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets/lib/chart/chart.min.js')}}"></script>
    <script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('assets/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>  
    <script src="{{asset('assets/js/repeater.js')}}"></script>

                <script>
                    $(function(){

                        $("#repeater").createRepeater();

                        });
                </script>
<!--
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
             -->



        <!-- texteditor Javascript -->        
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js" integrity="sha512-BmM0/BQlqh02wuK5Gz9yrbe7VyIVwOzD1o40yi1IsTjriX/NGF37NyXHfmFzIlMmoSIBXgqDiG1VNU6kB5dBbA==" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <!-- Template Javascript -->
    <script src="{{asset('assets/js/main.js')}}"></script>





    
        <script>
            function openCity(evt, cityName) {
            var i, x, tablinks;
            x = document.getElementsByClassName("city");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < x.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" w3-border-red", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.firstElementChild.className += " w3-border-red";
            }
        </script>




        







    <!-- Images loader -->
    <script src="{{asset('assets/js/jquery.imagesloader-1.0.1.js')}}"></script>

  <!-- Custom javascript -->
  <script type="text/javascript">

    // Ready
    $(document).ready(function () {

      //Image loader var to use when you need a function from object
      var auctionImages = null;

      // Create image loader plugin
      var imagesloader = $('[data-type=imagesloader]').imagesloader({
        maxFiles: 4
        , minSelect: 1
        , imagesToLoad: auctionImages
      });

      //Form
      $frm = $('#frm');

      // Form submit
      $frm.submit(function (e) {

        var $form = $(this);

        var files = imagesloader.data('format.imagesloader').AttachmentArray;

        var il = imagesloader.data('format.imagesloader');

        if (il.CheckValidity())
          alert('Upload ' + files.length + ' files');        

        e.preventDefault();
        e.stopPropagation();
      });

    });

  </script>


<script type = "text/javascript">
         function validateForm()  {
            var u = document.getElementById("name").value;
            var c = document.getElementById("categorie_id").value;
            let p = document.getElementById("poids").value;
            let pr = document.getElementById("prix").value; 

             if(u== "") {
                 alert("Please enter your name");
                 return false;
             }
             if(c== "") {
                 alert("Please enter your categorie");
                 return false;
             } 
             
             if(isNaN(p) || p < 1 || p > 50) {
                 alert("please enter a number to your poids");
                 return false;
             } 
             
             if(isNaN(pr) || pr < 1 || pr > 50) {
                 alert("please enter a number to your prix");
                 return false;
             }


             alert("All datas are valid!, send it to the server!")

             return true;
         }
      </script>


</body>

</html>