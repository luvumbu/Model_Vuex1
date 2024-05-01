<div class="container mt-3">  
    <form action="/action_page.php">
      <div class="mb-3 mt-3">
        <label for="dbname">dbname:</label>
        <input type="text" class="form-control" id="dbname" placeholder="Enter email" name="email">
      </div>
      <div class="mb-3 mt-3">
        <label for="username">username:</label>
        <input type="text" class="form-control" id="username" placeholder="Enter email" name="email">
      </div>
      <div class="mb-3">
        <label for="password">password:</label>
        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
      </div>  
      <div onclick="envoyert()" class="btn btn-primary">Submit</div>
    </form>
  </div>



  <script>


 function envoyert(){
  
const dbname = document.getElementById("dbname").value; 
const username = document.getElementById("username").value; 


const password = document.getElementById("password").value; 
    
  var ok = new Information("php.php"); // création de la classe 
 ok.add("dbname", dbname); // ajout de l'information pour lenvoi 
 ok.add("username", username); // ajout de l'information pour lenvoi 

  ok.add("password", password); // ajout d'une deuxieme information denvoi  
 console.log(ok.info()); // demande l'information dans le tableau
  ok.push(); // envoie l'information au code pkp 


  const myTimeout = setTimeout(myGreeting, 250);

function myGreeting() {
  
}



 }

  </script>