<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use LaravelDaily\Invoices\Invoice;
use LaravelDaily\Invoices\Classes\Buyer;
use LaravelDaily\Invoices\Classes\InvoiceItem;

class DownloadPdfController extends Controller
{
    public function download(Ticket $record){
        // dd($record->live->name);
        $customer = new Buyer([
            'name'          =>  $record->user->name,
            'custom_fields' => [
                'email' => $record->user->email,
            ],
        ]);
        
        $item = InvoiceItem::make('Ticket')->pricePerUnit(2);
        
        $invoice = Invoice::make()
            ->buyer($customer)
            ->discountByPercent(10)
            ->taxRate(15)
            ->shipping(1.99)
            ->addItem($item);
        
        return $invoice->stream();
    }
}
