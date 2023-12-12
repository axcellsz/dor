<?php

?>

<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Three</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<style type="text/css">
    #wrapshopcart{width:350px;margin:auto;padding:20px;
     padding-bottom: 1px;margin-bottom: 20px;background:#fff;box-shadow:0 0 5px #c1c1c1;border-radius:5px;}
    #response{
        text-align: center;
    }
    #EE{
        width: 50%;
    }
    textarea { resize:none; }
    #count{
        text-align: right;
    }
</style>
</head>
<body>
<br>
<div id="wrapshopcart">
    <h3><center>TEMBAK INDOSAT</h3>
    <hr/>
    <div class="form-group">
        
<form method="POST" action="proses.php"> 

                <label>Nomor : </label>
<input type="number" class="form-control" name="nomor" placeholder="input nomor"><br>
                
                <div class="form-group">
                    <label>Pilih Paket</label>
<select name="paket" class="form-control"><option value="1">2.5 Gb aktif 30 Hari</option><option value="2">7 Gb aktif 30 Hari</option><option value="3">10 Gb aktif 30 Hari</option><option value="4">Edu 30 Gb aktif 30 Hari</option><option value="5">Tlp Sesama Indosat </option>
                    </select>
                </div>
                <button type="Submit" class="btn btn-success">Kirim</button>
                <br>
                <h5><center>XEILEENC</center><h5>
                </div>
            </form>
    </div>
</body>
</html>
