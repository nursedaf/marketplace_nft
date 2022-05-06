<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model');
	}
	public function index()
	{
		$data["tops"] = $this->Model->getAllGeneral("items", array(), "0", "5", "hit", "DESC");
		$this->load->view('site/anasayfa', $data);
	}
	public function explore()
	{
		//$data['coll'] = $this->Model->getAllGeneral("collections", array(), "");
		//$data['items'] = $this->Model->getAllGeneral("items", array(), 8, "id", "ASC");
		//$this->load->view('site/explore', $data);

		$data['coll'] = $this->Model->getAllGeneral("collections", array());
		$data['items'] = $this->Model->getAllGeneral("items", array(), "0", "8", "id", "ASC");
		$this->load->view('site/explore', $data);
	}

	public function blog()
	{
		$data["blogs"] = $this->Model->getAllGeneral("blog", array());
		$this->load->view('site/blog', $data);
	}
	public function blogdetail($id)
	{
		$data["id"] = $id;
		$data["detay"] = $this->Model->getGeneral("blog", array("id" => $id));
		$data["blogs"] = $this->Model->getAllGeneral("blog", array(), "", "hit", "DESC");
		$this->load->view('site/blogdetail', $data);
	}

	public function about()
	{
		$this->load->view('site/about');
	}
	public function contact()
	{
		$this->load->view('site/contact');
	}
	public function connect_wallet()
	{
		$this->load->view('site/connectwallet');
	}
	public function productpage($id)
	{
		$data["id"] = $id;
		$data["detay"] = $this->Model->getGeneral("items", array("id" => $id));
		$hit = $this->Model->getGeneral("items", array("id" => $id))->hit;
		$hit++;
		$this->Model->update("items", array("id" => $id), array("hit" => $hit));
		$this->load->view('site/productpage', $data);
	}
	public function topseller()
	{
		$data["items"] = $this->Model->getAllGeneral("items", array(), "0", "8", "hit", "DESC");
		$this->load->view('site/topseller', $data);
	}
	public function auctions()
	{
		$this->load->view('site/auctions');
	}
	public function activity()
	{
		$this->load->view('site/activity');
	}

	public function message()
	{
		date_default_timezone_set('Europe/Istanbul');
		$name = $this->input->post("name");
		$mail = $this->input->post("email");
		$message = $this->input->post("message");
		$time = date("d-m-Y H:i:s");
		$ip = $_SERVER["REMOTE_ADDR"];
		if (!empty($name) and !empty($mail) and !empty($message)) {
			if ($this->session->has_userdata('ip')) {
				redirect("contact");
			} else {
				$this->Model->insert("messages", array("name" => $name, "email" => $mail, "message" => $message, "time" => $time, "ip" => $ip));
				$this->session->set_userdata('ip', $ip);
				redirect("contact");
			}
			
		}
	}

	public function cekCollectionItems()
	{
		$c_id = $this->input->post("kategori");
		$s_id = $this->input->post("siralama");

		$where = array();
		if ($s_id == "0") {
			$sutun = "";
			$sort = "";
		} elseif ($s_id == "1") {
			$sutun = "hit";
			$sort = "DESC";
		} elseif ($s_id == "2") {
			$sutun = "bid";
			$sort = "DESC";
		} elseif ($s_id == "3") {
			$sutun = "bid";
			$sort = "ASC";
		} elseif ($s_id == "4") {
			$sutun = "time";
			$sort = "DESC";
		}
		if ($c_id > 0) $where = array("coll" => $c_id);

		$veri = $this->Model->getAllGeneral("items", $where, "0", "8", $sutun, $sort);

		$icerik = "";

		foreach ($veri as $ver) {

			$icerik = $icerik . '<div class="sc-card-product explode style2 mg-bt list-itemss" id="' . $ver->id . ' " ><div class="card-media" style="background-image: url(\'' . base_url($ver->image) . '\'); height:300px; background-repeat: no-repeat; background-position: center; background-size: contain;"><a href="' . base_url("productpage/" . $ver->id) . '"></a><div class="button-place-bid"><a href="' . $ver->url . '" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a></div></div><div class="card-title"><h5><a href="' . base_url("productpage/" . $ver->id) . '">' . $ver->name . '</a></h5></div><div class="card-bottom style-explode"><div class="price"><span>Current Bid</span><div class="price-details"><h5> ' . $ver->bid . '</h5><!--<span>= $12.246</span>--></div></div></div></div>';
		}
		echo $icerik;
	}

	public function collectionpage($id)
	{
		$c_id = $id;
		$sutun = "bid";
		$sort = "ASC";
		$data["categories"] = $this->Model->getGeneral("collections", array("id" => $c_id));
		$data["items"] = $this->Model->getAllGeneral("items", array("coll" => $c_id), "0", "8", $sutun, $sort);
		$this->load->view('site/collectionpage', $data);
	}

	public function loadmore()
	{
		if ($_POST) {
			$limit = $this->input->post("getresult");
			$c_id = $this->input->post("kategori");
			$s_id = $this->input->post("siralama");
			$table = $this->input->post("table");
			$where = array();

			if ($s_id == "0") {
				$sutun = "";
				$sort = "";
			} elseif ($s_id == "1") {
				$sutun = "hit";
				$sort = "DESC";
			} elseif ($s_id == "2") {
				$sutun = "bid";
				$sort = "DESC";
			} elseif ($s_id == "3") {
				$sutun = "bid";
				$sort = "ASC";
			} elseif ($s_id == "4") {
				$sutun = "time";
				$sort = "DESC";
			}

			if ($c_id > 0) $where = array("coll" => $c_id);

			$veri = $this->Model->getAllGeneral($table, $where, $limit, 8, $sutun, $sort);

			$icerik = "";
			foreach ($veri as $ver) {
				$icerik = $icerik . '<div class="sc-card-product explode style2 mg-bt list-itemss" id="' . $ver->id . '"><div class="card-media" style="background-image: url(\'' . base_url($ver->image) . '\'); height:300px; background-repeat: no-repeat; background-position: center; background-size: contain;"><a href="' . base_url("productpage/" . $ver->id) . '"></a><div class="button-place-bid"><a href="' . $ver->url . '" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a></div></div><div class="card-title"><h5><a href="' . base_url("productpage/" . $ver->id) . '">' . $ver->name . '</a></h5></div><div class="card-bottom style-explode"><div class="price"><span>Current Bid</span><div class="price-details"><h5> ' . $ver->bid . '</h5><!--<span>= $12.246</span>--></div></div></div></div>';
			}

			$cnext = count($veri);
			$result['icerik'] = $icerik;
			$result['nexts'] = $cnext;
			echo json_encode($result);
		}
	}
	/* 	public function loadmore()
	{
		$id = $this->input->post("id");
		$detay = $this->Model->getGeneral("items", array("id" => $id));
		$c_id = $this->input->post("kategori");
		$s_id = $this->input->post("siralama");

		if ($s_id == "0") {
			$sutun = "";
			$sort = "";
			$sql = "id > $id";
		} elseif ($s_id == "1") {
			$sutun = "hit";
			$sort = "DESC";
			$sql = "hit < $detay->hit AND id < " . $id;
		} elseif ($s_id == "2") {
			$sutun = "bid";
			$sort = "DESC";
			$sql = "bid < $detay->bid AND id < " . $id;
		} elseif ($s_id == "3") {
			$sutun = "bid";
			$sort = "ASC";
			$sql = "bid > $detay->bid AND id > " . $id;
		} elseif ($s_id == "4") {
			$sutun = "time";
			$sort = "DESC";
			$sql = "time < $detay->time AND id < " . $id;
		}

		if ($c_id > 0) $sql = $sql . " AND coll = " . $c_id;

		$veri = $this->Model->getAllGeneral("items", array(), 8, $sutun, $sort, $sql);
		$icerik = "";

		foreach ($veri as $ver) {

			$icerik = $icerik . '<div class="sc-card-product explode style2 mg-bt list-itemss" id="'.$ver->id.'"><div class="card-media" style="background-image: url(\'' . base_url($ver->image) . '\'); height:300px; background-repeat: no-repeat; background-position: center; background-size: contain;"><a href="' . base_url("productpage/" . $ver->id) . '"></a><div class="button-place-bid"><a href="#" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a></div></div><div class="card-title"><h5><a href="' . base_url("productpage/" . $ver->id) . '">' . $ver->name . '</a></h5></div><div class="card-bottom style-explode"><div class="price"><span>Current Bid</span><div class="price-details"><h5> ' . $ver->bid . '</h5><!--<span>= $12.246</span>--></div></div></div></div>';
		}

		echo $icerik;
	} */
}
