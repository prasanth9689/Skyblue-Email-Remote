/* 
Google Drive API:
Demonstration to:
1. upload 
2. delete 
3. create public URL of a file.

required npm package: googleapis
*/
const { google } = require('googleapis');
const path = require('path');
const fs = require('fs');

const CLIENT_ID = '601478269900-6ecnnqi4coebs0kb4o6evo3g8pou9qil.apps.googleusercontent.com';
const CLIENT_SECRET = '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';
const REDIRECT_URI = 'https://developers.google.com/oauthplayground';

const REFRESH_TOKEN = '1//04HU4cLYqGhppCgYIARAAGAQSNwF-L9Ir3V08OSiAaNhTixw5DICE1j-u3rN1FDdiSk8TQg5UgbqlLB9hHgPKTkcH688KqOGqY-4';

const oauth2Client = new google.auth.OAuth2(
  CLIENT_ID,
  CLIENT_SECRET,
  REDIRECT_URI
);

oauth2Client.setCredentials({ refresh_token: REFRESH_TOKEN });

const drive = google.drive({
  version: 'v3',
  auth: oauth2Client,
});



/* 
filepath which needs to be uploaded
Note: Assumes example.jpg file is in root directory, 
though this can be any filePath
*/

const currentDate = new Date();

// Convert to ISO string
let isoString = currentDate.toISOString();

// Extract parts of the date
let year = isoString.substring(0, 4);
let month = isoString.substring(5, 7);
let day = isoString.substring(8, 10);

// Format in MM-DD-YYYY
let mDate = `${day}-${month}-${year}`;

const filePath = path.join(__dirname, 'backup_file_'+mDate+'.tar.gz');



async function uploadFile() {
  try {
    const response = await drive.files.create({
      requestBody: {
        name: 'backup_file_'+mDate+'.tar.gz', //This can be name of your choice
        mimeType: 'application/zip',
      },
      media: {
        mimeType: 'application/zip',
        body: fs.createReadStream(filePath),
      },
    });

    console.log(response.data);
  } catch (error) {
    console.log(error.message);
  }
}

// uploadFile();

async function deleteFile() {
  try {
    const response = await drive.files.delete({
      fileId: 'YOUR FILE ID',
    });
    console.log(response.data, response.status);
  } catch (error) {
    console.log(error.message);
  }
}

// deleteFile();

async function generatePublicUrl() {
  try {
    const fileId = 'YOUR FILE ID';
    await drive.permissions.create({
      fileId: fileId,
      requestBody: {
        role: 'reader',
        type: 'anyone',
      },
    });

    /* 
    webViewLink: View the file in browser
    webContentLink: Direct download link 
    */
    const result = await drive.files.get({
      fileId: fileId,
      fields: 'webViewLink, webContentLink',
    });
    console.log(result.data);
  } catch (error) {
    console.log(error.message);
  }
}

uploadFile();

// generatePublicUrl();
