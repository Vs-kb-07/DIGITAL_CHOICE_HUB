<?php
    session_start();
    session_destroy();
    echo '<script>
                    alert("Loggin Out...!");
            </script>';
    header("location: ../");
?>