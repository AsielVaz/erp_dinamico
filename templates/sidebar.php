<?php
$activeModule = $activeModule ?? '';
$activePage = $activePage ?? '';
$isActive = static fn(string $page): string => $activePage === $page ? ' active' : '';
$isOpen = static fn(string $module): string => $activeModule === $module ? ' show' : '';
?>
<div class="main-nav">
    <div class="d-flex justify-content-between main-logo-box">
        <div class="logo-box">
            <a href="facturas-pendientes.php" class="logo-dark">
                <img src="assets/images/logo-sm.png" class="logo-sm" alt="ERP">
                <img src="assets/images/logo-dark.png" class="logo-lg" alt="ERP Dinamico">
            </a>
            <a href="facturas-pendientes.php" class="logo-light">
                <img src="assets/images/logo-sm.png" class="logo-sm" alt="ERP">
                <img src="assets/images/logo-white.png" class="logo-lg" alt="ERP Dinamico">
            </a>
        </div>
        <button type="button" class="btn btn-link d-flex button-sm-hover button-toggle-menu" aria-label="Alternar menu">
            <i data-lucide="menu" class="button-sm-hover-icon"></i>
        </button>
    </div>
    <div class="h-100" data-simplebar>
        <ul class="navbar-nav" id="navbar-nav">
            <li class="menu-title">Gestion administrativa</li>
            <li class="menu-item">
                <a class="menu-link<?= $activeModule === 'facturas' ? ' active' : '' ?>" href="#sidebarFacturas" data-bs-toggle="collapse" role="button" aria-expanded="<?= $activeModule === 'facturas' ? 'true' : 'false' ?>" aria-controls="sidebarFacturas">
                    <span class="nav-icon"><i data-lucide="receipt-text"></i></span>
                    <span class="nav-text">Facturas</span>
                    <span class="menu-arrow"><i data-lucide="chevron-down"></i></span>
                </a>
                <div class="collapse<?= $isOpen('facturas') ?>" id="sidebarFacturas">
                    <ul class="sub-menu-nav">
                        <li class="sub-menu-item"><a class="sub-menu-link<?= $isActive('facturas-pendientes') ?>" href="facturas-pendientes.php">Facturas pendientes</a></li>
                        <li class="sub-menu-item"><a class="sub-menu-link<?= $isActive('facturas-timbradas') ?>" href="facturas-timbradas.php">Facturas timbradas</a></li>
                    </ul>
                </div>
            </li>
            <li class="menu-item">
                <a class="menu-link<?= $activeModule === 'pagos' ? ' active' : '' ?>" href="#sidebarPagos" data-bs-toggle="collapse" role="button" aria-expanded="<?= $activeModule === 'pagos' ? 'true' : 'false' ?>" aria-controls="sidebarPagos">
                    <span class="nav-icon"><i data-lucide="landmark"></i></span>
                    <span class="nav-text">Pagos</span>
                    <span class="menu-arrow"><i data-lucide="chevron-down"></i></span>
                </a>
                <div class="collapse<?= $isOpen('pagos') ?>" id="sidebarPagos">
                    <ul class="sub-menu-nav">
                        <li class="sub-menu-item"><a class="sub-menu-link<?= $isActive('banco-1') ?>" href="banco-1.php">Banco 1</a></li>
                        <li class="sub-menu-item"><a class="sub-menu-link<?= $isActive('banco-2') ?>" href="banco-2.php">Banco 2</a></li>
                        <li class="sub-menu-item"><a class="sub-menu-link<?= $isActive('banco-3') ?>" href="banco-3.php">Banco 3</a></li>
                    </ul>
                </div>
            </li>
            <li class="menu-item">
                <a class="menu-link<?= $activeModule === 'inventario' ? ' active' : '' ?>" href="#sidebarInventario" data-bs-toggle="collapse" role="button" aria-expanded="<?= $activeModule === 'inventario' ? 'true' : 'false' ?>" aria-controls="sidebarInventario">
                    <span class="nav-icon"><i data-lucide="boxes"></i></span>
                    <span class="nav-text">Inventario</span>
                    <span class="menu-arrow"><i data-lucide="chevron-down"></i></span>
                </a>
                <div class="collapse<?= $isOpen('inventario') ?>" id="sidebarInventario">
                    <ul class="sub-menu-nav">
                        <li class="sub-menu-item"><a class="sub-menu-link<?= $isActive('notas-salida') ?>" href="notas-salida.php">Notas de salida</a></li>
                        <li class="sub-menu-item"><a class="sub-menu-link<?= $isActive('inventario') ?>" href="inventario.php">Inventario</a></li>
                        <li class="sub-menu-item"><a class="sub-menu-link<?= $isActive('escaner') ?>" href="escaner-inventario.php">Escaner de inventario</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
