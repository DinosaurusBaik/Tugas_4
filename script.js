document.getElementById('submit_js').addEventListener('click', function() {
    // Mengambil Data
    const npm = document.getElementById('npm').value;
    const nama = document.getElementById('nama').value.toUpperCase();
    const alamat = document.getElementById('alamat').value.toUpperCase();
    const tempat_lahir = document.getElementById('tempat_lahir').value;
    const tanggal_lahir = document.getElementById('tanggal_lahir').value;
    const jenis_kelamin = document.querySelector('input[name="jenis_kelamin"]:checked').value;
    const hobi = document.getElementById('hobi').value;
  
    // Menampilkan Data
    const resultDiv = document.getElementById('result_js');
    resultDiv.innerHTML = `
      <h2>Data Mahasiswa (Diproses Dengan JavaScript):</h2>
      NPM: ${npm} <br>
      Nama: ${nama} <br>
      Alamat: ${alamat} <br>
      Tempat Lahir: ${tempat_lahir} <br>
      Tanggal Lahir: ${tanggal_lahir} <br>
      Jenis Kelamin: ${jenis_kelamin} <br>
      Hobi: ${hobi} <br>
    `;
  });
  
