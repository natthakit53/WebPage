<html lang="en">
<head>
<title>I Have Love In Pattaya</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: arial;
}
* a {
  text-decoration: none;
}
* li {
  list-style: none;
}
.container {
  min-height: 120vh;
  padding-bottom: 50px;
  margin: 0 auto;
  position: relative;
}
.bg {
  position: relative;
  width: 100%;
  height: 100%;
}
.bg::after {
  content: "";
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  position: absolute;
  z-index: -1;
  filter: brightness(45%);
  background-image: url(https://www.japancheckin.com/wp-content/uploads/2019/07/SP-Pattaya-e1562141550749.jpg);
  background-size: cover;
  background-position: center;
}
.navBar {
  display: flex;
  width: 85%;
  justify-content: space-between;
  margin: 0 auto;
  align-items: center;
  height: 15vh;
}
.navBar ul {
  display: flex;
  align-items: center;
}
.navBar ul li {
  padding: 0 25px;
}
.navBar ul li a {
  font-size: 1rem;
  color: #fff;
  font-weight: 400;
  letter-spacing: 1.5px;
}
.navBar .logo a {
  font-size: 2.3rem;
  color: #fff;
}
.content {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 85%;
  position: absolute;
  top: 60%;
  left: 50%;
  transform: translate(-50%, -50%);
  align-items: center;
}
.pattaya {
  color: #fff;
  padding: 25px;
}
.card {
  display: grid;
  grid-template-columns: auto auto;
  grid-gap: 20px;
}
.card h2 {
  color: #fff;
  position: absolute;
  bottom: 15px;
  left: 20px;
  font-size: 1.6rem;
  letter-spacing: 1px;
}
.card .box1,
.box2,
.box3,
.box4 {
  width: 90%;
  height: 120px;
  background-position: right;
  background-size: cover;
  position: relative;
  border-radius: 25px;
  cursor: pointer;
}
.box1 {
  background-image: url("http://img.painaidii.com/images/20210330_3_1617073635_640238.jpg");
}
.box2 {
  background-image: url("https://www.ipattaya.co/wp-content/uploads/2017/11/U-pattaya.jpg");
}
.box3 {
  background-image: url("https://static.trueplookpanya.com/tppy/member/m_545000_547500/546742/cms/images/2020/%E0%B8%A3%E0%B9%89%E0%B8%B2%E0%B8%99%E0%B8%AD%E0%B8%B2%E0%B8%AB%E0%B8%B2%E0%B8%A3%20the%20glass%20house-2.jpg");
}
.box4 {
  background-image: url("https://i0.wp.com/ak-d.tripcdn.com/images/1i66m223464cwkzjkADEC_W_670_10000.jpg?w=1020&ssl=1");
}
.pattaya h2 {
  font-size: 2rem;
  letter-spacing: 2.8px;
}
.text {
  display: flex;
  justify-content: flex-start;
  align-items: center;
}
.txt h1 {
  font-size: 7rem;
}
.pattaya p {
  opacity: 0.4;
}
.tnx h2 i {
  color: #fd7e13;
}
.card div {
  transition: 0.5s;
}
.card div:hover {
  transition: 0.3s;
  transform: translateY(-10px);
  box-shadow: 0 19px 38px rgba(0, 0, 0, 0.3), 0 15px 12px rgba(0, 0, 0, 0.22);
}


</style>
</head>
<body>
    <div class="container bg">
  <div class="navBar">
    <div class="logo">
      <a href="#">
        <i class="fas fa-suitcase-rolling"></i>
      </a>
    </div>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="register.php">Register</a></li>
      <li><a href="updateload.php">Edit</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
  </div>

  <div class="content">
    <div class="pattaya" style="width:50%;">
      <div class="tnx">
        <h2><i class="fas fa-map-marker-alt"></i> Thailand</h2>
      </div>
      <div class="txt">
        <h1>PAT</h1>
        <h1>TAYA</h1>
      </div>
      
    </div>
    <div class="card" style="width:50%;">
      <a href="tourist attraction .php">
        <div class="box1">
          <h2>สถานที่ท่องเที่ยว</h2>
        </div>
      </a>
      <a href="rest.php">
        <div class="box2">
          <h2>ที่พัก</h2>
        </div>
      </a>
      <a href="restaurant.php">
        <div class="box3">
          <h2>ร้านอาหาร</h2>
        </div>
      </a>
      <a href="temple.php" >
        <div class="box4">
          <h2>วัด</h2>
        </div>
      </a>
      
    </div>
  </div>

</div>
</body>
</html>