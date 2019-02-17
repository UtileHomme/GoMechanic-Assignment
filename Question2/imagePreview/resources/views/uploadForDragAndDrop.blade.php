<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload File</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>

    <style>
        #drop {
            min-height: 150px;
            width: 250px;
            border: 1px solid blue;
            margin: 10px;
            padding: 10px;
        }
    </style>

    <script>
        if (window.FileReader)
        {
            var drop;
            addEventHandler(window, 'load', function()
            {
                drop = document.getElementById('drop');
                var imageArea = document.getElementById('imageArea');

                function cancel(e) {
                    if (e.preventDefault) {
                        e.preventDefault();
                    }
                    return false;
                }

                addEventHandler(drop, 'dragover', cancel);
                addEventHandler(drop, 'dragenter', cancel);

                addEventHandler(drop, 'drop', function(e) {

                    e = e || window.event;

                    if (e.preventDefault)
                    {
                        e.preventDefault();
                    }

                    var imageAreaDiv = document.getElementById('imageArea');

                    imageAreaDiv.innerHTML='';

                    var dt = e.dataTransfer;

                    var files = dt.files;

                    var file = files[0];

                    var reader = new FileReader();

                    reader.readAsDataURL(file);

                    addEventHandler(reader, 'loadend', function(e, file) {
                        var databin = reader.result;

                        document.getElementById('filesName').value = databin;


                        var img = document.createElement("img");
                        img.file = file;
                        img.src = databin;

                        img.style.height = '250px';
                        img.style.width = '250px';
                        imageArea.appendChild(img);
                    });

                });

            });
        }

        function addEventHandler(obj, evt, handler) {
            if (obj.addEventListener)
            {
                obj.addEventListener(evt, handler, false);
            }
        }
    </script>

</head>

<body>

    <div class="container">
        <div class="row">
            <br>

            <form class="form-horizontal" action="{{route('upload.filesshow')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}

                <div>
                    <div id="drop" class="col-sm-6">Drop files here.</div>
                    <div id="imageArea" class="col-sm-6"></div>
                </div>

                <input type="hidden" name="filesName" id="filesName" value="">


                <input type="submit" name="" value="Submit" class="btn btn-info">
            </form>


</body>

</html>
