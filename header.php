<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SimplicPvP</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    
    <style>
        #e-img {
            transform: translateX(-10px) translateY(-10px);
        }
        .btn-primary {
            border-radius: 3px;
            margin: 2px 3px;
        }
        .login {
            border-radius: 25px;
            width: 80px;
            height: 70px;
            top: 50%;
            left: 50%;
        }
        .link {
            text-decoration: none;
            color: blue;
        }
        .chooser{
            text-transform: uppercase;
            font-family: 'Open Sans Condensed', sans-serif;
            color: #797979;
            font-size: 18px;
            font-weight: 700;
            width: 50%;
            text-align: center;
            float: left;
            text-decoration: none;
            transition: .5s;
        }
        .chooser:hover{
            color: darkred;
            transition: .5s;
        }
        .rounded {
            overflow: hidden;
            border-radius: 7px;
            background-color: white;
            border: none;
            width: 72%;
            padding: 15px;
            text-align: center;
            font-family: 'Open Sans','Helvetica Neue',Helvetica,Arial,sans-serif;
            text-transform: uppercase;
            font-weight: 700;
            letter-spacing: 1px;
            color: black;
            transition: .5s;
        }
        @font-face {
            font-family: Reitam;
            src: url(../fonts/Reitam_Regular.otf);
        }
        .rounded:hover {
            text-decoration: none;
            color: white;
            background-color: darkred;
            transition: .5s;
        }
        .rounded:active {
            text-decoration-color: none;
            color: white;
            background-color: crimson;
            transition: .2s;
        }
        .staffteam {
            overflow: hidden;
            border-radius: 7px;
            background-color: deepskyblue;
            border-style: solid;
            border-width: 2px;
            border-color: darkcyan;
            padding: 10px 13px;
            text-align: center;
            text-decoration: none;
            font-weight: 300;
            color: white;
            transition: .5s;
        }
        .staffteam:hover {
            background-color: white;
            color: black;
            text-decoration: none;
            transition: .2s;
        }
        .rounded2 {
            overflow: hidden;
            border-radius: 7px;
            border-color: none;
            background-color: white;
            width: 30%;
            padding: 15px;
            text-align: center;
            font-family: 'Open Sans','Helvetica Neue',Helvetica,Arial,sans-serif;
            text-transform: uppercase;
            font-weight: 700;
            letter-spacing: 1px;
            color: black;
            transition: .5s;
        }
        .rounded2:hover {
            text-decoration: none;
            color: white;
            background-color: darkred;
            transition: .5s;
        }
        .rounded2:active {
            text-decoration-color: none;
            color: white;
            background-color: crimson;
            transition: .2s;
        }
        a {
            text-decoration: none;
        }
        a:active {
            text-decoration: none;
        }
        .overlay{
            position: absolute;
            top: 0;
            left: -100%;
            width: 160px;
            height: 160px;
            background-color: darkred;
            transition: .5s;
        }
        .text {
            margin: 0;
            padding: 0;
            text-align: center;
            top: 50%;
            font-family: 'Open Sans','Helvetica Neue',Helvetica,Arial,sans-serif;
            font-weight: 700;
            left: 50%;
            transform: translateX(0) translateY(200%);
            color: white;
        }
        .containerimage:hover .overlay{
            left: 0;
        }
        .containerimage{
            margin-right: 5px;
            position: relative;
            overflow: hidden;
            float: left;
        }
        .bannedcharacter {
            margin-right: 5px;
            position: relative;
            overflow: hidden;
            width: 20%;
            float: left;
        }
        .reg-btn {
            overflow: hidden;
            border-radius: 17px;
            background-color: white;
            width: 45%;
            padding: 15px;
            margin-bottom: 30px;
            text-align: center;
            font-family: 'Open Sans','Helvetica Neue',Helvetica,Arial,sans-serif;
            text-transform: uppercase;
            font-weight: 700;
            letter-spacing: 1px;
            color: black;
            transition: .5s;
        }
        .reg-btn:hover {
            text-decoration-color: none;
            color: white;
            background-color: crimson;
            transition: .5s;
        }
        .log-btn {
            overflow: hidden;
            border-radius: 17px;
            background-color: white;
            width: 40%;
            padding: 15px;
            text-align: center;
            font-family: 'Open Sans','Helvetica Neue',Helvetica,Arial,sans-serif;
            text-transform: uppercase;
            font-weight: 700;
            margin-bottom: 30px;
            letter-spacing: 1px;
            color: black;
            transition: .5s;
        }
        .log-btn:hover {
            text-decoration: none;
            color: white;
            background-color: darkred;
            transition: .5s;
        }
        #text {
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            outline: none;
            display: block;
                width: 88%;
            padding: 7px;
            border: none;
            margin-left: 25px;
            border-bottom: 1px solid #ddd;
            background: transparent;
            margin-bottom: 10px;
            font: 16px Arial, Helvetica, sans-serif;
            height: 45px;
        }
        #box {
            position: relative;
            width: 70%;
            overflow: auto;
            background-color: white;
            border-color: gray;
            box-shadow: 0px 0px 10px #888888;
            border-radius: 25px;
            padding: 20px;
        }
        .bans {
            position: relative;
            width: 100%;
            overflow: auto;
            background-color: white;
            border-color: gray;
            box-shadow: 0px 0px 10px #888888;
            padding: 20px;
        }
        .tooltip .tooltiptext {
            visibility: hidden;
            width: 120px;
            background-color: black;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px 0;

            /* Position the tooltip */
            position: absolute;
            z-index: 1;
        }
        .tooltip:hover .tooltiptext {
            visibility: visible;
        }
        #body {
            float: left;
            border-right-width: 3px;
            border-right-color: black;
            margin: 0px 10px;
        }
        .tble { 
            border: 1px solid #ddd;
            text-align: left;
            border-collapse: collapse;
            width: 100%;
        }
        .minitble {
            padding: 15px;
        }
        .clickable {
            cursor: pointer;
            text-decoration: none;
        }
        .clickable:hover {
            text-decoration: none;
        }
        .box {
            position: relative;
            width: 100%;
            overflow: auto;
            background-color: white;
            box-shadow: 0px 0px 10px #888888;
            padding: 20px;
        }
        .heads {
            position: relative;
            width:870px;
            overflow: auto;
            border-color: silver;
            background-color: white;
            box-shadow: 0px 0px 10px #888888;
            border-radius: 15px;
            padding: 20px;
            padding-left: 25px;
        }
        .row {
            margin: auto;
        }
        .dropbtn {
            background-color: transparent;
            color: white;
            padding: 16px;
            font-size: 12px;
            font-weight: 800;
            letter-spacing: 1px;
            text-transform: uppercase;
            border: none;
            cursor: pointer;
        }
        .simplicaboutimage {
            width: 360px;
        }
        .verticalline {
            width: 2px;
            height: 100%;
            background-color: silver;
            margin: 0px 10px;
            float: left;
        }
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .thumbnailcontainer {
            width: 100%;
            overflow: hidden;
            height: 300px;
            margin-bottom: 30px;
        }
        .thumbnailv2 {
            height: 100%;
            width: 25%;
            float: left;
        }
        .dropdown-content a {
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {background-color: #f1f1f1}

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: transparent;
        }
        .error {
            background-color: lightpink;
            border: 2px solid darkred;
            font-weight: bold;
            padding: 2px 8px;
            border-radius: 4px;
        }
        .activation {
            padding: 5px;
            background-color: red;
            border-color: darkred;
            border: 3px;
            overflow: hidden;
            width: 60%;
            margin: auto;
            font-weight: 800;
            letter-spacing: 1px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            border-radius: 15px;
            text-align: center;
            color: white;
        }
        .activation button {
            padding: 2px 5px;
            margin: 5px 2px;
            font-weight: 700;
            letter-spacing: 1px;
        }
        .confirmation {
            padding: 5px;
            background-color: green;
            border-color: darkgreen;
            border: 3px;
            overflow: hidden;
            width: 60%;
            margin: auto;
            font-weight: 800;
            letter-spacing: 1px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            border-radius: 15px;
            text-align: center;
            color: white;
        }
        .imgcontainer {
            position: relative;
            height: 100%;
            width: 100%;
            margin: auto;
        }
        .image {
            display: block;
            width: 100%;
            height: 100%;
            border-radius: 6px;
            background-color: darkred;
            height: auto;
        }
        .overlay {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            height: 100%;
            width: 100%;
            opacity: 0;
            border-radius: 6px;
            transition: .5s ease;
        }
        .imgcontainer:hover .overlay {
            opacity: 1;
        }
        .text {
            color: white;
            font-size: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
        }
        .imageName {
            float: left;
            width: 19%;
            overflow: hidden;
            height: 100%;
        }
        .information {
            float: left;
            padding: 16px;
            height: 100%;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            margin: 0px 0px 40px 30px;
            width: 78%;
        }
        .mainContent {
            width: 90%;
            margin: auto;
            overflow: hidden;
        }
        .NameAndContent {
            font-family: Reitam;
            font-size: 96%;
        }
        .Name:hover {
            color: black;
        }
        textarea {
            resize: none;
        }
        .replybutton {
            border: none;
            border-radius: 3px;
            padding: 10px 20px;
            color: white;
            background-color: firebrick;
        }
        .replybutton:hover {
            background-color: darkred;
        }
        .MinecraftCharacter {
            text-decoration: none;
            color: #b6b6b6;
        }
        .MinecraftCharacter:hover {
            text-decoration: underline;
            color: #b6b6b6;
        }
        .mainPost {
            overflow: auto;
            margin-bottom: 10px;
        }
        .mainUserName {
            color: darkred;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 80%;
        }
        .mainPostContent {
            font-size: 100%;
        }
        .sidePost {
            overflow: auto;
            margin-top: 5px;
            margin-bottom: 5px;
        }
        .sideUserName {
            font-size: 70%;
        }
        .sidePostContent {
            font-size: 90%;
        }
        .infoTable {
            float: left;
            width: 40%;
            margin-right: 10%;
            height: 100%;
            border-right: 3px solid black;
        }
        .infoTable th {
            height: 40%;
        }
        .statsTable {
            float: left;
            width: 50%;
        }
        .statsBox {
            overflow: auto;
        }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
