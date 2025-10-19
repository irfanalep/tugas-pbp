<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>mywebsite</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../style/style.css" type="text/css" rel="stylesheet" />
  </head>

  <body>
    <div id="container">
      <div id="header">
        <h1>PERTEMUAN I -- <br>SISTEM PAKAR</h1>
        
      </div>

      <div id="sidebar">
        <h3>navigasi</h3>
        <ul id="navmenu">
          <li><a href="index.php" class="selected">profil</a></li>
          <li><a href="?module=galeri#pos">galeri</a></li>
          <li><a href="?module=jadwal#pos">jadwal kuliah</a></li>
        </ul>
      </div>

      <div id="page">
        <?php if (isset($_GET['module']))
        include "konten/$_GET[module].php";
      else 
        include "konten/home.php";?>
      </div>
      <div id="clear"></div>

      <div id="footer">
        <p>&copy; 2010</p>
      </div>
    </div>
  </body>
</html>
