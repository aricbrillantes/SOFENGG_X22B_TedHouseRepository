<style>
/*NAVIGATION*/
div.div_navigation{
	font-family: "Roboto Condensed", Verdana;
	padding: 0px 70px 0px 70px;
	background-color: #303238;
	text-align:center;
	position: fixed;
	right: 0;
	left: 0;
	top: 0;
}
a#username{
	border-right: 1px solid #27292b;
}
a.logo{
	font-family: "Raleway", Verdana;
	font-weight: bold;
	font-size: 25px;
	margin-top: 0px;
	padding: 5px;
	float: left;
	color: #fff;
}
text.logo2{
	font-family: "Raleway Dots", Tahoma;
	font-weight: 500;
	color: #fff;
}
img.search_icon{
	margin: 0px 0px -11px -5px;
	background-color: #464951;
	opacity: 0.5;
	height: 32px;
	width: 32px;
}
img.search_icon:hover{
	opacity: 1;
}
.div_navigation input[type=text] {
    font-family: "Roboto", Tahoma;
    background-color: #464951;
	margin-top: 7px;
    color: #ced4e0;
    width: 350px;
    padding: 8px;
    border: none;
}
.div_navigation input[type=text]:focus{
	outline: none;
}
span.dropdown {
	overflow: hidden;
	float: right;
}
div.dropdown-content, div.notifs-content{
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);  
    background-color: #f9f9f9;
    position: absolute;
    min-width: 130px;
    display: none;
    float: left;
	right: 0;
	overflow: auto;
	max-height: 300px;
}
div.dropdown-content{
	margin: 48px 70px 0px 0px;
}
div.notifs-content{
	margin: 48px 120px 0px 0px;    
}
div.dropdown-content a, div.notifs-content a{
    font-family: "Roboto", Verdana;
    padding: 12px 16px;
    text-align: right;
    color: #303238;
    display: block;
}
div.notifs-content a{
	border-top: 1px solid #ddd;
	font-size: 13px;
}
div.dropdown-content a:hover, div.notifs-content a:hover {
    background-color: #ddd;
}
span.dropdown:hover .dropdown-content {
    display: block;
    color: #fff;
}
a.droparrow, a.navtxt, a.dropnotifs{
	text-align: center;
	margin-top: 10px;
	font-size: 15px;
	color: #ced4e0;
	padding: 10px;
	float: right;
	height: 18px;
}
a.dropnotifs{
	min-width: 30px;
}
a.dropnotifs:hover{
	cursor: pointer;
}
a.droparrow{
	border-left: 1px solid #27292b;
	min-width: 30px;
}
.show{
	display: block;
}
a.navtxt{
	letter-spacing: 1px;
	transition: 0.2s;
	min-width: 60px;
	}
a.navtxt:hover, a.droparrow:hover, a.dropnotifs:hover{
	background-color: #27292b;
	color: #fff;
}


/*Page Styling for the profile page*/
html, body, div, ol, ul, li{
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  font: inherit;
  vertical-align: baseline;
  outline: none;
  -webkit-font-smoothing: antialiased;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
html {
	 overflow-y: scroll; 
}
body{
	background-color: #ededed;
	font-family: "Roboto", Verdana;
}
a{
	text-decoration: none;
}
button:hover{
	cursor: pointer;
}
h1, h2{
	font-family: "Roboto Condensed", Tahoma;
	margin: 20px 0px 15px 0px;
	line-height: 33px;
	color: #37363f;
}

strong { font-weight: bold; } 

img { border: 0; max-width: 100%; }


/** page structure for the profile page**/
#profpage {
  display: block;
  width: 750px;
  margin: 0 auto;
  padding-top: 30px;
  padding-bottom: 45px;
}

#content {
  display: block;
  width: 100%;
  background: #fff;
  padding: 25px 20px;
  padding-bottom: 35px;
  box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;
}

#userphoto {
  display: block;
  float: right;
  margin-left: 10px;
  margin-bottom: 8px;
}
#userphoto img {
  display: block;
  padding: 2px;
  background: #fff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.4);
}

.bio{
    word-break: keep-all;
}


#profiletabs {
  display: block;
  margin-bottom: 4px;
  height: 50px;
}

#profiletabs ul { list-style: none; display: block; width: 70%; height: 50px; }
#profiletabls ul li { float: left; }
#profiletabs ul li a { 
  display: block;
  float: left;
  padding: 8px 11px;
  font-size: 1.2em;
  font-weight: bold;
  background: #303238;
  color: #fff;
  margin-right: 7px;
  border: 1px solid #fff;
  border-radius: 5px;
  border-bottom-left-radius: 0;
}
#profiletabs ul li a:hover {
  text-decoration: none;
  background: #474961;
  color: #fff;
}

#profiletabs ul li a.sel {
  background: #464951;
  border-color: #fff1;
}

.setting {
  display: block;
  font-weight: normal;
  padding: 7px 3px;
  border-top: 1px solid #d6d1af;
  margin-bottom: 5px;
}
.setting span {
  float: left; 
  width: 250px;
  font-weight: bold;
}
.setting span img { 
  cursor: pointer;
}

</style>