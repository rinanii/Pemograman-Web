<html>
    <head>
        <title> Praktikum form data siswa </title>
    </head>
    <body>
        <form action="prosesDatasiswa.php" method="post">
            <h2> FORMULIR DATA SISWA </h2>
            <table width="550">
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:     <input type="text" name="namalkp" size="30"></td>
                </tr>
                <tr>
                    <td>Nama Panggilan</td>
                    <td>:     <input type="text" name="namapgl" size="30"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:     <input checked type="radio" name="jk" value="Laki-laki">Laki-laki
                              <input type="radio" name="jk" value="Perempuan">Perempuan
                </td>
                </tr>
                <tr>
                    <td>Tempat dan Tanggal lahir</td>
                    <td>:     <input type="text" name="ttl"></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>
                    :     <select name="kelas">
                          <option value="XI RPL 2"> XI RPL 2</option>
                          <option value="XI RPL 1">XI RPL 1</option>
                          <option value="X RPL 2">X RPL 2</option>
                          <option value="X RPL 1">X RPL 1</option>
                    </select></td>
                </tr>
                <tr>
                    <td>
                        <label for="alamat">Alamat</label>
                    </td>
                    <td>:     <textarea name="alamat" cols="40" rows="5"></textarea></td>
                </tr>
                <tr>
                    <td>
                        <label for="hobi">Hobi</label>
                    </td>
                    <td>:     <input type="checkbox" name="hobi" value="Membaca"> Membaca<br/>
                              <input type="checkbox" name="hobi" value="Menulis"> Menulis<br/>
                              <input type="checkbox" name="hobi" value="Mendesain"> Mendesain<br/>
                              <input type="checkbox" name="hobi" value="Main Game"> Main Game<br/>
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> <input type="submit" name="Lihat Hasil" value="Lihat Hasil"> </td>
                </tr>
            </table>
        </form>
    </body>
</html>