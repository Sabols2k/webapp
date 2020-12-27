<?php
class bookingform extends DB{
  public function __construct()
	{
		parent::__construct();
    }
    public function demphongtrong(){
        // $sql ="SELECT * FROM bookings";
        $sql ="CALL `DemPhongTrong`()";
        $this->execute($sql);
        while($datas=$this->getData('bookings')){
            $data[]=$datas;
        }
        return $data;
      }

}

?>