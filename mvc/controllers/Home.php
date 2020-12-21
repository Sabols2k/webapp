<?php

class Home extends Controller{

    function index(){

        require_once "./mvc/views/layout/index.php";

    }

    function aboutus(){

        require_once "./mvc/views/layout/about-us.php";

    }

    function roomlist(){

        require_once "./mvc/views/layout/rooms-list.php";

    }

    function room(){

        require_once "./mvc/views/layout/room.php";

    }

    function restaurant(){

        require_once "./mvc/views/layout/restaurant.php";

    }

    function blog(){

        require_once "./mvc/views/layout/blog.php";

    }

    function contact(){

        require_once "./mvc/views/layout/contact.php";

    }

}
?>