<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css"
              media="all" rel="stylesheet" style="text/css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
              media="all" rel="stylesheet" style="text/css">
        <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/fontawesome.min.css"
              media="all" rel="stylesheet" style="text/css"> -->

        <style>
            .main-section {
                margin: 0 auto;
                padding: 20px;
                margin-top: 100px;
                background-color: #fff;
                box-shadow: 0px 0px 20px #c1c1c1;
            }
        </style>
    </head>
    <body class="bg-info">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-11 main-section">
                    <h1>Multiple upload Images</h1>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <input type="file" id="image-1" name="file" multiple class="file"
                            data-overwrite-initial="false" data-min-file-count="2">
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"
                type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js"
                type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" 
                type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" 
                type="text/javascript"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" 
                type="text/javascript"></script>

        <script type="text/javascript">
            $("#image-1").fileinput({
                theme: 'fa',
                uploadUrl: "/image-submit",
                uploadExtraData:function(){
                    return {
                        _token:$("input[name='_token']").val()
                    };
                },

                allowedFileExtensions:['jpg', 'png', 'gif'],
                overwriteInitial:false,
                maxFileSize:2000,
                maxFileNum:8,
                slugCallBack:function(fileName){
                    return fileName.replace('(','_').replace(']','_');
                }
            });
        </script>
    </body>
</html>
