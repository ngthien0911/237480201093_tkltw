<select name="nam">
    <?php
    $nam_hien_tai = date("Y"); 
    for ($i = 1900; $i <= $nam_hien_tai; $i++) {
        echo "<option value='$i'>$i</option>";
    }
    ?>
</select>