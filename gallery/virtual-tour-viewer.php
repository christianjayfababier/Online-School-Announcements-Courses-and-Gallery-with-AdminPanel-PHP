<html>
  <script async="false" type="text/javascript" src="chrome-extension://fnjhmkhhmkbjkkabndcnnogagogbneec/in-page.js"></script><head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width, shrink-to-fit=no">
    <title>Virtual Tour Viewer</title>
    <link href="assets-vt/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets-vt/css/theme.css" rel="stylesheet">
    <style>
      html, body {
        margin: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        background-color: #000;
      }

      a:link, a:visited{
        color: #bdc3c7;
      }

      .credit{
        position: absolute;
        text-align: center;
        width: 100%;
        padding: 20px 0;
        color: #fff;
      }
    </style>
  </head>

  <body>
  <?php 
                    include '../admin/init/model/config/conn.auth.php';
                    $GET_imgId = intval($_GET['img']);
                    $imgtitle = $_GET['img-title'];
                    $sql = "SELECT * FROM `tb_gallery` WHERE `img_id`= ? AND img_title = ?";
                    $stmt = $conn->prepare($sql); 
                    $stmt->bind_param("is", $GET_imgId, $imgtitle);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    while ($row = $result->fetch_assoc()) {
                   ?>
    <header class="header  header_fixed header_offset" style="background-color: #0F0072;color:#fff">
    
    
        <div class="header__container" style="padding-top: 20px !important;">
    <div class="header__wrapper container-fluid">
    <div class="header__inner"><a href="/" class="logo header__logo"><?= $row['img_title']; ?></a></div>
    </div>
    <div class="header-full-page">
    <div class="header-full-page__bottom container float-right">
    
    
        <ul class="top-menu header-full-page__menu ">
            <li class="top-menu__menu-item">
                <div class="dropdown"><a href="index.php" class="dropdown__trigger top-menu__menu-link" style="padding-left: 800px;">◄ Back</a>
                </div>
            </li>
        </ul>

    </div>
    </div>
    </div>
    </header>


    
    
    <script src="assets-vt/js/three.min.js"></script>
    <script src="assets-vt/js/panolens.min.js"></script>

    <script>

      const panorama = new PANOLENS.ImagePanorama( '../admin/<?=  $row['uploaded_image']; ?>' );
      const viewer = new PANOLENS.Viewer( { output: 'console' } );
      viewer.add( panorama );

    </script><div class="panolens-container" style="width: 100%; height: 100%; background-color: rgb(0, 0, 0);"><canvas width="1920" height="947" class="panolens-canvas" style="width: 1920px; height: 947px; display: block;"></canvas><div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; background: transparent; display: none;"></div><div style="width: 100%; height: 44px; float: left; transform: translateY(-100%); background: -webkit-linear-gradient(bottom, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0)); transition: all 0.27s ease 0s; pointer-events: none;"><span style="padding: 5px 0px; position: fixed; bottom: 100%; right: 14px; background-color: rgb(250, 250, 250); font-family: &quot;Helvetica Neue&quot;; font-size: 14px; visibility: hidden; opacity: 0; box-shadow: rgba(0, 0, 0, 0.25) 0px 0px 12pt; border-radius: 2px; overflow: hidden; will-change: width, height, opacity; pointer-events: auto; transition: all 0.27s ease 0s; width: 200px;"><a type="item" style="display: block; padding: 10px 10px 10px 20px; text-decoration: none; cursor: pointer; pointer-events: auto; transition: all 0.27s ease 0s;">Control<span style="float: right; width: 17px; height: 17px; margin-left: 12px; background-size: cover; background-image: url(&quot;data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz48IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCAyNCAyNCI+PHBhdGggZD0iTTguNTksMTYuNThMMTMuMTcsMTJMOC41OSw3LjQxTDEwLDZMMTYsMTJMMTAsMThMOC41OSwxNi41OFoiIC8+PC9zdmc+&quot;);"></span><span style="font-size: 13px; font-weight: 300; float: right;">Mouse</span></a><a type="item" style="display: block; padding: 10px 10px 10px 20px; text-decoration: none; cursor: pointer; pointer-events: auto; transition: all 0.27s ease 0s;">Mode<span style="float: right; width: 17px; height: 17px; margin-left: 12px; background-size: cover; background-image: url(&quot;data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz48IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCAyNCAyNCI+PHBhdGggZD0iTTguNTksMTYuNThMMTMuMTcsMTJMOC41OSw3LjQxTDEwLDZMMTYsMTJMMTAsMThMOC41OSwxNi41OFoiIC8+PC9zdmc+&quot;);"></span><span style="font-size: 13px; font-weight: 300; float: right;">Normal</span></a></span><span style="cursor: pointer; float: right; width: 44px; height: 100%; background-size: 60%; background-repeat: no-repeat; background-position: center center; user-select: none; position: relative; pointer-events: auto; background-image: url(&quot;data:image/svg+xml;base64,PHN2ZyBmaWxsPSIjRkZGRkZGIiBoZWlnaHQ9IjI0IiB2aWV3Qm94PSIwIDAgMjQgMjQiIHdpZHRoPSIyNCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICAgIDxwYXRoIGQ9Ik0wIDBoMjR2MjRIMHoiIGZpbGw9Im5vbmUiLz4KICAgIDxwYXRoIGQ9Ik03IDE0SDV2NWg1di0ySDd2LTN6bS0yLTRoMlY3aDNWNUg1djV6bTEyIDdoLTN2Mmg1di01aC0ydjN6TTE0IDV2MmgzdjNoMlY1aC01eiIvPgo8L3N2Zz4=&quot;);"></span><span style="cursor: pointer; float: right; width: 44px; height: 100%; background-size: 60%; background-repeat: no-repeat; background-position: center center; user-select: none; position: relative; pointer-events: auto; background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAABmJLR0QAAAAAAAD5Q7t/AAAACXBIWXMAAABIAAAASABGyWs+AAAACXZwQWcAAABAAAAAQADq8/hgAAADn0lEQVR42u2bzUsVURjGnyO6CPzAMnTjppAo3LTwH1CqTfaxbeOiRS37A0wXtROFVi1aRBs3LWohSIGbQAQXViBGRhG0UIRKUCpK7q/FnOB2uc6cOXNmRnGe3eW+H8/7zLln3vNxpQoVKlQ4wjBFJAFOSRqX1O7osivpvjHmU1nChBZglvSYLYJbS0EanCvIJzWK+gnsyH34/8OuMaYjb265jwCgz6N4SWq3vodbAEmnS/KtBDgoAgyU5BteAOAkMAPcBroc7PskDWfgN+wyDwBdltMMcDI3tYBnde/pHeARMNTErgd4APzweP834oeN1dMkz5DlsFNn/yyv4kdiSK4At4AO4CqwGaDwRmza2B0210qM7YhrXU59ANAq6bWkwQTTn5KO5fIE0uVYlXTeGLOXFMx1DrjlULwKKN41x6DlnIjEEQCckPRe0okCiguJr5LOGGO+xhm5jICJQ1i8LOeJJKPYEQAMKvrtt5ZdjSf2FM0Fq/sZJI2A6UNcvCz36TiDfUcAcE1SPu/U6Mm8k/TFfu6XdFb5iX3dGPM8lQfwNod3+TowBnQ3yddtv1vPIe+b1JIBiwEJ1IAJ208k5W21trWA+V/5CHAcmAtU/A2P/DcCiTAHHE8tgCVhgLvAXgYCk17Jo/yTGfLuWe7Zd72AC8CWB4n3OAz7mLytNkZabAEXMhfeQKYfWEpJZCxA3rGUOZeA/qDF15FpAz47EvlNk9neI2e3jeWCz0BbmvipNkSMMX8kuSZYM8Z8zyqAjbHmaN5mOeYjgIXrU93MWrxHrNQjrqiDkQMLHwG+OdqF3NN3jeXKzU8AoF1SzdH8XKhJUO7HZDXLMbwAwICkJUULFxe0SbqSVQAbw3Xi7Ze0ZLmGAzAKbHs0JGU1QtvAaIjCW4B7ZOvJy2qFa5a730RPtBiaz0CgnkiZi6F5fBZDVMvho7EhcuS3xJJ2hV9IupgTqaLw0hhzab8vq23xOG/r+LDsKjLgYVzxUnU0ltwK2wDezUyJmEwqXgp/PL4rvxthaeCSI+zxuA10J8ZkWdJNSb2SLkvayKHwDRu71+ZajrG941J8agALDQ3GU/a/IvMkYCPzmCbtLNEVmacNtgs5iP9fYVNEV1Q6Hez7yNZSL+J2SarTcpqiyV2iUkG0IvPFvbz5FbEn+KEk3wMjwMeSfCsBXFBdly9CAPk9ydyffpECuB5tZfVJjaKWueOSfinln6YK4lahQoUKRxd/AcRPGTcQCAUQAAAAAElFTkSuQmCC&quot;); transition: all 0.27s ease 0s;"></span><span style="display: none;"><span style="cursor: pointer; float: left; width: 44px; height: 100%; background-size: 60%; background-repeat: no-repeat; background-position: center center; user-select: none; position: relative; pointer-events: auto; background-image: url(&quot;data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz48IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCAyNCAyNCI+PHBhdGggc3R5bGU9ImZpbGw6I2ZmZiIgZD0iTTgsNS4xNFYxOS4xNEwxOSwxMi4xNEw4LDUuMTRaIiAvPjwvc3ZnPg==&quot;);"></span><span style="cursor: pointer; float: left; width: 30%; height: 4px; background-size: 60%; background-repeat: no-repeat; background-position: center center; user-select: none; position: relative; pointer-events: auto; margin-top: 20px; background-color: rgba(188, 188, 188, 0.8);"><div style="width: 0%; height: 100%; background-color: rgb(255, 255, 255);"><div style="float: right; width: 14px; height: 14px; transform: translate(7px, -5px); border-radius: 50%; background-color: rgb(221, 221, 221);"></div></div></span></span></div></div><style id="panolens-style-addon">:-webkit-full-screen { width: 100% !important; height: 100% !important }</style>

<?php }  ?>
</body></html>