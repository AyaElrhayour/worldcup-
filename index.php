<?php
require_once("./config/connection.php");
require_once("./config/functions.php");
$result = display_teams();
$groups = display_groups();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!---------------Google Fonts Link----------------->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <!---------------font awesome link----------------->
  <script src="https://kit.fontawesome.com/08a0a3c52e.js" crossorigin="anonymous"></script>
  <!--------------- css style sheet link----------------->
  <link rel="stylesheet" href="styles/style.css">
  <title>World Cup 2030</title>
</head>

<body>
  <header>
    <section class="header-container">
      <div class="header-info">
        <h1 class="header-heading ">The Greatest show on the earth</h1>
        <p class="header-text">Football is a simple game. Twenty-two men chase a ball for 90 minutes and at the end the we always win. To become a great player, you have to work hard.</p>
      </div>
      <div class="header-img">
        <img src="assets/Banner Image.png" alt="player image">
      </div>
    </section>
  </header>
  <main>
    <section class="main-container">
      <!---------------Aside section start ----------------->
      <aside class="pages">
        <div class="page">
          <a class="page-button" href="match.html">All Teams</a>
        </div>
        <div class="page">
          <select class="page-button" name="Groups" id="Groups">
            <option value="0">Groups</option>
            <?php
            while ($group = mysqli_fetch_assoc($groups)) {
            ?>
              <option value="<?php echo $group["group_id"] ?>"><?php echo $group["group_name"] ?></option>
            <?php
            }
            ?>
          </select>
        </div>
      </aside>


      <!---------------
            Blogs section start
            ----------------->
      <div class="blogs">
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <div class="blog">
            <img src="<?php echo $row["flag"]; ?>" alt="<?php echo $row["team_name"]; ?>">
          </div>
        <?php
        }
        ?>


      </div>
      <!---------------
            Blogs section end
            ----------------->
    </section>
  </main>
  <!---------------
         Main section end
    ----------------->

  <!-- button for tablet version -->
  <div class="tab">
    <button class="view-button">View All</button>
  </div>

  <!---------------
         Footer section start
    ----------------->
  <footer>
    <h2 class="footer-title">Goal</h2>
    <hr>
    <div class="footer-menu">
      <div class="menu">Contact Us</div>
      <div class="menu">Terms of Service</div>
      <div class="menu">Privacy Policy</div>
      <div class="menu">Privacy Settings</div>
      <div class="menu">Goal App</div>
      <div class="menu">Goal Live</div>
    </div>
    <div class="footer-icon">
      <div class="facebook">
        <a href=""><i class="fa-brands fa-facebook-square icon-style"></i></a>
      </div>
      <div class="instagram">
        <a href=""><i class="fa-brands fa-instagram icon-style"></i></i></a>
      </div>
      <div class="linkedin">
        <a href=""><i class="fa-brands fa-linkedin icon-style"></i></a>
      </div>

    </div>

  </footer>
  <!---------------
         Footer section End
    ----------------->
</body>

</html>