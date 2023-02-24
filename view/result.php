<?php require_once('../data.php')?>
<!DOCTYPE html>
<html lang="jp">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SearchPlaceOfRestaurant</title>
    <link rel="stylesheet" type="text/css" href="../css/result.css">
  </head>
  <body>
    <section>
      
    </section>

  <div class="container" id="container">
    
  </div>



  

  <script> 
  let jsonData = <?php echo $json; ?>;
  let data = JSON.parse(jsonData);
  const shops = data.results.shop;
  console.log(shops);

  let html = '';
  for (let i = 0; i < shops.length; i++) {


    let viewHtml = '<diV class = "mainContainer">' +
    '<div class="photo">' + 
    '<a href="detail.php">' + '<img src="' + shops[i].photo.pc.m + '">' + '</a>' + 
    '</div>' + 
    '<div class="storeDetail">' + 
    '<h1 class="shopName">' + 
    '<a href="detail.php">' + '店名：' + shops[i].name + '</a>' + '</h1>' + 
    '<p class="address">' + '住所：' + shops[i].address + '</p>' + 
    '<p class="access">' + 'アクセス：' + shops[i].access + '</p>' + 
    '<p class="open">' + '営業日：' + shops[i].open + '</p>' + 
    '<p class="close">' + '定休日：' + shops[i].close + '</p>' + 
    '</div>' +
    '</diV>';


    html += viewHtml

  document.getElementById('container').innerHTML = html;
}
  





  </script>
  </body>
</html>