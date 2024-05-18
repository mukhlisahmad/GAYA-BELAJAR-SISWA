<?php
$this->load->view('main/header');
$this->load->view('main/navbar');
?>
<section>
	<div class="card">
<div id="page-wrapper">
    <div class="card-header">
        <div class="col-lg-12">
            <h1 class="page-header">Data Saran</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.card -->
    <div class="card-body">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="#" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#ModalAdd"><span class="fa fa-plus"></span> Add</a>

                </div>
                <!-- /.panel-heading -->
                <div class="table-responsive">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="myTable">
                        <thead class="table-dark">
                            <tr>
                                <th>No.</th>
                                <th>Kode</th>
                                <th>Gaya Belajar</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="show_data">

                        </tbody>
                    </table>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-6 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->

<!-- /#wrapper -->
<!-- MODAL ADD -->
<div class="modal fade" id="ModalAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-white">
                <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="kode_add" class="form-label">Kode</label>
                        <input type="text" class="form-control" id="kode1" name="kode_add">
                    </div>
                    <div class="mb-3">
                        <label for="gayabelajar_add" class="form-label">Gaya Belajar</label>
                        <select class="form-select" id="gayabelajar1" name="gayabelajar_add">
                            <option value="A">Auditory</option>
                            <option value="V">Visual</option>
                            <option value="K">Kinesthetic</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="keterangan_add" class="form-label">Keterangan</label>
                        <textarea class="form-control" id="keterangan1" name="keterangan_add" rows="6"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success" id="btn_simpan">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--END MODAL ADD-->
<!-- MODAL EDIT -->
<div class="modal fade" id="ModalUpdate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="kode_edit" class="form-label">Kode</label>
                        <input type="text" class="form-control" id="kode2" name="kode_edit" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="gayabelajar_edit" class="form-label">Gaya Belajar</label>
                        <select class="form-select" id="gayabelajar2" name="gayabelajar_edit">
                            <option value="A">Auditory</option>
                            <option value="V">Visual</option>
                            <option value="K">Kinesthetic</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="keterangan_edit" class="form-label">Keterangan</label>
                        <input id="keterangan2" type="hidden" name="keterangan_edit">
                        <trix-editor input="keterangan2" class="form-control"></trix-editor>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-info" id="btn_update">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--END MODAL EDIT-->

<script>
    $(document).ready(function() {
        $('#ModalUpdate').on('shown.bs.modal', function () {
            var editor = document.querySelector('#keterangan2');
            var trix = new Trix.Editor(editor);
        });
    });
</script>


</script>
<!--MODAL HAPUS-->
<div class="modal fade" id="ModalDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">
                    <input type="hidden" name="kode" id="textkode" value="">
                    <div class="alert alert-warning"><p>Apakah Anda yakin ingin menghapus data ini?</p></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-danger" id="btn_hapus">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--END MODAL HAPUS-->

</div>
</section>
<?php
$this->load->view('main/footer');
?>

<script type="text/javascript">
    $(document).ready(function()
	{
        var rownumber = 0;
        var tableajax = $('#myTable').DataTable({
        	responsive: true,
            ajax: '<?php echo base_url("gb/C_saran/getAjax") ?>',
            columns: [
             {
                data: null,
                render: function(data,type,row){
                    rownumber++;
                    return rownumber;
                }
             },
             { data: 'kode' },
             { data: 'gayabelajar' },
             { data: 'keterangan' },
             {
              data: null,
              render: function ( data, type, row ) {
                var ret = '<a href="javascript:;" class="btn btn-info btn-sm item_edit" data="'+row.kode+'">Update</a>';
                ret+= '<a href="javascript:;" class="btn btn-danger btn-sm item_hapus" data="'+row.kode+'">Delete</a>';
                return ret;
               }
             }
             ]
        });

        //Add Barang
        $('#btn_simpan').on('click',function(){
            var kode=$('#kode1').val();
            var gayabelajar=$('#gayabelajar1').val();
            var keterangan=$('#keterangan1').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('gb/C_saran/add') ?>",
                dataType : "JSON",
                data : {kode:kode, gayabelajar:gayabelajar, keterangan:keterangan},
                success: function(data){
                    $('[name="kode_add"]').val("");
                    $('[name="gayabelajar_add"]').val("");
                    $('[name="keterangan_add"]').val("");
                    $('#ModalAdd').modal('hide');
                    // tampil_data();
                    rownumber=0;
                    tableajax.ajax.reload();
                }
            });
            return false;
        });

        //GET UPDATE
        $('#show_data').on('click','.item_edit',function(){
            var id=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('gb/C_saran/where') ?>",
                dataType : "JSON",
                data : {id:id},
                success: function(data){
                    $.each(data,function(kode, pertanyaan, nilai){
                        $('#ModalUpdate').modal('show');
                        $('[name="kode_edit"]').val(data.kode);
                        $('[name="gayabelajar_edit"]').val(data.gayabelajar);
                        $('[name="keterangan_edit"]').val(data.keterangan);
                    });
                }
            });
            return false;
        });

        //Update Proses
        $('#btn_update').on('click',function(){
            var kode=$('#kode2').val();
            var gayabelajar=$('#gayabelajar2').val();
            var keterangan=$('#keterangan2').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('gb/C_saran/update') ?>",
                dataType : "JSON",
                data : {kode:kode, gayabelajar:gayabelajar, keterangan:keterangan},
                success: function(data){
                    $('[name="kode_edit"]').val("");
                    $('[name="gayabelajar_edit"]').val("");
                    $('[name="keterangan_edit"]').val("");
                    $('#ModalUpdate').modal('hide');
                    // tampil_data();
                    rownumber=0;
                    tableajax.ajax.reload();
                }
            });
            return false;
        });


        //GET HAPUS
        $('#show_data').on('click','.item_hapus',function(){
            var id=$(this).attr('data');
            $('#ModalDelete').modal('show');
            $('[name="kode"]').val(id);
        });

        //Hapus Barang
        $('#btn_hapus').on('click',function(){
            var kode=$('#textkode').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('gb/C_saran/delete') ?>",
                dataType : "JSON",
                data : {kode: kode},
                success: function(data){
                    $('#ModalDelete').modal('hide');
                    // tampil_data();
                    rownumber=0;
                    tableajax.ajax.reload();
                }
            });
            return false;
        });

    });

</script>

</body>

</html>
