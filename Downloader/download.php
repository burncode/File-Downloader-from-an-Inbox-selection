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
    $("#myId").removeClass("d-none");
    $("#myimg").removeClass("d-none");
    </script>

    <div class="container">
      <div class=" col-md-6">
        <br>
           <p><a class="btn btn-sm btn-success" href="index.php">Back</a></p>
            <hr>
          <h2> Delayed Download Bayesean Blog  </h2>
          <p> File To Download <strong><?php echo " ".$SelectFile." " ?></strong></p>
                 <div class = "progress">
            <div class = "progress-bar bg-success" id ="progress-bar" role = "progressbar" aria-valuenow ="70" ria-valuemin ="0" aria-valuemax = "100"
              style= "width:0%;">
            </div>
            </div>
<br>
<br>
<br>
            <div class= "d-none" id = "myId" >
              <div class = text-center>
                <p><a class="btn btn-success btn-lg "  href="download2.php"  role = "button" > Download </a></p>
              </div>
            </div>
            <hr>
            <br>
            <div class= "d-none" id = "myimg" >
              <p><img  class ="img-responsive"  src="img/downarrow.png"  width = "120px" height= "160px"alt "Chania"><p>
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
            $("#myId").removeClass("d-none");
            $("#myimg").removeClass("d-none");
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