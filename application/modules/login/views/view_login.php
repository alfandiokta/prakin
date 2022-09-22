<!DOCTYPE html>
<html>
<head>
    
	<title>Membuat Desain Form Login Dengan CSS - www.malasngoding.com</title>
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    <style>
        body{
	font-family: sans-serif;
	background: #d5f0f3;
}

h1{
	text-align: center;
	/*ketebalan font*/
	font-weight: 300;
}

.tulisan_login{
	text-align: center;
	/*membuat semua huruf menjadi kapital*/
	text-transform: uppercase;
}

.kotak_login{
	width: 350px;
	background: white;
	/*meletakkan form ke tengah*/
	margin: 80px auto;
	padding: 30px 20px;
}

label{
	font-size: 11pt;
}

.form_login{
	/*membuat lebar form penuh*/
	box-sizing : border-box;
	width: 100%;
	padding: 10px;
	font-size: 11pt;
	margin-bottom: 20px;
}

.tombol_login{
	background: #46de4b;
	color: white;
	font-size: 11pt;
	width: 100%;
	border: none;
	border-radius: 3px;
	padding: 10px 20px;
}

.link{
	color: #232323;
	text-decoration: none;
	font-size: 10pt;
}
    </style>
</head>
<body>

	<h1>Membuat Desain Form Login Dengan CSS <br/> www.malasngoding.com</h1>

	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>

		<form action="<?= base_url('Login') ?>" method="post">
			<label>Username</label>
			<input type="text" name="email" id="email" class="form_login" placeholder="Username atau email ..">

			<label>Password</label>
			<input type="text" name="password" id="password" class="form_login" placeholder="Password ..">

			<input type="submit" class="tombol_login" value="LOGIN">

			<br/>
			<br/>
			<center>
            <p class="text-gray-600" >Belum punya akun? <a href="<?= base_url(); ?>website/#contact"
                                class="font-bold">Daftar akun</a>.</p>
			</center>
		</form>
		
	</div>


</body>
</html>