<?php
require_once('header.php');
require_once('topmenu.php');
?>
<!-- Default form register -->
<form style="width: 300px; margin-left: 40%" method="POST">
    <p class="h4 text-center mb-4">Sign up</p>

    <!-- Default input name -->
    <label for="defaultFormRegisterNameEx" class="grey-text">Login</label>
    <input type="text" name="login" class="form-control" value="<?php echo $login?>">

    <br>

    <!-- Default input email -->
    <label for="defaultFormRegisterEmailEx" class="grey-text">Email</label>
    <input type="email" name="email" class="form-control" value="<?php echo $email?>">

    <br>

    <!-- Default input email -->
    <label for="defaultFormRegisterConfirmEx" class="grey-text">Password</label>
    <input type="password" name="password" class="form-control" value="<?php echo $password?>">

    <br>

    <!-- Default input password -->
    <label for="defaultFormRegisterPasswordEx" class="grey-text">Повторите пароль</label>
    <input type="password" name="repeat_password" class="form-control" value="<?php echo $repeat_password?>">

    <div class="text-center mt-4">
        <input class="btn btn-unique" name="submit" type="submit" value="Регистрация">
    </div>
    <?php
		if ($result){
			echo "Вы зарегистрированы";
		}
    ?>
    <?php if (isset($errors)):?>
    	<ul>
    	<?php foreach ($errors as $error) :?> 
    			<li><?php echo $error; ?></li>
    	<?php endforeach; ?>
    	</ul>
    <?php endif; ?>		
</form>
<!-- Default form register -->
<?php
require_once('footer.php');
?>