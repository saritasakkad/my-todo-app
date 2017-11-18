<!DOCTYPE html>
<html lang="en fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <title>Todo app </title>
  <!-- style.css  -->
  <link rel="stylesheet" href="style.css">
  <!-- calandrier  -->
  <link rel="stylesheet" href="datepicker/dist/mtr-datepicker.min.css">
  <link rel="stylesheet" href="datepicker/dist/mtr-datepicker.clutterboard-theme.min.css">

</head>
<body>

    <!-- global -->
    <div class="global">
       <!-- Partie 1 =========@mmmm#mmmm@========= Partie 1 -->
       <!-- main -->
       <div class="main">
          <!-- main-header -->
          <div class="main-header">
             <h1>MY TODOLISTE</h1>
             <!-- bouton -->
             <img src="images/001-round.png" alt="icones" id="bouton">
          </div>
          <hr class="separt">
          <!-- main-container -->
          <div id="maincontainer">
              <!-- content -->
             <!-- content2 -->
             <div class="content2">
                <li>Take a shower</li>
                <br>
                <li>Make my bag</li>
                <br>
                <li>Take a breakfast</li>
             </div>
             <!-- content3 -->
             <div class="content3">
                <li>Go to bus stop</li>
                <ul class="list-item">
                   <span>Delete</span>
                   <span>Edit</span>
                </ul>
                <div class="description">
                   <p>My bus arrive on 7:30 l'il be on 7:15 at bus stop</p>
                </div>
                <div class="info">
                   <p>Started on:2/10/2017 - 12:00 End Time:3/10/2017 - 15:00</p>
                </div>
                <hr class="separt2">
             </div>
             <!-- content4 -->
             <div class="content4">
                <li>Be at Becode on 9:00</li>
                <br>
                <li>Start Coding</li>
                <br>
                <li>I need a real break</li>
             </div>
             <!-- next-container -->
             <div class="next-container">
                <li>Go to bus stop</li>
             </div>
             <!-- main-footer -->
             <div class="main-footer">
                <hr class="separt3">
                <ul class="list-item">
                   <li>Show: <span>All task</span></li>
                   <li>Todo task</li>
                   <li>Done task</li>
                </ul>
             </div>
          </div>
          <div id="maincontainer2">
             <!-- content2 -->
             <!-- content3 -->
             <div class="contents3">
                <h2>TITLE</h2>
                <br>
                <h3>My todo title</h3>
                <br>
                <div class="Clear-the-content2">
                   <li>Clear</li>
                </div>
                <h2>DESCRIPTION</h2>
                <br>
                <h3>My todo description</h3>
                <br>
                <span>...</span><br>
                <span>...</span>
             </div>
             <!-- content4 -->
             <div class="contents4">
                <h2>START AT</h2>
                <br>
                <ul class="list-item">
                   <li>décembre 12, 2 PM</li>
                </ul>
             </div>
             <!-- content5 -->
             <div class="content5">
                <h2>END AT</h2>
                <br>
                <ul class="list-item">
                   <li>décembre 12, 3 PM</li>
                </ul>
             </div>
             <!-- calandrier  -->
             <div id="demo"></div>
             <!-- main-footer2 -->
             <div class="main-footer2">
                <ul class="list-item">
                   <li>Add task and create one</li>
                   <li>  Add task</li>
                </ul>
             </div>
          </div>
       </div>
    </div>
    
        <!-- calandrier  -->
     <script type="text/javascript" src="datepicker/dist/mtr-datepicker.min.js"></script>
     <!-- script.js  -->
     <script type="text/javascript" src="script.js"></script>
  </body>
  </html>
