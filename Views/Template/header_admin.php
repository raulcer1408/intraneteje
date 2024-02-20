<!DOCTYPE html>
<html lang="es">
<head>

  <!--para caracteres-->
  <meta charset="utf-8">
  <!--para mostrar en las busquedas la Descripción de las páginas para-->	
	<meta name="description" content="Intranet Escuela de Jueces del Estado">
	<!--compatibilidad con navegador Edge-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--ayuda a que se vea bien en los dispositivos moviles-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--nombre de desarrollador-->
    <meta name="author" content="Rafael Poppe Aviles">
    <meta name="theme-color" content="#007bff">
    <!--Icono Pagina-->

      <link rel="shortcut icon" type="" href="<?= media();?>/images/favicon.ico">
     <!--Titulo Pasgina-->
  	<title><?= $data['Titulo_Etiqueta'];?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
     <link rel="stylesheet" href= "<?= media();?>/css/fontawesome-free/css/all.min.css">
     <link rel="stylesheet" type="text/css" href="<?= media();?>/css/bootstrap-select4/css/bootstrap-select.min.css"> 
     <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?= media();?>/css/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
     <!-- DataTables -->
        <link rel="stylesheet" href="<?= media();?>/css/datatables-bs4/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="<?= media();?>/css/datatables-responsive/responsive.bootstrap4.min.css">
        <link rel="stylesheet" href="<?= media();?>/css/datatables-buttons/buttons.bootstrap4.min.css">
      <!--fechas-->
      <link rel="stylesheet" href="<?= media();?>/css/datepicker/mc-calendar.min.css">
    
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= media();?>/css/adminlte/css/adminlte.min.css">
  <link rel="stylesheet" href="<?= media();?>/css/style.css">

   

</head>
<?php require_once("nav_admin.php"); ?> 