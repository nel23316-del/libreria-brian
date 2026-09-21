<?php include 'views/layout/header.php'; ?>

<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Catálogo de Libros</h2>
    <button class="btn btn-purple">+ Registrar Libro</button>
</div>

<div class="card shadow-sm">
    <div class="card-body p-0">
        <table class="table table-hover mb-0">
            <thead class="table-header">
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Categoría</th>
                    <th>Proveedor</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($libros as $row): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td class="fw-bold"><?= htmlspecialchars($row['titulo']) ?></td>
                    <td><?= htmlspecialchars($row['autor']) ?></td>
                    <td>$<?= number_format($row['precio'], 2) ?></td>
                    <td><span class="badge bg-secondary"><?= $row['stock'] ?> uds</span></td>
                    <td><?= htmlspecialchars($row['categoria_nombre'] ?? 'Sin categoría') ?></td>
                    <td><?= htmlspecialchars($row['proveedor_nombre'] ?? 'Sin proveedor') ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include 'views/layout/footer.php'; ?>