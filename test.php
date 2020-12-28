<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap core JavaScript-->
</head>
<body>
    <form action="">
    <button style="color: #fff; background: #000;"  type="button" class="btn btn-primary pt-3 pb-3 pl-5 pr-5" id="btn">Thanh toán </button>
    </form>
</body>

</html>
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script>

    var html = `<h1 style="color: #fff; background: #000;" > xin chao </h1> <br/>`;
    
    // email = $("#inputEmail").val();
        Email.send({
            Host: "smtp.gmail.com",
            Username: "henrytranls2k@gmail.com",
            Password: "Henry1234",
            SecureToken: "Generate token here",
            From: "henrytranls2k@gmail.com",
            To: "dangducchau2000@gmail.com",
            Subject: "You've booked from Quite Luxury!",
            Body: html+ "xin chao bạn (khong co button)"
        })
    

</script>

    


  
