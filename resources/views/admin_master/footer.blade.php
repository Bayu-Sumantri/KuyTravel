<!-- partial:partials/_footer.html -->
<script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
    integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
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
    const dt = new DataTransfer();

    fileInput.on('change', updateFilePreview);

    function updateFilePreview(event) {
        const files = event.target.files;

        for (const file of files) {
            if (!isFileAlreadyUploaded(file)) {
                dt.items.add(file);

                const blob = URL.createObjectURL(file);
                const previewDiv = createPreviewDiv(file, blob);

                fileListContainer.append(previewDiv);
            } else {
                Swal.fire({
                    icon: 'warning',
                    title: 'Peringatan',
                    text: 'Foto dengan nama yang sama sudah ada. Pilih foto lain atau ganti nama file.',
                });
            }
        }

        fileInput.val('');
        fileInput[0].files = dt.files;

        console.log('Uploaded Files:', dt.files);
    }

    function deleteFile(file, previewDiv) {
        const index = Array.from(dt.files).findIndex(existingFile => existingFile.name === file.name);

        if (index !== -1) {
            dt.items.remove(index);
            previewDiv.remove();

            fileInput[0].files = dt.files;

            console.log('Uploaded Files:', dt.files);
        }
    }

    previewContainer.on('drop', handleDrop);

    function handleDrop(event) {
        event.preventDefault();
        const draggedFiles = event.originalEvent.dataTransfer.files;

        updateFilePreview({ target: { files: draggedFiles } });
    }

    previewContainer.on('dragover dragenter', function (event) {
        event.preventDefault();
    });

    function createPreviewDiv(file, blob) {
        const previewDiv = $(`
            <div>
                <img src="${blob}" alt="${file.name}">
                <button class="delete-button">&#10006;</button>
            </div>
        `);

        previewDiv.find('.delete-button').on('click', function () {
            deleteFile(file, previewDiv);
        });

        return previewDiv;
    }

    function isFileAlreadyUploaded(file) {
        return Array.from(dt.files).some(existingFile => existingFile.name === file.name);
    }
});





</script>

<footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com
            2020</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a
                href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin
                templates</a> from Bootstrapdash.com</span>
    </div>
</footer>
