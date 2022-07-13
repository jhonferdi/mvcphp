<?php

class popMessage {
    public static function setPop($pesan, $aksi, $type){
        $_SESSION['pop'] = ['pesan'=>$pesan, 'aksi'=>$aksi, 'type'=>$type];
    }

    public static function pop() {
        if (isset($_SESSION['pop'])){
            echo '<div class="alert alert-' . $_SESSION['pop']['type'] . ' alert-dismissible fade show" role="alert">
                    Data Mahasiswa <strong>' . $_SESSION['pop']['pesan'] . '</strong> ' . $_SESSION['pop']['aksi'] . '
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>';
        }
        unset($_SESSION['pop']);
    }
}