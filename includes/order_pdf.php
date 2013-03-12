<?php

require 'chinese.php';

class PDF extends PDF_Chinese {

    function Header() {
        
    }

    function Footer() {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }

}

function get_amount($num) {
    $c1 = "零壹贰叁肆伍陆柒捌玖";
    $c2 = "分角元拾佰仟万拾佰仟亿";
    $num = round($num, 2);
    $num = $num * 100;
    if (strlen($num) > 10) {
        return "数据太长，没有这么大的钱吧，检查下";
    }
    $i = 0;
    $c = "";
    while (1) {
        if ($i == 0) {
            $n = substr($num, strlen($num) - 1, 1);
        } else {
            $n = $num % 10;
        }
        $p1 = substr($c1, 3 * $n, 3);
        $p2 = substr($c2, 3 * $i, 3);
        if ($n != '0' || ($n == '0' && ($p2 == '亿' || $p2 == '万' || $p2 == '元'))) {
            $c = $p1 . $p2 . $c;
        } else {
            $c = $p1 . $c;
        }
        $i = $i + 1;
        $num = $num / 10;
        $num = (int) $num;
        if ($num == 0) {
            break;
        }
    }
    $j = 0;
    $slen = strlen($c);
    while ($j < $slen) {
        $m = substr($c, $j, 6);
        if ($m == '零元' || $m == '零万' || $m == '零亿' || $m == '零零') {
            $left = substr($c, 0, $j);
            $right = substr($c, $j + 3);
            $c = $left . $right;
            $j = $j - 3;
            $slen = $slen - 3;
        }
        $j = $j + 3;
    }

    if (substr($c, strlen($c) - 3, 3) == '零') {
        $c = substr($c, 0, strlen($c) - 3);
    }
    if (empty($c)) {
        return "零元整";
    } else {
        return $c . "整";
    }
}

function order_pdf($order, $type) {
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->AddGBFont();
    $pdf->SetFont('GB', '', 9);
    $logo = dirname(__FILE__) . "/" . "logo.jpg";
    $pdf->Image($logo, 6, 6, 35);
    $pdf->Cell(150);
    $txt1 = iconv('utf-8', 'gb2312//ignore', $GLOBALS['_CFG']['order_com']);
    $pdf->Cell(30, 4, $txt1, 0, 1, 'L');
    $pdf->Cell(150);
    $txt2 = iconv('utf-8', 'gb2312//ignore', $GLOBALS['_CFG']['order_url']);
    $pdf->Cell(30, 4, $txt2, 0, 1, 'L');
    $pdf->Cell(150);
    $txt3 = iconv('utf-8', 'gb2312//ignore', '免费电话：' . $GLOBALS['_CFG']['service_phone']);
    $pdf->Cell(30, 4, $txt3, 0, 1, 'L');
    $pdf->Ln(4);
    $pdf->SetFillColor(230, 230, 230);
    $pdf->Cell(195, 0.5, '', 0, 1, 'C', 1);
    $pdf->Ln(4);
    $pdf->SetFontSize(18);
    $txt = iconv('utf-8', 'gb2312//ignore', '销售合同');
    $pdf->Cell(195, 20, $txt, 0, 1, 'C');
    $pdf->SetFontSize(9);
    $txt = iconv('utf-8', 'gb2312//ignore', '买方：' . $order['bill_name']);
    $pdf->Cell(97, 8, $txt, 0, 0, 'L');
    $txt = iconv('utf-8', 'gb2312//ignore', '卖方：' . $GLOBALS['_CFG']['order_com']);
    $pdf->Cell(90, 8, $txt, 0, 0, 'L');
    $pdf->ln(4);
    $txt = iconv('utf-8', 'gb2312//ignore', '地址：' . $order['address']);
    $pdf->Cell(97, 8, $txt, 0, 0, 'L');
    $txt = iconv('utf-8', 'gb2312//ignore', '地址：' . $GLOBALS['_CFG']['shop_address']);
    $pdf->Cell(90, 8, $txt, 0, 0, 'L');
    $pdf->ln(4);
    $txt = iconv('utf-8', 'gb2312//ignore', '电话：' . $order['mobile']);
    $pdf->Cell(97, 8, $txt, 0, 0, 'L');
    $txt = iconv('utf-8', 'gb2312//ignore', '电话：' . $GLOBALS['_CFG']['service_phone']);
    $pdf->Cell(90, 8, $txt, 0, 0, 'L');
    $pdf->ln(4);
    $txt = iconv('utf-8', 'gb2312//ignore', '邮箱：' . $order['email']);
    $pdf->Cell(97, 8, $txt, 0, 0, 'L');
    $txt = iconv('utf-8', 'gb2312//ignore', '邮箱：' . $GLOBALS['_CFG']['service_email']);
    $pdf->Cell(90, 8, $txt, 0, 0, 'L');
    $pdf->ln(4);
    $txt = iconv('utf-8', 'gb2312//ignore', '票据：' . ($order['bill_type'] == 'VAT' ? '增值税专用发票' : '普通发票'));
    $pdf->Cell(97, 8, $txt, 0, 0, 'L');
    $pdf->ln(8);
    $pdf->Cell(4);
    $txt = iconv('utf-8', 'gb2312//ignore', '订单号：' . $order['order_sn']);
    $pdf->Cell(90, 8, $txt, 0, 0, 'L');
    $txt = iconv('utf-8', 'gb2312//ignore', '日期：' . date('Y-m-d', strtotime($order['add_time'])));
    $pdf->Cell(90, 8, $txt, 0, 0, 'R');
    $pdf->Ln(6);
    $pdf->Cell(4);
    $txt = iconv('utf-8', 'gb2312//ignore', '编号');
    $pdf->Cell(10, 6, $txt, 1, 0, 'L');
    $txt = iconv('utf-8', 'gb2312//ignore', '产品名称');
    $pdf->Cell(20, 6, $txt, 1, 0, 'L');
    $txt = iconv('utf-8', 'gb2312//ignore', '图片');
    $pdf->Cell(25, 6, $txt, 1, 0, 'L');
    $txt = iconv('utf-8', 'gb2312//ignore', '产品编号');
    $pdf->Cell(15, 6, $txt, 1, 0, 'L');
    $txt = iconv('utf-8', 'gb2312//ignore', '规格');
    $pdf->Cell(15, 6, $txt, 1, 0, 'L');
    $txt = iconv('utf-8', 'gb2312//ignore', '数量');
    $pdf->Cell(15, 6, $txt, 1, 0, 'L');
    $txt = iconv('utf-8', 'gb2312//ignore', '单价(元)');
    $pdf->Cell(25, 6, $txt, 1, 0, 'L');
    $txt = iconv('utf-8', 'gb2312//ignore', '金额(元)');
    $pdf->Cell(30, 6, $txt, 1, 0, 'L');
    $txt = iconv('utf-8', 'gb2312//ignore', '备注');
    $pdf->Cell(25, 6, $txt, 1, 0, 'L');
    $pdf->Ln(6);
    $sql = 'SELECT * FROM' . $GLOBALS['ecs']->table('order_goods') .
            " where order_id = '{$order['order_id']}' ";
    $res = $GLOBALS['db']->query($sql);
    $ii = 1;
    $gtax = 0.00;
    $total_fee = $order['gtax'] + $order['goods_amount'] + $order['shipping_fee'] + $order['tax_extra_weight'];
    while ($row = $GLOBALS['db']->fetchRow($res)) {
        $current_y1 = $pdf->GetY();
        $current_x = $pdf->GetX();
        $pdf->SetXY($current_x + 59, $current_y1);
        $txt = iconv('utf-8', 'gb2312//ignore', $row['goods_name']);
        $pdf->MultiCell(25, 5, $txt, 0, 'L');
        $current_y2 = $pdf->GetY();
        $pdf->SetXY($current_x, $current_y1);
        $y = $current_y2 - $current_y1;
        $pdf->SetXY($current_x + 34, $current_y1);
        $txt = iconv('utf-8', 'gb2312//ignore', $row['goods_name']);
        $pdf->MultiCell(25, 5, $txt, 0, 'L');
        $current_y3 = $pdf->GetY();
        $pdf->SetXY($current_x, $current_y1);
        $y1 = $current_y3 - $current_y1;
        $pdf->SetXY($current_x + 14, $current_y1);
        $txt = iconv('utf-8', 'gb2312//ignore', $row['type']);
        $pdf->MultiCell(20, 5, $txt, 0, 'L');
        $current_y4 = $pdf->GetY();
        $pdf->SetXY($current_x, $current_y1);
        $y2 = $current_y4 - $current_y1;
        $y = max(array($y, $y1, $y2));
        $pdf->Cell(4);
        $txt = iconv('utf-8', 'gb2312//ignore', $ii);
        $pdf->Cell(10, $y, $txt, 1, 0, 'L');
        $pdf->Cell(20, $y, "", 1, 0, 'L');
        $pdf->Cell(25, $y, "", 1, 0, 'L');
        $pdf->Cell(15, $y, "", 1, 0, 'L');
        $txt = iconv('utf-8', 'gb2312//ignore', $row['goods_number']);
        $pdf->Cell(15, $y, $txt, 1, 0, 'L');
        $txt = iconv('utf-8', 'gb2312//ignore', $row['goods_number']);
        $pdf->Cell(15, $y, $txt, 1, 0, 'L');
        $txt = iconv('utf-8', 'gb2312//ignore', $row['goods_price']);
        $pdf->Cell(25, $y, $txt, 1, 0, 'L');
        $txt = iconv('utf-8', 'gb2312//ignore', number_format($row['goods_number'] * $row['goods_price'], 2));
        $pdf->Cell(30, $y, $txt, 1, 0, 'L');
        $txt = iconv('utf-8', 'gb2312//ignore', $row['postscript']);
        $pdf->Cell(25, $y, $txt, 1, 0, 'L');
        $pdf->Ln($y);
        $ii++;
    }
    $fwu = 0;
    $pdf->Cell(4);
    $txt = iconv('utf-8', 'gb2312//ignore', '商品总金额：￥' . number_format($order['goods_amount'], 2));
    $pdf->Cell(100, 8, $txt, 0, 0, 'L');
    $txt = iconv('utf-8', 'gb2312//ignore', '运费：￥' . $order['shipping_fee']);
    $pdf->Cell(40, 8, $txt, 0, 0, 'L');
    $txt = iconv('utf-8', 'gb2312//ignore', '订单总金额：￥' . number_format($total_fee + $order['service_fee'], 2));
    $pdf->Cell(40, 8, $txt, 0, 0, 'R');
    $pdf->Ln(6);
    $txt = iconv('utf-8', 'gb2312//ignore', '大写：人民币 ' . get_amount($total_fee + $order['service_fee']));
    $pdf->Cell(190, 8, $txt, 0, 0, 'R');
    $pdf->Ln(8);
    $value = iconv('utf-8', 'gb2312//ignore', '备注：');
    $pdf->Cell(190, 8, $value, 0, 0, 'L');
    $pdf->Ln(6);
    $txts = explode(PHP_EOL, $GLOBALS['_CFG']['order_tips']);
    foreach ($txts as $value) {
        $value = iconv('utf-8', 'gb2312//ignore', $value);
        $pdf->Cell(190, 8, $value, 0, 0, 'L');
        $pdf->Ln(6);
    }
    $pdf->Ln(2);

    $value = iconv('utf-8', 'gb2312//ignore', "收货人：" . $order['consignee']);
    $pdf->Cell(130, 8, $value, 0, 0, 'L');
    $current_y = $pdf->GetY();
    $current_x = $pdf->GetX();
    $zhang = dirname(__FILE__) . "/" . "zhang.png";
    $pdf->Image($zhang, $current_x, $current_y - 5, 35);
    $value = iconv('utf-8', 'gb2312//ignore', "开户名称：" . $GLOBALS['_CFG']['order_bank_name']);
    $pdf->Cell(40, 8, $value, 0, 0, 'L');

    $pdf->Ln(6);
    $pdf->Cell(130);
    $value = iconv('utf-8', 'gb2312//ignore', "开户银行：" . $GLOBALS['_CFG']['order_bank']);
    $pdf->Cell(40, 8, $value, 0, 0, 'L');
    $pdf->Ln(6);
    $value = iconv('utf-8', 'gb2312//ignore', "日期：" . date('Y-m-d', time()));
    $pdf->Cell(130, 8, $value, 0, 0, 'L');
    $value = iconv('utf-8', 'gb2312//ignore', "银行账号：" . $GLOBALS['_CFG']['order_bank_account']);
    $pdf->Cell(40, 8, $value, 0, 0, 'L');
    $pdf->SetFont('Arial', 'B', 16);
    $value = iconv('utf-8', 'gb2312//ignore', "销售订单" . $order['order_sn']);
//$value="销售订单";
    $path = dirname(__FILE__);
    if ($type == "D") {
        $pdf->Output($value . ".pdf", $type);
    } else if ($type == "F") {
        $pdf->Output($path . "/" . $value . ".pdf", $type);
    }

    $pdf->Close();
}

?>
