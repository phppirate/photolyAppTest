<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHOTO.LY</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable = no">
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <link type="text/css" rel="apple-touch-icon" href="dist/apple_icon.png"/>
  <link rel="stylesheet" href="dist/css/bootstrap.min.css"/>
</head>
<body style="padding-top: 15px">
  <div class="container">
    <div class="panel panel-primary">
      <div class="panel-heading"><h4 class="text-center">Upload a photo to Photo.ly</h4></div>
      <div class="panel-body">
        <form action="index.html">
          <div>
            <label for="photo">Photos</label>
            <input type="file" id="photo">
          </div>
          <br/>
          <div>
            <label for="caption">Add Caption</label>
            <input type="text" id="caption" placeholder="Your Caption" class="form-control">
          </div>
          <br/>
          <div>
            <label for="comment">Add Comment</label>
            <textarea id="comment" class="form-control" rows="10px"></textarea>
          </div>
          <br/>
          <div>
            <input type="submit" class="btn btn-success btn-block btn-lg" value="UPLOAD">
          </div>
        </form>
      </div>
      <div class="panel-footer">
        <h4 class="text-center">&copy; 2013 - PHOTO.LY</h4>
      </div>
    </div>
  </div>
  <script src="dist/js/bootstrap.min.js"></script>
</body>
</html>