<html lang="en-US">
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
</head>
<body>
                 <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Estacion</th>
                            <th>Descripcion</th>
                            <th>Latitud</th>
                            <th>Longuitud</th>
                        </tr>
                    </thead>
                    <tbody id="userData">
                        <?php if(!empty($rutas)){ 
                            foreach($rutas as $estacion){ ?>
                        <tr>
                            <td rowspan="2" colspan="2" align="center" bgcolor="red"><?php echo $estacion['id']; ?></td>
                            <td rowspan="2" colspan="2" align="center" bgcolor="red"><?php echo $estacion['estacion']; ?></td>
                            <td rowspan="2" colspan="2" align="center" bgcolor="red"><?php echo $estacion['descripcion']; ?></td>
                            <td rowspan="2" colspan="2" align="center" bgcolor="red"><?php echo $estacion['latitud']; ?></td>
                            <td rowspan="2" colspan="2" align="center" bgcolor="red"><?php echo $estacion['longitud']; ?></td>
                        </tr>
                            <?php }
                        }?>
                    
                    </tbody>
                </table>
              </div>
    <a href="<?php echo site_url('Procesador/agregar')?>">Agregar Ruta</a>
</body>
</html>