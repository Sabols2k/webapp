<?php

class Home extends Controller{

    // Must have SayHi()
    function SayHi(){
        // $teo = $this->model("SinhVienModel");
        // echo $teo->GetSV();
        require_once "./mvc/views/Quite_Luxury/index.php";

    }

    function Show($a, $b){        
        // // Call Models
        // $teo = $this->model("SinhVienModel");
        // $tong = $teo->Tong($a, $b); // 3

        // // Call Views
        // $this->view("aodep", [
        //     "Page"=>"news",
        //     "Number"=>$tong,
        //     "Mau"=>"red",
        //     "SoThich"=>["A", "B", "C"],
        //     "SV" => $teo->SinhVien()
        // ]);
        echo "shgdlldflg";
    }
}
?>