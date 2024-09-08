const fs = require('fs');
const path = require('path');

const directoryPath = path.join(__dirname, 'public');

function deleteFilesInDirectory(directory, extension) {
    fs.readdir(directory, (err, files) => {
        if (err) {
            console.error(`Unable to scan directory: ${err}`);
            return;
        }

        files.forEach(file => {
            const filePath = path.join(directory, file);
            fs.stat(filePath, (err, stats) => {
                if (err) {
                    console.error(`Error getting stats of file ${file}: ${err}`);
                    return;
                }

                if (stats.isDirectory()) {
                    // Recur for subdirectories
                    deleteFilesInDirectory(filePath, extension);
                } else if (stats.isFile() && file.endsWith(extension)) {
                    // Delete file if it matches the extension
                    console.log(`Deleting ${filePath}`);
                    fs.unlink(filePath, err => {
                        if (err) {
                            console.error(`Error deleting file ${file}: ${err}`);
                        } else {
                            console.log(`Deleted ${filePath}`);
                        }
                    });
                }
            });
        });
    });
}

// Delete .png and .avif files
deleteFilesInDirectory(directoryPath, '.jpg');
deleteFilesInDirectory(directoryPath, '.avif');
