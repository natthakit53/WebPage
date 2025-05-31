<style>
* {
box-sizing: border-box;

}

/* Style the header */
.header {
background-color: #766092;
padding: 3px;
text-align: center;
font-size: 30px;
}
/* Create three equal columns that floats next to each
other */
.column {
float: left;
width: 50%;
padding: 10px;
height: 500px; /* Should be removed. Only for
demonstration */
margin: auto;
}
/* Clear floats after the columns */
.row:after {
content: "";
display: table;
clear: both;
}
/* Style the footer */
.footer {
background-color: #A378B5;
padding: 60px;
font-size: 30px;
text-align: center;
color: black;
bottom: 0px;
}
img {
display: block;
margin-right: auto;
margin-left: auto;
margin-top: 60px;
width: 250px;
height: 300px;
border:5px solid white;
}
.info{
background-color: white;
text-align: center;
margin-left: auto;
margin-right: auto;
width: 250px;
}
h2, h3{
color: white;    
}

.footer a {
  color: white;
  padding: 16px;
  text-decoration: none;
  display: block;
}        
 .footer a:hover {
  background-color: #ddd;
  color: #A378B5;

  
</style>
</head>
<div class="header">
<h2>ผู้จัดทำ</h2>
</div>
<div class="row">
<div class="column" style="background-color:#9F849B">
<img src="90105.jpg">
<!--<img src="mark.jpg" width="250" height="300"
vspace="50" hspace="65">--->
<div class="info">
    นายณัฐวุฒิ ซาตะนัย<br>

</div><br>
<h3>Tel:0626069504</h3>
<h3>E-mail:nattawut.t0001@gmail.com</h3>
</div>
<div class="column" style="background-color:#C6A6C7;">
<img src="90106.jpg">
<div class="info">
นายณัฐกิตติ์ แซ่ตั้ง<br>

</div><br>
<h3>Tel:0956866797</h3>
<h3>E-mail:natthakit53@gmail.com</h3>
</div>
</div>
</div>
<div class="footer">
<a href="index.php">กลับไปหน้าเพจ</a>
</div>
</body>
</html>