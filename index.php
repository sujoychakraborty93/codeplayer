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

<!--Need to do
1. share option for a photo on facebook, copy link etc
2. link to social media icons
3. comment on pics should be allowed
4. show all images in a folder in a page

-->


</head>
<body>

  <!-- <div class="wrapper"> -->

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
              <li class="active"><a href="">Home</a></li>
              <li><a href="gallery.php">Gallery</a></li>
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

    <!-- <div class="container">Sjoy -->
      <div class="bar" id="slide1"></div>
      <div class="parallax">
        <div class="parallax-div">
          <div class="bar" id="slide2"></div>
        </div>
      </div>
      <div class="bar" id="slide3">  </div>
      <div class="bar" id="slide4">  </div>
      <div class="bar" id="slide5">  </div>
      <div class="bar" id="slide6">  </div>

      <script>
        $(".bar").height($(window).height()*1.3);

        $(document).ready(function () {
          $('.nav li a').click(function(e) {

            $('.nav li').removeClass('active');

            var $parent = $(this).parent();
            if (!$parent.hasClass('active')) {
              $parent.addClass('active');
            }
/*            e.preventDefault(); */
          });
        });
      </script>

      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- </div> -->
  <!--</div> -->
</body>
</html>
