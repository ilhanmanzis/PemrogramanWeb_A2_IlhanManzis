<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data Siswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
            </div>
            <div class="modal-body">
                <form action="/siswa" method="POST">
                    <input type="text" name="name" placeholder="Nama Siswa" class="form-control mb-2" required>
                    <select name="angkatan" class="form-control mb-2">
                        <option selected="">-Pilih Angkatan-</option>
                        <% for(let angkatan of angkatans){ %>
                        <option value="<%= angkatan.name %>"><%= angkatan.name %></option>
                        <% } %>
                    </select>
                    <select name="jurusan" class="form-control mb-2">
                        <option selected="">-Pilih Jurusan-</option>
                        <% for(let jurusan of jurusans){ %>
                        <option value="<%= jurusan.name %>"><%= jurusan.name %></option>
                        <% } %>
                    </select>
                    <select name="kelas" class="form-control mb-2">
                        <option selected="">-Pilih Kelas-</option>
                        <% for(let kelas of kelass){ %>
                        <option value="<%= kelas.name %>"><%= kelas.name %></option>
                        <% } %>
                    </select>
                    <textarea name="alamat" class="form-control mb-2" placeholder="Alamat Siswa"></textarea>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="Submit" name="simpan" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>