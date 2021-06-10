<?php

namespace App\Factory;

use App\OrderHistory;

class OrderHistoryFactory {

    static function PaidOrder($OrderId)
    {
        $history = new OrderHistory();
        $history->order_id = $OrderId;
        $history->aktor = "System";
        $history->message = "Pembayaran telah diterima dan pesanan akan segera di proses.";
        $history->save();

        return $history;
    }

    static function acceptOrder($OrderId)
    {
        $history = new OrderHistory();
        $history->order_id = $OrderId;
        $history->aktor = "Seller";
        $history->message = "Pesanan sedang diproses oleh penjual.";
        $history->save();

        return $history;
    }

    static function ResiUpdated($OrderId)
    {
        $history = new OrderHistory();
        $history->order_id = $OrderId;
        $history->aktor = "System";
        $history->message = "Pesanan telah dikirim. Pesanan Anda dalam proses pengiriman oleh kurir.";
        $history->save();

        return $history;
    }
}
