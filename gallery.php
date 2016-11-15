<!Doctype html>
<html>
<head>
  <title>Artlack.com</title>

  <meta charset="utf-8" />
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script>!window.jQuery && document.write('<script src="jquery-3.1.1.min.js"><\/script>')</script>

  <link rel="stylesheet" type="text/css" href="style.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- link to social media icons-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

</head>
<body>

      <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="" class="navbar-brand" id="logo"><img src="images/logo.jpg" id="logoImage"/></a>
          </div>

          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.php">Home</a></li>
              <li class="active"><a href="gallery.php">Gallery</a></li>
              <li><a href="albums.php">Albums</a></li>
              <li><a href="contact.php">Contact</a></li>
            </ul>

            <ul class="nav navbar-nav social">
                <li><a href="#"><i class="fa fa-lg fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-lg fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-lg fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-lg fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="clear"></div>

      <div id="mainDivGallery">
        <div class="row">
          <div id="popBackground"></div>
          <div id="imagePadding"><div class="popImage"><img id="abc" /></div></div>
        </div>

        <div id="imageWrapper">
          <div id="spanImage"></div>
        </div>

      </div>

      <script>

//Use ajax to load all images (jpe?g|png|gif) from a folder to a page called Gallery
//images folder should be in the same folder as the file
      var folder = "images/";
      $.ajax({
          url : folder,
          success: function (data) {
              $(data).find("a").attr("href", function (i, val) {
                  if( val.match(/\.(jpe?g|png|gif)$/) ) {

// Get image size with JavaScript from src(modern browsers, IE9+ )
/*                      var source = 'http://localhost/artlack_website/' + folder + val;
                      var ratio = getSize(source);
                      function getSize(s){
                        var img = new Image();
                        img.src = s;
                        img.onload;
                        var h1 = img.height;
                        var w1 = img.width;
                        var r1 = (h1/w1);
                        return r1;
                      };
*/
// create 'img' element using JS and dynamically add image source and class
                      var imgSrc = document.createElement('img');
                      imgSrc.src= folder + val;
                      imgSrc.className = 'imageThumbnails';

//                      $("#spanImage").append( "<img src='"+ folder + val +"' class='imageThumbnails imageThumbnails2'>");
// append image to the div
                      $("#spanImage").append(imgSrc);
                  }
              });
          }
      });

// pop up image on click
// Event (click) binding on dynamically created elements
        $(document).on("click",".imageThumbnails",function() {

            var imageName = $(this).attr("src");
            var imageUrl = 'http://localhost/artlack_website/' + imageName;

            var img = new Image();
            img.src = imageUrl;
            img.onload;
            var h = img.height;
            var w = img.width;


            if (w > h) {
              imageHeight = '500px';
              $("#imagePadding").removeClass("col-sm-offset-4");
              $("#imagePadding").addClass("col-sm-offset-2");
              $(".popImage").css("top", "100px");
            } else {
              imageHeight = '570px';
              $("#imagePadding").removeClass("col-sm-offset-2");
              $("#imagePadding").addClass("col-sm-offset-4");
              $(".popImage").css("top", "70px");
            }


//popup a image on click with dark background
            $("#popBackground").css({'display':'block'});
            $(".popImage").css({'display':'block'});
            $("#abc").attr({src: imageUrl, height: imageHeight}).css("max-width", "800px");

        });


/* To OPEN the image in a new window
            window.open('http://localhost/artlack_website/images/lake.jpg');
*/


        $("#popBackground").click(function() {
            $("#popBackground").fadeOut();
            $(".popImage").fadeOut();
        });

        $(document).keyup(function(e) {
          if (e.keyCode == 27) {
            $("#popBackground").hide();
            $(".popImage").hide();
          }
        });

      </script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>
