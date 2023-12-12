<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

  <style>
  * {box-sizing: border-box;}

  body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
  }

  .topnav {
    overflow: hidden;
    background-color: #333;
  }

  .topnav a {
    float: left;
    display: block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
  }

  .topnav a:hover {
    background-color: #ddd;
    color: black;
  }

  .topnav a.active {
    background-color: #2196F3;
    color: white;
  }

  .topnav .login-container {
    float: right;
  }

  .topnav input[type=text] {
    padding: 6px;
    margin-top: 8px;
    font-size: 17px;
    border: none;
    width:120px;
  }

  .topnav .login-container button {
    float: right;
    padding: 6px 10px;
    margin-top: 8px;
    margin-right: 16px;
    background-color: #555;
    color: white;
    font-size: 17px;
    border: none;
    cursor: pointer;
  }

  .topnav .login-container button:hover {
    background-color: blue;
  }

  @media screen and (max-width: 600px) {
    .topnav .login-container {
      float: none;
    }
    .topnav a, .topnav input[type=text], .topnav .login-container button {
      float: none;
      display: block;
      text-align: left;
      width: 100%;
      margin: 0;
      padding: 14px;
    }
    .topnav input[type=text] {
      border: 1px solid #ccc;  
    }
  }
  
    * {
        box-sizing: border-box;
      }
      .row {
        margin-left:-5px;
        margin-right:-5px;
      }
      .column {
        float: left;
        width: 50%;
        padding: 5px;
      }
      .row::after {
        content: "";
        clear: both;
        display: table;
      }
      table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
      }
      th, td {
        text-align: left;
        padding: 16px;
      }
      
      .button1{
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
      }

      body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }
    
    header {
      background-color: #333;
      color: #fff;
      padding: 1em;
      text-align: center;
    }
    
    #product-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      padding: 20px;
    }
    
    .product-card {
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 5px;
      margin: 10px;
      padding: 10px;
      width: 200px;
      text-align: center;
    }
    
    img {
      max-width: 100%;
      height: auto;
    }

    .center {
    margin-left: auto;
    margin-right: auto;
  }


  .DButton{
    margin: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    -ms-transform: translate(+43%, -50%);
    transform: translate(-650%, -400%);
  }

  .dropbtn {
    background-color: black;
    color: white;
    padding: 6px;
    font-size: 13px;
    border: none;
    cursor: pointer;
  }

  .dropdown {
    position: relative;
    display: inline-block;
  }

  .dropdownS {
      display: none;
      position: absolute;
      background-color: #f1f1f1;
      min-width: 160px;
      overflow: auto;
      box-shadow: 0px 10px 17px 0px rgba(0,0,0,0.2);
      z-index: 1;
  }

  .dropdownS a {
    color: black;
    padding: 7px 15px;
    text-decoration: none;
    display: block;
  }

  .dropdown a:hover {background-color: #ddd;}
  .show {display: block;}

  .SignUp {
    margin: auto;
    width: 50%;
    padding: 10px;
    text-align: center;
    }

    .ButtonLeft {
      text-align: left;
    }  

  </style>

  </head>
</html>