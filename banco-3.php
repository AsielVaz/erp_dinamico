<?php
$pageTitle='Banco 3'; $pageEyebrow='Pagos / Cuenta en dolares'; $activeModule='pagos'; $activePage='banco-3';
$pageAction='<div class="btn-group"><button class="btn btn-soft-secondary"><i data-lucide="refresh-cw" class="fs-17 me-1"></i>Conciliar</button><button class="btn btn-primary"><i data-lucide="plus" class="fs-17 me-1"></i>Registrar movimiento</button></div>';
$bankGradient='linear-gradient(135deg, #f59f00, #d97706)'; $bankBalance='US$ 76,420.18'; $bankAccount='****  ****  ****  0952'; $bankIncome='US$ 18,950.00'; $bankIncomeTrend='22.1%'; $bankExpense='US$ 9,840.50'; $bankExpenseCount='11'; $bankPending='US$ 4,250.00'; $bankPendingCount='1';
$bankMovements=[
 ['date'=>'05 ago','time'=>'08:52','type'=>'in','description'=>'North Supply LLC','detail'=>'International payment','reference'=>'SWIFT-98241','category'=>'Cobranza','status'=>'Por conciliar','statusColor'=>'warning','amount'=>'US$ 4,250.00'],
 ['date'=>'03 ago','time'=>'14:18','type'=>'out','description'=>'Global Components Inc','detail'=>'Importacion de componentes','reference'=>'SWIFT-98104','category'=>'Importaciones','status'=>'Conciliado','statusColor'=>'success','amount'=>'US$ 6,780.00'],
 ['date'=>'30 jul','time'=>'10:42','type'=>'in','description'=>'Pacific Trade Corp','detail'=>'Invoice INT-044','reference'=>'SWIFT-97843','category'=>'Cobranza','status'=>'Conciliado','statusColor'=>'success','amount'=>'US$ 12,900.00'],
 ['date'=>'28 jul','time'=>'16:11','type'=>'out','description'=>'International Freight','detail'=>'Flete maritimo','reference'=>'SWIFT-97655','category'=>'Logistica','status'=>'Conciliado','statusColor'=>'success','amount'=>'US$ 3,060.50'],
];
require 'templates/page-start.php'; require 'templates/bank-content.php'; require 'templates/scripts.php';
