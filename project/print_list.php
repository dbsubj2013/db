<?php while($result = mysqli_fetch_array($out)){
echo '<p class="team-member-description">';
echo $result['name'];
echo "<br>";
echo $result['url'];
echo "<br>";
echo $result['address'];
echo "<br>";
echo $result['pic'];
echo "</p>";
}
?>