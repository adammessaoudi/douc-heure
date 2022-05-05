
<?php 
include_once "../layout/Header.php";
?>

<style>

.content {
  max-width: 500px;
  margin: auto;
  margin-top : 200px;
  padding: 10px;
}
</style>
 <section class="content">
        <div class="container-fluid">
            <div class="block-header">
               
            </div>
              
            <!-- #END# Basic Validation -->
            <!-- Advanced Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                      
                        <div class="body">
                        <h3> Reclamation </h3>
                            <br>
                            <form action="ajoutReclamationAction.php" method="POST" onsubmit = "verif()">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" id="nom" name="nom" onchange = "verif1()" >
                                        <label class="form-label">nom</label>
                                        <p id = "errornom" > </p>
                                    </div>
                             
                                </div>
                               <br>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control"id="description"  name="description" onchange = "verif2()">
                                        <label class="form-label">description</label>
                                        <p id = "errordescription" > </p>

                                    </div>
                                    
                                </div>
                                <br>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="email" class="form-control" id="email" name="email" onchange = "verif3()">
                                        <label class="form-label">email</label>
                                        <p id = "erroremail" > </p>

                                    </div>
                                   
                                </div>
                              
                            <br>
                                <div>

<button class="bt"  type="submit">Valider</button>
</div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Advanced Validation -->
           
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Jquery Validation Plugin Css -->
    <script src="../plugins/jquery-validation/jquery.validate.js"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="../plugins/jquery-steps/jquery.steps.js"></script>

    <!-- Sweet Alert Plugin Js -->
    <script src="../plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="../js/admin.js"></script>
    <script src="../js/pages/forms/form-validation.js"></script>

    <!-- Demo Js -->
    <script src="../js/demo.js"></script>
    <script>
        function verif1()
        {
            // Get the value of the input field with id="numb"
  let x = document.getElementById("nom").value;
 

  // If x is Not a Number or less than one or greater than 10
  let text;
  if ( x == "") {
    text = "Input not valid";
    document.getElementById("errornom").innerHTML = text;
    event.preventDefault();
    //return false;
  } else {
    text = "Input OK";
    document.getElementById("errornom").innerHTML = text;
   // return true ;
  }
}
function verif2(){
    let y = document.getElementById("description").value;
  let text1;
  if ( y == "") {
    text1 = "Input not valid";
    document.getElementById("errordescription").innerHTML = text1;
    event.preventDefault();
    //return false;
  } else {
    text1 = "Input OK";
    document.getElementById("errordescription").innerHTML = text1;
   // return true ;
  }
}
function verif3(){
    let z = document.getElementById("email").value;

  let text2;
  if ( z == "") {
    text2 = "Input not valid";
    document.getElementById("erroremail").innerHTML = text2;
    event.preventDefault();
    //return false;
  } else {
    text2 = "Input OK";
    document.getElementById("erroremail").innerHTML = text2;
    //return true ;
  }

        }
        function verif()
        {
            verif1();
            verif2();
            verif3();
        }
    </script>


</body>

</html>