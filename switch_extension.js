const fs = require("fs");
const prompt = require("prompt-sync")({ sigint: true });

const htmlPaths = ["./index.html", "./settings.html", "./codes-archive.html", "./logs-archive.html",
"./modules-archive.html", "./news-archive.html", "./single-post.html"];
const phpPaths = ["./index.php", "./settings.php", "./codes-archive.php", "./logs-archive.php",
"./modules-archive.php", "./news-archive.php", "./single-post.php"];


const convertTo = prompt("Convert to 'PHP' or 'HTML': ");

try {
  if (convertTo == "PHP") {
    for (i = 0; i < htmlPaths.length; i++) {
      fs.renameSync(htmlPaths[i], phpPaths[i]);
      console.log(`${i+1} Switch successful!`);
    }
  } else if (convertTo == "HTML") {
    for (i = 0; i < phpPaths.length; i++) {
      fs.renameSync(phpPaths[i], htmlPaths[i]);
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

// replaces href links of html code
if (convertTo == "PHP") {
  const regex = /\.html/g;
  for (i = 0; i < htmlPaths.length; i++) {
    let codeFileString = fs.readFileSync(phpPaths[i]).toString();
    let commitReplace = codeFileString.replace(regex, ".php");
    fs.writeFileSync(phpPaths[i], commitReplace);
  }
} else if (convertTo == "HTML") {
  const regex = /\.php/g;
  for (i = 0; i < htmlPaths.length; i++) {
    let codeFileString = fs.readFileSync(htmlPaths[i]).toString();
    let commitReplace = codeFileString.replace(regex, ".html");
    fs.writeFileSync(htmlPaths[i], commitReplace);
  }
}