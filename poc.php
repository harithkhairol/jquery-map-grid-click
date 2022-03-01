<!DOCTYPE html>
<html>
<head>
<style>
.grid-container {

  position: absolute;

  display: grid;
  grid-template-columns: auto auto auto auto auto auto auto auto auto;
  background-color: #2196F3;
  background-image:url('saton2.png');
  grid-template-rows: auto auto;
  /* width: 100%;
  height:  100%; */
  width: 1910px;
  height:  960px

}
.grid-item {
  border: 1px solid rgba(0, 0, 0, 0.8);
  padding: 20px;
  font-size: 30px;
  text-align: center;
}

.grid-item:hover {
  /* background-color:blue; */
  background-color: rgba(0,0,0,0.7);
}

.sidenav{
    height: 100%; /* Full-height: remove this if you want "auto" height */
  width: 500px; /* Set the width of the sidebar */
  position: fixed; /* Fixed Sidebar (stay in place on scroll) */
  z-index: 1; /* Stay on top */
  top: 0; /* Stay at the top */
  left: 0;
  background-color: rgba(14, 0, 77,0.9);
  /* background-color: #111;  */
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 20px;
  text-align:center;
}

/* The navigation menu links */
.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  /* display: block; */ 
  
}

.sidenav p {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
  color: #f1f1f1;
}

button {
  /* background-color: #4CAF50;  */
  background-color: #7024E1; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}

button:hover {
  
  background-color: #621FC6;
  /* background-color: #3e8e41 */

}

button:active {
  background-color: #621FC6;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}


</style>

<!-- new -->
<style>

.clicked{
    /* background-color:blue; */
    background-color: rgba(0,0,0,0.7);
}

</style>
</head>
<body>
<div class="sidenav">
    <p id="total_tiles">0 Tiles Selected</p>
    <p id="total_price">0 USDT</p>
    <button id="btnBuy">Buy Now</button>
</div>

<div class="grid-container">
  <div class="grid-item"></div>
  <div class="grid-item"></div>
  <div class="grid-item"></div>  
  <div class="grid-item"></div>
  <div class="grid-item"></div>
  <div class="grid-item"></div>  
  <div class="grid-item"></div>
  <div class="grid-item"></div>
  <div class="grid-item"></div>  
  <div class="grid-item"></div>
  <div class="grid-item"></div>
  <div class="grid-item"></div>  
  <div class="grid-item"></div>
  <div class="grid-item"></div>
  <div class="grid-item"></div>  
  <div class="grid-item"></div>
  <div class="grid-item"></div>
  <div class="grid-item"></div>  
  <div class="grid-item"></div>
  <div class="grid-item"></div>  
  <div class="grid-item"></div>
  <div class="grid-item"></div>
  <div class="grid-item"></div>  
  <div class="grid-item"></div>
  <div class="grid-item"></div>
  <div class="grid-item"></div>  
  <div class="grid-item"></div>
  <div class="grid-item"></div>
  <div class="grid-item"></div>  
  <div class="grid-item"></div>
  <div class="grid-item"></div>
  <div class="grid-item"></div>
  <div class="grid-item"></div>
  <div class="grid-item"></div>  
  <div class="grid-item"></div>
  <div class="grid-item"></div>
  <div class="grid-item"></div>  
  <div class="grid-item"></div>
  <div class="grid-item"></div>  
  <div class="grid-item"></div>
  <div class="grid-item"></div>
  <div class="grid-item"></div>  
  <div class="grid-item"></div>
  <div class="grid-item"></div>
  <div class="grid-item"></div>  
  <div class="grid-item"></div>
  <div class="grid-item"></div>
  <div class="grid-item"></div>  
  <div class="grid-item"></div>
  <div class="grid-item"></div>  
  <div class="grid-item"></div>
  <div class="grid-item"></div>  
  <div class="grid-item"></div>
  <div class="grid-item"></div>  
</div>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>

    $tiles = 0;
    $price = 0;

    $(".grid-item").click(function(){
        

        if ($(this).hasClass("clicked")) {
            $tiles = $tiles - 1;
            $price = $price - 1.33;
        }
        else {
            $tiles = $tiles + 1;
            $price = $price + 1.33;
        }

        $(this).toggleClass("clicked");

        $("#total_tiles").text($tiles+" Tiles Selected");
        $("#total_price").text($price+" USDT");
        
    });

    $("#btnBuy").click(function(){
        alert("You have buy "+$tiles+" tiles with the price "+$price+" USDT successfuly!!");
        location.reload();

    }); 

</script>
</html>


