
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
     
              
            <!-- #END# Basic Validation -->
            <!-- Advanced Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                       
                        <div class="body">
                            <h3> Rating </h3>
                            <br>
                            
                            <form action="ajoutRatingAction.php" method="POST" onsubmit = "verifnote();">
                                <div>
                                    <div >
                                        <input type="text"  id="nom" name="nom" >
                                        <label class="form-label">nom</label>
                                    </div>
                                  
                                </div>
                               <br>
                                <div>
                                    <div >
                                        <input type="number" onchange = "verifnote()" id="note" name="note"  >
                                        <label class="form-label">note</label>
                                        <p id="demo"></p>
                                    </div>
                                 <br>
                                </div>
                                <div>
                                    <div >
                                        <input type="number"  id="idreclamation" name="idreclamation" >
                                        <label class="form-label">idreclamation</label>
                                    </div>
                                   
                                </div>
                              
                            <br>
                            <br>
                                <div>

                                <button class="bt" type="submit">Valider</button>
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
    function verifnote()
    {
        
  // Get the value of the input field with id="numb"
  let x = document.getElementById("note").value;
  // If x is Not a Number or less than one or greater than 10
  let text;
  if (isNaN(x) || x < 0 || x > 20) {
    text = "Input not valid";
    document.getElementById("demo").innerHTML = text;
    event.preventDefault();
    return false;
  } else {
    text = "Input OK";
    document.getElementById("demo").innerHTML = text;
    return true ;
  }
 
}
    
    </script>
</body>

</html>

