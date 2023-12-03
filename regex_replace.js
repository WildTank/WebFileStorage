const fs = require("fs");
const paths = ["./index.php", "./settings.php", "./codes-archive.php", "./logs-archive.php",
"./modules-archive.php", "./news-archive.php", "./single-post.php"];

const replaceText = function (regex, str, count) {
    for (let i = 0; i < paths.length; i++) {
        let codeFileString = fs.readFileSync(paths[i]).toString();
        let replace = codeFileString.replace(regex, str);
        fs.writeFileSync(paths[i], replace);
        console.log(`${count+1} successfull in: ${paths[i]}`);
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

let successCount = 0
for (let i = 0; i < regex.length; i++) {
    console.log(':');
    replaceText(regex[i], replace[i], successCount);
    successCount += 1;
}