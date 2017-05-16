<?php
session_start();
 $SelectFile    = "";

if ( !empty($_POST)) {
      //Reset Value
      $SelectFile    = "";
      $SelectFile = $_POST['selectid'];
      $_SESSION['SelectFile'] = $_POST['selectid'];
            }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Download File - Downloads files from Web Server</title>
    <meta name="description" content="Bayesean Blog Downloading a File">
       <link href="css/bootstrap.min.css" rel="stylesheet">
      </head>

        <div id = "act" style = "display:none;"></div>
      </form>
    </div>
    <script type = "text/javascript">
    $("#myId").removeClass("hidden");
    $("#myimg").removeClass("hidden");
    </Script>

    <div class="container">
      <div class=" col-xs-6 col-md-6 col-lg-6">
        <div class="row">
          <!--<div class="row">-->
          <p><a class="btn btn-sm btn-success" href="index.php"><span class='glyphicon glyphicon-home' aria-hidden='true'></span></a></p>
          <h1 class="page-header"> Download <span class ='glyphicon glyphicon-download-alt' aria-hidden='true'></span><small> <span class="label label-warning" style="float:right"><?php echo " ".$SelectFile." " ?>
           </span></small></h1>
                <div class = "progress">
              <div class = "progress-bar" id ="progress-bar" role = "progressbar" aria-valuenow ="70" aria-valuemin ="0" aria-valuemax = "100"
                style= "width:0%;">
              </div>
            </div>

            <div class= "hidden" id = "myId" >
              <div class = text-center>
                <p><a class="btn btn-lg btn-success"  href="download2.php"> Download <span class = 'glyphicon glyphicon-download-alt' aria-hidden='true'></span></a></p>
              </div>
            </div>
            <hr>
            <div class= "hidden" id = "myimg" >
              <p><img  class ="img-responsive"  src="img/downarrow.png"  width = "95px" height= "80px"alt "Chania"><p>
              </div>

            </div>
            </div> <!-- /bootstrap sizing -->
            </div> <!-- /container -->
            <!-- start the progressbar;-->
              <script type = "text/javascript">
            var w = document.getElementById("progress-bar").style.width;
            var res = w.substr(0,(w.length)-1);
            if ( res  > 50) {}
            else{
          //  var filename = <php echo " ".$SelectFile." " ?>;
            var varinfo  = " Download will start in ";
            var varinfo2 = " Click Download Button to Download the File";
            // set the time before next step in  X 0.1 second
            var stepdelay = 100;
            //set the increments to step by
            var stepby = 1;
            var stepdown = 1;
            var width = 0;
            var dcount = 150;

            var Id = setInterval(ProgressSteps,stepdelay);
            function ProgressSteps(){
            if (width > 99){
            $("#myId").removeClass("hidden");
            $("#myimg").removeClass("hidden");
            document.getElementById("progress-bar").innerHTML =varinfo2;
            return;
            window.close();
            clearinterval(Id);
            }else{
            width = width + stepby;
            dcount = 100 - width;
            document.getElementById("progress-bar").style.width=width+"%";
            document.getElementById("progress-bar").innerHTML =varinfo + " "+ dcount;
            }
            }
            }
            </script>

                <script src="js/jquery.js"></script>
                <script src="js/bootstrap.min.js"></script>
                    </div>
            </body>