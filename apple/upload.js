const fileForm = document.querySelector('#file-form');
const fileInput = document.querySelector('#file-input');
const downloadLinkContainer = document.querySelector('#download-link-container');

fileForm.addEventListener('submit', (event) => {
  event.preventDefault();

  const file = fileInput.files[0];
  const formData = new FormData();
  formData.append('file', file);

  fetch('/upload.php', {
    method: 'POST',
    body: formData
  })
  .then(response => response.json())
  .then(data => {
    const downloadLink = document.createElement('a');
    downloadLink.setAttribute('href', data.file_url);
    downloadLink.setAttribute('download', data.file_name);
    downloadLink.textContent = 'Download file';
    downloadLinkContainer.appendChild(downloadLink);
  })
  .catch(error => console.error(error));
});
