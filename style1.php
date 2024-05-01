<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <script src="js.js"></script>
  
<div class="container-fluid mt-3 text-center">
 
  <div class="row">
    <div onclick="action_row(this)" id="1" class="col p-3">1</div>
    <div onclick="action_row(this)" id="2" class="col p-3">2</div>
    <div onclick="action_row(this)" id="3" class="col p-3">3</div>
    <div>
<a href="session_destroy.php">4</a>
    </div>
    
  </div>
</div>

 

<div id="01">TEST</div>

   


<script>
     function action_row(_this){
                  

                    switch (_this.id) {
 
                                            case "1":
                                     var monAtribute = new Atribute("01");
                                       monAtribute.exe_atribute("class","red");

  var ok = new Information("add/01.php"); // création de la classe 
 ok.add("login", "root"); // ajout de l'information pour lenvoi 
  ok.add("password", "root"); // ajout d'une deuxieme information denvoi  
  console.log(ok.info()); // demande l'information dans le tableau
  ok.push(); // envoie l'information au code pkp 


                                    const myTimeout = setTimeout(myGreeting, 205);

                                        function myGreeting() {
                                            Ajax("01","select/01_data.php");

                                        }

                                       
                                                break;

                                                case "2":
                                                day = "Monday";
                                                console.log("2 ok") ; 
                                                break;
                                                case "3":
                                                day = "Monday";
                                                console.log("3 ok") ; 
                                                break;
                                                case "4":
                                                day = "Monday";
                                                console.log("4 ok") ; 
                                                break;
                                            
                                            }
     }
</script>


<style>
    .red{
        background-color:rgba(150,0,0,0.3) ; 
    }
</style>
</body>
</html>
