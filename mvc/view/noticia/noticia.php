<h1 class="page-header">Noticias</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=Noticia&a=Crud">Nueva Noticia</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">Titulo</th>
            <th>Texto</th>
            <th>Categoria</th>
            <th style="width:120px;">Fecha</th>
            <th style="width:120px;"></th>
            <th style="width:60px;"></th>
            <th style="width:60px;"></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $noticia): ?>
        <tr>
            <td><?php echo $noticia->titulo; ?></td>
            <td><?php echo $noticia->texto; ?></td>
            <td><?php echo $noticia->categoria; ?></td>
            <td><?php echo $noticia->fecha; ?></td>
            <td>
                <a href="?c=Noticia&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Noticia&a=Eliminar&id=<?php echo $noticia->id; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
