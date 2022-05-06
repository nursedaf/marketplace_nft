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
		if ($this->session->userdata("user")) {
			$this->load->view('yonetim/anasayfa');
		} else $this->load->view('yonetim/login');
	}
	public function login()
	{
		echo $name = $this->input->post("name");
		echo $password = $this->input->post("password");
		if (!empty($name) || !empty($password)) {
			$user = $this->Model->getAllGeneral(
				"admins",
				array(
					"name" => $name,
					"password" => $password,
				)
			);
			if ($user) {
				$this->session->set_userdata("user", $user);
				redirect('admin');
			} else {
				$this->session->set_flashdata('msg', 'kullanıcı adı veya parola yanlış');
				redirect(base_url('admin'));
			}
		}
	}

	public function nfts()
	{
		if ($this->session->userdata("user")) {
			$this->load->view('yonetim/addnft');
		} else $this->load->view('yonetim/login');
	}
	public function addnft()
	{
		date_default_timezone_set('Europe/Istanbul');
		$tip = $_FILES['foto']['type'];
		$resimAdi = $_FILES['foto']['name'];
		$uzantisi = explode('.', $resimAdi);
		$uzantisi = $uzantisi[count($uzantisi) - 1];
		$yeni_adi = "uploads/" . time() . "." . $uzantisi;
		if ($tip == 'image/jpeg' || $tip == 'image/png') {
			if (move_uploaded_file($_FILES["foto"]["tmp_name"], $yeni_adi)) {

				$name = $this->input->post("name");
				$info = $this->input->post("info");
				$bid = 	str_replace(",", ".", $this->input->post('bid'));
				$nft =  $yeni_adi;
				$url = $this->input->post('url');
				$coll = $this->input->post('collection');
				$time = date("d-m-Y H:i:s");

				if (!empty($url) & !empty($nft)) {
					$yes = $this->Model->insert("items", array(
						"name" => $name,
						"info" => $info,
						"bid" => $bid,
						"image" => $nft,
						"url" => $url,
						"coll" => $coll,
						"time" => $time,
						"hit" => 0
					));
				}
				if ($yes) {
					$this->session->set_flashdata('true', 'Eklendi');
					redirect('nfts');
				} else {
					$this->session->set_flashdata('false', 'Eklenemedi!');
					redirect('nfts');
				}
			} else {
				$this->session->set_flashdata('false', 'Eklenemedi!');
				redirect('nfts');
			}
		} else {
			$this->session->set_flashdata('false', 'Eklenemedi!');
			redirect('nfts');
		}
	}

	public function info()
	{
		date_default_timezone_set('Europe/Istanbul');
		$tip = $_FILES['foto']['type'];
		$resimAdi = $_FILES['foto']['name'];
		$uzantisi = explode('.', $resimAdi);
		$uzantisi = $uzantisi[count($uzantisi) - 1];
		$yeni_adi = "uploads/" . time() . "." . $uzantisi;
		if ($tip == 'image/jpeg' || $tip == 'image/png') {
			if (move_uploaded_file($_FILES["foto"]["tmp_name"], $yeni_adi)) {

				$title = $this->input->post("title");
				$info = $this->input->post("info");
				$logo =  $yeni_adi;
				$yes = $this->Model->update("info", array("id" => 1), array("title" => $title, "info" => $info, "logo" => $logo));
			}
		}
		if ($yes) {
			$this->session->set_flashdata('true', 'Kaydedildi');
			redirect('admin');
		} else {
			$this->session->set_flashdata('false', 'Kaydedilmedi!!');
			redirect('admin');
		}
	}

	public function contact()
	{
		$phone = $this->input->post("phone");
		$mail = $this->input->post("mail");
		$address = $this->input->post("address");
		if (!empty($phone) and !empty($mail) and !empty($address)) {
			$yes = $this->Model->update("contact", array("id" => 1), array("phone" => $phone, "mail" => $mail, "address" => $address));
		}
		if ($yes) {
			$this->session->set_flashdata('true', 'Kaydedildi');
			redirect('admin');
		} else {
			$this->session->set_flashdata('false', 'Kaydedilmedi!!');
			redirect('admin');
		}
	}


	public function messages()
	{
		if ($this->session->userdata("user")) {
			$data['message'] = $this->Model->getAllGeneral("messages", array(), "","", "time", "DESC");
			$this->load->view('yonetim/messages', $data);
		} else {
			$this->load->view('yonetim/login');
		}
	}

	public function deletemessage()
	{
		$id = $this->input->post("id");
		$this->db->delete('messages', array('id' => $id));
	}

	public function items()
	{
		if ($_POST) {
			$id = $this->input->post("itemid");
			if ($id > 0)
				$this->session->set_userdata('itemid', $id);
			else unset($_SESSION["itemid"]);
			redirect(base_url('items'));
		}
		$this->load->view('yonetim/items');
	}

	public function updateitem($id)
	{
		$data = array();
		if (control($this->input->post("name")) == 1) {
			//array_push($data, $this->input->post("name"));
			$data["name"] = $this->input->post("name");
		}
		if (control($this->input->post("info")) == 1) {
			$data["info"] = $this->input->post("info");
		}
		if (control($this->input->post("bid")) == 1) {
			$data["bid"] = str_replace(",", ".", $this->input->post('bid'));
		}
		date_default_timezone_set('Europe/Istanbul');
		$tip = $_FILES['foto']['type'];
		$resimAdi = $_FILES['foto']['name'];
		$uzantisi = explode('.', $resimAdi);
		$uzantisi = $uzantisi[count($uzantisi) - 1];
		$yeni_adi = "uploads/" . time() . "." . $uzantisi;
		if ($tip == 'image/jpeg' || $tip == 'image/png') {
			if (move_uploaded_file($_FILES["foto"]["tmp_name"], $yeni_adi)) {
				$nft =  $yeni_adi;
				if (control($nft) == 1) {
					$data["image"] = $nft;
				}
			}
		}
		if (control($this->input->post("url")) == 1) {
			$data["url"] = $this->input->post("url");
		}
		if (control($this->input->post("collection")) == 1) {
			$data["coll"] = $this->input->post("collection");
		}

		//print_r($data);
		$this->Model->update("items", array("id" => $id), $data);
		redirect(base_url('items'));
	}

	public function deleteitem()
	{
		$id = $this->input->post("id");
		$this->db->delete('items', array('id' => $id));
	}

	public function collections()
	{
		$yes = $this->Model->insert("collections", array("name" => $this->input->post("coll")));
		if ($yes) {
			$this->session->set_flashdata('true', 'Eklendi');
			redirect('nfts');
		} else {
			$this->session->set_flashdata('false', 'Eklenemedi!');
			redirect('nfts');
		}
	}

	public function blog()
	{
		$yes = $this->load->view("yonetim/blog");
	}
	public function blogekle()
	{
		date_default_timezone_set('Europe/Istanbul');
		
		$tip = $_FILES['foto']['type'];
		$resimAdi = $_FILES['foto']['name'];
		$uzantisi = explode('.', $resimAdi);
		$uzantisi = $uzantisi[count($uzantisi) - 1];
		$yeni_adi = "uploads/" . time() . "." . $uzantisi;
		if ($tip == 'image/jpeg' || $tip == 'image/png') {
			if (move_uploaded_file($_FILES["foto"]["tmp_name"], $yeni_adi)) {
				$time = date("d-m-Y");
				$image=  $yeni_adi;
				$yes = $this->Model->insert("blog", array(
					"title" =>$this->input->post("title"),
					"image" => $image, 
					"content" => $this->input->post("kt-ckeditor-1"),
					"time" => $time) 
				);
				if ($yes) {
					$this->session->set_flashdata('true', 'Eklendi');
					redirect('blogekle');
				} else {
					$this->session->set_flashdata('false', 'Eklenemedi!');
					redirect('blogekle');
				}
			}

		}
	}
}