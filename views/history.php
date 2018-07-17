<?php
require_once('header.php');
require_once('topmenu.php');
?>
<div class="container">
  <h1>Добавление истории</h1>
  <blockquote>
    <p>В данном разделе сайта вы можете поделиться историей своего близкого человека или знакомого, который стал жертвой сталинских репрессий</p>
    <footer></footer>
  </blockquote>
</div>
<form method="POST">
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">@</span>
  </div>
  <input type="text" class="form-control" placeholder="Заголовок" name="caption" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $caption; ?>">
</div>

<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="ФИО героя" name="name" value="<?php echo $name; ?>" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <div class="input-group-append">
    <span class="input-group-text" id="basic-addon2"></span>
  </div>
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
  </div>
  <input type="text" placeholder="Год рождения" name="age" value="<?php echo $age; ?>" class="form-control" id="basic-url" aria-describedby="basic-addon3">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text"></span>
  </div>
  <input type="text" placeholder="Автор истории" name="author" value="<?php echo $author; ?>" class="form-control" aria-label="Amount (to the nearest dollar)">
  <div class="input-group-append">
  </div>
</div>

<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">История</span>
  </div>
  <input class="form-control" aria-label="With textarea" value="<?php echo $history; ?>" name="history">
</div>

<div class="input-group mb-3">
  <input type="submit" name="submit" class="btn btn-primary" style="margin-left: 45%;" aria-label="Amount (to the nearest dollar)">
</div>
</form>
<?php
if($result){
	echo "История успешно добавлена";
}
?>
<?php
require_once('footer.php');
?>