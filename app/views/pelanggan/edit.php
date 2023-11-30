<?php

$gol = new App\Models\Golongan;
$golongan = $gol->show();

$user = new App\Models\User;
$users = $user->show();

?>
<h2>Input Pelanggan</h2>

<form action="<?php echo URL; ?>/pelanggan/update" method="post">
<input type="hidden" name="id" value="<?php echo $data['row']['pel_id']; ?>">
    <table>
        <tr>
            <td>Golongan</td>
            <td>
                <select name="id_gol">
                    <?php foreach ($golongan as $gol) { ?>
                        <option value="<?php echo $gol['gol_id']; ?>" <?php echo ($data['row']['pel_id_gol'] == $gol['gol_id']) ? 'selected' : ''; ?>>
                            <?php echo $gol['gol_nama']; ?>
                        </option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>NO PELANGGAN</td>
            <td><input type="text" name="no" value="<?php echo $data['row']['pel_no']; ?>" required></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="nama" value="<?php echo $data['row']['pel_nama']; ?>" required></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><input type="text" name="alamat" value="<?php echo $data['row']['pel_alamat']; ?>" required></td>
        </tr>
        <tr>
            <td>HP</td>
            <td><input type="text" name="hp" value="<?php echo $data['row']['pel_hp']; ?>" required></td>
        </tr>
        <tr>
            <td>NO KTP</td>
            <td><input type="text" name="pel_ktp"value="<?php echo $data['row']['pel_ktp']; ?>" required></td>
        </tr>
        <tr>
            <td>NO SERI</td>
            <td><input type="text" name="seri" value="<?php echo $data['row']['pel_seri']; ?>" required></td>
        </tr>
        <tr>
            <td>NO METERAN</td>
            <td><input type="text" name="meteran" value="<?php echo $data['row']['pel_meteran']; ?>" required></td>
        </tr>
        <tr>
            <td>STATUS AKTIF</td>
            <td>
                <input type="radio" name="aktif" value="Y" <?php echo $data['row']['pel_aktif'] == "Y" ? 'checked' : ''; ?>> Y (Yes)
                <input type="radio" name="aktif" value="N" <?php echo $data['row']['pel_aktif'] == "N" ? 'checked' : ''; ?>> N (No)
            </td>
        </tr>
        <tr>
            <td>Level</td>
            <td>
                <select name="id_user">
                    <?php foreach ($users as $us) { ?>
                        <option value="<?php echo $us['user_id']; ?>" <?php echo ($data['row']['pel_id_user'] == $us['user_id']) ? 'selected' : ''; ?>>
                            <?php echo $us['user_name']; ?>
                        </option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>