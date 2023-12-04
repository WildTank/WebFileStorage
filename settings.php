<?php 
include_once './db-conn.php';
include_once './session.php';

function validate($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);

  return $data;
}

if (isset($_POST['user_name']) && isset($_POST['user_pass'])) {
  $user_name = validate($_POST['user_name']);
  $user_pass = validate($_POST['user_pass']);
  if (empty($user_name) && empty($user_pass)) {  // handles invalid field inputs
    echo '<script>alert("Please enter a valid username and password.")</script>';
  } else {
    $accounts_query = "SELECT * FROM UserAccounts WHERE user_name='$user_name' AND user_pass='$user_pass';";
    $accounts_result = mysqli_query($conn, $accounts_query);
    if (mysqli_num_rows($accounts_result) === 1) {
      $account_row = mysqli_fetch_assoc($accounts_result);
      if ($account_row['user_name'] === $user_name && $account_row['user_pass'] === $user_pass) {
        $_SESSION['logged_in'] = true;
        $_SESSION['user_id'] = $account_row['user_id'];
        $_SESSION['user_name'] = $account_row['user_name'];
        $_SESSION['header_label'] = $_POST['user_name'] . '(' . $_SESSION['user_id'] . ')';
        $settings_query = "SELECT * FROM UserSettings WHERE user_id=$_SESSION[user_id];";
        $settings_result = mysqli_query($conn, $settings_query);
        if (mysqli_num_rows($settings_result) === 1) {
          $settings_values_row = mysqli_fetch_assoc($settings_result);
          $_SESSION['recent_news_comments'] = $settings_values_row['recent_news_comments'];
          $_SESSION['recent_uploads'] = $settings_values_row['recent_uploads'];
          $_SESSION['media_files'] = $settings_values_row['media_files'];
          $_SESSION['dark_theme'] = $settings_values_row['dark_theme'];
        } else {
          echo '<script>alert("Database Error: No settings values for this account.")</script>';
        }
      }
    } else {
      echo '<script>window.alert("Username or password incorrect.")</script>';
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="./style/general.css" />
    <link rel="stylesheet" type="text/css" href="./style/header-nav.css" />
    <link rel="stylesheet" type="text/css" href="./style/settings.css" />
    <link rel="stylesheet" type="text/css" href="./style/media_queries/header-nav-mq.css" />
    <link rel="stylesheet" type="text/css" href="./style/media_queries/settings-mq.css" />
    <script src="./js/header-nav.js" defer></script>
    <script src="./js/settings.js" defer></script>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Jost"
    /> <!-- font: Jost -->
    <title>Devaur - Settings</title>
    <script
    src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
    crossorigin="anonymous"> // jQuery </script>
    <script> // for AJAX
      $(document).ready(function() {
        const switchClassesArr = [
          "div.rec-news-comms", "div.rec-uploads", "div.media-files", "div.dark-theme"
        ];
        const switchNamesArr = [
          "recent_news_comments", "recent_uploads", "media_files", "dark_theme"
        ];
        for (let i = 0; i < switchClassesArr.length; i++) {
          $(switchClassesArr[i]).click(function () {
            let switchName = switchNamesArr[i];
            let switchValue;
            switch (switchNamesArr[i]) {
              case "recent_news_comments":
                switchValue = '<?php echo $_SESSION['recent_news_comments'];?>';
                break;
              case "recent_uploads":
                switchValue = '<?php echo $_SESSION['recent_uploads'];?>';
                break;
              case "media_files":
                switchValue = '<?php echo $_SESSION['media_files'];?>';
                break;
              case "dark_theme":
                switchValue = '<?php echo $_SESSION['dark_theme'];?>';
                break;
              default:
                alert("Something is wrong with switch names array");
            }
            $.post("switch-values.php", {
              value: switchValue,
              switch: switchName
            }, function(data) {
              console.log(data);
            });
          })
        }
        // for dark theme switch
        let currentTheme = "<?php echo $_SESSION['dark_theme'];?>";
        $("div.dark-theme").click(function() {
          let targetColor = currentTheme==="1" ? "black" : "white";
          $("*:not(input)").css("color", targetColor);
          $("#search-bar").css("color", targetColor);
          $("svg path").css("fill", targetColor);
          if (currentTheme === '1') {
            $(":root").css({
            "--dark-color-second":"#fafafa", "--dark-color-third":"#d9d9d9", "--dark-color-fourth":"#b7b7b7",
            "--shadow-color":"black"
          });
          } else {
            $(":root").css({
            "--dark-color-second":"#050505", "--dark-color-third":"#161616", "--dark-color-fourth":"#282828",
            "--shadow-color":"white"
          });
          }
          currentTheme = currentTheme==="1" ? "0" : "1";
        });
      });
    </script> 
    <?php
    include_once './theme.php'; // handles theme
    ?>
  </head>
  <body>
    <header>
      <nav class="is-flex">
        <a href="index.php"><h1 id="web-title">
          <?php echo $_SESSION['header_label']; ?>
        </h1></a>
        <div class="nav-items-container is-flex">
          <div class="search-box-wrapper is-flex">
            <input id="search-bar" type="text" placeholder="Search" />
            <button id="search-button">
              <?php include_once './images/SearchIcon.svg'?>
            </button>
          </div>
          <div class="dropdown-wrapper">
            <button class="dropdown-button" title="Archives">
              <?php include_once './images/PageListIcon.svg'?>
            </button>
            <div class="dropdown-menu hide" tool>
              <ul>
                <li>
                  <a href="news-archive.php">News</a>
                </li>
                <li>
                  <a href="logs-archive.php">Logs</a>
                </li>
                <li>
                  <a href="modules-archive.php">Modules</a>
                </li>
                <li>
                  <a href="codes-archive.php">Codes </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="dropdown-wrapper">
            <button class="dropdown-button" title="Settings">
              <?php include_once './images/Settings.svg'?>
            </button>
            <div class="dropdown-menu hide">
              <ul>
                <li>
                  <a href="settings.php">Settings</a>
                </li>
                <li>
                  <a href="https://github.com/WildTank/WebFileStorage">
                    Repository
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <div class="aside-main is-flex">
      <aside>
        <section>
          <ul class="settings-subpages">
            <li id="settings-preferences" class="subpage active-subpage">
              Preferences
            </li>
            <li id="settings-appearance" class="subpage">Appearance</li>
          </ul>
        </section>
        <section>
          <ul class="settings-subpages">
            <?php
            if ($_SESSION['logged_in']) {
              echo '<li id="settings-account" class="subpage">Account</li>';
              echo '<a href="logout.php"><li id="settings-logout">Log Out</li></a>';
            } else {
              echo '<li id="settings-login">Log In</li>';
            }
            ?>
          </ul>
        </section>
      </aside>
      <main>
        <section class="main-panel active-panel">
          <div class="main-panel-container">
            <h1>Preferences</h1>
            <div class="settings-option">
              <p>Show Recent News/Comments</p>
              <div class="switch rec-news-comms
              <?php
              if ($_SESSION['recent_news_comments'] === '1') {
                echo ' active-switch';
              }
              ?>"></div>
            </div>
            <div class="settings-option">
              <p>Show Recent Uploads</p>
              <div class="switch rec-uploads
              <?php
              if ($_SESSION['recent_uploads'] === '1') {
                echo ' active-switch';
              }
              ?>"></div>
            </div>
            <div class="settings-option">
              <p>Show Media Files</p>
              <div class="switch media-files
              <?php
              if ($_SESSION['media_files'] === '1') {
                echo ' active-switch';
              }
              ?>"></div>
            </div>
          </div>
        </section>
        <section class="main-panel">
          <div class="main-panel-container">
            <h1>Appearance</h1>
            <div class="settings-option">
              <p>Dark Theme</p>
              <div class="switch dark-theme
              <?php
              if ($_SESSION['dark_theme'] === '1') {
                echo ' active-switch';
              }
              ?>">
                <span class="slider"></span>
              </div>
            </div>
          </div>
        </section>
        <section class="main-panel">
          <div class="main-panel-container">
            <h1>Account</h1>
            <div class="settings-option">
              <p>Logged in as:</p>
              <div class="account-profile-wrapper is-flex">
                <p><?php echo $_SESSION['user_name']; ?></p>
                <img
                  id="account-profile-image"
                  class="is-circular-container"
                  src="./images/FileFrame.png"
                  alt="profile-image"
                />
              </div>
            </div>
          </div>
        </section>
      </main>
      <div class="login-form-wrapper is-absolute-center hide">
        <form id="login-form" method="POST">
          <h1>Enter Account Details</h1>
          <input type="text" id="username" name="user_name" placeholder="Username" required>
          <input type="password" id="password" name="user_pass" placeholder="Password" required>
          <button type="submit">Login</button>
        </form>
      </div>
    </div>
  </body>
</html>
