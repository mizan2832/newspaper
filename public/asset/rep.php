<?php 
require_once 'session.php'; 
require_once 'database.php';
include_once 'mpdf/mpdf.php';
include_once 'dashboard_c.php';
include_once 'payslip_c.php';
function unittobd($unit)
{
	$num = array('','রিশাল গার্মেন্টস (৪র্থ তলা) লিঃ','রিশাল গার্মেন্টস ( ৬ষ্ঠ তলা) লিঃ','রিশাল গার্মেন্টস (৭ম তলা) লিঃ','সারোজ গার্মেন্টস (৯ম তলা) লিঃ','সারোজ গার্মেন্টস (১০ম তলা) লিঃ','রিশাল গ্রুপ');
	return $num[$unit];
}
function numtobd($value)
{
	$value = (string)$value;
	$bd ='';
	$num = array('০','১','২','৩','৪','৫','৬','৭','৮','৯');
	for ($i=0; $i < strlen($value); $i++) { 
		$bd .= $num[$value[$i]];
	}
	return $bd;
}

function monthtobd($month)
{
	$num = array('','জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে','জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর');
	return $num[$month];
}


if (get_ses('month') !=null && get_ses('year') !=null) {
	$month = get_ses('month');
	$year = get_ses('year');
	del_ses(['month','year']);
	
	$html ='
	<!DOCTYPE html>
	<html>
	<body>
		<table class="items" style="font-size: 15pt;" >
			<tbody>';
	$i = 1;
	foreach ($emp_name_id as $emp_id => $emp_name) {

		$total = 0;
		if ($i % 2 != 0)
			$html .='<tr>';

		$html .='
	<td width="100%" style ="border: 2px dotted black;">
		<table>
			<tr>
				<td width="100%;" style ="text-align:left;">
					<label >মাস : <span>'.monthtobd($month).'</span></label>
				</td>
				<td width="100%;" style ="text-align:right;">
					<label style=";">সাল : <span>'.numtobd($year).'</span></label>
				</td>
			</tr>
			<tr>
				<td  width="100%;" style ="text-align:left;">
					<label>প্রকযিমিটি : </label>
				</td>
				<td  width="100%;" style ="text-align:right;">
					<span> '.$proximity[$emp_id].'</span>
				</td>
			<tr>
			<tr>
				<td  width="100%;" style ="text-align:left;">
					<label>নাম : <span> '.$emp_name.'</span></label>
				</td>
				<td  width="100%;" style ="text-align:right;">
					<label>কার্ড : <span> '.numtobd($card[$emp_id]).'</span></label>
				</td>
			<tr>';	
		foreach ($str_name_id as $str_id => $str_name0) {
			$html .='
			<tr>
				<td width="100%;" style ="text-align:left;">
					<label>'.$str_name0.' : </label>
				</td>
				<td width="100%;" style ="text-align:right;">
			<span>';
			$total += isset($salary_id_amt[$emp_id][$str_id]) ?  $salary_id_amt[$emp_id][$str_id]:0;
			$html .= isset($salary_id_amt[$emp_id][$str_id]) ?  numtobd($salary_id_amt[$emp_id][$str_id]):'০';
			$html .='</span>
				</td>
			</tr>';
		}
		$total += isset($ot) ? $ot : $ot=0;
		$total += isset($at) ? $ot : $at=0;
		$html .='
			<tr>
				<td  width="100%;" style ="text-align:left;">
					<label>হাজিরা বোনাস : </label>
				</td>
				<td  width="100%;" style ="text-align:right;">
					<span> '.numtobd($at).'</span>
				</td>
			<tr>
			<tr>
				<td  width="100%;" style ="text-align:left;">
					<label>ওভার টাইম বোনাস : </label>
				</td>
				<td  width="100%;" style ="text-align:right;">
					<span> '.numtobd($ot).'</span>
				</td>
			<tr>
			<tr>
				<td>
				</td>
				<td width="100%;" style ="text-align:right;">
					<label>মোট : <span>'.numtobd($total).'</span></label>
				</td>
			</tr>
		</table>
	</td>';
		if ($i % 2 != 0)
			$html .='</tr>';
		$i++;
	}
				
	$html .='
			</tbody>
		</table>
	</body>
	</html>
	';
	$mpdf=new mPDF('','A4',20,'nikosh'); 
	$mpdf->WriteHTML($html);
	$mpdf->Output();
	exit;
	// echo $html;
}
else{
	echo '<script type="text/javascript">window.close()</script>';
}