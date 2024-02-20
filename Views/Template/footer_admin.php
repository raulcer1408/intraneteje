  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
     @EJE
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2021 <a href="https://eje.gob.bo">Escuela de Jueces del Estado</a>.</strong> Todos los Derechos Reservados.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script>
	const base_url = '<?= base_url()?>'
</script>

<script src="<?= media();?>/js/jquery/jquery.min.js"></script>
<!-- InputMask -->
<script src="<?= media();?>/js/moment/moment.min.js"></script>
<script src="<?= media();?>/js/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="<?= media();?>/js/datepicker/mc-calendar.min.js"></script>

<!-- Bootstrap 4 -->
<script src="<?= media();?>/js/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert2 -->
<script src="<?= media();?>/js/sweetalert2/sweetalert2.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?= media();?>/js/datatables/jquery.dataTables.min.js"></script>
<script src="<?= media();?>/js/datatables-bs4/dataTables.bootstrap4.min.js"></script>
<script src="<?= media();?>/js/datatables-responsive/dataTables.responsive.min.js"></script>
<script src="<?= media();?>/js/datatables-responsive/responsive.bootstrap4.min.js"></script>
<script type="text/javascript" src="<?= media();?>/js/bootstrap-select4/js/bootstrap-select.min.js"></script>
<script src="<?= media();?>/js/datatables-buttons/dataTables.buttons.min.js"></script>
<script src="<?= media();?>/js/datatables-buttons/buttons.bootstrap4.min.js"></script>
<script src="<?= media();?>/js/jszip/jszip.min.js"></script>
<script src="<?= media();?>/js/pdfmake/pdfmake.min.js"></script>
<script src="<?= media();?>/js/pdfmake/vfs_fonts.js"></script>
<script src="<?= media();?>/js/datatables-buttons/buttons.html5.min.js"></script>
<script src="<?= media();?>/js/datatables-buttons/buttons.print.min.js"></script>
<script src="<?= media();?>/js/datatables-buttons/buttons.colVis.min.js"></script>

<!-- Funciones Personalizadas -->
<!-- AdminLTE App -->
<script src="<?= media();?>/js/adminlte/js/adminlte.min.js"></script>
 <script type="text/javascript" src="<?= media();?>/js/functions_admin.js"></script>
    <script src="<?= media(); ?>/js/<?= $data['page_functions_js']; ?>"></script>
    <script src="<?= media();?>/js/TraducirDataGrid.js"></script>
</body>
</html>
