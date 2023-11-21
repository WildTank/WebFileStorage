const fs = require("fs");
const prompt = require("prompt-sync")({ sigint: true });

const htmlPaths = ["./index.html", "./settings.html", "./codes-archive.html", "./logs-archive.html",
"./modules-archive.html", "./news-archive.html", "./single-post.html"];
const phpPaths = ["./index.php", "./settings.php", "./codes-archive.php", "./logs-archive.php",
"./modules-archive.php", "./news-archive.php", "./single-post.php"];

const convertTo = prompt("Convert to 'PHP' or 'HTML': ");
let current, target, regex, replaceStr;

try {
  if (convertTo == "PHP") {
    current = htmlPaths;
    target = phpPaths;
    regex = /\.html/g;
    replaceStr = ".php";
  } else if (convertTo == "HTML") {
    current = phpPaths;
    target = htmlPaths;
    regex = /\.php/g;
    replaceStr = ".html";
  } else {
    console.log("Please input either of the two.");
    return 1;
  }
  for (i = 0; i < current.length; i++) {
  fs.renameSync(current[i], target[i]);
  // note: the following operations are done after changing extensions
  let codeFileString = fs.readFileSync(target[i]).toString();
  let replace = codeFileString.replace(regex, replaceStr);
  fs.writeFileSync(target[i], replace);
  console.log(`${i+1} change successful!`);
  }
} catch (ENOENT) {
  console.error("Error: Error No Entity");
  console.log(`Error Note: The extensions may already be ${convertTo} OR the files are not unanimous in extensions`);
  return 1;
}
