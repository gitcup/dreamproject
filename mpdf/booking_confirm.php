<?php

require_once __DIR__ . '../../vendor/autoload.php';

include('../connect.php');


$username= $_GET['username'];
$query = "SELECT * FROM booking_detail
INNER JOIN member on booking_detail.username= member.username
WHERE member.username ='$username' ";

 
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('

<div style="text-align: center">
<h3>JN SUCCESS CO.,LTD</h3>
<small>58/12 MOO 5 ,T.BANGMAENANG</small><br>
<small>A.BANGYAI, NONTHABURI 11140, THAILAND</small><br>
<small>TELL: +662 8330976 FAX:+662 8330976</small><br>
<small>VAT REGISTERED NO.303 4133 959</small>
</div>
<br>
<div style="text-align: center">
<h3>BOOKING CONFIRM</h3>
</div>
<p>TO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : '.$row['company_name'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date : </p> 
<p>ATTTN : '.$row['firstname'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['lastname'].'</p> 
<p>FROM : JNS </p> 
<br>
<small> PLEASE FIND BELOW OUR BOOKING CONFIRMATION WITH DETAILS OF SAILING SCHEDULE FROM    TO     AND OTHER NECESSARY INFORMATION AS FOLLOW : - </small>
<br><br>


<table border="1">>

  <tr >
    <td>BOOKING NO. : <strong>'.$row['booking_id'].'</strong><br>SHIPPING NAME : '.$row['name'].'</td>
    <td>REFERENCE NO .: <br>CUST. REFERENCE NO . : </th>
   
  </tr>

<tbody>
  <tr>
    <td scope="row">PORT OF LOADING : <strong>'.$row['port_of_load'].'</strong><br>PORT OF DISCHARGE : <strong>'.$row['port_of_discharge'].'</strong><br>PORT OF DELIVERY : <strong>'.$row['post_deli'].'</strong> </th>
    <td>ETD: <strong>'.$row['etd'].'</strong>  <br> ETA : <strong>'.$row['eta'].'</strong> <br>ETA: <strong>'.$row['eta_2'].'</strong> </td>
   
  </tr>
  <tr>
    <td scope="row">FEEDER VESSEL : <strong>'.$row['feeder_vessel'].'</strong>   <br> MOTHER VESSEL : <strong>'.$row['mother_vessel'].'</strong>  </th>
    <td>FEEDER VOYAGE : <strong>'.$row['feeder_voyage'].'</strong>   <br> MOTHER VOYAGE : <strong>'.$row['mother_voyage'].'</strong>  <br></th>
  
  </tr>	
  <tr>
    <td scope="row">WEIGHT : <strong>'.$row['weight'].'</strong>  <br> QUANTITY :<strong>'.$row['quantity'].'</strong>  </th>
    <td scope="row">VOLUME : <strong>'.$row['quantity_volume'].'</strong> </th>
  
  </tr>
  <tr>
  <td scope="row">LOADING AT :  <strong>'.$row['load_at'].'</strong> <br> LOADING DATE : '.$row['load_date'].'</strong>  <br><br> CONTACT : <strong>'.$row['contact'].' <br> TEL : <br> CLOSING DATE : <strong>'.$row['closing_date'].'   </th>
  <td scope="row">TRANSPORTER : <strong>'.$row['transporter'].'</strong> <br> TEL :  '.$row['transporter_tel'].'</strong> <br><br> SHIPPING CONTACT :  <strong>'.$row['shiping_contact'].'</strong><br> TEL : <strong>'.$row['tel_shiping'].'</strong> <br> TIME :  '.$row['time'].'</strong>  </th>
</tr>

<tr>
<td colspan="2">NO. OF CONTAINER/SIZE/TYPE : <strong>'.$row['type'].'</strong></th>
</tr>
<tr>
<td colspan="2">REMARK : 1 . PLS send shipping particular and invoice & packing list within <strong>'.$row['etd'].'</strong> <br>
2. PAPER Less Code : 0251 (PAT PORT)
</td>
</tr>
</tbody>
</table>');
$mpdf->Output();