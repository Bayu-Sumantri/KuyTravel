          <!-- partial:partials/_footer.html -->
          <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
          <script>
            document.getElementById('data-target').addEventListener('click', function() {
                // Get the target URL from the data-target attribute
                var targetUrl = this.getAttribute('data-target');

                // Redirect to the target URL
                window.location.href = targetUrl;
            });



            //foto multiple
            $(document).ready(function () {
            const fileInput = $('#formFileMultiple');
            const previewContainer = $('#preview-container');
            const fileListContainer = $('#file-list-container');
            let uploadedFiles = []; // Array to store uploaded files

            fileInput.on('change', updateFilePreview);

            function updateFilePreview() {
                const files = fileInput[0].files;

                for (const file of files) {
                    // Pengecekan apakah file sudah ada dalam array uploadedFiles
                    if (uploadedFiles.some(existingFile => existingFile.name === file.name)) {
                        // Tampilkan SweetAlert peringatan
                        Swal.fire({
                            icon: 'error',
                            // title: 'Oops...',
                            text: 'Foto nya Sama Coy!',
                        });
                    } else {
                        const previewDiv = $('<div>');

                        const image = $('<img>').attr({
                            src: URL.createObjectURL(file),
                            alt: file.name
                        });

                        const deleteButton = $('<button>').addClass('delete-button').html('&#10006;').on('click', function () {
                            deleteFile(file, previewDiv);
                        });

                        previewDiv.append(image, deleteButton);
                        previewContainer.append(previewDiv);

                        // Add the uploaded file to the array
                        uploadedFiles.push(file);
                    }
                }

                // Update the file list display
                const fileCount = uploadedFiles.length;
                fileListContainer.text('Selected Files: ' + fileCount);

                // Clear the input value to avoid duplicate detection
                fileInput.val('');

                // Log the current files to the console
                console.log('Uploaded Files:', uploadedFiles);
            }

            function deleteFile(file, previewDiv) {
                const index = uploadedFiles.indexOf(file);

                if (index !== -1) {
                    uploadedFiles.splice(index, 1); // Remove the file from the array
                    previewDiv.remove();

                    // Update the input value after file deletion
                    const fileCount = uploadedFiles.length;
                    fileListContainer.text('Selected Files: ' + fileCount);

                    // Log the current files to the console
                    console.log('Uploaded Files:', uploadedFiles);
                }
            }
        });

        </script>

          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
          </footer>
