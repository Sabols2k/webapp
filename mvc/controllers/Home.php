<?php

class Home extends Controller{

    public function index(){

        require_once "./mvc/views/layout/index.php";

    }

    function AboutUs(){

        require_once "./mvc/views/layout/about-us.php";

    }

    function RoomList(){

        require_once "./mvc/views/layout/rooms-list.php";

    }

    function Room(){

        require_once "./mvc/views/layout/room.php";

    }

    function Restaurant(){

        require_once "./mvc/views/layout/restaurant.php";

    }

    function Blog(){

        require_once "./mvc/views/layout/blog.php";

    }

    function Blogpost(){

        require_once "./mvc/views/layout/blog-post.php";

    }

    function Contact(){

        require_once "./mvc/views/layout/contact.php";

    }

    

}
?>