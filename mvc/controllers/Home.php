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

    function restaurant(){

        require_once "./mvc/views/layout/restaurant.php";

    }

    function spa(){

        require_once "./mvc/views/layout/spa.php";

    }

    function blog(){

        require_once "./mvc/views/layout/blog.php";

    }

    function event(){

        require_once "./mvc/views/layout/events.php";

    }

    function contact(){

        require_once "./mvc/views/layout/contact.php";

    }

}
?>