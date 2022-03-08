<!DOCTYPE html>
<html>

<head>
    <title>Printor</title>

    <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{asset('js/app.js')}}"></script>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>


</head>

<body>

    <div class="container mt-4">

        <h2 class="text-center">File Upload </h2>

        <form method="POST" enctype="multipart/form-data" id="upload-file" action="{{ route('store') }}">
            @csrf
            <div class="row">

                <div class="col-md-12">
                    <div class="form-group">
                        <input type="file" name="file" placeholder="Choose file" id="file">
                        @error('file')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                </div>
            </div>
        </form>
        <br><br><br>
        <h5>Files</h5>
        <table class="table table-striped">
            <tr>
                <th>
                    Name
                </th>
                <th>
                    Path
                </th>
                <th>
                    Page
                </th>
                <th>
                    Option
                </th>
            </tr>
            @foreach($files as $file)
            <tr>
                <td>
                    {{$file->name}}
                </td>
                <td>
                    {{$file->path}}
                </td>
                <td>
                    {{$file->page}}
                </td>
                <td>
                    <span>
                        <span class="buttons-span">
                            <a href="{{route('show-file',['id'=>$file->id])}}"
                                class="btn btn-secondary show-file" target="_blank">Show</a>
                        </span>
                        <span>
                            <a class="btn btn-danger delete-file" data-fileid="{{ $file->id }}"
                                data-filename="{{ $file->name }}">Delete</a>
                        </span>
                    </span>

                </td>
            </tr>
            @endforeach

        </table>
    </div>

    </div>
    {{$files->links()}}

    <!-- modal for delete file  -->
    <div class="modal delete-window" tabindex="-1" role="dialog" id="delete-window" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete file</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('delete-file')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <p id="delete-message"></p>
                        <input type="hidden" name='_method' value="delete">
                        <input type="hidden" name="file_id" id="file_id">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>


<script>
    $(document).ready(function ($) {
        var $deleteFile = $('.delete-file');
        var $deleteWindow = $('#delete-window');
        var $fileId = $('#file_id');
        var $deleteMessage = $('#delete-message');
        $deleteFile.on('click', function (element) {
            element.preventDefault();
            $fileId.val($(this).data('fileid'));
            var fileName = $(this).data('filename');
            $deleteMessage.text('Are you sure you want to delete ' + fileName + ' ?');
            $deleteWindow.modal('show');
        });
    });
</script>

</html>
