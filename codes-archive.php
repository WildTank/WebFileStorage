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
    <title>Devaur - Codes</title>
  </head>
  <body>
    <header>
      <nav class="is-flex">
        <a href="index.php"><h1 id="web-title"><?php echo $_SESSION['header_label'] ?></h1></a>
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
    <main>
      <?php
      $archive_item_comps = array(
        '<div class="archive-item-wrapper">',
        '<img src="./images/FileFrame.png" alt="Item Image" />',
        '<div class="archive-item-text">',
        '<p>ITEM TITLE</p>',
        '<div class="archive-item-description">',
        "<span>''</span>",
        '<p>', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex,
        esse? Quo totam optio, alias ratione exercitationem nam, harum
        tempora eaque possimus laboriosam non necessitatibus commodi,
        consectetur odio vitae perspiciatis iure ducimus! Ipsam minima,
        ullam quis iure minus sint, saepe tempora, rerum facilis vel
        recusandae nam sequi assumenda magnam consequatur sit.', '</p>',
        "<span>''</span>",
        '</div>', '</div>', '</div>'
      );
      ?>
      <div class="main-container">
        <h1>Codes and Independent Programs</h1>
        <?php
        $archives_num = 3;
        for ($i = 0; $i < $archives_num; $i++) {
          foreach ($archive_item_comps as $component) {
            echo $component;
          }
        }
        ?>
      </div>
    </main>
  </body>
</html>
