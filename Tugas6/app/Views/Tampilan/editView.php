<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
<center>
        <form action="<?= base_url('view/update/'.$getData->id);?>" method="POST">
        <input type="hidden" name="id" value="<?= $getData->id; ?>">
            <table border="1">
                <tr>
                    <td>Nim</td>
                    <td>:</td>
                    <td><input type="text" name="nim" value="<?= $getData->nim; ?>" size="28"></td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><input type="text" name="nama_lengkap" value="<?= $getData->nama_lengkap; ?>" size="28"></td>
                </tr>
                <tr>
                    <td>Kota asal</td>
                    <td>:</td>
                    <td><input type="text" name="kota_asal" value="<?= $getData->kota_asal; ?> " size="28"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><input type="date" name="tanggal_lahir" value="<?= $getData->tanggal_lahir; ?>" placeholder="YYYY-MM-DD"></td>
                </tr>
                <tr>
                    <td>Nama Orang Tua</td>
                    <td>:</td>
                    <td><input type="text" name="nama_ortu" value="<?= $getData->nama_ortu; ?>" size="28"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea name="alamat_ortu" value="" cols="30" rows="10"><?= $getData->alamat_ortu; ?></textarea></td>
                </tr>
                <tr>
                    <td>Kodepos</td>
                    <td>:</td>
                    <td><input type="number" name="kodepos" value="<?= $getData->kodepos; ?>" size="28"></td>
                </tr>
                <tr>
                    <td>Nomor Telepon</td>
                    <td>:</td>
                    <td><input type="text" name="nomor_telepon" value="<?php echo $getData->nomor_telepon; ?>" size="28"></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td>
                    <select name="status">
                        <option value="" selected> <?php if($getData->status == "WREDA" || $getData->status == "TAMA"){echo $getData->status;}?></option>
                        <option value="">TAMA</option>
                        <option value="">WREDA</option>                   
                    </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="simpan" value="Simpan"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>