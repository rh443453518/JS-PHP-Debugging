<!doctype>
<html>
	<head>
		<title>Yugioh Monster Card Database</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div class="head">
			<div class="container">
				<img src="images/ygo.png">
			</div>
		</div>
		<div class="forms">
			<div class="container">
				<div class="half-container-left">
					<h1 style="text-align:center;">Add</h1>	
					<!-- Add Form --> 
					<form method="post" action="index.php">
						<div class="label">
							<label>Name</label>
							<input id="name" type="text" name="add_name" maxlength="45" required/><br>
						</div>
						<div class="label">
							<label>URL Image (Optional)</label>
							<input id="image" type="text" name="add_image"><br>
						</div>
						<div class="label">
							<label>Beast Attribute </label>
							<select name="add_attr" required>
								<option value="">Please select</option>
								<option value="Dark">Dark</option>
	  							<option value="Divine">Divine</option>
	  							<option value="Earth">Earth</option>
	  							<option value="Fire">Fire</option>
	  							<option value="Light">Light</option>
	  							<option value="Water">Water</option>
	  							<option value="Wind">Wind</option>
							</select>
						</div>
						<div class="label">
							<label>Attack Points </label>
							<input type="number" name="add_atk" min="0" max="9999" required/><br>
						</div>
						<div class="label">
							<label>Defense Points </label>
							<input type="number" name="add_def" min="0" max="9999" required/><br>
						</div>
						<div class="label">
							<label>Monster Type </label>
							<select name="add_type" required>
								<option value="">Please select</option>
								<option value="Aqua">Aqua</option>
	  							<option value="Beast">Beast</option>
	  							<option value="Beast-Warrior">Beast-Warrior</option>
	  							<option value="Creator-God">Creator God</option>
	  							<option value="Dinosaur">Dinosaur</option>
	  							<option value="Divine-Beast">Divine-Beast</option>
	  							<option value="Dragon">Dragon</option>
	  							<option value="Fairy">Fairy</option>
	  							<option value="Fiend">Fiend</option>
	  							<option value="Fish">Fish</option>
	  							<option value="Insect">Insect</option>
	  							<option value="Machine">Machine</option>
	  							<option value="Plant">Plant</option>
	  							<option value="Psychic">Psychic</option>
	  							<option value="Pyro">Pyro</option>
	  							<option value="Reptile">Reptile</option>
	  							<option value="Rock">Rock</option>
	  							<option value="Sea-Serpent">Sea Serpent</option>
	  							<option value="Spellcaster">Spellcaster</option>
	  							<option value="Thunder">Thunder</option>
	  							<option value="Warrior">Warrior</option>
	  							<option value="Winged-Beast">Winged Beast</option>
	  							<option value="Wyrm">Wyrm</option>
	  							<option value="Zombie">Zombie</option>
							</select>
						</div>
						<div class="label">
							<label>Description</label>
							<textarea name="add_des" rows="4" cols="25" required></textarea>
						</div>
						<div class="label">
							<input id="submit" type="submit" name="add" value="Add">						
						</div>
					</form>
				</div>
				<div class="half-container-right">
					<h1 style="text-align:center;">Search</h1>
					<!-- search form --> 
					<form method="post" action="index.php">
						<div class="label">
							<label>Name</label>
							<input id="name" type="text" name="search_name" maxlength="45" /><br>
						</div>
						<div class="label">
							<label>Beast Attribute </label>
							<select name="search_attr">
								<option value="">Please select</option>
								<option value="Dark">Dark</option>
	  							<option value="Divine">Divine</option>
	  							<option value="Earth">Earth</option>
	  							<option value="Fire">Fire</option>
	  							<option value="Light">Light</option>
	  							<option value="Water">Water</option>
	  							<option value="Wind">Wind</option>
							</select>
						</div>
						<div class="label">
							<label>Attack Points </label>
							<input type="number" name="search_atk" min="0" max="9999" /><br>
						</div>
						<div class="label">
							<label>Defense Points </label>
							<input type="number" name="search_def" min="0" max="9999" /><br>
						</div>
						<div class="label">
							<label>Monster Type </label>
							<select name="search_type" >
								<option value="">Please select</option>
								<option value="Aqua">Aqua</option>
	  							<option value="Beast">Beast</option>
	  							<option value="Beast-Warrior">Beast-Warrior</option>
	  							<option value="Creator-God">Creator God</option>
	  							<option value="Dinosaur">Dinosaur</option>
	  							<option value="Divine-Beast">Divine-Beast</option>
	  							<option value="Dragon">Dragon</option>
	  							<option value="Fairy">Fairy</option>
	  							<option value="Fiend">Fiend</option>
	  							<option value="Fish">Fish</option>
	  							<option value="Insect">Insect</option>
	  							<option value="Machine">Machine</option>
	  							<option value="Plant">Plant</option>
	  							<option value="Psychic">Psychic</option>
	  							<option value="Pyro">Pyro</option>
	  							<option value="Reptile">Reptile</option>
	  							<option value="Rock">Rock</option>
	  							<option value="Sea-Serpent">Sea Serpent</option>
	  							<option value="Spellcaster">Spellcaster</option>
	  							<option value="Thunder">Thunder</option>
	  							<option value="Warrior">Warrior</option>
	  							<option value="Winged-Beast">Winged Beast</option>
	  							<option value="Wyrm">Wyrm</option>
	  							<option value="Zombie">Zombie</option>
							</select>
						</div>
						<!-- <div class="label">
							<label>Description</label>
							<textarea rows="4" cols="25" name="search_des"></textarea>
						</div> -->
						<div class="label">
							<input id="submit" type="submit" name="search" value="Search">						
						</div>
						<div class="label">
							<input id="submit" type="submit" name="showall" value="Show All">						
						</div>
					</form>
				</div>
			</div>
		</div>
		<?php 
			$added = false;
			$search = false; 
			if(!empty($_POST['add'])) {
				/* echo "<p>".$_POST['add_name']."</p>";
				echo "<p>".$_POST['add_image']."</p>";
				echo "<p>".$_POST['add_attr']."</p>";
				echo "<p>".$_POST['add_atk']."</p>";
				echo "<p>".$_POST['add_def']."</p>";
				echo "<p>".$_POST['add_type']."</p>";
				echo "<p>".$_POST['add_des']."</p>"; */

				//Only need to sanitize name, url and description. 
				$add_name = htmlspecialchars($_POST['add_name']);
				$add_image = checkImage(htmlspecialchars($_POST['add_image']));
				$add_attr = $_POST['add_attr']; 
				$add_atk = $_POST['add_atk'];
				$add_def = $_POST['add_def'];
				$add_type = $_POST['add_type'];
				$add_des = htmlspecialchars($_POST['add_des']);

				$content = file_get_contents("data.txt");
				$content .= "\n".$add_name."\t";
				$content .= $add_attr."\t";
				$content .= $add_atk."\t";
				$content .= $add_def."\t";
				$content .= $add_type."\t";
				$content .= $add_des."\t";
				$content .= $add_image;

				file_put_contents("data.txt", $content);
				$added = true; 

			} else if (!empty($_POST['search'])) {
				/* echo "<p>".$_POST['search_name']."</p>";
				echo "<p>".$_POST['search_attr']."</p>";
				echo "<p>".$_POST['search_atk']."</p>";
				echo "<p>".$_POST['search_def']."</p>";
				echo "<p>".$_POST['search_type']."</p>";
				echo "<p>".$_POST['search_des']."</p>"; */ 
				$search = true; 

				$search_name = htmlspecialchars($_POST['search_name']);
				$search_attr = $_POST['search_attr']; 
				$search_atk = $_POST['search_atk'];
				$search_def = $_POST['search_def'];
				$search_type = $_POST['search_type'];

			} elseif (!empty($_POST['showall'])) {
				$data = fopen("data.txt", "r") or die("Unable to open data.txt");
				//echo fread($data, filesize("data.txt"));
				//echo explode("\n", fread($data, filesize("data.txt")));
				echo "<div id=\"results\">";
				echo "<div class=\"container\">";
				echo "<h1>Yuigoh Card Database</h1>";
				if($data) {
					while (($line = fgets($data)) !== false) {
						//print_r(explode("\t", $line));
						$card = explode("\t", $line);
						echo "<div class=\"cell\">";
						echo "<img src=\"".$card[6]."\">";
						echo "<h2>".$card[0]."</h2>";
						echo "<h3>Beast Type: ".$card[1]."</h3>";
						echo "<h3>Attack Points: ".$card[2]."</h3>";
						echo "<h3>Defense Points: ".$card[3]."</h3>";
						echo "<p>Monster Type: ".$card[4]."</p>";
						echo "<p>Desciption: </p>";
						echo "<p>".$card[5]."</p>";
						echo "</div>";
					}
					fclose($data);
				} else {
					echo "<p>Error opening file</p>";
				}
				echo "</div>";
				echo "</div>";
			}
			function checkImage($url) {
				$urlpath = parse_url($url, PHP_URL_PATH);
				$pathpart = pathinfo(parse_url($url, PHP_URL_PATH));
				if(strpos($urlpath, ".") === false) {
					$url = "images/notfound.jpg";
				} else {
					$pathpart = pathinfo(parse_url($url, PHP_URL_PATH));
					$extension = $pathpart['extension'];
					if($extension !== 'jpg' and $extension !== 'png' and $extension !== 'gif') {
						$url = "images/notfound.jpg";
					}
				}
				return $url; 
			}
		?>
		<div id="results">
			<div class="container">
				<?php 
					if($added) {
						echo "<h1>Card added to database</h1>";
						$data = fopen("data.txt", "r") or die("Unable to open data.txt");
						//echo fread($data, filesize("data.txt"));
						//echo explode("\n", fread($data, filesize("data.txt")));
						if($data) {
							while (($line = fgets($data)) !== false) {
								//print_r(explode("\t", $line));
								$card = explode("\t", $line);
								echo "<div class=\"cell\">";
								echo "<img src=\"".$card[6]."\">";
								echo "<h2>".$card[0]."</h2>";
								echo "<h3>Beast Type: ".$card[1]."</h3>";
								echo "<h3>Attack Points: ".$card[2]."</h3>";
								echo "<h3>Defense Points: ".$card[3]."</h3>";
								echo "<p>Monster Type: ".$card[4]."</p>";
								echo "<p>Desciption: </p>";
								echo "<p>".$card[5]."</p>";
								echo "</div>";
							}
							fclose($data);
						} else {
							echo "<p>Error opening file</p>";
						}
					} elseif ($search) {
						echo "<h1>Here are your search results</h1>";
						if($search_name === "" and $search_attr === "" and $search_atk === "" and $search_def === "" and $search_type === "") {
							echo "<h2>No results found.</h2>";
							return;
						}
						$criteria = array(); 
						if($search_name) {
							array_push($criteria, $search_name);
						} 
						if ($search_attr) {
							array_push($criteria, $search_attr);
						} 
						if ($search_atk) {
							array_push($criteria, $search_atk);
						} 
						if ($search_def) {
							array_push($criteria, $search_def);
						} 
						if ($search_type) {
							array_push($criteria, $search_type);
						}
						//print_r($criteria);
						/* echo "<p>".$search_name."</p>";
						echo "<p>".$search_attr."</p>";
						echo "<p>".$search_atk."</p>";
						echo "<p>".$search_def."</p>";
						echo "<p>".$search_type."</p>"; */
						$data = fopen("data.txt", "r") or die("Unable to open data.txt");
						$results = array(); 
						if($data) {
							while (($line = fgets($data)) !== false) {
								//print_r(explode("\t", $line));
								$card = explode("\t", $line);
								//Jesus this took way too long to figure out...
								if(array_intersect($criteria, $card) == $criteria) {
									array_push($results, $card);
								}
							}
							if(empty($results)) {
								echo "<h2>No results found.</h2>";
								return;
							}
							fclose($data);
							foreach ($results as $value) {
								echo "<div class=\"cell\">";
								echo "<img src=\"".$value[6]."\">";
								echo "<h2>".$value[0]."</h2>";
								echo "<h3>Beast Type: ".$value[1]."</h3>";
								echo "<h3>Attack Points: ".$value[2]."</h3>";
								echo "<h3>Defense Points: ".$value[3]."</h3>";
								echo "<p>Monster Type: ".$value[4]."</p>";
								echo "<p>Desciption: </p>";
								echo "<p>".$value[5]."</p>";
								echo "</div>";
							}
						} else {
							echo "<p>Error opening file</p>";
						}
					}
				?>
			</div>
		</div>
	</body>
</html>