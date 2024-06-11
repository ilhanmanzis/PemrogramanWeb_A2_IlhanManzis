<!-- button triger -->
<button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Data</button>
<!-- button triger -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Siswa</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>NISN</th>
                        <th>Nama</th>
                        <th>Angkatan</th>
                        <th>Jurusan</th>
                        <th>Kelas</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dataSiswa as $row) : ?>
                        <tr>
                            <td> <?= $row['nisn'] ?> </td>
                            <td><?= $row['nama'] ?></td>
                            <td><?= $row['angkatan']['nama'] ?></td>
                            <td><%= siswa.jurusan.name %> </td>
                            <td><%= siswa.kelas.name %></td>
                            <td><%= siswa.alamat %></td>
                            <td>
                                <form action="/siswa/<%= siswa._id %>?_method=Delete" method="post">
                                    <button type="submit" class="btn btn-sm btn-danger" onclick='return confirm("Apakah yakin ingin menghapus data?")'>Hapus</button>
                                    <a href="#" class="view_data btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#myModal" data-id="<%= siswa._id%>">Edit</a>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>
        </div>
    </div>
</div>
<!-- Modal -->


<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Siswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close">x</button>
            </div>
            <div class="modal-body" id="datasiswa">

            </div>
        </div>
    </div>
</div>


<script>
    document.querySelectorAll('.view_data').forEach(function(e) {
        e.addEventListener('click', function() {
            const idSiswa = this.getAttribute('data-id');
            axios.get(`/editdatasiswa/${idSiswa}`)
                .then((response) => {
                    document.getElementById('datasiswa').innerHTML = response.data;
                    document.getElementById('myModal').modal('show');
                })
                .catch((err) => {
                    console.error('error : ', err);
                })
        })
    })
</script>