<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload File</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/dropzone.js') }}"></script>


    <script>

        $(document).ready(function(){


            $('#imageShow').hide();

            $('input[type="file"]').change(function(e){
                $('#imageShow').show();

            });
        });


    </script>


    <script>



        function imagePreview(event)
        {

            var reader = new FileReader();

            reader.onload = function()
            {

                var imageShow = document.getElementById('imageShow');

                console.log(reader.result);

                imageShow.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }

    </script>

</head>
<body>

    <div class="container">
        <div class="row">
            <br>
            <form class="form-horizontal" action="{{route('upload.files')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="file" name="file" value="" onchange="imagePreview(event)" id="uploadFile"> <br>

                <img id="imageShow" width="400px" height="400px;">
                <br>
                <br>

                <input type="submit" name="" value="Submit" class="btn btn-info">
            </form>
            <br>




        </div>

    </body>
    </html>
