const fs = require("fs");
const phpPaths = ["./index.php", "./settings.php", "./codes-archive.php", "./logs-archive.php",
"./modules-archive.php", "./news-archive.php", "./single-post.php"];

const replaceText = function (regex, str) {
    for (let i = 0; i < phpPaths.length; i++) {
        let codeFileString = fs.readFileSync(phpPaths[i]).toString();
        let replace = codeFileString.replace(regex, str);
        fs.writeFileSync(phpPaths[i], replace);
        console.log('Successfull!')
    }    
}
// <img src="./images/SearchIcon.svg" alt="Search" />
// <img src="./images/PageListIcon.svg" alt="Page List" />
// <img src="./images/Settings.svg" alt="Page List" />
const regex = [
    /<img src="\.\/images\/SearchIcon\.svg" alt=".*" \/>/g,
    /<img src="\.\/images\/PageListIcon\.svg" alt=".*" \/>/g,
    /<img src="\.\/images\/Settings\.svg" alt=".*" \/>/g
];
const replace = [
    "<?php include_once './images/SearchIcon.svg'?>",
    "<?php include_once './images/PageListIcon.svg'?>",
    "<?php include_once './images/Settings.svg'?>"
];

for (let i = 0; i < regex.length; i++) {
    replaceText(regex[i], replace[i]);
}