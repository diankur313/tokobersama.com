<?php

include('database.php');
$passing = new database();

if(isset($_POST['cair']))
	{
			$jml_dana = $_REQUEST['dana'];
			$no_rek = $_REQUEST['norek'];
			$ket = $_REQUEST['ket'];
			$nama_rek = $_REQUEST['namrek'];

			$ch = curl_init();
			$secret_key = "HyzioY7LP6ZoO7nTYKbG8O4ISkyWnX1JvAEVAhtWKZumooCzqp41";
			curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			  "Content-Type: application/x-www-form-urlencoded"
			));
			curl_setopt($ch, CURLOPT_USERPWD, $secret_key.":");
			curl_setopt($ch, CURLOPT_URL, "https://nextar.flip.id/disburse");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
			curl_setopt($ch, CURLOPT_HEADER, FALSE);
			curl_setopt($ch, CURLOPT_POST, TRUE);

			$payloads = [
			    "account_number" => $no_rek,
			    "bank_code" => $nama_rek,
			    "amount" => $jml_dana,
			    "remark" => $ket,
			    "recipient_city" => "391"
			];

			curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payloads));
			$response = curl_exec($ch);
			curl_close($ch);

			$passing->decode = json_decode($response);
			$passing->post_API();
	}

		foreach($passing->get_data() as $a)
		{
			if(isset($_GET[$a['id']]))
			{
			$ch = curl_init();
			$secret_key = "HyzioY7LP6ZoO7nTYKbG8O4ISkyWnX1JvAEVAhtWKZumooCzqp41";

			curl_setopt($ch, CURLOPT_URL, "https://nextar.flip.id/disburse/".$a['id']."");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
			curl_setopt($ch, CURLOPT_HEADER, FALSE);

			curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			  "Content-Type: application/x-www-form-urlencoded"
			));

			curl_setopt($ch, CURLOPT_USERPWD, $secret_key.":");

			$response = curl_exec($ch);
			curl_close($ch);

			$passing->decode = json_decode($response);
			$passing->get_API();
			}
		}
 ?>	