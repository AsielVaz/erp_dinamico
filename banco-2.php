<?php
$pageTitle='Banco 2'; $pageEyebrow='Pagos / Cuenta de operacion'; $activeModule='pagos'; $activePage='banco-2';
$pageAction='<div class="btn-group"><button class="btn btn-soft-secondary"><i data-lucide="refresh-cw" class="fs-17 me-1"></i>Conciliar</button><button class="btn btn-primary"><i data-lucide="plus" class="fs-17 me-1"></i>Registrar movimiento</button></div>';
$bankGradient='linear-gradient(135deg, #0ea5a8, #087f82)'; $bankBalance='$315,890.42'; $bankAccount='****  ****  ****  7314'; $bankIncome='$198,720.00'; $bankIncomeTrend='9.2%'; $bankExpense='$164,305.18'; $bankExpenseCount='29'; $bankPending='$12,480.00'; $bankPendingCount='2';
$bankMovements=[
 ['date'=>'05 ago','time'=>'11:20','type'=>'out','description'=>'Transportes Unidos','detail'=>'Fletes zona centro','reference'=>'TRF-240581','category'=>'Logistica','status'=>'Por conciliar','statusColor'=>'warning','amount'=>'$12,480.00'],
 ['date'=>'04 ago','time'=>'15:44','type'=>'in','description'=>'Industrias del Sur','detail'=>'Abono a cuenta','reference'=>'DEP-482910','category'=>'Cobranza','status'=>'Conciliado','statusColor'=>'success','amount'=>'$38,900.00'],
 ['date'=>'04 ago','time'=>'09:02','type'=>'out','description'=>'Nomina administrativa','detail'=>'Periodo 15/2026','reference'=>'NOM-202615','category'=>'Nomina','status'=>'Conciliado','statusColor'=>'success','amount'=>'$86,340.00'],
 ['date'=>'01 ago','time'=>'13:27','type'=>'in','description'=>'Logistica Express','detail'=>'Pago de servicios','reference'=>'DEP-481772','category'=>'Cobranza','status'=>'Conciliado','statusColor'=>'success','amount'=>'$24,650.00'],
];
require 'templates/page-start.php'; require 'templates/bank-content.php'; require 'templates/scripts.php';
