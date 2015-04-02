<?php
/**
 * File name: Article.php
 * Desc:
 * Author: hp
 * Date Time: 2015/4/1 15:35
 */

namespace MFFW\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Article extends Model
{
	public $timestamps = false;
//	public static function first()
//	{
//		$connection = mysqli_connect("localhost", "root", "");
//		if(!$connection) {
//			die('Could not connect: ' . mysqli_error($connection));
//		}
//
//		mysqli_set_charset($connection, "UTF8");
//
//		mysqli_select_db($connection, "mffc");
//
//		$result = mysqli_query($connection, "SELECT * FROM articles limit 0,1");
//
//		if($row = mysqli_fetch_array($result)) {
////			echo '<h1>' . $row["title"] . '</h1>';
////			echo '<p>' . $row["content"] . '</p>';
//			return $row;
//		}
//
//		mysqli_close($connection);
//	}
}