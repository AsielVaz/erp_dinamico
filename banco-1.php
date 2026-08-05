<?php
$pageTitle='Banco 1'; $pageEyebrow='Pagos / Cuenta principal'; $activeModule='pagos'; $activePage='banco-1';
$pageAction='<div class="btn-group"><button class="btn btn-soft-secondary"><i data-lucide="refresh-cw" class="fs-17 me-1"></i>Conciliar</button><button class="btn btn-primary"><i data-lucide="plus" class="fs-17 me-1"></i>Registrar movimiento</button></div>';
$bankGradient='linear-gradient(135deg, #6658dd, #4e44b8)'; $bankBalance='$842,650.80'; $bankAccount='****  ****  ****  4821'; $bankIncome='$386,240.00'; $bankIncomeTrend='18.4%'; $bankExpense='$214,580.20'; $bankExpenseCount='36'; $bankPending='$48,250.00'; $bankPendingCount='4';
$bankMovements=[
 ['date'=>'05 ago','time'=>'10:42','type'=>'in','description'=>'Comercializadora Maya','detail'=>'Pago factura F-2048','reference'=>'SPEI-849203','category'=>'Cobranza','status'=>'Por conciliar','statusColor'=>'warning','amount'=>'$48,250.00'],
 ['date'=>'05 ago','time'=>'09:18','type'=>'out','description'=>'Proveedor Nacional SA','detail'=>'Compra de mercancia','reference'=>'SPEI-849177','category'=>'Proveedores','status'=>'Conciliado','statusColor'=>'success','amount'=>'$26,780.00'],
 ['date'=>'04 ago','time'=>'16:03','type'=>'out','description'=>'Servicio de Administracion','detail'=>'Pago de contribuciones','reference'=>'LINEA-39028','category'=>'Impuestos','status'=>'Conciliado','statusColor'=>'success','amount'=>'$18,420.50'],
 ['date'=>'04 ago','time'=>'12:35','type'=>'in','description'=>'Retail del Centro','detail'=>'Liquidacion factura F-2032','reference'=>'SPEI-848915','category'=>'Cobranza','status'=>'Conciliado','statusColor'=>'success','amount'=>'$72,900.00'],
];
require 'templates/page-start.php'; require 'templates/bank-content.php'; require 'templates/scripts.php';
