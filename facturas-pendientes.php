<?php
$pageTitle = 'Facturas pendientes';
$pageEyebrow = 'Facturas / Por procesar';
$activeModule = 'facturas';
$activePage = 'facturas-pendientes';
$pageAction = '<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newInvoice"><i data-lucide="plus" class="fs-18 me-1"></i>Nueva factura</button>';
require_once __DIR__ . '/api/FacturaVistaAdministrador.php';
$invoiceError = '';
try {
    $invoiceData = (new FacturaVistaAdministrador(new FacturaAdministrador(Conexion::obtener())))->cargar('pendientes', $_GET);
    $invoiceRows = $invoiceData['filas'];
    $invoicePagination = $invoiceData['paginacion'];
    $invoiceSummary = $invoiceData['resumen'];
} catch (Throwable $error) {
    $invoiceRows = [];
    $invoicePagination = ['total' => 0, 'pagina' => 1, 'paginas' => 1, 'por_pagina' => 10];
    $invoiceSummary = ['total' => 0, 'importe' => 0, 'errores' => 0, 'canceladas' => 0, 'este_mes' => 0];
    $invoiceError = 'No fue posible cargar las facturas. Verifica la conexion con la base de datos.';
}
require 'templates/page-start.php';
?>
<?php if ($invoiceError !== ''): ?><div class="alert alert-danger"><i data-lucide="database-zap" class="fs-18 me-2"></i><?= htmlspecialchars($invoiceError) ?></div><?php endif; ?>
<div class="row g-3 mb-4">
<?php
$cards = [
 ['Pendientes por timbrar',number_format($invoiceSummary['total']),'$'.number_format($invoiceSummary['importe'], 2),'receipt','primary','Total registrado','primary'],
 ['Del mes mas reciente',number_format($invoiceSummary['este_mes']),'Facturas registradas','calendar-days','info','Actividad mensual','info'],
 ['Con error',number_format($invoiceSummary['errores']),'Requieren correccion','circle-alert','danger','Incidencias detectadas','danger'],
 ['Sin incidencias',number_format(max(0, $invoiceSummary['total'] - $invoiceSummary['errores'])),'Listas para procesar','file-check-2','success','Pendientes validas','success'],
];
foreach ($cards as $c) { [$kpiLabel,$kpiValue,$kpiTrend,$kpiIcon,$kpiColor,$extra,$kpiTrendColor]=$c; $kpiTrend="$kpiTrend · $extra"; require 'templates/kpi-card.php'; }
?>
</div>
<?php $invoiceType='pending'; require 'templates/invoice-table.php'; ?>
<div class="modal fade" id="newInvoice" tabindex="-1" aria-hidden="true"><div class="modal-dialog modal-lg modal-dialog-centered"><div class="modal-content"><div class="modal-header"><div><h5 class="modal-title">Nueva factura</h5><p class="text-muted mb-0 fs-13">Captura la informacion principal del comprobante.</p></div><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div><div class="modal-body"><div class="row g-3"><div class="col-md-8"><label class="form-label">Cliente</label><select class="form-select"><option>Seleccionar cliente...</option><option>Comercializadora Maya</option><option>Tecnologia del Golfo</option></select></div><div class="col-md-4"><label class="form-label">Moneda</label><select class="form-select"><option>MXN</option><option>USD</option></select></div><div class="col-md-6"><label class="form-label">Metodo de pago</label><select class="form-select"><option>PPD - Pago en parcialidades</option><option>PUE - Pago en una exhibicion</option></select></div><div class="col-md-6"><label class="form-label">Uso CFDI</label><select class="form-select"><option>G03 - Gastos en general</option></select></div><div class="col-12"><label class="form-label">Concepto</label><textarea class="form-control" rows="3" placeholder="Describe los productos o servicios..."></textarea></div></div></div><div class="modal-footer"><button class="btn btn-light" data-bs-dismiss="modal">Cancelar</button><button class="btn btn-primary">Crear borrador</button></div></div></div></div>
<?php require 'templates/scripts.php'; ?>
