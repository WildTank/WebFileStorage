<?php
include_once './db-conn.php';
include_once './session.php';;
?>
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
    <link rel="stylesheet" type="text/css" href="./style/media_queries/header-nav-mq.css" />
    <link rel="stylesheet" type="text/css" href="./style/media_queries/archive-template-mq.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Jost"
    />
    <script src="./js/header-nav.js" defer></script>
    <title>Devaur - News</title>
    <?php
    include_once './theme.php'; // handles theme
    ?>
  </head>
  <body>
    <header>
      <nav class="is-flex">
        <a href="index.php"><h1 id="web-title"><?php echo $_SESSION['header_label'] ?></h1></a>
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
        <h1>News and Announcements</h1>
        <?php
        $news_query = "SELECT * FROM NewsAnnouncements";
        $result = $conn->query($news_query);
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo '<div class="archive-item-wrapper">';
            echo '<img src="./images/NewsImage.png" alt="Item Image" />';
            echo '<div class="archive-item-text">';
            echo '<p> Article No: ' . $row['issue_number'] . '</p>';
            echo '<div class="archive-item-description">';
            echo '<p>';
            echo $row['details'];
            echo '</p>';
            echo '</div>', '</div>', '</div>';

          }
        }
        ?>
      </div>
    </main>
  </body>
</html>
