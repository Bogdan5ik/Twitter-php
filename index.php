<!DOCTYPE html>
<html>
<head>
	<title>Главная</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<?php 
$con = mysqli_connect("127.0.0.1", "root", "", "twitter");
if (!$con) {
    $error = mysqli_connect_error();
    echo "<script>console.error('Connection failed: ". addslashes($error) ."');</script>";
    die();
} else {
    echo "<script>console.log('Connected successfully');</script>";
}
$select = "SELECT * FROM `tweets`";
$results = mysqli_query($con, $select);

$tweet1 = mysqli_fetch_assoc($results);
$tweet2 = mysqli_fetch_assoc($results);
$tweet3 = mysqli_fetch_assoc($results);





    
?>
<body class="">												
	<div class="main mt-3">
		<div class="container">
			<div class="row">
				<!-- левая колонка --> 
				<div class="col-3">
					<div class="mt-3">
						<h4 class="fw-normal">Главная</h4>
					</div>
					<div class="mt-4">
						<h4 class="fw-normal">Обзор</h4>
					</div>
					<div class="mt-4">
						<h4 class="fw-normal">Уведомления</h4>
					</div>
					<div class="mt-4">
						<h4 class="fw-normal">Сообщения</h4>
					</div>
					<div class="mt-4">
						<h4 class="fw-normal">Закладки</h4>
					</div>
					<div class="mt-4">
						<h4 class="fw-normal">Списки</h4>
					</div>
					<div class="mt-4">
						<h4 class="fw-normal">Профиль</h4>
					</div>
					<div class="mt-4">
						<button class="rounded-pill btn btn-primary w-75 py-2">Твитнуть</button>
					</div>
					
				</div>

				<!-- Средняя колонка -->
				<div class="col-6 border-end border-start">
					<!--Добавить твит форма-->
					<div class="pt-2 bg-white">						
						<div class="row">							
							<div class="col-1">
								
								<img name="img" src="img/1.jpg" class="rounded-circle">
							</div>							
							<div class="col-10">
								<div class="col-12">
									<form action="index.php" method="GET">

									<input name="name" type="text" class="form-control" placeholder="Автор">
									<textarea name="text" class="form-control mt-2" placeholder="Что нового?"></textarea>
									<button type="submit" class="btn btn-primary mt-2">Твитнуть</button>

									</form>
								</div>								
							</div>
						</div>				
							
					</div>

					<!--Вывод постов тут-->
					<div class="pt-2 bg-while">

					   <div class="row mt-2 border-top border-bottom py-3">
							<div class="col-2">
								<img src="img/1.jpg" class="rounded-circle w-75" alt="">
						</div>
							<div class="col-10">
								<h6><?php echo $_GET['name']?></h6>
								<p><?php echo $_GET['text']?></p>
							</div>
						</div>

						<div class="row mt-2 border-top border-bottom py-3">
							<div class="col-2">
								<img src="<?php echo $tweet1['avatar']?>" class="rounded-circle w-75" alt="">
						</div>
							<div class="col-10">
								<h6><?php echo $tweet1['name']?></h6>

								<p><?php echo $tweet1['text']?></p>
								<img src="<?php echo $tweet1['image']?>" class="rounded-circle w-75" alt="">
							</div>
						</div>

						<div class="row mt-2 border-top border-bottom py-3">
							<div class="col-2">
								<img src="<?php echo $tweet2['avatar']?>" class="rounded-circle w-75" alt="">
						</div>
							<div class="col-10">
								<h6><?php echo $tweet2['name']?></h6>

								<p><?php echo $tweet2['text']?></p>
								<img src="<?php echo $tweet2['image']?>" class="rounded-circle w-75" alt="">
							</div>
						</div>

						<div class="row mt-2 border-top border-bottom py-3">
							<div class="col-2">
								<img src="<?php echo $tweet3['avatar']?>" class="rounded-circle w-75" alt="">
						</div>
							<div class="col-10">
								<h6><?php echo $tweet3['name']?></h6>

								<p><?php echo $tweet3['text']?></p>
								<img src="<?php echo $tweet3['image']?>" class="rounded-circle w-75" alt="">
							</div>
						</div>



					</div>
					
				</div>

				<!--Правая колонка-->
				<div class="col-3">
					Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda magnam ut quos veritatis laborum beatae earum. Facere atque voluptatum ad repudiandae nesciunt! Temporibus inventore repudiandae facilis nulla, cum omnis voluptate.
				</div>
			</div>
		</div>
	</div>
</body>
</html>