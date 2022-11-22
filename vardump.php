<html>
<head>
    <title>Vardump</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="formstyles.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Passions+Conflict&display=swap" rel="stylesheet">
    <meta name="robots" content="noindex, nofollow">
    <link href="robots.txt">
</head>
<body>
<?php

//this section works: we are connecting to database
$servername = "localhost";
$username = "purplegr_purplegr";
$pass = "1+6DymgN6[PAf2";
$dbname = "purplegr_wrwreservation";

$conn = mysqli_connect($servername,$username,$pass,$dbname);

echo '<div class="container-fluid">';
headerImage('images/navimage.jpg', 'Order Details');
echo '
            <div class="row">
                <div class="col-12 text-center">
                    <img src="images/walnutridgebg.png">
                </div>
            </div>
            <div class="row">
                <div class="col-6 mx-auto"';

foreach($_GET as $key => $value)
{
    if ($key == 'custName') {
        echo '<p>Name: ' . $value . '</p>';
    } else if ($key == 'phone') {
        echo '<p>Phone: ' . $value . '</p>';
    } else if ($key == 'email') {
        echo '<p>Email:  ' . $value . '</p>';
    } else if ($key == 'date') {
        echo '<p>Date:  ' . $value . '</p>';
    } else if ($key == 'set') {
        echo '<p>Set Selected:  ' . $value . '</p>';
    } else if ($key == 'package') {
        echo '<p>Package Selected:  ' . $value . '</p>';
    } else if ($key == 'price') {
        echo '<p>Total Estimated Price:  $' . $value . '</p>';
    }
}
$count = 0;
foreach($_GET as $key => $value) {
    if ($value == 'on') {
        $count++;
    }
}

if ($count > 0) {
    echo '<p>Extras: </p>';
}

foreach($_GET as $key => $value) {
    if ($value == 'on') {
        if ($key == 'couch') {
            echo '<p>Vintage Couch</p>';
        } else if ($key == 'hex') {
            echo '<p>Hexagon Arbor</p>';
        } else if ($key == 'galJugs') {
            echo '<p>Antique Gallon Jugs</p>';
        } else if ($key == 'xlwine') {
            echo '<p>XL Wine Jugs</p>';
        } else if ($key == 'clearjars') {
            echo '<p>Clear Antique Ball Jars</p>';
        } else if ($key == 'bluejars') {
            echo '<p>Blue Antique Ball Jars</p>';
        } else if ($key == 'delivery') {
            echo '<p>Your order will be delivered free of charge!</p>';
        } else if ($key == 'runner') {
            echo '<p>Aisle Runner</p>';
        } else if ($key == 'typewriter') {
            echo '<p>Antique Typewriter</p>';
        } else if ($key == 'custom_m_sm') {
            echo '<p>Small (up to 12 words)</p>';
        } else if ($key == 'custom_m_mg') {
            echo '<p>Medium (up to 24 words)</p>';
        } else if ($key == 'custom_m_lg') {
            echo '<p>Large (up to 60 words)</p>';
        }
    }
}

echo '</div>
      </div>
      </div>';

function headerImage($imagepath, $set) {
    echo'<style>
.title h1{
    margin-top: 115px;
    font-size: 130px;
    font-family: "Passions Conflict", cursive;;
}

#navBar1 {
    background-image: url('.$imagepath.');
    min-height: 350px;
    background-position: center;
    background-size: cover;
    filter: brightness(0.70);
}

#links1 {
    overflow: hidden;
    background-color: #333;
}

#navContainer1 {
    margin: 20px;
    width: auto;
    float: right;
}

.navigation {
    float: left;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    font-size: 17px;
}


#links {
    overflow: hidden;
    background-color: #333;
}

#navContainer {
    margin: 20px;
    width: auto;
    float: right;
}

a {
    text-decoration: none;
    color: white;
}

a:hover {
    color: white;
}

h1 {
    margin-top: 30px;
    text-align: center;
}

.text-center h1 {
    font-size: 35px;
    font-weight: bold;
    font-family: "Times New Roman", serif;
    color: #d5b6ae;
    margin-bottom: 35px;
}
</style>
<div class="row">
            <div class="col-12" id="navBar1">
                <div id="navContainer1">
                    <div id="links1">
                        <a href="https://www.walnutridgeweddingrentals.com/" target="_blank" class="navigation">Home</a>
                    </div>
                </div>
            <div class="title">
                <h1 style="color : white; text-shadow: 2px 2px 5px black;">'.$set.'</h1>
            </div>
        </div>
    </div>';
}

echo '
<div id="progress">
    <div class="progress col-6 mx-auto" id="progressBar">
        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
    </div>
</div>';

?>
</body>
</html>
