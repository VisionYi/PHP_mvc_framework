<?php

class Controller {

	protected $_view, $_layout;
	protected $_css = array();
	protected $_js = array();
	protected $title = '';

	/**
	 * 呼叫models資料夾下的 $model.php, 再new這個$model class
	 * @param string $model model的class名稱
	 */
	public function Model($model = '') {
		if ($model != '' && file_exists(ROOT_url . '/models/' . $model . '.php')) {
			require_once ROOT_url . '/models/' . $model . '.php';
			return new $model();
		} else {
			new _Error($model ,3);
		}
	}

	/**
	 * 如果有layout: 呼叫views資料夾下的 $layout
	 * 如果沒有layout: 呼叫views資料夾下的 $view
	 *
	 * @param string $view   views底下的View_url路徑
	 * @param string $layout views底下的layout_url路徑
	 */
	public function View($view = '', $layout = '') {
		if (!file_exists(ROOT_url . '/views/' . $view)) {
			new _Error($view ,4);
		}

		$this->_view = $view;
		$this->_layout = $layout;

		if ($this->_layout != '') {
			require_once ROOT_url . '/views/' . $this->_layout;
		} else {
			require_once ROOT_url . '/views/' . $this->_view;
		}
	}

	/**
	 * 此function是給layout.php使用的
	 * 呼叫views資料夾下的 $view
	 */
	public function get_view() {require_once ROOT_url . '/views/' . $this->_view;}

	public function set_css(array $css = []) {$this->_css = $css;}
	public function set_js(array $js = []) {$this->_js = $js;}
	public function get_css() {
		foreach ($this->_css as $value) {
			echo "<link rel='stylesheet' type='text/css' href='$value'/>";
		}
	}

	public function get_js() {
		foreach ($this->_js as $value) {
			echo "<script type='text/javascript' src='$value'></script>";
		}
	}

	public function sel_p($value = '', $text = '') {
		if ($this->title == $value) {
			echo $text;
		}
	}
}
?>
