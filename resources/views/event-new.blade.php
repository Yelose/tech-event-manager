<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excursiones Fem-Desk crear nueva</title>
</head>

<body>
    <h1>Nueva Excursión</h1>
    <form action="" method="POST">
        <section>
            <div>
                <label for="image">Imagen</label>
                <input type="text" name="image">
            </div>
        </section>
        <section>
            <div>
                <label for="title">Título de la excursión</label>
                <input type="text" name="title">
            </div>
        </section>
        <section>
            <div>
                <label for="date">Fecha</label>
                <input type="date" name="date">
            </div>
            <div>
                <label for="time">Hora</label>
                <input type="text" name="time">
            </div>
            <div>
                <label for="duration">Duración</label>
                <input type="text" name="duration">
            </div>
        </section>
        <section>
            <div>
                <label for="place">Ubicación</label>
                <input type="text" name="place">
            </div>
        </section>
        <section>
            <div>
                <label for="max">Número máximo de participantes</label>
                <input type="number" name="max">
            </div>
            <div>
                <label for="min">Número mínimo de participantes</label>
                <input type="number" name="min">
            </div>
            <div>
                <label for="price">Precio</label>
                <input type="text" name="price"><span>€</span>
            </div>
        </section>
        <section>
            <div>
                <label for="description">Descripción</label>
                <input type="textarea" name="included">
            </div>
        </section>
        <section>
            <div>
                <label for="included">El precio incluye:</label>
                <input type="textarea" name="included">
            </div>
        </section>
        <section>
            <div>
                <input type="submit" value="Crear">
                <input type="cancel" value="Cancelar">
            </div>
        </section>

    </form>

</body>

<style>
    body {
        color: #712E3D;
        max-width: 1400px;
        margin: auto;
    }

    section {
        display: flex;
    }

    div {
        display: flex;
        flex: 1;
    }

    label {
        flex: 1;
        text-align: right;
    }

    input {
        flex: 1
    }
</style>

</html>
