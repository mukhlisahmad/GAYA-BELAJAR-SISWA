<?php
$this->load->view('main/header');
$this->load->view('main/navbar');
?>
<section>
<div class="card">
<div id="page-wrapper">

    <div class="card-header">
        <div class="col-lg-12">
		<h1 class="page-header">Data Pertanyaan</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="card-body">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="#" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#ModalAdd"><span class="fa fa-plus"></span> Add</a>
                </div>
                <!-- /.panel-heading -->
                <div class="table-responsive">
                    <table  class="table table-striped table-bordered table-hover" id="myTable">
                        <thead class="table-dark">
                            <tr>
                                <th>No.</th>
                                <th>Kode</th>
                                <th>No. Soal</th>
                                <th>Nama</th>
                                <th>Nilai</th>
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
                        <label for="kode1" class="form-label">Kode</label>
                        <input type="text" class="form-control" id="kode1" name="kode_add">
                    </div>
                    <div class="mb-3">
                        <label for="nosoal1" class="form-label">No. Soal</label>
                        <input type="number" class="form-control" id="nosoal1" name="nosoal_add">
                    </div>
                    <div class="mb-3">
                        <label for="pertanyaan1" class="form-label">Pertanyaan</label>
                        <input type="text" class="form-control" id="pertanyaan1" name="pertanyaan_add">
                    </div>
                    <div class="mb-3">
                        <label for="nilai1" class="form-label">Gaya Belajar</label>
                        <select class="form-select" id="nilai1" name="nilai_add">
                            <option value="A">Auditory</option>
                            <option value="V">Visual</option>
                            <option value="K">Kinesthetic</option>
                        </select>
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
                        <label for="kode2" class="form-label">Kode</label>
                        <input type="text" class="form-control" id="kode2" name="kode_edit" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="nosoal2" class="form-label">No. Soal</label>
                        <input type="number" class="form-control" id="nosoal2" name="nosoal_edit">
                    </div>
                    <div class="mb-3">
                        <label for="pertanyaan2" class="form-label">Pertanyaan</label>
                        <input type="text" class="form-control" id="pertanyaan2" name="pertanyaan_edit">
                    </div>
                    <div class="mb-3">
                        <label for="nilai2" class="form-label">Gaya Belajar</label>
                        <select class="form-select" id="nilai2" name="nilai_edit">
                            <option value="A">Auditory</option>
                            <option value="V">Visual</option>
                            <option value="K">Kinesthetic</option>
                        </select>
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
                    <button type="button" class="btn btn-danger" id="btn_hapus">Delete</button>
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
    $(document).ready(function(){


        var rownumber = 0;
        var tableajax = $('#myTable').DataTable({
        	responsive: true,
            ajax: '<?php echo base_url("gb/C_pertanyaan/getAjax") ?>',
            columns: [
             {
                data: null,
                render: function(data,type,row){
                    rownumber++;
                    return rownumber;
                }
             },
             { data: 'kode' },
             { data: 'nosoal' },
             { data: 'pertanyaan' },
             { data: 'nilai' },
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

        //Add
        $('#btn_simpan').on('click',function(){
            var kode=$('#kode1').val();
            var nosoal=$('#nosoal1').val();
            var pertanyaan=$('#pertanyaan1').val();
            var nilai=$('#nilai1').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('gb/C_pertanyaan/add') ?>",
                dataType : "JSON",
                data : {kode:kode, nosoal:nosoal, pertanyaan:pertanyaan, nilai:nilai},
                success: function(data){
                    $('[name="kode_add"]').val("");
                    $('[name="nosoal_add"]').val("");
                    $('[name="pertanyaan_add"]').val("");
                    $('[name="nilai_add"]').val("");
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
                url  : "<?php echo base_url('gb/C_pertanyaan/where') ?>",
                dataType : "JSON",
                data : {id:id},
                success: function(data){
                    $.each(data,function(kode, pertanyaan, nilai){
                        $('#ModalUpdate').modal('show');
                        $('[name="kode_edit"]').val(data.kode);
                        $('[name="nosoal_edit"]').val(data.nosoal);
                        $('[name="pertanyaan_edit"]').val(data.pertanyaan);
                        $('[name="nilai_edit"]').val(data.nilai);
                    });
                }
            });
            return false;
        });

        //Update Proses
        $('#btn_update').on('click',function(){
            var kode=$('#kode2').val();
            var nosoal=$('#nosoal2').val();
            var pertanyaan=$('#pertanyaan2').val();
            var nilai=$('#nilai2').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('gb/C_pertanyaan/update') ?>",
                dataType : "JSON",
                data : {kode:kode, nosoal:nosoal, pertanyaan:pertanyaan, nilai:nilai},
                success: function(data){
                    $('[name="kode_edit"]').val("");
                    $('[name="nosoal_edit"]').val("");
                    $('[name="pertanyaan_edit"]').val("");
                    $('[name="nilai_edit"]').val("");
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
                url  : "<?php echo base_url('gb/C_pertanyaan/delete') ?>",
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
