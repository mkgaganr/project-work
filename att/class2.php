<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<style>
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #000077;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}
.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #f1f1f1;
  display: block;
  transition: 0.3s;
}
td
{
    text-align : center;
}
.sidenav a:hover {
  color: #f1f111;
  text-decoration:underline;
}
.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}
ul.topbar {
  padding: 10px 16px;
  list-style: none;
  background-color: #f1f1a1;
}
ul.topbar li {
  display: inline;
  font-size: 18px;
}
ul.topbar li+li:before {
  padding: 8px;
  color: black;
  content: "/\00a0";
}
ul.topbar li a {
  color: #0275d8;
  text-decoration: none;
}
ul.topbar a:hover {
  color: #01447e;
  text-decoration: underline;
}
.topctr {
  overflow: hidden;
  background-color: #6DE8EC;
  padding: 20px 10px;
}
.topctr a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  font-color : #FFFFFF ;
  line-height: 25px;
  border-radius: 4px;
}
.topctr a.logo {
  font-size: 25px;
   font-color : #FFFFFF ;
  font-weight: bold;
}
.topctr a:hover {
  background-color: #ddd;
  color: black;
}
.topctr a.active {
  background-color: #FFFFFF;
  color: white;
}
.header-right {
  float: right;
}
main{
  font-family: cursive;
}
body
{
 	background : url("data:image/jpeg;base64,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");
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
table, td{
  border: 1px solid black;
  border-collapse: collapse;
  font-size:20px;
}
th{
  border: 1px solid black;
  border-collapse: collapse;
  font-size:40px;
}
select
{
	font-size:20px;
}
</style>
</head>
<body>
<main>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="material-icons">arrow_back</i></a>
  <a href="admin1.php">Home</a>
  <a href="planner.php">Planner</a>
  <a href="manager.php">Manager</a>
  <a href="class1.php">Class</a>
  <a href="event.php">Events</a>
  <a href="about.php">About</a>
  <a href="log.php">Logout</a>
</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()"><i class="material-icons"style ="font-size:40px; color:rgba(10,117,200,100%);">menu</i></span>

<div class="topctr">
<a href="admin1.php" class="logo">HOME</a>
  <div class="header-right">

  <a href="log.php">Logout</a>
  </div>
</div>

<ul class="topbar">
<li>
<h3>3rd Sem ISE Time Table</h3>
</li>
</ul>

<select name="formal" onchange="javascript:handleSelect(this)" >
  <option>Select the section</option>
  <optgroup label="CSE">
    <option  value="class3">5th Sem CSE</option>
    <option value="class">3rd Sem CSE</option>
  </optgroup>
  <optgroup label="ISE">
    <option value="class4">5th Sem ISE</option>
    <option value="class2">3rd Sem ISE</option>
  </optgroup>
</select>

<script type="text/javascript">
function handleSelect(elm)
{
window.location = elm.value+".php";
}
</script>
<br>
<br>
<table style="width:100%">
  <tr bgcolor="#B9D9DA">
    <td>&emsp;<br>TIMINGS</td>
    <td>8:55-9:50</td>
    <td>9:50-10:45</td> 
    <td>10:45-11:15</td>
    <td>11:15-12:10</td>
    <td>12:10-1:05</td>
    <td>1:05-2:00</td>
	<td>2:00-2:55</td>
	<td>2:55-3:50</td>
  </tr>
  <tr bgcolor="#D4F5B7">
    <th bgcolor="#F8AE89";>Monday</th>
    <td colspan="2"></td>
    <td rowspan="6" bgcolor="E2DE79">BREAK</td>
    <td>COA</td>
    <td>DL</td>
    <td rowspan="6" bgcolor="E2DE79">LUNCH<br>BREAK</td>
    <td colspan="2">DL Tutorial</td>
  </tr>
 <tr bgcolor="#D4F5B7">
  <th bgcolor="#F8AE89";>Tuesday</th>
  <td></td>
  <td>OS</td>
  <td colspan="2">DS Lab</td>
  <td>DM</td>
  <td>CIPE</td>
 </tr bgcolor="#D4F5B7">
 <tr bgcolor="#D4F5B7">
  <th bgcolor="#F8AE89";>Wednesday</th>
  <td colspan="2">OS Lab</td>
  <td>DS</td>
  <td>COA</td>
  <td colspan="2">Project Lab</td>

 </tr bgcolor="#D4F5B7">
 <tr bgcolor="#D4F5B7">
  <th bgcolor="#F8AE89";>Thursday</th>
  <td>DS</td>
  <td>DM</td>
  <td>COA</td>
  <td>CPP</td>
  <td>DM Tutorial</td>
  <td></td>

 </tr>
 <tr bgcolor="#D4F5B7">
  <th bgcolor="#F8AE89";>Friday</th>
  <td>OS</td>
  <td>DL</td>
  <td>CPP</td>
  <td>DM</td>
  <td></td>
  <td></td>

 </tr>
 <tr bgcolor="#D4F5B7">
  <th bgcolor="#F8AE89";>Saturday</th>
  <td>OS<br></td>
  <td>DS</td>
  <td colspan="2">CPP Lab</td>

 </tr>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
   
</main>
   
</body>
</html>