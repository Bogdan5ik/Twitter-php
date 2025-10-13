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



$select_trends = "SELECT * FROM `trends`";
$results_trends = mysqli_query($con, $select_trends);



    
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
								
								<img name="img" src="img/1.png" class="rounded-circle">
							</div>							
							<div class="col-10">
								<div class="col-12">
									<form action="insert.php" method="GET">

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

					<form action="update.php" method="GET" class="text-center">
							<input class="form-control mt-2" type="number" placeholder="id твита" name="id">
							<input class="form-control mt-2" type="text" placeholder="Имя" name="name">
							<input class="form-control mt-2" type="text" placeholder="Текст" name="text">
							<button class="btn btn-success mt-2">Редактировать</button>
					</form>



					   <div class="row mt-2 border-top border-bottom py-3">
							<div class="col-2">
								<img src="img/1.jpg" class="rounded-circle w-75" alt="">
						</div>
							<div class="col-10">
								<h6><?php echo $_GET['name']?></h6>
								<p><?php echo $_GET['text']?></p>
							</div>
						</div>

						<?php

              for ($i=0; $i < mysqli_num_rows($results) ; $i++){
	$tweet = mysqli_fetch_assoc($results);

?>

						<div class="row mt-2 border-top border-bottom py-3">
							<div class="col-2">
								<img src="<?php echo $tweet['avatar']?>" class="rounded-circle w-75" alt="">
						</div>
							<div class="col-10">
								<h6><?php echo $tweet['name']?></h6>

								<p><?php echo $tweet['text']?></p>
								<img src="<?php echo $tweet['image']?>" class="rounded-circle w-75" alt="">
								<form action="insert2.php" method="GET">
						<div class="col">
							<input style="display: none;" type="number" name="id" value="<?php echo $tweet['id']; ?>">
							<button type="submit" class="btn btn-danger mt-2">Удалить</button>
						</div>
						</form>
							</div>
						</div>

						<?php
						}
						?>

						



					</div>
					
				</div>

				<!--Правая колонка-->
				<div class="col-3 d-flex">
					<div class="col-3" style="background: rgb(210, 210, 210); width: 100%; height: 10rem;">

					<div class="col d-flex">
					<form action="insert1.php" method="GET">
						

						<div class="col" style="height: 3rem;">
							<input name="title" type="text" class="form-control" placeholder="Название" style="border: 1px solid gray; width: 18rem;">
						</div>
						<div class="col">
							<input name="number" type="number" class="form-control" placeholder="Количество" style="border: 1px solid gray;">
						</div>

						<div class="col">
							<button type="submit" class="btn btn-primary mt-2" style="border-radius: 50px;">Добавить</button>
						</div>

                    </form>
					</div>

<?php

              for ($i=0; $i < mysqli_num_rows($results_trends) ; $i++){
	$trends1 = mysqli_fetch_assoc($results_trends);

?>
                        <div style="background: rgb(210, 210, 210);">
                        <div class="col fw-bold" style="height: 2rem;"><?php echo  $trends1['title'] ?></div>
						<div class="col" style="height: 2rem;"><p>Твитов: <?php echo $trends1['number'] ?></p></div>
						</div>
						

						<?php
			  }
						?>

					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>