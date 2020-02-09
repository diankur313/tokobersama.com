<?php 
class database{

	//Konfigurasi Database 
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "tokobersama.com";


	function __construct(){
		// membuat koneksi
		$connect = mysql_connect($this->host, $this->uname, $this->pass);
			   	   mysql_select_db($this->db);
	}

	

	//retrieve data transaksi
	function get_data(){
		$data = mysql_query("SELECT * FROM transaction");
		while ($a = mysql_fetch_array($data)){
		$hasil[] = $a;
			}
		return $hasil;
	}

	//input data request dari API Flip
	public function post_API()
	{
		$id = $this->decode->id;
		$amount = $this->decode->amount;
		$status = $this->decode->status;
		$timestamp = $this->decode->timestamp;
		$bank_code = $this->decode->bank_code;
		$account_number = $this->decode->account_number;
		$beneficiary_name = $this->decode->beneficiary_name;
		$remark = $this->decode->remark;
		$receipt = $this->decode->receipt;
		$time_served = $this->decode->time_served;
		$fee = $this->decode->fee;

			$run = mysql_query("INSERT INTO transaction (id, amount, status, timestamp, bank_code, account_number, beneficiary_name, remark, receipt, time_served, fee)
				VALUES ('$id', '$amount', '$status', '$timestamp', '$bank_code', '$account_number', '$beneficiary_name', '$remark', '$receipt', '$time_served', '$fee')");
			header("Location:index.php");
			exit();

	}

	//update data status respons dari API Flip
	public function get_API()
	{
		$id = $this->decode->id;
		$status = $this->decode->status;
		$receipt = $this->decode->receipt;
		$time_served = $this->decode->time_served;

			$run = mysql_query("UPDATE transaction  SET status='$status', receipt='$receipt', time_served='$time_served' WHERE id = '$id'");
			header("Location:index.php");
			exit();
	}

 
}
?>
