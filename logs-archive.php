<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="./style/general.css" />
    <link rel="stylesheet" type="text/css" href="./style/header-nav.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="./style/archive-template.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Jost"
    />
    <script src="./js/header-nav.js" defer></script>
    <title>Devaur - Logs</title>
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
                <li><a href="news-archive.php">News</a></li>
                <li><a href="logs-archive.php">Logs</a></li>
                <li><a href="modules-archive.php">Modules</a></li>
                <li><a href="codes-archive.php">Codes </a></li>
              </ul>
            </div>
          </div>
          <div class="dropdown-wrapper">
            <button class="dropdown-button" title="Settings">
              <img src="./images/Settings.svg" alt="Page List" />
            </button>
            <div class="dropdown-menu hide">
              <ul>
                <li><a href="settings.php">Settings</a></li>
                <li>
                  <a href="https://github.com/WildTank/WebFileStorage"
                    >Repository</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <div class="main-container">
        <h1>Logs and Changes</h1>
        <div class="archive-item-wrapper log-entry">
          <img src="./images/FileFrame.png" alt="Item Image" />
          <div class="archive-item-text">
            <p>LOG ENTRY TITLE</p>
            <div class="archive-item-description">
              <span>''</span>
              <ul>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Rem nisi eos rerum quibusdam</li>
                <li>Aspernatur officia consequatur eum asperiores</li>
              </ul>
              <span>''</span>
            </div>
          </div>
        </div>
        <div class="archive-item-wrapper log-entry">
          <img src="./images/FileFrame.png" alt="Item Image" />
          <div class="archive-item-text">
            <p>LOG ENTRY TITLE</p>
            <div class="archive-item-description">
              <span>''</span>
              <ul>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Rem nisi eos rerum quibusdam</li>
                <li>Aspernatur officia consequatur eum asperiores</li>
                <li>Itaque eveniet deserunt at nam</li>
                <li>Laborum quos voluptatibus obcaecati? Quas</li>
              </ul>
              <span>''</span>
            </div>
          </div>
        </div>
        <div class="archive-item-wrapper log-entry">
          <img src="./images/FileFrame.png" alt="Item Image" />
          <div class="archive-item-text">
            <p>LOG ENTRY TITLE</p>
            <div class="archive-item-description">
              <span>''</span>
              <ul>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Rem nisi eos rerum quibusdam</li>
                <li>Aspernatur officia consequatur eum asperiores</li>
                <li>Itaque eveniet deserunt at nam</li>
                <li>Laborum quos voluptatibus obcaecati? Quas</li>
                <li>Lorem, ipsum dolor.</li>
              </ul>
              <span>''</span>
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
