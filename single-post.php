<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./style/general.css" />
    <link rel="stylesheet" type="text/css" href="./style/header-nav.css" />
    <link rel="stylesheet" type="text/css" href="./style/single-post-template.css" />
    <link rel="stylesheet" type="text/css" href="./style/media_queries/header-nav-mq.css" />
    <link rel="stylesheet" type="text/css" href="./style/media_queries/single-post-template-mq.css" />
    <script src="./js/header-nav.js" defer></script>
    <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Jost"
    />
    <title>Single Post Template</title>
    <?php
    include_once './theme.php'; // handles theme
    ?>
</head>
<body>
    <header>
        <nav class="is-flex">
          <a href="index.php">
            <h1 id="web-title">DEVAUR</h1>
          </a>
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
      <main>
        <div class="main-container">
          <div class="main-wrapper">
            <div class="post-details">
              <p>Post Type: Post Title</p>
              <img src="./images/FileFrame.png" alt="File Image">
              <p>Posted By: User</p>
              <p>Post Date: Month Day, Year</p>
            </div>
            <div class="post-description">
              <p>Post Description: </p>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Eaque excepturi labore harum dolore corporis aliquid.
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
              </p>
            </div>
            <div class="post-actions">
              <img src="./images/DownloadIcon.svg" alt="Download">
              <img src="./images//EditIcon.svg" alt="Edit">
              <img src="./images/DeleteIcon.svg" alt="Delete">
            </div>
          </div>
        </div>
      </main>
</body>
</html>