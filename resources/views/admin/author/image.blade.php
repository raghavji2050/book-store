@if ($author->id)
  <div class="row">
    <div class="col-md-12">
      <div class="card">
          <div class="card-header">
              <h5 class="card-title">Upload {{ $entity }} Images</h5>
          </div>
          <div class="card-body">
            <form action="{{ route('admin.uploadFile') }}" class='dropzone'></form>
            <input type="hidden" name="images" value="{{ json_encode($author->images) }}">
          </div>
      </div>
    </div>
  </div>
@endif

@if ($author->id)
  @section('styles')
    <link rel="stylesheet" type="text/css" href="/dropzone/dist/dropzone.css">
  @endsection

  @section('scripts')
    <script src="/dropzone/dist/dropzone-min.js" type="text/javascript"></script>
    <script>
      var fileList = new Array;
      var i = 0;

      Dropzone.autoDiscover = false;

      var myDropzone = new Dropzone(".dropzone",{
        maxFilesize: 2, // 2 mb
        acceptedFiles: ".jpeg,.jpg,.png,.webp",
        addRemoveLinks: true,
      });

      var images = JSON.parse(document.querySelector('input[name="images"]').getAttribute("value"));

      if (images) {
        images.forEach((image, index) => {
          var mockFile = { upload: { uuid: ++index }};
          myDropzone.displayExistingFile(mockFile, `/storage/${image.path}`);

          fileList[index] = image.path;
        });
      }

      $('.dz-message').show();

      myDropzone.on("sending", function(file, xhr, formData) {
        formData.append("_token", "{{ csrf_token() }}");
        formData.append("author_id", "{{ $author->id }}");
      });

      myDropzone.on("success", function(file, response) {
        if (response.success == 0) { // Error
          alert(response.error);
        } else {
          fileList[file.upload.uuid] = response.path;
          $('.dz-message').show();
        }
      });

      myDropzone.on("removedfile", function (file) {
          var removeFile = fileList[file.upload.uuid];

          if (removeFile) {
              $.ajax({
                  url: "{{ route('admin.removeFile') }}",
                  type: "POST",
                  data: {
                      filename: removeFile,
                      author_id:  "{{ $author->id }}"
                  },
              });
          }
      });
     </script>
  @endsection
@endif
