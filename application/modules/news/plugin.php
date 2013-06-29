<?php defined('BASEPATH') OR exit('No direct script access allowed');

class News_plugin extends Plugin
{
	function show_news()
	{
		$result = "<ul>";
		$limit	= $this->attribute('limit', 5);
		$order_by 	= $this->attribute('order-by', 'created_at');
		$order_dir	= $this->attribute('order-dir', $this->attribute('order', 'DESC'));

		$CI =& get_instance();
		$news_model = $CI->load->model('news_model');
		$news_model->order_by($order_by, $order_dir);
		$news_model->limit($limit);
		$news = $news_model->get();

		foreach ($news as $single_news) {
			$result .= '<li>';
			$result .= '<a href="'.site_url('news/single/'.$single_news->id).'" style="text-align:left;">';
			$result .= '<span class="style1">'.$single_news->title.'</span>';
			$result .= '</a>';
			$result .= '<span class="style2">'.date('d F Y', strtotime($single_news->created_at)).'</span>';
			$result .= '<span class="style3">'.substr($single_news->description, 0, 35).'</span>';
			$result .= '</li>';
		}

		$result .= "</ul>";
		return $result;
	}
}