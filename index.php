<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="./style/general.css" />
    <link rel="stylesheet" type="text/css" href="./style/header-nav.css" />
    <link rel="stylesheet" type="text/css" href="./style/index.css" />
    <script src="./js/header-nav.js" defer></script>
    <script src="./js/search.js" defer></script>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Jost"
    />
    <title>Devaur - Home</title>
  </head>
  <body>
    <header>
      <nav class="is-flex">
        <a href="index.php">
          <h1 id="web-title">DEVAUR</h1>
        </a> <!-- temporarily changed -->
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
                <li><a href="news-archive.php
                ">News</a></li>
                <li><a href="logs-archive.php
                ">Logs</a></li>
                <li><a href="modules-archive.php
                ">Modules</a></li>
                <li><a href="codes-archive.php
                ">Codes </a></li>
              </ul>
            </div>
          </div>
          <div class="dropdown-wrapper">
            <button class="dropdown-button" title="Settings">
              <img src="./images/Settings.svg" alt="Page List" />
            </button>
            <div class="dropdown-menu hide">
              <ul>
                <li><a href="settings.php
                ">Settings</a></li>
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
    <div class="aside-main is-flex">
      <aside>
        <section>
          <div class="aside-container">
            <p>WELCOME TO DEVAUR!</p>
            <ul>
              <li>
                ~ An online library that stores files, codes and modules, and 
                other information related to websites and development
              </li>
              <li>
                ~ Is not supposed to contain private and personal info about
                anyone and anything
              </li>
            </ul>
          </div>
        </section>
        <section>
          <div class="aside-container">
            <p>LATEST NEWS</p>
            <ul>
              <li>
                ~ Newly created the website as a way to store files, and both
                independent and dependent codes
              </li>
            </ul>
          </div>
        </section>
        <section>
          <div class="aside-container">
            <p>RECENT COMMENTS</p>
            <div class="recent-comments-wrapper">
              <ul>
                <li>
                  <div class="recent-comment">
                    <p>Guest</p>
                    <p>Lorem ipsum dolor sit amet.</p>
                  </div>
                </li>
                <li>
                  <div class="recent-comment">
                    <p>User</p>
                    <p>Quia ex at atque odit.</p>
                  </div>
                </li>
                <li>
                  <div class="recent-comment">
                    <p>Anonymous</p>
                    <p>Odio aspernatur repellendus excepturi repudiandae!</p>
                  </div>
                </li>
                <li>
                  <div class="recent-comment">
                    <p>Anon</p>
                    <p>Soluta nemo labore temporibus dolorem.</p>
                  </div>
                </li>
                <li>
                  <div class="recent-comment">
                    <p>Owner</p>
                    <p>Ducimus nulla provident tempora deleniti!</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </section>
      </aside>
      <main>
        <section>
          <div class="main-container">
            <h1>Recent Uploads</h1>
            <ul class="files-container">
              <li class="file-wrapper">
                <img src="./images/FileFrame.png" alt="File Image" />
                <p>File Type</p>
                <p>Upload Time</p>
              </li>
              <li class="file-wrapper">
                <img src="./images/FileFrame.png" alt="File Image" />
                <p>File Type</p>
                <p>Upload Time</p>
              </li>
              <li class="file-wrapper">
                <img src="./images/FileFrame.png" alt="File Image" />
                <p>File Type</p>
                <p>Upload Time</p>
              </li>
              <li class="file-wrapper">
                <img src="./images/FileFrame.png" alt="File Image" />
                <p>File Type</p>
                <p>Upload Time</p>
              </li>
              <li class="file-wrapper">
                <img src="./images/FileFrame.png" alt="File Image" />
                <p>File Type</p>
                <p>Upload Time</p>
              </li>
            </ul>
          </div>
        </section>
        <section>
          <div class="main-container">
            <h1>Recent Media Files</h1>
            <ul class="files-container">
              <li class="file-wrapper">
                <img src="./images/FileFrame.png" alt="File Image" />
                <p>Upload Time</p>
              </li>
              <li class="file-wrapper">
                <img src="./images/FileFrame.png" alt="File Image" />
                <p>Upload Time</p>
              </li>
              <li class="file-wrapper">
                <img src="./images/FileFrame.png" alt="File Image" />
                <p>Upload Time</p>
              </li>
              <li class="file-wrapper">
                <img src="./images/FileFrame.png" alt="File Image" />
                <p>Upload Time</p>
              </li>
              <li class="file-wrapper">
                <img src="./images/FileFrame.png" alt="File Image" />
                <p>Upload Time</p>
              </li>
              <li class="file-wrapper">
                <img src="./images/FileFrame.png" alt="File Image" />
                <p>Upload Time</p>
              </li>
            </ul>
          </div>
        </section>
        <section>
          <div class="main-container">
            <h1>All Files (Non-Media)</h1>
            <ul class="files-container">
              <li class="file-wrapper">
                <img src="./images/FileFrame.png" alt="File Image" />
                <p>File Type</p>
                <p>Upload Time</p>
              </li>
              <li class="file-wrapper">
                <img src="./images/FileFrame.png" alt="File Image" />
                <p>File Type</p>
                <p>Upload Time</p>
              </li>
              <li class="file-wrapper">
                <img src="./images/FileFrame.png" alt="File Image" />
                <p>File Type</p>
                <p>Upload Time</p>
              </li>
              <li class="file-wrapper">
                <img src="./images/FileFrame.png" alt="File Image" />
                <p>File Type</p>
                <p>Upload Time</p>
              </li>
              <li class="file-wrapper">
                <img src="./images/FileFrame.png" alt="File Image" />
                <p>File Type</p>
                <p>Upload Time</p>
              </li>
              <li class="file-wrapper">
                <img src="./images/FileFrame.png" alt="File Image" />
                <p>File Type</p>
                <p>Upload Time</p>
              </li>
              <li class="file-wrapper">
                <img src="./images/FileFrame.png" alt="File Image" />
                <p>File Type</p>
                <p>Upload Time</p>
              </li>
              <li class="file-wrapper">
                <img src="./images/FileFrame.png" alt="File Image" />
                <p>File Type</p>
                <p>Upload Time</p>
              </li>
            </ul>
          </div>
        </section>
      </main>
    </div>
  </body>
</html>