<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="How to download a file with PHP ">
    <meta name="Bayesean Blog" content="">
    <title>Download File</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
        </head>
<div class = "container">
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<br>
<h3>Download a file with delay timer <span class = 'glyphicon glyphicon-download-alt' aria-hidden='true'>  </span> <span class = "pull-right" ><a class="btn btn-sm btn-success" href="index.php"><span class='glyphicon glyphicon-home' aria-hidden='true'></span></a></span></h3>
<hr>
<form class="form-horizontal" form method="POST" action="download.php">
         <div class="form-group">
        <label for="selectid"></label>
        <!--Add onchange event -->
        <select class="form-control" required="required" name = "selectid" onchange = "this.form.submit();">
        <option>Select a File to Download</option>
 

 <?php 

 // Get the filenames that are in the Directory and  parse them into the drop down list.
      

       foreach(glob(dirname(__FILE__) . '/Files/*') as $filename){
       $filename = basename($filename);
       echo "<option value='" . $filename . "'>".$filename."</option>";
    }
?>
  </select>

  </div>
  <br>
  <hr>
  </form>
    </div>

</div>
</div>
</html>


    
