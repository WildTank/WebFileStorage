const fs = require("fs");
const paths = ["./index.php", "./settings.php", "./codes-archive.php", "./logs-archive.php",
"./modules-archive.php", "./news-archive.php", "./single-post.php",
"./js/header-nav.js", "./js/settings.js",
"./session.php", "./sql/create-table.php"];

const replaceText = function (regex, str, count) {
    for (let i = 0; i < paths.length; i++) {
        let codeFileString = fs.readFileSync(paths[i]).toString();
        let replace = codeFileString.replace(regex, str);
        fs.writeFileSync(paths[i], replace);
        console.log(`${count+1} successfull in: ${paths[i]}`);
    }
}

const regex = [
    /recent-media/g,
    /recent_media/g,
    /recent media/g,
    /Recent Media/g,
    /rec-media/g
];
const replace = [
    "media-files",
    "media_files",
    "media files",
    "Media Files",
    "media-files"
];

let successCount = 0
for (let i = 0; i < regex.length; i++) {
    console.log(':');
    replaceText(regex[i], replace[i], successCount);
    successCount += 1;
}