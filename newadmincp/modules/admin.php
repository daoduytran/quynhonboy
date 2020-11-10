<?php
include "user.php";
class admin extends user {
	public function func_lietke () {
		$this->lietke();
	}
	
	public function func_lietke_tintuc() {
		$this->lietke_tintuc();
	}
	
	public function func_lietke_loaisp() {
		$this->lietke_loaisp();
	}
	
	public function func_lietke_hieusp() {
		$this->lietke_hieusp();
	}
	
	public function func_lietke_hoadon() {
		$this->lietke_hoadon();
	}
	
	public function func_loadsp_edit($id) {
		$this->loadsp_edit($id);
	}
	
	public function func_loadtintuc_edit($id) {
		$this->loadtintuc_edit($id);
	}
	
	public function func_loadloaisp_edit($id) {
		$this->loadloaisp_edit($id);
	}
	
	public function func_loadhieusp_edit($id) {
		$this->loadhieusp_edit($id);
	}
	
	public function func_chitiet_hoadon($id) {
		$this->chitiet_hoadon($id);
	}
	
	public function func_loaisp_combobox_ad() {
		$this->loaisp_combobox_ad();
	}
	
	public function func_hieusp_combobox_ad() {
		$this->hieusp_combobox_ad();
	}
	
	public function func_loadctsp_edit($id){
		$this->loadctsp_edit($id);
	}
	
	public function func_chitiet_khachhang($id){
		$this->chitiet_khachhang($id);
	}
	
	public function func_count_sp($input){
		$this->count_sp($input);
	}
	
	public function func_chitiet_hoadon_tinhtrang($id) {
		$this->chitiet_hoadon_tinhtrang($id);
	}
	
	public function func_lietke_user() {
		$this->lietke_user();
	}
	
	public function func_chitiet_user($id) {
		$this->chitiet_user($id);
	}
	
	public function func_chitiet_user_vaitro($id) {
		$this->chitiet_user_vaitro($id);
	}
}

?>