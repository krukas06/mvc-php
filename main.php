<?php
//FRONT CONTROLER
        //ВЫВОД ОШИБОК
        ini_set('display_errors', 1);
        
        

        //ПОДКЛЮЧЕНИЕ ФАЙЛА С РОУТАМИ
        define('ROOT', dirname(__FILE__));
        require_once(ROOT.'/component/autoload.php');
        require_once(ROOT.'/component/router.php');


        //ВЫЗОВ ROUTER
        $router= new Router();
        $router->run();
?>
