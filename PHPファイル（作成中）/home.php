<!DOCTYPE html>
<html lang="ja" >
<head>
  <meta charset="UTF-8">
  <title>ホーム</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
    <form action="" method="post">
        <div class="login">
            <div class="form">
            <h2>ホーム</h2>
            <div class="form-field">
                <button type="submit" class="button" name="khach">
                    <div class="arrow-wrapper">
                    </div>
                    <p class="button-text">お客様用画面</p>
                </button>
                <button type="submit" class="button" name="quanli">
                    <div class="arrow-wrapper">
                    </div>
                    <p class="button-text">管理者用画面</p>
                </button>
            </div>
            </div>
        </div>
            </div>
    </form>
</body>
</html>
<?php
      if(isset($_POST['khach'])){
        header("Location: ./category.php");
  }
      if(isset($_POST['quanli'])){
          header("Location: ./manager_login.php");
    }																																																			                                                                                                                                                                                                                                                                                                                                                        
?>