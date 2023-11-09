
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  

    <link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />

    <meta name="apple-mobile-web-app-title" content="CodePen">

    <link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />

    <link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-b4b4269c16397ad2f0f7a01bcdf513a1994f4c94b8af2f191c09eb0d601762b1.svg" color="#111" />



  
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>


  <title>CodePen - Playing around</title>

    <link rel="canonical" href="https://codepen.io/morgansbailey/pen/PoEEWL">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
  
<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:400,700);
* {
  box-sizing: border-box;
}

body {
  font-family: "Roboto", sans-serif;
  font-size: 14px;
}

a {
  text-decoration: none;
  color: #7CBBEA;
}
a:hover, ul.nav2 a.active, nav a.active {
  text-decoration: underline;
}

/* SIDEBAR *********************************/
.sidebar {
  position: absolute;
  width: 220px;
  height: 100%;
  background: #34495E;
  z-index: 1;
}

.user {
  width: 100%;
  padding: 10px 0;
  text-align: center;
  background: #2DCC70;
}
.user img {
  display: inline-block;
  vertical-align: middle;
  width: 50px;
  margin-right: 5px;
  border-radius: 100%;
}
.user .username {
  color: white;
  font-weight: bold;
}

nav ul {
  list-style: none;
  margin: 20px 0 0 0;
  padding: 0;
}
nav a {
  text-decoration: none;
  display: block;
  padding: 20px 0 20px 30px;
  color: #bbb;
  letter-spacing: 1px;
}
nav a:hover, nav ul.nav2 a.active, ul.nav2 nav a.active, nav a.active {
  text-decoration: none;
  background: #22303d;
  color: white;
}
/* MAIN ***********************************/
.main {
  position: absolute;
  right: 0;
  width: calc(100% - 220px);
  height: 100%;
  background: #ddd;
}

/* HEADER */
header {
  position: relative;
  width: 100%;
  height: 270px;
  background: white;
  box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);
}

header .top {
  width: 100%;
  height: 90px;
  padding: 20px 30px 0 30px;
  border-bottom: 2px solid #ddd;
  overflow: hidden;
}

.notifications {
  display: inline-block;
}

.notifications .icon {
  display: inline-block;
  width: 20px;
  height: 20px;
  margin-right: 10px;
  border: 3px solid #ddd;
  border-radius: 5px;
}

.logo {
  position: absolute;
  display: inline-block;
  left: 0;
  right: 0;
  margin: 0 auto;
  width: 40px;
  height: 40px;
  border: 3px solid #2DCC70;
  border-radius: 100%;
  text-align: center;
  line-height: 42px;
  font-size: 40px;
  font-weight: bold;
  color: #2DCC70;
}

.search {
  float: right;
  padding: 5px;
  font-weight: bold;
  font-size: 90%;
  outline: none;
  border: none;
  color: #2DCC70;
  text-align: right;
}
.search:focus {
  border-bottom: 1px solid #2DCC70;
}

header .bottom {
  padding: 20px 30px 0 30px;
}

.identity {
  display: inline-block;
  min-width: 250px;
}
.identity img {
  float: left;
  display: inline-block;
  vertical-align: top;
  width: 80px;
  margin-right: 15px;
  border-radius: 100%;
}
.identity .name {
  font-weight: bold;
  font-size: 16px;
  margin-bottom: 3px;
}
.identity .info {
  color: #888;
}

.logout {
  position: relative;
  float: right;
  padding: 5px 10px;
  color: tomato;
  font-weight: bold;
  border: 2px solid tomato;
  cursor: pointer;
  user-select: none;
}
.logout:hover, ul.nav2 a.logout.active, nav a.logout.active {
  background: tomato;
  color: white;
}
.logout:active {
  top: 1px;
}

ul.nav2 {
  position: absolute;
  bottom: 0;
  list-style: none;
  padding: 0;
  margin: 0;
  font-size: 15px;
}
ul.nav2 li {
  display: inline-block;
  float: left;
}
ul.nav2 a {
  display: inline-block;
  padding: 7px 0;
  margin-right: 30px;
  color: black;
}
ul.nav2 a:hover, ul.nav2 a.active {
  border-bottom: 4px solid #2DCC70;
  text-decoration: none;
}
/* PAGE *************************************/
/* GRID */
.section {
  clear: both;
  padding: 0px;
  margin: 0px;
}

.col {
  display: block;
  float: left;
  margin: 0 0 2% 2%;
}

.col:first-child {
  margin-left: 0;
}

/*  GROUPING  */
.group:before,
.group:after {
  content: "";
  display: table;
}

.group:after {
  clear: both;
}

.group {
  zoom: 1;
  /* For IE 6/7 */
}

/*  GRID OF THREE  */
.span_3_of_3 {
  width: 100%;
}

.span_2_of_3 {
  width: 66%;
}

.span_1_of_3 {
  width: 32%;
}

.page {
  padding: 20px;
}

.col {
  height: 200px;
  padding: 15px;
  background: white;
  color: #666;
  line-height: 1.5em;
  border-radius: 3px;
  box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);
}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

  
</head>

<body translate="no">
  <div class="navbar">
    @auth
        <form action="/logout" method="GET">
            @csrf
            <button>Logout {{ Auth::user()->name }}</button>
        </form>
    @endauth

</div>
  <!-- SIDEBAR -->
<div class="sidebar">
	
  <div class="user">
    <span class="username">{{Auth::user()->name}}</span>
	</div>
  
  <nav role='navigation'>
    <ul>
      <li><a class="active" href="#">DASHBOARD</a></li>
      {{-- <li><a href="#">COURSE</a></li>
      <li><a href="#">EXAM</a></li>
      <li><a href="#">Q&A</a></li>
      <li><a href="#">NEWS</a></li> --}}
    </ul>
  </nav>	

</div>

<!-- MAIN -->
<div class="main">
	
  {{-- <header>
    <!-- HEADER TOP -->
    <div class="top">
      <!-- notifications -->
      <div class="notifications">
    		<span class="icon"></span>
    		<span class="icon"></span>
    		<span class="icon"></span>
    	</div>
      <!-- logo -->
      <div class="logo">*</div>
      <!-- search field -->
      <input class="search" type="text" placeholder="Type for search" />
    </div>
    
    <!-- HEADER BOTTOM -->
    <div class="bottom">
    	<!-- identity -->
      <div class="identity">
        <img src="https://bit.ly/1jFjKGa" />
        <span class="name">MORGAN BAILEY</span> <br/>
        <span class="info">Student / <a href="#">Visit Profile</a></span> <br/>
        <span class="info">654789 pts</span>
    	</div>
      <!-- actions -->
      <span class="logout">Log out</span>
      <!-- secondary nav -->
      <ul class="nav2">
        <li><a href="#">KNOWLEDGE</a></li>
        <li><a href="#">COURSE</a></li>
        <li><a class="active" href="#">EXAM</a></li>
        <li><a href="#">ACTIVITY</a></li>
        <li><a href="#">FRIENDS</a></li>
      </ul>	
    </div>
  </header> --}}
  
  <!-- PAGE -->
  <div class="page group">
  	<div class="section">
      <div class="col span_1_of_3">
      	
        <h1 style="text-align: center">Hello</h1>
        <h1 style="text-align: center">5+</h1>
      </div>
      <div class="col span_1_of_3">
        <h1 style="text-align: center">Hello</h1>
        <h1 style="text-align: center">5+</h1>
      </div>
      <div class="col span_1_of_3">
        <h1 style="text-align: center">Hello</h1>
        <h1 style="text-align: center">5+</h1>
      </div>
  	</div>
    <div class="section">
    	<div class="col span_3_of_3"></div>
    </div>
  </div>

</div>
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
      <script id="rendered-js" >
// https://dribbble.com/shots/1640899-Freebie-Course-Dashboard

$('nav a, .nav2 a').on('click', function () {
  $(this).addClass('active');$(this).parents('li').siblings().children('a').removeClass('active');
});
//# sourceURL=pen.js
    </script>

  
</body>

</html>
