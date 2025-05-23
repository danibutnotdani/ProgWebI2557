<?php
// Inicializar variables
$numero1 = '';
$numero2 = '';
$operacion = '';
$resultado = '';
$error = '';

// Procesar el formulario cuando se envía
if ($_POST) {
    $numero1 = $_POST['numero1'] ?? '';
    $numero2 = $_POST['numero2'] ?? '';
    $operacion = $_POST['operacion'] ?? '';

    // Validar que los números sean válidos
    if (is_numeric($numero1) && is_numeric($numero2)) {
        $num1 = floatval($numero1);
        $num2 = floatval($numero2);

        // Realizar la operación seleccionada
        switch ($operacion) {
            case 'suma':
                $resultado = $num1 + $num2;
                break;
            case 'resta':
                $resultado = $num1 - $num2;
                break;
            case 'multiplicacion':
                $resultado = $num1 * $num2;
                break;
            case 'division':
                if ($num2 != 0) {
                    $resultado = $num1 / $num2;
                } else {
                    $error = "Error: No se puede dividir entre cero";
                }
                break;
            default:
                $error = "Error: Selecciona una operación";
        }
    } else {
        $error = "Error: Por favor ingresa números válidos";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<div class="calculadora">
    <h1>Calculadora PHP</h1>

    <form method="POST" action="">
        <div class="form-group">
            <label for="numero1">Primer número:</label>
            <input type="number" id="numero1" name="numero1" step="any"
                   value="<?php echo htmlspecialchars($numero1); ?>" required>
        </div>

        <div class="form-group">
            <label for="operacion">Operación:</label>
            <select id="operacion" name="operacion" required>
                <option value="">Selecciona una operación</option>
                <option value="suma" <?php echo ($operacion == 'suma') ? 'selected' : ''; ?>>Suma</option>
                <option value="resta" <?php echo ($operacion == 'resta') ? 'selected' : ''; ?>>Resta</option>
                <option value="multiplicacion" <?php echo ($operacion == 'multiplicacion') ? 'selected' : ''; ?>>Multiplicación</option>
                <option value="division" <?php echo ($operacion == 'division') ? 'selected' : ''; ?>>División</option>
            </select>
        </div>

        <div class="form-group">
            <label for="numero2">Segundo número:</label>
            <input type="number" id="numero2" name="numero2" step="any"
                   value="<?php echo htmlspecialchars($numero2); ?>" required>
        </div>

        <button type="submit" class="btn">Calcular</button>
    </form>

    <?php if ($error): ?>
        <div class="resultado error">
            <?php echo htmlspecialchars($error); ?>
        </div>
    <?php elseif ($resultado !== '' && !$error): ?>
        <div class="resultado">
            Resultado: <?php echo number_format($resultado, 2); ?>
        </div>
    <?php endif; ?>
</div>
</body>
</html>