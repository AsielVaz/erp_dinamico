<?php

declare(strict_types=1);

final class SesionEmpresa
{
    // Cambia solamente estos dos valores para establecer otra empresa por defecto.
    public const EMPRESA_POR_DEFECTO = 108;
    public const CLAVE_POR_DEFECTO = 952;

    public static function iniciar(): void
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            if (PHP_SAPI !== 'cli' && !headers_sent()) {
                session_set_cookie_params([
                    'httponly' => true,
                    'secure' => !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off',
                    'samesite' => 'Lax',
                ]);
            }
            session_start();
        }

        $_SESSION['empresa_actual'] ??= self::EMPRESA_POR_DEFECTO;
        $_SESSION['clave_actual'] ??= self::CLAVE_POR_DEFECTO;
    }

    public static function empresaActual(): int
    {
        self::iniciar();
        return max(1, (int) $_SESSION['empresa_actual']);
    }

    public static function claveActual(): int
    {
        self::iniciar();
        return max(1, (int) $_SESSION['clave_actual']);
    }

    public static function cambiar(int $empresa, int $clave): void
    {
        self::iniciar();
        $_SESSION['empresa_actual'] = max(1, $empresa);
        $_SESSION['clave_actual'] = max(1, $clave);
    }
}
