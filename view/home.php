<!DOCTYPE html>
<html lang="jp">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SearchPlaceOfRestaurant</title>
  <link rel="stylesheet" type="text/css" href="../css/home.css">
</head>

<body>
  <div class="searchForm">
    <div>
      <button id="btn" class="btn">現在地取得</button>

    </div>
    <form id="form" method="post" action="result.php">
      <div>

        <label for="latitude">緯度</label>
        <input type="text" id="latitude" name="latitude">
        <label for="longitude">経度</label>
        <input type="text" id="longitude" name="longitude">

        <div class="select-wrapper">
          <label for="range">選択範囲（初期値3000m）</label>
          <select id="range" name="range">
            <option value="---">---</option>
            <option value="1">300m</option>
            <option value="2">500m</option>
            <option value="3">1000m</option>
            <option value="4">2000m</option>
            <option value="5">3000m</option>
          </select>
        </div>
        
        <input type="submit" class="btn" name="search" value="検索">
      </div>
    </form>
  </div>

  <script src="../js/geolocation.js"></script>
</body>

</html>