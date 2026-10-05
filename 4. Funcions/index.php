<?php
    $productes = [
    "Llibre" => 12.5,
    "Motxilla" => 35,
    "Bolígraf" => 1.2,
    "Carpeta" => 4.8
    ];

    $quantitats = [
    "Llibre" => 2,
    "Motxilla" => 1,
    "Bolígraf" => 5,
    "Carpeta" => 3
    ];
    
    function detallCompra (array $preus, $quantitats): array {
    detall: [];
    
    foreach ($preus as $producte => $preu) {
        $quantitat = $quantitats[$producte] ?? 0;
        $subtotal = $preu * $quantitat;

        $detall[$producte] = [
            'preu' => $preu,
            'quantitat' => $quantitat,
            'subtotal' => $subtotal,
        ];
    }
    return $detall;
    }

    function calcularTot (array $detallCompra): float {
        $total = 0;

        foreach ($detallCompra as $item){
            $total += $item['subtotal'];
        }
        return $total;
    }

    $detallCompra = detallCompra($productes, $quantitats);
    $total = calcularTot($detallCompra);
?>

<html>
    <body>
        <table>
        <thead>
            <tr>
                <th>Producte</th>
                <th>Preu unitari</th>
                <th>Quantitat</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($detallCompra as $producte => $dades): ?>
                <tr>
                    <td><?= htmlspecialchars($producte) ?></td>
                    <td><?= number_format($dades['preu'], 2) ?> €</td>
                    <td><?= $dades['quantitat'] ?></td>
                    <td><?= number_format($dades['subtotal'], 2) ?> €</td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <p>Total: <?= number_format($total, 2) ?> €</p>
    </body>
</html>