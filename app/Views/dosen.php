<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Coba</title>
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                <?php if (!empty (session()->getFlashdata('message'))): ?>

                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>
                            <?php echo session()->getFlashdata('message'); ?>
                        </strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                <?php endif ?>


                <a href="" class="btn btn-md btn-success mb-3" data-toggle="modal" data-target="#exampleModalCenter">TAMBAH
                    DATA</a>
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>Kode Dosen</th>
                            <th>Nama Dosen</th>
                            <th>Status Dosen</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($DataDosen as $dosen): ?>

                            <tr>
                                <td>
                                    <?= $no++ ?>
                                </td>
                                <td>
                                    <?php echo $dosen['kode_dosen'] ?>
                                </td>
                                <td>
                                    <?php echo $dosen['nama_dosen'] ?>
                                </td>
                                <td>
                                    <?php echo $dosen['status_dosen'] ?>
                                </td>
                                <td class="text-center">
                                    <a href="/dosen/update/<?= $dosen['id_dosen']; ?>">Edit</a>
                                    <a href="/dosen/delete/<?= $dosen['id_dosen']; ?>">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Dosen</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('dosen') ?>" method="POST">
                        <div class="form-group">
                            <label for="kode_dosen">Kode</label>
                            <input type="text" class="form-control" name="kode_dosen" id="kode_dosen"
                                placeholder="Kode Dosen">
                        </div>
                        <div class="form-group">
                            <label for="nama_dosen">Nama</label>
                            <input type="text" class="form-control" name="nama_dosen" id="nama_dosen"
                                placeholder="Nama Dosen">
                        </div>
                        <div class="form-group">
                            <label for="status_dosen">Status</label>
                            <input type="text" class="form-control" name="status_dosen" id="status_dosen"
                                placeholder="Status Dosen">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <input type="submit" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>