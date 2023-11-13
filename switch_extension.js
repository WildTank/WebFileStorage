const fs = require("fs");
const prompt = require("prompt-sync")({ sigint: true });

const htmlPaths = ["./index.html", "./settings.html", "./codes-archive.html", "./logs-archive.html",
"./modules-archive.html", "./news-archive.html", "./single-post.html"];
const phpPath = ["./index.php", "./settings.php", "./codes-archive.php", "./logs-archive.php",
"./modules-archive.php", "./news-archive.php", "./single-post.php"];


const convertTo = prompt("Convert to 'PHP' or 'HTML': ");

try {
  if (convertTo == "PHP") {
    for (i = 0; i < htmlPaths.length; i++) {
      fs.renameSync(htmlPaths[i], phpPath[i]);
      console.log(`${i+1} Switch successful!`);
    }
  } else if (convertTo == "HTML") {
    for (i = 0; i < phpPath.length; i++) {
      fs.renameSync(phpPath[i], htmlPaths[i]);
      console.log(`${i+1} Switch successful!`);
    }
  } else {
    console.log("Please input either of the two.");
  }
} catch (ENOENT) {
  console.error("Error: Error No Entity");
  console.log(`Error Note: The extensions may already be ${convertTo} OR the files are not unanimous in extensions`);
  return 1;
}

