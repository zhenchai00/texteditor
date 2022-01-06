<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Text Editor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="resources/style.css">
    <!-- <script type="text/javascript" src="index.js"></script> -->

</head>
<body>
    <div class="container mt-2">
        <div class="custom">
            <h2>Config Text Editor</h2>
            <p>Please do not put comment tag on the config. JSON file format didn't accept any comment</p>
            <form id="config">
                <label class="form-label" for="editor">Text Editor</label>
                <textarea id="editor" class="form-control" name="editor"></textarea>
                <div class="mt-2">
                    <button type="submit" class="btn btn-primary float-end">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <!-- <button id="buttonjson" class="btn">JSON</button> -->
    <div id="isjson"></div>
    <script type="text/javascript" src="index.js"></script>
</body>
</html>
                <!-- <input name="submit" type="submit" value="submit"> -->
                <!-- <input id="read" type="button" value="Get config.json"/> -->
                <!-- <input id="valid" type="button" value="Valid Json"/> -->
                <!-- <input id="beautify" type="button" value="Beautify"/> -->