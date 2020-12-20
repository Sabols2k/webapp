<!-- Begin Page Content -->
<!-- <script src="https://code.jquery.com/jquery-3.5.0.js"></script> -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All Booking</h1>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-secondary">All Bookings</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="http://localhost:8080/Web_App/Quite_Luxury/admin/addroom" class="btn btn-light btn-icon-split mb-3">
                    <span class="icon text-gray-600">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                    <span class="text">ADD NEW</span>
                </a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>RoomID</th>
                            <th>Type</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>STT</th>
                            <th>RoomID</th>
                            <th>Type</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody id="allroom" >
                          
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<script>
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        // console.log(xmlhttp.responseText);
        array = JSON.parse(xmlhttp.responseText);
        console.log(array);

    var stt=1;
    html= array.map(item=>
        `<tr>`+
        `<td>`+stt+`</td>`+
        `<td>`+item['RoomID']+`</td>`+
        `<td>`+item['RoomTypeID']+`</td>`+
        `<td>`+item['RoomPrice']+`</td>`+
        `<td>`+item['Description']+`</td>`+
        `<td>`+item['RoomstatusID']+`</td>`+
        `<td> <button class="btn btn-edit">`+
            `<a href="<?php echo URLAdmin ?>.'editroom/'.`+item['RoomID']+ `">`+
               ` <i class="fas fa-pencil-alt"></i>`+
           ` </a>`+
            `</button>
            <button class="btn btn-delete">
                <a onclick="return window.confirm('Bạn muốn xóa không');"  href="<?php echo URLAdmin?>.'deleteroom/'.`+item['RoomID']+` ">
                    <i class="fas fa-trash-alt"></i>
                </a>
            </button>`+
        `</td>`+
        `</tr>`


                    );
                        $('#allroom').html(html);
    }
    
    };
    xmlhttp.open("GET", "http://localhost:8080/Web_App/Quite_Luxury/api/AllRoomtype", true);
    xmlhttp.send();

    

</script>
