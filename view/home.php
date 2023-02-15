<!DOCTYPE html>
<html lang="jp">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <div class="d-flex justify-content-center">
        <button id="btn" class="btn btn-outline-primary btn-lg">
          現在地取得
        </button>
        
      </div>
    <div class="d-flex justify-content-center">
      <form id="form" method="post" action="result.php">
        <div class="">

          <input id="latitude" class="m-3" name="latitude" type="text" value="緯度">

          <input id="longitude" class="m-3" name="longitude" type="text" value="経度">


          <label for="ranges">検索範囲</label>
          <select id="range" name="range">
            <option value="---">---</option>
            <option value="1">300m</option>
            <option value="2">500m</option>
            <option value="3">1000m</option>
            <option value="4">2000m</option>
            <option value="5">3000m</option>
          </select>

          <input type="submit" name="search" value="検索" >
        </div>
      </form>
    </div>


  

    <script src="../js/geolocation.js"></script>
  </body>
</html>


