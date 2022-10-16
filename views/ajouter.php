<!Doctype HTML>
<html>
<head>
	<title>Ecom</title>
    <link rel="shortcut icon" href="../images/logo.jpeg">
	<link rel="stylesheet" href="../style/style3.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>
	
	<div id="mySidenav" class="sidenav">
	<p class="logo"><i class="fa fa-ioxhost" aria-hidden="true"></i></span></span>&nbsp;Ecom</p>
  <a href="#" class="icon-a"><i class="fa fa-bar-chart icons"></i> &nbsp;&nbsp;Statistiques</a>
  <a href="#"class="icon-a"><i class="fa fa-plus-circle icons"></i> &nbsp;&nbsp;Ajouter Cours</a>
  <a href="#"class="icon-a"><i class="fa fa-caret-square-o-right icons"></i> &nbsp;&nbsp;Ajouter Leçon</a>
  <a href="#"class="icon-a"><i class="fa ffa fa-paypal icons"></i> &nbsp;&nbsp;Retrait des bénéfices</a>
  <a href="#"class="icon-a"><i class="fa fa-sign-out icons"></i> &nbsp;&nbsp;Se déconnecter</a>

</div>
<div id="main">

	<div class="head">
		<div class="col-div-6">
<span style="font-size:30px;cursor:pointer; color: white;" class="nav"  >&#9776; Statistiques</span>
<span style="font-size:30px;cursor:pointer; color: white;" class="nav2"  >&#9776; Statistiques</span>
</div>
	
	<div class="col-div-6">
	<div class="profile">

		<img src="../images/user.png" class="pro-img" />
		<p>user <span></span></p>
	</div>
</div>
	<div class="clearfix"></div>
</div>

<div class="clearfix"></div>
	<br/>
	
	<button class="btn_add">Ajouter</button>
	<div class="clearfix"></div>
	<br/><br/>
	<div class="col-div-8"  style="width:100%">
		<div class="box-8">
		<div class="content-box">
			<p>Mes cours</p>
			<br/>
<table >
  <tr>
    <th>Cours</th>
    <th>Destinataire</th>
    <th>Bénéfices</th>
  </tr>
  <tr>
    <td>Laravel</td>
    <td>55</td>
    <td>70 $</td>
  </tr>
  <tr>
    <td>Vue js</td>
    <td>15</td>
    <td>25 $</td>
  </tr>
  

  
  
</table>
		</div>
	</div>
	</div>


		
	<div class="clearfix"></div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

  $(".nav").click(function(){
    $("#mySidenav").css('width','70px');
    $("#main").css('margin-left','70px');
    $(".logo").css('visibility', 'hidden');
    $(".logo span").css('visibility', 'visible');
     $(".logo span").css('margin-left', '-10px');
     $(".icon-a").css('visibility', 'hidden');
     $(".icons").css('visibility', 'visible');
     $(".icons").css('margin-left', '-8px');
      $(".nav").css('display','none');
      $(".nav2").css('display','block');
  });

$(".nav2").click(function(){
    $("#mySidenav").css('width','300px');
    $("#main").css('margin-left','300px');
    $(".logo").css('visibility', 'visible');
     $(".icon-a").css('visibility', 'visible');
     $(".icons").css('visibility', 'visible');
     $(".nav").css('display','block');
      $(".nav2").css('display','none');
 });

</script>

</body>


</html>
