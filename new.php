<?php
session_start();
?>
<!DOCTYPE html>
<html >
  <head>
    <title>Profile</title>
		<link rel="stylesheet" href="profilestyle.css"> 
		<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
	height:50px;
    overflow: hidden;
    background-color:black;
	opacity:0.75;
	z-index:5;
	margin:5px;
}

li {
    float: right;
	letter-spacing:1.5px;
}

li a {
    display: block;
    color: white;
    text-align: center;
    text-decoration: none;
	padding: 14px 16px;
}

li a:hover {
    background-color: #111;
}
 span.info1{
 color:white;
 font-size:15px;
 }
		</style>
  </head>
  <body>
<canvas id="canvas"></canvas>


  <div class="container-info">
  <br>
  <ul>
  <li style="float:left;font-size:22px;letter-spacing:3px;color:white;padding:10px;">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Parsec</li>
  <li><a href="logout.php">LOG OUT  &nbsp &nbsp &nbsp &nbsp </a></li>
  <li style="background-color:green;"><a href="#">WHAT'S NEW PARSEC </a> &nbsp &nbsp &nbsp &nbsp  </li>
  <li><a href="quiz.php?pq=1&q=1&q1=1&ans=">QUIZ </a> &nbsp &nbsp &nbsp &nbsp </li>
  <li><a href="profile.php">PROFILE </a> &nbsp &nbsp &nbsp &nbsp </li>
  <li><a href="login.php">HOME </a> &nbsp &nbsp &nbsp &nbsp </li>
  </ul>
  </div> 

  
  
  
  
<div class="table">
  <div class="table-cell">
    <div class="container">
      <svg class="background-svg" width="400px" height="300px" viewBox="0 0 400 300" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><filter x="-50%" y="-50%" width="200%" height="200%" filterUnits="objectBoundingBox" id="filter-1"><feOffset dx="0" dy="10" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset><feGaussianBlur stdDeviation="2" in="shadowOffsetOuter1" result="shadowBlurOuter1"></feGaussianBlur><feColorMatrix values="0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.095 0" in="shadowBlurOuter1" type="matrix" result="shadowMatrixOuter1"></feColorMatrix><feOffset dx="0" dy="1" in="SourceAlpha" result="shadowOffsetInner1"></feOffset><feGaussianBlur stdDeviation="1.5" in="shadowOffsetInner1" result="shadowBlurInner1"></feGaussianBlur><feComposite in="shadowBlurInner1" in2="SourceAlpha" operator="arithmetic" k2="-1" k3="1" result="shadowInnerInner1"></feComposite><feColorMatrix values="0 0 0 0 0.647959184   0 0 0 0 0.549016553   0 0 0 0 0.549016553  0 0 0 0.35 0" in="shadowInnerInner1" type="matrix" result="shadowMatrixInner1"></feColorMatrix><feMerge><feMergeNode in="shadowMatrixOuter1"></feMergeNode><feMergeNode in="SourceGraphic"></feMergeNode><feMergeNode in="shadowMatrixInner1"></feMergeNode></feMerge></filter></defs><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="Artboard-1" fill="#8B65E4"><path d="M187.785156,200 L180,232 L66,232 L58.2148437,200 L187.785156,200 Z" id="Rectangle-1" filter="url(#filter-1)"></path><path d="M349.760339,49.1234675 L375.905579,277.733833 L199.999999,277.733834 L43.9648432,143.710938 L349.760339,49.1234675 Z" id="Triangle-1" filter="url(#filter-1)"></path><path d="M399.8936,96.1889997 L29.4623426,250.140552 L0,36.4302476 L399.8936,96.1889997 Z" id="Triangle-2" filter="url(#filter-1)"></path></g></g></svg>
      <div class="container-info">
        <h1>
          Further <br>
		<span style='color:white;font-size:14px;'>A blog or timeline can be prepared to share thoughts.A Github and not a facebook of space explorers can be built.Other ideas are also welcomed.</span>
        </h1>
      </div>
    </div>
  </div>
</div>
<script src="profilejs.js"></script>
 </body>
</html>



