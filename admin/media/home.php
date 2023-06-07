<?php
  session_start();
  require 'includes/meeting.inc.php';
  $acct = $_SESSION['acct'];
  $ssname = $_SESSION['Username'];
  $sscode = $_SESSION['Usercode'];
  $metData = new meeting($acct);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <title>Projects</title>
</head>

<body>

  <div class="header">
    <div class="hedlogo">
      <h1><a href="home.php">Project</a></h1>
    </div>
    <label for="nav">
      <div class="head">
        <img src="media/user.jpg" alt="" class="userImg">
        <h2><span>Username</span><span><i class="fi-xwsdxl-caret-solid"></i></span></h2>
      </div>
    </label>
    <input type="checkbox" name="" id="nav">
    <ul class="headOut" id="navBar">
      <li><a href="profile.php?user=<?php echo $sscode; ?>"><span><i class="fi-xnsuxl-setting-solid grn"></i></span><span>Setting</span></a></li>
      <li><a href="includes/logout.php"><span><i class="fi-xnsuxl-sign-out-solid red"></i></span><span>Log Out</span></a></li>
    </ul>
  </div>

  <div class="section">

    <div class="secHead">
      <div class="hedUser">
        <img src="media/user.jpg" alt="" class="userImg">
        <div id="userInfo">
          <h3>Username</h3>
          <p>Member</p>
        </div>
        <div class="access">
          <label for="tog"><i class="fi-xwsrxl-ellipsis"></i></label>
          <input type="checkbox" name="" id="tog">
          <ul class="headOut" id="navBar2">
            <li><a href="profile.php?user=<?php echo $sscode; ?>"><span><i class="fi-xnsuxl-setting-solid grn"></i></span><span>Setting</span></a></li>
          </ul>
        </div>
      </div>
      <div class="nav">
        <label for="navigator" id="disNav">Navigation</label>
        <ul id="navigator">
          <li><a href="home.php"><span><i class="fi-xnluxl-radar vlt"></i></span><span>Dashboard</span></a></li>
          <li><a href="members.php"><span><i class="fi-xnsuxl-team-solid orng"></i></span><span>Member</span></a></li>
        </ul>
      </div>
    </div>

    <div class="container">

      <div class="containInfo">
        <ul>
          <li>
            <h1>12</h1> <br />
            <p>Today's Process</p>
          </li>
          <li>
            <h1>12</h1> <br />
            <p>Total Pending</p>
          </li>
          <li>
            <h1>13</h1> <br />
            <p>Process</p>
          </li>
          <li>
            <h1>14</h1> <br />
            <p>Pending Results</p>
          </li>
        </ul>
      </div>

      <div class="tdsHistory">
        <div class="tdsActivity">
          <h2 class="tytle">Todays Activities:</h2>
          <h1>
            <span id="date"></span><br />
            <span id="time"></span>
          </h1>
          <ul class="ulHed">
            <li>Time</li>
            <li>Person</li>
          </ul>
          <div class="scroller">
            <ul class="ullst">
              <li>10:30AM</li>
              <li>Hasibur Hossain</li>
              <li>10:30AM</li>
              <li>Asraful Sunny</li>
              <li>10:30AM</li>
              <li>Farhana shimu</li>
              <li>10:30AM</li>
              <li>Raveya orpa</li>
              <li>10:30AM</li>
              <li>Hasibur Hossain</li>
              <li>10:30AM</li>
              <li>Asraful Sunny</li>
              <li>10:30AM</li>
              <li>Farhana shimu</li>
              <li>10:30AM</li>
              <li>Raveya orpa</li>
              <li>10:30AM</li>
              <li>Hasibur Hossain</li>
              <li>10:30AM</li>
              <li>Asraful Sunny</li>
              <li>10:30AM</li>
              <li>Farhana shimu</li>
              <li>10:30AM</li>
              <li>Raveya orpa</li>

            </ul>
          </div>
        </div>
        <div class="tdsDetails">
          <h2 class="tytle">Todays Detais:</h2>
          <div class="detaContain">

            <div class="con_details">
              <h1>Clint Name 1</h1>
              <h3>2:30 PM Sunday, September 4, 2022 Fixed By: <span>Secretary</span></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, tempora illum modi, quibusdam odio nesciunt accusamus eum veritatis totam magnam accusantium soluta cumque labore repudiandae architecto doloremque earum aperiam
                possimus. </p>
              <h2>Meeting Time: <span>12:00AM</span></h2>
              <ul>
                <li><a href="" class="success">Success</a></li>
                <li><a href="" class="edit">Edit</a></li>
                <li><a href="" class="del">Delete</a></li>
              </ul>
            </div>

            <div class="con_details">
              <h1>Clint Name 1</h1>
              <h3>2:30 PM Sunday, September 4, 2022 Fixed By: <span>Secretary</span></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, tempora illum modi, quibusdam odio nesciunt accusamus eum veritatis totam magnam accusantium soluta cumque labore repudiandae architecto doloremque earum aperiam
                possimus. </p>
              <h2>Meeting Time: <span>12:00AM</span></h2>
              <ul>
                <li><a href="" class="success">Success</a></li>
                <li><a href="" class="edit">Edit</a></li>
                <li><a href="" class="del">Delete</a></li>
              </ul>
            </div>
            <div class="con_details">
              <h1>Clint Name 1</h1>
              <h3>2:30 PM Sunday, September 4, 2022 Fixed By: <span>Secretary</span></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, tempora illum modi, quibusdam odio nesciunt accusamus eum veritatis totam magnam accusantium soluta cumque labore repudiandae architecto doloremque earum aperiam
                possimus. </p>
              <h2>Meeting Time: <span>12:00AM</span></h2>
              <ul>
                <li><a href="" class="success">Success</a></li>
                <li><a href="" class="edit">Edit</a></li>
                <li><a href="" class="del">Delete</a></li>
              </ul>
            </div>
            <div class="con_details">
              <h1>Clint Name 1</h1>
              <h3>2:30 PM Sunday, September 4, 2022 Fixed By: <span>Secretary</span></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, tempora illum modi, quibusdam odio nesciunt accusamus eum veritatis totam magnam accusantium soluta cumque labore repudiandae architecto doloremque earum aperiam
                possimus. </p>
              <h2>Meeting Time: <span>12:00AM</span></h2>
              <ul>
                <li><a href="" class="success">Success</a></li>
                <li><a href="" class="edit">Edit</a></li>
                <li><a href="" class="del">Delete</a></li>
              </ul>
            </div>
            <div class="con_details">
              <h1>Clint Name 1</h1>
              <h3>2:30 PM Sunday, September 4, 2022 Fixed By: <span>Secretary</span></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, tempora illum modi, quibusdam odio nesciunt accusamus eum veritatis totam magnam accusantium soluta cumque labore repudiandae architecto doloremque earum aperiam
                possimus. </p>
              <h2>Meeting Time: <span>12:00AM</span></h2>
              <ul>
                <li><a href="" class="success">Success</a></li>
                <li><a href="" class="edit">Edit</a></li>
                <li><a href="" class="del">Delete</a></li>
              </ul>
            </div>
            <div class="con_details">
              <h1>Clint Name 1</h1>
              <h3>2:30 PM Sunday, September 4, 2022 Fixed By: <span>Secretary</span></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, tempora illum modi, quibusdam odio nesciunt accusamus eum veritatis totam magnam accusantium soluta cumque labore repudiandae architecto doloremque earum aperiam
                possimus. </p>
              <h2>Meeting Time: <span>12:00AM</span></h2>
              <ul>
                <li><a href="" class="success">Success</a></li>
                <li><a href="" class="edit">Edit</a></li>
                <li><a href="" class="del">Delete</a></li>
              </ul>
            </div>
            <div class="con_details">
              <h1>Clint Name 1</h1>
              <h3>2:30 PM Sunday, September 4, 2022 Fixed By: <span>Secretary</span></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, tempora illum modi, quibusdam odio nesciunt accusamus eum veritatis totam magnam accusantium soluta cumque labore repudiandae architecto doloremque earum aperiam
                possimus. </p>
              <h2>Meeting Time: <span>12:00AM</span></h2>
              <ul>
                <li><a href="" class="success">Success</a></li>
                <li><a href="" class="edit">Edit</a></li>
                <li><a href="" class="del">Delete</a></li>
              </ul>
            </div>
            <div class="con_details">
              <h1>Clint Name 1</h1>
              <h3>2:30 PM Sunday, September 4, 2022 Fixed By: <span>Secretary</span></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, tempora illum modi, quibusdam odio nesciunt accusamus eum veritatis totam magnam accusantium soluta cumque labore repudiandae architecto doloremque earum aperiam
                possimus. </p>
              <h2>Meeting Time: <span>12:00AM</span></h2>
              <ul>
                <li><a href="" class="success">Success</a></li>
                <li><a href="" class="edit">Edit</a></li>
                <li><a href="" class="del">Delete</a></li>
              </ul>
            </div>
            <div class="con_details">
              <h1>Clint Name 1</h1>
              <h3>2:30 PM Sunday, September 4, 2022 Fixed By: <span>Secretary</span></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, tempora illum modi, quibusdam odio nesciunt accusamus eum veritatis totam magnam accusantium soluta cumque labore repudiandae architecto doloremque earum aperiam
                possimus. </p>
              <h2>Meeting Time: <span>12:00AM</span></h2>
              <ul>
                <li><a href="" class="success">Success</a></li>
                <li><a href="" class="edit">Edit</a></li>
                <li><a href="" class="del">Delete</a></li>
              </ul>
            </div>
            <div class="con_details">
              <h1>Clint Name 1</h1>
              <h3>2:30 PM Sunday, September 4, 2022 Fixed By: <span>Secretary</span></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, tempora illum modi, quibusdam odio nesciunt accusamus eum veritatis totam magnam accusantium soluta cumque labore repudiandae architecto doloremque earum aperiam
                possimus. </p>
              <h2>Meeting Time: <span>12:00AM</span></h2>
              <ul>
                <li><a href="" class="success">Success</a></li>
                <li><a href="" class="edit">Edit</a></li>
                <li><a href="" class="del">Delete</a></li>
              </ul>
            </div>
            <div class="con_details">
              <h1>Clint Name 1</h1>
              <h3>2:30 PM Sunday, September 4, 2022 Fixed By: <span>Secretary</span></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, tempora illum modi, quibusdam odio nesciunt accusamus eum veritatis totam magnam accusantium soluta cumque labore repudiandae architecto doloremque earum aperiam
                possimus. </p>
              <h2>Meeting Time: <span>12:00AM</span></h2>
              <ul>
                <li><a href="" class="success">Success</a></li>
                <li><a href="" class="edit">Edit</a></li>
                <li><a href="" class="del">Delete</a></li>
              </ul>
            </div>
            <div class="con_details">
              <h1>Clint Name 1</h1>
              <h3>2:30 PM Sunday, September 4, 2022 Fixed By: <span>Secretary</span></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, tempora illum modi, quibusdam odio nesciunt accusamus eum veritatis totam magnam accusantium soluta cumque labore repudiandae architecto doloremque earum aperiam
                possimus. </p>
              <h2>Meeting Time: <span>12:00AM</span></h2>
              <ul>
                <li><a href="" class="success">Success</a></li>
                <li><a href="" class="edit">Edit</a></li>
                <li><a href="" class="del">Delete</a></li>
              </ul>
            </div>
            <div class="con_details">
              <h1>Clint Name 1</h1>
              <h3>2:30 PM Sunday, September 4, 2022 Fixed By: <span>Secretary</span></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, tempora illum modi, quibusdam odio nesciunt accusamus eum veritatis totam magnam accusantium soluta cumque labore repudiandae architecto doloremque earum aperiam
                possimus. </p>
              <h2>Meeting Time: <span>12:00AM</span></h2>
              <ul>
                <li><a href="" class="success">Success</a></li>
                <li><a href="" class="edit">Edit</a></li>
                <li><a href="" class="del">Delete</a></li>
              </ul>
            </div>
            <div class="con_details">
              <h1>Clint Name 1</h1>
              <h3>2:30 PM Sunday, September 4, 2022 Fixed By: <span>Secretary</span></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, tempora illum modi, quibusdam odio nesciunt accusamus eum veritatis totam magnam accusantium soluta cumque labore repudiandae architecto doloremque earum aperiam
                possimus. </p>
              <h2>Meeting Time: <span>12:00AM</span></h2>
              <ul>
                <li><a href="" class="success">Success</a></li>
                <li><a href="" class="edit">Edit</a></li>
                <li><a href="" class="del">Delete</a></li>
              </ul>
            </div>
            <div class="con_details">
              <h1>Clint Name 10</h1>
              <h3>2:30 PM Sunday, September 4, 2022 Fixed By: <span>Secretary</span></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, tempora illum modi, quibusdam odio nesciunt accusamus eum veritatis totam magnam accusantium soluta cumque labore repudiandae architecto doloremque earum aperiam
                possimus. </p>
              <h2>Meeting Time: <span>12:00AM</span></h2>
              <ul>
                <li><a href="" class="success">Success</a></li>
                <li><a href="" class="edit">Edit</a></li>
                <li><a href="" class="del">Delete</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="pendSucHis">

        <div class="pendHis">
          <h2 class="tytle marginFix">Total Pending History:</h2>
          <ul class="detaHed">
            <li>Sl No</li>
            <li>Clint</li>
            <li>Reason</li>
            <li>Results</li>
          </ul>
          <div class="detaContain">
            <ul class="detaLst">
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Success</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Pending</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Pending</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Pending</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Pending</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Pending</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Pending</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Pending</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Pending</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Pending</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Pending</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Pending</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Pending</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Pending</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Pending</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Pending</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Pending</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Pending</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Pending</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Pending</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Pending</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Pending</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Pending</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Pending</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Pending</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Pending</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Pending</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Pending</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Pending</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Pending</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Pending</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Pending</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Pending</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Pending</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Pending</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Pending</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Pending</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Pending</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Pending</li>
              <li>40</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Pending</li>
            </ul>
          </div>
        </div>

        <div class="sucHis">
          <h2 class="tytle marginFix">Total Success History:</h2>
          <ul class="detaHed">
            <li>Sl No</li>
            <li>Clint</li>
            <li>Reason</li>
            <li>Results</li>
          </ul>
          <div class="detaContain">
            <ul class="detaLst">
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Success</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Success</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Success</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Success</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Success</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Success</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Success</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Success</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Success</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Success</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Success</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Success</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Success</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Success</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Success</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Success</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Success</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Success</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Success</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Success</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Success</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Success</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Success</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Success</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Success</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Success</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Success</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Success</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Success</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Success</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Success</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Success</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Success</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Success</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Success</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Success</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Success</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Success</li>
              <li>1</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Success</li>
              <li>40</li>
              <li>Farhana Shimu</li>
              <li>Rafat Ke cai</li>
              <li>Success</li>
            </ul>
          </div>
        </div>

      </div>

      <div class="footer">
        <h3>Develop By: <a href="#">Someone</a></h3>
      </div>

    </div>

  </div>

  <script src="js/app.js" charset="utf-8"></script>
  <script defer src="https://friconix.com/cdn/friconix.js"></script>
</body>

</html>
