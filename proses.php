<?php
$nom = $_POST['nomor'];
$package = $_POST['paket'];
switch ($package){
case "1":
 $data = '{
	"tokenid": "eyJhbGciOiJIUzUxMiJ9.eyJzdWIiOiIiLCJzY2xzIjoiNjQxIiwiY3JlYXRlZGRhdGUiOiIyMDIzLTExLTMwIDIwOjE3OjUxLjgzNSIsImNoYW5uZWwiOiJWMk1ZSU0zIiwidXNlcnR5cGUiOiJQUkVQQUlEIiwiYXBwdmVyc2lvbiI6IjgxLjE1LjAiLCJsYW5ndWFnZSI6IklEIiwicDJwIjoidHJ1ZSIsIm5ldHdvcmsiOiJXSUZJIiwiYXV0aHR5cGUiOjIsInVwZGF0ZWRkYXRlIjoiMjAyMy0xMS0zMCAyMDoxNzo1MS44MzUiLCJpYyI6bnVsbCwibXNpc2RuIjoiYWI1M2ZhYmM3OWI4MDU5MmE4MDFlNDhkMDciLCJvc3ZlcnNpb24iOiI3LjEuMiIsImV4cCI6MjI1NjUwMTUwMjcxLCJpYXQiOjE3MDEzNTAyNzEsIm9zbmFtZSI6IkFuZHJvaWQifQ.lv9MK5DGhry1FWKwdhEoIcYoxC7z1yQnC_yPCU99kJNdwlQTrEuipcL2jIbZPoJGqzxCgCyjJsLLqlbWTJLqQg",
	"keyword": "6d62191e6c69181b6f1e7969",
	"shortcode": "929",
	"offerid": "6d62191e6c69181b6f1e796974121b74677f78",
	"name": "paket",
	"packagename": "Freedom Internet 2.5GB / 30 Hari",
	"normalprice": "5000",
	"discountprice": 5000,
	"paymentchannel": {
		"payment": "ovo",
		"value": "6281646805770"
	},
	"check": true,
	"giftnumber": "'.$nom.'"
}';
 break;

 case "2":
 $data = '{
	"tokenid": "eyJhbGciOiJIUzUxMiJ9.eyJzdWIiOiIiLCJzY2xzIjoiNjQxIiwiY3JlYXRlZGRhdGUiOiIyMDIzLTExLTMwIDIwOjE3OjUxLjgzNSIsImNoYW5uZWwiOiJWMk1ZSU0zIiwidXNlcnR5cGUiOiJQUkVQQUlEIiwiYXBwdmVyc2lvbiI6IjgxLjE1LjAiLCJsYW5ndWFnZSI6IklEIiwicDJwIjoidHJ1ZSIsIm5ldHdvcmsiOiJXSUZJIiwiYXV0aHR5cGUiOjIsInVwZGF0ZWRkYXRlIjoiMjAyMy0xMS0zMCAyMDoxNzo1MS44MzUiLCJpYyI6bnVsbCwibXNpc2RuIjoiYWI1M2ZhYmM3OWI4MDU5MmE4MDFlNDhkMDciLCJvc3ZlcnNpb24iOiI3LjEuMiIsImV4cCI6MjI1NjUwMTUwMjcxLCJpYXQiOjE3MDEzNTAyNzEsIm9zbmFtZSI6IkFuZHJvaWQifQ.lv9MK5DGhry1FWKwdhEoIcYoxC7z1yQnC_yPCU99kJNdwlQTrEuipcL2jIbZPoJGqzxCgCyjJsLLqlbWTJLqQg",
	"keyword": "6d621c6c69181b6f1a1e7969",
	"shortcode": "929",
	"offerid": "6d621c6c69181b6f1a1e796974121b74677f78",
	"name": "paket",
	"packagename": "Freedom Internet 7GB Rp15rb",
	"normalprice": "15000",
	"discountprice": 15000,
	"paymentchannel": {
		"payment": "ovo",
		"value": "6281646805770"
	},
	"check": true,
	"giftnumber": "'.$nom.'"
}';
 break;

 case "3":
 $data = '{
	"tokenid": "eyJhbGciOiJIUzUxMiJ9.eyJzdWIiOiIiLCJzY2xzIjoiNjQxIiwiY3JlYXRlZGRhdGUiOiIyMDIzLTExLTMwIDIwOjE3OjUxLjgzNSIsImNoYW5uZWwiOiJWMk1ZSU0zIiwidXNlcnR5cGUiOiJQUkVQQUlEIiwiYXBwdmVyc2lvbiI6IjgxLjE1LjAiLCJsYW5ndWFnZSI6IklEIiwicDJwIjoidHJ1ZSIsIm5ldHdvcmsiOiJXSUZJIiwiYXV0aHR5cGUiOjIsInVwZGF0ZWRkYXRlIjoiMjAyMy0xMS0zMCAyMDoxNzo1MS44MzUiLCJpYyI6bnVsbCwibXNpc2RuIjoiYWI1M2ZhYmM3OWI4MDU5MmE4MDFlNDhkMDciLCJvc3ZlcnNpb24iOiI3LjEuMiIsImV4cCI6MjI1NjUwMTUwMjcxLCJpYXQiOjE3MDEzNTAyNzEsIm9zbmFtZSI6IkFuZHJvaWQifQ.lv9MK5DGhry1FWKwdhEoIcYoxC7z1yQnC_yPCU99kJNdwlQTrEuipcL2jIbZPoJGqzxCgCyjJsLLqlbWTJLqQg",
	"keyword": "6d621a1b6c69181b6f191b7969",
	"shortcode": "929",
	"offerid": "6d621a1b6c69181b6f191b796974121b74677f78",
	"name": "paket",
	"packagename": "Freedom Internet 10GB / 30 Hari",
	"normalprice": "20000",
	"discountprice": 20000,
	"paymentchannel": {
		"payment": "ovo",
		"value": "6281646805770"
	},
	"check": true,
	"giftnumber": "'.$nom.'"
}';
 break;

 case "4":
 $data = '{
	"tokenid": "eyJhbGciOiJIUzUxMiJ9.eyJzdWIiOiIiLCJzY2xzIjoiNjQxIiwiY3JlYXRlZGRhdGUiOiIyMDIzLTExLTMwIDIwOjE3OjUxLjgzNSIsImNoYW5uZWwiOiJWMk1ZSU0zIiwidXNlcnR5cGUiOiJQUkVQQUlEIiwiYXBwdmVyc2lvbiI6IjgxLjE1LjAiLCJsYW5ndWFnZSI6IklEIiwicDJwIjoidHJ1ZSIsIm5ldHdvcmsiOiJXSUZJIiwiYXV0aHR5cGUiOjIsInVwZGF0ZWRkYXRlIjoiMjAyMy0xMS0zMCAyMDoxNzo1MS44MzUiLCJpYyI6bnVsbCwibXNpc2RuIjoiYWI1M2ZhYmM3OWI4MDU5MmE4MDFlNDhkMDciLCJvc3ZlcnNpb24iOiI3LjEuMiIsImV4cCI6MjI1NjUwMTUwMjcxLCJpYXQiOjE3MDEzNTAyNzEsIm9zbmFtZSI6IkFuZHJvaWQifQ.lv9MK5DGhry1FWKwdhEoIcYoxC7z1yQnC_yPCU99kJNdwlQTrEuipcL2jIbZPoJGqzxCgCyjJsLLqlbWTJLqQg",
	"keyword": "6e6f7e6a7b7b78181b6c69",
	"shortcode": "363",
	"offerid": "6e6f7e6a7b7b78181b6c69741a1b1b74677f78",
	"name": "paket",
	"packagename": "Freedom Apps EDU 30GB/30 Hari",
	"normalprice": "24800",
	"discountprice": 24800,
	"paymentchannel": {
		"payment": "ovo",
		"value": "6281646805770"
	},
	"check": true,
	"giftnumber": "'.$nom.'"
}';

break;

case "5":
 $data = '{
	"tokenid": "eyJhbGciOiJIUzUxMiJ9.eyJzdWIiOiIiLCJzY2xzIjoiNjQxIiwiY3JlYXRlZGRhdGUiOiIyMDIzLTExLTMwIDIwOjE3OjUxLjgzNSIsImNoYW5uZWwiOiJWMk1ZSU0zIiwidXNlcnR5cGUiOiJQUkVQQUlEIiwiYXBwdmVyc2lvbiI6IjgxLjE1LjAiLCJsYW5ndWFnZSI6IklEIiwicDJwIjoidHJ1ZSIsIm5ldHdvcmsiOiJXSUZJIiwiYXV0aHR5cGUiOjIsInVwZGF0ZWRkYXRlIjoiMjAyMy0xMS0zMCAyMDoxNzo1MS44MzUiLCJpYyI6bnVsbCwibXNpc2RuIjoiYWI1M2ZhYmM3OWI4MDU5MmE4MDFlNDhkMDciLCJvc3ZlcnNpb24iOiI3LjEuMiIsImV4cCI6MjI1NjUwMTUwMjcxLCJpYXQiOjE3MDEzNTAyNzEsIm9zbmFtZSI6IkFuZHJvaWQifQ.lv9MK5DGhry1FWKwdhEoIcYoxC7z1yQnC_yPCU99kJNdwlQTrEuipcL2jIbZPoJGqzxCgCyjJsLLqlbWTJLqQg",
	"keyword": "7d1b1b1a1b1b656a191b1b",
	"offerid": "7d1b1b1a1b1b656a191b1b74121b74677f78",
	"name": "paket",
	"packagename": "Nelpon Sepuasnya ke Sesama Indosat dan Tri / 30 Hari",
	"normalprice": "5000",
	"discountprice": 5000,
	"paymentchannel": {
		"payment": "ovo",
		"value": "6281646805770"
	},
	"check": true,
	"giftnumber": "'.$nom.'"
}';

break;
}

$url = 'https://im3ku.netlify.app/api/users/buy_package';
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data)
));

$response = curl_exec($ch);
if(curl_errno($ch)) {
    echo 'Error: ' . curl_error($ch);
} 

curl_close($ch);

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
        
<form method="POST" action="index.php"> 

               
                
                <div class="form-group">
                    
                
            </form>
<textarea class="form-control input-sm" type="textarea" placeholder="message" maxlength="150" rows="10" style="text-align: center;" readonly><?php echo $response; ?></textarea>
<br>
<center><button type="Submit" class="btn btn-success">kembali</button>
    
</body>
</html>
