<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style>
        body{
            padding:50px;
            }
        #in{width: 80%;}
        #sub{width:100px;background:#31C3F5;border-radius: 4px;height:32px;border:0px;}
    </style>
</head>
<body>
    <div class="container">
        <h2><b>ระบุคำค้นหา</b></h2>
        <form id="form" name="form" action="" method="POST">
                    <input id="in" type="text" placeholder="Fever">
                    <input id="sub" type="submit" name="submit" value="ค้นหา">
        </form>
        <?php 
            $url = "https://dd-wtlab2020.netlify.app/pre-final/ezquiz.json";
            $response = file_get_contents($url);
            $result = json_decode($response);
                if(isset($_POST['submit'])){
                    echo"<div class='row'>
                    <img style='width:640;' src=''>";
                }
        ?>
    </div>
</body>
</html>