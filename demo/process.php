<?php
$servername='localhost';
$username='root';
$password='';
$dbname = 'my_db';
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
	die('Could not Connect My Sql:' .mysqli_error($myConnection));
}
$query = mysqli_query($conn,"SELECT AVG(rating) as AVGRATE from heroes_rating where status=1");
$row = mysqli_fetch_array($query);
$AVGRATE=$row['AVGRATE'];
$query = mysqli_query($conn,"SELECT count(rating) as Total from heroes_rating where status=1");
$row = mysqli_fetch_array($query);
$Total=$row['Total'];
$query = mysqli_query($conn,"SELECT count(hero_id) as Totalrating from  heroes_rating where status=1");
$row = mysqli_fetch_array($query);
$Total_hero=$row['Totalhero'];
$review = mysqli_query($conn,"SELECT hero_id,rating, from heroes_rating where status=1 order by date_time desc limit 4 ");
$rating = mysqli_query($conn,"SELECT count(*) as Total,rating from heroes_rating group by rating order by rating desc");
?>