<?php 
include_once './db-conn.php';

function validate($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);

  return $data;
}

$_GLOBALS['logged_in'] = false;
$_GLOBALS['header_label'] = 'DEVAUR';
$_GLOBALS['user_id'] = 0;

if (isset($_POST['user_name']) && isset($_POST['user_pass'])) {
  $user_name = validate($_POST['user_name']);
  $user_pass = validate($_POST['user_pass']);
  if (empty($user_name) && empty($user_pass)) {  // handles invalid field inputs
    echo '<script>window.alert("Please enter a valid username and password.")</script>';
  } else {
    $query = "SELECT * FROM UserAccounts WHERE user_name='$user_name' AND user_pass='$user_pass'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) === 1) {
      $account_row = mysqli_fetch_assoc($result);
      if ($account_row['user_name'] === $user_name && $account_row['user_pass'] === $user_pass) {
        $_GLOBALS['logged_in'] = true;
        $_GLOBALS['user_id'] = $account_row['user_id'];
        $_GLOBALS['header_label'] = $_POST['user_name'] . '#' .$_GLOBALS['user_id'];
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
    />
    <title>Devaur - Settings</title>
  </head>
  <body>
    <header>
      <nav class="is-flex">
        <a href="index.php"><h1 id="web-title">
          <?php echo $_GLOBALS['header_label']; ?>
        </h1></a>
        <div class="nav-items-container is-flex">
          <div class="search-box-wrapper is-flex">
            <input id="search-bar" type="text" placeholder="Search" />
            <button id="search-button">
              <img src="./images/SearchIcon.svg" alt="Search" />
            </button>
          </div>
          <div class="dropdown-wrapper">
            <button class="dropdown-button" title="Archives">
              <img src="./images/PageListIcon.svg" alt="Page List" />
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
              <img src="./images/Settings.svg" alt="Page List" />
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
            if ($_GLOBALS['logged_in']) {
              echo '<li id="settings-account" class="subpage">Account</li>';
              echo '<li id="settings-logout">Log Out</li>';
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
              <div class="switch active-switch"></div>
            </div>
            <div class="settings-option">
              <p>Show Recent Uploads</p>
              <div class="switch active-switch"></div>
            </div>
            <div class="settings-option">
              <p>Show Recent Media Files</p>
              <div class="switch active-switch"></div>
            </div>
          </div>
        </section>
        <section class="main-panel">
          <div class="main-panel-container">
            <h1>Appearance</h1>
            <div class="settings-option">
              <p>Dark Theme</p>
              <div class="switch active-switch">
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
                <p>Guest</p>
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
          <input type="text" id="username" name="user_name" placeholder="Username" required>
          <input type="password" id="password" name="user_pass" placeholder="Password" required>
          <button type="submit">Login</button>
        </form>
      </div>
    </div>
  </body>
</html>
