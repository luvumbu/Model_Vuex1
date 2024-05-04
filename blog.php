<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Add a gray background color with some padding */
body {
  font-family: Arial;
  padding: 20px;
  background: #f1f1f1;
}

/* Header/Blog Title */
.header {
  padding: 30px;
  font-size: 40px;
  text-align: center;
  background: white;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
   background-color: white;
   padding: 20px;
   margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}
</style>
</head>
<body>

<div class="header header_btn">
  <h2>Blog Name</h2>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2><input type="text" value="TITLE HEADING"></h2>
      <h5><input type="text" value="Title description, Dec 7, 2017"></h5>
      <div class="fakeimg" style="height:200px;">
    
    </div>
      <p><input type="text" value="Some text.."></p>
      <p>
        
      <textarea name="" id="" style="height:200px">

      Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.

      </textarea>
      
    </div>
 
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>About Me</h2>
      <div class="fakeimg" style="height:100px;">Image</div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
    </div>
    <div class="card">
      <h3>Popular Post</h3>
      <div class="fakeimg">Image</div><br>
      <div class="fakeimg">Image</div><br>
      <div class="fakeimg">Image</div>
    </div>
    <div class="card">
      <h3>Follow Me</h3>
      <p>Some text..</p>
    </div>
  </div>
</div>

<div class="footer">
  <h2>Footer</h2>
</div>

</body>
</html>


<style>
    h2 input,h5 input,p input,textarea{
        border:1px solid rgba(0,0,0,0) ; 
        width:100%;
        border-bottom:1px solid rgba(0,0,0,0.1);
    }
.fakeimg{
    background-image: url("https://techcafe.fr/wp-content/uploads/sites/4/2022/09/tech-cafe-287-panoramic.jpg");
}


.header_btn{
  margin-bottom:15px; 
}
.header_btn:hover{
  background-color: black;
  cursor: pointer;
  color:white ; 
}
</style>
