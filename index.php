<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Get File Size and File Extension in PHP</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

<body>
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="card">
      <div class="card-header bg">
        <h1>Get File Size and File Extension in PHP</h1>
        <p>Note: Choose file in the same directory</p>
      </div>
          <div class="card-body">
          <form method="post">
            <input type="file" name="file" class="form-control"><br>
            <input type="submit" name="submit" class="btn btn-primary" value="Get File Size and Extension">
          </form><br>
          <?php
          if(isset($_POST['submit'])){
            $filename = $_POST['file'];
            echo "<h4>Size in Bytes: </h4>". filesize($filename)." b<br>";
            echo "<h4>Size in Kilobytes: </h4>". filesize($filename)/1000 ." kb<br>";
            echo "<h4>Size in Megabytes: </h4>". filesize($filename)/1000000 ." mb<br>";

            function getExtension($filename){
              return pathinfo($filename, PATHINFO_EXTENSION);
            }
            echo "<h4>File Extension: </h4>.". getExtension($filename);
          }
          ?>
          </div>
      </div>
    </div>
  </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>