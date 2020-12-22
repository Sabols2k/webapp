<?php

class Home extends Controller{

    public function index(){
        // header("Location:". URL_Layout."index");
         
        // header('Location:'.URL_Layout.'index');
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

    function services(){

        require_once "./mvc/views/layout/services.php";

    }

    function restaurant(){

        require_once "./mvc/views/layout/restaurant.php";

    }

    function blog(){

        require_once "./mvc/views/layout/blog.php";

    }

    function blogpost(){

        require_once "./mvc/views/layout/blog-post.php";

    }

    function contact(){

        require_once "./mvc/views/layout/contact.php";

    }
}
?>