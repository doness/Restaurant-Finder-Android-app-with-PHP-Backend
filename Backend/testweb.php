<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>File Uploader</title>
    <link href="css/basic.css" type="text/css" rel="stylesheet" />
    <style>
        /* Logo */
        .header {
            background: #247201 url(http://filamentgroup.com/images/headerbg-new.jpg) no-repeat bottom left;
        }
        #fg-logo {
            text-indent: -9999px;
            margin: 0 auto;
            width: 287px;
            height: 52px;
            background-image: url(http://filamentgroup.com/images/fg-logo-icon.png);
        }
        @media (-webkit-min-device-pixel-ratio: 1.5), (min-device-pixel-ratio: 1.5){
            #fg-logo {
                background-size: 287px 52px;
                background-image: url(http://filamentgroup.com/images/fg-logo-icon-lrg.png);
            }
        }
    </style>
    <script type="text/javascript" src="http://filamentgroup.github.com/EnhanceJS/enhance.js"></script>
    <script type="text/javascript">
        // Run capabilities test
        enhance({
            loadScripts: [
                'https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js',
                'js/jQuery.fileinput.js',
                'js/example.js'
            ],
            loadStyles: ['css/enhanced.css']
        });
    </script>
</head>
<body>
<div class="header">
    <a href="http://filamentgroup.com/"><h1 id="fg-logo">Filament Group</h1></a>
</div>

<!-- realistic form attributes: <form action="#" method="post" enctype="multipart/form-data"> -->
<form action="#">
    <fieldset>
        <legend>Profile image</legend>
        <label for="file">Choose photo</label>
        <input type="file" name="file" id="file" />
        <input type="submit" name="upload" id="upload" value="Upload photo" />
    </fieldset>
</form>


</body>
</html>
