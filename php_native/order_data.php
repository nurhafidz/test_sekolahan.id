<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">  
  
</head>
<body>
<div class="container mt-5">
  <h1 class="table-title">Daftar Nilai</h1>
		<table class="table caption-top">
			<tr>
				<td>
					<h2>Nama</h2></td>
				<td>
					<h2>Nilai</h2></td>
				<td>
					<h2>Rangking</h2></td>
			</tr>
			<?php 
      $i=1;
      $arrayNilai = array (
        89 => 'Agus',
        90 => 'Juni',
        97 => 'Yanuar',
        85 => 'Desi',
        88 => 'Nopi',
        93 => 'Febi'
      );
      krsort($arrayNilai);
      foreach ($arrayNilai as $nilai => $nama) {
          echo "<tr><td>$nama</td>
                <td>$nilai</td>
                <td>$i</td>
                </tr>\n";
                $i++;
      }
      ?>
		</table>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>