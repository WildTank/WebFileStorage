<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="./style/general.css" />
    <link rel="stylesheet" type="text/css" href="./style/header-nav.css" />
    <link rel="stylesheet" type="text/css" href="./style/settings.css" />
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
        <a href="index.php"><h1 id="web-title">DEVAUR</h1></a>
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
            <li id="settings-account" class="subpage">Account</li>
            <li id="settings-logout">Log Out</li>
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
    </div>
  </body>
</html>
