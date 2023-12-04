<?php 
include_once './db-conn.php';
include_once './session.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="./style/general.css" />
    <link rel="stylesheet" type="text/css" href="./style/header-nav.css" />
    <link rel="stylesheet" type="text/css" href="./style/index.css" />
    <link rel="stylesheet" type="text/css" href="./style/media_queries/header-nav-mq.css" />
    <link rel="stylesheet" type="text/css" href="./style/media_queries/index-mq.css" />
    <script src="./js/header-nav.js" defer></script>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Jost"
    />
    <title>Devaur - Home</title>
    <?php
    include_once './theme.php'; // handles theme
    ?>
  </head>
  <body>
    <header>
      <nav class="is-flex">
        <a href="index.php">
          <h1 id="web-title"><?php echo $_SESSION['header_label'] ?></h1>
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
    <div class="aside-main is-flex">
      <?php
      if ($_SESSION['recent_news_comments'] !== '1') {
        echo '<style>aside{display:none;}</style>';
      }
      ?>
      <aside>
      <section>
          <div class="aside-container">
            <p>WELCOME TO DEVAUR!</p>
            <ul>
              <li>
                ~ An online library that stores codes, modules, and 
                other information related to websites and development
              </li>
              <li>
                ~ This is for public and not supposed to contain private and personal info about
                anyone and anything
              </li>
            </ul>
          </div>
        </section>
        <section>
          <div class="aside-container">
            <p>LATEST NEWS</p>
            <ul>
              <?php
              $news_query = "SELECT * FROM NewsAnnouncements;";
              $result = $conn->query($news_query);
              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                  echo '<li>';
                  echo $row['details'];
                  echo '</li>';
                }
              }
              ?>
            </ul>
          </div>
        </section>
        <section>
          <div class="aside-container">
            <p>RECENT COMMENTS</p>
            <div class="recent-comments-wrapper">
              <ul>
                <?php
                $comments_query = "SELECT * FROM Comments;";
                $result = $conn->query($comments_query);
                if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                    echo '<li><div class="recent-comment">';
                    $commenter_query = "SELECT user_name FROM useraccounts WHERE user_id=$row[commenter_id]";
                    // query is goofy, must use double quotes
                    $commenter_result = $conn->query($commenter_query);
                    echo '<p>' . $commenter_result->fetch_assoc()['user_name'] . '</p>';
                    echo '<p>' . $row['comment_text'] . '</p>';
                    echo '</div></li>';
                  }
                } 
                ?>
              </ul>
            </div>
          </div>
        </section>
      </aside>
      <main>
      <?php
      $file_wrapper_comps = array(
        '<li class="file-wrapper">',
        '<img src="./images/FileFrame.png" alt="File Image" />',
        '<p>File Type</p>',
        '<p>Upload Time</p>',
        '</li>'
      );
      ?>
        <?php
          $recent_files_num = 4;
          if ($_SESSION['recent_uploads'] === '1' && $recent_files_num > 0) {
            echo '<section><div class="main-container">';
            echo '<h1>Recent Uploads</h1>';
            echo '<ul class="files-container">';
            for ($i = 0; $i < $recent_files_num; $i++) {
              foreach ($file_wrapper_comps as $component) {
                echo $component;
              }
            }
            echo '</ul></div></section>';
          }
        ?>
        <?php 
          $recent_medias_num = 6;
          if ($_SESSION['recent_media'] === '1' && $recent_medias_num > 0) {
            echo '<section><div class="main-container">';
            echo '<h1>Recent Media Files</h1>';
            echo '<ul class="files-container">';
            $media_wrapper_comps = array (
              '<li class="file-wrapper">',
              '<img src="./images/FileFrame.png" alt="File Image" />',
              '<p>Upload Time</p>',
              '</li>'
            );
            for ($i = 0; $i < $recent_medias_num; $i++) {
              foreach ($media_wrapper_comps as $component) {
                echo $component;
              }
            }
            echo '</ul></div></section>';
          }
        ?>
        <section>
          <div class="main-container">
            <?php
            echo '<h1>All Files</h1>';
            echo '<ul class="files-container">';
            $all_files_num = 8;
            if ($all_files_num > 0) {
              for ($i = 0; $i < $all_files_num; $i++) {
                foreach($file_wrapper_comps as $component) {
                  echo $component;
                }
              }
            } else {
              echo '<li class="zero-files-message">';
              echo '(*__*)???<br>_/|\_<br>&nbsp&nbsp&nbsp|<br>_/ \_';
              echo '</li>';
              echo '<li class="zero-files-message">It\'s a Barren Wasteland</li>';
            }
            echo '</ul>';
            ?>
          </div>
        </section>
      </main>
    </div>
  </body>
</html>
