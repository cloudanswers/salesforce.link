<html>
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" />
    <meta name="cf-2fa-verify" content="mJRAlybecw78usDxPLpJ" />
  </head>
  <body>
    <div id="body" class="container"><?php include("README.md"); ?></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/showdown/1.7.4/showdown.min.js"></script>
    <script>
      var converter = new showdown.Converter();
      var e = document.getElementById('body');
      e.innerHTML = converter.makeHtml(e.innerHTML);
    </script>
  </body>
</html>
