<h1 class="page-header">
    <?php echo $alm->id != null ? $alm->titulo : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Noticia">Noticias</a></li>
  <li class="active"><?php echo $alm->id != null ? $alm->titulo : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-noticia" action="?c=Noticia&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $alm->id; ?>" />
    
    <div class="form-group">
        <label>Titulo</label>
        <input type="text" name="titulo" value="<?php echo $alm->titulo; ?>" class="form-control" placeholder="Ingrese un titulo" data-validacion-tipo="requerido"/>
    </div>
    
    <div class="form-group">
        <label>Texto</label>
        <input type="text" name="texto" value="<?php echo $alm->texto; ?>" class="form-control" placeholder="Texto" data-validacion-tipo="requerido"/>
    </div>
    
    <div class="form-group">
        <label>Categoria</label>
        <input type="text" name="categoria" value="<?php echo $alm->categoria; ?>" class="form-control" placeholder="Ingrese la categoria" data-validacion-tipo="requerido"/>
    </div>
      
    <div class="form-group">
        <label>Fecha</label>
        <input readonly type="text" name="fecha" value="<?php echo $alm->fecha; ?>" class="form-control datepicker" placeholder="Ingrese su fecha" data-validacion-tipo="requerido"/>
    </div>
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-noticia").submit(function(){
            return $(this).validate();
        });
    })
</script>