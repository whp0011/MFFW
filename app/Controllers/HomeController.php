<?php
/**
 * File name: HomeController.php
 * Desc:
 * Author: hp
 * Date Time: 2015/4/1 15:18
 */

namespace MFFW\Controllers;

use MFFW\Models\Article;
class HomeController extends BaseController
{
	public function home()
	{
		$article = Article::first();
		require dirname(__FILE__).'/../Views/home.php';
	}
}