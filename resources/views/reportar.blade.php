<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reportar un problema</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">
    <div class="container">
        <h1 class="mb-4">Reportar un problema</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('public.reporte.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label class="form-label">Título</label>
                <input type="text" name="titulo" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Descripción</label>
                <textarea name="descripcion" class="form-control" rows="4" required></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Tipo</label>
                <select name="tipo" class="form-select" required>
                    <option value="">Seleccione</option>
                    <option value="Alumbrado público">Alumbrado público</option>
                    <option value="Basura">Basura</option>
                    <option value="Baches">Baches</option>
                    <option value="Ruido">Ruido</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Imagen (opcional)</label>
                <input type="file" name="imagen" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Enviar reporte</button>
        </form>
    </div>
</body>
</html>
